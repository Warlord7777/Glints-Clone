<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;
use App\Models\Job_vacancy;
use App\Models\UserDesc;
use App\Models\Company;
use App\Models\Consultation;
use App\Models\Notification;
use App\Models\Admin;
use App\Models\User;
use App\Models\Blog;
use App\Models\Order;
use App\Models\Expertclass;
use App\Models\ExpertclassApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Mail\TestSendingEmail;
use App\Mail\mailtoCompany;
use App\Mail\DeclinedSendingEmail;

class AdminController extends Controller
{
    public function index(){
        $user_count = UserDesc::count();
        $company_count = Company::count();
        $job_count = Job_vacancy::count();
        $blog_count = Blog::count();
        $class_count = Expertclass::count();
        $consultation_count = Consultation::count();

        $experts = ExpertclassApplication::all();
        $consultations = Consultation::all();
        $blogs = Blog::all();
        $expertclasses = Expertclass::all();

        return view('admin.dashboard')->with([
            'user_count' => $user_count,
            'company_count' => $company_count,
            'job_count' => $job_count,
            'blog_count' => $blog_count,
            'class_count' => $class_count,
            'consultation_count' => $consultation_count,
            'experts' => $experts,
            'consultations' => $consultations,
            'blogs' => $blogs,
            'expertclasses' => $expertclasses,
            ]);
    }
    public function showProfile(){
        $profile = Admin::where('admin_id', auth()->user()->Admin->admin_id)->first();
        return view('admin.profile')->with([
            'profile' => $profile,
        ]);
    }
    public function showUpdateProfile(){
        $profile = Admin::where('admin_id', auth()->user()->Admin->admin_id)->first();
        return view('admin.profileUpdate')->with([
            'profile' => $profile,
        ]); 
    }
    public function updateProfile(Request $request){
        $validatedData = $request->validate([
            'upload' => 'image|file',
            'first_name' => 'required',
            'last_name' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'status' => 'required', 
            'citizenship' => 'required',
        ]);
        $validatedData['upload'] = $request->oldImage;
        if($request->file('upload')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['upload'] = $request->file('upload')->store('profile');
        }
        Admin::updateOrInsert(['admin_id' => auth()->user()->Admin->admin_id],[
            'profile_picture' => $validatedData['upload'],
            'no_hp' => $validatedData['telephone'],
            'usia' => $validatedData['age'],
            'jenis_kelamin' => $validatedData['gender'],
            'alamat' => $validatedData['address'],
            'status_kependudukan' => $validatedData['status'],
            'kewarganegaraan' => $validatedData['citizenship'],
            'updated_at' => now(),
        ]);
        User::updateOrInsert(['id' => auth()->user()->Admin->admin_id],[
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'],
        ]);
        return redirect('admin/profile');
    }
    public function showExpertUser(Request $request)
    {
        $user = UserDesc::where('user_id', $request->user_id)->first();
        if ($request->approve == 'approve') {
            UserDesc::where('user_id', $request->user_id)->update(['expert' => 1]);
            ExpertclassApplication::where('application_id', $request->application_id)->update(['status' => 1,]);

            Notification::insert([
                'user_id' => $request->user_id,
                'notification_message' => '<span class="">Selamat <b>' . $user->User->first_name . '</b>, pendaftaran anda sebagai
                seorang
                <b><i>Expert</i></b> telah <b class="text-success"> diterima</b> oleh Team Glints, kini anda memiliki
                akses
                dalam membuat <b><i>Expert Class.</i></b></span>
                <p class="text-muted">' . now() . '</p>',
                'created_at' => now(),
                'updated_at' => now(),

            ]);

        } elseif ($request->reject == 'reject') {
            UserDesc::where('user_id', $request->user_id)->update(['expert' => 0]);
            ExpertclassApplication::where('application_id', $request->application_id)->update(['status' => -1,]);
            Notification::insert([
                'user_id' => $request->user_id,
                'notification_message' => '<span class="">Mohon maaf <b>' . $user->User->first_name . '</b>, pendaftaran anda sebagai
                seorang
                <b><i>Expert</i></b> <b class="text-danger">ditolak</b> </span>
                <p class="text-muted">' . now() . '</p>',
                'created_at' => now(),
                'updated_at' => now(),

            ]);
        }
        $experts = ExpertclassApplication::all();
        return view('admin.expertUser')->with([
            'experts' => $experts,
        ]);
    }
  public function showExpertClass(Request $request)
    {
        $order = Order::where('order_id', $request->order_id)->first();
        if ($request->approve == 'approve') {
            Order::where('order_id', $request->order_id)->update(['status' => 1]);
            Mail::to($order->UserDesc->User->email)->send(new TestSendingEmail($order));

            Notification::insert([
                'user_id' => $order->UserDesc->user_id,
                'notification_message' => '<span class="">Pembayaran anda pada Expert Class <b>'. $order->Expertclass->class_title .'</b> <b class:"text-success">
                berhasil</b>, silahkan cek Email yang sudah terkirim untuk melihat invoice.</span>
                <p class="text-muted">' . now() . '</p>',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            Notification::insert([
                'user_id' => $order->Expertclass->UserDesc->user_id,
                'notification_message' => '<span class="">User <b>'. $order->UserDesc->User->first_name . ' ' . $order->UserDesc->User->last_name . '</b> dengan email <b>'. $order->UserDesc->User->email .'</b> telah membeli tiket Expert Class anda <b>"'. $order->Expertclass->class_title .'".</b> Jangan lupa untuk mengirim detail informasi kelas anda minimal satu hari sebelum kelas dimulai.
                </span>',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } elseif ($request->reject == 'reject') {
            Order::where('order_id', $request->order_id)->update(['status' => -1]);
            Mail::to($order->UserDesc->User->email)->send(new DeclinedSendingEmail($order));
            Notification::insert([
                'user_id' => $order->UserDesc->user_id,
                'notification_message' => '<span class="">Pembayaran anda pada Expert Class <b>'. $order->Expertclass->class_title .'</b>
                <b class = "text-danger">gagal </b>, mohon periksa kembali pembayaran anda.</span>
                <p class="text-muted">' . now() . '</p>',
                'created_at' => now(),
                'updated_at' => now(),
    
            ]);

            
        }
        $classes = Expertclass::all();
        $payments = Order::all();
        return view('admin.expertclass')->with([
            'classes' => $classes,
            'payments' => $payments,
        ]);
    }
   
    public function showBlog(){
        $blogs = Blog::all();
        return view('admin.blog')->with([
            'blogs' => $blogs,

        ]);
    }
    public function writeBlog(Request $request){
        $validatedData = $request->validate([
            'title' => 'required',
            'topic' => 'required',
            'cover' => 'mimes:jpg,jpeg,png|required',
            'content' => 'required',
        ]);
        if($request->file('cover')){
            $validatedData['cover'] = $request->file('cover')->store('img');
        }
        Blog::insert([
            'blog_title' => $validatedData['title'],
            'topic' => $validatedData['topic'],
            'writer_id' => auth()->user()->id,
            'content' => $validatedData['content'],
            'cover' => $validatedData['cover'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect('/admin/blog');
    }
    public function deleteBlog(Request $request){
        Blog::where('blog_id', $request->blog_id)->delete();
        return redirect('/admin/blog');
    }
    public function showConsultation(){
        $consultations = Consultation::all();
        return view('admin.consultation')->with([
            'consultations' => $consultations,
        ]);
    }
    public function showConsultationDetail($id){
        $consultation = Consultation::where('id', $id)->first();
        return view('admin.consultation-detail')->with([
            'consultation' => $consultation,
        ]);
    }
    public function deleteClass(Request $request){
        if($request->delete == 'delete'){
            Expertclass::where('class_id',$request->class_id)->delete();
        }
        return redirect('/admin/expert-class');
    }
    public function showUsers(){
        $users = UserDesc::all();
        return view('admin.user')->with([
            'users' => $users,
        ]);
    }
    public function deleteUser(){
        User::where('id', request()->user_id)->delete();
        return redirect('/admin/users');
    }
    public function showCompanies(){
        $companies = Company::all();
        return view('admin.company')->with([
            'companies' => $companies,
        ]);
    }
    public function showCompanyDetail($id){
        $company = Company::where('company_id', $id)->first();
        return view('admin.companyDetail')->with([
            'company' => $company,
        ]);
    }
    public function updatePicture(Request $request){
        $validatedData = $request->validate([
            'profile_picture' => 'required|image|file',
        ]);
        $validatedData['profile_picture'] = $request->oldImage; 
        if($request->file('profile_picture')){
            $validatedData['profile_picture'] = $request->file('profile_picture')->store('profile');
        }
        Admin::updateOrInsert(['admin_id' => auth()->user()->Admin->admin_id],[
            'profile_picture' => $validatedData['profile_picture'],
        ]);
        return redirect('/admin/profile');
    }
    public function sendSchedule(Request $request){
         $validatedData = $request->validate([
            'scheduled_time' => 'required',
            'media' => 'required',   
        ]);
        Consultation::where('id', $request->id)->update([
            'status' => 1,
            'scheduled_time' => $validatedData['scheduled_time'],
            'media' => $validatedData['media'],
        ]);
        $consultation = Consultation::where('id', $request->id)->first();
        $company = Company::where('company_id', $request->user_id)->first();
        $email = User::where('id', $request->user_id)->pluck('email');
        Mail::to($email)->send(new mailtoCompany($company, $consultation));

        
        return redirect('/admin/consultation');
    }
}




//    

//     SELECT COUNT(*) INTO user_count FROM UserDesc;
//     SELECT COUNT(*) INTO company_count FROM Company;
//     SELECT COUNT(*) INTO job_count FROM Job_vacancy;
//     SELECT COUNT(*) INTO blog_count FROM Blog;
//     SELECT COUNT(*) INTO class_count FROM Expertclass;
//     SELECT COUNT(*) INTO consultation_count FROM Consultation;

  

// 
//     SELECT * INTO profile FROM Admin WHERE admin_id = (SELECT admin_id FROM `auth_user` WHERE id = auth().user().Admin.admin_id);


// 
//     SELECT * INTO profile FROM Admin WHERE admin_id = (SELECT admin_id FROM `auth_user` WHERE id = auth().user().Admin.admin_id);


//    
//     SELECT
//         request.oldImage AS upload,
//         request.first_name,
//         request.last_name,
//         request.telephone,
//         request.email,
//         request.address,
//         request.age,
//         request.gender,
//         request.status,
//         request.citizenship;


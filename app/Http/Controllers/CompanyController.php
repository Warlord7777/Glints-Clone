<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Company;
use App\Models\Bookmark;
use App\Models\Interview;
use App\Models\Job_vacancy;
use App\Models\Consultation;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\Job_application;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    public function index(Request $request){
        $companies = Company::query();

        if($request->search){
            $companies->where('company_name', 'like', '%'.$request->search.'%');
        }

        $companies = $companies->orderBy('updated_at','desc')->paginate(9);

        $rowCount = [];
    
        foreach($companies as $company){
            $rowCount[$company->company_id] = Job_vacancy::where('company_id', $company->company_id)->count();
        }

        return view('user.company', compact('companies', 'rowCount'));
    }   

    public function show($id){
        $company_name = Company::where('company_id', $id)->value('company_name');
        $job_vacancies = Job_vacancy::with('company')->where('company_id', $id)->paginate(6);

        return view('user.joblist-explore', compact('company_name'))->with('job_vacancies', $job_vacancies);
    }

    public function foryou(Request $request){
        $job_vacancies = Job_vacancy::query();
        if($request->sort == 'oldest'){
            $job_vacancies = $job_vacancies->orderBy('updated_at', 'asc');
        }else if($request->sort == 'newest'){
            $job_vacancies = $job_vacancies->orderBy('updated_at', 'desc');
        }
        $job_vacancies = $job_vacancies->limit(4)->get();
        $request->flash();
        return view('user.joblist')
        ->with(
            'job_vacancies', $job_vacancies,
        );
    }

    public function sortPage(){
          if(request('sort')){
            $job_vacancies = Job_vacancy::query();
            if(request('sort') == 'relevance'){
                $job_vacancies = $job_vacancies->all();
            }else if(request('sort') == 'oldest'){
                $job_vacancies = $job_vacancies->orderBy('created_at', 'asc')->get();
            }else if(request('sort') == 'newest'){
                $job_vacancies = $job_vacancies->orderBy('created_at', 'desc')->get();
            }else{
                $job_vacancies = $job_vacancies->all();
            }
        }else{
            $job_vacancies = Job_vacancy::all();
        }
        
    }

    public function explore(Request $request){
    //     $job_vacancies = Job_vacancy::query();
    //     if ($request->keyword || $request->location) {
    //             $job_vacancies = $job_vacancies->where(function ($query) use ($request) {
    //             if ($request->keyword != null) {
    //                 $query->where('job_name', 'like', '%' . $request->keyword . '%')
    //                     ->orWhere('job_position', 'like', '%' . $request->keyword . '%');
    //             }
    //             if ($request->location != null) {
    //                 $query->where('city', 'like', '%' . $request->location . '%')
    //                 ->orWhere('country', 'like', '%'.$request->location.'%');
    //             }
    //         });
    //     }
    //     if($request->time == 'oldest'){
    //         $job_vacancies = $job_vacancies->orderBy('updated_at', 'asc');
            
    //     }else if($request->time == 'newest'){
    //         $job_vacancies = $job_vacancies->orderBy('updated_at', 'desc');
    //     }
    //     // if($request->type != null){
    //     //     $type = implode($request->type);
    //     //     if(str_contains($type, 'magang')){
    //     //         $job_vacancies = $job_vacancies->where('job_type', 'Magang');
    //     //     }else if(str_contains($type, 'fulltime')){
    //     //         $job_vacancies = $job_vacancies->where('job_type', 'Penuh');
    //     //     }else if(str_contains($type, 'parttime')){
    //     //         $job_vacancies = $job_vacancies->where('job_type', 'Paruh');
    //     //     }else if(str_contains($type, 'Project')){
    //     //         $job_vacancies = $job_vacancies->where('job_type', 'Protek');
    //     //     }
    //     // }
    //     if ($request->type != null) {
    //         $types = $request->type;
    //         foreach ($types as $type) {
    //             if (str_contains($type, 'magang')) {
    //                 $job_vacancies = $job_vacancies->orWhere('job_type', 'Magang');
    //             }
    //             if (str_contains($type, 'fulltime')) {
    //                 $job_vacancies = $job_vacancies->orWhere('job_type', 'Penuh');
    //             }
    //             if (str_contains($type, 'parttime')) {
    //                 $job_vacancies = $job_vacancies->orWhere('job_type', 'Paruh');
    //             }
    //             if (str_contains($type, 'project')) {
    //                 $job_vacancies = $job_vacancies->orWhere('job_type', 'Protek');
    //             }
    //         }
    //     }
    //     if($request->remote == 'true'){
    //         $job_vacancies = $job_vacancies->where('job_system', 'remote');
    //     }
    //     if ($request->city != null) {
    //         $cities = $request->city;
    //         foreach ($cities as $city) {
    //             if (str_contains($city, 'jakarta')) {
    //                 $job_vacancies = $job_vacancies->orWhere('city', 'like', '%Jakarta%');
    //             }
    //             if (str_contains($city, 'tangerang')) {
    //                 $job_vacancies = $job_vacancies->orWhere('city', 'like', '%Tangerang%');
    //             }
    //             if (str_contains($city, 'bandung')) {
    //                 $job_vacancies = $job_vacancies->orWhere('city', 'like', '%Bandung%');
    //             }
    //             if (str_contains($city, 'surabaya')) {
    //                 $job_vacancies = $job_vacancies->orWhere('city', 'like', '%Surabaya%');
    //             }
    //             if (str_contains($city, 'yogyakarta')) {
    //                 $job_vacancies = $job_vacancies->orWhere('city', 'like', '%Yogyakarta%');
    //             }
    //         }
    //     }
    //     if ($request->experience != null) {
    //         $experiences = $request->experience;
    //         foreach ($experiences as $experience) {
    //             if (str_contains($experience, '<1')) {
    //                 $job_vacancies = $job_vacancies->orWhere('job_experience', '<', 1);
    //             } else if (str_contains($experience, '1-3')) {
    //                 $job_vacancies = $job_vacancies->orWhereBetween('job_experience', [1, 3]);
    //             } else if (str_contains($experience, '3-5')) {
    //                 $job_vacancies = $job_vacancies->orWhereBetween('job_experience', [3, 5]);
    //             } else if (str_contains($experience, '5-10')) {
    //                 $job_vacancies = $job_vacancies->orWhereBetween('job_experience', [5, 10]);
    //             } else if (str_contains($experience, '>10')) {
    //                 $job_vacancies = $job_vacancies->orWhere('job_experience', '>', 10);
    //             }
    //         }
    //     }
    //    $currentDateTime = Carbon::now();

    //     if ($request->diperbarui == '24-jam-terakhir') {
    //         $oneDayAgo = $currentDateTime->subDay();
    //         $job_vacancies = $job_vacancies->where('updated_at', '>=', $oneDayAgo);
    //     } else if ($request->diperbarui == 'seminggu-terakhir') {
    //         $oneWeekAgo = $currentDateTime->subWeek();
    //         $job_vacancies = $job_vacancies->where('updated_at', '>=', $oneWeekAgo);
    //     } else if ($request->diperbarui == 'sebulan-terakhir') {
    //         $oneMonthAgo = $currentDateTime->subMonth();
    //         $job_vacancies = $job_vacancies->where('updated_at', '>=', $oneMonthAgo);
    //     }

        $job_vacancies = Job_vacancy::query();

if ($request->keyword || $request->location) {
    $job_vacancies = $job_vacancies->where(function ($query) use ($request) {
        if ($request->keyword != null) {
            $query->where('job_name', 'like', '%' . $request->keyword . '%')
                ->orWhere('job_position', 'like', '%' . $request->keyword . '%');
        }
        if ($request->location != null) {
            $query->where(function ($subQuery) use ($request) {
                $subQuery->where('city', 'like', '%' . $request->location . '%')
                    ->orWhere('country', 'like', '%' . $request->location . '%');
            });
        }
    });
}

if ($request->time == 'oldest') {
    $job_vacancies = $job_vacancies->orderBy('updated_at', 'asc');
} else if ($request->time == 'newest') {
    $job_vacancies = $job_vacancies->orderBy('updated_at', 'desc');
}

if ($request->type != null) {
    $types = $request->type;
    $job_vacancies = $job_vacancies->where(function ($query) use ($types) {
        foreach ($types as $type) {
            if (str_contains($type, 'magang')) {
                $query->orWhere('job_type', 'Magang');
            }
            if (str_contains($type, 'fulltime')) {
                $query->orWhere('job_type', 'Penuh');
            }
            if (str_contains($type, 'parttime')) {
                $query->orWhere('job_type', 'Paruh');
            }
            if (str_contains($type, 'project')) {
                $query->orWhere('job_type', 'Protek');
            }
        }
    });
}

if ($request->remote == 'true') {
    $job_vacancies = $job_vacancies->where('job_system', 'remote');
}

if ($request->city != null) {
    $cities = $request->city;
    $job_vacancies = $job_vacancies->where(function ($query) use ($cities) {
        foreach ($cities as $city) {
            if (str_contains($city, 'jakarta')) {
                $query->orWhere('city', 'like', '%Jakarta%');
            }
            if (str_contains($city, 'tangerang')) {
                $query->orWhere('city', 'like', '%Tangerang%');
            }
            if (str_contains($city, 'bandung')) {
                $query->orWhere('city', 'like', '%Bandung%');
            }
            if (str_contains($city, 'surabaya')) {
                $query->orWhere('city', 'like', '%Surabaya%');
            }
            if (str_contains($city, 'yogyakarta')) {
                $query->orWhere('city', 'like', '%Yogyakarta%');
            }
        }
    });
}
// SELECT * FROM job_vacancies WHERE city LIKE '%Jakarta%' OR city LIKE '%Tangerang%' OR city LIKE '%Bandung%' OR city LIKE '%Surabaya%' OR city LIKE '%Yogyakarta%';

if ($request->experience != null) {
    $experiences = $request->experience;
    $job_vacancies = $job_vacancies->where(function ($query) use ($experiences) {
        foreach ($experiences as $experience) {
            if ($experience === '<1') {
                $query->orWhere('job_experience', '<1');
            } else if ($experience === '1-3') {
                $query->orWhere('job_experience', '1-3');
            } else if ($experience === '3-5') {
                $query->orWhere('job_experience', '3-5');
            } else if ($experience === '5-10') {
                $query->orWhere('job_experience', '5-10');
            } else if ($experience === '>10') {
                $query->orWhere('job_experience', '>10');
            }
        }
    });
}


$currentDateTime = Carbon::now();

if ($request->diperbarui == '24-jam-terakhir') {
    $oneDayAgo = $currentDateTime->subDay();
    $job_vacancies = $job_vacancies->where('updated_at', '>=', $oneDayAgo);
} else if ($request->diperbarui == 'seminggu-terakhir') {
    $oneWeekAgo = $currentDateTime->subWeek();
    $job_vacancies = $job_vacancies->where('updated_at', '>=', $oneWeekAgo);
} else if ($request->diperbarui == 'sebulan-terakhir') {
    $oneMonthAgo = $currentDateTime->subMonth();
    $job_vacancies = $job_vacancies->where('updated_at', '>=', $oneMonthAgo);
}


        $job_vacancies = $job_vacancies->paginate(6)->appends($request->all());
        $request->flash();
        return view('user.joblist-explore')->with('job_vacancies', $job_vacancies);
        
    }

    public function detail($id){
        $company_detail = Company::where('company_id', $id)->get();
        $job_vacancies = Job_vacancy::where('company_id', $id)->get();
        $bookmarks = null;
        if(Auth::check()){
            $bookmarks = Bookmark::where('user_id', auth()->user()->id)->get();
        }

        $company_name = "\"" . strtoupper(Company::where('company_id', $id)->value('company_name')) . "\"";
        $company_name = (strlen($company_name) > 12) ? substr($company_name,0,12).'..' : $company_name;

        return view('user.company-detail' ,['company_detail' => $company_detail, 'job_vacancies' => $job_vacancies, 'company_name' => $company_name, 'bookmarks' => $bookmarks]);
    }

    public function job_detail($id){
        $job_detail = Job_vacancy::where('job_vacancy_id', $id)->first();
        $recommendation = Job_vacancy::whereNot('job_vacancy_id', $id)->get()->random(4);  
        //SELECT *
        // FROM job_vacancies
        // WHERE job_vacancy_id = $id
        // ORDER BY RAND()
        // LIMIT 4;
        $skills = explode(",", $job_detail->job_skills);
        $bookmark = Bookmark::where('job_vacancy_id', $id)->first();
        return view('user.job-detail', ['recommendation' => $recommendation, 'job_detail' => $job_detail, 'skills' => $skills, 'bookmark' => $bookmark]);
    }

    public function show_apply($id){
        $job = Job_vacancy::where('job_vacancy_id', $id)->first();
        return view('user.apply', ['job' => $job]);
    }

    public function apply(Request $request){
        
        $validatedData = $request->validate([
            'application_letter' => 'required',
            'phone_number' => 'required',
            'resume' => 'mimes:pdf|max:5000|required',
        ]);

        if($request->file('resume')){
            $validatedData['resume'] = $request->file('resume')->store('resume');
        }

        Job_application::insert([
            'user_id' => auth()->user()->id,
            'job_vacancy_id' => $request->job_vacancy_id,
            'company_id' => Job_vacancy::where('job_vacancy_id', $request->job_vacancy_id)->value('company_id'),
            'application_letter' => $validatedData['application_letter'],
            'phone_number' => $validatedData['phone_number'],
            'resume' => $validatedData['resume'],
            'created_at' => now(),
            'updated_at' => now(),
            'status' => 0,
        ]);

        return redirect('/user/lamaran');
    }
    public function lamaran(){
        $applications = Job_application::where('user_id', auth()->user()->id)->get();
        return view('user.lamaran-saya')->with([
            'applications' => $applications,
        ]);
    }
    public function showCreateJob(){
        return view('perusahaan.createJob');
    }
    public function deleteJob($id){
        Job_vacancy::where('job_vacancy_id', $id)->delete();
        return redirect('/perusahaan/page/dashboard');
    }
    //DELETE FROM job_vacancies WHERE job_vacancy_id = $id;


    public function showDashboard(){
        $jobVacancies = Job_vacancy::where('company_id', auth()->user()->id)->get();
        return view('perusahaan.dashboard')->with([
            'job_vacancy' => $jobVacancies,
        ]);
    }

    public function showJob($id){
        $job = Job_vacancy::where('job_vacancy_id', $id)->first();
        $applications = Job_application::where('job_vacancy_id', $id)->get();
        return view('perusahaan.job-detail')->with([
            'job' => $job,
            'applications' => $applications,
        ]);
    }
    public function showEditJob($id){
        $job = Job_vacancy::where('job_vacancy_id', $id)->first();
        return view('perusahaan.editJob')->with([
            'job' => $job,
        ]);
    }
    public function editJob(Request $request, $id){
        $validatedData = $request->validate([
            'jobrole' => 'required',
            'posisi' => 'required',
            'kontrak' => 'required',
            'sistem' => 'required',
            'negara' => 'required',
            'kota' => 'required',
            'deskripsi' => 'required',
            'skills' => 'required',
            'gaji' => 'required',
            'experience' => 'required',
        ]);

        $job = Job_vacancy::where('job_vacancy_id', $id)->update([
            'job_name' => $validatedData['jobrole'],
            'job_position' => $validatedData['posisi'],
            'job_type' => $validatedData['kontrak'],
            'job_system' => $validatedData['sistem'],
            'country' => $validatedData['negara'],
            'job_experience' => $validatedData['experience'],
            'city' => $validatedData['kota'],
            'description' => $validatedData['deskripsi'],
            'job_skills' => implode(',', $validatedData['skills']),
            'estimated_salary' => $validatedData['gaji'],
            'updated_at' => now(),
        ]);
        return redirect('/perusahaan/page/dashboard');
    }
    public function interview($id){
        $job = Job_application::where('id', $id)->first();
        return view('perusahaan.sendInterview')->with([
            'job' => $job,
        ]);
    }
    public function sendInterview(Request $request){
        $validatedData = $request->validate([
            'date' => 'required',
            'media' => 'required',
            'link' => 'url|required',
        ]);
        Interview::insert([
            'job_application_id' => $request->job,
            'link' => $validatedData['link'],
            'media' => $validatedData['media'],
            'time' => $validatedData['date'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Job_application::where('id', $request->job)->update([
            'status' => 1,
        ]);
        //add notif
        $job = Job_application::where('id',$request->job)->first();
      
        Notification::insert([
            'user_id' => $job->user_id,
            'notification_message' => '<span class="">Dear <b>' . $job->UserDesc->User->first_name . '</b>, lamaran anda kepada perusahaan ' . $job->Company->company_name .' sebagai ' . $job->Job_vacancy->job_position. ' telah <b class = "text-success">diterima</b>, dan akan melanjutkan ke tahap berikutnya yaitu tahap interview yang akan dilaksanakan pada ' . $job->Interview->time .' melalui media ' . $job->Interview->media.'. Berikut ini adalah link interview anda : ' .$job->Interview->link .'.</span>
            <p class="text-muted">' . now() . '</p>',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/perusahaan/page/dashboard');
    }
    public function checkApplicant($id){
        $application = Job_application::where('id', $id)->first();
        return view('perusahaan.applicantDetail')->with([
            'application' => $application,
        ]);
    }
    public function checkLetter($id){
        $letter = Job_application::where('id', $id)->pluck('application_letter');
        $job_id = Job_application::pluck('job_vacancy_id'); 
        return view('perusahaan.applicationLetter')->with([
            'letter' => $letter,
            'id' => $job_id,
        ]);
    }
    public function updateStatus(Request $request){
        if($request->approve == 'approve'){
            Job_application::where('id', $request->application_id)->update([
                'status' => 2
            ]);
            $job = Job_application::where('id',$request->application_id)->first();
            Notification::insert([
                'user_id' => $job->user_id,
                'notification_message' => '<span class="">Selamat <b>' . $job->UserDesc->User->first_name . '</b>. Anda <b class ="text-success">diterima</b> di perusahaan ' . $job->Company->company_name. ' sebagai ' . $job->Job_vacancy->job_position. '. Untuk informasi lebih lanjut, silahkan hubungi perusahaan yang bersangkutan.</span>
                <p class="text-muted">' . now() . '</p>',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            //add notif
        }elseif($request->reject == 'reject'){
            Job_application::where('id', $request->id)->update([
                'status' => -1
            ]);

            $job = Job_application::where('id',$request->application_id)->first();
            Notification::insert([
                'user_id' => $job->user_id,
                'notification_message' => '<span class="">Selamat <b>' . $job->UserDesc->User->first_name . '</b>. Anda <b class = "text-danger">ditolak</b> oleh perusahaan <b>' . $job->Company->company_name. '</b> sebagai <b>' . $job->Job_vacancy->job_position. '</b>. Tetap semangat dan jangan menyerah!</span>
                <p class="text-muted">' . now() . '</p>',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
          
        }
        return redirect('/perusahaan/page/applicant-detail/'.$request->application_id);
    }
    public function download($file_name){
        $filepath = public_path('storage/resume/'.$file_name);
        // $headers = array(
        //     'Content-Type: application/pdf',
        // );
        // return Storage::download($filepath, 'Resume.pdf', $headers);
        return response()->download($filepath);
    }
    public function downloadPortfolio($file_name){
        $filepath = public_path('storage/portfolio/'.$file_name);
        // $headers = array(
        //     'Content-Type: application/pdf',
        // );
        // return Storage::download($filepath, 'Portfolio.pdf', $headers);
        return response()->download($filepath);
    }
    public function createJob(Request $request){
        $validatedData = $request->validate([
            'jobrole' => 'required',
            'posisi' => 'required',
            'kontrak' => 'required',
            'sistem' => 'required',
            'negara' => 'required',
            'kota' => 'required',
            'deskripsi' => 'required',
            'skills' => 'required',
            'gaji' => 'required',
            'experience' => 'required',
        ]);
        Job_vacancy::insert([
            'job_name' => $validatedData['jobrole'],
            'job_position' => $validatedData['posisi'],
            'job_type' => $validatedData['kontrak'],
            'job_system' => $validatedData['sistem'],
            'country' => $validatedData['negara'],
            'job_experience' => $validatedData['experience'],
            'city' => $validatedData['kota'],
            'description' => $validatedData['deskripsi'],
            'job_skills' => implode(',', $validatedData['skills']),
            'estimated_salary' => $validatedData['gaji'],
            'company_id' => auth()->user()->Company->company_id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/perusahaan/page/dashboard');
    }
    public function consult(Request $request){
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'business_email' => 'required',
            'jumlah_karyawan' => 'required',
            'industri'  => 'required',
            'posisi_pekerjaan' => 'required',
            'negara'  => 'required',
            'kebutuhan_bisnis'  => 'required',            
        ]);
        Consultation::insert([
            'client_id' => auth()->user()->id,
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'business_email' => $validatedData['business_email'],
            'status' => 0,
            'note' => $request->note,
            'company_size' => $validatedData['jumlah_karyawan'],
            'industry' => $validatedData['industri'],
            'position' => $validatedData['posisi_pekerjaan'],
            'country' => $validatedData['negara'],
            'business_requirement' => $validatedData['kebutuhan_bisnis'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $request->session()->flash('consultsuccess', 'You have successfully requested consultation! Please wait patiently, we will get back to you by 24 hours!');
        return redirect('/perusahaan/page/dashboard');
    }
    public function showEditProfile(){
        $profile = Company::where('company_id', auth()->user()->id)->first();
        return view('perusahaan.createCompany')->with([
            'profile' => $profile,
        ]);
    }
    public function showNotification(){
        $notifications = Notification::where('user_id', auth()->user()->id)->get();
        return view('user.notification')->with([
            'notifications' => $notifications,
        ]);
    }
    public function editProfile(Request $request){
        $validatedData = $request->validate([
            'company_name' => 'required',
            'company_logo' => 'mimes:jpg,jpeg,png|required',
            'company_banner' => 'mimes:jpg,jpeg,png|required',
            'company_website' => 'required',
            'company_size' => 'required',
            'company_field' => 'required',
            'company_industry' => 'required',
            'short_description' => 'required',
            'company_description' => 'required',
            'company_address' => 'required',
            'company_location' => 'required',
        ]);
        $validatedData['company_logo'] = $request->oldImage; 
        $validatedData['company_banner'] = $request->oldBanner; 
        if($request->file('company_logo')){
            $validatedData['company_logo'] = $request->file('company_logo')->store('profile');
        }
        if($request->file('company_banner')){
            $validatedData['company_banner'] = $request->file('company_banner')->store('profile');
        }
        Company::where('company_id', auth()->user()->id)->update([
            'banner' => $validatedData['company_banner'],
            'logo_company'  => $validatedData['company_logo'],
            'company_name'  => $validatedData['company_name'],
            'company_field' => $validatedData['company_field'],
            'company_location'  => $validatedData['company_location'],
            'company_size'  => $validatedData['company_size'],
            'company_industry' => $validatedData['company_industry'],
            'company_address' => $validatedData['company_address'],
            'company_website'  => $validatedData['company_website'],
            'short_description'  => $validatedData['short_description'],
            'company_description' => $validatedData['company_description'],
            'updated_at' => now()
        ]);
        return redirect('/perusahaan/page/dashboard');
    }
}

// SELECT * FROM companies;

// SELECT * FROM job_vacancies WHERE company_id = {company_id};

// SELECT * FROM job_vacancies ORDER BY updated_at ASC;

// SELECT * FROM job_vacancies ORDER BY updated_at DESC;

// SELECT * FROM job_vacancies LIMIT 4;

// SELECT * FROM job_vacancies ORDER BY created_at ASC;

// SELECT * FROM job_vacancies ORDER BY created_at DESC;

// SELECT * FROM job_vacancies;

// SELECT * FROM job_vacancies WHERE job_name LIKE '%{keyword}%' OR job_position LIKE '%{keyword}%' AND (city LIKE '%{location}%' OR country LIKE '%{location}%');

// SELECT * FROM job_vacancies WHERE job_name LIKE '%{keyword}%' OR job_position LIKE '%{keyword}%' AND (city LIKE '%{location}%' OR country LIKE '%{location}%') ORDER BY updated_at ASC;

// SELECT * FROM job_vacancies WHERE job_name LIKE '%{keyword}%' OR job_position LIKE '%{keyword}%' AND (city LIKE '%{location}%' OR country LIKE '%{location}%') ORDER BY updated_at DESC;

// SELECT * FROM job_vacancies WHERE job_type = 'Magang';

// SELECT * FROM job_vacancies WHERE job_type = 'Penuh';

// SELECT * FROM job_vacancies WHERE job_type = 'Paruh';

// SELECT * FROM job_vacancies WHERE job_type = 'Protek';

// SELECT * FROM job_vacancies WHERE job_system = 'remote';

// SELECT * FROM job_vacancies WHERE city LIKE '%Jakarta%' OR city LIKE '%Tangerang%' OR city LIKE '%Bandung%' OR city LIKE '%Surabaya%' OR city LIKE '%Yogyakarta%';

// SELECT * FROM job_vacancies WHERE job_experience < 1;

// SELECT * FROM job_vacancies WHERE job_experience BETWEEN 1 AND 3;

// SELECT * FROM job_vacancies WHERE job_experience BETWEEN 3 AND 5;

// SELECT * FROM job_vacancies WHERE job_experience BETWEEN 5 AND 10;

// SELECT * FROM job_vacancies WHERE job_experience > 10;

// SELECT * FROM job_vacancies WHERE updated_at >= {oneDayAgo};

// SELECT * FROM job_vacancies WHERE updated_at >= {oneWeekAgo};

// SELECT * FROM job_vacancies WHERE updated_at >= {oneMonthAgo};

// SELECT * FROM companies WHERE company_id = {id};

// SELECT * FROM job_vacancies WHERE company_id = {id};

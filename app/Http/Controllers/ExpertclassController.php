<?php

namespace App\Http\Controllers;

use App\Models\Expertclass;
use App\Models\ExpertclassApplication;
use App\Models\UserDesc;
use App\Models\Discount;
use App\Models\Order;
use Illuminate\Http\Request;

class ExpertclassController extends Controller
{
    public function index(){
        $marketing = Expertclass::where('category', 'marketing')->count();
        $human_resource = Expertclass::where('category', 'human resource')->count();
        $finance = Expertclass::where('category', 'finance')->count();
        $featured = Expertclass::latest()->first();
        $shorten_name = (strlen($featured->class_title) > 50) ? substr($featured->class_title,0,50).'...' : $featured->class_title;
        $shorten_description = (strlen($featured->class_description) > 240) ? substr($featured->class_description,0,240).'...' : $featured->class_description;
        $discoverclass = Expertclass::all()->random(4);
        $specialclass = Expertclass::latest()->limit(4)->get();
        $discounts = Discount::active()->orderBy('discount', 'asc')->limit(4)->pluck('class_id');
        $hotDeals = Expertclass::whereIn('class_id', $discounts)->get();
        return view("expertclass.index")->with([
            'featured' => $featured,
            'discoverclass' => $discoverclass,
            'specialclass' => $specialclass,
            'hotDeals' => $hotDeals,
            'shorten_name' => $shorten_name,
            'shorten_description' => $shorten_description,
            'marketing' => $marketing,
            'human_resource' => $human_resource,
            'finance' => $finance,
        ]);
    }

    public function category($category){
        $classes = Expertclass::where('category', $category)->get();
        return view("expertclass.kategori", compact('category'))->with('classes', $classes);
    }

    public function show(Request $request){
        $classes = Expertclass::query();
        if($request->search){
            $classes = Expertclass::where('class_title','like', '%'.$request->search.'%')
                                    ->orWhere('category', 'like', '%'.$request->search.'%');
        }
        $classes = $classes->get();
        return view("expertclass.list", compact('classes'));
    }

    public function detail($id){
        $class = Expertclass::where('class_id', $id)->first();
        $mentorId = $class->mentor_id;
        $jumlahKelasUser = Expertclass::where('mentor_id', $mentorId)->count();
        $discount = Discount::query();
        $similarClasses = Expertclass::where('category', $class->category)->whereNot('class_id', $id)->limit(4)->get();
        return view("expertclass.classDetail", compact('jumlahKelasUser'))->with([
            'class' => $class,
            'similarClasses' => $similarClasses, 
            'discount' => $discount,
        ]);
    }

    public function showregister(){
        return view("expertclass.registerExpert");
    }

    public function register(Request $request){
        $validatedData = $request->validate([
            'linkedin' => 'required|url',
            'job_experience' => 'required',
            'company_name' => 'required',
            'company_size' => 'required',
            'company_level' => 'required',
            'company_position' => 'required',
            'job_name' => 'required'
        ]);

        ExpertclassApplication::insert([
            'user_id' => auth()->user()->id,
            'status' => 0,
            'linked_in' => $validatedData['linkedin'],
            'pekerjaan' => $validatedData['job_name'],
            'perusahaan' => $validatedData['company_name'],
            'posisi_kerja' => $validatedData['company_position'],
            'level_pekerjaan' => $validatedData['company_level'],
            'ukuran_perusahaan' => $validatedData['company_size'],
            'pengalaman_kerja' => $validatedData['job_experience'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $request->session()->flash('successregis', 
                        '<p><i>Selangkah lebih dekat untuk menjadi seorang expert!</i></p>
                        <p>Dengan menjadi seorang expert, kamu dapat memiliki akses dalam membuat suatu kelas yang dinamakan <i>Expert Class.</i></p>
                        <p>Dengan <i>Expert Class,</i> kamu berkesempatan untuk bisa memberikan wawasan kamu kepada seluruh user Glints yang ada di Indonesia, bahkan di seluruh dunia.</p>
                        <hr>
                        <p class="mb-0 text-muted fw-bold">Lamaran kamu sedang ditinjau oleh tim glints, kami akan mengirimkan notifikasi dalam waktu paling lama 1x24 jam.
                        </p>');
        return view("expertclass.confirming");
    }

    public function buy($id){
        $class = Expertclass::where('class_id', $id)->get();
        return view("expertclass.buy")->with('class', $class);
    }

    public function payment_page($id){
        $class = Expertclass::where('class_id', $id)->get();
        return view("expertclass.payment")->with('class', $class);
    }

    public function showCreate(){
        return view("expertclass.makeClass");
    }

    public function pay($id, Request $request){
        $class = Expertclass::where('class_id', $id)->first();
        $validatedData = $request->validate([
            'payment_method' => 'required',
            'bank_number' => 'required',
            'proof' => 'mimes:jpg,jpeg,png|required|max:5000',
        ]);
        if($request->file('proof')){
            $validatedData['proof'] = $request->file('proof')->store('proof');
        }

        Order::insert([
            'user_id' => auth()->user()->id,
            'class_id' => $class->class_id,
            'discount_id' => $class->Discount->discount_id,
            'payment_method' => $validatedData['payment_method'],
            'bank_number' => $validatedData['bank_number'],
            'proof' => $validatedData['proof'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $request->session()->flash('successpayment', 'Mohon Menunggu Verifikasi Pembayaran, Cek E-mail Anda Secara Berkala!');
        return redirect("/expertclass");
    }

    public function create(Request $request){
        $validatedData = $request->validate([
            'class_category' => 'required',
            'discount' => 'required|numeric|between:0,1',
            'language' => 'required',
            'class_title' => 'required',
            'class_time' => 'required',
            'class_type' => 'required',
            'class_description' => 'required',
            'class_price' => 'required',
            'facility' => 'required',
            'image' => 'mimes:jpg,jpeg,png|required|max:10000',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('expertclass_image');
        }

        $expertclass = Expertclass::create([
            'mentor_id' => auth()->user()->id,
            'category' => $validatedData['class_category'],
            'class_title' => $validatedData['class_title'],
            'date_time' => $validatedData['class_time'],
            'language' => $validatedData['language'],
            'class_type' => $validatedData['class_type'],
            'class_description' => $validatedData['class_description'],
            'facility' => $validatedData['facility'],
            'price' => $validatedData['class_price'],
            'class_image' => $validatedData['image'],
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $expertclass_id = $expertclass->class_id;

        Discount::insert([
            'discount' => $validatedData['discount'],
            'class_id' => $expertclass_id,
            'starting_time' => $request->starting_time,
            'ending_time' => $request->ending_time,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $request->session()->flash('createclass', 'Silahkan Melihat Kelas-kelas yang Anda buat di halaman Kelas Saya!');
        return redirect('/expertclass');
    }
}

// The given PHP code is a Laravel controller for managing expert classes. Here's the equivalent SQL code:

// ```sql
// -- Create the necessary tables if they don't exist

// CREATE TABLE IF NOT EXISTS expertclasses (
//     class_id INT AUTO_INCREMENT PRIMARY KEY,
//     mentor_id INT NOT NULL,
//     category VARCHAR(255) NOT NULL,
//     class_title VARCHAR(255) NOT NULL,
//     date_time DATETIME NOT NULL,
//     language VARCHAR(255) NOT NULL,
//     class_type VARCHAR(255) NOT NULL,
//     class_description TEXT NOT NULL,
//     facility TEXT NOT NULL,
//     price DECIMAL(10, 2) NOT NULL,
//     class_image VARCHAR(255) NOT NULL,
//     created_at DATETIME NOT NULL,
//     updated_at DATETIME NOT NULL
// );

// CREATE TABLE IF NOT EXISTS expertclass_applications (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     user_id INT NOT NULL,
//     status INT NOT NULL,
//     linked_in VARCHAR(255) NOT NULL,
//     pekerjaan VARCHAR(255) NOT NULL,
//     perusahaan VARCHAR(255) NOT NULL,
//     posisi_kerja VARCHAR(255) NOT NULL,
//     level_pekerjaan VARCHAR(255) NOT NULL,
//     ukuran_perusahaan VARCHAR(255) NOT NULL,
//     pengalaman_kerja VARCHAR(255) NOT NULL,
//     created_at DATETIME NOT NULL,
//     updated_at DATETIME NOT NULL
// );

// CREATE TABLE IF NOT EXISTS discounts (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     discount DECIMAL(10, 2) NOT NULL,
//     class_id INT NOT NULL,
//     starting_time DATETIME NOT NULL,
//     ending_time DATETIME NOT NULL,
//     created_at DATETIME NOT NULL,
//     updated_at DATETIME NOT NULL
// );

// CREATE TABLE IF NOT EXISTS orders (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     user_id INT NOT NULL,
//     class_id INT NOT NULL,
//     discount_id INT NOT NULL,
//     payment_method VARCHAR(255) NOT NULL,
//     bank_number VARCHAR(255) NOT NULL,
//     proof VARCHAR(255) NOT NULL,
//     created_at DATETIME NOT NULL,
//     updated_at DATETIME NOT NULL
// );

// -- Create the necessary indexes if they don't exist

// CREATE INDEX IF NOT EXISTS idx_expertclasses_category ON expertclasses (category);
// CREATE INDEX IF NOT EXISTS idx_expertclasses_mentor_id ON expertclasses (mentor_id);
// CREATE INDEX IF NOT EXISTS idx_discounts_class_id ON discounts (class_id);
// CREATE INDEX IF NOT EXISTS idx_orders_user_id ON orders (user_id);
// CREATE INDEX IF NOT EXISTS idx_orders_class_id ON orders (class_id);
// CREATE INDEX IF NOT EXISTS idx_orders_discount_id ON orders (discount_id);

// -- Insert data into the tables

// -- No data provided in the PHP code for initial insertion.

// -- Create the necessary views

// -- No views mentioned in the PHP code.

// -- Create the necessary stored procedures

// -- No stored procedures mentioned in the PHP code.
// ```

// Please note that the SQL code only creates the necessary tables, indexes, and provides a placeholder for inserting data. You would need to define the appropriate data types and constraints based on your specific requirements.
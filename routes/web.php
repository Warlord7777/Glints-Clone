<?php

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ExpertclassController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'glints']);

Route::get('/error', function(){
    return view('error.error');
})->name('error_403')->middleware('auth');

Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

//forget password
Route::get('/forgotpassword', function () {
    return view('auth.forgot');
})->middleware('guest')->name('password.request');

Route::post('/forgotpassword', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);

})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function (string $token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:6|confirmed',
    ]);
 
    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));
 
            $user->save();
 
            event(new PasswordReset($user));
        }
    );
 
    return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');

//blogs
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/post/{id}', [BlogController::class, 'show']);
Route::get('/blog/kategori/{kategori}', [BlogController::class, 'showCategory']);
Route::get('/blog/list', [BlogController::class, 'showBlogs']);
Route::get('/blog/writer/{id}', [BlogController::class, 'showWriter']);

Route::middleware('user-access:guest')->group(function(){
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
    Route::get('/register/company', [RegisterController::class, 'showCompanyRegistrationForm'])->name('registerCompany');
    Route::post('/register/company', [RegisterController::class, 'registerCompany']);
});

Route::middleware('user-access:guest,user')->group(function () {
    Route::get('/companies', [CompanyController::class,'index']);
    Route::get('/companies/detail/{id}', [CompanyController::class,'detail']);
    Route::get('/companies/{id}', [CompanyController::class,'show']); //lowongan yg ada di suatu perusahaan
    Route::get('/opportunities', [CompanyController::class,'foryou']); // halaman foryou 
    Route::get('/explore', [CompanyController::class,'explore']); // semua lowongan
    Route::get('/job-detail/{id}', [CompanyController::class,'job_detail']); //detail pekerjaan
    Route::get('/expertclass', [ExpertclassController::class,'index']);
    Route::get('/expertclass/category/{category}', [ExpertclassController::class,'category']);
    Route::get('/expertclass/list', [ExpertclassController::class,'show']);
    Route::get('/expertclass/detail/{id}', [ExpertclassController::class,'detail']);
  
});
// Route::middleware('user-access:user,guest')->group(function(){
//     // Route::get('/companies', [CompanyController::class,'index']);
//     // Route::get('/companies/detail/{id}', [CompanyController::class,'detail']);
//     // Route::get('/companies/{id}', [CompanyController::class,'show']); //lowongan yg ada di suatu perusahaan
//     // Route::get('/opportunities', [CompanyController::class,'foryou']); // halaman foryou 
//     // Route::get('/explore', [CompanyController::class,'explore']); // semua lowongan
//     // Route::get('/job-detail/{id}', [CompanyController::class,'job_detail']); //detail pekerjaan
//     // Route::get('/expertclass', [ExpertclassController::class,'index']);
//     // Route::get('/expertclass/category/{category}', [ExpertclassController::class,'category']);
//     // Route::get('/expertclass/list', [ExpertclassController::class,'show']);
//     // Route::get('/expertclass/detail/{id}', [ExpertclassController::class,'detail']);
// })
Route::middleware(['auth', 'user-access:user'])->group(function(){
    Route::get('/lamar/{id}',[CompanyController::class, 'show_apply'])->middleware('userprofilecompleted');
    Route::post('/lamar',[CompanyController::class, 'apply'])->middleware('userprofilecompleted');
    Route::get('/expertclass/buy/{id}', [ExpertclassController::class,'buy'])->middleware('userprofilecompleted');
    Route::get('/expertclass/register-form', [ExpertclassController::class,'showregister'])->middleware('userprofilecompleted');
    Route::post('/expertclass/register', [ExpertclassController::class,'register'])->middleware('userprofilecompleted');
    Route::get('/expertclass/create', [ExpertclassController::class,'showCreate'])->middleware('userprofilecompleted');
    Route::post('/expertclass/create', [ExpertclassController::class,'create'])->middleware('userprofilecompleted');
    Route::get('/expertclass/payment/{id}', [ExpertclassController::class,'payment_page'])->middleware('userprofilecompleted');
    Route::post('/expertclass/payment/{id}', [ExpertclassController::class,'pay'])->middleware('userprofilecompleted');
    Route::get('/notification',[CompanyController::class, 'showNotification']);
    Route::get('/user/lamaran', [CompanyController::class,'lamaran'])->middleware('userprofilecompleted');

    Route::get('/user/tentang-saya', [ProfileController::class,'about']);
    Route::put('/user/tentang-saya', [ProfileController::class, 'updateAbout']);
    Route::get('/user/experience', [ProfileController::class,'experience']);
    Route::post('/user/experience', [ProfileController::class,'addExperience']);
    Route::delete('/user/experience/delete', [ProfileController::class,'deleteExperience']);
    
    Route::get('/user/education', [ProfileController::class,'education']);
    Route::post('/user/education', [ProfileController::class,'addEducation']);
    Route::delete('/user/education/delete', [ProfileController::class,'deleteEducation']);
    
    Route::get('/user/skill', [ProfileController::class,'skill']);
    Route::put('/user/skill', [ProfileController::class, 'addSkill']);

    Route::get('/user/portfolio', [ProfileController::class,'portfolio']);
    Route::put('/user/upload/portfolio', [ProfileController::class,'uploadPortfolio']);

    Route::get('/user/achievement', [ProfileController::class,'achievement']);
    Route::post('/user/achievement', [ProfileController::class,'addAchievement']);
    Route::delete('/user/achievement/delete', [ProfileController::class,'deleteAchievement']);

    Route::get('/user/organization', [ProfileController::class,'organization']);
    Route::post('/user/organization', [ProfileController::class,'addOrganization']);
    Route::delete('/user/organization/delete', [ProfileController::class,'deleteOrganization']);

    Route::get('/user/interest', [ProfileController::class,'interest']);
    Route::put('/user/interest', [ProfileController::class,'addInterest']);
    
    Route::get('/user/status', [ProfileController::class,'status']);

    Route::put('/user/update-profile', [ProfileController::class, 'updatePicture']);
    Route::get('/user/bookmarks', [ProfileController::class,'checkBookmarks']);
    Route::post('/user/bookmarks', [ProfileController::class,'bookmark']);
    Route::delete('/user/bookmark/delete', [ProfileController::class,'deleteBookmark']);
    Route::post('/user/bookmark', [ProfileController::class,'bookmark']);
    Route::get('/user/profil', [ProfileController::class,'showProfile']);
    Route::put('/user/profil/edit-profil', [ProfileController::class,'edit']);
    Route::get('/user/pengaturan', [ProfileController::class,'editProfile']);
});
Route::middleware('user-access:company,guest')->group(function(){
    Route::get('/perusahaan', [PageController::class,'index']);
    Route::get('/perusahaan', function(){
        return view('perusahaan.glints');
    });
    Route::get('/perusahaan/page/glints', function () {
        return view('perusahaan.glints',  [
            "page" => "glints"
        ]);
    });
    Route::get('/perusahaan/page/faq', function () {
        return view('perusahaan.faq', [
            "page" => "faq"
        ]);
    });
    Route::get('/perusahaan/page/kisahsukses', function () {
        return view('perusahaan.kisahsukses', [
            "page" => "kisahsukses"
        ]);
    });
    Route::get('/perusahaan/page/talentpool', function () {
        return view('perusahaan.talentpool', [
            "page" => "talentpool"
        ]);
    });
    Route::get('/perusahaan/page/managedtalent', function () {
        return view('perusahaan.managedtalent', [
            "page" => "managedtalent"
        ]);
    });

    Route::get('/perusahaan/page/remotehiring', function () {
        return view('perusahaan.remotehiring', [
            "page" => "remotehiring"
        ]);
    });

    Route::get('/perusahaan/page/recruitment', function () {
        return view('perusahaan.recruitment', [
            "page" => "recruitment"
        ]);
    });

    Route::get('/perusahaan/page/jobsearch', function () {
        return view('perusahaan.jobsearch',  [
            "page" => "jobsearch"
        ]);
    });
    Route::get('/perusahaan/page/feestructure', function () {
        return view('perusahaan.feestructure',  [
            "page" => "feestructure"
        ]);
    });
    Route::get('/perusahaan/page/konsultasi', function () {
        return view('perusahaan.konsultasi',  [
            "page" => "konsultasi"
        ]);
    });
    
});
Route::middleware(['auth', 'user-access:company,user'])->group(function(){
    Route::get('/download/portfolio/{name}',[CompanyController::class,'downloadPortfolio']);
});
Route::middleware(['auth', 'user-access:company'])->group(function(){
    Route::get('/perusahaan/page/dashboard',[CompanyController::class, 'showDashboard']);
    Route::get('/perusahaan/page/createJob',[CompanyController::class, 'showCreateJob'])->middleware('companyprofilecompleted');
    Route::post('/perusahaan/page/createJob',[CompanyController::class, 'createJob'])->middleware('companyprofilecompleted');
    Route::delete('/perusahaan/page/deleteJob/{id}',[CompanyController::class, 'deleteJob'])->middleware('companyprofilecompleted');
    Route::post('/perusahaan/page/konsultasi',[CompanyController::class, 'consult'])->middleware('companyprofilecompleted');
    Route::get('/perusahaan/edit-profil',[CompanyController::class, 'showEditProfile']);
    Route::get('/perusahaan/edit-job/{id}',[CompanyController::class, 'showEditJob']);
    Route::put('/perusahaan/edit-job/{id}',[CompanyController::class, 'editJob']);
    Route::put('/perusahaan/edit-profil',[CompanyController::class, 'editProfile']);
    Route::get('/perusahaan/page/job-detail/{id}',[CompanyController::class, 'showJob']);
    Route::put('/perusahaan/applicant-status',[CompanyController::class, 'updateStatus']);
    Route::get('/download/resume/{name}',[CompanyController::class,'download']);
    Route::get('/perusahaan/page/interview/{id}',[CompanyController::class,'interview']);
    Route::post('/perusahaan/send-interview',[CompanyController::class,'sendInterview']);
    Route::get('/perusahaan/page/application/letter/{id}', [CompanyController::class, 'checkLetter']);
    Route::get('/perusahaan/page/applicant-detail/{id}', [CompanyController::class, 'checkApplicant']);
});
Route::middleware(['auth', 'user-access:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin_dashboard');
    Route::get('/admin/profile', [AdminController::class, 'showProfile'])->name('admin_profile');
    Route::put('/admin/profile', [AdminController::class, 'updatePicture']);
    Route::get('/admin/profile/update', [AdminController::class, 'showUpdateProfile']);
    Route::put('/admin/profile/update-profile', [AdminController::class, 'updateProfile']);
    Route::get('/admin/users', [AdminController::class, 'showUsers'])->name('admin_user');
    Route::delete('/admin/user/delete', [AdminController::class, 'deleteUser']);
    Route::get('/admin/companies', [AdminController::class, 'showCompanies'])->name('admin_company');
    Route::delete('/admin/company/delete', [AdminController::class, 'deleteCompany']);
    Route::get('/admin/company/detail/{id}', [AdminController::class, 'showCompanyDetail']);
    Route::get('/admin/expert-user', [AdminController::class, 'showExpertUser'])->name('admin_expert_user');
    Route::put('/admin/expert-user', [AdminController::class, 'showExpertUser']);
    Route::get('/admin/expert-class', [AdminController::class, 'showExpertClass'])->name('admin_expert_class');
    Route::put('/admin/expert-class', [AdminController::class, 'showExpertClass']);
    Route::delete('/admin/expert-class', [AdminController::class, 'deleteClass']);
    Route::get('/admin/blog', [AdminController::class, 'showBlog'])->name('admin_blog');
    Route::delete('/admin/blog', [AdminController::class, 'deleteBlog']);
    Route::post('/admin/blog', [AdminController::class, 'writeBlog']);
    Route::get('/admin/consultation', [AdminController::class, 'showConsultation'])->name('admin_consultation');
    Route::get('/admin/consultation/{id}', [AdminController::class, 'showConsultationDetail']);
    Route::put('/admin/consult', [AdminController::class, 'sendSchedule']);
});



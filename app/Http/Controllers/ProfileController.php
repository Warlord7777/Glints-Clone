<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Experience;
use App\Models\Achievements;
use App\Models\Organization;
use App\Models\Education;
use App\Models\UserDesc;
use App\Models\Bookmark;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function about(){
        $description = UserDesc::where('user_id', auth()->user()->id)->pluck('description');
        return view('user.tentangSaya')->with([
            'description' => $description[0],
        ]);
    }
    public function updateAbout(Request $request){
        UserDesc::where('user_id', auth()->user()->id)->update([
            'description' => $request->description,
        ]);
        return redirect('/user/profil');
    }
    public function addExperience(Request $request){
        $validatedData = $request->validate([
            'posisi' => 'required',
            'perusahaan' => 'required',
            'bulan_mulai' => 'required',
            'bulan_berakhir' => 'required',
            'tahun_mulai' => 'required',
            'tahun_berakhir' => 'required',
        ]);
        $waktuMulai = $validatedData['bulan_mulai'].', '.$validatedData['tahun_mulai'];
        $waktuBerakhir = $validatedData['bulan_berakhir'].', '.$validatedData['tahun_berakhir'];
        Experience::insert([
            'user_id' => auth()->user()->id,
            'posisi' => $validatedData['posisi'],
            'perusahaan' => $validatedData['perusahaan'],
            'waktu_mulai' => $waktuMulai,
            'waktu_berakhir' => $waktuBerakhir,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect('/user/profil');
    }
    public function addEducation(Request $request){
        $validatedData = $request->validate([
            'institution' => 'required',
            'degree' => 'required',
            'bulan_mulai' => 'required',
            'bulan_berakhir' => 'required',
            'major' => 'required',
            'tahun_mulai' => 'required',
            'tahun_berakhir' => 'required',
        ]);
        $waktuMulai = $validatedData['bulan_mulai'].', '.$validatedData['tahun_mulai'];
        $waktuBerakhir = $validatedData['bulan_berakhir'].', '.$validatedData['tahun_berakhir'];
        Education::insert([
            'user_id' => auth()->user()->id,
            'institusi' => $validatedData['institution'],
            'gelar' => $validatedData['degree'],
            'bidang' => $validatedData['major'],
            'waktu_mulai' => $waktuMulai,
            'waktu_berakhir' => $waktuBerakhir,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect('/user/profil');
    }
    public function addSkill(Request $request){
        UserDesc::where('user_id', auth()->user()->id)->update([
            'skills' => implode(',',$request->skills),            
        ]);
        return redirect('/user/profil');
    }
    public function uploadPortfolio(Request $request){
        $validatedData = $request->validate([
            'portfolio' => 'mimes:pdf|required|max:10000',
        ]);
        if($request->file('portfolio')){
            $validatedData['portfolio'] = $request->file('portfolio')->store('portfolio');
        }
        UserDesc::where('user_id', auth()->user()->id)->update([
            'portfolio' => $validatedData['portfolio'],
        ]);
        return redirect('/user/profil');
    }
    public function addAchievement(Request $request){
        $validatedData = $request->validate([
            'nama_penghargaan' => 'required',
            'judul_presentasi' => 'required',
            'tahun' => 'required'
        ]);
        Achievements::insert([
            'user_id' => auth()->user()->id,
            'penghargaan' => $validatedData['nama_penghargaan'],
            'judul_kontribusi' => $validatedData['judul_presentasi'],
            'tahun' => $validatedData['tahun'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect('/user/profil');
    }
    public function addOrganization(Request $request){
        $validatedData = $request->validate([
            'organization' => 'required',
            'position' => 'required',
            'bulan_mulai' => 'required',
            'bulan_berakhir' => 'required',
            'tahun_mulai' => 'required',
            'tahun_berakhir' => 'required',
        ]);
        $waktuMulai = $validatedData['bulan_mulai'].', '.$validatedData['tahun_mulai'];
        $waktuBerakhir = $validatedData['bulan_berakhir'].', '.$validatedData['tahun_berakhir'];
        Organization::insert([
            'user_id' => auth()->user()->id,
            'nama_organisasi' => $validatedData['organization'],
            'posisi' => $validatedData['position'],
            'waktu_mulai' => $waktuMulai,
            'waktu_berakhir' => $waktuBerakhir,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect('/user/profil');
    }
    public function deleteOrganization(Request $request){
        Organization::where('id', $request->organization_id)->delete();
        return redirect('/user/profil');
    }
    public function deleteAchievement(Request $request){
        Achievements::where('id', $request->achievement_id)->delete();
        return redirect('/user/profil');
    }
    public function addInterest(Request $request){
        $skills = implode(',',$request->frefrensi);
        $job_type = implode(',', $request->tipe);
        UserDesc::where('user_id', auth()->user()->id)->update([
            'interest' => $skills,
            'preferred_job_type' => $job_type,
            'expected_salary' => $request->gaji,
            'preferred_location' => $request->kota,
        ]);
        return redirect('/user/profil');
    }
    public function portfolio(){
        return view('user.uploadPortofolio');
    }
    public function skill(){
        return view('user.skill');
    }
    public function status(){
        return view('user.status');
    }
    public function achievement(){
        return view('user.achievement');
    }
    public function experience(){
        return view('user.experience');
    }
    public function education(){
        return view('user.education');
    }
    public function interest(){
        return view('user.interest');
    }
    public function organization(){
        return view('user.organization');
    }
   
    public function showProfile(){
        $userProfile = UserDesc::where('user_id', auth()->user()->id)->first();
        $models = [
            'Achievements',
            'Experience',
            'Education',
            'Organization'
        ];

        $user = auth()->user()->UserDesc;
        $totalModels = count($models);
        $completedModels = 0;
        if(!$user->profileCompleted()){
            if(!$user->skills != null){
                $completedModels = $completedModels + 1;
            }
            if(!$user->description == null){
                $completedModels = $completedModels + 1;
            }
            if(!$user->portfolio == null){
                $completedModels = $completedModels + 1;
            }
            if(!$user->interest == null){
                $completedModels = $completedModels + 1;
            }
            if(!$user->telephone == null){
                $completedModels = $completedModels + 1;
            }
        }else{
            $completedModels = 5;
        }
        foreach ($models as $mo) {
            $model = 'App\\Models\\' . $mo;
            $record = $model::where('user_id', $user->user_id)->first();
            if ($record) {
                $completedModels = $completedModels + 1;
            }
        }
        $profileCompletionPercentage = ($completedModels / 9) * 100;
        return view('user.showProfile')->with([
            'user' => $userProfile,
            'percent' => $profileCompletionPercentage,
        ]);
    }
    public function deleteExperience(Request $request){
        Experience::where('id', $request->experience_id)->delete();
        return redirect('/user/profil');
    }
    public function editProfile(){
        $profile = auth()->user()->UserDesc;    
        return view('user.editProfile')->with([
            'profile' => $profile,
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
        UserDesc::updateOrInsert(['user_id' => auth()->user()->id],[
            'profile_picture' => $validatedData['profile_picture'],
        ]);
        return redirect('/user/profil');
    }
    public function deleteEducation(Request $request){
        Education::where('id', $request->education_id)->delete();
        return redirect('/user/profil');
    }
    public function edit(Request $request){
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'location' => 'required',
            'status' => 'required',
            'citizenship' => 'required',
            'age' => 'required',
        ]);
        User::where('id', auth()->user()->id)->update([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
        ]);
        UserDesc::where('user_id', auth()->user()->id)->update([
            'location' => $validatedData['location'],
            'telephone' => $validatedData['telephone'],
            'age' => $validatedData['age'],
            'gender' => $validatedData['gender'],
            'residence_status' => $validatedData['status'],
            'nationality' => $validatedData['citizenship'],        
            'updated_at' => now(),
        ]);
        return redirect('/user/profil');
    }
    public function showTickets(){
        return view('user.ticket');
    }
    public function checkBookmarks(){
        $user_id = auth()->user()->id;
        $bookmark = Bookmark::where('user_id', $user_id)->get();

        return view('user.bookmark')->with('bookmark', $bookmark);
    }
    public function bookmark(Request $request){
        Bookmark::insert([
            'user_id' => auth()->user()->id,
            'job_vacancy_id' => $request->job_id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect()->back();
    }
    public function deleteBookmark(Request $request){
        Bookmark::where('bookmarks_id', $request->bookmark_id)->delete();
        return redirect()->back();
    }
}

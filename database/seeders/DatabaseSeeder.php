<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Admin;
use App\Models\Company;
use App\Models\UserDesc;
use App\Models\Job_vacancy;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // UserDesc::factory(5)->create();
        // Company::factory(5)->create();
        // Job_vacancy::factory(20)->create();
        for($i = 1; $i <= 20; $i++){
            DB::table('users')->insert([
                'email' => fake()->unique()->safeEmail(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'first_name' => fake()->firstName(),
                'last_name' => fake()->lastName(),
                'role' => fake()-> randomElement([1, 2]),
                'remember_token' => Str::random(10),
                'email_verified_at' => now(),
            ]);
        }
        $users = DB::table('users')->get();
        foreach($users as $user){
            if($user->role == 1){
                DB::table('job_seekers')->insert([
                    'user_id' => $user->id,
                    'location' => fake()->address(),
                    'telephone' => fake()->phoneNumber(),
                    'age' => fake()->randomDigit(2),
                    'gender' => fake()->randomElement(['male', 'female']),
                    'residence_status' => fake()->sentence(),
                    'nationality' => fake()->country(),
                    'description' => fake()->paragraphs(3, true),
                    // 'experience' => fake()->paragraphs(3, true),
                    // 'education' => fake()->paragraphs(3, true),
                    // 'skills' => fake()->paragraphs(3, true),
                    // 'interest' => fake()->paragraphs(3, true),  
                    // 'achievements' => fake()->paragraphs(3, true),
                    'portfolio' => fake()->paragraphs(3, true),
                    // 'organization' => fake()->sentence(1, true),
                    'expert' => fake()->randomElement([0, 1]),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }else{
                DB::table('companies')->insert([
                    'company_id' => $user->id,
                    'banner' => fake()->sentence(1, true),
                    'logo_company' => fake()->sentence(1, true),
                    'company_name' => fake()->company(),
                    'company_field' => fake()->sentence(1, true),
                    'company_location' => fake()->city(),
                    'company_size' => fake()->randomNumber(2, true),
                    'company_address' => fake()->address(),
                    'company_website' => fake()->domainName(),
                    'short_description' => fake()->sentence(2, true),
                    'company_description' => fake()->sentence(5, true),
                    'company_industry' => fake()->sentence(1, true),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
        $companies = DB::table('companies')->pluck('company_id');
        foreach($companies as $company){
            DB::table('job_vacancies')->insert([
                'job_name' => fake()->jobTitle(),
                'job_position' => fake()->sentence(1, true),
                'estimated_salary' => fake()->randomNumber(6, true),
                'country' => fake()->country(),
                'city' => fake()->city(),
                'job_experience' => fake()->sentence(1, true),
                'description' => fake()->paragraph(1, true),
                'job_type' => fake()->randomElement(['Penuh', 'Paruh', 'Magang', 'Proyek']),
                'job_system' => fake()->randomElement(['remote', 'wfo']),
                'job_skills' => fake()->paragraph(1, true),
                'company_id' => fake()->randomElement($companies),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        $experts = DB::table('job_seekers')->where('expert', 1)->get();
        $expertsId = DB::table('job_seekers')->where('expert', 1)->pluck('user_id');
        $a = 1;
        while ($a <= 10) {
            DB::table('expertclasses')->insert([
                'category' => fake()->randomElement(['marketing', 'human resource', 'finance']),
                'class_title' => fake()->sentence(1, true),
                'date_time' => fake()->dateTime(),
                'language' => 'English',
                'class_image' => fake()->sentence(1, true),
                'class_type' => fake()->randomElement(['webinar', 'mentorship']),
                'mentor_id' => fake()->randomElement($expertsId),
                'class_description' => fake()->paragraph(10, true),
                'price' => fake()->randomNumber(6, true),
                'facility' => fake()->paragraph(5, true),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            $a++;
        }
        foreach($experts as $ex){
            DB::table('expertclass_application')->insert([
                'user_id' => $ex->user_id,
                'status' => 1,
                'linked_in' => fake()->domainName(),
                'pekerjaan' => fake()->sentence(1, true),
                'posisi_kerja' => fake()->sentence(1, true),
                'level_pekerjaan' => fake()->randomElement(['non-management', 'junior-level', 'mid-level', 'senior-level']),
                'perusahaan' => fake()->sentence(1, true),
                'ukuran_perusahaan' => fake()->randomElement(['1-50', '51-300', '301-500', '501-1000', '>1000']),
                'pengalaman_kerja' => fake()->randomElement(['<3', '3-4', '5-6', '7-10', '>10']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        $classes = DB::table('expertclasses')->get();

        foreach($classes as $class){
            $startingTime = Carbon::now();
            $endingTime = clone $startingTime;
            $endingTime->addDays(10);
            DB::table('discounts')->insert([
                'class_id' => $class->class_id,
                'starting_time' => $startingTime,
                'ending_time' => $endingTime,
                'discount' => fake()->randomElement([0.01, 0.02, 0.5, 0.3, 0.25]),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        DB::table('users')->insert([
            "first_name" => 'Glints',
            "last_name" => '8',
            "email" => 'glints@gmail.com',
            "password" => bcrypt(123456),
            "role" => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $user_id = DB::table('users')->where('email', 'glints@gmail.com')->pluck('id'); 
        DB::table('admins')->insert([
            "admin_id" => $user_id[0], 
            "no_hp" => "081362579393",
            "usia" => 18,
            "jenis_kelamin" => "laki-laki",
            "alamat" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dolores aliquam corporis, totam veritatis, eius porro perferendis laboriosam ratione vel maxime fuga mollitia in soluta incidunt! Provident vel tenetur odio.",
            "status_kependudukan" => "Permanent Resident",
            "kewarganegaraan" => "Indonesia",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        for($i = 0; $i < 10; $i++){
            DB::table('blogs')->insert([
                "blog_title" => fake()->sentence(1, true),
                "writer_id" => 21,
                "cover" => fake()->sentence(1, true),
                "content" => fake()->paragraph(30, true),
                "topic" => fake()->sentence(1, true),
                "created_at" => now(),
                "updated_at" => now(),
            ]);
        }
    }
}

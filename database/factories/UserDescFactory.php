<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserDesc>
 */
class UserDescFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            'user_id' => fake()-> randomElement(User::pluck('id')),
            // 'user_id' => User::factory()->create(),
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'profile_picture' => fake()->image(null, 640, 480),
            'location' => fake()->address(),
            'telephone' => fake()->phoneNumber(),
            'age' => fake()->randomDigit(2),
            'gender' => fake()->randomElement(['male', 'female']),
            'residence_status' => fake()->sentence(),
            'nationality' => fake()->country(),
            'description' => fake()->paragraphs(3, true),
            'experience' => fake()->paragraphs(3, true),
            'education' => fake()->paragraphs(3, true),
            'skills' => fake()->paragraphs(3, true),
            'interest' => fake()->paragraphs(3, true),  
            'achievements' => fake()->paragraphs(3, true),
            'resume' => fake()->sentence(1, true),
            'portfolio' => fake()->paragraphs(3, true),
            'organization' => fake()->sentence(1, true),
            'job_status' => fake()->randomElement(['tidak menerima', 'terbuka', 'aktif mencari']),
        ];
    }
}

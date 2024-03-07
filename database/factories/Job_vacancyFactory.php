<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job_vacancy>
 */
class Job_vacancyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $companyId = Company::factory()->create()->id;
        return [
            'job_name' => fake()->sentence(1, true),
            'job_position' => fake()->sentence(1, true),
            'estimated_salary' => fake()->randomNumber(6, true),
            'job_category' => fake()->sentence(1, true),
            'job_experience' => fake()->sentence(1, true),
            'description' => fake()->paragraph(1, true),
            'job_type' => fake()->randomElement(['full-time', 'half-time']),
            'job_system' => fake()->randomElement(['remote', 'wfo']),
            'job_skills' => fake()->paragraph(1, true),
            'company_id' => fake()->randomElement(Company::pluck('id')->random()),
            // 'company_id' => $companyId,

        ];
    }
}

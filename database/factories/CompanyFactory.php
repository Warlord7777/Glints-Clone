<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\UserDesc;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $usedUserID = UserDesc::pluck('user_id')->all();
        return [
            'company_id' => function () use ($usedUserID) {
                return User::whereNotIn('id', $usedUserID)->pluck('id')->random();
            },
            'banner' => fake()->sentence(1, true),
            'logo_company' => fake()->sentence(1, true),
            'company_name' => fake()->company(),
            'company_field' => fake()->sentence(1, true),
            'company_location' => fake()->city(),
            'company_size' => fake()->randomNumber(2, true),
            'company_gallery' => fake()->sentence(3, true),
            'company_address' => fake()->address(),
            'company_website' => fake()->domainName(),
            'short_description' => fake()->sentence(2, true),
            'company_description' => fake()->sentence(5, true),
            'company_industry' => fake()->sentence(1, true),
        ];
    }
}

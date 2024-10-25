<?php

namespace Database\Factories;

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
        return [
            'company_name' => $this->faker->company,
            'company_url' => $this->faker->url,
            'application_status' => $this->faker->randomElement(['最終面接', '一次面接', '内定', '不採用']),
            'industry' => $this->faker->randomElement(['IT', '保険', '不動産', '銀行']),
            'location' => $this->faker->city,
            'rating' => $this->faker->numberBetween(1, 5),
            'notes' => $this->faker->realText(100),
            'user_id' => \App\Models\User::factory(), 
        ];
    }
}

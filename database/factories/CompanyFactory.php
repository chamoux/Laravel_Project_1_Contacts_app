<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use faker\Factory as Faker;
use App\Models\Company;
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
    public function definition()
    {
        $faker = Faker::create();
        return [
            'name' => $faker->company,
            'address' => $faker->address,
            'website' => $faker->domainName,
            'email' => $faker->email,
        ];
    }
}

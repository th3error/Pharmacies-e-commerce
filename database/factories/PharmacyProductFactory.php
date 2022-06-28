<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PharmacyProduct>
 */
class PharmacyProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_id' => fake()->numberBetween(1,50000),
            'pharmacy_id' => fake()->numberBetween(1, 20000),
            'price' => fake()->numberBetween(1, 2500),
            'quantity' => fake()->numberBetween(0,100)
        ];
    }
}

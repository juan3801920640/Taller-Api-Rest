<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Computer>
 */
class ComputerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brand'=> fake()->randomElement(['Azus', 'Lenovo', 'Hp']),
            'ram'=> fake()->randomFloat(3),
            'hard_disk'=> fake()->randomNumber(3),
            'number_cores'=> fake()->randomNumber(1),
            'processor'=> fake()->randomElement(['Intel', 'Ryzen', 'IOS']),
            'operative_system'=> fake()->randomElement(['Windows', 'Linux', 'MAC']),
            'date_creation' => fake()->date(),
            'graphic_memory?'=> fake()->boolean(),
            'cc_graphic_memory'=> fake()->randomFloat(3)
        ];
    }
}

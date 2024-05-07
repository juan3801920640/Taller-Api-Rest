<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [         
        ];
    }

    public function productsCategory1(){
        return [
            'name' => 'Laptops',
            'description' => 'Computadores portatiles perfectos para estudiantes',
            'priority' => 0
        ];
    }

    public function productsCategory2(){
        return [
            'name' => 'Pcs',
            'description' => 'Computadores para el trabajo fuerte en casa y oficinas',
            'priority' => 0
        ];
    }


}

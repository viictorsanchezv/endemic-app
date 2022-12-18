<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [    
            'title'         => $this->faker->sentence(5),
            'description'   => $this->faker->sentence(20),
            'date'          => $this->faker->dateTimeThisMonth()
        ];
        
        
    }
}

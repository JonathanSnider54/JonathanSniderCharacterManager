<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Character>
 */
class CharacterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
     $names = ['Big Hat Jim', 'Grognak the Punisher', 'Stabby', 'Stabby Jr.', 'Pyro'];
        return [
        'name'=> $this->faker->unique()->randomElement($names),
        'class_id'=>$this->faker->numberBetween(1, 3),
        'health' => $this->faker->numberBetween(1, 80),
        'level'=> $this->faker->numberBetween(1, 100)
        ];
    }
}

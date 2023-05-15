<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->sentence,
            'description' => $this->faker->text($maxNbChars = 50),
            'user_id' =>$this->faker->randomNumber(1, 100),
            'admin_id' =>1,
            'dead_line' => '1990/10/10',
            'status' => 'open',
        ];
    }
}

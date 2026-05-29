<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Model\App\Models\Project;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'user_id' => User::factory(),
        ];
    }
}
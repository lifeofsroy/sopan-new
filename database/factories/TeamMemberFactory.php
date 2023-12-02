<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TeamMember>
 */
class TeamMemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $count = 0;
        return [
            'name' => $this->faker->name,
            'designation' => $this->faker->text(10),
            'type' => 'volunteer',
            'is_active' => 1,
            'image' => 'member/image'. $count . '.jpg'
        ];
    }
}

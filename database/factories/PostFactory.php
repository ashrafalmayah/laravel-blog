<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'category_id' => Category::inRandomOrder()->first()->id,
            'title' => fake()->sentence(3),
            'slug' => fake()->unique()->slug(3),
            'excerpt' => fake()->sentence(),
            'body' => implode("\n\n", fake()->paragraphs(5)),
            'published_at' => fake()->dateTime()
        ];
    }
}

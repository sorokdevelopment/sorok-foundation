<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Newsletter>
 */
class NewsletterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => fake()->sentence(3),
            "slug" => function (array $attributes) {
                return Str::slug($attributes['title']);
            },
            "description" => fake()->paragraph(),
            "content" => fake()->paragraphs(3, true),
            "thumbnail" => "https://picsum.photos/640/480?random=" . rand(1, 1000),
            "published_at" => now()
        ];
    }
}

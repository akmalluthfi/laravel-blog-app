<?php

namespace Database\Factories;

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
    public function definition()
    {
        $title = fake()->sentence(mt_rand(3, 10));
        $slug = rtrim(strtolower(implode("-", explode(' ', $title))), '.');

        $paragraphs = collect();
        for ($i = 0; $i < 5; $i++) {
            $paragraphs->push(fake()->paragraph(5));
        }

        return [
            'title' => $title,
            'slug' => $slug,
            'excerpt' => $paragraphs->first(),
            'body' => "<p>" . $paragraphs->join('</p><p>', '</p>'),
            'category_id' => mt_rand(1, 3),
            'user_id' => mt_rand(1, 5),
        ];
    }
}

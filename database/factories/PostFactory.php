<?php

namespace Database\Factories;

use Illuminate\Support\Str;
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
        $slug = Str::slug($title);

        $paragraphs = collect();
        for ($i = 0; $i < 10; $i++) {
            $paragraphs->push(fake()->paragraph(10));
        }

        return [
            'title' => $title,
            'slug' => $slug,
            'excerpt' => Str::words($paragraphs->first(), 30, '...'),
            'body' => '<p>' . $paragraphs->join('</p><p>', '</p><p>') . '</p>',
            'category_id' => mt_rand(1, 3),
            'user_id' => mt_rand(1, 5),
        ];
    }
}

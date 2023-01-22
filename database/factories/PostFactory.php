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
        return [
            'category_id' => mt_rand(1,5),
            'user_id' => 1,
            'title' => $this->faker->sentence(mt_rand(3,6)),
            'excerpt' => $this->faker->paragraph(),
            // 'body' => '<p>'. implode('</p><p>', $this->faker->paragraphs(mt_rand(4,8))) . '</p>',
            'body' => collect($this->faker->paragraphs(mt_rand(4,8)))
                        ->map(fn($p) => "<p>$p</p>")->implode(''),
            'slug' => $this->faker->slug(),
            'img' => 'single_blog_'.mt_rand(1,5).'.png',
            'published_at' => $this->faker->date('Y-m-d')
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->unique()->sentence(4, false);
        $slug = Str::slug($title);
        return [
            'title' => $title,
            'slug' => $slug,
            'author_id' => User::factory(),
            'image' => '/storage/images/upacara HUT RI.jpg',
            'body' => fake()->paragraph(25)
        ];
    }
}

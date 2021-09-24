<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'content' => $this->faker->paragraphs(4, true),
            'description' => $this->faker->sentence(),
            'thumbnail' => $this->faker->imageUrl(),
            'category_id' => $this->faker->randomElement(\App\Models\Category::pluck('id')->toArray()),
            'author_id' => $this->faker->randomElement(\App\Models\User::pluck('id')->toArray()),
        ];
    }
}

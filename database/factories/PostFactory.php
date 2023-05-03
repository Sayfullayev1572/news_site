<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $title_uz = $this->faker->sentence;

        return [
            'category_id' => rand(7,10),
            'title_uz' => $this->faker->sentence,
            'title_ru' => $this->faker->sentence,
            'slug' => Str::slug($title_uz),
            'body_uz' => $this->faker->text,
            'body_ru' => $this->faker->text,
            'image' => 'article-img.png',
            'view' => rand(0,30),
            'is_special' => rand(0,1),
        ];
    }
}

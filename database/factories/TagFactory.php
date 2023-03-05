<?php

namespace Database\Factories;

use App\Models\Tag;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Blog;
use App\Models\Product;

class TagFactory extends Factory
{
    protected $model = Tag::class;

    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word(),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Tag $tag) {
            $taggableType = $this->faker->randomElement([Blog::class, Product::class]);
            $taggable = $taggableType::inRandomOrder()->first();

            $taggable->tags()->attach($tag);
        });
    }
}

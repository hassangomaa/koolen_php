<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Category;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    protected $model = Blog::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $faker = new Faker() ;
        $title = $faker->sentence();

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'content' => $faker->paragraphs(5, true),
            'featured_image' => $faker->imageUrl(),
            'user_id' => function () {
                return factory(User::class)->create()->id;
            },
            'category_id' => function () {
                return factory(Category::class)->create()->id;
            },
            ];
    }
}

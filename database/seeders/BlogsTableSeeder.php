<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogTag;

class BlogsTableSeeder extends Seeder
{
    public function run()
    {
        // Create some blog categories
        $categories = [
            ['name' => 'Technology', 'slug' => 'technology'],
            ['name' => 'Lifestyle', 'slug' => 'lifestyle'],
            ['name' => 'Food', 'slug' => 'food'],
            ['name' => 'Travel', 'slug' => 'travel'],
            ['name' => 'Fashion', 'slug' => 'fashion'],
        ];

        foreach ($categories as $category) {
            BlogCategory::create($category);
        }

        // Create some blog tags
        $tags = [
            ['name' => 'PHP', 'slug' => 'php'],
            ['name' => 'Laravel', 'slug' => 'laravel'],
            ['name' => 'JavaScript', 'slug' => 'javascript'],
            ['name' => 'React', 'slug' => 'react'],
            ['name' => 'Vue.js', 'slug' => 'vue-js'],
            ['name' => 'Fashion', 'slug' => 'fashion'],
            ['name' => 'Food', 'slug' => 'food'],
            ['name' => 'Travel', 'slug' => 'travel'],
        ];

        foreach ($tags as $tag) {
            BlogTag::create($tag);
        }

        // Create some blog posts with categories and tags
        $blogs = [
            [
                'title' => 'Laravel 8 Tutorial for Beginners',
                'slug' => 'laravel-8-tutorial-for-beginners',
                'content' => 'This is a beginner\'s guide to Laravel 8.',
                'featured_image' => 'laravel-8-tutorial.jpg',
                'category_id' => 1,
                'user_id' => 1,
                'tags' => ['laravel', 'php', 'web-development'],
            ],
            [
                'title' => '10 Best Travel Destinations in Asia',
                'slug' => 'best-travel-destinations-asia',
                'content' => 'Looking for some inspiration for your next Asian adventure? Check out these 10 amazing destinations.',
                'featured_image' => 'best-travel-destinations-asia.jpg',
                'category_id' => 4,
                'user_id' => 2,
                'tags' => ['travel', 'asia'],
            ],
            // Add more blog posts with categories and tags here
        ];

        foreach ($blogs as $blog) {
            $blogModel = Blog::create([
                'title' => $blog['title'],
                'slug' => $blog['slug'],
                'content' => $blog['content'],
                'featured_image' => $blog['featured_image'],
                'category_id' => $blog['category_id'],
                'user_id' => $blog['user_id'],
            ]);

            // Attach tags to the blog post
            foreach ($blog['tags'] as $tagName) {
                $tag = BlogTag::where('name', $tagName)->first();
                $blogModel->tags()->attach($tag);
            }
        }
    }
}

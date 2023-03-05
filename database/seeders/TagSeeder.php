<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    public function run()
    {
        // Create some products
        $product1 = Product::create([
            'name' => 'Product 1',
            'description' => 'Description of Product 1'
        ]);
        $product2 = Product::create([
            'name' => 'Product 2',
            'description' => 'Description of Product 2'
        ]);
        $product3 = Product::create([
            'name' => 'Product 3',
            'description' => 'Description of Product 3'
        ]);

        // Create some blogs
        $blog1 = Blog::create([
            'title' => 'Blog Title 1',
            'content' => 'Content of Blog 1'
        ]);
        $blog2 = Blog::create([
            'title' => 'Blog Title 2',
            'content' => 'Content of Blog 2'
        ]);
        $blog3 = Blog::create([
            'title' => 'Blog Title 3',
            'content' => 'Content of Blog 3'
        ]);

        // Attach tags to products
        $tag1 = Tag::create(['name' => 'Tag 1']);
        $tag2 = Tag::create(['name' => 'Tag 2']);
        $tag3 = Tag::create(['name' => 'Tag 3']);

        $product1->tags()->attach($tag1);
        $product1->tags()->attach($tag2);
        $product2->tags()->attach($tag2);
        $product2->tags()->attach($tag3);
        $product3->tags()->attach($tag1);
        $product3->tags()->attach($tag3);

        // Attach tags to blogs
        $blog1->tags()->attach($tag1);
        $blog1->tags()->attach($tag2);
        $blog2->tags()->attach($tag2);
        $blog2->tags()->attach($tag3);
        $blog3->tags()->attach($tag1);
        $blog3->tags()->attach($tag3);
    }
}

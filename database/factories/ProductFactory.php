<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */

use App\Models\Product;
use Faker\Generator as Faker;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        $faker = \Faker\Factory::create();

        return [
            'name' => $faker->word(),
            'slug' => $faker->slug(),
            'description' => $faker->paragraph(),
            'short_description' => $faker->sentence(),
            'sku' => $faker->unique()->numberBetween(1000, 9000),
            'price' => $faker->numberBetween(50, 500),
            'sale_price' => $faker->numberBetween(10, 50),
            'on_sale' => $faker->boolean(),
            'taxable' => $faker->boolean(),
            'tax_rate' => $faker->randomFloat(2, 0.1, 0.3),
            'weight' => $faker->numberBetween(10, 100),
            'length' => $faker->numberBetween(10, 100),
            'width' => $faker->numberBetween(10, 100),
            'height' => $faker->numberBetween(10, 100),
            'dimensions_unit' => 'cm',
            'image' => $faker->imageUrl(),
            'images' => json_encode([$faker->imageUrl(), $faker->imageUrl(), $faker->imageUrl()]),
            'stock_quantity' => $faker->numberBetween(0, 100),
            'allow_backorders' => $faker->boolean(),
            'backorder_limit' => $faker->numberBetween(0, 10),
            'attributes' => json_encode(['color' => $faker->colorName(), 'size' => $faker->numberBetween(30, 40)]),
            'categories' => json_encode(['category1', 'category2', 'category3']),
            'tags' => json_encode(['tag1', 'tag2', 'tag3']),
            'brand' => $faker->company(),
            'vendor' => $faker->name(),
            'published' => $faker->boolean(),
            'featured' => $faker->boolean(),
            'meta_title' => $faker->sentence(),
            'meta_description' => $faker->paragraph(),
            'meta_keywords' => implode(',', $faker->words(5)),
        ];
    }
}

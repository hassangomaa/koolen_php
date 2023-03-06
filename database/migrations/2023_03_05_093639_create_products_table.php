<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            //arabic name
            $table->string('ar_name')->nullable();
            //arabic description
            $table->text('ar_description')->nullable();
            //arabic short description
            $table->text('ar_short_description')->nullable();
            //arabic meta title
            $table->string('ar_meta_title')->nullable();
            //arabic meta description
            $table->text('ar_meta_description')->nullable();
            //arabic meta keywords
            $table->text('ar_meta_keywords')->nullable();
            //arabic brand
            $table->string('ar_brand')->nullable();
            //arabic vendor
            $table->string('ar_vendor')->nullable();
            //arabic slug
            $table->string('ar_slug')->nullable();
            //arabic categories
            $table->json('ar_categories')->nullable();
            //arabic tags
            $table->json('ar_tags')->nullable();

            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->text('short_description')->nullable();
            $table->string('sku')->nullable();
            $table->integer('price')->nullable();
            $table->integer('sale_price')->nullable();
            $table->boolean('on_sale')->default(false);
            $table->boolean('taxable')->default(false);
            $table->float('tax_rate')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('length')->nullable();
            $table->integer('width')->nullable();
            $table->integer('height')->nullable();
            $table->string('dimensions_unit')->nullable();
            $table->string('image')->nullable();
            $table->json('images')->nullable();
            $table->integer('stock_quantity')->nullable();
            $table->boolean('allow_backorders')->default(false);
            $table->integer('backorder_limit')->nullable();
            $table->json('attributes')->nullable();
            $table->json('categories')->nullable();
            $table->json('tags')->nullable();
            $table->string('brand')->nullable();
            $table->string('vendor')->nullable();
            $table->boolean('published')->default(true);
            $table->boolean('featured')->default(false);
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->string('type')->nullable();
            $table->boolean('is_active')->default(true);
            $table->boolean('is_deleted')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};

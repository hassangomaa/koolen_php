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

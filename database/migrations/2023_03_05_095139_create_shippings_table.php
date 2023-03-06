<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingsTable extends Migration
{
    public function up()
    {
        Schema::create('shippings', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('order_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->string('zip');
            $table->string('shipping_method');
            $table->integer('shipping_price');
            $table->timestamps();
            $table->enum('shipping_status', ['pending', 'processing', 'shipped', 'delivered', 'returned', 'cancelled'])->default('pending');



//            $table->foreign('order_id')->references('id')->on('orders')
//                ->onDelete('cascade')->onUpdate('cascade');

        });
    }

    public function down()
    {
        Schema::dropIfExists('shippings');
    }
}

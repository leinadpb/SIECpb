<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('name', 70);
            $table->text('short_des');
            $table->longText('long_des');
            $table->decimal('price', 5, 2);
            $table->string('platform', 50);
            $table->string('characteristics');
            $table->string('front_image');
            $table->string('product_url');
            $table->string('product_owner');
            $table->string('product_creator');
            $table->string('type');
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
}

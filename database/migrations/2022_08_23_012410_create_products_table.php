<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('name')->unique();
            $table->text('description');
            $table->unsignedBigInteger('categoryId')->index('categoryId');
            $table->string('slug');
            $table->integer('stock');
            $table->enum('gender', ['F', 'M']);
            $table->integer('qual')->default(5);
            $table->double('price', 10, 2);
            $table->text('image');
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
        Schema::dropIfExists('product');
    }
}

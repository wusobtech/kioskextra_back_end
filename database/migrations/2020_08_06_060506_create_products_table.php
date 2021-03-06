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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->index();
            $table->unsignedBigInteger("user_id")->index()->nullable();
            $table->string('product_name');
            $table->string('sku')->nullable()->unique();
            $table->string('slug');
            $table->integer('quantity');
            $table->double('price', 10, 2);
            $table->string('video')->nullable();
            $table->text('description');
            $table->text('details')->nullable();
            $table->string('tags')->nullable();
            $table->integer('percent_off')->nullable();
            $table->integer('weight')->nullable();
            $table->string('color')->nullable();
            $table->enum('size', ['XXS','XS','S','M','L','XL','XXL','XXXL'])->nullable();
            $table->enum('type',['New','Featured']);
            $table->enum('status', ['Inactive', 'Active']);
            $table->foreign('category_id')->references('id')->on('product_categories')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->nullOnDelete();
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
}

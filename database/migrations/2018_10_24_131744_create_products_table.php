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
            $table->integer('brand_id')->unsigned()->nullable();
            $table->integer('category_id')->unsigned()->nullable();
            $table->integer('sub_category_id')->unsigned()->nullable();
            $table->string('title',150)->nullable();
            $table->string('picture1')->nullable();
            $table->string('picture2')->nullable();
            $table->float('price')->default(0);
            $table->integer('quantity')->default(0);
            $table->integer('popularity_count')->default(0);
            $table->integer('status')->default(0);
            $table->softDeletes();
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

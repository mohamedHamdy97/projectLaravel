<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->engine = 'InnoDB';
            $table->integer('number_of_product')->default(0);
            $table->string('image')->nullable();
            $table->timestamps();
            // $table->bigIncrements('id');
            // $table->string('name');
            // $table->int('price');
            // $table->int('quantity');
            // $table->string('image')->nullable();
            // $table->string('descriabtion');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}

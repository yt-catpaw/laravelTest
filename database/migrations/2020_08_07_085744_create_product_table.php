<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mt_products', function (Blueprint $table) {
            $table->integer('id', 11)->autoIncrement();
            $table->string('name', 64);
            $table->integer('price', 11);
            $table->text('description');
            $table->tinyInteger('active_flg', 1);
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
        Schema::dropIfExists('mt_products');
    }
}

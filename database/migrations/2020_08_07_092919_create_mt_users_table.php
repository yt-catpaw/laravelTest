<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMtUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mt_users', function (Blueprint $table) {
            $table->integer('id', 11)->autoIncrement();
            $table->string('name', 32);
            $table->string('password', 255);
            $table->string('email', 128);
            $table->string('postal_code', 8);
            $table->string('address', 128);
            $table->string('phone', 15);
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
        Schema::dropIfExists('mt_users');
    }
}

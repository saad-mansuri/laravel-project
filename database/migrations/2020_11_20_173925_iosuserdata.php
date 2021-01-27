<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Iosuserdata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iosuserdata', function (Blueprint $table) {
            $table->id();
            $table->string('uname');
            $table->string('email');
            $table->string('phone');
            $table->string('wpnumber');
            $table->string('budget');
            $table->string('description');
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
        Schema::dropIfExists('iosuserdata');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('note');
            $table->string('icon');
            $table->integer('ipLimit');
            $table->integer('dailyCallLimit');
            $table->string('address');
            $table->text('param');
            $table->text('result');
            $table->text('paramNote');
            $table->text('resultNote');
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
        Schema::dropIfExists('service');
    }
}

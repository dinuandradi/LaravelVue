<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('send_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->String('pname');
            $table->String('pcode');
            $table->String('sendate');
            $table->String('image');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('send_images');
    }
}

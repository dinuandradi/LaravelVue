<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTester1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tester1s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->String('PNum');
            $table->String('RDate');
            $table->String('SDate');
            $table->String('Feedback');
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
        Schema::dropIfExists('tester1s');
    }
}

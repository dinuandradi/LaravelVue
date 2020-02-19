<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkerFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worker_feedback', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('UNum');
            $table->string('EName');
            $table->string('RDate');
            $table->string('Feedback');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('worker_feedback');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('Pressno');              //press number
            $table->string('Partno');   
            $table->string('Item');                 //item 
            $table->integer('op');
            $table->integer('dl');
            $table->string('Material');                     
            $table->integer('six_2target');               // pre defined target for shifts
            $table->integer('two_10target');
            $table->integer('ten_6target');
            $table->integer('TotaltargetPrecentage');
            $table->integer('Machine_run_factor');
            $table->integer('Actual_run_factor');
            $table->string('six_2Empl');
            $table->string('two_10Empl');
            $table->string('ten_6Empl');                    // id of the worker in shifts
            $table->integer('six_2Losttime');
            $table->integer('two_10Losttime');               //Lost time for each shift
            $table->integer('ten_6Losttime');
            $table->integer('six_2GoodTotal');                 // good total output for 6 - 2 shift
            $table->integer('six_2Reject');
            $table->integer('six_2Total');
            $table->integer('two_10Total');                     // total production output
            $table->integer('ten_6Total');
            $table->integer('RejectTotal');
            $table->integer('GoodTotal');
            $table->integer('six_2actual_time');
            $table->integer('two_10actual_time');
            $table->integer('ten_6actual_time');
            $table->integer('six_2new_target');
            $table->integer('two_10new_target');
            $table->integer('ten_6new_target');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productions');
    }
}

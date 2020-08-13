<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSelfMadeStuffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('self_made_stuff', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
			$table->unsignedBigInteger('stuff_id');
			$table->foreign('stuff_id')->references('id')->on('stuffs')->onDelete('cascade');
			$table->unsignedBigInteger('self_made_id');
			$table->foreign('self_made_id')->references('id')->on('self_mades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('self_made_stuff');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJigSelfmadeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jig_selfmade', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
			$table->unsignedBigInteger('jig_id');
			$table->foreign('jig_id')->references('id')->on('jigs')->onDelete('cascade');
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
        Schema::dropIfExists('jig_selfmade');
    }
}

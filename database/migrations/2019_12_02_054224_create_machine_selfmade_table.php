<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMachineSelfmadeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('machine_selfmade', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
			$table->unsignedBigInteger('machine_id');
			$table->foreign('machine_id')->references('id')->on('machines')->onDelete('cascade');
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
        Schema::dropIfExists('machine_selfmade');
    }
}

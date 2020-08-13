<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToolSelfmadeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tool_selfmade', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
			$table->unsignedBigInteger('tool_id');
			$table->foreign('tool_id')->references('id')->on('tools')->onDelete('cascade');
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
        Schema::dropIfExists('tool_selfmade');
    }
}

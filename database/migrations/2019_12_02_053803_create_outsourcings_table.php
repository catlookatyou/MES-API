<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutsourcingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outsourcings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
			$table->string('id_number');
			$table->string('name');
			$table->string('contractor');
			$table->dateTime('actual_completion_date')->nullable();
			$table->dateTime('estimated_completion_date');
			$table->string('remarks')->nullable();
			$table->unsignedBigInteger('processing_execution_id');
			$table->foreign('processing_execution_id')->references('id')->on('processing_executions')->onDelete('cascade');
			$table->unsignedBigInteger('company_id');
			$table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('outsourcings');
    }
}

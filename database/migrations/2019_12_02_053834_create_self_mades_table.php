<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSelfMadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('self_mades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
			$table->string('id_number');
			$table->string('name');
			$table->string('principal');
			$table->string('program')->nullable();
			$table->string('machine_setting')->nullable();
			$table->unsignedInteger('count');
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
        Schema::dropIfExists('self_mades');
    }
}

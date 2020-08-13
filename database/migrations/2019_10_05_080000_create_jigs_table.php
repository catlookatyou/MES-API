<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jigs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
			$table->string('id_number');
			$table->string('name');
			$table->string('financial');
			$table->string('application');
			$table->dateTime('purchase_date');
			$table->string('remarks')->nullable();
			$table->unsignedBigInteger('type_id');
			$table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
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
        Schema::dropIfExists('jigs');
    }
}

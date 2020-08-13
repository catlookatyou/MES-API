<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserves', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
			$table->string('id_number');
			$table->string('name');
			$table->string('financial');
			$table->unsignedInteger('count');
			$table->string('unit');
			$table->string('supplier');
			$table->string('remarks')->nullable();	
            $table->unsignedBigInteger('stuff_id');
            $table->foreign('stuff_id')->references('id')->on('stuffs')->onDelete('restrict');
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
        Schema::dropIfExists('reserves');
    }
}

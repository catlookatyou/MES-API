<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssemblyOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assembly_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
			$table->boolean('isFinished');
			$table->string('id_number');
			$table->string('name');
			$table->string('principal');
			$table->string('img_path')->nullable();
			$table->string('machine');
			$table->dateTime('actual_delivery_date')->nullable();
			$table->dateTime('estimated_delivery_date');
			$table->string('remarks')->nullable();
			$table->unsignedBigInteger('work_order_id');
			$table->foreign('work_order_id')->references('id')->on('work_orders')->onDelete('cascade');
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
        Schema::dropIfExists('assembly_orders');
    }
}

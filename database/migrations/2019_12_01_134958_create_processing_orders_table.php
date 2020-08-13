<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcessingOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processing_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
			$table->boolean('isFinished');
			$table->string('id_number');
			$table->string('name');
			$table->string('principal');
			$table->string('img_path')->nullable();
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
        Schema::dropIfExists('processing_orders');
    }
}

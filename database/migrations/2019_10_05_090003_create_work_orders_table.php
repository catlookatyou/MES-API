<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
			$table->boolean('isFinished')->default(false);
			$table->string('id_number');
			$table->enum('priority',['Low','Normal','High']);
			$table->string('name');
			$table->string('img_path')->nullable();
			$table->dateTime('start_time');
			$table->dateTime('end_time')->nullable();
			$table->dateTime('deadline');
			$table->string('remarks')->nullable();
			$table->unsignedBigInteger('order_id');
			$table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
			$table->unsignedBigInteger('order_product_id');
			$table->foreign('order_product_id')->references('id')->on('order_product')->onDelete('cascade');
			$table->unsignedInteger('order_product_count');
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
        Schema::dropIfExists('work_orders');
    }
}

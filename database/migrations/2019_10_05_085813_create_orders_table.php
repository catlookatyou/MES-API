<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
			$table->boolean('isFinished')->default(false);			
			$table->string('name');
			$table->string('internal_order_number');
			$table->string('external_order_number');
			$table->dateTime('purchase_date');
			$table->dateTime('estimated_delivery_date');
			$table->dateTime('actuel_delivery_date')->nullable();
			$table->dateTime('deadline');
			$table->unsignedTinyInteger('finished_rate')->default(0);
			$table->string('remarks')->nullable();
			$table->string('customer_id');			
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
        Schema::dropIfExists('orders');
    }
}

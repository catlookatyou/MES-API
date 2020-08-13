<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutsourcingPurchaseListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outsourcing_purchase_list', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
			$table->unsignedBigInteger('outsourcing_id');
			$table->foreign('outsourcing_id')->references('id')->on('outsourcings')->onDelete('cascade');
			$table->unsignedBigInteger('purchase_list_id');
			$table->foreign('purchase_list_id')->references('id')->on('purchase_lists')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('outsourcing_purchase_list');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseListStandardPartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_list_standard_part', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
			$table->unsignedBigInteger('standard_part_id');
			$table->foreign('standard_part_id')->references('id')->on('standard_parts')->onDelete('cascade');
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
        Schema::dropIfExists('purchase_list_standard_part');
    }
}

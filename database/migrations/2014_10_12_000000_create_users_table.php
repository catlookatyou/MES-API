<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('id_number')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('password');
			$table->string('special_skill')->nullable();
			$table->string('license')->nullable();
			$table->string('license_img_path')->nullable();
			$table->unsignedBigInteger('company_id')->nullable();
			$table->foreign('company_id')->references('id')->on('companies')->onDelete('set null')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

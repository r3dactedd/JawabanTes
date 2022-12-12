<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('productId');
            $table->string('productName');
            $table->integer('amount');
            $table->string('customerName');
            $table->unsignedBigInteger('status');
            $table->foreign('status')->references('id')->on('status')->onUpdate('cascade')->onDelete('cascade');
            $table->date('transactionDate');
            $table->string('createBy');
            $table->date('createOn');
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
        Schema::dropIfExists('data');
    }
};

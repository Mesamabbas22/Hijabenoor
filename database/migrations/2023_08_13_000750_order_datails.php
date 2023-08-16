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
        //
        Schema::create('orderDetails',function(Blueprint $table){
            $table->id();
            $table->integer('OrderID');
            $table->index('OrderID');
            $table->foreign('OrderID')->references('id')->on('orders')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('ProductID');
            $table->index('ProductID');
            $table->foreign('ProductID')->references('id')->on('tbl_product')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('Quantity');
            $table->decimal('UnitPrice');
            $table->decimal('TotalPrice');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};

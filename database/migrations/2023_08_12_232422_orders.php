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
        Schema::create('orders',function(Blueprint $table){
            $table->id();
            $table->integer('CustomerID');
            $table->foreign('CustomerID')->references('id')->on('customer')->onUpdate('cascade');
            $table->index('CustomerID');
            $table->date('OrderDate');
            $table->integer('PaymentMethodID');
            $table->foreign('PaymentMethodID')->references('id')->on('PaymentMethods')->onDelete('cascade')->onDelete('cascade');
            $table->index('PaymentMethodID');
            $table->string('OrderStatus',20);

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
        // Schema::table('orders',function(Blueprint $table){
        //     $table->dropColumn('TotalAmount')->before('OrderStatus');
        // });
        Schema::table('orders',function(Blueprint $table){
            // $table->decimal('TotalAmount')->before('OrderStatus');
            $table->bigInteger('orderNuber')->before('TotalAmount')->unique();
        });

    }
};

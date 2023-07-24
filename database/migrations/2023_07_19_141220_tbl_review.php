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
        Schema::create('tbl_review',function(Blueprint $table){
            $table->id();
            $table->integer('product_id');
            $table->index('product_id');
            $table->foreign('product_id')->references('id')->on('tbl_product')->onUpdate('cascade');
            $table->integer('user_id');
            $table->index('user_id');
            $table->foreign('user_id')->references('id')->on('tbl_user_customer')->onUpdate('cascade');
            $table->decimal('rating');
            $table->text('comment');

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

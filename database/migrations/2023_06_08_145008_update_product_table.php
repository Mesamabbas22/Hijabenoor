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
        Schema::table('tbl_product',function(blueprint $table){
            $table->integer('stock');
            $table->string('SKU');
            $table->integer('featured');
            $table->integer('new-arrival');
            $table->integer('sale');
            $table->integer('availability');
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

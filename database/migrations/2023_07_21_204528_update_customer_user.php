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
        Schema::table('tbl_user_customer', function (Blueprint $table) {
            //
            $table->string('city',50);
            $table->string('state',50);
            $table->string('zip_code',10);
            $table->integer('country');
            $table->index('country');
            $table->foreign('country')->references('id')->on('bl_country_list')->onUpdate('cascade');
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
        Schema::table('tbl_user_customer', function (Blueprint $table) {
            //
        });
    }
};

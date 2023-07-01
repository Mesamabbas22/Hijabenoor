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
        Schema::table('tbl-brand', function (Blueprint $table) {
            // $table->integer('CountryOfOrigin')->unsigned();
            $table->foreign('CountryOfOrigin')->references('id')->on('tbl_country_list')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl-brand', function (Blueprint $table) {
            //
        });
    }
};

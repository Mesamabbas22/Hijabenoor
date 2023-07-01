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
        Schema::create('tbl-brand',function(Blueprint $blueprint){
            $blueprint->id();
            $blueprint->string('BrandName',255);
            $blueprint->longText('Description');
            $blueprint->integer('CountryOfOrigin');
            $blueprint->longText('Logo');
            $blueprint->timestamps();

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

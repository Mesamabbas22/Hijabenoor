<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('tbl_product',function(Blueprint $blueprint){
            $blueprint->id();
            $blueprint->string('product',255);
            $blueprint->integer('category');
            $blueprint->index('category');
            $blueprint->foreign('category')->references('id')->on('tbl_category')->onUpdate('cascade');
            $blueprint->double('price', 8, 2);
            $blueprint->double('ware_price', 8, 2);
            $blueprint->longText('description');
            $blueprint->string('Brand',255);
            $blueprint->longText('images1')->nullable();
            $blueprint->longText('images2')->nullable();
            $blueprint->longText('images3')->nullable();
            $blueprint->longText('images4')->nullable();
            $blueprint->integer('create_user');
            $blueprint->index('create_user');
            $blueprint->foreign('create_user')->references('id')->on('users')->onUpdate('cascade');
            $blueprint->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

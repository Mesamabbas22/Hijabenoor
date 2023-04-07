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
        Schema::create('tbl_category',function(Blueprint $table){
            $table->id();
            $table->string('name',255);
            $table->integer('create_user');
            $table->index('create_user');
            $table->foreign('create_user')->references('id')->on('users')->onUpdate('cascade');
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('tbl_category');
    }
};

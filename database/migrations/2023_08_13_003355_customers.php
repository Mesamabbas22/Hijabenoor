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
        Schema::create('customers',function(Blueprint $table){
            $table->id();
            $table->string('FirstName',50);
            $table->string('LastName',50);
            $table->string('Email',100);
            $table->string('Phone',20);
            $table->text('Address');
            $table->string('City',50);
            $table->string('PostalCode',20);
            $table->string('Country',20);
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

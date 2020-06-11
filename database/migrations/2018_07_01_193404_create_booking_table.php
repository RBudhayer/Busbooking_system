<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function ( Blueprint $table ) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('bus_id');
            $table->integer('seat_no');
            $table->string('dest1');
            $table->string('dest2');
            $table->string('book_cost');
            $table->dateTime('date')->nullable(); 
            $table->boolean('status');
            $table->boolean('cancel');
            $table->boolean('single');
            $table->string('paymt_type');
            $table->string('amount');
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
        Schema::drop('booking');
    }
}

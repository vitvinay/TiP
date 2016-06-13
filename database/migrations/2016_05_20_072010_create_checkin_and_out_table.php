<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckinAndOutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('checkin_and_out', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->integer('org_id');
            $table->string('timezone');
            $table->date('checkin_date');
            $table->time('checkin_time');
            $table->time('checkout_time');
            $table->string('checkin_pic',100);
            $table->string('checkout_pic',100);
            $table->string('checkin_lat',100);
            $table->string('checkin_long',100);
            $table->string('checkout_lat',100);
            $table->string('checkout_long',100);
            $table->string('checkin_ip',100);
            $table->string('checkout_ip',100);
            $table->integer('break_id');
            $table->float('total_hours');
            $table->timestamps('created_at');
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
                Schema::drop('checkin_and_out');

    }
}

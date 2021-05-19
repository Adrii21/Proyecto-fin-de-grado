<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('from_name');
            $table->string('to_name');
            $table->date('date');
            $table->time('time');
            $table->string('asunto');
            $table->string('contact');
            $table->integer('tlf');
            $table->integer('tlf2');
            $table->string('mail');
            $table->string('mail2');
            $table->string('observaciones')->nullable();


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
        //
    }
}
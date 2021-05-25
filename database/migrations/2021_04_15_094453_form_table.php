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
            $table->integer('tlf2')->nullable();
            $table->string('mail');
            $table->string('mail2')->nullable();
            $table->string('observaciones')->nullable();

            $table->foreignIdFor(\App\Models\User::class)->constrained();

            $table->timestamps();
            $table->softDeletes();
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

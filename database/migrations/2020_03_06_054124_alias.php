<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Alias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alias', function (Blueprint $table) {
            $table->bigIncrements ('id');
            $table->string('alias', 45)->nullable();
            $table->integer('platformid')->nullable();
            $table->integer('operatorid')->nullable();
            $table->string('password', 45)->nullable();
            $table->tinyInteger('status')->nullable();
            $table->integer('assignedby')->nullable();
            $table->integer('reassigned')->nullable();
            $table->dateTime('datecreated')->nullable();
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

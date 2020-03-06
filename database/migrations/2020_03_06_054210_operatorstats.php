<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Operatorstats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operatorstats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('platform_id')->unsigned() ;
            $table->foreign('platform_id')->references('id')->on('platforms');
            $table->unsignedBigInteger('alias_id')->unsigned();
            $table->foreign('alias_id')->references('id')->on('alias');
            $table->date('report_date');
            $table->time('from_time');
            $table->time('to_time');
            $table->text('status')->nullable();
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

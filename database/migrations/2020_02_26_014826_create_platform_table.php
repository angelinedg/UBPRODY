<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlatformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      

        Schema::create('platforms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('platformname', 45)->nullable();
            $table->string('platformtype', 45)->nullable();
            $table->string('platformcode', 45)->nullable();
            $table->string('timezone', 45)->nullable();
            $table->decimal('rate', 11, 2)->default(0, 00);
            $table->text('description')->nullable();
            $table->tinyInteger('status')->default(1);
        });

       
    }
      
       public function down()
       {
           Schema::dropIfExists('platform');
           
       }
   }



<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeautiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beauties', function (Blueprint $table) {
            $table->bigIncrements('id');       
            $table->string('description')->nullable();
            $table->string('name')->nullable();      
            $table->string('sitesUrl')->nullable();
            $table->string('nameImg')->nullable();
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
        Schema::dropIfExists('beauties');
    }
}

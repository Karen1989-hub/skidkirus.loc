<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkidkisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skidkis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('discount')->nullable();
            $table->string('marker')->nullable();
            $table->string('description')->nullable();
            $table->string('name')->nullable();
            $table->string('count')->nullable();
            $table->string('oldPrice')->nullable();
            $table->string('newPrice')->nullable();
            $table->string('sitesUrl')->nullable();
            $table->string('imageUrl')->nullable();
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
        Schema::dropIfExists('skidkis');
    }
}

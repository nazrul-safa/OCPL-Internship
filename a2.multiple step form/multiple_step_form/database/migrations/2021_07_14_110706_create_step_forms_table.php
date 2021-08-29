<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStepFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('step_forms', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('country');
            $table->string('bd_adress')->nullable();
            $table->string('foreign_adress')->nullable();
            $table->string('thana')->nullable();
            $table->string('name');
            $table->integer('age');
            $table->integer('status');    
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
        Schema::dropIfExists('step_forms');
    }
}

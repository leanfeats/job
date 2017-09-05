<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('skill1');
            $table->string('skill2');
            $table->string('skill3')->nullable();
            $table->string('skill4')->nullable();
            $table->string('skill5')->nullable();
            $table->text('more_skills')->nullable();
            $table->double('skill1_rating');
            $table->double('skill2_rating');
            $table->double('skill3_rating')->nullable();
            $table->double('skill4_rating')->nullable();
            $table->double('skill5_rating')->nullable();
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
        Schema::dropIfExists('skills');
    }
}

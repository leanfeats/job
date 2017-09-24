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
            $table->string('name')->unique();
            $table->string('display_name')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });

        // Create table for associating skills to jobs (Many-to-Many)
        Schema::create('job_skill', function (Blueprint $table) {
            $table->integer('job_id')->unsigned();
            $table->integer('skill_id')->unsigned();

            $table->foreign('job_id')->references('id')->on('jobs')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('skill_id')->references('id')->on('skills')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['job_id', 'skill_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_skill'); 
        Schema::dropIfExists('skills');               
    }
}

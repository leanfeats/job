<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_id');
            $table->string('title');
            $table->string('slug');
            $table->integer('type')->comment = "1 = Full-time, 2 = Contract, 3 = Internship, 4 = Part-time";;
            $table->integer('experience_needed')->comment = "1 = 1 year or less, 2 = 2-4 years, 3 = 5 years +, 4 = fresh grad";;
            $table->string('salary_range');
            $table->text('description');	
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
        Schema::dropIfExists('job_skill');
        Schema::dropIfExists('jobs');
    }
}

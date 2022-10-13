<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->foreignId('company_auth_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->mediumText('description');
            $table->string('type');
            $table->string('category');
            $table->string('avaliability');
            $table->string('experiencelevel');
            $table->string('salarymin');
            $table->string('salarymax');
            $table->string('location');
            $table->string('languages');
            $table->string('skills');
            $table->string('file_path');
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
        Schema::dropIfExists('jobs');
    }
}

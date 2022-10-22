<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreelancersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freelancers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('users_id')->constrained()->onDelete('cascade');
            $table->string('firstname');
            $table->string('lastname');
            $table->date('birthdate');
            $table->string('country');
            $table->string('city');
            $table->string('zipcode');
            $table->string('hourly_rate');
            $table->mediumText('description');
            $table->boolean('avaliablity');
            $table->string('languages');
            $table->string('portfoliosite');
            $table->string('blogsite');
            $table->string('image_path');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('freelancers');
    }
}

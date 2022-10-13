<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreelancerAuthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freelancer_auths', function (Blueprint $table) {
            $table->id('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('firstname');
            $table->string('lastname');
            $table->date('birthdate')->nullable(true);
            $table->mediumText('description')->nullable(true);
            $table->string('tagline')->nullable(true);
            $table->boolean('avaliablity')->default(false);
            $table->string('payrate')->nullable(true);
            $table->string('languages')->nullable(true);
            $table->string('location');
            $table->string('skills')->nullable();
            $table->string('portfolio')->nullable(true);
            $table->string('blogsite')->nullable(true);
            $table->string('companywebsite')->nullable(true);
            $table->string('image_path')->nullable(true);
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
        Schema::dropIfExists('freelancer_auths');
    }
}

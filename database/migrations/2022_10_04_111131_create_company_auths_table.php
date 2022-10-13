<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyAuthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_auths', function (Blueprint $table) {
            $table->id('id');
            $table->string('companyname')->unique();
            $table->string('email');
            $table->string('password');
            $table->date('launchdate')->nullable(true);
            $table->string('industry')->nullable(true);
            $table->MediumText('description');
            $table->string('tagline')->nullable(true);
            $table->string('location')->nullable(true);
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
        Schema::dropIfExists('company_auths');
    }
}

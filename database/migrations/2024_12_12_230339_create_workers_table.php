<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->string('profile_pic');
            $table->string('firstname');
            $table->string('surname');
            $table->string('dob');
            $table->string('pob');
            $table->string('marital_status');
            $table->string('spouse');
            $table->integer('num_children');
            $table->string('names_children');
            $table->string('age');
            $table->string('sex');
            $table->string('languages');
            $table->string('qualification');
            $table->string('courses');
            $table->string('contact');
            $table->string('email');
            $table->string('hometown');
            $table->string('residential_address');
            $table->string('kin_name');
            $table->string('kin_phone');
            $table->string('bank_name');
            $table->string('bank_number');
            $table->string('voters_id'); // Set a default value
            $table->string('national_id');
            $table->string('rank');
            $table->string('staff_id')->default('default_value');
            $table->string('date_of_enlishment');
            $table->string('height');
            $table->string('shirt_size');
            $table->string('cap_beret_size')->default('default_value');
            $table->string('boot_size')->default('default_value');
            $table->string('shoe_size')->default('default_value');
            $table->string('disciplinary');
            $table->string('station')->default('default_value');
            $table->string('previous_station');
            $table->string('department')->default('default_value');
            $table->string('previous_department')->default('default_value');
            $table->string('retirement_date')->default('default_value');
            $table->string('medical_conditions')->default('default_value');
            $table->string('allergies')->default('default_value');
            $table->string('blood_type')->default('default_value');
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
        Schema::dropIfExists('workers');
    }
};

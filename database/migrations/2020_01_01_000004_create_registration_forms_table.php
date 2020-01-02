<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationFormsTable extends Migration
{
    public function up()
    {
        Schema::create('registration_forms', function (Blueprint $table) {
            $table->increments('id');

            $table->string('first_name');

            $table->string('last_name')->nullable();

            $table->string('university_roll_number')->nullable();

            $table->string('class_roll_number');

            $table->string('email');

            $table->string('phone_number');

            $table->string('branch');

            $table->string('year');

            $table->string('iste_member');

            $table->timestamps();

            $table->softDeletes();
        });
    }
}

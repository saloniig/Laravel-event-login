<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceRegistrationFormPivotTable extends Migration
{
    public function up()
    {
        Schema::create('attendance_registration_form', function (Blueprint $table) {
            $table->unsignedInteger('attendance_id');

            $table->foreign('attendance_id', 'attendance_id_fk_808227')->references('id')->on('attendances')->onDelete('cascade');

            $table->unsignedInteger('registration_form_id');

            $table->foreign('registration_form_id', 'registration_form_id_fk_808227')->references('id')->on('registration_forms')->onDelete('cascade');
        });
    }
}

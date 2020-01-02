<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegistrationForm extends Model
{
    use SoftDeletes;

    public $table = 'registration_forms';

    const ISTE_MEMBER_RADIO = [
        'yes' => 'Yes',
        'no'  => 'No',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const YEAR_SELECT = [
        'First'  => 'First',
        'Second' => 'Second',
        'Third'  => 'Third',
        'Fourth' => 'Fourth',
    ];

    protected $fillable = [
        'year',
        'email',
        'branch',
        'last_name',
        'first_name',
        'created_at',
        'updated_at',
        'deleted_at',
        'iste_member',
        'phone_number',
        'class_roll_number',
        'university_roll_number',
    ];

    const BRANCH_SELECT = [
        'CSE'                   => 'CSE',
        'IT'                    => 'IT',
        'EE'                    => 'EE',
        'ECE'                   => 'ECE',
        'ME'                    => 'ME',
        'CE'                    => 'CE',
        'AutomobileEngineering' => 'Automobile Engineering',
        'PE'                    => 'PE',
        'Architecture'          => 'Architecture',
        'MBA'                   => 'MBA',
        'MCA'                   => 'MCA',
        'others'                => 'Others',
    ];

    public function classRollNumberAttendances()
    {
        return $this->belongsToMany(Attendance::class);
    }
}

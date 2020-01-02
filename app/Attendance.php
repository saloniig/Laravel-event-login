<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attendance extends Model
{
    use SoftDeletes;

    public $table = 'attendances';

    const PRESENT_RADIO = [
        'Yes' => 'Yes',
        'No'  => 'No',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'present',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function class_roll_numbers()
    {
        return $this->belongsToMany(RegistrationForm::class);
    }
}

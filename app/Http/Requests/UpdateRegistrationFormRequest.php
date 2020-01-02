<?php

namespace App\Http\Requests;

use App\RegistrationForm;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateRegistrationFormRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('registration_form_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'first_name'        => [
                'required',
            ],
            'class_roll_number' => [
                'required',
                'unique:registration_forms,class_roll_number,' . request()->route('registration_form')->id,
            ],
            'email'             => [
                'required',
            ],
            'phone_number'      => [
                'required',
            ],
            'branch'            => [
                'required',
            ],
            'year'              => [
                'required',
            ],
            'iste_member'       => [
                'required',
            ],
        ];
    }
}

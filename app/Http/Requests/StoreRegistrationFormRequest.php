<?php

namespace App\Http\Requests;

use App\RegistrationForm;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreRegistrationFormRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('registration_form_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

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
                'unique:registration_forms',
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

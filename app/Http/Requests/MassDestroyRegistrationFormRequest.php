<?php

namespace App\Http\Requests;

use App\RegistrationForm;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyRegistrationFormRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('registration_form_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:registration_forms,id',
        ];
    }
}

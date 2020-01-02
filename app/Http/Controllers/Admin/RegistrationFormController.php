<?php

namespace App\Http\Controllers\Admin;
use Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyRegistrationFormRequest;
use App\Http\Requests\StoreRegistrationFormRequest;
use App\Http\Requests\UpdateRegistrationFormRequest;
use App\RegistrationForm;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RegistrationFormController extends Controller
{
    public function index()
    {
       abort_if(Gate::denies('registration_form_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $registrationForms = RegistrationForm::all();

        return view('admin.registrationForms.index', compact('registrationForms'));
    }

    public function create()
    {
        abort_if(Gate::denies('registration_form_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.registrationForms.create');
    }

    public function store(RegistrationForm $request)
    {
            $task = new RegistrationForm();
            $task->first_name = request('first_name');
            $task->last_name = request('last_name');
            $task->university_roll_number = request('university_roll_number');
            $task->class_roll_number = request('class_roll_number');
            $task->phone_number = request('phone_number');
            $task->email = request('email');
            $task->branch = request('branch');
            $task->year = request('year');
            $task->iste_member = request('iste_member');
            $task->save();
            if (Auth::check()) {
                return redirect()->route('admin.registration-forms.index');
                        }
                else{
                return ('You are registered');
                }
        //$registrationForm = RegistrationForm::create($request->all());
        //return ('you are registered!!!');
        //return redirect()->route('admin.registration-forms.index');
    }

    public function edit(RegistrationForm $registrationForm)
    {
        abort_if(Gate::denies('registration_form_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.registrationForms.edit', compact('registrationForm'));
    }

    public function update(UpdateRegistrationFormRequest $request, RegistrationForm $registrationForm)
    {
        $registrationForm->update($request->all());

        return redirect()->route('admin.registration-forms.index');
    }

    public function show(RegistrationForm $registrationForm)
    {
        abort_if(Gate::denies('registration_form_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.registrationForms.show', compact('registrationForm'));
    }

    public function destroy(RegistrationForm $registrationForm)
    {
        abort_if(Gate::denies('registration_form_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $registrationForm->delete();

        return back();
    }

    public function massDestroy(MassDestroyRegistrationFormRequest $request)
    {
        RegistrationForm::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

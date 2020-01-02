@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.registrationForm.title') }}
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.registration-forms.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.registrationForm.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $registrationForm->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.registrationForm.fields.first_name') }}
                                    </th>
                                    <td>
                                        {{ $registrationForm->first_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.registrationForm.fields.last_name') }}
                                    </th>
                                    <td>
                                        {{ $registrationForm->last_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.registrationForm.fields.university_roll_number') }}
                                    </th>
                                    <td>
                                        {{ $registrationForm->university_roll_number }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.registrationForm.fields.class_roll_number') }}
                                    </th>
                                    <td>
                                        {{ $registrationForm->class_roll_number }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.registrationForm.fields.email') }}
                                    </th>
                                    <td>
                                        {{ $registrationForm->email }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.registrationForm.fields.phone_number') }}
                                    </th>
                                    <td>
                                        {{ $registrationForm->phone_number }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.registrationForm.fields.branch') }}
                                    </th>
                                    <td>
                                        {{ App\RegistrationForm::BRANCH_SELECT[$registrationForm->branch] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.registrationForm.fields.year') }}
                                    </th>
                                    <td>
                                        {{ App\RegistrationForm::YEAR_SELECT[$registrationForm->year] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.registrationForm.fields.iste_member') }}
                                    </th>
                                    <td>
                                        {{ App\RegistrationForm::ISTE_MEMBER_RADIO[$registrationForm->iste_member] ?? '' }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.registration-forms.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection
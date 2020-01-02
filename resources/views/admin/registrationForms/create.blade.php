@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('cruds.registrationForm.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.registration-forms.store") }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                            <label class="required" for="first_name">{{ trans('cruds.registrationForm.fields.first_name') }}</label>
                            <input class="form-control" type="text" name="first_name" id="first_name" value="{{ old('first_name', '') }}" required>
                            @if($errors->has('first_name'))
                                <span class="help-block" role="alert">{{ $errors->first('first_name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.registrationForm.fields.first_name_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                            <label for="last_name">{{ trans('cruds.registrationForm.fields.last_name') }}</label>
                            <input class="form-control" type="text" name="last_name" id="last_name" value="{{ old('last_name', '') }}">
                            @if($errors->has('last_name'))
                                <span class="help-block" role="alert">{{ $errors->first('last_name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.registrationForm.fields.last_name_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('university_roll_number') ? 'has-error' : '' }}">
                            <label for="university_roll_number">{{ trans('cruds.registrationForm.fields.university_roll_number') }}</label>
                            <input class="form-control" type="text" name="university_roll_number" id="university_roll_number" value="{{ old('university_roll_number', '') }}">
                            @if($errors->has('university_roll_number'))
                                <span class="help-block" role="alert">{{ $errors->first('university_roll_number') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.registrationForm.fields.university_roll_number_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('class_roll_number') ? 'has-error' : '' }}">
                            <label class="required" for="class_roll_number">{{ trans('cruds.registrationForm.fields.class_roll_number') }}</label>
                            <input class="form-control" type="text" name="class_roll_number" id="class_roll_number" value="{{ old('class_roll_number', '') }}" required>
                            @if($errors->has('class_roll_number'))
                                <span class="help-block" role="alert">{{ $errors->first('class_roll_number') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.registrationForm.fields.class_roll_number_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label class="required" for="email">{{ trans('cruds.registrationForm.fields.email') }}</label>
                            <input class="form-control" type="text" name="email" id="email" value="{{ old('email') }}" required>
                            @if($errors->has('email'))
                                <span class="help-block" role="alert">{{ $errors->first('email') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.registrationForm.fields.email_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('phone_number') ? 'has-error' : '' }}">
                            <label class="required" for="phone_number">{{ trans('cruds.registrationForm.fields.phone_number') }}</label>
                            <input class="form-control" type="text" name="phone_number" id="phone_number" value="{{ old('phone_number', '') }}" required>
                            @if($errors->has('phone_number'))
                                <span class="help-block" role="alert">{{ $errors->first('phone_number') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.registrationForm.fields.phone_number_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('branch') ? 'has-error' : '' }}">
                            <label class="required">{{ trans('cruds.registrationForm.fields.branch') }}</label>
                            <select class="form-control" name="branch" id="branch" required>
                                <option value disabled {{ old('branch', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\RegistrationForm::BRANCH_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('branch', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('branch'))
                                <span class="help-block" role="alert">{{ $errors->first('branch') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.registrationForm.fields.branch_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('year') ? 'has-error' : '' }}">
                            <label class="required">{{ trans('cruds.registrationForm.fields.year') }}</label>
                            <select class="form-control" name="year" id="year" required>
                                <option value disabled {{ old('year', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\RegistrationForm::YEAR_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('year', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('year'))
                                <span class="help-block" role="alert">{{ $errors->first('year') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.registrationForm.fields.year_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('iste_member') ? 'has-error' : '' }}">
                            <label class="required">{{ trans('cruds.registrationForm.fields.iste_member') }}</label>
                            @foreach(App\RegistrationForm::ISTE_MEMBER_RADIO as $key => $label)
                                <div>
                                    <input type="radio" id="iste_member_{{ $key }}" name="iste_member" value="{{ $key }}" {{ old('iste_member', '') === (string) $key ? 'checked' : '' }} required>
                                    <label for="iste_member_{{ $key }}" style="font-weight: 400">{{ $label }}</label>
                                </div>
                            @endforeach
                            @if($errors->has('iste_member'))
                                <span class="help-block" role="alert">{{ $errors->first('iste_member') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.registrationForm.fields.iste_member_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection
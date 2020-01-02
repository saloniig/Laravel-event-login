@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.attendance.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.attendances.update", [$attendance->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group {{ $errors->has('present') ? 'has-error' : '' }}">
                            <label class="required">{{ trans('cruds.attendance.fields.present') }}</label>
                            @foreach(App\Attendance::PRESENT_RADIO as $key => $label)
                                <div>
                                    <input type="radio" id="present_{{ $key }}" name="present" value="{{ $key }}" {{ old('present', $attendance->present) === (string) $key ? 'checked' : '' }} required>
                                    <label for="present_{{ $key }}" style="font-weight: 400">{{ $label }}</label>
                                </div>
                            @endforeach
                            @if($errors->has('present'))
                                <span class="help-block" role="alert">{{ $errors->first('present') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.attendance.fields.present_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('class_roll_numbers') ? 'has-error' : '' }}">
                            <label class="required" for="class_roll_numbers">{{ trans('cruds.attendance.fields.class_roll_number') }}</label>
                            <div style="padding-bottom: 4px">
                                <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                                <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                            </div>
                            <select class="form-control select2" name="class_roll_numbers[]" id="class_roll_numbers" multiple required>
                                @foreach($class_roll_numbers as $id => $class_roll_number)
                                    <option value="{{ $id }}" {{ (in_array($id, old('class_roll_numbers', [])) || $attendance->class_roll_numbers->contains($id)) ? 'selected' : '' }}>{{ $class_roll_number }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('class_roll_numbers'))
                                <span class="help-block" role="alert">{{ $errors->first('class_roll_numbers') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.attendance.fields.class_roll_number_helper') }}</span>
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
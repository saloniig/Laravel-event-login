@extends('layouts.admin')
@section('content')
<div class="content">
    @can('registration_form_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route("admin.registration-forms.create") }}">
                    {{ trans('global.add') }} {{ trans('cruds.registrationForm.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('cruds.registrationForm.title_singular') }} {{ trans('global.list') }}
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-RegistrationForm">
                            <thead>
                                <tr>
                                    <th width="10">

                                    </th>
                                    <th>
                                        {{ trans('cruds.registrationForm.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.registrationForm.fields.first_name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.registrationForm.fields.last_name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.registrationForm.fields.university_roll_number') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.registrationForm.fields.class_roll_number') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.registrationForm.fields.email') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.registrationForm.fields.phone_number') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.registrationForm.fields.branch') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.registrationForm.fields.year') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.registrationForm.fields.iste_member') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($registrationForms as $key => $registrationForm)
                                    <tr data-entry-id="{{ $registrationForm->id }}">
                                        <td>

                                        </td>
                                        <td>
                                            {{ $registrationForm->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $registrationForm->first_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $registrationForm->last_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $registrationForm->university_roll_number ?? '' }}
                                        </td>
                                        <td>
                                            {{ $registrationForm->class_roll_number ?? '' }}
                                        </td>
                                        <td>
                                            {{ $registrationForm->email ?? '' }}
                                        </td>
                                        <td>
                                            {{ $registrationForm->phone_number ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\RegistrationForm::BRANCH_SELECT[$registrationForm->branch] ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\RegistrationForm::YEAR_SELECT[$registrationForm->year] ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\RegistrationForm::ISTE_MEMBER_RADIO[$registrationForm->iste_member] ?? '' }}
                                        </td>
                                        <td>
                                            @can('registration_form_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('admin.registration-forms.show', $registrationForm->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('registration_form_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.registration-forms.edit', $registrationForm->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('registration_form_delete')
                                                <form action="{{ route('admin.registration-forms.destroy', $registrationForm->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                                </form>
                                            @endcan

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('registration_form_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.registration-forms.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-RegistrationForm:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection
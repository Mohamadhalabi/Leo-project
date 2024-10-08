@extends('backend.layout.app')
@section('title',trans('backend.menu.categories').' | '.get_translatable_setting('system_name', app()->getLocale()))

@section('style')
    {!! datatable_style() !!}
@endsection
@section('content')
    <div class="col">
        <div class="card   flex-row-fluid mb-2  ">
            <div class="card-header">
                <h3 class="card-title"> {{trans('backend.menu.categories')}}</h3>
                <div class="card-toolbar">
                    {!! @$create_button !!}
                </div>
            </div>
            <!--begin::Card Body-->
            <div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">
                <div class="row">
                    {!! select_status() !!}
                    {!! apply_filter_button() !!}
                </div>


                <div class="row">
                    <div class="col">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-rounded table-striped border gy-7 w-100 gs-7">
                                <thead>
                                <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
                                    <th style="text-align: center"><input type="checkbox" id="select_all"/></th>
                                    <th>{{trans('backend.global.id')}}</th>
                                    <th>{{trans('backend.category.name')}}</th>
                                    <th>{{trans('backend.global.created_at')}}</th>
                                    <th>{{trans('backend.global.updated_at')}} </th>
                                    <th>{{trans('backend.global.status')}}</th>
                                    <th>{{trans('backend.global.actions')}}</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Card Body-->
        </div>
    </div>
@endsection
@section('script')
    {!! datatable_script() !!}
    {!! $datatable_script !!}
    {!! $switch_script !!}

    <script>
        $(document).on('change', '#type', function () {
            type = $('#type').val();
            $.ajax({
                url: "{{route('backend.categories.load.parents')}}",
                method: "post",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "type": type,
                },

            }).done(function (response) {
                    $('#parent').html('');
                    $('#parent').append('<option selected value="{{null}}">{{trans('backend.category.parent')}}</option>');
                    $("#parent").append(response.data.models);
            });
        });
    </script>
@endsection

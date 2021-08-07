@extends('adminmodule::layouts.master')
@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('assets/admin')}}/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endpush
@section('content_header')
@endsection
@section('content')
    <div class="box">
        <div class="box-header with-border">


            <h3 class="box-title">@lang('configmodule::languages.languages')</h3>


            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>

            </div>

        </div>
        <div class="box-body">
            <a href="{{route('admin.languages.create')}}" class=" btn btn-success pull-right"><i class="fa fa-plus"> @lang('configmodule::languages.addNew') </i></a>
            <table id="languages" class="table table-bordered table-striped ">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>country</th>
                    <th>active</th>
                    <th>operations</th>

                </tr>
                </thead>
                <tbody>
                </tbody>

            </table>

        </div>
        <!-- /.box-body -->

        <!-- /.box-footer-->
    </div>
@endsection
@push('javascript')
    <script src="{{asset('assets/admin')}}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('assets/admin')}}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <script>

        $(document).ready(function () {
            $('#languages').DataTable({

                "lengthMenu": [[25, 50, -1], [25, 50, "All"]],
                "processing": true,
                "serverSide": true,

                "ajax": {
                    "url": "{{route('admin.languages.data')}}",
                    "type": "Get"
                },
                "columns": [
                    {data: 'id', name: 'id'},
                    {data: 'title', name: 'title'},
                    {data: 'country', name: 'country'},
                    {data: 'check', name: 'check', orderable: false},
                    {data: 'operations', name: 'operations', orderable: false},
                ]
            })
        })


    </script>
@endpush

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    @include('adminmodule::dashboard.includes.css')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

@include('adminmodule::dashboard.includes.header')
@include('adminmodule::dashboard.includes.aside')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            @yield('content_header')
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->

        @yield('content')
        <!-- ./col -->


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@include('adminmodule::dashboard.includes.footer')
<!-- Control Sidebar -->

    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
@include('adminmodule::dashboard.includes.js')
</body>
</html>

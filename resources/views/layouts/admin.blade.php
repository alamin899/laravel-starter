<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ URL::asset('images/logo.png') }}" type="image/x-icon"/>
    <title>@yield('title')</title>
    <!-- Styles -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet" crossorigin="anonymous">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper" id="app">
    <!-- Navbar -->
@include('web.include.navbar')
<!-- /navbar -->

    <!-- Main Sidebar Container -->
@include('web.include.sidebar')

<!-- /Main Sidebar Container -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            @yield('content')
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @include('web.include.footer')

</div>

<script src="{{ asset('/js/app.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.select2Dropdown').select2();
    });
    setTimeout(function () {
        $('.message').fadeOut('fast');
    }, 5000);

</script>
</body>
</html>
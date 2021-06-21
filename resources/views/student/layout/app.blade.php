<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Student - Portal</title>

{{--    <link rel="icon" href="../../../img/core-img/favicon.ico">--}}

    <link rel="stylesheet" href="{{ asset('../../../../css/app.css') }}">

    <link rel="stylesheet" href="{{asset('../../../../css/student/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset("../../../../css/student/style.css")}}">


    @livewireStyles


</head>

<body>

<div id="preloader">
    <div class="loader"></div>
</div>

<div class="vcard-main-wrapper">
    <div class="vcard-content-wrapper">

        <div class="horizontal-contact-btn">
            <a href="#" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"
               class="btn vcard-btn contact-btn text-dark"><i class="fa fa-sign-out"></i><span>Log Out</span></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>

        <header class="header_area">
            <!-- Logo -->
            <div class="logo d-flex justify-content-center align-items-center">
                <a href="{{route('student.dashboard')}}"><img src="../../../img/core-img/stu-logo.png" alt="">
                    <br><span class="badge badge-success">{{ Auth::user()->name }}</span></a>
                <div class="nav-toggle">
                    <i class="fa fa-bars"></i>
                </div>
            </div>

        @yield('content_student')

    </div>
</div>


@livewireScripts


<script src="../../../js/student/jquery/jquery-2.2.4.min.js"></script>
<script src="../../../js/student/bootstrap/popper.min.js"></script>
<script src="../../../js/student/bootstrap/bootstrap.min.js"></script>
<script src="../../../js/student/plugins/plugins.js"></script>
<script src="../../../js/student/active.js"></script>

</body>

</html>

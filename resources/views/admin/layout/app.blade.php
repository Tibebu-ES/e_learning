<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Dashboard</title>


    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/admin/adminlte.min.css') }}">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/summernote/summernote-bs4.css') }}"/>
    <link rel="stylesheet" href="{{ asset('js/datatables-bs4/css/dataTables.bootstrap4.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('js/datatables-responsive/css/responsive.bootstrap4.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset("css/elearning.css") }}">

    @livewireStyles

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

<div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('admin.dashboard') }}" class="nav-link active"><strong>Home - {{ $current }} </strong></a>
            </li>
        </ul>


        <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell"></i>
                    @if(auth()->user()->unreadNotifications()->count() != 0)
                        <span
                            class="badge badge-warning navbar-badge">{{ auth()->user()->unreadNotifications()->count()  }}</span>
                    @else
                        <span class="badge badge-warning navbar-badge"></span>
                    @endif
                </a>

                <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right"
                     style="max-height: 400px; overflow-y: auto">

                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin.notice') }}" method="post">
                                {{ @csrf_field() }}
                                <div class="form-group">
                                    <textarea type="text" name="message" class="form-control"
                                              placeholder="message"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary float-right" value="Send Notice">
                                </div>
                            </form>
                        </div>
                    </div>


                    @foreach(Auth::user()->notifications as $notification)

                        <div class="card bg-gray-light">
                            <div class="card-body">
                                <h3 class="dropdown-item-title"><span class="fa fa-envelope"/>
                                    {!! $notification->data['message'] !!}
                                </h3>
                                <p class="text-sm text-muted float-right mt-2"><i class="far fa-clock mr-1"></i> {{ $notification->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                        {{ $notification->markAsRead() }}
                    @endforeach

                </div>
            </li>


            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                          style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>

        </ul>

    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <a href="{{ route('admin.dashboard') }}" class="brand-link">
            <img src="{{ asset('img/core-img/stu-logo-w.png') }}" alt="Dagi E-learning Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">E-Learning Admin</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('img/admin/admin-icon.png') }}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                </div>
            </div>

            @yield('admin-sidebar')

        </div>
        <!-- /.sidebar -->
    </aside>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
            </div>
        </div>

        @yield('admin-content')

    </div>


    <footer class="main-footer">
        <strong>Copyright ?? {{ date('Y') }} <a href="">E-learning Administration</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.0
        </div>
    </footer>

</div>


@livewireScripts

<script src="{{ asset('js/jquery/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('js/admin/adminlte.js') }}"></script>
<script src="{{ asset('js/summernote/summernote.js') }}"></script>
<script src="{{ asset('js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('js/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>



<script>
    $(function () {
        // Summernote there is a clash between forum and alpine.js
        $('.summernote').summernote();

        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });

    })
</script>


</body>
</html>

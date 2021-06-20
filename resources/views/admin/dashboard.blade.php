@extends('admin.layout.app')

@section('admin-sidebar')
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item has-treeview">
                <a href="{{ route('admin.dashboard') }}" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                    <span class="fa fa-dashboard"></span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.student') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>Students</p>
                </a>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>Courses<i class="fas fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.standard') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Standard</p>
                        </a>
                    </li>
                    <li class="nat-item">
                        <a href="{{ route('admin.eps') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>EPS</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="{{ route('admin.teachers') }}" class="nav-link">
                    <i class="nav-icon fas fa-pen"></i>
                    <p>Teachers</p>
                </a>
            </li>
            <li class="nav-item has-treeview">
                <a href="{{ route('admin.document') }}" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>Documents</p>
                </a>
            </li>
            <li class="nav-item has-treeview">
                <a href="{{ route('admin.discussion')}}" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>Forums</p>
                </a>
            </li>
            <li class="nav-item has-treeview">
                <a href="{{ route('admin.classroom')}}" class="nav-link">
                    <i class="nav-icon fas fa-microphone"></i>
                    <p>Class Room</p>
                </a>
            </li>
        </ul>
    </nav>
@endsection

@section('admin-content')
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Students</span>
                            <span class="info-box-number">{{ $c_student }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Programs</span>
                            <span class="info-box-number">{{ $c_program }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Teachers</span>
                            <span class="info-box-number">{{ $c_teacher }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Discussions</span>
                            <span class="info-box-number">{{ $c_discussion }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>



            <div class="row">

                <div class="col-md-8">
                    <!-- USERS LIST -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><strong>New Students</strong></h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                        class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <ul class="users-list clearfix">
                                @forelse($latest_stu as $stu)
                                    <li>
                                        <img src="/../dist/img/icons-learn.png" alt="User Image">
                                        <a class="users-list-name" href="#">{{ $stu->name }}</a>
                                        <span class="users-list-date">{{ $stu->created_at->diffForHumans() }}</span>
                                    </li>
                                @empty
                                    <li>There are no students in your system!</li>
                                @endforelse

                            </ul>
                            <!-- /.users-list -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer text-center">
                            <a href="{{route('admin.student')}}">View All Student - <strong>Course Registered</strong></a>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /.col -->

                <div class="col-md-4">

                    <!-- PRODUCT LIST -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><strong>Recently Added Programs</strong></h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <ul class="products-list product-list-in-card pl-2 pr-2">

                                @forelse($latest_pro as $pro)
                                    <li class="item">
                                        <div class="product-img">
                                            <img src="/../dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                                        </div>
                                        <div class="product-info">
                                            <a href="javascript:void(0)" class="product-title">{{ $pro->course_name }}
                                                <span class="badge badge-danger float-right">{{ $pro->category }}</span></a>
                                            <span class="product-description">{{ $pro->description }}</span>
                                        </div>
                                    </li>
                                @empty
                                    <a>No courses!</a>
                                @endforelse


                            </ul>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer text-center">
                            <a href="{{ route('admin.standard') }}" class="uppercase">View All Programs</a>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>


        </div>
    </section>
@endsection


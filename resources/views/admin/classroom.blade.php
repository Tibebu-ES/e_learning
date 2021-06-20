@extends('admin.layout.app')

@section('admin-sidebar')
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item has-treeview">
                <a href="{{ route('admin.dashboard')}}" class="nav-link">
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
                        <a href="{{ route('admin.standard')}}" class="nav-link">
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
                    <i class="nav-icon fas fa-edit"></i>
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
                <a href="{{ route('admin.discussion') }}" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>Forums</p>
                </a>
            </li>
            <li class="nav-item has-treeview">
                <a href="{{ route('admin.classroom')}}" class="nav-link active">
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
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <div>
                                <h3 class="card-title"><strong>Class Room Scheduler</strong></h3>
                                <span data-toggle="modal" data-target="#exampleModalCenter"
                                      class="float-right fa fa-address-book fa-2x"></span>
                            </div>
                        </div>

                        <div class="card-body">

                            <livewire:class-room-data/>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">New Class-Room</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="{{ route('admin.add.classroom') }}">
                            {{@csrf_field()}}
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Class Name</label>
                                    <input type="text" name="className" class="form-control" placeholder="Class Name">
                                </div>
                                <div class="form-group">
                                    <label>Course</label>
                                    <select name="course_name" class="form-control">
                                        @forelse($allCourses as $c)
                                            <option>{{ $c['course_name'] }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Teacher</label>
                                    <select name="teacher" class="form-control">
                                        @forelse($allTeachers as $teacher)
                                            <option>{{ $teacher['full_name'] }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Student</label>
                                    <select name="users[]" multiple class="form-control">
                                        @forelse($allUsers as $user)
                                            <option>{{ $user['name'] }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Start Date</label>
                                            <input type="date" class="form-control" name="start_date"
                                                   placeholder="start date">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>End Date</label>
                                            <input name="end_date" type="date" class="form-control" name="start_date"
                                                   placeholder="end date">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-lg">Create Class</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
            </div>
        </div>
    </div>

@endsection

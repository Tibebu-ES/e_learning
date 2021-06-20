@extends('admin.layout.app')


@section('admin-sidebar')
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item has-treeview">
                <a href="{{route('admin.dashboard')}}" class="nav-link">
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
                <a href="{{ route('admin.teachers') }}" class="nav-link active">
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
                <a href="{{ route('admin.classroom') }}" class="nav-link">
                    <i class="nav-icon fas fa-microphone"></i>
                    <p>Class Room</p>
                </a>
            </li>
        </ul>
    </nav>
@endsection



@section('admin-content')

    <div>

        <section class="content">


            <div class="card card-solid">
                <div class="card-body pb-0">
                    <div class="row d-flex align-items-stretch">

                        @forelse($teachers as $teach)
                            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                <div class="card bg-light">
                                    <div class="card-header text-muted border-bottom-0">
                                        {{$teach->speciality}}
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="lead"><b>{{ $teach->full_name }}</b></h2>
                                                <p class="text-muted text-sm"><b>Assigned: </b>
                                                    <span class="badge badge-primary">{{ $teach->assigned_course }}</span></p>
                                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: {{ $teach->address }}</li>
                                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: {{ $teach->mobile }}</li>
                                                </ul>
                                            </div>
                                            <div class="col-5 text-center">
                                                <img src="../../dist/img/AdminLTELogo.png" alt="user-avatar" class="img-circle img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="text-right">
                                            <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#teachDetails{{$loop->index}}">
                                                <i class="fas fa-user"></i> New Task
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="teachDetails{{$loop->index}}" tabindex="-1" role="dialog" aria-labelledby="teachDetailsTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">

                                        <div class="modal-body">
                                            <!-- general form elements -->
                                            <div class="card card-primary">
                                                <div class="card-header">
                                                    <h3 class="card-title">Assign Course</h3>
                                                </div>
                                                <!-- /.card-header -->
                                                <!-- form start -->
                                                <form method="post" action="{{ route('admin.assignCourse',$teach->id) }}">
                                                    {{@csrf_field()}}
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label>Select Course</label>
                                                            <select name="course_name" class="form-control">
                                                                @forelse($Courses as $cs)
                                                                    <option>{{ $cs['course_name'] }}</option>
                                                                @empty
                                                                @endforelse
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- /.card-body -->

                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary">Assign</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- /.card -->

                                        </div>

                                    </div>
                                </div>
                            </div>
                        @empty
                            <p>There are no teacher in the list. Create one!</p>
                        @endforelse

                    </div>
                </div>

                <div class="card-footer">
                    <nav aria-label="Contacts Page Navigation">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                            Add New Teacher
                        </button>
                    </nav>
                </div>
            </div>

        </section>




        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-body">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">New Teacher</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post" action="{{ route('admin.addTeacher') }}">
                                {{@csrf_field()}}
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" name="full_name" class="form-control" placeholder="full name">
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" class="form-control" placeholder="address">
                                    </div>
                                    <div class="form-group">
                                        <label>Mobile</label>
                                        <input type="text" name="mobile" class="form-control" placeholder="mobile">
                                    </div>
                                    <div class="form-group">
                                        <label>Speciality</label>
                                        <input type="text" name="speciality" class="form-control" placeholder="Speciality">
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Add Teacher</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->

                    </div>

                </div>
            </div>
        </div>



    </div>


@endsection

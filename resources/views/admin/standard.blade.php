@extends('admin.layout.app')

@section('admin-sidebar')
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item has-treeview">
                <a href="{{ route('admin.dashboard') }}" class="nav-link">
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
            <li class="nav-item has-treeview menu-open">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>Courses<i class="fas fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nat-item">
                        <a href="{{ route('admin.standard')}}" class="nav-link active">
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
                <a href="{{ route('admin.discussion') }}" class="nav-link">
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
                <div class="col-md-12">

                    @livewire('course')

                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">

                                <div class="modal-body">
                                    <!-- general form elements -->
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h3 class="card-title">New Program</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <form method="post" action="{{ route('add.std.program') }}">
                                            {{@csrf_field()}}
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label>Category</label>
                                                    <select name="category" class="form-control">
                                                        <option>A1</option>
                                                        <option>A2</option>
                                                        <option>B2</option>
                                                        <option>C2</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Course Name</label>
                                                    <input type="text" name="course_name" class="form-control" placeholder="course name">
                                                </div>
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea type="text" name="description" class="form-control" placeholder="description"></textarea>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Start Date</label>
                                                            <input type="date" class="form-control" name="start_date" placeholder="start date">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>End Date</label>
                                                            <input name="end_date" type="date" class="form-control" name="start_date" placeholder="end date">
                                                        </div>
                                                    </div>
                                                </div>



                                            </div>
                                            <!-- /.card-body -->

                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.card -->

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

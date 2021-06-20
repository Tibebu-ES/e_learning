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
                <a href="{{ route('admin.student') }}" class="nav-link active">
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
                <a href="{{ route('admin.document')}}" class="nav-link">
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
                <a href="{{ route('admin.classroom') }}" class="nav-link">
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
                    <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Student List</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>

                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                    <tr>
                                        <th>Student ID</th>
                                        <th>Full Name</th>
                                        <th>Status</th>
                                        <th>Course</th>
                                        <th>Register Date</th>
                                        <th class="text-center">Permission</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($data as $d)
                                        <tr>
                                            <td>{{ $d['user_id'] }}</td>
                                            <td>{{ $d['user_name'] }}</td>
                                            <td><span class="badge badge-success">Registered</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#00a65a" data-height="20">
                                                    {{ $d['course_name'] }}
                                                </div>
                                            </td>
                                            <td>{{ $d['registration_date'] }}</td>
                                            @if($d['payment'])
                                                <td class="text-center"><input type="checkbox" checked name="allowed"
                                                                               onclick="event.preventDefault();
                                                                                   document.getElementById('form-allow-{{ $d['id'] }}').submit();"/>
                                                </td>
                                            @else
                                                <td class="text-center"><input type="checkbox" name="allowed"
                                                                               onclick="event.preventDefault();
                                                                                   document.getElementById('form-allow-{{ $d['id'] }}').submit();"/>
                                                </td>
                                            @endif

                                            <form id="{{ "form-allow-".$d['id'] }}" method="post"
                                                  action="{{ route('admin.stud.allowed',$d['id']) }}"
                                                  style="display: none">
                                                @csrf
                                                @method('patch')
                                            </form>
                                            @if($d['completed'])
                                                <td>
                                                    <div class="badge badge-danger">Finished</div>
                                                </td>
                                            @else
                                                <td>
                                                    <div class="badge badge-info">In-progress</div>
                                                </td>
                                            @endif
                                        </tr>
                                    @empty
                                        <tr>
                                            <td>
                                                <p>No student records found!</p>
                                            </td>
                                        </tr>

                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection



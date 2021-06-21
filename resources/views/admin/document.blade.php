@extends('admin.layout.app')

@section('admin-sidebar')
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item has-treeview">
                <a href="{{ route('admin.dashboard') }}" class="nav-link">
                    <i class="nav-icon fa fa-dashboard"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.student') }}" class="nav-link">
                    <i class="nav-icon fa fa-user"></i>
                    <p>Students</p>
                </a>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-copy"></i>
                    <p>Courses<i class="fa fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.standard') }}" class="nav-link">
                            <i class="fa fa-circle nav-icon"></i>
                            <p>Standard</p>
                        </a>
                    </li>
                    <li class="nat-item">
                        <a href="{{ route('admin.eps') }}" class="nav-link">
                            <i class="fa fa-circle nav-icon"></i>
                            <p>EPS</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="{{ route('admin.teachers') }}" class="nav-link">
                    <i class="nav-icon fa fa-pencil"></i>
                    <p>Teachers</p>
                </a>
            </li>
            <li class="nav-item has-treeview">
                <a href="{{ route('admin.document') }}" class="nav-link active">
                    <i class="nav-icon fa fa-files-o"></i>
                    <p>Documents</p>
                </a>
            </li>
            <li class="nav-item has-treeview">
                <a href="{{ route('admin.discussion')}}" class="nav-link">
                    <i class="nav-icon fa fa-edit"></i>
                    <p>Forums</p>
                </a>
            </li>
            <li class="nav-item has-treeview">
                <a href="{{ route('admin.classroom')}}" class="nav-link">
                    <i class="nav-icon fa fa-microphone"></i>
                    <p>Class Room</p>
                </a>
            </li>
        </ul>
    </nav>
@endsection

@section('admin-content')

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Course Content</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                                <i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body bg-gray-light">

                        <form action="{{ route('admin.create.content') }}" method="post"
                              enctype="multipart/form-data">
                            @csrf

                            <livewire:class-content/>

                        </form>


                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="card bg-gradient-dark">
                    <div class="card-header">
                        <h3 class="card-title"><strong>Created Courses</strong></h3>
                    </div>


                    <div class="card-body">
                        <div id="accordion">

                            @foreach($docs as $doc)
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h4 class="card-title w-100">
                                            <a class="d-block w-100" data-toggle="collapse"
                                               href="#collapseOne{{$loop->index}}">
                                                {{ $doc->course_name }}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne{{ $loop->index }}" class="collapse" data-parent="#accordion">
                                        <div class="card-body text-black-50">
                                            @if(json_decode($doc->course_title) != null)
                                                @for($i=0;$i<count(json_decode($doc->course_title));$i++)
                                                    <strong>{!! json_decode($doc->course_title) [$i]!!}</strong>
                                                    <p>{!! json_decode($doc->course_content)[$i] !!}</p>
                                                    <hr>
                                                @endfor
                                            @endif

                                            @if($doc->course_attachment != null)
                                                @for($i=0;$i<count(json_decode($doc->course_attachment));$i++)
                                                    @if($i==0)
                                                        <p><strong>Attachments</strong></p>
                                                    @endif
                                                    <a href="#">{{ json_decode($doc->course_attachment)[$i] }}</a><br>
                                                @endfor
                                            @endif


                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection

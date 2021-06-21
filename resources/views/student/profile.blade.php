@extends('student.layout.app')

@section('content_student')

    <!-- Menu -->
    <ul class="vcard-nav">
        <li><a href="{{ route('student.dashboard') }}">Dashboard</a></li>
        <li class="active"><a href="{{route('student.profile')}}">Profile</a></li>
        <li><a href="{{route('student.course')}}">Courses</a></li>
        <li><a href="{{route('student.classroom')}}">Class Room</a></li>
    </ul>
    </header>



    <div class="vcard-page-content-wrapper d-flex align-items-end">
        <div class="row page-content">
            <div class="col-md-12">

                <div class="card">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1>Profile</h1>
                                </div>

                            </div>
                        </div><!-- /.container-fluid -->
                    </section>

                    <!-- Main content -->
                    <section class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-3">

                                    <!-- Profile Image -->
                                    <div class="card card-primary card-outline">
                                        <div class="card-body box-profile">
                                            <div class="text-center pb-3">
                                                <img class="profile-user-img img-fluid img-circle"
                                                     src="../img/student/stud-icon.png"
                                                     alt="User profile picture">
                                            </div>

                                            <h4 class="profile-username text-center">{{ Auth::user()->name }}</h4>

                                            <ul class="list-group list-group-unbordered mb-3">
                                                <li class="list-group-item">
                                                    <b>Gender</b> <a class="float-right">{{ Auth::user()->gender }}</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <b>Mobile</b> <a class="float-right">{{ Auth::user()->mobile }}</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <b>Description</b> <a
                                                        class="float-left">{{ Auth::user()->description }}</a>
                                                </li>
                                            </ul>

                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->

                                </div>
                                <!-- /.col -->
                                <div class="col-md-9">
                                    <div class="card ">
                                        <div class="card-header">
                                            <ul class="nav nav-pills">
                                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Forum</a></li>
                                                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                                            </ul>
                                        </div><!-- /.card-header -->
                                        <div class="card-body">
                                            <div class="tab-content">
                                                <div class="active tab-pane pb-4" id="activity"
                                                     style="max-height: 340px; overflow-y: auto;">
                                                    @livewire('stu-topic-comment')
                                                </div>
                                                <!-- /.tab-pane -->

                                                <div class="tab-pane " id="settings">
                                                    <form method="post" action="{{ route('stud.updateProfile') }}" class="form-horizontal"
                                                          action="{{ route('profile.update') }}"
                                                          method="post">
                                                        {{@csrf_field()}}
                                                        @method('put')
                                                        <div class="form-group row">
                                                            <label for="inputName" class="col-sm-2 col-form-label">Full Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="name" class="form-control" id="inputName"
                                                                       value="{{ Auth::user()->name }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control"
                                                                       value="{{ Auth::user()->email }}"
                                                                       id="inputEmail" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputName2" class="col-sm-2 col-form-label">Gender</label>
                                                            <div class="col-sm-10">
                                                                <input type="text"  class="form-control"
                                                                       value="{{ Auth::user()->gender }}"
                                                                       id="inputName2" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputName2" class="col-sm-2 col-form-label">Mobile</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="mobile" class="form-control"
                                                                       value="{{ Auth::user()->mobile }}"
                                                                       id="inputName2" >
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputExperience"
                                                                   class="col-sm-2 col-form-label">Description</label>
                                                            <div class="col-sm-10">
                                                                <textarea name="description" class="form-control" id="inputExperience" rows="1"
                                                                          placeholder="Bio">{{ Auth::user()->description }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="offset-sm-2 col-sm-10">
                                                                <button type="submit" class="btn btn-danger float-right">Submit
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- /.tab-pane -->
                                            </div>
                                            <!-- /.tab-content -->
                                        </div><!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </section>
                    <!-- /.content -->
                </div>

            </div>
        </div>
    </div>



@endsection

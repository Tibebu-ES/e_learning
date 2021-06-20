@extends('student.layout.app')

@section('content_student')

    <ul class="vcard-nav">
        <li class="active"><a href="{{route( 'student.dashboard') }}">Dashboard</a></li>
        <li><a href="{{route('student.profile')}}">Profile</a></li>
        <li><a href="{{route('student.course')}}">Courses</a></li>
        <li><a href="{{route('student.classroom')}}">Class Room</a></li>
    </ul>

    </header>


    <div class="vcard-page-content-wrapper d-flex align-items-end">

        <div class="page-content row">

            <div class="col-lg-8 col-md-8">
                <div class="work-experience-area">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="section-heading">
                                    <h2>Activities</h2>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="work-experience-timeline-wrapper">
                                    <!-- Timeline Vertical Line -->
                                    <div class="timeline-row"></div>

                                    @forelse($stud_course as $std)
                                        @if($loop->index % 2 == 0)
                                            <div class="single-experience-timeline active odd-item">
                                                <h5 class="float-right border rounded bg-gray p-1">{{$std['category']}}</h5>
                                                <h3>{{$std["course_name"]}}</h3><br>
                                                <small class="float-right">{{ $std->created_at->diffForHumans() }}</small>
                                                @foreach($stud_progress as $sp)
                                                    @if($std['course_name'] == $sp['course_name'])
                                                        <strong>Status: {{ $sp['current_value'] }} %</strong>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-primary progress-bar-striped"
                                                                 role="progressbar"
                                                                 aria-valuenow="40" aria-valuemin="0"
                                                                 aria-valuemax="100"
                                                                 style="width: {{ $sp['current_value'] }}%">
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div><br><br><br><br><br><br><br>
                                        @else
                                            <div class="single-experience-timeline even-item">
                                                <h5 class="float-right border rounded bg-gray p-1">{{$std['category']}}</h5>
                                                <h3>{{$std["course_name"]}}</h3><br>
                                                <small class="float-right">{{ $std->created_at->diffForHumans() }}</small>
                                                @foreach($stud_progress as $sp)
                                                    @if($std['course_name'] == $sp['course_name'])
                                                        <strong>Status: {{ $sp['current_value'] }} %</strong>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-primary progress-bar-striped"
                                                                 role="progressbar"
                                                                 aria-valuenow="40" aria-valuemin="0"
                                                                 aria-valuemax="100"
                                                                 style="width: {{ $sp['current_value'] }}%">
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div><br><br>
                                        @endif
                                    @empty
                                        <div class="single-experience-timeline active odd-item">
                                            <h5>You haven't registered at least one course.</h5>
                                            <a class="text-red" href="{{route('student.course')}}">Please follow this
                                                link to register!</a>
                                        </div>
                                    @endforelse


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="card bg-transparent">
                    <div class="position-relative p-3">
                        <div class="ribbon-wrapper ribbon-xl">
                            <div class="ribbon bg-danger text-lg">
                                Notice Board
                            </div>
                        </div>

                        @foreach(Auth::user()->notifications as $notification)
                            <div class="card bg-gradient-yellow text-black-100">
                                <div class="card-header">
                                    <h5>{{ $notification->data['user_name'] }}</h5>
                                    <small>{{ $notification->created_at->diffForHumans() }}</small>
                                </div>
                                <div class="card-body">
                                    <h7>{{ $notification->data['message'] }}</h7>
                                </div>
                            </div>
                        @endforeach

                        <div class="card bg-gradient-yellow text-black-100">
                            <div class="card-header">
                                <h5>Welcome to D-Teach</h5>
                                <small>online e-learning portal</small>
                            </div>
                            <div class="card-body">
                                <h7>We have alot of courses and that include private
                                    VIP and group courses. so, by going to the course tab and register
                                    what you want to study and go to classroom to take the lessons.
                                </h7>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

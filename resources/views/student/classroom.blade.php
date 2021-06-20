@extends('student.layout.app')

@section('content_student')

    <ul class="vcard-nav">
        <li><a href="{{route( 'student.dashboard' )}}">Dashboard</a></li>
        <li><a href="{{route('student.profile')}}">Profile</a></li>
        <li><a href="{{route('student.course')}}">Courses</a></li>
        <li class="active"><a href="{{route('student.classroom')}}">Class Room</a></li>
    </ul>

    </header>

    <div class="vcard-page-content-wrapper d-flex align-items-end">
        <div class="page-content">


            <div class="portfolio-area clearfix">
                <div class="container-fluid">

                    <h3 class="mb-2 mt-4">What do you want to learn?</h3>
                    <p>The following course has been registered on this account.</p>
                    <div class="row">
                        @forelse($stud_course as $std)
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="small-box bg-info">
                                    <div class="ribbon-wrapper ribbon-lg">
                                        @if($std['completed'])
                                            <div class="ribbon bg-danger">
                                                Finished
                                            </div>
                                        @endif
                                    </div>
                                    <div class="inner">
                                        <h3>{{ $std["course_name"] }}</h3>
                                        <p class="text-white">{{$std['category']}}</p>
                                        @if($std['completed'])
                                            <div class="pb-4">
                                                <span class="fa fa-download fa-2x float-right text-white"
                                                      style='cursor: pointer'/>
                                            </div>
                                        @elseif($std['payment'])
                                            <div class="pb-4">
                                                @foreach($pre_test as $test)
                                                    @if(($test->course_id == $std['program_id']) && ($test->result != null))
                                                        <div class="float-right pr-2">
                                                            <span class="badge badge-success">Passed - {{ $test->result.'/'.$test->amount }}</span>
                                                        </div>
                                                    @else
                                                        <a href="{{ route('stud.pretest',$std['program_id'])  }}">
                                                            <span class="fa fa-question-circle-o fa-2x float-right text-white"/>
                                                        </a>
                                                    @endif
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                    @if($std['payment'])
                                        @if(!$std['completed'])
                                            <a href="{{ route('stud.virtual.class',$std['program_id']) }}"
                                               class="small-box-footer bg-secondary">
                                                Continue <i class="fa fa-hand-pointer-o"></i>
                                            </a>
                                        @endif
                                    @else
                                        <a href="#" class="small-box-footer">
                                            <span class="badge badge-warning">Pending</span> <i
                                                class="fa fa-dollar"></i>
                                        </a>
                                    @endif

                                </div>
                            </div>
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


@endsection

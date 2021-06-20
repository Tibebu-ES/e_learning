@extends('student.layout.app')

@section('content_student')
        <ul class="vcard-nav">
            <li><a href="{{route( 'student.dashboard') }}">Dashboard</a></li>
            <li ><a href="{{route('student.profile')}}">Profile</a></li>
            <li class="active"><a href="{{route('student.course')}}">Courses</a></li>
            <li><a href="{{route('student.classroom')}}">Class Room</a></li>
        </ul>
    </header>



    <div class="vcard-page-content-wrapper d-flex align-items-end">
        <div class="page-content">

            @livewire('student-course')

        </div>
    </div>



@endsection

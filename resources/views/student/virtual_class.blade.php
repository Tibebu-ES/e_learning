@extends('student.layout.app')

@section('content_student')

    <ul class="vcard-nav">
        <li><a href="{{route( 'student.dashboard' )}}">Dashboard</a></li>
        <li><a href="{{route('student.profile')}}">Profile</a></li>
        <li><a href="{{route('student.course')}}">Courses</a></li>
        <li><a href="{{route('student.classroom')}}">Class Room</a></li>
        <li class="active"><a href="#"><span class="badge badge-success">{{ $user->name }} - Class</span></a></li>
    </ul>

    </header>


    <div class="vcard-page-content-wrapper d-flex align-items-end">
        <div class="page-content">

            <div class="portfolio-area">
                <div class="container-fluid">

                    <div class="row">

                        <livewire:slidview/>

                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection

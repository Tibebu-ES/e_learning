@extends('app')

@section('index_content')

    <header class="header d-flex flex-row ">
        <div class="header_content d-flex flex-row align-items-center">
            <!-- Logo -->
            <div class="logo_container">
                <div class="logo">
                    <img src="img/core-img/stu-logo.png" alt="Logo">
                </div>
            </div>

            <!-- Main Navigation -->
            <nav class="main_nav_container float-right" style="background-color: transparent; box-shadow: none">
                <div class="main_nav_1">
                    <ul class="main_nav_list float-right">
                        <li class="main_nav_item active"><a href="{{ url('/') }}">Home</a></li>
                        <li class="main_nav_item"><a href="{{ url('/courses') }}">Courses</a></li>
                        <li class="main_nav_item"><a href="{{ url('/contact')}}">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="header_side d-flex flex-row justify-content-center align-items-center">
            <img src="img/home/phone-call.svg" alt="">
            <span class="font-bold">+251 993 632542</span>
        </div>

        <!-- Hamburger -->
        <div class="hamburger_container">
            <i class="fas fa-bars trans_200"></i>
        </div>

    </header>
    <!-- Menu -->
    <div class="menu_container_home menu_mm">

        <!-- Menu Close Button -->
        <div class="menu_close_container">
            <div class="menu_close"></div>
        </div>

        <!-- Menu Items -->
        <div class="menu_inner menu_mm">
            <div class="menu menu_mm">
                <ul class="menu_list menu_mm">
                    <li class="menu_item menu_mm active"><a href="{{ url('/') }}">Home</a></li>
                    <li class="menu_item menu_mm"><a href="{{ url('/courses') }}">Courses</a></li>
                    <li class="menu_item menu_mm"><a href="{{ url('/contact')}}">Contact</a></li>
                </ul>

                <!-- Menu Social -->

                <div class="menu_social_container menu_mm">
                    <ul class="menu_social menu_mm">
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    </ul>
                </div>

            </div>

        </div>

    </div>


    <!-- Home -->

    <div class="home">

        <!-- Hero Slider -->
        <div class="hero_slider_container">
            <div class="hero_slider owl-carousel">

                <!-- Hero Slide -->
                <div class="hero_slide">
                    <div class="hero_slide_background" style="background-image:url(img/home/slider_background.jpg)"></div>
                    <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                        <div class="hero_slide_content text-center">
                            <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span>
                                today!</h1>
                        </div>
                    </div>
                </div>

                <!-- Hero Slide -->
                <div class="hero_slide">
                    <div class="hero_slide_background" style='background-image:url(img/home/slider_background.jpg)'></div>
                    <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                        <div class="hero_slide_content text-center">
                            <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Update <span>Yourself</span>
                                Current!</h1>
                        </div>
                    </div>
                </div>

                <!-- Hero Slide -->
                <div class="hero_slide">
                    <div class="hero_slide_background" style="background-image:url(img/home/slider_background.jpg)"></div>
                    <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                        <div class="hero_slide_content text-center">
                            <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Easly <span>Flexable</span>
                                Approaches!</h1>
                        </div>
                    </div>
                </div>

            </div>

            <div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">prev</span></div>
            <div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">next</span></div>
        </div>

    </div>


    <div class="hero_boxes">
        <div class="hero_boxes_inner">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 hero_box_col">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="img/home/earth-globe.svg" class="svg" alt="">
                            <div class="hero_box_content">
                                <h2 class="hero_box_title">Online Courses</h2>
                                <a href="{{ url('/login') }}" class="hero_box_link">view more</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 hero_box_col">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="img/home/books.svg" class="svg" alt="">
                            <div class="hero_box_content">
                                <h2 class="hero_box_title">Our Classrooms</h2>
                                <a href="{{ url('/login') }}" class="hero_box_link">view more</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 hero_box_col">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="img/home/professor.svg" class="svg" alt="">
                            <div class="hero_box_content">
                                <h2 class="hero_box_title">Our Teachers</h2>
                                <a href="{{ url('/login') }}" class="hero_box_link">view more</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Popular -->

    <div class="popular page_section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>Popular Courses</h1>
                    </div>
                </div>
            </div>

            <div class="row course_boxes">

                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="img/home/course_1.jpg" alt="">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="{{ url('/login') }}">A complete guide to Accounting</a></div>
                            <div class="card-text p-2">Beginner, Basic, Professional etc...</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="img/home/course_2.jpg" alt="">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="{{ url('/login') }}">Beginners guide to Hotel</a></div>
                            <div class="card-text p-2">Guide, Communication, Reception etc...</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="img/home/course_3.jpg" alt="">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="{{ url('/login') }}">Advanced English</a></div>
                            <div class="card-text p-2">A1, A2, B2 etc...</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services -->

    <div class="services page_section" style="background-color: rgba(175,188,191,0.52)">
        <div class="testimonials_background_container prlx_parent">
            <div class="testimonials_background prlx"
                 style="background-image:url(img/bg-img/service-back.jpg)"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>Our Services</h1>
                    </div>
                </div>
            </div>

            <div class="row services_row">

                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="img/home/earth-globe.svg" alt="">
                    </div>
                    <h3>A1</h3>
                    <p class="text-dark">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc.
                        Proin quis mi malesuada, finibus tortor fermentum.</p>
                </div>

                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="img/home/exam.svg" alt="">
                    </div>
                    <h3>A2</h3>
                    <p class="text-dark">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc.
                        Proin quis mi malesuada, finibus tortor fermentum.</p>
                </div>

                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="img/home/books.svg" alt="">
                    </div>
                    <h3>B2</h3>
                    <p class="text-dark">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc.
                        Proin quis mi malesuada, finibus tortor fermentum.</p>
                </div>

                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="img/home/professor.svg" alt="">
                    </div>
                    <h3>EPS</h3>
                    <p class="text-dark">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc.
                        Proin quis mi malesuada, finibus tortor fermentum.</p>
                </div>

                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="img/home/blackboard.svg" alt="">
                    </div>
                    <h3>C3</h3>
                    <p class="text-dark">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc.
                        Proin quis mi malesuada, finibus tortor fermentum.</p>
                </div>

                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="img/home/mortarboard.svg" alt="">
                    </div>
                    <h3>Others</h3>
                    <p class="text-dark">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc.
                        Proin quis mi malesuada, finibus tortor fermentum.</p>
                </div>

            </div>
        </div>
    </div>

    <!-- Testimonials -->

    <div class="testimonials page_section">
        <div class="testimonials_background_container prlx_parent">
            <div class="testimonials_background prlx"
                 style="background-image:url(img/home/testimonials_background.jpg)"></div>
        </div>
        <div class="container">

            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>What our students say</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 offset-lg-1">

                    <div class="testimonials_slider_container">

                        <!-- Testimonials Slider -->
                        <div class="owl-carousel owl-theme testimonials_slider">

                            <!-- Testimonials Item -->
                            <div class="owl-item">
                                <div class="testimonials_item text-center">
                                    <div class="quote">???</div>
                                    <p class="testimonials_text">This web e-learning portal dedicated only to teach everyone in your premises and
                                        bring you the latest course content with all type of necessary documents. Also, it supports all type of
                                        class such as private class, group class and provide chat-based communication while learning.</p>
                                    <div class="testimonial_user">
                                        <div class="testimonial_image mx-auto">
                                            <img src="img/home/testimonials_user.jpg" alt="">
                                        </div>
                                        <div class="testimonial_name">Mr. First Last</div>
                                        <div class="testimonial_title">A1 Student</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonials Item -->
                            <div class="owl-item">
                                <div class="testimonials_item text-center">
                                    <div class="quote">???</div>
                                    <p class="testimonials_text">This web e-learning portal dedicated only to teach everyone in your premises and
                                        bring you the latest course content with all type of necessary documents. Also, it supports all type of
                                        class such as private class, group class and provide chat-based communication while learning.</p>
                                    <div class="testimonial_user">
                                        <div class="testimonial_image mx-auto">
                                            <img src="img/home/testimonials_user.jpg" alt="">
                                        </div>
                                        <div class="testimonial_name">Mr. First Last</div>
                                        <div class="testimonial_title">B3 Student</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonials Item -->
                            <div class="owl-item">
                                <div class="testimonials_item text-center">
                                    <div class="quote">???</div>
                                    <p class="testimonials_text">This web e-learning portal dedicated only to teach everyone in your premises and
                                        bring you the latest course content with all type of necessary documents. Also, it supports all type of
                                        class such as private class, group class and provide chat-based communication while learning.</p>
                                    <div class="testimonial_user">
                                        <div class="testimonial_image mx-auto">
                                            <img src="img/home/testimonials_user.jpg" alt="">
                                        </div>
                                        <div class="testimonial_name">Mr. First Last</div>
                                        <div class="testimonial_title">C3 Student</div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

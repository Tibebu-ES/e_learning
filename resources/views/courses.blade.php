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
                        <li class="main_nav_item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="main_nav_item active"><a href="{{ url('/courses') }}">Courses</a></li>
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
                    <li class="menu_item menu_mm"><a href="{{ url('/') }}">Home</a></li>
                    <li class="menu_item menu_mm active"><a href="{{ url('/courses') }}">Courses</a></li>
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


    <div class="home">
        <div class="home_background_container prlx_parent">
            <div class="home_background prlx" style="background-image:url(img/home/courses_background.jpg)"></div>
        </div>
        <div class="home_content">
            <h1>Courses</h1>
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

                <!-- Popular Course Item -->
                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="img/core-img/course.jpg" alt="">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="{{ url('/login') }}">A complete guide to design</a></div>
                            <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_image">
                                <img src="img/home/author.jpg">
                            </div>
                            <div class="course_author_name">Mr. Ashenafi Girma</div>
                            <div class="course_price d-flex flex-column align-items-center justify-content-center">
                                <span>ET 350</span></div>
                        </div>
                    </div>
                </div>

                <!-- Popular Course Item -->
                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="img/core-img/course.jpg" alt="">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="{{ url('/login') }}">Beginners guide to HTML</a></div>
                            <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_image">
                                <img src="img/home/author.jpg">
                            </div>
                            <div class="course_author_name">Mr. Lemma Girma</div>
                            <div class="course_price d-flex flex-column align-items-center justify-content-center">
                                <span>ET 120</span></div>
                        </div>
                    </div>
                </div>

                <!-- Popular Course Item -->
                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="img/core-img/course.jpg" alt="">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="{{ url('/login') }}">Advanced Photoshop</a></div>
                            <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_image">
                                <img src="img/home/author.jpg">
                            </div>
                            <div class="course_author_name">Mr. Kassa Girma</div>
                            <div class="course_price d-flex flex-column align-items-center justify-content-center">
                                <span>FREE</span></div>
                        </div>
                    </div>
                </div>

                <!-- Popular Course Item -->
                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="img/core-img/course.jpg" alt="">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="{{ url('/login') }}">A complete guide to design</a></div>
                            <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_image">
                                <img src="img/home/author.jpg">
                            </div>
                            <div class="course_author_name">Ms. Meron Girma</div>
                            <div class="course_price d-flex flex-column align-items-center justify-content-center">
                                <span>ET 129</span></div>
                        </div>
                    </div>
                </div>

                <!-- Popular Course Item -->
                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="img/core-img/course.jpg" alt="">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="{{ url('/login') }}">Beginners guide to HTML</a></div>
                            <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_image">
                                <img src="img/home/author.jpg">
                            </div>
                            <div class="course_author_name">Mr. Ashenafi Girma</div>
                            <div class="course_price d-flex flex-column align-items-center justify-content-center">
                                <span>ET 229</span></div>
                        </div>
                    </div>
                </div>

                <!-- Popular Course Item -->
                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="img/core-img/course.jpg" alt="">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="{{ url('/login') }}">Advanced Photoshop</a></div>
                            <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_image">
                                <img src="img/home/author.jpg">
                            </div>
                            <div class="course_author_name">Mr. Ashenafi Girma</div>
                            <div class="course_price d-flex flex-column align-items-center justify-content-center">
                                <span>FREE</span></div>
                        </div>
                    </div>
                </div>

                <!-- Popular Course Item -->
                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="img/core-img/course.jpg" alt="">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="courses.html">A complete guide to design</a></div>
                            <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_image">
                                <img src="img/home/author.jpg">
                            </div>
                            <div class="course_author_name">Mr. Ashenafi Girma</div>
                            <div class="course_price d-flex flex-column align-items-center justify-content-center">
                                <span>ET 429</span></div>
                        </div>
                    </div>
                </div>

                <!-- Popular Course Item -->
                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="img/core-img/course.jpg" alt="">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="{{ url('/login') }}">Beginners guide to HTML</a></div>
                            <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_image">
                                <img src="img/home/author.jpg">
                            </div>
                            <div class="course_author_name">Mr. Ashenafi Girma</div>
                            <div class="course_price d-flex flex-column align-items-center justify-content-center">
                                <span>ET 788</span></div>
                        </div>
                    </div>
                </div>

                <!-- Popular Course Item -->
                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="img/core-img/course.jpg" alt="">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="{{ url('/login') }}">Advanced Photoshop</a></div>
                            <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_image">
                                <img src="img/home/author.jpg">
                            </div>
                            <div class="course_author_name">Mr. Ashenafi Girma</div>
                            <div class="course_price d-flex flex-column align-items-center justify-content-center">
                                <span>FREE</span></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection

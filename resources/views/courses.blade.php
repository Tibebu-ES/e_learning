@extends('layouts.app')

@section('main_content')
    <div class="home">
        <div class="home_background_container prlx_parent">
            <div class="home_background prlx" style="background-image:url(images/courses_background.jpg)"></div>
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
                        <img class="card-img-top" src="../../../img/core-img/course.jpg" alt="">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="{{ url('/login') }}">A complete guide to design</a></div>
                            <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_image">
                                <img src="">
                            </div>
                            <div class="course_author_name">Mr. Ashenafi Girma</div>
                            <div class="course_price d-flex flex-column align-items-center justify-content-center"><span>ET 350</span></div>
                        </div>
                    </div>
                </div>

                <!-- Popular Course Item -->
                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="../../../img/core-img/course.jpg" alt="">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="{{ url('/login') }}">Beginners guide to HTML</a></div>
                            <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_image">
                                <img src="">
                            </div>
                            <div class="course_author_name">First Last</div>
                            <div class="course_price d-flex flex-column align-items-center justify-content-center"><span>ET 120</span></div>
                        </div>
                    </div>
                </div>

                <!-- Popular Course Item -->
                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="../../../img/core-img/course.jpg" alt="">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="{{ url('/login') }}">Advanced Photoshop</a></div>
                            <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_image">
                                <img src="images/author.jpg">
                            </div>
                            <div class="course_author_name">First Last</div>
                            <div class="course_price d-flex flex-column align-items-center justify-content-center"><span>FREE</span></div>
                        </div>
                    </div>
                </div>

                <!-- Popular Course Item -->
                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="../../../img/core-img/course.jpg" alt="">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="{{ url('/login') }}">A complete guide to design</a></div>
                            <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_image">
                                <img src="images/author.jpg">
                            </div>
                            <div class="course_author_name">First Last</div>
                            <div class="course_price d-flex flex-column align-items-center justify-content-center"><span>ET 129</span></div>
                        </div>
                    </div>
                </div>

                <!-- Popular Course Item -->
                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="../../../img/core-img/course.jpg" alt="">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="{{ url('/login') }}">Beginners guide to HTML</a></div>
                            <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_image">
                                <img src="images/author.jpg">
                            </div>
                            <div class="course_author_name">First Last</div>
                            <div class="course_price d-flex flex-column align-items-center justify-content-center"><span>ET 229</span></div>
                        </div>
                    </div>
                </div>

                <!-- Popular Course Item -->
                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="../../../img/core-img/course.jpg" alt="">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="{{ url('/login') }}">Advanced Photoshop</a></div>
                            <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_image">
                                <img src="images/author.jpg">
                            </div>
                            <div class="course_author_name">First Last</div>
                            <div class="course_price d-flex flex-column align-items-center justify-content-center"><span>FREE</span></div>
                        </div>
                    </div>
                </div>

                <!-- Popular Course Item -->
                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="../../../img/core-img/course.jpg" alt="">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="courses.html">A complete guide to design</a></div>
                            <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_image">
                                <img src="images/author.jpg">
                            </div>
                            <div class="course_author_name">First Last</div>
                            <div class="course_price d-flex flex-column align-items-center justify-content-center"><span>ET 429</span></div>
                        </div>
                    </div>
                </div>

                <!-- Popular Course Item -->
                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="../../../img/core-img/course.jpg" alt="">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="{{ url('/login') }}">Beginners guide to HTML</a></div>
                            <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_image">
                                <img src="images/author.jpg">
                            </div>
                            <div class="course_author_name">First Last</div>
                            <div class="course_price d-flex flex-column align-items-center justify-content-center"><span>ET 788</span></div>
                        </div>
                    </div>
                </div>

                <!-- Popular Course Item -->
                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="../../../img/core-img/course.jpg" alt="">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="{{ url('/login') }}">Advanced Photoshop</a></div>
                            <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_image">
                                <img src="images/author.jpg">
                            </div>
                            <div class="course_author_name">First Last</div>
                            <div class="course_price d-flex flex-column align-items-center justify-content-center"><span>FREE</span></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <title>E-Learning</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link type="text/css" rel="stylesheet" href="css/home/styles/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="css/home/styles/bootstrap4/bootstrap.min.css">
    <link href="css/home//fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/home/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/home/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="css/home/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="css/home/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="css/home/styles/responsive.css">


</head>



<body>

<div class="super_container">

    <header class="header d-flex flex-row ">
        <div class="header_content d-flex flex-row align-items-center">
            <!-- Logo -->
            <div class="logo_container">
                <div class="logo">
                    <img src="../../../img/core-img/stu-logo.png" alt="Logo">
                </div>
            </div>

            <!-- Main Navigation -->
            <nav class="main_nav_container float-right" style="background-color: transparent; box-shadow: none">
                <div class="main_nav_1">
                    <ul class="main_nav_list float-right">
                        <li class="main_nav_item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="main_nav_item"><a href="{{ url('/courses') }}">Courses</a></li>
                        <li class="main_nav_item"><a href="{{ url('/contact')}}">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="header_side d-flex flex-row justify-content-center align-items-center">
            <img src="images/phone-call.svg" alt="">
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
                    <div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
                    <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                        <div class="hero_slide_content text-center">
                            <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span>
                                today!</h1>
                        </div>
                    </div>
                </div>

                <!-- Hero Slide -->
                <div class="hero_slide">
                    <div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
                    <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                        <div class="hero_slide_content text-center">
                            <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span>
                                today!</h1>
                        </div>
                    </div>
                </div>

                <!-- Hero Slide -->
                <div class="hero_slide">
                    <div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
                    <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                        <div class="hero_slide_content text-center">
                            <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span>
                                today!</h1>
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
                            <img src="images/earth-globe.svg" class="svg" alt="">
                            <div class="hero_box_content">
                                <h2 class="hero_box_title">Online Courses</h2>
                                <a href="{{ url('/login') }}" class="hero_box_link">view more</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 hero_box_col">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="images/books.svg" class="svg" alt="">
                            <div class="hero_box_content">
                                <h2 class="hero_box_title">Our Classrooms</h2>
                                <a href="{{ url('/login') }}" class="hero_box_link">view more</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 hero_box_col">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="images/professor.svg" class="svg" alt="">
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
                        <img class="card-img-top" src="images/course_1.jpg" alt="">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="{{ url('/login') }}">A complete guide to Accounting</a></div>
                            <div class="card-text">Beginner, Basic, Professional etc...</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="images/course_2.jpg" alt="">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="{{ url('/login') }}">Beginners guide to Hotel</a></div>
                            <div class="card-text">Guide, Communication, Reception etc...</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="images/course_3.jpg" alt="">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="{{ url('/login') }}">Advanced English</a></div>
                            <div class="card-text">A1, A2, B2 etc...</div>
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
                 style="background-image:url(images/testimonials_background.jpg)"></div>
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
                                    <div class="quote">“</div>
                                    <p class="testimonials_text">This web e-learning portal dedicated only to teach everyone in your premises and
                                        bring you the latest course content with all type of necessary documents. Also, it supports all type of
                                        class such as private class, group class and provide chat-based communication while learning.</p>
                                    <div class="testimonial_user">
                                        <div class="testimonial_image mx-auto">
                                            <img src="images/testimonials_user.jpg" alt="">
                                        </div>
                                        <div class="testimonial_name">Mr. First Last</div>
                                        <div class="testimonial_title">A1 Student</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonials Item -->
                            <div class="owl-item">
                                <div class="testimonials_item text-center">
                                    <div class="quote">“</div>
                                    <p class="testimonials_text">This web e-learning portal dedicated only to teach everyone in your premises and
                                        bring you the latest course content with all type of necessary documents. Also, it supports all type of
                                        class such as private class, group class and provide chat-based communication while learning.</p>
                                    <div class="testimonial_user">
                                        <div class="testimonial_image mx-auto">
                                            <img src="images/testimonials_user.jpg" alt="">
                                        </div>
                                        <div class="testimonial_name">Mr. First Last</div>
                                        <div class="testimonial_title">B3 Student</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonials Item -->
                            <div class="owl-item">
                                <div class="testimonials_item text-center">
                                    <div class="quote">“</div>
                                    <p class="testimonials_text">This web e-learning portal dedicated only to teach everyone in your premises and
                                        bring you the latest course content with all type of necessary documents. Also, it supports all type of
                                        class such as private class, group class and provide chat-based communication while learning.</p>
                                    <div class="testimonial_user">
                                        <div class="testimonial_image mx-auto">
                                            <img src="images/testimonials_user.jpg" alt="">
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


    <footer class="footer">
        <div class="container">

            <div class="footer_content">
                <div class="row">

                    <!-- Footer Column - About -->
                    <div class="col-lg-3 footer_col">

                        <!-- Logo -->
                        <div class="logo_container">
                            <div class="logo">
                                <img src="../../../img/core-img/stu-logo-w.png" alt="Logo">
                            </div>
                        </div>

                        <p class="footer_about_text">This web e-learning portal dedicated only to teach everyone
                            in your premises and bring you the latest course content.</p>

                    </div>

                    <!-- Footer Column - Menu -->

                    <div class="col-lg-3 footer_col">
                        <div class="footer_column_title">Menu</div>
                        <div class="footer_column_content">
                            <ul>
                                <li class="footer_list_item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="footer_list_item"><a href="{{ url('/courses') }}">Courses</a></li>
                                <li class="footer_list_item"><a href="{{ url('/contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Column - Usefull Links -->

                    <div class="col-lg-3 footer_col">

                    </div>

                    <!-- Footer Column - Contact -->

                    <div class="col-lg-3 footer_col">
                        <div class="footer_column_title">Contact</div>
                        <div class="footer_column_content">
                            <ul>
                                <li class="footer_contact_item">
                                    <div class="footer_contact_icon">
                                        <img src="img/home/placeholder.svg" alt="">
                                    </div>
                                    Romanat Square, Mekelle Ethiopia
                                </li>
                                <li class="footer_contact_item">
                                    <div class="footer_contact_icon">
                                        <img src="img/home/smartphone.svg" alt="">
                                    </div>
                                    +251 910 00 32
                                </li>
                                <li class="footer_contact_item">
                                    <div class="footer_contact_icon">
                                        <img src="img/home/envelope.svg" alt="">
                                    </div>
                                    dtech@dtech.com
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
                <div class="footer_copyright">
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                    All rights reserved | Dagi E-learning portal

                </div>
                <div class="footer_social ml-sm-auto">
                    <ul class="menu_social">
                        <li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </footer>


    <div class="fixed-action-btn_1">
        <a class="btn-floating btn-large orange">
            <i class="fa fa-info"></i>
        </a>
        <ul>
            <li><a href="{{ url('/admin') }}" class="btn-floating red"><i class="fa fa-key"></i></a></li>
            <li><a href="{{ url('/register') }}" class="btn-floating green"><i class="fa fa-plus"></i></a></li>
            <li><a href="{{ url('/login') }}" class="btn-floating indigo"><i class="fa fa-sign-in-alt"></i></a></li>
        </ul>
    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/greensock/TweenMax.min.js"></script>
    <script src="plugins/greensock/TimelineMax.min.js"></script>
    <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="plugins/greensock/animation.gsap.min.js"></script>
    <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="js/home/custom.js"></script>

    <script type="text/javascript" src="js/materialize.min.js"></script>

    <script>

        $(document).ready(function(){
            $('.fixed-action-btn_1').floatingActionButton();
        });

    </script>

</div>
</body>
</html>




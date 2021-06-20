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
    <link rel="stylesheet" type="text/css" href="css/home/styles/courses_styles.css">
    <link rel="stylesheet" type="text/css" href="css/home/styles/elements_styles.css">
    <link rel="stylesheet" type="text/css" href="css/home/styles/elements_responsive.css">
    <link rel="stylesheet" type="text/css" href="css/home/styles/contact_styles.css">


</head>



<body>

<div class="super_container">

    <header class="header d-flex flex-row">
        <div class="header_content d-flex flex-row align-items-center">
            <!-- Logo -->
            <div class="logo_container">
                <div class="logo">
                    <img src="../../../img/core-img/stu-logo.png" alt="Logo">
                </div>
            </div>

            <!-- Main Navigation -->
            <nav class="main_nav_container" style="background-color: transparent; box-shadow: none">
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
            <span>+251 993 632542</span>
        </div>

        <!-- Hamburger -->
        <div class="hamburger_container">
            <i class="fas fa-bars trans_200"></i>
        </div>

    </header>

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


    @yield('main_content')

    <div class="fixed-action-btn_1">
    <a class="btn-floating btn-large orange">
        <i class="fa fa-info"></i>
    </a>
    <ul>
        <li><a href="{{ url('/admin') }}" class="btn-floating red"><i class="fa fa-key"></i></a></li>
        <li><a href="{{ url('/register') }}" class="btn-floating green"><i class="fa fa-plus"></i></a></li>
        <li><a href="{{ url('/login') }}" class="btn-floating blue"><i class="fa fa fa-sign-in-alt"></i></a></li>
    </ul>
</div>

    <footer class="footer">
        <div class="container">


            <!-- Footer Content -->

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

            <!-- Footer Copyright -->

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

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>E-Learning</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link type="text/css" rel="stylesheet" href="css/home/materialize.min.css" media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="css/home/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="css/home/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/home/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="css/home/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="css/home/contact_styles.css">
    <link rel="stylesheet" type="text/css" href="css/home/course_styles.css">
    <link rel="stylesheet" type="text/css" href="css/home/main_styles.css">
    <link rel="stylesheet" type="text/css" href="css/home/responsive.css">

</head>


<body>

<div class="super_container">


    @yield('index_content')


    <footer class="footer">
        <div class="container">

            <div class="footer_content">
                <div class="row">

                    <!-- Footer Column - About -->
                    <div class="col-lg-3 footer_col">

                        <!-- Logo -->
                        <div class="logo_container">
                            <div class="logo">
                                <img src="img/core-img/stu-logo-w.png" alt="Logo">
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
            <li><a href="{{ url('/register') }}" class="btn-floating green"><i class="fa fa-registered"></i></a></li>
            <li><a href="{{ url('/login') }}" class="btn-floating indigo"><i class="fa fa-sign-in-alt"></i></a></li>
        </ul>
    </div>
</div>

<script src="js/jquery/jquery.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>
<script src="js/home/popper.min.js"></script>
<script src="js/greensock/TweenMax.min.js"></script>
<script src="js/greensock/TimelineMax.min.js"></script>
<script src="js/scrollmagic/ScrollMagic.min.js"></script>
<script src="js/greensock/animation.gsap.min.js"></script>
<script src="js/greensock/ScrollToPlugin.min.js"></script>
<script src="js/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="js/scrollTo/jquery.scrollTo.min.js"></script>
<script src="js/easing/easing.js"></script>
<script src="js/home/custom.js"></script>
<script src="js/home/materialize.min.js"></script>

<script>

    $(document).ready(function () {
        $('.fixed-action-btn_1').floatingActionButton();
    });

</script>

</body>
</html>

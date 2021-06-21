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
                        <li class="main_nav_item"><a href="{{ url('/courses') }}">Courses</a></li>
                        <li class="main_nav_item active"><a href="{{ url('/contact')}}">Contact</a></li>
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
                    <li class="menu_item menu_mm"><a href="{{ url('/courses') }}">Courses</a></li>
                    <li class="menu_item menu_mm active"><a href="{{ url('/contact')}}">Contact</a></li>
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
            <div class="home_background prlx" style="background-image:url(img/home/contact_background.jpg)"></div>
        </div>
        <div class="home_content">
            <h1>Contact</h1>
        </div>
    </div>

    <!-- Contact -->

    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <!-- Contact Form -->
                    <div class="contact_form">
                        <div class="contact_title">Get in touch</div>

                        <div class="contact_form_container">
                            <form action="post">
                                <input id="contact_form_name" class="input_field contact_form_name" type="text"
                                       placeholder="Name" required="required" data-error="Name is required.">
                                <input id="contact_form_email" class="input_field contact_form_email" type="email"
                                       placeholder="E-mail" required="required" data-error="Valid email is required.">
                                <textarea id="contact_form_message" class="text_field contact_form_message"
                                          name="message" placeholder="Message" required="required"
                                          data-error="Please, write us a message."></textarea>
                                <button id="contact_send_btn" type="button" class="contact_send_btn trans_200"
                                        value="Submit">send message
                                </button>
                            </form>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="about">
                        <div class="about_title">Join Courses</div>
                        <p class="about_text">This web e-learning portal dedicated only to teach everyone in your
                            premises and bring you the latest course content with all type of necessary documents.
                            Also, it supports all type of class such as private class, group class and provide
                            chat-based
                            communication while learning.</p>

                        <div class="contact_info">
                            <ul>
                                <li class="footer_contact_item">
                                    <div class="footer_contact_icon">
                                        <img src="img/home/placeholder.svg"
                                             alt="https://www.flaticon.com/authors/lucy-g">
                                    </div>
                                    Romanat Square, Mekelle Ethiopia
                                </li>
                                <li class="footer_contact_item">
                                    <div class="footer_contact_icon">
                                        <img src="img/home/smartphone.svg"
                                             alt="https://www.flaticon.com/authors/lucy-g">
                                    </div>
                                    +251 910 00 32
                                </li>
                                <li class="footer_contact_item">
                                    <div class="footer_contact_icon">
                                        <img src="img/home/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                    </div>
                                    dtech@dtech.com
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Google Map -->

            <div class="row">
                <div class="col">
                    <div id="google_map">
                        <div class="map_container">
                            <div id="map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3879.694463021896!2d39.47076561419497!3d13.492915256876634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x166afd47704f5f0d%3A0xdb7b6f878846f3e9!2sRomanat%20Square%2C%20Mekele!5e0!3m2!1sen!2set!4v1624271796941!5m2!1sen!2set"
                                    width="100%" height="600" style="border:0;" allowfullscreen=""
                                    loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection

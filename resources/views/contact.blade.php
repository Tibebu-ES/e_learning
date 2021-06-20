@extends('layouts.app')

@section('main_content')

    <div class="home">
        <div class="home_background_container prlx_parent">
            <div class="home_background prlx" style="background-image:url(images/contact_background.jpg)"></div>
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
                                <input id="contact_form_name" class="input_field contact_form_name" type="text" placeholder="Name" required="required" data-error="Name is required.">
                                <input id="contact_form_email" class="input_field contact_form_email" type="email" placeholder="E-mail" required="required" data-error="Valid email is required.">
                                <textarea id="contact_form_message" class="text_field contact_form_message" name="message" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
                                <button id="contact_send_btn" type="button" class="contact_send_btn trans_200" value="Submit">send message</button>
                            </form>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="about">
                        <div class="about_title">Join Courses</div>
                        <p class="about_text">This web e-learning portal dedicated only to teach everyone in your
                            premises and bring you the latest course content with all type of necessary documents.
                            Also, it supports all type of class such as private class, group class and provide chat-based
                            communication while learning.</p>

                        <div class="contact_info">
                            <ul>
                                <li class="footer_contact_item">
                                    <div class="footer_contact_icon">
                                        <img src="img/home/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                    </div>
                                    Romanat Square, Mekelle Ethiopia
                                </li>
                                <li class="footer_contact_item">
                                    <div class="footer_contact_icon">
                                        <img src="img/home/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
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
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection

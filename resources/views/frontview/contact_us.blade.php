@extends('layouts.frontapp')
@section('content') 
 <!-- page header section start here -->
 <section class="page-header">
        <div class="container">
            <div class="page-header-item d-flex align-items-center justify-content-center">
                <div class="post-content">
                    <h2 style="padding-top:20px;">Contact Us</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- page header section ending here -->

    <!-- page header section start here -->
    <div class="breadcamp">
        <div class="container">
            <ul class="d-flex flex-wrap justify-content-center align-items-center">
                <li>
                    <a href="index-2.html">Home</a>
                </li>
                <li>
                    <a class="active">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- page header section ending here -->

    <!-- contact us section start here -->
    <div class="contact style-2 padding-tb">
        <div class="container">
            <div class="section-wrapper row justify-content-center">
                <div class="col-lg-8 col-12">
                    <div class="contact-part">
                        <div class="contact-title">
                            <h4>Don’t Hesitate to contact Us</h4>
                        </div>
                        <div class="contact-form d-flex flex-wrap justify-content-between">
                            <input type="text" name="name" placeholder="Your Name">
                            <input type="email" name="email" placeholder="Your Email">
                            <input type="tel" name="tel" placeholder="Phone">
                            <input type="text" placeholder="Subject">
                            <textarea rows="7" placeholder="Enter Your Message"></textarea>
                            <input class="btn" type="submit" value="Send Message">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="info-part">
                        <ul class="schedule">
                            <li> <i class="far fa-clock"></i>Mon - Thu : 9am - 5pm</li>
                            <li><i class="fas fa-lock"></i>Friday : <span>Closed</span></li>
                        </ul>
                        <div class="contact-info">
                            <h4>We Are Here!</h4>
                            <p>641 S Street NW Washington </p>
                            <p class="style-2">DC 20001 - 3015768685</p>
                            <a href="#">Find Us On Google Map</a>
                            <ul class="details">
                                <li>
                                    <p>Email</p>
                                    info@averti.com
                                </li>
                                <li>
                                    <p>Phone</p>
                                    +000 123 456789
                                </li>
                            </ul>
                            <ul class="social-media-icons">
                                <li>
                                    <a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li>
                                    <a class="youtube" href="#"><i class="fab fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact us section ending here -->

@endsection('content')
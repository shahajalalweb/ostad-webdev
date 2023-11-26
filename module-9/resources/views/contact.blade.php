@extends('layouts.master')
@section('content')
<!-- Start Contact Seciton -->
<section id="contact" class="st-dark-bg mt-5">
    <div class="st-height-b100 st-height-lg-b80"></div>
    <div class="container">
        <div class="st-section-heading st-style1">
            <h4 class="st-section-heading-title">CONTACT ME</h4>
            <h2 class="st-section-heading-subtitle">CONTACT ME</h2>
        </div>
        <div class="st-height-b25 st-height-lg-b25"></div>
    </div>

    <!-- Contact Container -->

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="st-contact-title">Just say Hello</h3>
                <div id="st-alert"></div>
                <form action="#" method="POST" class="st-contact-form" id="contact-form">
                    <div class="st-form-field">
                        <input type="text" id="name" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="st-form-field">
                        <input type="text" id="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="st-form-field">
                        <input type="text" id="subject" name="subject" placeholder="Your Subject" required>
                    </div>
                    <div class="st-form-field">
                        <textarea cols="30" rows="10" id="msg" name="msg" placeholder="Your Message"
                            required></textarea>
                    </div>
                    <button class="st-btn st-style1 st-color1" type="submit" id="submit" name="submit">Send
                        message</button>
                </form>
            </div>
            <div class="st-height-b0 st-height-lg-b30"></div>

            <div class="col-lg-6">
                <div class="st-height-b0 st-height-lg-b40"></div>
                <h3 class="st-contact-title">Contact Info</h3>
                <div class="st-contact-text">
                    You can contact me anytime through the contact information below, I am always waiting to serve
                    you.
                </div>
                <div class="st-contact-info-wrap">
                    <div class="st-single-contact-info">
                        <i class="fas fa-envelope"></i>
                        <div class="st-single-info-details">
                            <h4>Email</h4>
                            <a href="#">shaidulislamrony1@gmail.com</a>
                            <!-- <a href="#">info@support.com</a> -->
                        </div>
                    </div>
                    <div class="st-single-contact-info">
                        <i class="fas fa-phone-alt"></i>
                        <div class="st-single-info-details">
                            <h4>Phone</h4>
                            <span>+880 1721-413821</span>
                            <span>+880 1886-413821</span>
                        </div>
                    </div>
                    <div class="st-single-contact-info">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="st-single-info-details">
                            <h4>Address</h4>
                            <span>60/2 Abdul aziz lane <br>Azimpur, Dhaka</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="st-height-b100 st-height-lg-b80"></div>
</section>
<!-- End Contact Seciton -->
@endsection

@extends('layouts.master')
@section('content')

<!-- Start Hero Seciton -->
<div class="st-height-b80 st-height-lg-b80"></div>
<section class="st-hero-wrap st-parallax">
    <div class="st-hero st-style1 st-ripple-version">
        <div class="container">
            <div class="st-hero-text">
                <h3>Hello, I’m</h3>
                <h1>Shaidul <br>Islam
                </h1>
                <h2>Front End Developer</h2>
                <div class="st-hero-btn">
                    <a href="#contact" class="st-btn st-style1 st-color1 st-smooth-move">Hire me</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Image - Social Link Group -->
    <div class="st-hero-img st-to-right">
        <img class="wow fadeInRight" src="{{ asset('assets/img') }}/section/hero-img.png" alt="Hero">
        <div class="st-social-group wow fadeInLeft">
            <div class="st-social-link">
                <a href="https://dribbble.com/Shaidul_007" class="st-social-btn active">
                    <span class="st-social-icon"><i class="fab fa-dribbble"></i></span>
                    <span class="st-icon-name">Dribbble</span>
                </a>
                <a href="https://www.behance.net/onboarding" class="st-social-btn">
                    <span class="st-social-icon"><i class="fab fa-behance"></i></span>
                    <span class="st-icon-name">Behance</span>
                </a>
                <a href="https://twitter.com/shaidul007" class="st-social-btn">
                    <span class="st-social-icon"><i class="fab fa-twitter"></i></span>
                    <span class="st-icon-name">Twitter</span>
                </a>
                <a href="https://www.linkedin.com/in/shaidul-islam-rony-454a961b1/" class="st-social-btn">
                    <span class="st-social-icon"><i class="fab fa-linkedin"></i></span>
                    <span class="st-icon-name">LinkedIn</span>
                </a>
            </div>
        </div>
    </div>
    <div id="particles-js"></div>
</section>
<!-- End Hero Seciton -->
<!-- Start About Seciton -->
<section id="about" class="st-about-wrap">
    <div class="st-height-b100 st-height-lg-b80"></div>
    <div class="container">
        <div class="st-section-heading st-style1">
            <h4 class="st-section-heading-title">ABOUT ME</h4>
            <h2 class="st-section-heading-subtitle">ABOUT ME</h2>
        </div>
        <div class="st-height-b25 st-height-lg-b25"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="st-about-img-wrap">
                    <div class="st-about-img st-dynamic-bg st-bg"
                        data-src="{{ asset('assets/img') }}/section/about.jpg"></div>
                </div>
                <div class="st-height-b0 st-height-lg-b30"></div>
            </div>
            <div class="col-lg-6">
                <div class="st-vertical-middle">
                    <div class="st-vertical-middle-in">
                        <div class="st-text-block st-style1">
                            <h2 class="st-text-block-title">Hi There! I'm Shaidul Islam</h2>
                            <h4 class="st-text-block-subtitle">Front End Developer</h4>
                            <div class="st-text-block-text">
                                <p>I am a Front End Developer with a strong focus on digital branding. Visul design
                                    seeks to attract,
                                    inspire, create desires and motivate people to respond to messages, with a view to
                                    making a
                                    favorable impact.</p>
                            </div>
                            <ul class="st-text-block-details st-mp0">
                                <li><span>Birthday</span> : <span>August 24, 2000</span></li>
                                <li><span>Phone</span> : <span>01721413821</span></li>
                                <li><span>Email</span> : <span>shaidulislamrony1@gmail.com</span></li>
                                <li><span>From</span> : <span>Ramgonj, Lakshmipur</span></li>
                                <li><span>Language</span> : <span>Bangla, English</span></li>
                                <li><span>Freelance</span> : <span>Available</span></li>
                            </ul>
                            <div class="st-text-block-btn">
                                <a href="https://drive.google.com/file/d/1T1adPyQyBKBVEHnvJnw-795LvZLd7Js7/view?usp=share_link"
                                    class="st-btn st-style1 st-color1">Download CV</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Seciton -->
<!-- Start Skill Seciton -->
<section class="st-dark-bg">
    <div class="st-height-b100 st-height-lg-b80"></div>
    <div class="container">
        <div class="st-section-heading st-style1">
            <h4 class="st-section-heading-title">MY SKILLS</h4>
            <h2 class="st-section-heading-subtitle">MY SKILLS</h2>
        </div>
        <div class="st-height-b25 st-height-lg-b25"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="st-skill-wrap">
                    <div class="st-skill-heading">
                        <h2 class="st-skill-title">All the skills that I have in that field
                            of work are mentioned.</h2>
                        <div class="st-skill-subtitle">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                            nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                            vero
                            eos et accusam et justo duo dolores. <br><br>Stet clita kasd gubergren, no sea takimata
                            sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing
                            elitr,
                            sed diam nonumy eirmod tempor invidunt.
                        </div>
                    </div><!-- .st-skill-heading -->
                </div>
            </div>

            <!-- Progressbar -->

            <div class="col-lg-6">
                <div class="st-height-b0 st-height-lg-b30"></div>
                <div class="st-progressbar-wrap">
                    <div class="st-single-progressbar">
                        <div class="st-progressbar-heading">
                            <h3 class="st-progressbar-title">Web Development</h3>
                            <div class="st-progressbar-percentage wow fadeInLeft" data-wow-duration="1.5s"
                                data-wow-delay="0.5s">45%</div>
                        </div>
                        <div class="st-progressbar" data-progress="45">
                            <div class="st-progressbar-in wow fadeInLeft"></div>
                        </div>
                    </div><!-- .st-single-progressbar -->
                    <div class="st-height-b30 st-height-lg-b20"></div>
                    <div class="st-single-progressbar">
                        <div class="st-progressbar-heading">
                            <h3 class="st-progressbar-title">Video Editing</h3>
                            <div class="st-progressbar-percentage wow fadeInLeft" data-wow-duration="1.5s"
                                data-wow-delay="0.5s">65%</div>
                        </div>
                        <div class="st-progressbar" data-progress="65">
                            <div class="st-progressbar-in wow fadeInLeft"></div>
                        </div>
                    </div><!-- .st-single-progressbar -->
                    <div class="st-height-b30 st-height-lg-b20"></div>
                    <div class="st-single-progressbar">
                        <div class="st-progressbar-heading">
                            <h3 class="st-progressbar-title">Photoshop</h3>
                            <div class="st-progressbar-percentage wow fadeInLeft" data-wow-duration="1.5s"
                                data-wow-delay="0.5s">70%</div>
                        </div>
                        <div class="st-progressbar" data-progress="70">
                            <div class="st-progressbar-in wow fadeInLeft"></div>
                        </div>
                    </div><!-- .st-single-progressbar -->
                    <div class="st-height-b30 st-height-lg-b20"></div>
                    <div class="st-single-progressbar">
                        <div class="st-progressbar-heading">
                            <h3 class="st-progressbar-title">UX Design</h3>
                            <div class="st-progressbar-percentage wow fadeInLeft" data-wow-duration="1.5s"
                                data-wow-delay="0.5s">45%</div>
                        </div>
                        <div class="st-progressbar" data-progress="45">
                            <div class="st-progressbar-in wow fadeInLeft"></div>
                        </div>
                    </div><!-- .st-single-progressbar -->
                    <div class="st-height-b30 st-height-lg-b20"></div>
                    <div class="st-single-progressbar">
                        <div class="st-progressbar-heading">
                            <h3 class="st-progressbar-title">Illustrator</h3>
                            <div class="st-progressbar-percentage wow fadeInLeft" data-wow-duration="1.5s"
                                data-wow-delay="0.5s">60%</div>
                        </div>
                        <div class="st-progressbar" data-progress="60">
                            <div class="st-progressbar-in wow fadeInLeft"></div>
                        </div>
                    </div><!-- .st-single-progressbar -->
                    <div class="st-height-b30 st-height-lg-b20"></div>
                    <div class="st-single-progressbar">
                        <div class="st-progressbar-heading">
                            <h3 class="st-progressbar-title">Digital Marketing</h3>
                            <div class="st-progressbar-percentage wow fadeInLeft" data-wow-duration="1.5s"
                                data-wow-delay="0.5s">55%</div>
                        </div>
                        <div class="st-progressbar" data-progress="55">
                            <div class="st-progressbar-in wow fadeInLeft"></div>
                        </div>
                    </div><!-- .st-single-progressbar -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Skill Seciton -->
<!-- Start Resume Seciton -->
<section id="resume" class="st-dark-bg">
    <div class="st-height-b100 st-height-lg-b80"></div>
    <div class="container">
        <div class="st-section-heading st-style1">
            <h4 class="st-section-heading-title">RESUME</h4>
            <h2 class="st-section-heading-subtitle">RESUME</h2>
        </div>
        <div class="st-height-b25 st-height-lg-b25"></div>
    </div>
    <div class="container">
        <div class="row">
            <!-- Experience -->
            <div class="col-lg-6">
                <div class="st-resume-wrap">
                    <div class="st-resume-heading">
                        <img src="{{ asset('assets/img') }}/icon/resume-icon1.png" alt="resume-icon">
                        <h2 class="st-resume-heading-title">Experience</h2>
                    </div>

                    <div class="st-height-b50 st-height-lg-b30"></div>

                    <div class="st-resume-timeline-wrap">
                        <div class="st-resume-timeline">
                            <h3 class="st-resume-timeline-title">Html Template Designer</h3>
                            <div class="st-resume-timeline-duration">May 2023 - Present</div>
                            <h4 class="st-resume-timeline-subtitle">TemplateMonster</h4>
                            <div class="st-resume-timeline-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                    ligula nulla, tincidunt id faucibus sed, suscipit feugiat turpis.</p>
                            </div>
                        </div> <!-- st-resume-timeline -->
                        <div class="st-height-b50 st-height-lg-b30"></div>
                        <div class="st-resume-timeline">
                            <h3 class="st-resume-timeline-title">Website Template Designer</h3>
                            <div class="st-resume-timeline-duration">August 22 - Present</div>
                            <h4 class="st-resume-timeline-subtitle">Codester</h4>
                            <div class="st-resume-timeline-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                    ligula nulla, tincidunt id faucibus sed, suscipit feugiat turpis.</p>
                            </div>
                        </div> <!-- st-resume-timeline -->
                        <div class="st-height-b50 st-height-lg-b30"></div>
                        <div class="st-resume-timeline">
                            <h3 class="st-resume-timeline-title">Freelancer</h3>
                            <div class="st-resume-timeline-duration">Jan 2023 - Present</div>
                            <h4 class="st-resume-timeline-subtitle">Freelancer.com</h4>
                            <div class="st-resume-timeline-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                    ligula nulla, tincidunt id faucibus sed, suscipit feugiat turpis.</p>
                            </div>
                        </div> <!-- st-resume-timeline -->
                    </div>
                </div>
            </div>

            <!-- Education -->
            <div class="col-lg-6">

                <div class="st-height-b0 st-height-lg-b50"></div>
                <div class="st-resume-wrap">
                    <div class="st-resume-heading">
                        <img src="{{ asset('assets/img') }}/icon/resume-icon2.png" alt="resume-icon">
                        <h2 class="st-resume-heading-title">Education</h2>
                    </div>
                    <div class="st-height-b50 st-height-lg-b30"></div>

                    <div class="st-resume-timeline-wrap">
                        <div class="st-resume-timeline">
                            <h3 class="st-resume-timeline-title">Responsive Web Desing</h3>
                            <div class="st-resume-timeline-duration">Sep 2023 - Mar 2021</div>
                            <h4 class="st-resume-timeline-subtitle">Creative IT Institute</h4>
                            <div class="st-resume-timeline-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                    ligula nulla, tincidunt id faucibus sed, suscipit feugiat turpis.</p>
                            </div>
                        </div> <!-- st-resume-timeline -->
                        <div class="st-height-b50 st-height-lg-b30"></div>
                        <div class="st-resume-timeline">
                            <h3 class="st-resume-timeline-title">Video Editing</h3>
                            <div class="st-resume-timeline-duration">Apr 2021 - Sep 2021</div>
                            <h4 class="st-resume-timeline-subtitle">Serve Human Foundation</h4>
                            <div class="st-resume-timeline-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                    ligula nulla, tincidunt id faucibus sed, suscipit feugiat turpis.</p>
                            </div>
                        </div> <!-- st-resume-timeline -->
                        <div class="st-height-b50 st-height-lg-b30"></div>
                        <div class="st-resume-timeline">
                            <h3 class="st-resume-timeline-title">Graphic Design</h3>
                            <div class="st-resume-timeline-duration">Jan 2023 - May 2021</div>
                            <h4 class="st-resume-timeline-subtitle">Serve Human Foundation</h4>
                            <div class="st-resume-timeline-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                    ligula nulla, tincidunt id faucibus sed, suscipit feugiat turpis.</p>
                            </div>
                        </div> <!-- st-resume-timeline -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="st-height-b100 st-height-lg-b80"></div>
</section>
<!-- End Resume Seciton -->
<!-- Start Portfolio Seciton -->
<section id="portfolio" class="mt-5">
    <div class="st-height-b100 st-height-lg-b80"></div>
    <div class="container">
        <div class="st-section-heading st-style1">
            <h4 class="st-section-heading-title">PROJECT</h4>
            <h2 class="st-section-heading-subtitle">PROJECT</h2>
        </div>
        <div class="st-height-b25 st-height-lg-b25"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="st-portfolio-single st-style1 st-lightgallery">
                    <div class="st-portfolio-item">
                        <a href="{{ asset('assets/img') }}/portfolio/portfolio1_lg.jpg"
                            class="st-portfolio st-zoom st-lightbox-item">
                            <div class="st-portfolio-img st-zoom-in">
                                <img src="{{ asset('assets/img') }}/portfolio/portfolio1.jpg" alt="portfolio">
                            </div>
                            <div class="st-portfolio-item-hover">
                                <i class="fas fa-plus-circle"></i>
                                <h5>Agency Website</h5>
                                <p>Web Design / HTML</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="st-portfolio-single st-style1 st-lightgallery">
                    <div class="st-portfolio-item">
                        <a href="{{ asset('assets/img') }}/portfolio/portfolio2_lg.jpg"
                            class="st-portfolio st-zoom st-lightbox-item">
                            <div class="st-portfolio-img st-zoom-in">
                                <img src="{{ asset('assets/img') }}/portfolio/portfolio2.jpg" alt="portfolio">
                            </div>
                            <div class="st-portfolio-item-hover">
                                <i class="fas fa-plus-circle"></i>
                                <h5>E-commerce site Design</h5>
                                <p>Web Design / E-commerce</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="st-portfolio-single st-style1 st-lightgallery">
                    <div class="st-portfolio-item">
                        <a href="{{ asset('assets/img') }}/portfolio/portfolio3_lg.jpg"
                            class="st-portfolio st-zoom st-lightbox-item">
                            <div class="st-portfolio-img st-zoom-in">
                                <img src="{{ asset('assets/img') }}/portfolio/portfolio3.jpg" alt="portfolio">
                            </div>
                            <div class="st-portfolio-item-hover">
                                <i class="fas fa-plus-circle"></i>
                                <h5>Rolate Website</h5>
                                <p>Website Design / HTML</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="st-portfolio-single st-style1 st-lightgallery">
                    <div class="st-portfolio-item">
                        <a href="{{ asset('assets/img') }}/portfolio/portfolio4_lg.jpg"
                            class="st-portfolio st-zoom st-lightbox-item">
                            <div class="st-portfolio-img st-zoom-in">
                                <img src="{{ asset('assets/img') }}/portfolio/portfolio4.jpg" alt="portfolio">
                            </div>
                            <div class="st-portfolio-item-hover">
                                <i class="fas fa-plus-circle"></i>
                                <h5>Wedding Template</h5>
                                <p>Website Design / HTML</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="st-portfolio-single st-style1 st-lightgallery">
                    <div class="st-portfolio-item">
                        <a href="{{ asset('assets/img') }}/portfolio/portfolio5_lg.jpg"
                            class="st-portfolio st-zoom st-lightbox-item">
                            <div class="st-portfolio-img st-zoom-in">
                                <img src="{{ asset('assets/img') }}/portfolio/portfolio5.jpg" alt="portfolio">
                            </div>
                            <div class="st-portfolio-item-hover">
                                <i class="fas fa-plus-circle"></i>
                                <h5>Photoshop Design</h5>
                                <p>Design / Banner</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="st-portfolio-single st-style1 st-lightgallery">
                    <div class="st-portfolio-item">
                        <a href="{{ asset('assets/img') }}/portfolio/portfolio6_lg.jpg"
                            class="st-portfolio st-zoom st-lightbox-item">
                            <div class="st-portfolio-img st-zoom-in">
                                <img src="{{ asset('assets/img') }}/portfolio/portfolio6.jpg" alt="portfolio">
                            </div>
                            <div class="st-portfolio-item-hover">
                                <i class="fas fa-plus-circle"></i>
                                <h5>Animation</h5>
                                <p>Website Design / HTML</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="st-height-b100 st-height-lg-b80"></div>
</section>
<!-- End Portfolio Seciton -->

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

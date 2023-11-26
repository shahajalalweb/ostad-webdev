@extends('layouts.master')
@section('content')
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
                        <a href="{{ asset('assets/img') }}/portfolio/portfolio1.jpg"
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

@endsection

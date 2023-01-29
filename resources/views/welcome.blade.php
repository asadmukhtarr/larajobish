@extends('layouts.app')
@section('title','Home')
@section('content')
<!-- Banner start -->
<div class="banner bg-color-full" id="banner">
    <div id="bannerCarousole" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item banner-max-height active">
                <img class="d-block w-100 h-100" src="img/banner/banner-2.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex text-center"></div>
            </div>
        </div>
    </div>
    <div class="banner-inner">
        <div class="container">
            <div class="text-center">
                <h3 class="b-text">Find your job</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                <div class="inline-search-area ml-auto mr-auto none-768">
                    <div class="search-boxs">
                        <div class="search-col">
                            <input type="text" name="search" class="form-control has-icon b-radius" placeholder="Job title, Keywords or company name">
                        </div>
                        <div class="search-col">
                            <select class="selectpicker search-fields" name="location">
                                <option>location</option>
                                <option>New York</option>
                                <option>Australian</option>
                                <option>Canada</option>
                                <option>London</option>
                            </select>
                        </div>
                        <div class="find">
                            <button class="btn button-theme btn-search btn-block b-radius">
                                <i class="fa fa-search"></i><strong>Find Job</strong>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="banner-counter-box none-768">
                    <div class="counter-box">
                        <h1 class="counter">2967</h1>
                        <p>Jobs Posted</p>
                    </div>
                    <div class="counter-box">
                        <h1 class="counter">167</h1>
                        <p>Companies</p>
                    </div>
                    <div class="counter-box">
                        <h1 class="counter">150</h1>
                        <p>Candidates</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner end -->

<!-- Popular categories strat -->
<div class="popular-categories content-area-7">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1>Popular Categories</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="categorie-box">
                    <i class="flaticon-money"></i>
                    <h5>Accounting / Finance</h5>
                    <span>(2143)</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="categorie-box">
                    <i class="flaticon-mortarboard"></i>
                    <h5>Education Training</h5>
                    <span>(742)</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="categorie-box">
                    <i class="flaticon-shout"></i>
                    <h5>Digital Marketing</h5>
                    <span>(341)</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="categorie-box">
                    <i class="flaticon-radar"></i>
                    <h5>Telecommunication</h5>
                    <span>(410)</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="categorie-box">
                    <i class="flaticon-sale"></i>
                    <h5>Sales & Marketing</h5>
                    <span>(23)</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="categorie-box">
                    <i class="flaticon-pencil"></i>
                    <h5>Writing & Translations</h5>
                    <span>(43)</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="categorie-box">
                    <i class="flaticon-doctor"></i>
                    <h5>Health</h5>
                    <span>(35)</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="categorie-box">
                    <i class="flaticon-truck"></i>
                    <h5>Transportation / Logistics</h5>
                    <span>(7)</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Popular categories end -->

<!-- Job section strat -->
<div class="job-section content-area-5 bg-grea">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1>Recent Jobs</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="row">
            <div class="col-lg-12">
                @foreach($jobs as $job)
                <div class="job-box">
                    <div class="description">
                        <div class="float-left">
                            <h5 class="title"><a href="job-details.html">{{ $job->title }}</a></h5>
                            <div class="candidate-listing-footer">
                                <ul>
                                    <li><i class="flaticon-work"></i> Hotel</li>
                                    <li><i class="flaticon-pin"></i>{{ $job->city }}</li>
                                    <li><i class="flaticon-time"></i> {{ $job->type }}</li>
                                </ul>
                                <h6>Deadline: Jan 31, 2019</h6>
                            </div>
                        </div>
                        <div class="div-right">
                            <a href="{{ route('apply.job', $job->id) }}" class="apply-button">Apply Now</a>
                            <a href="#"><i class="flaticon-heart favourite"></i></a>
                        </div>
                    </div>
                </div>

                @endforeach
                <br />
                <div class="text-center clearfix mt-2">
                    <a href="job-list.html" class="browse-all">Browse All Jobs</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Job section end -->

<!-- Counters strat -->
<div class="counters bg-color-full-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-user"></i>
                    <h1 class="counter">1967</h1>
                    <p>Members</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-work"></i>
                    <h1 class="counter">667</h1>
                    <p>Jobs</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-document"></i>
                    <h1 class="counter">475</h1>
                    <p>Resumes</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-factory"></i>
                    <h1 class="counter">475</h1>
                    <p>Companies</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counters end -->

<!-- Testimonial start -->
<div class="testimonial">
    <div class="container">
        <div class="main-title">
            <h1>What Our Users Say</h1>
        </div>
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 2, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slick-slide-item">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="media">
                            <a href="#">
                                <img src="img/avatar/avatar-2.jpg" alt="testimonial-avatar" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    Eliane Perei
                                </h5>
                                <h6>Web Developer</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="media">
                            <a href="#">
                                <img src="img/avatar/avatar-3.jpg" alt="testimonial-avatar" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    Maria Blank
                                </h5>
                                <h6>Office Manager</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="media">
                            <a href="#">
                                <img src="img/avatar/avatar-4.jpg" alt="testimonial-avatar" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    Karen Paran
                                </h5>
                                <h6>Support Manager</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="media">
                            <a href="#">
                                <img src="img/avatar/avatar-1.jpg" alt="testimonial-avatar" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    John Pitarshon
                                </h5>
                                <h6>Creative Director</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial end -->

<!-- Partners strat -->
<div class="partners content-area-15 bg-grea">
    <div class="container">
        <div class="main-title text-center">
            <h1>Companies We've Helped</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 5, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 3}}, {"breakpoint": 768,"settings":{"slidesToShow": 2}}]}'>
                <div class="slick-slide-item"><img src="img/brand/brand-1.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="img/brand/brand-2.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="img/brand/brand-3.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="img/brand/brand-4.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="img/brand/brand-1.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="img/brand/brand-2.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="img/brand/brand-3.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="img/brand/brand-4.png" alt="brand" class="img-fluid"></div>
            </div>
        </div>
    </div>
</div>
<!-- Partners end -->

<!-- Blog start -->
<div class="blog content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Latest Blog</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <!-- Slick slider area start -->
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slick-slide-item">
                    <div class="blog-3">
                        <div class="blog-photo">
                            <img src="img/blog/blog-2.jpg" alt="blog" class="img-fluid">
                            <div class="date-box">
                                <span>27</span>Feb
                            </div>
                        </div>
                        <div class="detail">
                            <h3>
                                <a href="blog-details.html">How To Get Out Of Stress At Work</a>
                            </h3>
                            <div class="post-meta">
                                <span><a href="#"><i class="flaticon-male"></i>Amdin</a></span>
                                <span><a href="#"><i class="flaticon-comment"></i>27</a></span>
                                <span><a href="#"><i class="fa fa-heart-o"></i>27</a></span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="blog-3">
                        <div class="blog-photo">
                            <img src="img/blog/blog-3.jpg" alt="blog" class="img-fluid">
                            <div class="date-box">
                                <span>23</span>Feb
                            </div>
                        </div>
                        <div class="detail">
                            <h3>
                                <a href="blog-details.html">Back To Work After Vacation</a>
                            </h3>
                            <div class="post-meta">
                                <span><a href="#"><i class="flaticon-male"></i>Amdin</a></span>
                                <span><a href="#"><i class="flaticon-comment"></i>27</a></span>
                                <span><a href="#"><i class="fa fa-heart-o"></i>27</a></span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="blog-3">
                        <div class="blog-photo">
                            <img src="img/blog/blog-1.jpg" alt="blog" class="img-fluid">
                            <div class="date-box">
                                <span>23</span>Feb
                            </div>
                        </div>
                        <div class="detail">
                            <h3>
                                <a href="blog-details.html">Job Motivational Quote</a>
                            </h3>
                            <div class="post-meta">
                                <span><a href="#"><i class="flaticon-male"></i>Amdin</a></span>
                                <span><a href="#"><i class="flaticon-comment"></i>27</a></span>
                                <span><a href="#"><i class="fa fa-heart-o"></i>27</a></span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="blog-3">
                        <div class="blog-photo">
                            <img src="img/blog/blog-1.jpg" alt="blog" class="img-fluid">
                            <div class="date-box">
                                <span>23</span>Feb
                            </div>
                        </div>
                        <div class="detail">
                            <h3>
                                <a href="blog-details.html">Job Motivational Quote</a>
                            </h3>
                            <div class="post-meta">
                                <span><a href="#"><i class="flaticon-male"></i>Amdin</a></span>
                                <span><a href="#"><i class="flaticon-comment"></i>27</a></span>
                                <span><a href="#"><i class="fa fa-heart-o"></i>27</a></span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="slick-prev slick-arrow-buton">
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="slick-next slick-arrow-buton">
                <i class="fa fa-angle-right"></i>
            </div>
        </div>
    </div>
</div>
<!-- Blog end -->

<!-- Intro section -->
<div class="intro-section bg-color-full-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="intro-text">
                    <h3>Gat a Deax App</h3>
                    <p>Searching for jobs never been that easy. Now you can find job matched your career expectation</p>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12">
                <div class="app-download-button">
                    <a href="#" class="android-app"><i class="flaticon-robot"></i>Google Play</a>
                    <a href="#" class="apple-app"><i class="flaticon-apple"></i>Apple Store</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Intro end -->
@endsection
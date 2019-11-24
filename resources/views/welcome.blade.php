@extends('layouts.app')
@section('content')
    <section>
        <div class="block no-padding">
            <div class="container fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-featured-sec">
                            <ul class="main-slider-sec text-arrows">
                                <li class="slideHome"><img src="{{ asset('frontend/images/resource/mslider1.jpg') }}" alt=""/></li>
                            </ul>
                            <div class="job-search-sec">
                                <div class="job-search">
                                    <h3>The Easiest Way to Get Your New Job</h3>
                                    <span>Find Jobs, Employment & Career Opportunities</span>
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-7 col-md-5 col-sm-12 col-xs-12">
                                                <div class="job-field">
                                                    <input type="text" placeholder="Job title, keywords or company name"/>
                                                    <i class="la la-keyboard-o"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
                                                <div class="job-field">
                                                    <select data-placeholder="City, province or region" class="chosen-city">
                                                        <option>New York</option>
                                                        <option>Istanbul</option>
                                                        <option>London</option>
                                                        <option>Russia</option>
                                                    </select>
                                                    <i class="la la-map-marker"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-12 col-xs-12">
                                                <button type="submit"><i class="la la-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="or-browser">
                                        <span>Browse job offers by</span>
                                        <a href="#" title="">Category</a>
                                    </div>
                                </div>
                            </div>
                            <div class="scroll-to">
                                <a href="#scroll-here" title=""><i class="la la-arrow-down"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading">
                            <h2>Featured Jobs</h2>
                            <span>Leading Employers already using job and talent.</span>
                        </div><!-- Heading -->
                        <div class="job-listings-sec">
                            @if($job_posts->count())
                                @foreach ($job_posts as $post)
                                    <div class="job-listing">
                                        <div class="job-title-sec">
                                            <div class="c-logo"></div>
                                            <h3 class="pl-3"><a href="{{ route('frontend.home.job-post-details',$post->uid) }}" title="">{{ $post->title }}</a></h3>
                                            <span class="pl-3">{{ $post->advertiser->advertiserInfo ? $post->advertiser->advertiserInfo->business_name : '' }}</span>
                                        </div>
                                        <span class="job-lctn"><i class="la la-map-marker"></i>{{ $post->location }}, {{ $post->country }}</span>
                                        <span class="job-lctn"><i class="la la-calendar"></i>{{ $post->deadline }}</span>
                                        @if (auth()->check() && auth()->user()->user_role == 'candidate')
                                            <a target="_blank" href="{{ route('frontend.home.job-post-details',$post->uid) }}">
                                                <span class="job-is fl">Apply Now</span>
                                            </a>
                                        @elseif(!auth()->check())
                                            <a href="{{ route('register.candidate') }}">
                                                <span class="job-is fl">Apply Now</span>
                                            </a>
                                        @endif
                                    </div><!-- Job -->
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block">
            <div data-velocity="-.1" style="background: url({{ asset('frontend/images/resource/parallax2.jpg') }}) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible layer color light"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading light">
                            <h2>Kind Words From Happy Candidates</h2>
                            <span>What other people thought about the service provided by JobHunt</span>
                        </div><!-- Heading -->
                        <div class="reviews-sec" id="reviews-carousel">
                            <div class="col-lg-6">
                                <div class="reviews">
                                    <img src="{{ asset('frontend/images/resource/r1.jpg') }}" alt=""/>
                                    <h3>Augusta Silva <span>Web designer</span></h3>
                                    <p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything! Can’t quite believe the service</p>
                                </div><!-- Reviews -->
                            </div>
                            <div class="col-lg-6">
                                <div class="reviews">
                                    <img src="{{ asset('frontend/images/resource/r2.jpg') }}" alt=""/>
                                    <h3>Ali Tufan <span>Web designer</span></h3>
                                    <p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything! Can’t quite believe the service</p>
                                </div><!-- Reviews -->
                            </div>
                            <div class="col-lg-6">
                                <div class="reviews">
                                    <img src="{{ asset('frontend/images/resource/r1.jpg') }}" alt=""/>
                                    <h3>Augusta Silva <span>Web designer</span></h3>
                                    <p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything! Can’t quite believe the service</p>
                                </div><!-- Reviews -->
                            </div>
                            <div class="col-lg-6">
                                <div class="reviews">
                                    <img src="{{ asset('frontend/images/resource/r2.jpg') }}" alt=""/>
                                    <h3>Ali Tufan <span>Web designer</span></h3>
                                    <p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything! Can’t quite believe the service</p>
                                </div><!-- Reviews -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading">
                            <h2>Companies We've Helped</h2>
                            <span>Some of the companies we've helped recruit excellent applicants over the years.</span>
                        </div><!-- Heading -->
                        <div class="comp-sec">
                            <div class="company-img">
                                <a href="#" title=""><img src="{{ asset('frontend/images/resource/cc1.jpg') }}" alt=""/></a>
                            </div><!-- Client  -->
                            <div class="company-img">
                                <a href="#" title=""><img src="{{ asset('frontend/images/resource/cc2.jpg') }}" alt=""/></a>
                            </div><!-- Client  -->
                            <div class="company-img">
                                <a href="#" title=""><img src="{{ asset('frontend/images/resource/cc3.jpg') }}" alt=""/></a>
                            </div><!-- Client  -->
                            <div class="company-img">
                                <a href="#" title=""><img src="{{ asset('frontend/images/resource/cc4.jpg') }}" alt=""/></a>
                            </div><!-- Client  -->
                            <div class="company-img">
                                <a href="#" title=""><img src="{{ asset('frontend/images/resource/cc5.jpg') }}" alt=""/></a>
                            </div><!-- Client  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block">
            <div data-velocity="-.1" style="background: url({{ asset('frontend/images/resource/parallax3.jpg') }}) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading">
                            <h2>Quick Career Tips</h2>
                            <span>Found by employers communicate directly with hiring managers and recruiters.</span>
                        </div><!-- Heading -->
                        <div class="blog-sec">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="my-blog">
                                        <div class="blog-thumb">
                                            <a href="#" title=""><img src="{{ asset('frontend/images/resource/b1.jpg') }}" alt=""/></a>
                                            <div class="blog-metas">
                                                <a href="#" title="">March 29, 2017</a>
                                                <a href="#" title="">0 Comments</a>
                                            </div>
                                        </div>
                                        <div class="blog-details">
                                            <h3><a href="#" title="">Attract More Attention Sales And Profits</a></h3>
                                            <p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>
                                            <a href="#" title="">Read More <i class="la la-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="my-blog">
                                        <div class="blog-thumb">
                                            <a href="#" title=""><img src="{{ asset('frontend/images/resource/b2.jpg') }}" alt=""/></a>
                                            <div class="blog-metas">
                                                <a href="#" title="">March 29, 2017</a>
                                                <a href="#" title="">0 Comments</a>
                                            </div>
                                        </div>
                                        <div class="blog-details">
                                            <h3><a href="#" title="">11 Tips to Help You Get New Clients</a></h3>
                                            <p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>
                                            <a href="#" title="">Read More <i class="la la-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="my-blog">
                                        <div class="blog-thumb">
                                            <a href="#" title=""><img src="{{ asset('frontend/images/resource/b3.jpg') }}" alt=""/></a>
                                            <div class="blog-metas">
                                                <a href="#" title="">March 29, 2017</a>
                                                <a href="#" title="">0 Comments</a>
                                            </div>
                                        </div>
                                        <div class="blog-details">
                                            <h3><a href="#" title="">An Overworked Newspaper Editor</a></h3>
                                            <p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>
                                            <a href="#" title="">Read More <i class="la la-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block no-padding">
            <div class="container fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="simple-text">
                            <h3>Gat a question?</h3>
                            <span>We're here to help. Check out our FAQs, send us an email or call us at 1 (800) 555-5555</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

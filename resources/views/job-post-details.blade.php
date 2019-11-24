@extends('layouts.app')
@section('content')
    <section class="overlape">
        <div class="block no-padding">
            <div data-velocity="-.1" style="background: url(&quot;{{ asset('frontend/images/resource/mslider1.jpg') }}&quot;) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner-header">
                            <h3>{{ $post->title }}</h3>
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
                    <div class="col-lg-8 column">
                        <div class="job-single-sec">
                            <div class="job-single-head">
                                <div class="job-head-info">
                                    <h4>{{ $post->advertiser->advertiserInfo ? $post->advertiser->advertiserInfo->business_name : '' }}</h4>
                                    <span>{{ $post->location }}, {{ $post->country }}</span>
                                </div>
                            </div><!-- Job Head -->
                            <div class="job-details pl-4 text-justify">
                                <h3>Job Description</h3>
                                {!! nl2br($post->description)  !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 column">
                        @if (auth()->check() && auth()->user()->user_role == 'candidate')
                            <a class="apply-thisjob" href="#" title=""><i class="la la-paper-plane"></i>Apply for job</a>
                        @elseif(!auth()->check())
                            <a class="apply-thisjob disabled" href="{{ route('register.candidate') }}" title=""><i class="la la-paper-plane"></i>Apply for job</a>
                        @endif

                        <div class="job-overview">
                            <h3>Job Overview</h3>
                            <ul>
                                <li><i class="la la-money"></i><h3>Offerd Salary</h3><span>{{ $post->salary }}</span></li>
                                <li><i class="la la-map"></i><h3>Location</h3><span>{{ $post->location }}, {{ $post->country }}</span></li>
                                <li><i class="la la-calendar"></i><h3>Deadline</h3><span>{{ $post->deadline }}</span></li>
                            </ul>
                        </div><!-- Job Overview -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

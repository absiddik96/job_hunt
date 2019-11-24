@extends('layouts.app')
@section('content')
    @include('include.header._header')
    <section>
        <div class="block no-padding">
            <div class="container">
                <div class="row no-gape">
                    @include('include.sidebar._advertiser')
                    <div class="col-lg-9 column">
                        <div class="padding-left">
                            <div class="manage-jobs-sec pb-5">
                                <h3>{{ $post->title }}</h3>
                                <div class="job-details pl-4 text-justify">
                                    <h3><b>Job Description</b></h3>
                                    <p>{!! nl2br($post->description)  !!}</p>

                                    <h3><b>Location</b></h3>
                                    <p>{{ $post->location }}, {{ $post->country }}</p>

                                    <h3><b>Salary</b></h3>
                                    <p>{{ $post->salary }}</p>

                                    <h3><b>Deadline</b></h3>
                                    <p>{{ $post->deadline }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

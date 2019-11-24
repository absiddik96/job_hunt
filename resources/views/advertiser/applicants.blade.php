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
                            <div class="emply-resume-sec">
                                <h3>Applicants for {{ $post->title }}</h3>
                                @if ($post->applicants->count())
                                    @foreach ($post->applicants as $applicant)
                                        <div class="emply-resume-list">
                                            <div class="emply-resume-thumb">
                                                <img src="{{ $applicant->candidate->candidateInfo->avatar_path }}" alt=""/>
                                            </div>
                                            <div class="emply-resume-info">
                                                <h3><a href="{{ route('advertiser.applicant.details',$applicant->candidate->uid) }}" title="">{{ $applicant->candidate->full_name }}</a></h3>
                                                <p><i class="la la-envelope"></i>{{ $applicant->candidate->email }}</p>
                                            </div>
                                            <div class="shortlists">
                                                <a href="{{ route('advertiser.applicant.details',$applicant->candidate->uid) }}" title="">Details <i class="la la-arrow-right"></i></a>
                                            </div>
                                        </div><!-- Emply List -->
                                    @endforeach
                                @else
                                    <div class="emply-resume-list">
                                        <p>No data found</p>
                                    </div><!-- Emply List -->
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

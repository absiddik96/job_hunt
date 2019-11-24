@extends('layouts.app')
@section('content')
    @include('include.header._header')
    <section>
        <div class="block no-padding">
            <div class="container">
                <div class="row no-gape">
                    @include('include.sidebar._advertiser')
                    <div class="col-lg-9 column">
                        <div class="padding-left pb-5">
                            <div class="emply-resume-sec">
                                <h3>Applicant Details</h3>
                                <div class="upload-img-bar">
                                    <span class="round"><img src="{{ $applicant ? $applicant->candidateInfo->avatar_path : asset('img/default.jpg') }}" alt="" /></span>
                                    <div class="upload-info"></div>
                                </div>
                                <div class="p-4">
                                    <h4>{{ $applicant->full_name }}</h4>
                                    <h6>{{ $applicant->email }}</h6>
                                </div>
                            </div>
                            <div class="manage-jobs-sec">
                                <div class="border-title"><h3>Resume</h3></div>
                                <div class="progress-sec">
                                    @if ($applicant->candidateInfo && $applicant->candidateInfo->resume)
                                        <div class="col-md-12 pb-3 pl-4">
                                            <a target="_blank" href="{{ $applicant->candidateInfo->resume_path }}">{{ $applicant->candidateInfo->resume }}</a>
                                            <a download href="{{ $applicant->candidateInfo->resume_path }}"><i class="fa fa-download"></i></a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="manage-jobs-sec">
                                <div class="border-title"><h3>Professional Skills</h3></div>
                                <div class="progress-sec">
                                    @if ($applicant->candidateSkills->count())
                                        @foreach ($applicant->candidateSkills as $skill)
                                            <div class="progress-sec with-edit">
                                                <span>{{ $skill->skill }}</span>
                                                <div class="progressbar"> <div class="progress" style="width: 80%;"><span>80%</span></div> </div>
                                                <ul class="action_job">
                                                    <li><span>Edit</span><a href="#" title=""><i class="la la-pencil"></i></a></li>
                                                    <li><span>Delete</span><a href="#" title=""><i class="la la-trash-o"></i></a></li>
                                                </ul>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

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
                            <div class="profile-title">
                                <h3>Post a New Job</h3>
                            </div>
                            <div class="profile-form-edit pb-5">
                                <form action="{{ route('advertiser.job-posts.store') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <span class="pf-title">Job Title</span>
                                            <div class="pf-field">
                                                <input name="title" value="{{ old('title') }}" type="text" placeholder="Job Title"/>
                                                @error('title')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <span class="pf-title">Description</span>
                                            <div class="pf-field">
                                                <textarea name="description">{{ old('description') }}</textarea>
                                                @error('description')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Location</span>
                                            <div class="pf-field">
                                                <input name="location" value="{{ old('location') }}" type="text" placeholder="Location"/>
                                                @error('location')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Country</span>
                                            <div class="pf-field">
                                                <input name="country" value="{{ old('country') }}" type="text" placeholder="Country"/>
                                                @error('country')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Salary</span>
                                            <div class="pf-field">
                                                <input name="salary" value="{{ old('salary') }}" type="text" placeholder="Salary"/>
                                                @error('salary')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Deadline</span>
                                            <div class="pf-field">
                                                <input name="deadline" value="{{ old('deadline') }}" type="text" placeholder="01.11.2019" class="form-control datepicker">
                                                @error('deadline')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

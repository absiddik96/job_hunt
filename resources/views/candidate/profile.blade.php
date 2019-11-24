@extends('layouts.app')

@section('content')
    @include('include.header._header')
    <section>
        <div class="block remove-top">
            <div class="container">
                <div class="row no-gape">
                    @include('include.sidebar._candidate')
                    <div class="col-lg-9 column">
                        <div class="padding-left">
                            <div class="profile-title">
                                <h3>My Profile</h3>
                                <div class="upload-img-bar">
                                    <span class="round"><img src="{{ $profile?$profile->avatar_path:asset('img/default.jpg') }}" alt="" /></span>
                                    <div class="upload-info"></div>
                                </div>
                            </div>
                            <div class="profile-form-edit mt-3">
                                <form action="{{ route('candidate.profile.upload-avatar') }}" method="post" enctype="multipart/form-data" accept="image/x-png,image/jpeg">
                                    @csrf
                                    <input name="avatar" type="file"><br>
                                    <span>Max file size is 1MB,Max dimension: 270x210 And Suitable files are .jpeg , .jpg & .png</span><br>
                                    @error('avatar')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    <button>Upload</button>
                                </form>
                            </div>
                            <div class="contact-edit">
                                <h3>Personal Info</h3>
                                <form action="{{ route('candidate.profile.update') }}" method="post">
                                    @csrf @method('put')
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <span class="pf-title">First Name</span>
                                            <div class="pf-field">
                                                <input type="text" name="first_name" value="{{ old('first_name',auth()->user()->first_name) }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Last Name</span>
                                            <div class="pf-field">
                                                <input type="text" name="last_name" value="{{ old('last_name',auth()->user()->last_name) }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <span class="pf-title">Email</span>
                                            <div class="pf-field">
                                                <input type="text" name="email" value="{{ old('email',auth()->user()->email) }}">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <button type="submit">Update</button>
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
@endsection





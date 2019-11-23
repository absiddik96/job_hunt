@extends('layouts.app')

@section('content')
    <section>
        <div class="block no-padding  gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner2">
                            <div class="inner-title2">
                                <h3>Register</h3>
                                <span>Keep up to date with the latest news</span>
                            </div>
                            <div class="page-breacrumbs">
                                <ul class="breadcrumbs">
                                    <li><a href="#" title="">Home</a></li>
                                    <li><a href="#" title="">Pages</a></li>
                                    <li><a href="#" title="">Candidate Register</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block remove-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="account-popup-area signup-popup-box static">
                            <div class="account-popup">
                                <h3>Sign Up</h3>
                                <div class="select-user">
                                    <span class="active">Candidate</span>
                                    <a href="{{ route('sign-up.advertiser') }}"><span>Advertiser</span></a>
                                </div>
                                <form action="{{ route('register.candidate') }}" method="post">
                                    @csrf
                                    <div class="form-group text-left ">
                                        <div class="cfield mb-0">
                                            <input name="first_name" type="text" placeholder="First Name" value="{{ old('first_name') }}" />
                                        </div>
                                        @error('first_name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group text-left ">
                                        <div class="cfield mb-0">
                                            <input name="last_name" type="text" placeholder="Last Name" value="{{ old('last_name') }}" />
                                        </div>
                                        @error('last_name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group text-left ">
                                        <div class="cfield mb-0">
                                            <input name="email" type="email" placeholder="Email" value="{{ old('email') }}" />
                                        </div>
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group text-left ">
                                        <div class="cfield mb-0">
                                            <input name="password" type="password" placeholder="Password" />
                                        </div>
                                        @error('password')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="cfield mb-0">
                                            <input name="password_confirmation" type="password" placeholder="Confirm Password" />
                                        </div>
                                    </div>
                                    <button type="submit">Signup</button>
                                </form>
                            </div>
                        </div><!-- SIGNUP POPUP -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.app')

@section('content')
    <section>
        <div class="block no-padding  gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner2">
                            <div class="inner-title2">
                                <h3>Login</h3>
                                <span>Keep up to date with the latest news</span>
                            </div>
                            <div class="page-breacrumbs">
                                <ul class="breadcrumbs">
                                    <li><a href="#" title="">Home</a></li>
                                    <li><a href="#" title="">Pages</a></li>
                                    <li><a href="#" title="">Login</a></li>
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
                        <div class="account-popup-area signin-popup-box static">
                            <div class="account-popup">
                                <h3>Login</h3>
                                <form action="{{ route('login') }}" method="post">
                                    @csrf
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
                                    <p class="remember-label">
                                        <input type="checkbox" name="cb" id="cb1"><label for="cb1">Remember me</label>
                                    </p>
                                    <a href="#" title="">Forgot Password?</a>
                                    <button type="submit">Login</button>
                                </form>
                            </div>
                        </div><!-- LOGIN POPUP -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

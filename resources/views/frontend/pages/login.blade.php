@extends('master')
@section('title','Log in')
@section('nothing','login')
@section('content')
    @include('frontend.layouts.partials.slide')

    <!-- START - Contain Wrapp -->
    <div class="contain-wrapp">
        <div class="container">
            <div class="form-block center-block">
                <h2 class="title">Login</h2>
                <hr />
                <form id="login" class="form-horizontal" action="{{ route('customer.login') }}" method="post">
                    @csrf
                    <div class="form-group has-feedback">
                        <label for="inputUserName" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" name="email" class="form-control" id="inputUserName" placeholder="Enter email" required="">
                            <i class="fa fa-user form-control-feedback"></i>
                        </div>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="inputPassword" class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-8">
                            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" required="">
                            <i class="fa fa-lock form-control-feedback"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-8">
                            <button type="submit" class="btn-e btn-block btn-e-primary margin-top-10">Log In</button>
                            <ul class="lost">
                                <li><a href="#">Forgot your password ?</a></li>
                            </ul>
                            <span class="text-center text-muted">Login with</span>
                            <ul class="social-links colored circle clearfix">
                                <li class="facebook"><a target="_blank" href="http://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a target="_blank" href="http://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                <li class="googleplus"><a target="_blank" href="http://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
            <p class="text-center space-top">Don't have an account yet ? <a href="{{url('resources/register')}}">Register</a> now.</p>
        </div>
    </div>
    <!-- END - Contain Wrapp -->

    <div class="clearfix"></div>
    @endsection
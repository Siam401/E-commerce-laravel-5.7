@extends('master')
@section('title','Register')
@section('nothing','Register')
@section('content')
    @include('frontend.layouts.partials.slide')
    <div class="contain-wrapp">
        <div class="container">
            <div class="form-block center-block">
                <h2 class="title">Sign Up</h2>
                <hr />
                <form id="register" class="form-horizontal" action="{{ route('customer.register') }}" method="post">
                    @csrf
                    <div class="form-group has-feedback">
                        <label for="inputName" class="col-sm-3 control-label">User Name <span class="text-danger small">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" name="user_name" class="form-control" id="inputName" placeholder="Enter User Name" required="">
                            <i class="fa fa-pencil form-control-feedback"></i>
                        </div>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="inputEmail" class="col-sm-3 control-label">E-mail <span class="text-danger small">*</span></label>
                        <div class="col-sm-8">
                            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="E-mail" required="">
                            <i class="fa fa-envelope form-control-feedback"></i>
                        </div>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="inputPassword" class="col-sm-3 control-label">Password <span class="text-danger small">*</span></label>
                        <div class="col-sm-8">
                            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" required="">
                            <i class="fa fa-lock form-control-feedback"></i>
                        </div>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="inputPassword" class="col-sm-3 control-label">Mobile Number <span class="text-danger small">*</span></label>
                        <div class="col-sm-8">
                            <input type="number" name="customer_no" class="form-control" id="inputPassword" placeholder="Enter Mobile Number" required="">
                            <i class="fa fa-lock form-control-feedback"></i>
                        </div>
                    </div>
                    {{--<div class="form-group">--}}
                        {{--<div class="col-sm-offset-3 col-sm-8">--}}
                            {{--<div class="checkbox">--}}
                                {{--<label class="custom-checkbox">I have read <a href="#">privacy policy</a> and <a href="#">customer agreement</a>--}}
                                    {{--<input type="checkbox" name="terms" required/>--}}
                                    {{--<div class="checkmark"></div>--}}
                                {{--</label>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-8">
                            <button type="submit" class="btn-e btn-block btn-e-primary">Sign Up</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END - Contain Wrapp -->

    <div class="clearfix"></div>
    @endsection
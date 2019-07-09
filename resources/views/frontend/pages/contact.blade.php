@extends('master')
@section('title','Contact')
@section('nothing','contact')
@section('content')
    @include('frontend.layouts.partials.slide')
    <!-- START - Contain Wrapp -->
    <div class="contain-wrapp padding-bottom-50">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7">
                    <form method="post" id="mycontactform">
                        <div class="clearfix"></div>
                        <div id="success"></div>
                        <div class="row wrap-form">
                            <div class="form-group col-sm-6">
                                <label for="inputName">Full Name</label>
                                <input type="text" name="name" id="inputName" class="form-control required" placeholder="Enter your full name...">
                                <span data-for="name" class="error"></span>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="inputEmail">E-mail Address</label>
                                <input type="email" name="email" id="inputEmail" class="form-control required" placeholder="Enter your e-mail address...">
                                <span data-for="email" class="error"></span>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputMessage">Your Message</label>
                                <textarea name="message" id="inputMessage" class="form-control required" placeholder="Write something for us..." rows="9"></textarea>
                                <span data-for="message" class="error"></span>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="submit" value="Send Message" id="submit" class="btn-e btn-e-primary" />
                                <div class="status-progress"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 col-sm-5">
                    <div class="contact-detail">
                        <div class="contact-sparator"></div>
                        <ul class="list-unstyled">
                            <li>
                                <h6><i class="fa fa-home fa-2x fa-primary"></i> Our location</h6>
                                <p>
                                    25, Lorem Lis Street, Orange
                                    <br /> California, United States
                                </p>
                            </li>
                            <li>
                                <h6><i class="fa fa-phone fa-2x fa-primary"></i> Call center</h6>
                                <p>
                                    (0123)-123-456-789
                                </p>
                            </li>
                            <li>
                                <h6><i class="fa fa-envelope fa-2x fa-primary"></i> E-mail address</h6>
                                <p>
                                    support@ecada.com
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END - Contain Wrapp -->

    <!-- START - Google Map -->
    <div class="map-wrapper">
        <div class="maps map-primary" data-address="Juniper Valley Rd 80, New York, United States" data-zoom="15"></div>
    </div>
    <!-- END - Google Map -->

    <div class="clearfix"></div>
    @endsection
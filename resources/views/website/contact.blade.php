@extends('website.layouts.app')
@section('content')
<section class="mainBanner innerpage our-horse">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center wow fadeInUp">
                <h1><span>Contact Us</span></h1>
            </div>
        </div>
    </div>
</section>

<section class="sec15">
    <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-md-5">
                @if(session()->has('alert'))
                    <div class="alert alert-success alert-dismissible show">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong class="alert-strong">{{session('alert')}}</strong>
                    </div>
                @endif
                <h5>GET IN TOUCH WITH US</h5>
                <form class="form row" action="{{route('contact.send')}}" method="POST">
                    @csrf
                    <div class="col-md-6">
                        <input type="text" name="name" placeholder="Name">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="email" placeholder="Email Address">
                    </div>
                    <div class="col-md-12">
                        <input type="text" name="phone" placeholder="Contact No">
                    </div>
                    <div class="col-md-12">
                        <textarea cols="30" rows="6" name="message" placeholder="Message"></textarea>
                    </div>
                    <div class="col-md-12 text-end">
                        <button class="theme-btn">SUBMIT <i class="fa-solid fa-arrow-right-long"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="sec16">
    <div class="container">
        <div class="row gx-5">
            <div class="col-md-4">
                <div class="boxed">
                    <h3>Mail Us:</h3>
                    <i class="fa-solid fa-envelope wow fadeInDown"></i>
                    <div>
                        <a href="mailto:marketing@myracingsyndicate.com">marketing@myracingsyndicate.com</a>
                        <br>
                        <a href="mailto:myracingverdict@gmail.com">myracingverdict@gmail.com</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="boxed phone">
                    <h3>Call Us:</h3>
                    <i class="fa-solid fa-phone wow fadeInDown"></i>
                    <div>
                        <a href="tel:+971501231642">+971501231642</a>
                        <br>
                        <a href="tel: +971501231796">+971501231796</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="boxed">
                    <h3>FOR BUSINESS OR <br> SPONSORSHIP ENQUIRIES</h3>
                    <i class="fa-solid fa-headphones wow fadeInDown"></i>
                    <div>
                        <a href="mailto:marketing@myracingsyndicate.com">marketing@myracingsyndicate.com</a>
                        <br>
                        <a href="mailto:myracingverdict@gmail.com">myracingverdict@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
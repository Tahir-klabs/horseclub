@extends('website.layouts.app')
@section('content')
<section class="mainBanner innerpage our-horse">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center wow fadeInUp">
                <h1><span>MRS Competitions</span> </h1>
            </div>
        </div>
    </div>
</section>

<section class="sec12">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <button type="button" class="theme1-btn modalButton3" data-popup="popupThree">
                    Previous Competitions <i class="fa-solid fa-chevron-right"></i></button>
            </div>
            <div class="col-md-6 text-center">
                <button type="button" class="theme1-btn modalButton4" data-popup="popupFour">Current Competitions <i
                        class="fa-solid fa-chevron-right"></i></button>
            </div>
        </div>
        <div class="row login-button">
            <a href="{{route('register')}}" class="btn btn-outline-warning" >Join Now <i
                class="fa-solid fa-chevron-right"></i></a>
        </div>
    </div>
</section>
@endsection
@extends('website.layouts.app')
@section('content')
<section class="mainBanner innerpage our-horse">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center wow fadeInUp">
                <h1><span>Our Horses</span></h1>
            </div>
        </div>
    </div>
</section>

<section class="sec12">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <button type="button" class="theme1-btn modalButton1" data-popup="popupOne">
                    Previous Horses <i class="fa-solid fa-chevron-right"></i></button>
            </div>
            <div class="col-md-6 text-center">
                <button type="button" class="theme1-btn modalButton2" data-popup="popupTwo">Current Horses <i
                        class="fa-solid fa-chevron-right"></i></button>
            </div>
        </div>
    </div>
</section>

<section class="sec13">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="img-slider">
                    <div>
                        <img src="assets/images/24.jpg" class="img1" alt="">
                    </div>
                    <div>
                        <img src="assets/images/25.jpg" class="img1" alt="">
                    </div>
                    <div>
                        <img src="assets/images/23.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
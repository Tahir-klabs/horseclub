@extends('website.layouts.app')
@section('content')
<section class="sec6 sect6">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-md-6 padd-r">
                <img src="assets/images/5.png" alt="">
            </div>
            <div class="col-md-6">
                <h2>Merchandise</h2>
                <p class="para">Spread the My Racing Syndicate word wherever you go! Our merchandise collection
                    consists of several everyday-use items. You may purchase them separately or buy the entire pack
                    for a discounted price with everything delivered right at your doorstep!
                </p>
                <a href="{{route('web.shop')}}" class="theme-btn">Check it out <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
        </div>
    </div>
</section>
@endsection
@extends('website.layouts.app')
@section('content')
<section class="mainBanner" style="background-image:url(assets/images/banner/mainbanner.jpg); ">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1 class="wow zoomIn">Welcome to <span>My Racing Syndicate</span></h1>
                <div class="boxed wow zoomIn">
                    <p class="para">Founded by three horse racing enthusiasts – Abdul Ahad, Suleiman Altaf and Saad
                        – My Racing Syndicate is a brand new horse racing syndicate that was launched in the UAE
                        before the commencement of the 2022-23 UAE Racing season.</p>
                    <p class="para">The syndicate aims to provide people with an affordable and exciting opportunity
                        to get involved in the ownership of flat racehorses with exclusive benefits to enjoy a World
                        Class racing experience.</p>
                </div>
                <div class="bor-line"></div>
                <a href="{{route('web.about')}}" class="theme-btn wow zoomIn">Learn More <i
                        class="fa-solid fa-arrow-right-long"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="sec2">
    <div class="container">
        <div class="row">
            <div class="col-md-6 padd-r wow fadeInLeft">
                <h2>Benefits of joining <br> My Racing Syndicate</h2>
                <p class="para">Becoming a racehorse owner comes with a lot of benefits. While the thrill of seeing
                    your horse participate and compete against the best stables remains the biggest reason to get
                    involved in racehorse ownership, there are numerous other benefits. Irrespective of the placing
                    your horse receives in a race, the overall experience gained is worth the money.</p>
            </div>
            <div class="col-md-6">
                <img src="assets/images/7.jpg" alt="">
            </div>
        </div>
    </div>
</section>

<section class="sec3">
    <div class="container-fluid">
        <div class="row">
            <div class="boxed wow zoomIn">
                <i class="fa-solid fa-horse"></i>
                <p class="para">Stable visits and Morning gallops</p>
            </div>
            <div class="boxed wow zoomIn">
                <i class="fa-solid fa-certificate"></i>
                <p class="para">Ownership certificate and Share holding contract</p>
            </div>
            <div class="boxed wow zoomIn">
                <i class="fa-solid fa-trophy"></i>
                <p class="para">Syndicate competitions & merchandise</p>
            </div>
            <div class="boxed wow zoomIn">
                <i class="fa-solid fa-calendar-days"></i>
                <p class="para">Syndicate meets and greets.</p>
            </div>
            <div class="boxed wow zoomIn">
                <i class="fa-solid fa-certificate"></i>
                <p class="para">Owners hospitality on race day</p>
            </div>
        </div>
        <div class="row mar-t">
            <div class="boxed wow zoomIn">
                <i class="fa-regular fa-handshake"></i>
                <p class="para">Chance to participate in syndicate meetings</p>
            </div>
            <div class="boxed wow zoomIn">
                <i class="fa-solid fa-pen-to-square"></i>
                <p class="para">Regular updates on your horses</p>
            </div>
            <div class="boxed wow zoomIn">
                <i class="fa-solid fa-tags"></i>
                <p class="para">Exclusive discounts with partnered companies</p>
            </div>
            <div class="boxed wow zoomIn">
                <i class="fa-solid fa-handshake"></i>
                <p class="para">Meet the trainer and jockey of your horse</p>
            </div>
            <div class="boxed wow zoomIn">
                <i class="fa-solid fa-user-pen"></i>
                <p class="para">Invites to key horse racing events</p>
            </div>
        </div>
    </div>
</section>

<section class="sec4" style="background-image: url(assets/images/banner/horsebanner.jpg);">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-5 wow fadeInRight">
                <h2>Our Horses</h2>
                <p class="para">We look for affordable yet exciting prospects with notable focus on pedigree lines,
                    whether it be for Purebred Arabian or Thoroughbred.</p>
                <p class="para">Check the ‘Our Horses’ page for detailed information on our past and current horses.
                </p>
                <a href="{{route('web.horses')}}" class="theme-btn">See all <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="sec5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 padd-r wow fadeInLeft">
                <h2>Intra-Syndicate <br> Competitions</h2>
                <p class="para">Horses don’t run every meeting but to keep our members engaged in the fighting (and
                    winning) spirit, we hold multiple intra-syndicate competitions throughout the year, not only for
                    the UAE Racing Seasons.
                </p>
                <p class="para">Our first such competition was recently launched. The My Racing Syndicate Fantasy
                    Tipping Competition 2022-23 can be played by any member of the syndicate. While these
                    competitions are only held for fun, you can potentially win prizes such as MRS merchandise!
                </p>
                <a href="{{route('web.members')}}" class="theme-btn">Fantasy Tipping Competition <i
                        class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="col-md-6">
                <img src="assets/images/7.jpg" alt="">
            </div>
        </div>
    </div>
</section>

<section class="sec6">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-md-6 padd-r">
                <img src="assets/images/5.png" alt="">
            </div>
            <div class="col-md-6 wow fadeInRight">
                <h2>Merchandise</h2>
                <p class="para">Spread the My Racing Syndicate word wherever you go! Our merchandise collection
                    consists of several everyday-use items. You may purchase them separately or buy the entire pack
                    for a discounted price with everything delivered right at your doorstep!
                </p>
                <a href="{{route('web.merchandise')}}" class="theme-btn">Check it out <i
                        class="fa-solid fa-arrow-right-long"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="sec7">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow fadeInLeft">
                <h2>Gallery</h2>
            </div>
        </div>
        <div class="gallery-slider">
            <div>
                <div class="row g-4">
                    <div class="col-md-3 wow zoomIn">
                        <a href="assets/images/19.jpg" data-fancybox="gallery">
                            <img src="assets/images/19.jpg" alt="Image Gallery">
                        </a>
                    </div>
                    <div class="col-md-3 wow zoomIn">
                        <a href="assets/images/21.jpg" data-fancybox="gallery">
                            <img src="assets/images/21.jpg" alt="Image Gallery">
                        </a>
                    </div>
                    <div class="col-md-3 wow zoomIn">
                        <a href="assets/images/12.jpg" data-fancybox="gallery">
                            <img src="assets/images/12.jpg" alt="Image Gallery">
                        </a>
                    </div>
                    <div class="col-md-3 wow zoomIn">
                        <a href="assets/images/2.jpg" data-fancybox="gallery">
                            <img src="assets/images/2.jpg" alt="Image Gallery">
                        </a>
                    </div>
                    <div class="col-md-3 wow zoomIn">
                        <a href="assets/images/11.jpg" data-fancybox="gallery">
                            <img src="assets/images/11.jpg" alt="Image Gallery">
                        </a>
                    </div>
                    <div class="col-md-3 wow zoomIn">
                        <a href="assets/images/14.jpg" data-fancybox="gallery">
                            <img src="assets/images/14.jpg" alt="Image Gallery">
                        </a>
                    </div>
                    <div class="col-md-3 wow zoomIn">
                        <a href="assets/images/20.jpg" data-fancybox="gallery">
                            <img src="assets/images/20.jpg" alt="Image Gallery">
                        </a>
                    </div>
                    <div class="col-md-3 wow zoomIn">
                        <a href="assets/images/15.jpg" data-fancybox="gallery">
                            <img src="assets/images/15.jpg" alt="Image Gallery">
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <div class="row g-4">
                    <div class="col-md-3 wow zoomIn">
                        <a href="assets/images/18.jpg" data-fancybox="gallery">
                            <img src="assets/images/18.jpg" alt="Image Gallery">
                        </a>
                    </div>
                    <div class="col-md-3 wow zoomIn">
                        <a href="assets/images/17.jpg" data-fancybox="gallery">
                            <img src="assets/images/17.jpg" alt="Image Gallery">
                        </a>
                    </div>
                    <div class="col-md-3 wow zoomIn">
                        <a href="assets/images/banner/mainbanner.jpg" data-fancybox="gallery">
                            <img src="assets/images/banner/mainbanner.jpg" alt="Image Gallery">
                        </a>
                    </div>
                    <div class="col-md-3 wow zoomIn">
                        <a href="assets/images/16.jpg" data-fancybox="gallery">
                            <img src="assets/images/16.jpg" alt="Image Gallery">
                        </a>
                    </div>
                    <div class="col-md-3 wow zoomIn">
                        <a href="assets/images/3.jpg" data-fancybox="gallery">
                            <img src="assets/images/3.jpg" alt="Image Gallery">
                        </a>
                    </div>
                    <div class="col-md-3 wow zoomIn">
                        <a href="assets/images/1.jpg" data-fancybox="gallery">
                            <img src="assets/images/1.jpg" alt="Image Gallery">
                        </a>
                    </div>
                    <div class="col-md-3 wow zoomIn">
                        <a href="assets/images/3.jpg" data-fancybox="gallery">
                            <img src="assets/images/3.jpg" alt="Image Gallery">
                        </a>
                    </div>
                    <div class="col-md-3 wow zoomIn">
                        <a href="assets/images/8.jpg" data-fancybox="gallery">
                            <img src="assets/images/8.jpg" alt="Image Gallery">
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <div class="row g-4">
                    <div class="col-md-3">
                        <a href="assets/images/9.jpg" data-fancybox="gallery">
                            <img src="assets/images/9.jpg" alt="Image Gallery">
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="assets/images/10.jpg" data-fancybox="gallery">
                            <img src="assets/images/10.jpg" alt="Image Gallery">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
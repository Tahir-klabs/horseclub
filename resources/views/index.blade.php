<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

	<title>{{config('app.name', 'Laravel')}}</title>

	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="assets/images/logo-syndicate-1.png" />
	
	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" href="assets/images//apple-touch-icon-114x114-precomposed.png">
	
	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" href="assets/images//apple-touch-icon-72x72-precomposed.png">
	
	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="assets/images//apple-touch-icon-57x57-precomposed.png">	
	
	<!-- Library - Google Font Familys -->
	<link href="https:// s.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Montserrat+Alternates:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Poppins:300,400,500,600,700|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Lato" rel="stylesheet"> 
	
	<link rel="stylesheet" type="text/css" href="assets/revolution/css/settings.css">
	
	<!-- RS5.3 Layers and Navigation Styles -->
	<link rel="stylesheet" type="text/css" href="assets/css/layers.css">
	<link rel="stylesheet" type="text/css" href="assets/css/navigation.css">
		
	<!-- Library -->
    <link href="assets/css/lib.css" rel="stylesheet">    
	
	<!-- Custom - Common CSS -->
	<link href="assets/css/plugins.css" rel="stylesheet">
	<link href="assets/css/elements.css" rel="stylesheet">	
	<link href="assets/css/rtl.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet" type="text/css">
	<link id="color" href="assets/css/default.css" rel="stylesheet"/>

    <link href="https:// s.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Montserrat+Alternates:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Poppins:300,400,500,600,700|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Lato" rel="stylesheet"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->
	
</head>

<body data-offset="200" data-spy="scroll" data-target=".ownavigation">
	<!-- Loader -->
	<div id="site-loader" class="load-complete">
		<div class="loader">
			<div class="line-scale"><div></div><div></div><div></div><div></div><div></div></div>
		</div>
	</div><!-- Loader /- -->	
	
	<!-- Style Switcher -->
	{{-- <div class="color-switcher" id="choose_color">
		<a href="#." class="picker_close">
			<i class="fa fa-gear fa-spin"></i>
		</a>
		<div class="style-picker">
			<h3>Select Your Style</h3>
			<div class="color-switcher-block">
				<p>Choose Colour style</p>
				<ul class="">
					<li><a href="#." class="red" id="default"><img src="assets/images/red.jpg" alt="red"/></a></li>
					<li><a href="#." class="green" id="green"><img src="assets/images/green.jpg" alt="green"/></a></li>
					<li><a href="#." class="skyblue" id="skyblue"><img src="assets/images/skyblue.jpg" alt="skyblue"/></a></li>
					<li><a href="#." class="orange" id="orange"><img src="assets/images/orange.jpg" alt="orange"/></a></li>
					<li><a href="#." class="coral" id="coral"><img src="assets/images/coral.jpg" alt="coral"/></a></li>
					<li><a href="#." class="cyan" id="cyan"><img src="assets/images/cyan.jpg" alt="cyan"/></a></li>
					<li><a href="#." class="khaki" id="khaki"><img src="assets/images/khaki.jpg" alt="khaki"/></a></li>
					<li><a href="#." class="pink" id="pink"><img src="assets/images/pink.jpg" alt="pink"/></a></li>
					<li><a href="#." class="slateblue" id="slateblue"><img src="assets/images/slateblue.jpg" alt="slateblue"/></a></li>
					<li><a href="#." class="gold" id="gold"><img src="assets/images/gold.jpg" alt="gold"/></a></li>
				</ul>
			</div>
		</div>
	</div> --}}
	<!-- Style Switcher /- -->
	
	<a id="top"></a>
	
	<!-- Header Section -->
	<header class="header_s">
		<!-- SidePanel -->
		<div id="slidepanel">
			<!-- Top Header -->
			<div class="container-fluid no-right-padding no-left-padding top-header">
				<!-- Container -->
				<div class="container">						
					{{-- <div class="top-left">
						<div class="lang-block">
							<select class="selectpicker" data-placeholder="Choose a Language...">
								<option value="EN">English</option>
								<option value="AF">Albanian</option>
								<option value="SQ">German</option>
							</select>
						</div>
					</div> --}}
					<div class="logo-block">
						<a href="{{url('/')}}" title="Logo"><img src="assets/images/logo-syndicate-1.png" alt="">My Racing Syndicate</a>
					</div>
					<div class="top-right">
						<span><a href="mailto:marketing@myracingsyndicate.com">marketing@myracingsyndicate.com</a> | 
							<a href="tel:+971501231642">+971501231642</a>
							</span>
						{{-- <ul class="pages-dropdown">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li><a href="#" title="Page 1">Page 1</a></li>
									<li><a href="#" title="Page 2">Page 2</a></li>
									<li><a href="#" title="Page 3">Page 3</a></li>
								</ul>
							</li>
						</ul> --}}
						{{-- <div class="search">
							<a href="javascript:void(0);" id="search" title="Search"><i class="fa fa-search"></i></a>
						</div> --}}
					</div>
					<!-- Search Box -->
					<div class="search-box">
						<span><i class="icon_close"></i></span>
						<form><input type="text" class="form-control" placeholder="Enter a keyword and press enter..." /></form>
					</div><!-- Search Box /- -->
				</div><!-- Container /- -->
			</div><!-- Top Header /- -->
			
		</div><!-- SidePanel /- -->
		<!-- Menu Block -->
		<div class="menu-block">
			<!-- Container -->
			<div class="container">
				<!-- Ownavigation -->
				<nav class="navbar ownavigation">
					<div class="navbar-header ">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>						
					</div>
					<div id="navbar" class="navbar-collapse collapse logo-block">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#top" title="Home">Home</a></li>
							<li><a href="#features-section" title="Features">Features</a></li>
							<li><a href="#gallery-section" title="Gallery">Gallery</a></li>
							<li><a href="#services-section" title="Services">Services</a></li>
							{{-- <li class="dropdown">
								<a href="blog.html" title="Blog" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
								<i class="ddl-switch fa fa-angle-down"></i>
								<ul class="dropdown-menu">
									<li><a href="blog-single.html" title="Blog Single">Blog Single</a></li>
								</ul>
							</li> --}}
							<li><a href="#team-section" title="About us">About us</a></li>
							<li><a href="#pricing-section" title="Policy">Policy</a></li>							
							<li><a href="#footer-main" title="Contact Us">Contact us</a></li>
						</ul>
					</div>
					{{-- <div id="loginpanel" class="desktop-hide">
						<div class="right" id="toggle">
							<a id="slideit" href="#slidepanel"><i class="fo-icons fa fa-inbox"></i></a>
							<a id="closeit" href="#slidepanel"><i class="fo-icons fa fa-close"></i></a>
						</div>
					</div> --}}
				</nav><!-- Ownavigation /- -->
			</div><!-- Container /- -->
		</div><!-- Menu Block /- -->
	</header><!-- Header Section /- -->
	
	<div class="main-container">

		<main class="site-main">		
			
			<!-- Slider Section -->
			<div id="home-revslider" class="slider-section container-fluid no-padding">
				<!-- START REVOLUTION SLIDER 5.3 -->
				<div class="rev_slider_wrapper">
					<div id="home-slider1" class="rev_slider" data-version="5.3">
						<ul>
							<li>
								<img src="assets/images/background-horse.jpg" alt="slider" style="background-color: #f1f1f1;" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
								<div class="tp-caption tp-shape tp-shapewrapper" id="slide-1-layer-0"
									data-x="['center','center','center','center']" 
									data-y="['middle','middle','middle','middle']" 
									data-basealign="slide" 
									data-height="full" 
									data-hoffset="['0','0','0','0']" 
									data-responsive="off" 
									data-responsive_offset="off" 
									data-start="0" 
									data-transform_idle="o:1;" 
									data-transform_in="opacity:0;s:2000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:500;s:500;" 
									data-voffset="['0','0','0','0']" 
									data-whitespace="nowrap" 
									data-width="full"
									style="z-index: 5;background-color:rgba(0, 0, 0, 0.21);">
								</div>					
								
								<div class="tp-caption tp-resizeme rs-parallaxlevel-0 slide-title" id="slide-1-layer-1" 
									data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									data-y="['middle','middle','middle','middle']" data-voffset="['-84','-84','-70','-74']" 
									data-fontsize="['56','50','36','26']"
									data-lineheight="['71','71','55','45']"
									data-width="['805','805','600','450']"
									data-whitespace="normal"
									data-transform_idle="o:1;"
									data-transform_in="x:[-105%];s:1000;e:Power4.slideInRight;" 
									data-transform_out="y:[100%];s:1000;s:1000;e:Power2.slideInRight;" 
									data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"  
									data-start="1000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on"
									data-elementdelay="0.05" 
									data-textAlign="['center','center','center','center']"
									data-paddingtop="[0,0,0,0]"
									data-paddingright="[0,0,0,0]"
									data-paddingbottom="[0,0,0,0]"
									data-paddingleft="[0,0,0,0]"
									style="z-index: 5; color: #fff; font-family: 'Montserrat Alternates', sans-serif;">Welcome To <span>My Racing Syndicate</span>
								</div>
														
								<div class="tp-caption tp-resizeme rs-parallaxlevel-0" id="slide-1-layer-2" 
									data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									data-y="['middle','middle','middle','middle']" data-voffset="['17','17','17','0']" 
									data-whitespace="normal"
									data-transform_idle="o:1;"
									data-transform_in="x:[-105%];s:1000;e:Power4.slideInRight;" 
									data-transform_out="y:[100%];s:1000;s:1000;e:Power2.slideInRight;" 
									data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"  
									data-start="1000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on"
									data-elementdelay="0.05"
									data-textAlign="['center','center','center','center']"
									style="z-index: 5;"><span class="slide-border"></span>
								</div>
								
								<div class="tp-caption tp-resizeme rs-parallaxlevel-0" id="slide-1-layer-3" 
									data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									data-y="['middle','middle','middle','middle']" data-voffset="['82','82','82','72']" 
									data-fontsize="['19','19','19','16']"
									data-lineheight="['30','30','30','26']"
									data-width="['600','630','620','450']"
									data-whitespace="normal"
									data-transform_idle="o:1;"
									data-transform_in="x:[-105%];s:1000;e:Power4.slideInRight;" 
									data-transform_out="y:[100%];s:1000;s:1000;e:Power2.slideInRight;" 
									data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"  
									data-start="1000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on"
									data-elementdelay="0.05" 
									data-textAlign="['center','center','center','center']"
									data-paddingtop="[0,0,0,0]"
									data-paddingright="[0,0,0,0]"
									data-paddingbottom="[0,0,0,0]"
									data-paddingleft="[0,0,0,0]"
									style="z-index: 5; color: #fff; font-family: 'Montserrat Alternates', sans-serif;"><br/>Founded by three horse racing enthusiasts – Abdul Ahad, Suleiman Altaf and Saad – My Racing Syndicate is a brand new horse racing syndicate that was launched in the UAE before the commencement of the 2022-23 UAE Racing season.

									The syndicate aims to provide people with an affordable and exciting opportunity to get involved in the ownership of flat racehorses with exclusive benefits to enjoy a World Class racing experience.
								</div>						
							</li>
							<li>
								<img src="assets/images/background-horse.jpg" alt="slider" style="background-color: #f1f1f1;" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
								<div class="tp-caption tp-shape tp-shapewrapper" id="slide-2-layer-0"
									data-x="['center','center','center','center']" 
									data-y="['middle','middle','middle','middle']" 
									data-basealign="slide" 
									data-height="full" 
									data-hoffset="['0','0','0','0']" 
									data-responsive="off" 
									data-responsive_offset="off" 
									data-start="0" 
									data-transform_idle="o:1;" 
									data-transform_in="opacity:0;s:2000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:500;s:500;" 
									data-voffset="['0','0','0','0']" 
									data-whitespace="nowrap" 
									data-width="full"
									style="z-index: 5;background-color:rgba(0, 0, 0, 0.21);">
								</div>					
								
								<div class="tp-caption tp-resizeme rs-parallaxlevel-0 slide-title" id="slide-2-layer-1" 
									data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									data-y="['middle','middle','middle','middle']" data-voffset="['-84','-84','-70','-74']" 
									data-fontsize="['56','50','36','26']"
									data-lineheight="['71','71','55','45']"
									data-width="['805','805','600','450']"
									data-whitespace="normal"
									data-transform_idle="o:1;"
									data-transform_in="x:[-105%];s:1000;e:Power4.slideInRight;" 
									data-transform_out="y:[100%];s:1000;s:1000;e:Power2.slideInRight;" 
									data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"  
									data-start="1000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on"
									data-elementdelay="0.05" 
									data-textAlign="['center','center','center','center']"
									data-paddingtop="[0,0,0,0]"
									data-paddingright="[0,0,0,0]"
									data-paddingbottom="[0,0,0,0]"
									data-paddingleft="[0,0,0,0]"
									style="z-index: 5; color: #fff; font-family: 'Montserrat Alternates', sans-serif;">Welcome To <span>My Racing Syndicate</span>
								</div>
														
								<div class="tp-caption tp-resizeme rs-parallaxlevel-0" id="slide-2-layer-2" 
									data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									data-y="['middle','middle','middle','middle']" data-voffset="['17','17','17','0']" 
									data-whitespace="normal"
									data-transform_idle="o:1;"
									data-transform_in="x:[-105%];s:1000;e:Power4.slideInRight;" 
									data-transform_out="y:[100%];s:1000;s:1000;e:Power2.slideInRight;" 
									data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"  
									data-start="1000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on"
									data-elementdelay="0.05"
									data-textAlign="['center','center','center','center']"
									style="z-index: 5;"><span class="slide-border"></span>
								</div>
								
								<div class="tp-caption tp-resizeme rs-parallaxlevel-0" id="slide-2-layer-3" 
									data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									data-y="['middle','middle','middle','middle']" data-voffset="['82','82','82','72']" 
									data-fontsize="['19','19','19','16']"
									data-lineheight="['30','30','30','26']"
									data-width="['600','630','620','450']"
									data-whitespace="normal"
									data-transform_idle="o:1;"
									data-transform_in="x:[-105%];s:1000;e:Power4.slideInRight;" 
									data-transform_out="y:[100%];s:1000;s:1000;e:Power2.slideInRight;" 
									data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"  
									data-start="1000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on"
									data-elementdelay="0.05" 
									data-textAlign="['center','center','center','center']"
									data-paddingtop="[0,0,0,0]"
									data-paddingright="[0,0,0,0]"
									data-paddingbottom="[0,0,0,0]"
									data-paddingleft="[0,0,0,0]"
									style="z-index: 5; color: #fff; font-family: 'Montserrat Alternates', sans-serif;"><br/>Founded by three horse racing enthusiasts – Abdul Ahad, Suleiman Altaf and Saad – My Racing Syndicate is a brand new horse racing syndicate that was launched in the UAE before the commencement of the 2022-23 UAE Racing season.

									The syndicate aims to provide people with an affordable and exciting opportunity to get involved in the ownership of flat racehorses with exclusive benefits to enjoy a World Class racing experience.
								</div>						
							</li>
						</ul>
					</div>
				</div>
			</div><!-- Slider Section -->
			
			<!-- Features Section -->
			<div id="features-section" class="container-fluid no-left-padding no-right-padding features-section">
				<!-- Container -->
				<div class="container">
					<!-- Section Header -->
					<div class="section-header">
						<h3>Features</h3>
					</div><!-- Section Header /- -->
					<div class="features-detail">
						<div class="feature-img col-md-4">
							<img src="assets/images/UAE.jpg" alt="Features" />
						</div>
						<!-- Row -->
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="features-box">
									<i class="fa-solid fa-horse"></i>
									<h3>Stable visits and Morning gallops</h3>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="features-box">
									<i class="fa-solid fa-star-of-life"></i>
									<h3>Ownership certificate and Share holding contract</h3>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="features-box">
									<i class="fa-solid fa-trophy"></i>
									<h3>Syndicate competitions & merchandise</h3>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="features-box">
									<i class="fa-solid fa-calendar-days"></i>
									<h3>Syndicate meets	and greets.</h3>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="features-box">
									<i class="fa-solid fa-star-of-life"></i>
									<h3>Owners hospitality on race day</h3>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="features-box">
									<i class="fa-solid fa-handshake"></i>
									<h3>Chance to participate in syndicate meetings</h3>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="features-box">
									<i class="fa-solid fa-pen-to-square"></i>
									<h3>Regular updates on your horses</h3>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="features-box">
									<i class="fa-solid fa-tag"></i>
									<h3>Exclusive discounts with partnered companies</h3>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="features-box">
									<i class="fa-solid fa-handshake"></i>
									<h3>Meet the trainer and jockey of your horse</h3>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="features-box">
									<i class="fa-solid fa-user-pen"></i>
									<h3>Invites to key horse racing events</h3>
								</div>
							</div>
						</div><!-- Row /- -->
					</div>
				</div><!-- Container /- -->
			</div><!-- Features Section /- -->
			
			<!-- Gallery Section -->
			<div id="gallery-section" class="container-fluid no-left-padding no-right-padding gallery-section">
				<!-- Container -->
				<div class="container">
					<!-- Section Header -->
					<div class="section-header">
						<h3>Our Gallery</h3>
					</div><!-- Section Header /- -->
					<!-- Gallery Filter -->
					<div class="gallery-category">
						<ul id="filters">
							<li><a class="active" data-filter="*" href="#" title="Show All">SHOW ALL</a></li>
							<li><a data-filter=".digital" href="#" title="Group">Group</a></li>
							<li><a data-filter=".branding" href="#" title="Branding">Branding</a></li>
							<li><a data-filter=".people" href="#" title="Horses">Horses</a></li>
							{{-- <li><a data-filter=".nature" href="#" title="Nature">Nature</a></li> --}}
						</ul>
					</div><!-- Gallery Filter /- -->
				
					<!-- Gallery List -->
					<div class="gallery-list">
						<div class="col-md-4 col-xs-6 no-padding gallery-box digital">
							<div class="gallery-content">
								<i><img src="assets/images/MRS-members-1.jpg" alt="Gallery" /></i>
								<span>Group</span>
								<div class="gallery-detail">
									<h3>Project Title</h3>
									<a href="#"><i class="fa fa-heart-o"></i>80 Likes</a>
									<a class="zoom" href="assets/images/MRS-members-1.jpg"><i class="fa fa-expand"></i>Zoom in</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-xs-6 no-padding gallery-box branding">
							<div class="gallery-content">
								<i><img src="assets/images/gallery1.jpg" alt="Gallery" /></i>
								<span>Branding</span>
								<div class="gallery-detail">
									<h3>Project Title</h3>
									<a href="#"><i class="fa fa-heart-o"></i>80 Likes</a>
									<a class="zoom" href="assets/images/gallery1.jpg"><i class="fa fa-expand"></i>Zoom in</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-xs-6 no-padding gallery-box people">
							<div class="gallery-content">
								<i><img src="assets/images/people1.jpg" alt="Gallery" /></i>
								<span>Horses</span>
								<div class="gallery-detail">
									<h3>Project Title</h3>
									<a href="#"><i class="fa fa-heart-o"></i>80 Likes</a>
									<a class="zoom" href="assets/images/people1.jpg"><i class="fa fa-expand"></i>Zoom in</a>
								</div>
							</div>
						</div>
						{{-- <div class="col-md-4 col-xs-6 no-padding gallery-box nature">
							<div class="gallery-content">
								<i><img src="assets/images/gallery-4.jpg" alt="Gallery" /></i>
								<span>nature</span>
								<div class="gallery-detail">
									<h3>Project Title</h3>
									<a href="#"><i class="fa fa-heart-o"></i>80 Likes</a>
									<a class="zoom" href="assets/images/gallery-2.jpg"><i class="fa fa-expand"></i>Zoom in</a>
								</div>
							</div>
						</div> --}}
						<div class="col-md-4 col-xs-6 no-padding gallery-box digital">
							<div class="gallery-content">
								<i><img src="assets/images/MRS-members-2.jpg" alt="Gallery" /></i>
								<span>Group</span>
								<div class="gallery-detail">
									<h3>Project Title</h3>
									<a href="#"><i class="fa fa-heart-o"></i>80 Likes</a>
									<a class="zoom" href="assets/images/MRS-members-2.jpg"><i class="fa fa-expand"></i>Zoom in</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-xs-6 no-padding gallery-box branding">
							<div class="gallery-content">
								<i><img src="assets/images/gallery2.jpg" alt="Gallery" /></i>
								<span>Branding</span>
								<div class="gallery-detail">
									<h3>Project Title</h3>
									<a href="#"><i class="fa fa-heart-o"></i>80 Likes</a>
									<a class="zoom" href="assets/images/gallery2.jpg"><i class="fa fa-expand"></i>Zoom in</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-xs-6 no-padding gallery-box branding">
							<div class="gallery-content">
								<i><img src="assets/images/brand1.jpg" alt="Gallery" /></i>
								<span>Branding</span>
								<div class="gallery-detail">
									<h3>Project Title</h3>
									<a href="#"><i class="fa fa-heart-o"></i>80 Likes</a>
									<a class="zoom" href="assets/images/brand1.jpg"><i class="fa fa-expand"></i>Zoom in</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-xs-6 no-padding gallery-box people">
							<div class="gallery-content">
								<i><img src="assets/images/people2.jpg" alt="Gallery" /></i>
								<span>Horses</span>
								<div class="gallery-detail">
									<h3>Project Title</h3>
									<a href="#"><i class="fa fa-heart-o"></i>80 Likes</a>
									<a class="zoom" href="assets/images/people2.jpg"><i class="fa fa-expand"></i>Zoom in</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-xs-6 no-padding gallery-box people">
							<div class="gallery-content">
								<i><img src="assets/images/people4.jpg" alt="Gallery" /></i>
								<span>Horses</span>
								<div class="gallery-detail">
									<h3>Project Title</h3>
									<a href="#"><i class="fa fa-heart-o"></i>80 Likes</a>
									<a class="zoom" href="assets/images/people4.jpg"><i class="fa fa-expand"></i>Zoom in</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-xs-6 no-padding gallery-box people">
							<div class="gallery-content">
								<i><img src="assets/images/people5.jpg" alt="Gallery" /></i>
								<span>Horses</span>
								<div class="gallery-detail">
									<h3>Project Title</h3>
									<a href="#"><i class="fa fa-heart-o"></i>80 Likes</a>
									<a class="zoom" href="assets/images/people5.jpg"><i class="fa fa-expand"></i>Zoom in</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-xs-6 no-padding gallery-box people">
							<div class="gallery-content">
								<i><img src="assets/images/people6.jpeg" alt="Gallery" /></i>
								<span>Horses</span>
								<div class="gallery-detail">
									<h3>Project Title</h3>
									<a href="#"><i class="fa fa-heart-o"></i>80 Likes</a>
									<a class="zoom" href="assets/images/people6.jpeg"><i class="fa fa-expand"></i>Zoom in</a>
								</div>
							</div>
						</div>
						{{-- <div class="col-md-4 col-xs-6 no-padding gallery-box nature">
							<div class="gallery-content">
								<i><img src="assets/images/gallery-8.jpg" alt="Gallery" /></i>
								<span>nature</span>
								<div class="gallery-detail">
									<h3>Project Title</h3>
									<a href="#"><i class="fa fa-heart-o"></i>80 Likes</a>
									<a class="zoom" href="assets/images/gallery-1.jpg"><i class="fa fa-expand"></i>Zoom in</a>
								</div>
							</div>
						</div> --}}
						<div class="col-md-4 col-xs-6 no-padding gallery-box digital">
							<div class="gallery-content">
								<i><img src="assets/images/MRS-members-3.jpg" alt="Gallery" /></i>
								<span>Group</span>
								<div class="gallery-detail">
									<h3>Project Title</h3>
									<a href="#"><i class="fa fa-heart-o"></i>80 Likes</a>
									<a class="zoom" href="assets/images/MRS-members-3.jpg"><i class="fa fa-expand"></i>Zoom in</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-xs-6 no-padding gallery-box branding">
							<div class="gallery-content">
								<i><img src="assets/images/gallery3.jpg" alt="Gallery" /></i>
								<span>Branding</span>
								<div class="gallery-detail">
									<h3>Project Title</h3>
									<a href="#"><i class="fa fa-heart-o"></i>80 Likes</a>
									<a class="zoom" href="assets/images/gallery3.jpg"><i class="fa fa-expand"></i>Zoom in</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-xs-6 no-padding gallery-box branding">
							<div class="gallery-content">
								<i><img src="assets/images/gallery4.jpg" alt="Gallery" /></i>
								<span>Branding</span>
								<div class="gallery-detail">
									<h3>Project Title</h3>
									<a href="#"><i class="fa fa-heart-o"></i>80 Likes</a>
									<a class="zoom" href="assets/images/gallery4.jpg"><i class="fa fa-expand"></i>Zoom in</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-xs-6 no-padding gallery-box branding">
							<div class="gallery-content">
								<i><img src="assets/images/gallery5.jpg" alt="Gallery" /></i>
								<span>Branding</span>
								<div class="gallery-detail">
									<h3>Project Title</h3>
									<a href="#"><i class="fa fa-heart-o"></i>80 Likes</a>
									<a class="zoom" href="assets/images/gallery5.jpg"><i class="fa fa-expand"></i>Zoom in</a>
								</div>
							</div>
						</div>
					</div><!-- Gallery List /- -->
				</div><!-- Container /- -->
			</div><!-- Gallery Section /- -->
			
			<!-- Services Section -->
			<div id="services-section" class="container-fluid no-left-padding no-right-padding services-section">
				<!-- Container -->
				<div class="container">
					<!-- Section Header -->
					<div class="section-header">
						<h3>What We Offer</h3>
					</div><!-- Section Header /- -->
					<!-- Row -->
					<div class="row">
						<div class="col-md-4 col-xs-6">
							<div class="srv-box">
								<i class="fa-solid fa-horse"></i>
								<h3>Our Horses</h3>
								<p>We look for affordable yet exciting prospects with notable focus on pedigree lines, whether it be for Purebred Arabian or Thoroughbred. Check the ‘Our Horses’ page for detailed information on our past and current horses.</p>
								{{-- <a href="#" title="Read More">Read More</a> --}}
							</div>
						</div>
						<div class="col-md-4 col-xs-6">
							<div class="srv-box">
								<i class="fa-solid fa-network-wired"></i>
								<h3>Intra-Syndicate Competitions</h3>
								<p>Horses don’t run every meeting but to keep our members engaged in the fighting (and winning) spirit, we hold multiple intra-syndicate competitions throughout the year, not only for the UAE Racing Seasons.

									Our first such competition was recently launched. The My Racing Syndicate Fantasy Tipping Competition 2022-23 can be played by any member of the syndicate. While these competitions are only held for fun, you can potentially win prizes such as MRS merchandise!</p>
								{{-- <a href="#" title="Read More">Read More</a> --}}
							</div>
						</div>
						<div class="col-md-4 col-xs-6">
							<div class="srv-box">
								<i class="fa fa-file-text"></i>
								<h3>Merchandise</h3>
								<p>Spread the My Racing Syndicate word wherever you go! Our merchandise collection consists of several everyday-use items. You may purchase them separately or buy the entire pack for a discounted price with everything delivered right at your doorstep!</p>
								{{-- <a href="#" title="Read More">Read More</a> --}}
							</div>
						</div>
					</div><!-- Row /- -->
				</div><!-- Container /- -->
			</div><br/><!-- Services Section /- -->
			
			<!-- Build Sites Section -->
			{{-- <div id="build-section" class="container-fluid no-left-padding no-right-padding build-section">
				<!-- Container -->
				<div class="container">
					<!-- Row -->
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							<div class="build-content">
								<div class="build-title">
									<h3>Build websites <span>quickly</span></h3>
									<p>Try our new Prestige Theme and enjoy it’s powerfulness</p>
								</div>
								<div class="build-detail row">
									<div class="col-xs-4">
										<div class="build-box">
											<i class="fa fa-desktop"></i>
											<h4>Install theam</h4>
										</div>
									</div>
									<div class="col-xs-4">
										<div class="build-box">
											<i class="fa fa-files-o"></i>
											<h4>Choose Demo</h4>
										</div>
									</div>
									<div class="col-xs-4">
										<div class="build-box">
											<i class="fa fa-globe"></i>
											<h4>Go Live</h4>
										</div>
									</div>
								</div>
								<a href="#" class="learn-more" title="Learn More">Learn More</a>
								<a href="#" class="purcase-now" title="Purchase now">Purchase now</a>
							</div>
						</div>
						<div class="col-sm-6 col-xs-12 build-image">
							<img src="assets/images/build-image.png" alt="Image" />
						</div>
					</div><!-- Row /- -->
				</div><!-- Container /- -->
			</div><!-- Build Sites Section /- -->
			
			<!-- Counter Section -->
			<div id="counter-section" class="container-fluid no-left-padding no-right-padding counter-section">
				<!-- Container -->
				<div class="container">
					<div class="col-md-3 col-xs-6 no-padding">
						<div class="counter-box">
							<i><img src="assets/images/counter-ic-1.png" alt="Icon" /></i>
							<span id="skill_count-1" data-skills_percent="7456"></span>
							<h4>Projects</h4>
						</div>
					</div>
					<div class="col-md-3 col-xs-6 no-padding">
						<div class="counter-box">
							<i><img src="assets/images/counter-ic-2.png" alt="Icon" /></i>
							<span id="skill_count-2" data-skills_percent="450"></span>
							<h4>Awards</h4>
						</div>
					</div>
					<div class="col-md-3 col-xs-6 no-padding">
						<div class="counter-box">
							<i><img src="assets/images/counter-ic-3.png" alt="Icon" /></i>
							<span id="skill_count-3" data-skills_percent="5426"></span>
							<h4>Ideas</h4>
						</div>
					</div>
					<div class="col-md-3 col-xs-6 no-padding">
						<div class="counter-box">
							<i><img src="assets/images/counter-ic-4.png" alt="Icon" /></i>
							<span id="skill_count-4" data-skills_percent="5440">+</span>
							<h4>Clients</h4>
						</div>
					</div>
				</div><!-- Container /- -->
			</div><!-- Counter Section /- -->--}}
			
			<!-- Blog Section -->
			{{-- <div id="blog-section" class="container-fluid no-left-padding no-right-padding blog-section">
				<!-- Container -->
				<div class="container">
					<!-- Section Header -->
					<div class="section-header">
						<h3>Our Blog</h3>
					</div><!-- Section Header /- -->
					<!-- Blog Carousel -->
					<div class="blog-carousel">
						<div class="col-md-12 no-padding">
							<div class="type-post">
								<div class="entry-cover">
									<a href="blog-single.html"><img src="assets/images/our-blog-1.jpg" alt="Blog" /></a>
									<div class="post-meta">
										<a href="#"><span>18</span>June</a>
									</div>
								</div>
								<div class="entry-content">
									<div class="entry-header">
										<h3 class="entry-title"><a href="blog-single.html">Simplicity in Web Design</a></h3>
										<div class="entry-meta">
											<span><i class="fa fa-user-o"></i><a href="#">4 Comments</a></span>
											<span><i class="fa fa-clock-o"></i><a href="#">10 mins ago</a></span>
											<span><i class="fa fa-commenting-o"></i><a href="#">2 comments</a></span>
										</div>
									</div>
									<p>The first mate and his Skipper too will do their very best to make there is others comfortable in their tropic island.</p>
									<a href="blog-single.html">view more</a>
								</div>
							</div> 
						</div>
						<div class="col-md-12 no-padding">
							<div class="type-post">
								<div class="entry-cover">
									<a href="blog-single.html"><img src="assets/images/our-blog-2.jpg" alt="Blog" /></a>
									<div class="post-meta">
										<a href="#"><span>18</span>June</a>
									</div>
								</div>
								<div class="entry-content">
									<div class="entry-header">
										<h3 class="entry-title"><a href="blog-single.html">Simplicity in Web Design</a></h3>
										<div class="entry-meta">
											<span><i class="fa fa-user-o"></i><a href="#">4 Comments</a></span>
											<span><i class="fa fa-clock-o"></i><a href="#">10 mins ago</a></span>
											<span><i class="fa fa-commenting-o"></i><a href="#">2 comments</a></span>
										</div>
									</div>
									<p>The first mate and his Skipper too will do their very best to make there is others comfortable in their tropic island.</p>
									<a href="blog-single.html">view more</a>
								</div>
							</div> 
						</div>
					</div><!-- Blog Carousel -->
				</div><!-- Container /- -->
			</div><!-- Blog Section /- -->  --}}
			
			<!-- Pricing Section -->
			{{-- <div id="pricing-section" class="container-fluid no-left-padding no-right-padding pricing-section">
				<!-- Container -->
				<div class="container">
					<!-- Section Header -->
					<div class="section-header">
						<h3>Pricing &amp; Plans</h3>
					</div><!-- Section Header /- -->
					<!-- Row -->
					<div class="row">
						<div class="col-md-4 col-xs-6">
							<div class="pricing-box">
								<div class="price-title">
									<h3>Basic Pack <span>most popular package</span></h3>
								</div>
								<div class="price-box">
									<span class="corner-left"></span>
									<span class="corner-right"></span>
									<h4><span>123<sup>$</sup></span></h4>
								</div>
								<ul>
									<li>Any Time Services</li>
									<li>Quality and Effective</li>
									<li>Well Experienced Staff</li>
									<li>Branded Products</li>
									<li>Fasting and Time Saving</li>
								</ul>
								<a href="#" title="GET IT NOW!">GET IT NOW!</a>
							</div>
						</div>
						<div class="col-md-4 col-xs-6">
							<div class="pricing-box">
								<div class="price-title">
									<h3>Standard <span>most popular package</span></h3>
								</div>
								<div class="price-box">
									<span class="corner-left"></span>
									<span class="corner-right"></span>
									<h4><span>123<sup>$</sup></span></h4>
								</div>
								<ul>
									<li>Any Time Services</li>
									<li>Quality and Effective</li>
									<li>Well Experienced Staff</li>
									<li>Branded Products</li>
									<li>Fasting and Time Saving</li>
								</ul>
								<a href="#" title="GET IT NOW!">GET IT NOW!</a>
							</div>
						</div>
						<div class="col-md-4 col-xs-6">
							<div class="pricing-box">
								<div class="price-title">
									<h3>Premium <span>most popular package</span></h3>
								</div>
								<div class="price-box">
									<span class="corner-left"></span>
									<span class="corner-right"></span>
									<h4><span>123<sup>$</sup></span></h4>
								</div>
								<ul>
									<li>Any Time Services</li>
									<li>Quality and Effective</li>
									<li>Well Experienced Staff</li>
									<li>Branded Products</li>
									<li>Fasting and Time Saving</li>
								</ul>
								<a href="#" title="GET IT NOW!">GET IT NOW!</a>
							</div>
						</div>
					</div><!-- Row /- -->
				</div><!-- Container /- -->
			</div><!-- Pricing Section /- --> --}}
			

			<!-- Team Section -->
			<div id="team-section" class="container-fluid no-left-padding no-right-padding team-section">
				<!-- Container -->
				<div class="container">
					<div class="about-section">
						<h3>About Us</h3>
						<p>My Racing Syndicate is the latest syndicate to add to a glittering list of racehorse owners in the UAE. My Racing Syndicate was founded by three horse racing enthusiasts – Abdul Ahad, Saad Khatri & Suleiman Altaf who believed that racing fans had limited opportunities in racehorse ownership and hence, this would offer an affordable way to become racehorse owners for those who are passionate about this sport.<br/><br/>

							The syndicate promises an immersive, first-hand experience of flat horse racing at some of the best racecourses in the UAE!<br/><br/>
							
							What drives My Racing Syndicate is pure passion and the love for horses in and out of the racetrack. If you too share the same sentiments, then what is holding you back?<br/><br/>
							
							Contact us today and become a racehorse owner!</p>

							<!-- Services Section -->
						<div  class="container-fluid no-left-padding no-right-padding services1-section">
							<!-- Container -->
							<div class="container">
								<!-- Row -->
								<div class="row">
									<div class="col-md-6 col-xs-6">
										<div class="srv-box">
											<i class="fa-solid fa-bullseye"></i>
											<h3>Mission</h3>
											<p>Empowering racing enthusiasts with an accessible and budget-friendly platform to embrace ownership and partake in the exhilarating world of horse racing. 
												We’re dedicated to forging the ultimate gateway for all to experience the thrill and prestige of the sport of kings, fostering a community united by passion and accessibility.</p>
											{{-- <a href="#" title="Read More">Read More</a> --}}
										</div>
									</div>
									<div class="col-md-6 col-xs-6">
										<div class="srv-box">
											<i class="fa-solid fa-eye"></i>
											<h3>Vision</h3>
											<p>Our vision is to amplify syndicate reach, dominating Group-level races worldwide. We’re committed to delivering unparalleled World class racing experiences, seamlessly blending convenience and diverse investment avenues. 
												Aiming to craft an expansive racing community, we aspire to make every member a part of our victorious journey.</p>
											{{-- <a href="#" title="Read More">Read More</a> --}}
										</div>
									</div>
								</div><!-- Row /- -->
							</div><!-- Container /- -->
						</div><!-- Services Section /- -->
					</div>
					<!-- Section Header -->
					<div class="section-header">
						<h3>Management team members</h3>
					</div><!-- Section Header /- -->
					<!-- Row -->
					<div class="team-carousel">
						<div class="item">
							<div class="team-box">
								<img src="assets/images/ahadaltaf.png" alt="Team" />
								<h3>ABDUL AHAD</h3>
								<span>CEO</span>
								<ul>
									<li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
									<li><a href="#"><i class="fa-solid fa-rss"></i></a></li>
									<li><a href="#" title="Linkedin"><i class="fa-brands fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="item">
							<div class="team-box">
								<img src="assets/images/sulaiman-altaf.png" alt="Team" />
								<h3>SULEIMAN ALTAF</h3>
								<span>Operation Director</span>
								<ul>
									<li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
									<li><a href="#"><i class="fa-solid fa-rss"></i></a></li>
									<li><a href="#" title="Linkedin"><i class="fa-brands fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="item">
							<div class="team-box">
								<img src="assets/images/saad.png" alt="Team" />
								<h3>Saad</h3>
								<span>Marketing Director</span>
								<ul>
									<li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
									<li><a href="#"><i class="fa-solid fa-rss"></i></a></li>
									<li><a href="#" title="Linkedin"><i class="fa-brands fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="item">
							<div class="team-box">
								<img src="assets/images/sulaiman-altaf.png" alt="Team" />
								<h3>SULEIMAN ALTAF</h3>
								<span>seo</span>
								<ul>
									<li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
									<li><a href="#"><i class="fa-solid fa-rss"></i></a></li>
									<li><a href="#" title="Linkedin"><i class="fa-brands fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div><!-- Row /- -->
				</div><!-- Container /- -->
			</div><!-- Team Section /- -->

			<!-- terms and condition Section -->
			<div id="pricing-section"  class="container-fluid no-left-padding no-right-padding services1-section">
				<!-- Container -->
				<div class="container">
					<!-- Row -->
					<div class="row">
						<div class="col-md-6 col-xs-6">
							<div class="srv-box">
								<h3>Terms and Conditions</h3>
								<p>The Terms and Conditions serve as a legal agreement between you, hereinafter referred to as “you” or “your” or “user,” and Pivot Group Global, hereinafter referred to as the “Company.” The Agreement presides over your use of the Legacy Application or, as referred to in this document, as “Services.”
									You must accept all the terms within this Agreement in order to use the services. By creating an account or otherwise using the Services, you acknowledge that you have read, understood, and agree to be bound by the terms of this Agreement. The company reserves the right to alter and update this Agreement at any time, in which event it will notify you and all other users. You accept such changes and agree to the amended Agreement if you continue to use the Services. You may not update or change this Agreement unless the company agrees in writing to do so.</p>
									
	
									<div class="terms">
										<h4>Termination of Services and Agreement</h4>
										<p>Without limiting company’s other remedies in law or equity, company may issue an immediate warning, temporarily suspend, indefinitely suspend, or terminate your ability to access the Services and/or terminate this Agreement (specifically between company and you only), without notice or liability, for any reason whatsoever (in company’s sole discretion), including but not limited to if:</p>
									
									</div>
	
									<div class="terms">
										<h4>You breach the agreed terms</h4>
										<p>If the company cannot ascertain the authenticity of the verification provided to it.
											If the company believes in its absolute discretion, that the user’s actions pose a risk of legal liability or any other party that may be involved within the use of the services.
											Any element of this Agreement that by its provisions imposes continuing obligations on you shall survive the termination of this Agreement between Company and you only.</p>
									
									</div>
	
									<div class="terms">
										<h4>Use of Legacy App Services</h4>
										<p>You may use the services in accordance with the terms and conditions of this Agreement. Your use of the Services is strictly your responsibility. You expressly agree that you will not use the Services for any purpose that is not lawful and legitimate. You may not use the Services in any way that a) violates the terms of this Agreement, as revised by Companythe from time to time, or any other conditions, rules, or guidelines provided by the company about your use of the Services, or b) could harm company’s public image, reputation, or goodwill.</p>
									
									</div>

									<div class="terms">
										<h4>Password Protection</h4>
										<p>You represent and warrant that any information you give in connection with your use of the Services is correct, complete, and current and that you will promptly update that information if it changes. You are responsible for maintaining your user ID and password private and secure if you are supplied with one to access the Services. You acknowledge and agree that you are accountable for any messages, transactions, or usage of the Services made with your user ID and password and any fees, charges, liability, or other obligations that may arise as a result of such use. If you feel your password has been stolen or could somehow be misused, you are responsible for updating it.</p>
									
									</div>
							</div>
						</div>
						<div class="col-md-6 col-xs-6">
							<div class="srv-box">
								<h3>Privacy Policy</h3>
								<div class="terms">
									<h4>Indemnification</h4>
									<p>You agree to indemnify or hold harmless the company, its directors, managers, senior officers, interns, and workers from any costs, claims, or liabilities, which the aforementioned may be subject to in connection with <br/><br/>a) the breach of this Agreement and <br/>b) your use of the services.</p>
								
								</div>

								<div class="terms">
									<h4>Limitation of Liability</h4>
									<p>The company will not be liable for any damages, whether indirect or consequential, from the use or inability to use the services (which includes, without limitation, damages for loss of profits or data and/or any business interruption), whether such arises from malicious code/viruses, delays in the provision of service, deletion of files or other data. In no case will the company be liable to you for any claim, whether arising in contract or tort, or
										for any claim made against the company by any other party.</p>
								
								</div>

								<div class="terms">
									<h4>Choice of Law</h4>
									<p>This Agreement will be governed by and construed in compliance with applicable laws of the United Arab Emirates. Any controversy arising in this Agreement shall be settled through the Dubai International Arbitration Centre. The arbitration shall be held in the United Arab Emirates, and the language of proceedings is to be in English.
										You may not assign or transfer this Agreement or the rights granted hereunder, in whole or in part, without the company’s prior written consent. Any successor in interest or assignee must agree to the terms and conditions of this Agreement. You may not give anybody else access to the Services, notwithstanding the foregoing. If any provision of this Agreement is found to
										be not valid, the invalidity of that provision will not impact the legality of the remaining terms of this Agreement.</p>
								
								</div>

								<div class="terms">
									<h4>User Materials</h4>
									<p>You may generate or contribute information, messages, data, and other materials electronically, which will be stored, uploaded, published, e-mailed, or otherwise sent using the Services to use the Services (collectively, “User Materials”). You guarantee that you have acquired all applicable third-party rights, including, but not limited to, copyrights, for any third-party User Materials. You must establish whether or whether any licenses are required to use third-party content and information that is part of user Materials and, if so, to obtain them</p>
								
								</div>
								
								
							</div>
						</div>
					</div><!-- Row /- -->
				</div><!-- Container /- -->
			</div><!-- terms and condition Section /- -->
			<hr>
			
		</main>
	
	</div>
	
	<!-- Footer Main -->
	<footer id="footer-main" class="container-fluid no-left-padding no-right-padding footer-main">
		<!-- Top Footer -->
		<div class="container-fluid no-left-padding no-right-padding top-footer">
			<!-- Container -->
			<div class="container">
				<div class="logo-block">
					<h3><a href="#"><img src="assets/images/logo-syndicate-1.png" alt="logo" /></a></h3>
					<p>My {{ config('app.name', 'Laravel') }}</p>
					<ul>
						<li><a href="#" title="Facebook"><i class="fa-brands fa-facebook"></i></a></li>
						<li><a href="#" title="Twitter"><i class="fa-brands fa-x-twitter"></i></a></li>
						<li><a href="#" title="Linkedin"><i class="fa-brands fa-instagram"></i></a></li>
						<li><a href="#" title="Tumblr"><i class="fa-solid fa-rss"></i></a></li>
						<li><a href="#" title="Tumblr"><i class="fa-brands fa-youtube"></i></a></li>

					</ul>
				</div>
				<div class="row">
					<!-- Widget Contact -->
					<div class="col-md-4 col-xs-6">
						<aside class="widget widget_contact">
							<h3 class="widget-title">CONTACT US</h3>
							<div class="contact-tab">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#address" role="tab" data-toggle="tab"><i class="fa-solid fa-phone"></i></a></li>
									<li role="presentation"><a href="#email-add" role="tab" data-toggle="tab"><i class="fa-solid fa-envelope"></i></a></li>
								</ul>
								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="address">
										<ul>
											<li><p><a href="tel:+971501231642">+971501231642</a></p></li>
											<li><p><a href="tel:+971501231796">+971501231796</a></p></li>
										</ul>	
									</div>
									<div role="tabpanel" class="tab-pane" id="email-add">
										<ul>
											<li><p><a href="mailto:marketing@myracingsyndicate.com">marketing@myracingsyndicate.com</a></p></li>
											<li><p><a href="mailto:myracingverdict@gmail.com">myracingverdict@gmail.com</a></p></li>
										</ul>										
									</div>
								</div>
							</div>
						</aside>
					</div><!-- Widget Contact /- -->
					<!-- Widget Working Hours -->
					<div class="col-md-4 col-xs-6">
						<div class="footer-li widget widget_flickr">
							<h3 class="widget-title">QUICK LINKS</h3>
							<ul >
								<li class="active"><a href="#top" title="Home">Home</a></li>
								<li><a href="#features-section" title="Features">Features</a></li>
								<li><a href="#gallery-section" title="Gallery">Gallery</a></li>
								<li><a href="#services-section" title="Services">Services</a></li>
								{{-- <li class="dropdown">
									<a href="blog.html" title="Blog" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">
										<li><a href="blog-single.html" title="Blog Single">Blog Single</a></li>
									</ul>
								</li> --}}
								<li><a href="#team-section" title="About us">About us</a></li>
								<li><a href="#pricing-section" title="Policy">Policy</a></li>
								<li><a href="#footer-main" title="Contact Us">Contact Us</a></li>
							</ul>
						</div>
							
						
					</div><!-- Widget Working Hours /- -->
					<!-- Widget Flicker -->
					<div class="col-md-4 col-xs-6">
						<aside class="widget widget_flickr contactus">
							<h3 class="widget-title">GET IN TOUCH WITH US</h3>
							@if(session()->has('alert'))
								<div class="alert alert-dark alert-dismissible fade my-alert show">
									<button type="button" class="close" data-dismiss="alert">&times;</button>
									<strong class="alert-strong">{{session('alert')}}</strong>
								</div>
							@endif
							<form action="{{url('/contact/send')}}" method="POST">
								@csrf
								<input type="text" class="form-control" name="name" placeholder="Name">
								<input type="email" class="form-control" name="email" placeholder="Email">
								<input type="tel" class="form-control" name="phone" placeholder="Phone">
								<textarea name="message" class="form-control" placeholder="Type your message here"></textarea>
								<input type="submit" value="Submit">
							</form>
						</aside> 
					</div><!-- Widget Flicker /- -->
				</div><!-- Row /- -->
			</div><!-- Container /- -->
		</div><!-- Top Footer -->
		<!-- Bottom Footer -->
		<div class="container-fluid bottom-footer no-left-padding no-right-padding">
			<!-- Container -->
			<div class="container">
				<p>©
					<script>
						document.write(new Date().getFullYear()) 
					</script> My {{ config('app.name', 'Laravel') }} Crafted with <i class="fa-solid fa-heart"></i> All Rights Reserved.
				</p>
			</div><!-- Container -->
		</div><!-- Bottom Footer /- -->
	</footer><!-- Footer Main /- -->
	
	<!-- JQuery v1.12.4 -->
	

	<!-- App js -->
<script src="assets/js/app.js"></script> 

<!-- JQuery v1.12.4 -->
<script src="assets/js/jquery-1.12.4.min.js"></script>

<!-- Library - Js -->
<script src="assets/js/lib.js"></script>

<!-- RS5.3 Core JS Files -->
<script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
<script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
<script type="text/javascript" src="assets/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="assets/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="assets/js/extensions/revolution.extension.navigation.min.js"></script>

<!-- Library - Theme JS -->
<script src="assets/js/functions.js"></script>
	
</body>
</html>

@extends('client.layout.layout')

@section('title','Home')

@section('home','active')


@section('style')
   
@endsection


@section('content')

	<!-- Section: home -->
	<section id="home" class="">
		<div class="container-fluid p-0">
			<div class="row">
				<div class="col">
					<!-- START Home Slider REVOLUTION SLIDER 6.0.8 -->
					<p class="rs-p-wp-fix"></p>
					<rs-module-wrap id="rev_slider_1_1_wrapper" data-alias="home-slider" data-source="gallery" style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
						<rs-module id="rev_slider_1_1" style="display:none;" data-version="6.0.8">
							<rs-slides>

							@foreach($banners as $banner)
								<rs-slide data-key="rs-1" data-title="Slide 1" data-thumb="images/bg/as1.jpg" data-anim="ei:d;eo:d;s:d;r:0;t:slotslide-horizontal;sl:d;">
									<img src="{{$banner->feature_image}}" title="s6.jpg" width="1920" height="1280" data-bg="p:center center;" data-parallax="off" class="rev-slidebg" data-no-retina>
									<rs-layer
										id="slider-1-slide-1-layer-14" 
										class="text-theme-colored1 rs-pxl-1"
										data-type="text"
										data-color="#00c3ed"
										data-rsp_ch="on"
										data-xy="x:l,l,l,c;xo:50px,50px,35px,0;yo:210px,219px,140px,135px;"
										data-text="w:normal;s:36,28,30,26;l:54,43,45,42;fw:800;a:left,left,left,center;"
										data-dim="w:auto,auto,291px,297px;h:auto,auto,48px,46px;"
										data-padding="r:15,11,8,5;l:15,11,12,7;"
										data-border="bos:solid;boc:#00c3ed;bow:2px,0,0,5px;"
										data-frame_0="rX:70deg;oZ:-50;"
										data-frame_0_chars="y:cyc(-100||100);o:0;"
										data-frame_1="oZ:-50;e:Power4.easeInOut;st:1260;sp:1750;"
										data-frame_1_chars="e:Power4.easeInOut;dir:middletoedge;d:10;"
										data-frame_999="y:0;o:0;rX:70deg;oZ:-50;e:Power4.easeInOut;st:w;sp:1750;"
										data-frame_999_chars="e:Power4.easeInOut;dir:middletoedge;d:10;y:cyc(-100||100);o:0;"
										style="z-index:13;background-color:rgba(0,0,0,0.3);font-family:Poppins;"
									>Phomefix 
									</rs-layer>

									<rs-layer
										id="slider-1-slide-1-layer-19" 
										class="rs-pxl-1"
										data-type="text"
										data-rsp_ch="on"
										data-xy="x:l,l,l,c;xo:50px,50px,35px,2px;yo:280px,291px,202px,208px;"
										data-text="w:normal;s:85,76,75,56;l:100,90,90,70;fw:700;a:left,left,left,center;"
										data-dim="w:724px,644px,653px,476px;"
										data-frame_0="x:-50,-38,-28,-17;"
										data-frame_1="st:1700;sp:1000;"
										data-frame_999="x:-50,-38,-28,-17;o:0;st:w;sp:1000;"
										style="z-index:12;font-family:Poppins;"
									>{{$banner->title}}
									</rs-layer>

									

								</rs-slide>
							@endforeach
								<!-- <rs-slide data-key="rs-2" data-title="Slide 1" data-thumb="images/bg/as02.jpg" data-anim="ei:d;eo:d;s:d;r:0;t:slotslide-horizontal;sl:d;">
									<img src="{{asset('public/client/images/bg/as02.jpg')}}" title="s4.jpg" width="1920" height="1280" data-parallax="off" class="rev-slidebg" data-no-retina>

									<rs-layer
										id="slider-1-slide-2-layer-14" 
										class="text-theme-colored1 rs-pxl-1"
										data-type="text"
										data-color="#00c3ed"
										data-rsp_ch="on"
										data-xy="x:c;yo:230px,219px,140px,135px;"
										data-text="w:normal;s:36,34,30,28;l:54,46,40,26;fw:800;a:center;"
										data-dim="w:auto,330px,293px,287px;h:auto,51px,46px,48px;"
										data-padding="t:0,0,0,8;r:15,11,8,5;b:0,0,0,8;l:15,11,8,5;"
										data-border="bos:solid;boc:#00c3ed;bow:3px,0,0,0;"
										data-frame_0="rX:70deg;oZ:-50;"
										data-frame_0_chars="y:cyc(-100||100);o:0;"
										data-frame_1="oZ:-50;e:Power4.easeInOut;st:1260;sp:1750;"
										data-frame_1_chars="e:Power4.easeInOut;dir:middletoedge;d:10;"
										data-frame_999="y:0;o:0;rX:70deg;oZ:-50;e:Power4.easeInOut;st:w;sp:1750;"
										data-frame_999_chars="e:Power4.easeInOut;dir:middletoedge;d:10;y:cyc(-100||100);o:0;"
										style="z-index:13;background-color:rgba(0,0,0,0.3);font-family:Poppins;"
									>Phomefix
									</rs-layer>

									<rs-layer
										id="slider-1-slide-2-layer-19" 
										class="rs-pxl-1"
										data-type="text"
										data-rsp_ch="on"
										data-xy="x:c;yo:306px,291px,202px,208px;"
										data-text="w:normal;s:85,76,75,56;l:100,90,90,70;fw:700;a:center;"
										data-dim="w:724px,644px,653px,476px;"
										data-frame_0="sX:0.9;sY:0.9;"
										data-frame_1="st:1700;sp:1000;"
										data-frame_999="sX:0.7;sY:0.7;o:0;e:Back.easeIn;st:w;sp:500;"
										style="z-index:12;font-family:Poppins;"
									>Trusted Repair Services 
									</rs-layer>

									
								</rs-slide>
								<rs-slide data-key="rs-3" data-title="Slide 1" data-thumb="images/bg/as3.jpg" data-anim="ei:d;eo:d;s:d;r:0;t:slotslide-horizontal;sl:d;">
									<img src="{{asset('public/client/images/bg/as3.jpg')}}" title="s5.jpg" width="1920" height="1280" data-parallax="off" class="rev-slidebg" data-no-retina>

									<rs-layer
										id="slider-1-slide-3-layer-14" 
										class="text-theme-colored1 rs-pxl-1"
										data-type="text"
										data-color="#00c3ed"
										data-rsp_ch="on"
										data-xy="x:r,r,r,c;xo:50px,51px,35px,0;yo:197px,225px,155px,135px;"
										data-text="w:normal;s:34,28,30,26;l:48,44,44,40;fw:800;a:left,right,right,center;"
										data-dim="w:auto,auto,202px,204px;h:56px,49px,50px,43px;"
										data-padding="r:15,11,15,9;l:15,11,8,5;"
										data-border="bos:solid;boc:#00c3ed;bow:2px,0px,0,5px;"
										data-frame_0="rX:70deg;oZ:-50;"
										data-frame_0_chars="y:cyc(-100||100);o:0;"
										data-frame_1="oZ:-50;e:Power4.easeInOut;st:1260;sp:1750;"
										data-frame_1_chars="e:Power4.easeInOut;dir:middletoedge;d:10;"
										data-frame_999="y:0;o:0;rX:70deg;oZ:-50;e:Power4.easeInOut;st:w;sp:1750;"
										data-frame_999_chars="e:Power4.easeInOut;dir:middletoedge;d:10;y:cyc(-100||100);o:0;"
										style="z-index:13;background-color:rgba(0,0,0,0.3);font-family:Poppins;"
									>Phomefix
									</rs-layer>

									<rs-layer
										id="slider-1-slide-3-layer-19" 
										class="rs-pxl-1"
										data-type="text"
										data-rsp_ch="on"
										data-xy="x:r,r,r,c;xo:50px,50px,38px,0;yo:295px,302px,229px,210px;"
										data-text="w:normal;s:70,64,51,50;l:90,78,78,70;fw:700;a:right,right,right,center;"
										data-dim="w:724px,644px,511px,476px;"
										data-frame_0="x:50,38,28,17;"
										data-frame_1="st:1700;sp:1000;"
										data-frame_999="x:50,38,28,17;o:0;st:w;sp:1000;"
										style="z-index:12;font-family:Poppins;"
									>Trusted Repair Services 
									</rs-layer>

									
									</rs-layer>
								</rs-slide> -->
							</rs-slides>
							<rs-static-layers>
							</rs-static-layers>
							<rs-progress class="rs-bottom" style="height: 5px; background: rgba(199,199,199,0.5);"></rs-progress>
						</rs-module>
					</rs-module-wrap>
					<!-- END REVOLUTION SLIDER -->
				</div>
			</div>
		</div>
	</section>

	<!-- Section: Analysis -->
	<section class="">
		<div class="container">
			<div class="section-content">
				<div class="row">
					<div class="col-md-6 col-lg-6 col-xl-3">
						<div class="tm-sc tm-sc-icon-box icon-box icon-top tm-iconbox-icontype-font-icon text-center iconbox-style7-hover-moving-border bg-white iconbox-box-shadow  iconbox-theme-colored1 iconbox-default-padding icon-position-icon-top mb-lg-50">
							<div class="icon-box-wrapper">
								<div class="icon-wrapper"> <a class="icon icon-type-image icon-default"> <img src="{{asset('public/client/images/icon/c5.png')}}" alt="Image"> </a></div>
								<div class="icon-text">
									<h5 class="icon-box-title mt-0"> Expert Engineers</h5>
									<div class="content">
										<p>Lorem ipsum dolor sitam consect etur adipiscing elit tellus,</p>
									</div>
								</div>
							</div>
							<div class="btn-view-details mt-0 p-20 bg-theme-colored1"> <a href="{{route('app.service')}}" class="btn btn-plain-text-with-arrow btn-sm text-white"> View Details </a></div>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-xl-3">
						<div class="tm-sc tm-sc-icon-box icon-box icon-top tm-iconbox-icontype-font-icon text-center iconbox-style7-hover-moving-border bg-white iconbox-box-shadow  iconbox-theme-colored2 iconbox-default-padding icon-position-icon-top  mb-lg-50">
							<div class="icon-box-wrapper">
								<div class="icon-wrapper"> <a class="icon icon-type-image icon-default"> <img src="{{asset('public/client/images/icon/c3.png')}}" alt="Image"> </a></div>
								<div class="icon-text">
									<h5 class="icon-box-title mt-0"> On Time Delivery</h5>
									<div class="content">
										<p>Lorem ipsum dolor sitam consect etur adipiscing elit tellus,</p>
									</div>
								</div>
							</div>
							<div class="btn-view-details mt-0 p-20 bg-theme-colored2"> <a href="{{route('app.service')}}" class="btn btn-plain-text-with-arrow btn-sm text-white"> View Details </a></div>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-xl-3">
						<div class="tm-sc tm-sc-icon-box icon-box icon-top tm-iconbox-icontype-font-icon text-center iconbox-style7-hover-moving-border bg-white iconbox-box-shadow  iconbox-theme-colored1 iconbox-default-padding icon-position-icon-top  mb-lg-50">
							<div class="icon-box-wrapper">
								<div class="icon-wrapper"> <a class="icon icon-type-image icon-default"> <img src="{{asset('public/client/images/icon/c4.png')}}" alt="Image"> </a></div>
								<div class="icon-text">
									<h5 class="icon-box-title mt-0"> Best Technology</h5>
									<div class="content">
										<p>Lorem ipsum dolor sitam consect etur adipiscing elit tellus,</p>
									</div>
								</div>
							</div>
							<div class="btn-view-details mt-0 p-20 bg-theme-colored1"> <a href="{{route('app.service')}}" class="btn btn-plain-text-with-arrow btn-sm text-white"> View Details </a></div>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-xl-3">
						<div class="tm-sc tm-sc-icon-box icon-box icon-top tm-iconbox-icontype-font-icon text-center iconbox-style7-hover-moving-border bg-white iconbox-box-shadow  iconbox-theme-colored2 iconbox-default-padding icon-position-icon-top">
							<div class="icon-box-wrapper">
								<div class="icon-wrapper"> <a class="icon icon-type-image icon-default"> <img src="{{asset('public/client/images/icon/c6.png')}}" alt="Image"> </a></div>
								<div class="icon-text">
									<h5 class="icon-box-title mt-0">25 Years Exprience </h5>
									<div class="content">
										<p>Lorem ipsum dolor sitam consect etur adipiscing elit tellus,</p>
									</div>
								</div>
							</div>
							<div class="btn-view-details mt-0 p-20 bg-theme-colored2"> <a href="{{route('app.service')}}" class="btn btn-plain-text-with-arrow btn-sm text-white"> View Details </a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section: funfact -->
	<!-- <section class="layer-overlay overlay-theme-colored2-9 section-typo-light text-center" data-tm-bg-img="images/bg/as02.jpg">
		<div class="container">
			<div class="section-content">
				<div class="row">
					<div class="col-lg-3 col-sm-6 col-xs-12 mb-sm-40">
						<div class="tm-sc tm-sc-funfact funfact text-center mb-lg-40">
							<div class="funfact-icon">
								<i class="pe-7s-smile"></i>
							</div>
							<h2 class="counter text-theme-colored1 mt-10 font-size-48">
								<span class="animate-number" data-value="2020" data-animation-duration="1500">0</span>
							</h2>
							<h5 class="title">Happy Clients</h5>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 col-xs-12 mb-sm-40">
						<div class="tm-sc tm-sc-funfact funfact text-center mb-lg-40">
							<div class="funfact-icon">
								<i class="pe-7s-rocket"></i>
							</div>
							<h2 class="counter text-theme-colored1 mt-10 font-size-48">
								<span class="animate-number" data-value="1010" data-animation-duration="1500">0</span>
							</h2>
							<h5 class="title">Repair Done</h5>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 col-xs-12 mb-sm-40">
						<div class="tm-sc tm-sc-funfact funfact text-center mb-sm-40">
							<div class="funfact-icon">
								<i class="pe-7s-add-user"></i>
							</div>
							<h2 class="counter text-theme-colored1 mt-10 font-size-48">
								<span class="animate-number" data-value="96" data-animation-duration="1500">0</span>
							</h2>
							<h5 class="title">Expert Team</h5>
						</div>
					</div>
					<div class="col-sm-6 col-lg-3 col-xs-12">
						<div class="tm-sc tm-sc-funfact funfact text-center mb-sm-0">
							<div class="funfact-icon">
								<i class="pe-7s-world"></i>
							</div>
							<h2 class="counter text-theme-colored1 mt-10 font-size-48">
								<span class="animate-number" data-value="25" data-animation-duration="1500">0</span>
							</h2>
							<h5 class="title">Award Won</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- End Divider -->

	<!-- Section: Contact -->
	@include('client.partials.contact_form')
	<!-- ** End Divider ** -->

	<!-- Section: About -->
	<!-- <section class="bg-img-no-repeat bg-img-right" data-tm-bg-img="images/bg/bg-shape-bconsul2.png">
		<div class="container pt-0">
			<div class="section-content">
				<div class="row">
					<div class="col-sm-12 col-lg-6 col-md-12">
						<img src="images/about/ac3.png" class="attachment-full" alt=""/>
					</div>
					<div class="col-xl-6 col-lg-6">
						<h2 class="font-size-54">Repair Services For Your Mobile.</h2>
						<ul class="list-unstyled mb-20">
							<li class="text-theme-colored1"><i class="fa fa-check-circle text-theme-colored1 mr-10"></i> Lorem Ipsum is not simply random text exercitation</li>
							<li class="text-theme-colored1"><i class="fa fa-check-circle text-theme-colored1 mr-10"></i> If you are going to use a passage aute irure dolor</li>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis ostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo in consequat. Duis aute irure dolor in reprehenderit.</p>
						<img src="images/signature01.png" class="mr-30" alt=""/>
						<!-- <div class="box-hover-effect play-video-button tm-sc tm-sc-video-popup tm-sc-video-popup-button-with-text-right">
							<div class="effect-wrapper d-flex align-items-center">
								<div class="thumb">
									<img class="" src="{{asset('public/client/images/play-button/s8.png')}}" alt="Image">
								</div>
								<h5 class="video-button-text">Take a Video Tour</h5>
								<a class="hover-link" data-lightbox-gallery="youtube-video" href="http://www.youtube.com/watch?v=hNQFjqDvPhA" title="Take a Video Tour"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- End Divider -->

	

	<!-- Section: Service -->
	@include('client.partials.services')
	<!-- End Divider -->

	<!-- Section: Who We Are -->
	<section class="">
		<div class="container-fluid p-0">
			<div class="section-content">
				<div class="row">
					<div class="col-sm-12">
						<div class="tm-sc tm-sc-custom-columns-holder tm-cc-two-columns tm-cc-responsive-mode-1280">
							<div class="tm-sc tm-sc-custom-columns-holder-item section-typo-light bg-theme-colored2 bg-img-right" data-item-class="bconsul-mascot-custom-columns-479103" data-tm-bg-img="images/bg/map-bg.png" data-1200-up="70px 10% 70px 10%" data-1199-down="90px 10% 90px 10%">
								<div class="item-inner">
									<div class="item-content bconsul-mascot-custom-columns-479103">
										<h2 class="mt-md-30">We Have 25 Years Experiance</h2>
										<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Nulla vehicula malesuada nisi eu rutrum. Maecenas purus diam lobortis at velit eget ultricies posuere augue Nullam nec lectus a augue dictum euismod ut sed ex Integer pretium</p>
										<div class="row">
											<div class="col-md-6 col-lg-6">
												<div class="tm-sc tm-sc-icon-box icon-box icon-top tm-iconbox-icontype-font-icon iconbox-theme-colored1 icon-position-icon-top mb-40">
													<div class="icon-box-wrapper">
														<div class="icon-wrapper"> <a class="icon icon-type-image icon-default"> <img src="{{asset('public/client/images/icon/c1.png')}}" alt="Image"> </a></div>
														<div class="icon-text">
															<h5 class="icon-box-title mt-0">Accessories</h5>
															<div class="content">
																<p>Default text for Box Content. Lorem ipsum dolor sit amet consectetur elit.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-lg-6">
												<div class="tm-sc tm-sc-icon-box icon-box icon-top tm-iconbox-icontype-font-icon iconbox-theme-colored1 icon-position-icon-top mb-40">
													<div class="icon-box-wrapper">
														<div class="icon-wrapper"> <a class="icon icon-type-image icon-default"> <img src="{{asset('public/client/images/icon/c2.png')}}" alt="Image"> </a></div>
														<div class="icon-text">
															<h5 class="icon-box-title mt-0">Analysis</h5>
															<div class="content">
																<p>Default text for Box Content. Lorem ipsum dolor sit amet consectetur elit.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12 col-lg-12">
												<div class="tm-sc tm-sc-progress-bar progress-bar-fixed-right-percent mt-30 mb-40" data-percent="95" data-unit-left="" data-unit-right="%" data-bar-height="" data-barcolor="bg-theme-colored1">
													<div class="progress-title-holder">
														<h6 class="pb-title">Customer satisfaction</h6>
														<span class="percent"><span class="symbol-left"></span><span class="value">95</span><span class="symbol-right">%</span></span>
													</div>
													<div class="progress-holder">
														<div class="progress-content"></div>
													</div>
												</div>
												<div class="tm-sc tm-sc-progress-bar progress-bar-fixed-right-percent mb-40" data-percent="80" data-unit-left="" data-unit-right="%" data-bar-height="" data-barcolor="bg-theme-colored1">
													<div class="progress-title-holder">
														<h6 class="pb-title">On Time Delivery</h6>
														<span class="percent"><span class="symbol-left"></span><span class="value">80</span><span class="symbol-right">%</span></span>
													</div>
													<div class="progress-holder">
														<div class="progress-content"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tm-sc tm-sc-custom-columns-holder-item" data-item-class="bconsul-mascot-custom-columns-363166">
								<div class="item-inner">
									<div class="item-content charingo-mascot-custom-columns-872139 p-0">
										<div id="twentytwenty-slider-516457" class="twentytwenty-container tm-sc tm-sc-before-after-slider text-center" data-orientation="horizontal" data-offset-percent="0.5" data-no-overlay="true" data-before-label="" data-after-label=""> 
											<img src="{{asset('public/client/images/bg/ab1.jpg')}}" alt="Image"> 
											<img src="{{asset('public/client/images/bg/ab2.jpg')}}" alt="Image">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Divider -->

	<!-- Section: Team -->
	<!-- <section>
		<div class="container pt-90">
			<div class="section-title">
				<div class="row justify-content-md-center">
					<div class="col-md-8">
						<div class="text-center mb-60">
							<div class="tm-sc tm-sc-section-title section-title section-title-style1 text-center line-bottom-style4-attached-double-lines1">
								<div class="title-wrapper">
									<h2 class="title"> <span class="">Our </span> <span class="text-theme-colored1">Expart</span> Team</h2>
									<div class="title-seperator-line"></div>
									<div class="paragraph">
									<p>Explore Our Completed Services! Consectetur adipiscing elitt elit tellus, luctus pulvinar dapibus leoconsectetur luctus nec.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section-content">
				<div class="row">
					<div class="col-md-6 col-lg-6 col-xl-3">
						<div class="staff-block mb-lg-30">
							<div class="inner-box">
								<div class="image">
									<img src="{{asset('public/client/images/team/team1.jpg')}}" alt=""/>
									<h4 class="name-tag">Ismail Alex</h4>
									<div class="overlay-box">
										<div class="overlay-inner">
											<div class="content">
												<h4 class="text-theme-colored1"><a href="#">Ismail Alex</a></h4>
												<p>Consectetur adipiscing elitt elit tellus luctus pulvinar dapibus luctus</p>
												<ul class="styled-icons icon-dark icon-sm icon-theme-colored1">
													<li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
													<li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-instagram"></i></a></li>
													<li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-skype"></i></a></li>
													<li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-xl-3">
						<div class="staff-block mb-lg-30">
							<div class="inner-box">
								<div class="image">
									<img src="{{asset('public/client/images/team/team2.jpg')}}" alt=""/>
									<h4 class="name-tag">Hilton Alex</h4>
									<div class="overlay-box">
										<div class="overlay-inner">
											<div class="content">
												<h4 class="text-theme-colored1"><a href="#">Hilton Alex</a></h4>
												<p>Consectetur adipiscing elitt elit tellus luctus pulvinar dapibus luctus</p>
												<ul class="styled-icons icon-dark icon-sm icon-theme-colored1">
													<li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
													<li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-instagram"></i></a></li>
													<li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-skype"></i></a></li>
													<li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-xl-3">
						<div class="staff-block mb-lg-30">
							<div class="inner-box">
								<div class="image">
									<img src="{{asset('public/client/images/team/team3.jpg')}}" alt=""/>
									<h4 class="name-tag">Maria Martin</h4>
									<div class="overlay-box">
										<div class="overlay-inner">
											<div class="content">
												<h4 class="text-theme-colored1"><a href="#">Maria Martin</a></h4>
												<p>Consectetur adipiscing elitt elit tellus luctus pulvinar dapibus luctus</p>
												<ul class="styled-icons icon-dark icon-sm icon-theme-colored1">
													<li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
													<li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-instagram"></i></a></li>
													<li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-skype"></i></a></li>
													<li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-xl-3">
						<div class="staff-block">
							<div class="inner-box">
								<div class="image">
									<img src="{{asset('public/client/images/team/team4.jpg')}}" alt=""/>
									<h4 class="name-tag">Sakib Martin</h4>
									<div class="overlay-box">
										<div class="overlay-inner">
											<div class="content">
												<h4 class="text-theme-colored1"><a href="#">Sakib Martin</a></h4>
												<p>Consectetur adipiscing elitt elit tellus luctus pulvinar dapibus luctus</p>
												<ul class="styled-icons icon-dark icon-sm icon-theme-colored1">
													<li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
													<li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-instagram"></i></a></li>
													<li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-skype"></i></a></li>
													<li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- End Divider -->

	<!-- Section: How We Works -->
	<section class="layer-overlay overlay-theme-colored2-9 section-typo-light text-center" data-tm-bg-img="images/bg/as02.jpg">
		<div class="container pt-90 pb-90">
			<div class="section-title">
				<div class="row justify-content-md-center">
					<div class="col-md-8">
						<div class="text-center mb-60">
							<div class="tm-sc tm-sc-section-title section-title section-title-style1 text-center line-bottom-style3-bordered-line">
								<div class="title-wrapper">
									<h2 class="title"> <span class="">How</span> <span class="text-theme-colored1">We</span> <span class="">Work</span></h2>
									<div class="title-seperator-line"></div>
									<div class="paragraph">
										<p>Get Your Project Done In just 4 Steps! Consectetur adipiscing elitt elit tellus, luctus pulvinar dapibus leoconsectetur luctus nec.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section-content mt-30">
				<div class="row">
					<div class="col-sm-12">
						<div class="tm-sc tm-sc-working-steps working-steps-horizontal working-steps-items-four">
							<div class="working-steps-bg-holder"></div>
							<div class="working-steps-inner clearfix">
								<div class="tm-sc tm-sc-working-steps-item tm-animation move-left">
									<div class="working-steps-item-inner">
										<div class="image-holder-wrapper">
											<div class="image-holder">
												<div class="image-holder-inner"> <img src="{{asset('public/client/images/photos/w1.jpg')}}" alt="Image"></div>
												<div class="tag">A</div>
											</div>
										</div>
										<div class="content-holder">
											<div class="title-holder">
												<h5 class="title">Damage Device</h5>
											</div>
											<div class="text-holder">
												<p>Lorem ipsum dolor sit amet adipiscing elit</p>
											</div>
										</div>
									</div>
								</div>
								<div class="tm-sc tm-sc-working-steps-item tm-animation move-up">
									<div class="working-steps-item-inner">
										<div class="image-holder-wrapper">
											<div class="image-holder">
												<div class="image-holder-inner"> <img src="{{asset('public/client/images/photos/w2.jpg')}}" alt="Image"></div>
												<div class="tag">B</div>
											</div>
										</div>
										<div class="content-holder">
											<div class="title-holder">
												<h5 class="title">Handover</h5>
											</div>
											<div class="text-holder">
												<p>Lorem ipsum dolor sit amet adipiscing elit</p>
											</div>
										</div>
									</div>
								</div>
								<div class="tm-sc tm-sc-working-steps-item tm-animation move-down working-steps-item-highlighted">
									<div class="working-steps-item-inner">
										<div class="image-holder-wrapper">
											<div class="image-holder">
												<div class="image-holder-inner"> <img src="{{asset('public/client/images/photos/w3.jpg')}}" alt="Image"></div>
												<div class="tag">C</div>
											</div>
										</div>
										<div class="content-holder">
											<div class="title-holder">
												<h5 class="title">Fast Fixing</h5>
											</div>
											<div class="text-holder">
												<p>Lorem ipsum dolor sit amet adipiscing pulvinar</p>
											</div>
										</div>
									</div>
								</div>
								<div class="tm-sc tm-sc-working-steps-item tm-animation move-right working-steps-push-right">
									<div class="working-steps-item-inner">
										<div class="image-holder-wrapper">
											<div class="image-holder">
												<div class="image-holder-inner"> <img src="{{asset('public/client/images/photos/w4.jpg')}}" alt="Image"></div>
												<div class="tag">D</div>
											</div>
										</div>
										<div class="content-holder">
											<div class="title-holder">
												<h5 class="title">Delivery</h5>
											</div>
											<div class="text-holder">
												<p>Lorem ipsum dolor sit amet adipiscing elit</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Divider -->

	<!-- Section: Pricing -->
	<!-- <section>
		<div class="container pt-90">
			<div class="section-title">
				<div class="row justify-content-md-center">
					<div class="col-md-8">
						<div class="text-center mb-60">
							<div class="tm-sc tm-sc-section-title section-title section-title-style1 text-center bg-img-center bg-no-repeat line-bottom-style3-bordered-line">
								<div class="title-wrapper">
									<h2 class="title"> <span class="">Our </span> <span class="text-theme-colored1">Pricing</span> <span class=""> Plan</span></h2>
									<div class="title-seperator-line"></div>
									<div class="paragraph">
										<p>Explore Our Completed Projects! Consectetur adipiscing elitt elit tellus, luctus pulvinar dapibus leoconsectetur luctus nec.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section-content">
				<div class="row">
					<div class="col-md-6 col-lg-6 col-xl-4">
						<div class="tm-sc tm-sc-pricing-table pricing-table-style1 pricing-list-bordered pricing-table-hover-effect 
						pricing-table-box-shadow text-center mb-lg-30">
							<div class="pricing-table-inner-wrapper">
								<div class="pricing-table-inner">
									<div class="pricing-table-head">
										<div class="pricing-table-title-area">
											<h6 class="pricing-table-title"> Basic Plan</h6>
										</div>
										<div class="pricing-table-pricing"> <span class="pricing-table-prefix">$</span> <span class="pricing-table-price" >20.00</span></div>
									</div>
									<div class="pricing-table-content">
										<ul>
											<li>Factory Rest</li>
											<li>Lifetime free support</li>
											<li>Upgrade options</li>
											<li>9 Days Time</li>
										</ul>
									</div>
									<div class="pricing-table-footer">
										<div class="btn-view-details text-center"> <a href="#" target="_self" class="btn btn-light btn-round"> Choose Plan </a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-xl-4">
						<div class="tm-sc tm-sc-pricing-table pricing-table-style1 pricing-list-bordered pricing-table-hover-effect pricing-table-box-shadow text-center mb-lg-30">
							<div class="pricing-table-inner-wrapper">
								<div class="pricing-table-inner">
									<div class="pricing-table-head">
										<div class="pricing-table-title-area">
											<h6 class="pricing-table-title"> Medium Plan</h6>
										</div>
										<div class="pricing-table-pricing"> <span class="pricing-table-prefix">$</span> <span class="pricing-table-price" >30.00</span></div>
									</div>
									<div class="pricing-table-content">
										<ul>
											<li>Factory Rest</li>
											<li>Lifetime free support</li>
											<li>Upgrade options</li>
											<li>18 Days Time</li>
										</ul>
									</div>
									<div class="pricing-table-footer">
										<div class="btn-view-details text-center"> <a href="#" target="_self" class="btn btn-theme-colored1 btn-round"> Choose Plan </a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-xl-4">
						<div class="tm-sc tm-sc-pricing-table pricing-table-style1 pricing-list-bordered pricing-table-hover-effect pricing-table-box-shadow text-center ">
							<div class="pricing-table-inner-wrapper">
								<div class="pricing-table-inner">
									<div class="pricing-table-head">
										<div class="pricing-table-title-area">
											<h6 class="pricing-table-title"> Ultimate Plan</h6>
										</div>
										<div class="pricing-table-pricing"> <span class="pricing-table-prefix">$</span> <span class="pricing-table-price" >50.00</span></div>
									</div>
									<div class="pricing-table-content">
										<ul>
											<li>Factory Rest</li>
											<li>Lifetime free support</li>
											<li>Upgrade options</li>
											<li>30 Days Time</li>
										</ul>
									</div>
									<div class="pricing-table-footer">
										<div class="btn-view-details text-center"> <a href="#" target="_self" class="btn btn-light btn-round"> Choose Plan </a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- End Divider -->

	<!-- Section: News & Updates-->
	@include('client.partials.blogs')
	<!-- End Divider -->

	<!-- Section: Products Didplay -->
	@include('client.partials.products')
	<!-- End Divider -->


	    
@endsection


@section('modal')

	

@endsection


@section('javascript')
   
	
  	<script>
  		$(function(){
         'use strict'

         

         

      });
  	</script>

@endsection

@extends('client.layout.layout')

@section('title','Blog')


@section('style')
@endsection


@section('content')

   <!-- Start main-content -->
	<div class="main-content">
		<!-- Section: inner-header -->
		<section class="page-title divider layer-overlay overlay-dark-8 section-typo-light bg-img-center" data-tm-bg-img="images/bg/as02.jpg">
			<div class="container pt-90 pb-90">
				<!-- Section Content -->
				<div class="section-content">
					<div class="row">
						<div class="col-md-12 text-center">
							<h2 class="title text-white">Services</h2>
							<nav role="navigation" class="breadcrumb-trail breadcrumbs">
								<div class="breadcrumbs">
									<span class="trail-item trail-begin">
										<a href="#"><span>Home</span></a>
									</span>
									<span><i class="fa fa-angle-right"></i></span>
									<span class="trail-item"><a href="#"><span>Pages</span></a></span>
									<span><i class="fa fa-angle-right"></i></span>
									<span itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-end active"><span>Services</span></span>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Section: Service -->
		<section class="bg-img-no-repeat" data-tm-bg-img="{{asset('public/client/images/bg/bg-shape-bconsul1.png')}}">
			<div class="container pt-90">
				<div class="section-title">
					<div class="row justify-content-md-center">
						<div class="col-md-8">
							<div class="text-center mb-60">
								<div class="tm-sc tm-sc-section-title section-title section-title-style1 text-center line-bottom-style4-attached-double-lines1">
									<div class="title-wrapper">
										<h2 class="title"> <span class="">Our </span> <span class="text-theme-colored1">Service</span> Areas</h2>
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
						<div class="col-md-6 col-lg-6 col-xl-4">
							<div class="services-block mb-50">
								<div class="inner-box">
									<div class="thumb">
										<img src="{{asset('public/client/images/service/1.jpg')}}" alt=""/>
									</div>
									<div class="content">
										<h4><a href="#">Laptop Repair</a></h4>
										<p>Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-6 col-xl-4">
							<div class="services-block mb-50">
								<div class="inner-box">
									<div class="thumb">
										<img src="{{asset('public/client/images/service/2.jpg')}}" alt=""/>
									</div>
									<div class="content">
										<h4><a href="#">Computer Repair</a></h4>
										<p>Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-6 col-xl-4">
							<div class="services-block mb-50">
								<div class="inner-box">
									<div class="thumb">
										<img src="{{asset('public/client/images/service/3.jpg')}}" alt=""/>
									</div>
									<div class="content">
										<h4><a href="#">Data Recovery</a></h4>
										<p>Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-6 col-xl-4">
							<div class="services-block mb-lg-50">
								<div class="inner-box">
									<div class="thumb">
										<img src="{{asset('public/client/images/service/4.jpg')}}" alt=""/>
									</div>
									<div class="content">
										<h4><a href="#">Phone Unlock</a></h4>
										<p>Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-6 col-xl-4">
							<div class="services-block mb-lg-50">
								<div class="inner-box">
									<div class="thumb">
										<img src="{{asset('public/client/images/service/5.jpg')}}" alt=""/>
									</div>
									<div class="content">
										<h4><a href="#">Mobile Repair</a></h4>
										<p>Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-6 col-xl-4">
							<div class="services-block mb-lg-50">
								<div class="inner-box">
									<div class="thumb">
										<img src="{{asset('public/client/images/service/6.jpg')}}" alt=""/>
									</div>
									<div class="content">
										<h4><a href="#">Hardware Update</a></h4>
										<p>Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>
									</div>
								</div>
							</div>					
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Divider -->

	</div>
	<!-- end main-content -->

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

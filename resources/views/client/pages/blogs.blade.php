
@extends('client.layout.layout')

@section('title','Blog')

@section('blog','active')

@section('style')
@endsection


@section('content')

	<!-- Start main-content -->
	<div class="main-content-area">
		<!-- Section: inner-header -->
		<section class="page-title divider layer-overlay overlay-dark-8 section-typo-light bg-img-center" data-tm-bg-img="{{asset('public/client/images/bg/as02.jpg')}}">
			<div class="container pt-90 pb-90">
				<!-- Section Content -->
				<div class="section-content">
					<div class="row">
						<div class="col-md-12 text-center">
							<h2 class="title text-white">Blog</h2>
							<nav role="navigation" class="breadcrumb-trail breadcrumbs">
								<div class="breadcrumbs">
									<span class="trail-item trail-begin">
										<a href="{{route('app.home')}}"><span>PHomefix</span></a>
									</span>
									<span><i class="fa fa-angle-right"></i></span>
									<span itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-end active"><span>Blogs</span></span>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Section: News & Updates-->
		@include('client.partials.blogs')
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

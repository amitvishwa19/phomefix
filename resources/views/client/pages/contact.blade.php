
@extends('client.layout.layout')

@section('title','Contact')

@section('contact','active')

@section('style')
@endsection


@section('content')

<!-- Start main-content -->
<div class="main-content">
	<!-- Section: home -->
	<section class="page-title divider layer-overlay overlay-dark-8 section-typo-light bg-img-center" data-tm-bg-img="{{asset('public/client/images/bg/as02.jpg')}}">
		<div class="container pt-90 pb-90">
			<!-- Section Content -->
			<div class="section-content">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="title">Contact</h2>
						<nav role="navigation" class="breadcrumb-trail breadcrumbs">
							<div class="breadcrumbs">
								<span class="trail-item trail-begin">
									<a href="{{route('app.home')}}"><span>PHomefix</span></a>
								</span>
								<span><i class="fa fa-angle-right"></i></span>
								<span class="trail-item trail-end active">Contact</span>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section: Contact -->
	@include('client.partials.contact_form')
	<!-- ** End Divider ** -->

	<!-- Section: Contact -->
	<section>
		<div class="container-fluid pt-0 pb-0">
			<div class="row">
				<div class="col-md-12">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7496.556775569473!2d144.95479118909844!3d-37.81548660764023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sbd!4v1562002563953!5m2!1sen!2sbd" width="2600" height="600" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section>
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

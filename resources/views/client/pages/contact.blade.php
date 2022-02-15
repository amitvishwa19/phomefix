
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
									<a href="#"><span>Home</span></a>
								</span>
								<span><i class="fa fa-angle-right"></i></span>
								<span class="trail-item"><a href="#"><span>Pages</span></a></span>
								<span><i class="fa fa-angle-right"></i></span>
								<span class="trail-item trail-end active">Contact</span>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section: Contact Form -->
	<section  id="contact" class="bg-white-f4">
		<div class="container">
			<div class="section-content">
				<div class="row">
					<div class="col-sm-12">
						<div class="tm-sc tm-sc-custom-columns-holder tm-cc-two-columns tm-cc-responsive-mode-1280">
							<div class="tm-sc tm-sc-custom-columns-holder-item" data-item-class="senior-mascot-custom-columns-283434" data-tm-bg-img="{{asset('public/client/images/bg/bg8.jpg')}}">
								<div class="item-inner">
									<div class="item-content senior-mascot-custom-columns-283434">
									</div>
								</div>
							</div>
							<div class="tm-sc tm-sc-custom-columns-holder-item  section-typo-light bg-theme-colored1" data-item-class="econsul-mascot-custom-columns-924797" data-tm-bg-img="images/bg/worldmap.png" data-1200-up="80px 15% 100px 10%" data-1199-down="80px 10% 100px 10%">
								<div class="item-inner">
									<div class="item-content econsul-mascot-custom-columns-924797">
										<h2>Send Us Message</h2>
										<div class="wpb_text_column wpb_content_element  mb-60" >
											<div class="wpb_wrapper">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error repellendus, ex culpa recusandae, velit, omnis dolores, possimus quis voluptatibus</p>
											</div>
										</div>
										<div role="form" class="wpcf7" id="wpcf7-f452-p311-o1" lang="en-US" dir="ltr">
											<div class="screen-reader-response"></div>
											<form action="https://kodesolution.com/corporate/business/econsul/demo/#wpcf7-f452-p311-o1" method="post" class="wpcf7-form" novalidate="novalidate">
												<div> <input type="hidden" name="_wpcf7" value="452" /> <input type="hidden" name="_wpcf7_version" value="5.1.1" /> <input type="hidden" name="_wpcf7_locale" value="en_US" /> <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f452-p311-o1" /> <input type="hidden" name="_wpcf7_container_post" value="311" /> <input type="hidden" name="g-recaptcha-response" value="" /></div>
												<div class="tm-contact-form-transparent pr-0">
													<div class="row">
														<div class="col-md-6"> <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name*" /></span></div>
														<div class="col-md-6"> <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email*" /></span></div>
														<div class="col-md-6"> <span class="wpcf7-form-control-wrap your-phone"><input type="text" name="your-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Phone*" /></span></div>
														<div class="col-md-6"> <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Subject" /></span></div>
														<div class="col-md-12"> <span class="wpcf7-form-control-wrap textarea"><textarea name="textarea" cols="40" rows="3" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Message*"></textarea></span></div>
														<div class="col-md-12"> <input type="submit" value="Submit Now" class="wpcf7-form-control wpcf7-submit btn btn-theme-colored2 btn-round" /></div>
													</div>
												</div>
												<div class="wpcf7-response-output wpcf7-display-none"></div>
											</form>
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

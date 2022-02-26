<section class="">
		<div class="container-fluid p-0">
			<div class="section-content">
				<div class="row">
					<div class="col-sm-12">
						<div class="tm-sc tm-sc-custom-columns-holder tm-cc-two-columns tm-cc-responsive-mode-1280">
							<div class="tm-sc tm-sc-custom-columns-holder-item" data-item-class="senior-mascot-custom-columns-283434" data-tm-bg-img="{{asset('public/client/images/phones/phone.png')}}">
								<div class="item-inner">
									<div class="item-content senior-mascot-custom-columns-283434">
									</div>
								</div>
							</div>
							<div class="tm-sc tm-sc-custom-columns-holder-item section-typo-light bg-theme-colored2" data-item-class="econsul-mascot-custom-columns-924797" data-tm-bg-img="images/bg/worldmap.png" data-1200-up="80px 25% 100px 10%" data-1199-down="80px 10% 100px 10%">
								<div class="item-inner">
									<div class="item-content econsul-mascot-custom-columns-924797">
										<h2>Fix your phone with PhomeFix</h2>
										<div class="wpb_text_column wpb_content_element mb-60">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error repellendus, ex culpa recusandae, velit, omnis dolores, possimus quis voluptatibus</p>
										</div>
										<div role="form" class="wpcf7" id="wpcf7-f452-p311-o1" lang="en-US" dir="ltr">
											<div class="screen-reader-response"></div>


											<form action="{{route('app.inquire')}}" method="post" class="wpcf7-form" novalidate="novalidate">
												@csrf
												<div class="tm-contact-form-transparent pr-0">
													<div class="row">
														<div class="col-md-12"> 
															<span class="wpcf7-form-control-wrap your-name">
																@if ($errors->has('name'))
																	<span class="help-block">
																		<strong><small>{{ $errors->first('name') }}</small></strong>
																	</span>
																@endif
																<input type="text" name="name" value="" size="30" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"  placeholder="Name*" />
															</span>
														</div>
														<div class="col-md-12"> 
															<span class="wpcf7-form-control-wrap your-email">
																@if ($errors->has('email'))
																	<span class="help-block">
																		<strong><small>{{ $errors->first('email') }}</small></strong>
																	</span>
																@endif
																<input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"  placeholder="Email*" />
															</span>
														</div>
														<div class="col-md-12"> 
															<span class="wpcf7-form-control-wrap your-phone">
																@if ($errors->has('phone'))
																	<span class="help-block">
																		<strong><small>{{ $errors->first('phone') }}</small></strong>
																	</span>
																@endif
																<input type="text" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Phone Number*" />
															</span>
														</div>
														
														<div class="col-md-12"> 
															<span class="wpcf7-form-control-wrap your-subject">
																@if ($errors->has('model'))
																	<span class="help-block">
																		<strong><small>{{ $errors->first('model') }}</small></strong>
																	</span>
																@endif
																<select name="model" id="" >
																	<option value="" class="wpcf7-form-control wpcf7-text">-Select your Phone Model-</option>
																	@foreach($models as $model)
																		<option value="{{$model->value}}" class="wpcf7-form-control wpcf7-text">{{$model->value}}</option>
																	@endforeach
																</select>
															</span>
														</div>

														<div class="col-md-12"> 
															<span class="wpcf7-form-control-wrap your-subject">
																@if ($errors->has('issue'))
																	<span class="help-block">
																		<strong><small>{{ $errors->first('issue') }}</small></strong>
																	</span>
																@endif
																<select name="issue" id="" >
																	<option value="" class="wpcf7-form-control wpcf7-text">-Phone Issue-</option>
																	@foreach($issues as $issue)
																		<option value="{{$issue->value}}" class="wpcf7-form-control wpcf7-text">{{$issue->value}}</option>
																	@endforeach
																</select>
															</span>
														</div>


														<div class="col-md-12"> 
															<span class="wpcf7-form-control-wrap textarea">
																<textarea name="message" cols="40" rows="3" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Message*"></textarea>
															</span>
														</div>

														@captcha

														<div class="col-md-12">
															<input type="submit" value="Submit Now" class="wpcf7-form-control wpcf7-submit btn btn-theme-colored1 btn-round" />
														</div>
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

	@section('javascript')
   
	
  	<script>
		// $(function(){
        //  'use strict'
        // });

         
		 console.log('wola');
         

    
  	</script>


@endsection
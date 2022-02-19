<section class="layer-overlay overlay-theme-colored2-9 section-typo-light text-center" data-tm-bg-img="images/bg/as02.jpg">
    <div class="container pt-90 pb-90">
        <div class="section-title">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="text-center mb-60">
                        <div class="tm-sc tm-sc-section-title section-title section-title-style1 text-center line-bottom-style3-bordered-line">
                            <div class="title-wrapper">
                                <h2 class="title"> <span class="">Buy</span> <span class="text-theme-colored1">From</span> <span class="">Us</span></h2>
                                <div class="title-seperator-line"></div>
                                <div class="paragraph">
                                    <p>Buy latest range of new and used product from us in competetive price.</p>
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
                    <div class="tm-sc tm-sc-clients tm-sc-clients-carousel owl-dots-light-skin owl-dots-center clients-animation-zoom">
                        <div class="owl-carousel owl-theme tm-owl-carousel-6col" data-autoplay="true" data-loop="true" data-duration="6000" data-smartspeed="300" data-margin="30" data-stagepadding="0" data-laptop="2">
                            @foreach($products as $product)
                            <div class="item"> <a target="_blank" href="#"> <img src='{{$product->feature_image}}' alt='Image' /> </a></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
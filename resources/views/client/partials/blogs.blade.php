<section>
    <div class="container pt-90">
        <div class="section-title">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="text-center mb-60">
                        <div class="tm-sc tm-sc-section-title section-title section-title-style1 text-center line-bottom-style4-attached-double-lines1">
                            <div class="title-wrapper">
                                <h2 class="title"> <span class="">Our </span> <span class="text-theme-colored1">Latest</span> News</h2>
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

            @foreach($blogs as $blog)
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="tm-sc tm-sc-blog tm-sc-blog-masonry blog-style1-current-theme mb-lg-30">
                        <article class="post type-post status-publish format-standard has-post-thumbnail">
                            <div class="entry-header">
                                <div class="post-thumb lightgallery-lightbox">
                                    <div class="post-thumb-inner">
                                        <div class="thumb"> <img src="{{$blog->feature_image}}" alt="Image"/></div>
                                    </div>
                                </div>
                                <a class="link" href="#"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="entry-content">
                                <!-- <div class="post-single-meta"> <i class="fa fa-folder-o"></i> <span class="categories-links"><a href="#" rel="category tag">By Bcosul</a></span></div> -->
                                <h5 class="entry-title"><a href="#" rel="bookmark">Capitalize on low hanging fruit to identify a ballpark test</a></h5>
                                <ul class="entry-meta list-inline">
                                    <li class="list-inline-item posted-date"><i class="fa fa-calendar-o"></i> <a href="#" rel="bookmark"><time class="entry-date published updated" datetime="2019-05-14T05:20:51+00:00">{{$blog->created_at->diffForHumans()}}</time></a></li>
                                    <li class="list-inline-item categories"><i class="fa fa-folder-o"></i> <span class="categories-links">
                                        <!-- <a href="#" rel="category tag">Repair</a>, <a href="#" rel="category tag">Computer</a></span> -->
                                    </li>
                                </ul>
                                <div class="post-excerpt">
                                    <div class="mascot-post-excerpt">{!!Str::limit($blog->body,150)!!}</div>
                                </div>
                                <div class="post-btn-readmore"> <a href="#" class="btn btn-plain-text-with-arrow btn-round"> View Details </a></div>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</section>
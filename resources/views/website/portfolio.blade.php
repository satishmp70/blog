@extends('website.template.master')

@section('content')
      
   <!-- loader   -->
   <div class="loader">
    <div class="loading-text-container "><span class="loading-text">Load<strong>ing</strong></span> <span class="loader_count">0</span></div>
    <div class="loader-anim"></div>
    <div class="loader-anim2 color-bg"></div>
</div>
<!-- loader  end-->
<!-- main start  -->
<div id="main">
    <!-- header--> 
    <header class="main-header">
        <!-- logo  -->
          
        <!-- logo end -->
        <!-- nav-button-wrap-->
        <div class="nav-button but-hol">
            <span  class="ncs"></span>
            <span class="nos"></span>
            <span class="nbs"></span>
            <div class="menu-button-text">Menu</div>
        </div>
        <!-- nav-button-wrap end--> 
        <!-- header-contacts--> 
        <div class="header-contacts">
            <ul>
                <li><span>01. Call </span> <a href="tel:+4556662632">+66556412322</a></li>
                <li><span>02. Write </span> <a href="mailto:theside@domain.com">abc@domain.com</a></li>
            </ul>
            <a href="contacts.html" class="ajax contacts-btn">Get in touch</a>
        </div>
        <!-- header-contacts end--> 
    </header>
    <!-- header end--> 
    <!-- left-header-->      
     @include('website.template.icons')
    <!-- left-header end--> 
    <!-- share button--> 
    <div class="share-btn showshare color-bg"><span>Share <i class="fal fa-plus"></i></span></div>
    <!-- share button end--> 
    <!-- right header--> 
    <div class="hc_dec_color">
        <div class="page-subtitle"><span></span></div>
    </div>
    <!-- right header end--> 
    <!-- wrapper  -->	
    <div id="wrapper">
        <!-- navigation menu-->	
        <div class="nav-holder">
            <div class="nav-holder-wrap but-hol">
                <div class="nav-container fl-wrap">
                    <!-- nav -->
                    @include('website.template.nav')
                    <!-- nav end-->
                </div>
                <div class="nav-footer"><span>&#169;  All rights reserved. </span></div>
                <div class="nav-holder-wrap_line"></div>
                <div class="nav-holder-wrap_dec"></div>
            </div>
        </div>
        <div class="nav-overlay"></div>
        <!-- navigation menu end  -->	
        <!-- content-->    
        <div class="content full-height hor-content_padd" data-pagetitle="Portfolio">
            <div class="fixed-bottom-panel fs-fix-bom-panel hfw">
                <div class="gallery-filters-wrap">
                    <div class="gallery-filters init_hidden_filter">
                        <a href="#" class="gallery-filter  gallery-filter-active" data-filter="*">All projects</a>
                        <a href="#" class="gallery-filter" data-filter=".web">Web Design</a>
                        <a href="#" class="gallery-filter" data-filter=".photography">Photo</a>
                        <a href="#" class="gallery-filter" data-filter=".branding">Branding</a>
                        <a href="#" class="gallery-filter" data-filter=".uides">Ui Design</a>
                    </div>
                    <div class="psn_button act-filter"><i class="fal fa-sort"></i> FIlter </div>
                </div>
            </div>
            <!--horizontal-grid   -->   
            <div class="horizontal-grid-wrap  fl-wrap full-height ">
                <!-- portfolio start -->
                <div   id="portfolio_horizontal_container" class="two-ver-columns lightgallery">
                    <!-- portfolio_item-->
                    <div class="portfolio_item web portfolio_item_second">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="{{url('fronted/images/folio/14.jpg')}}"    alt="">
                            <div class="grid-det">
                                <a href="{{url('fronted/images/folio/14.jpg')}}" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Design  </a> <a href="#"> Branding</a></div>
                                <div class="grid-det-item">
                                    <a href="portfolio-single.html" class="ajax grid-det_link">Travel  Clothes Website<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio_item end-->
                    <!-- portfolio_item-->
                    <div class="portfolio_item photography">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="{{url('fronted/images/folio/17.jpg')}}"    alt="">
                            <div class="grid-det">
                                <a href="{{url('fronted/images/folio/17.jpg')}}" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Design  </a> <a href="#"> Branding</a></div>
                                <div class="grid-det-item">
                                    <a href="portfolio-single.html" class="ajax grid-det_link">Personal Portfoio Website<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio_item end-->
                    <!-- portfolio_item-->
                    <div class="portfolio_item branding">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="{{url('fronted/images/folio/10.jpg')}}"    alt="">
                            <div class="grid-det">
                                <a href="{{url('fronted/images/folio/10.jpg')}}" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Design  </a> <a href="#"> Branding</a></div>
                                <div class="grid-det-item">
                                    <a href="portfolio-single.html" class="ajax grid-det_link">Online Clothes Shop<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio_item end-->                           
                    <!-- portfolio_item-->
                    <div class="portfolio_item uides portfolio_item_second">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="{{url('fronted/images/folio/15.jpg')}}"    alt="">
                            <div class="grid-det">
                                <a href="{{url('fronted/images/folio/15.jpg')}}" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Design  </a> <a href="#"> Branding</a></div>
                                <div class="grid-det-item">
                                    <a href="portfolio-single.html" class="ajax grid-det_link">Merc On Bensik<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio_item end-->                            
                    <!-- portfolio_item-->
                    <div class="portfolio_item photography web">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="{{url('fronted/images/folio/5.jpg')}}"    alt="">
                            <div class="grid-det">
                                <a href="{{url('fronted/images/folio/1.jpg')}}" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Design  </a> <a href="#"> Branding</a></div>
                                <div class="grid-det-item">
                                    <a href="portfolio-single.html" class="ajax grid-det_link">Ferarri Concept Design<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio_item end-->    
                    <!-- portfolio_item-->
                    <div class="portfolio_item web uides">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="{{url('fronted/images/folio/6.jpg')}}"    alt="">
                            <div class="grid-det">
                                <a href="{{url('fronted/images/folio/1.jpg')}}" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Design  </a> <a href="#"> Branding</a></div>
                                <div class="grid-det-item">
                                    <a href="portfolio-single.html" class="ajax grid-det_link">Agensy Portfolio<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio_item end-->
                    <!-- portfolio_item-->
                    <div class="portfolio_item photography">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="{{url('fronted/images/folio/7.jpg')}}"    alt="">
                            <div class="grid-det">
                                <a href="{{url('fronted/images/folio/1.jpg')}}" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Design  </a> <a href="#"> Branding</a></div>
                                <div class="grid-det-item">
                                    <a href="portfolio-single.html" class="ajax grid-det_link">Travel Outdoor Website<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="hiddec-anim"></div>
                        </div>
                    </div>
                    <!-- portfolio_item end-->                           
                    <!-- portfolio_item-->
                    <div class="portfolio_item uides">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="{{url('fronted/images/folio/13.jpg')}}"    alt="">
                            <div class="grid-det">
                                <a href="https://vimeo.com/22230948" class="grid-media-zoom   image-popup"><i class="far fa-play"></i></a>
                                <div class="grid-det_category"><a href="#">Design  </a> <a href="#"> Branding</a></div>
                                <div class="grid-det-item">
                                    <a href="portfolio-single.html" class="ajax grid-det_link">Lamborgini Video Project<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio_item end-->                            
                    <!-- portfolio_item-->
                    <div class="portfolio_item web branding">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="{{url('fronted/images/folio/3.jpg')}}"    alt="">
                            <div class="grid-det">
                                <a href="{{url('fronted/images/folio/3.jpg')}}" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Design  </a> <a href="#"> Branding</a></div>
                                <div class="grid-det-item">
                                    <a href="portfolio-single.html" class="ajax grid-det_link">Branding Presentation<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio_item end-->  
                    <!-- portfolio_item-->
                    <div class="portfolio_item branding">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="{{url('fronted/images/folio/1.jpg')}}"    alt="">
                            <div class="grid-det">
                                <a href="{{url('fronted/images/folio/1.jpg')}}" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Design  </a> <a href="#"> Branding</a></div>
                                <div class="grid-det-item">
                                    <a href="portfolio-single.html" class="ajax grid-det_link">Fitness Studio Website<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio_item end-->                              
                    <!-- portfolio_item-->
                    <div class="portfolio_item photography">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="{{url('fronted/images/folio/11.jpg')}}"    alt="">
                            <div class="grid-det">
                                <a href="{{url('fronted/images/folio/11.jpg')}}" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Design  </a> <a href="#"> Branding</a></div>
                                <div class="grid-det-item">
                                    <a href="portfolio-single.html" class="ajax grid-det_link">Photography Studio<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio_item end-->                                                           
                    <!-- portfolio_item-->
                    <div class="portfolio_item branding">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="{{url('fronted/images/folio/18.jpg')}}"    alt="">
                            <div class="grid-det">
                                <a href="{{url('fronted/images/folio/18.jpg')}}" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Design  </a> <a href="#"> Branding</a></div>
                                <div class="grid-det-item">
                                    <a href="portfolio-single.html" class="ajax grid-det_link">Travel Agensy Website<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio_item end-->                                                   
                </div>
                <!-- portfolio end -->
            </div>
            <!--horizontal-grid end -->
            <div class="hero-scroll-down-notifer">
                <div class="scroll-down-wrap ">
                    <div class="mousey">
                        <div class="scroller"></div>
                    </div>
                </div>
                <i class="far fa-angle-down"></i>
            </div>
            <div class="fs-folio-counter hor-scroll-counter">
                <div class="folio-counter">
                    <div class="num-album"><span></span></div>
                    <div class="all-album"></div>
                </div>
            </div>
            <div class="body-color-bg"></div>
            <div class="fs-pg-idicator_wrap hor-scroll-idicator color-bg">
                <div class="progress-indicator">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="-1 -1 44 44">
                        <circle cx="16" cy="16" r="15.9155"
                            class="progress-bar__background" />
                        <circle cx="16" cy="16" r="15.9155"
                            class="progress-bar__progress 
                            js-progress-bar" />
                    </svg>
                </div>
            </div>
        </div>
        <!-- content end--> 
        <!-- share-wrapper-->
        <div class="share-wrapper">
            <div class="close-share-btn"><i class="fal fa-long-arrow-left"></i></div>
            <div class="share-container fl-wrap  isShare"></div>
        </div>
        <!-- share-wrapper  end -->						
    </div>
    <!-- wrapper end -->
    <!-- cursor-->
    <div class="element">
        <div class="element-item"></div>
    </div>
    <!-- cursor end-->
</div>
<!-- Main end -->


@endsection
       

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
                        <li><span>01. Call </span> <a href="tel:+88858565">+88858565</a></li>
                        <li><span>02. Write </span> <a href="mailto:theside@domain.com">zonar@domain.com</a></li>
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
                        <div class="nav-footer"><span>&#169;  2020  /  All rights reserved. </span></div>
                        <div class="nav-holder-wrap_line"></div>
                        <div class="nav-holder-wrap_dec"></div>
                    </div>
                </div>
                <div class="nav-overlay"></div>
                <!-- navigation menu end  -->	
                <!-- content-->    
                <div class="content"  data-pagetitle="about me">
                    <div class="page-scroll-nav">
                        <nav class="scroll-init page-scroll-nav_wrap">
                            <ul class="no-list-style init_hidden_filter">
                                <li><a class="scroll-link fbgs act-sec" href="#sec1" data-bgtext="01"><span>About</span></a></li>
                                <li><a class="scroll-link fbgs" href="#sec2" data-bgtext="02"><span>Services</span></a></li>
                                <li><a class="scroll-link fbgs" href="#sec3" data-bgtext="03"><span>Team</span></a></li>
                                <li><a class="scroll-link fbgs" href="#sec4" data-bgtext="04"><span>Skills</span></a></li>
                                <li><a class="scroll-link fbgs" href="#sec5" data-bgtext="05"><span>Clients</span></a></li>
                            </ul>
                            <div class="psn_button act-filter"><i class="fal fa-sort"></i> FIlter </div>
                        </nav>
                    </div>
                    <!-- hero-section-dec-->                  
                    <div class="hero-section-dec color-bg">
                        <div class="progress-indicator">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="-1 -1 34 34">
                                <circle cx="16" cy="16" r="15.9155"
                                    class="progress-bar__background" />
                                <circle cx="16" cy="16" r="15.9155"
                                    class="progress-bar__progress 
                                    js-progress-bar" />
                            </svg>
                        </div>
                    </div>
                    <!-- hero-section-dec end--> 
                    <!--fixed-column-wrap-->
                    <div class="fixed-column-wrap">
                        <div class="pr-bg"></div>
                        <!--fixed-column-wrap-content-->
                        <div class="fixed-column-wrap-content">
                            <!--slideshow-container-->
                            <div class="slideshow-container">
                                <div class="slideshow-container_wrap fl-wrap full-height">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <!--ms_item-->
                                            <div class="swiper-slide">
                                                <div class="ms-item_fs fl-wrap">
                                                    <div class="bg par-elem"  data-bg="{{url('fronted/images/bg/10.jpg')}}"  ></div>
                                                </div>
                                            </div>
                                            <!--ms_item end-->
                                            <!--ms_item-->
                                            <div class="swiper-slide ">
                                                <div class="ms-item_fs fl-wrap">
                                                    <div class="bg par-elem"  data-bg="{{url('fronted/images/bg/8.jpg')}}"></div>
                                                </div>
                                            </div>
                                            <!--ms_item end-->
                                            <!--ms_item-->
                                            <div class="swiper-slide">
                                                <div class="ms-item_fs fl-wrap">
                                                    <div class="bg par-elem"  data-bg="{{url('fronted/images/bg/13.jpg')}}"></div>
                                                </div>
                                            </div>
                                            <!--ms_item end-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--slideshow-container end--> 
                            <div class="overlay"></div>
                            <div class="progress-bar-wrap bot-element">
                                <div class="progress-bar"></div>
                            </div>
                            <!--fixed-column-wrap_title-->
                            <div class="fixed-column-wrap_title first-tile_load">
                                <h2>About My<br> Studio</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                            </div>
                            <!--fixed-column-wrap_title end-->
                            <div class="fixed-column-dec"></div>
                            <div class="scroll-notifer">Scroll Down  </div>
                            <div class="section-counter">
                                <div class="sc_current"><span>01</span></div>
                                <div class="sc_total"></div>
                            </div>
                            <div class="fcwc-pagination fcwc-wrap"></div>
                        </div>
                        <!--fixed-column-wrap-content end-->                                     
                    </div>
                    <!--fixed-column-wrap end-->
                    <!--column-wrap--> 
                    <div class="column-wrap">
                        <!--column-wrap-container -->   
                        <div class="column-wrap-container fl-wrap">
                            <div class="col-wc_dec"></div>
                            <section class="scroll_sec" id="sec1">
                                <div class="container">
                                    <div class="section-title">
                                        <h3>Some   Words About Me  </h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.  </p>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="dec-img   fl-wrap">
                                                <img src="{{url('fronted/images/about.jpg')}}" class="respimg" alt="">
                                                <a class="video_link image-popup" href="https://vimeo.com/34741214"><i class="fas fa-play"></i><span>Play Story video</span></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="main-about fl-wrap">
                                                <h2>Innovative solutions to boost <br><span> your creative </span>  projects</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat fermentum.</p>
                                                <p> Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa.</p>
                                                <div class="facts-container fl-wrap">
                                                    <!-- inline-facts -->
                                                    <div class="inline-facts-wrap">
                                                        <div class="inline-facts">
                                                            <div class="milestone-counter">
                                                                <div class="stats animaper">
                                                                    <div class="num" data-content="0" data-num="145">0</div>
                                                                </div>
                                                            </div>
                                                            <h6>Finished projects</h6>
                                                        </div>
                                                    </div>
                                                    <!-- inline-facts end -->
                                                    <!-- inline-facts  -->
                                                    <div class="inline-facts-wrap">
                                                        <div class="inline-facts">
                                                            <div class="milestone-counter">
                                                                <div class="stats animaper">
                                                                    <div class="num" data-content="0" data-num="825">0</div>
                                                                </div>
                                                            </div>
                                                            <h6>Working hours</h6>
                                                        </div>
                                                    </div>
                                                    <!-- inline-facts end -->
                                                    <!-- inline-facts  -->
                                                    <div class="inline-facts-wrap">
                                                        <div class="inline-facts">
                                                            <div class="milestone-counter">
                                                                <div class="stats animaper">
                                                                    <div class="num" data-content="0" data-num="15">0</div>
                                                                </div>
                                                            </div>
                                                            <h6>Awards won</h6>
                                                        </div>
                                                    </div>
                                                    <!-- inline-facts end --> 
                                                </div>
                                                <a href="portfolio.html" class="btn ajax  color-bg  fl-btn"><span>My Portfolio</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="section-number"> <span>0</span>1. </div>
                            </section>
                            <!-- section end-->
                            <div class="section-separator fl-wrap"><span></span></div>
                            <!-- section  --> 
                            <section class="scroll_sec" id="sec2">
                                <div class="container">
                                    <div class="section-title">
                                        <h3>Services Provided</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.  </p>
                                    </div>
                                    <!--process-wrap  -->
                                    <div class="process-wrap fl-wrap">
                                        <div class="row">
                                            <div class=" col-sm-6">
                                                <div class="process-details">
                                                    <span class="pd-icon">
                                                    <i class="fal fa-desktop"></i>
                                                    </span>
                                                    <h4>Web Design</h4>
                                                    <div class="clearfix"></div>
                                                    <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor.</p>
                                                    <span class="process-numder">01.</span>
                                                    <div class="show-phdc"><i class="fal fa-plus"></i> <span>Details</span></div>
                                                    <div class="proces-details-content">
                                                        <div class="close-hidden_pdc"><i class="fal fa-times"></i></div>
                                                        <div class="proces-details-content-wrap">
                                                            <ul class="pdcw_list fl-wrap">
                                                                <li>Concept</li>
                                                                <li>Design</li>
                                                                <li>3D Modeling</li>
                                                            </ul>
                                                            <p>Cras mattis iudicium purus sit amet fermentum at nos hinc posthac, sitientis piros afros. Lorem ipsum dolor sit amet, consectetur adipisici elit, petierunt uti sibi concilium totius Galliae in diem sed eius mod tempor incidunt ut labore et dolore magna aliqua. Pellentesque habitant morbi tristique senectus et netus piros labore et dolore magna.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-sm-6">
                                                <div class="process-details">
                                                    <span class="pd-icon">
                                                    <i class="fab fa-pagelines"></i>
                                                    </span>
                                                    <h4>Branding</h4>
                                                    <div class="clearfix"></div>
                                                    <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor.</p>
                                                    <span class="process-numder">02.</span>
                                                    <div class="show-phdc"><i class="fal fa-plus"></i> <span>Details</span></div>
                                                    <div class="proces-details-content">
                                                        <div class="close-hidden_pdc"><i class="fal fa-times"></i></div>
                                                        <div class="proces-details-content-wrap">
                                                            <ul class="pdcw_list fl-wrap">
                                                                <li>Concept</li>
                                                                <li>Design</li>
                                                                <li>3D Modeling</li>
                                                            </ul>
                                                            <p>Cras mattis iudicium purus sit amet fermentum at nos hinc posthac, sitientis piros afros. Lorem ipsum dolor sit amet, consectetur adipisici elit, petierunt uti sibi concilium totius Galliae in diem sed eius mod tempor incidunt ut labore et dolore magna aliqua. Pellentesque habitant morbi tristique senectus et netus piros labore et dolore magna.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-sm-6">
                                                <div class="process-details">
                                                    <span class="pd-icon">
                                                    <i class="fal fa-mobile-android"></i>
                                                    </span>
                                                    <h4>UI/UX Design</h4>
                                                    <div class="clearfix"></div>
                                                    <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor.</p>
                                                    <span class="process-numder">03.</span>
                                                    <div class="show-phdc"><i class="fal fa-plus"></i> <span>Details</span></div>
                                                    <div class="proces-details-content">
                                                        <div class="close-hidden_pdc"><i class="fal fa-times"></i></div>
                                                        <div class="proces-details-content-wrap">
                                                            <ul class="pdcw_list fl-wrap">
                                                                <li>Concept</li>
                                                                <li>Design</li>
                                                                <li>3D Modeling</li>
                                                            </ul>
                                                            <p>Cras mattis iudicium purus sit amet fermentum at nos hinc posthac, sitientis piros afros. Lorem ipsum dolor sit amet, consectetur adipisici elit, petierunt uti sibi concilium totius Galliae in diem sed eius mod tempor incidunt ut labore et dolore magna aliqua. Pellentesque habitant morbi tristique senectus et netus piros labore et dolore magna.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-sm-6">
                                                <div class="process-details">
                                                    <span class="pd-icon">
                                                    <i class="fal fa-camera-alt"></i>
                                                    </span>
                                                    <h4>Photography</h4>
                                                    <div class="clearfix"></div>
                                                    <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor.</p>
                                                    <span class="process-numder">04.</span>
                                                    <div class="show-phdc"><i class="fal fa-plus"></i> <span>Details</span></div>
                                                    <div class="proces-details-content">
                                                        <div class="close-hidden_pdc"><i class="fal fa-times"></i></div>
                                                        <div class="proces-details-content-wrap">
                                                            <ul class="pdcw_list fl-wrap">
                                                                <li>Concept</li>
                                                                <li>Design</li>
                                                                <li>3D Modeling</li>
                                                            </ul>
                                                            <p>Cras mattis iudicium purus sit amet fermentum at nos hinc posthac, sitientis piros afros. Lorem ipsum dolor sit amet, consectetur adipisici elit, petierunt uti sibi concilium totius Galliae in diem sed eius mod tempor incidunt ut labore et dolore magna aliqua. Pellentesque habitant morbi tristique senectus et netus piros labore et dolore magna.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--process-wrap   end-->                                         
                                    <div class="srv-link-text fl-wrap">
                                        <h4>Ready to order your project ? Visit my contacts page :  </h4>
                                        <a href="contacts.html" class="btn ajax color-bg  fl-btn"><span>Contacts</span></a>
                                    </div>
                                </div>
                                <div class="section-number"> <span>0</span>2. </div>
                            </section>
                            <!-- section end-->
                            <div class="section-separator fl-wrap"><span></span></div>
                            <!--section -->
                            <section class="scroll_sec" id="sec3">
                                <div class="container">
                                    <div class="section-title">
                                        <h3>My Awesome Team</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.  </p>
                                    </div>
                                    <!--grid-carousel-wrap -->
                                    <div class="grid-carousel-wrap fl-wrap">
                                        <div class="grid-carousel fl-wrap">
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper">
                                                    <!-- team-box   --> 
                                                    <div class="swiper-slide">
                                                        <div class="team-box">
                                                            <div class="team-photo">
                                                                <div class="overlay"></div>
                                                                <img src="{{url('fronted/images/team/1.jpg')}}" alt="" class="respimg"> 	
                                                                <a href="#" class="team-contact_btn color-bg"><i class="fal fa-envelope"></i></a>
                                                                <div class="team-info-num">01.</div>
                                                                <ul class="team-social">
                                                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                                    <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="team-info">
                                                                <h3>David Gray</h3>
                                                                <h4>CEO / Developer</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- team-box   end--> 
                                                    <!-- team-box   --> 
                                                    <div class="swiper-slide">
                                                        <div class="team-box">
                                                            <div class="team-photo">
                                                                <div class="overlay"></div>
                                                                <img src="{{url('fronted/images/team/2.jpg')}}" alt="" class="respimg"> 	
                                                                <a href="#" class="team-contact_btn color-bg"><i class="fal fa-envelope"></i></a>
                                                                <div class="team-info-num">02.</div>
                                                                <ul class="team-social">
                                                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                                    <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="team-info">
                                                                <h3>Alica Limishko</h3>
                                                                <h4>Designer / UI-Ux</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- team-box   end-->
                                                    <!-- team-box   --> 
                                                    <div class="swiper-slide">
                                                        <div class="team-box">
                                                            <div class="team-photo">
                                                                <div class="overlay"></div>
                                                                <img src="{{url('fronted/images/team/3.jpg')}}" alt="" class="respimg"> 	
                                                                <a href="#" class="team-contact_btn color-bg"><i class="fal fa-envelope"></i></a>
                                                                <div class="team-info-num">03.</div>
                                                                <ul class="team-social">
                                                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                                    <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="team-info">
                                                                <h3>Kevin Brunty</h3>
                                                                <h4>Photographer / Designer</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- team-box   end-->                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gc-slider-cont-wrap">
                                            <div class="gc-slider-cont gc-slider-cont-next"><i class="fal fa-angle-right"></i></div>
                                            <div class="gc-slider-cont gc-slider-cont-prev"><i class="fal fa-angle-left"></i></div>
                                        </div>
                                    </div>
                                    <!--grid-carousel-wrap end -->
                                </div>
                                <div class="section-number"> <span>0</span>3. </div>
                            </section>
                            <!--section end-->     
                            <div class="section-separator fl-wrap"><span></span></div>
                            <!-- section  -->                      
                            <section class="scroll_sec" id="sec4">
                                <div class="container">
                                    <div class="section-title">
                                        <h3>Developer  and  Language  Skills</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.  </p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="skillbar-box animaper">
                                                <div class="pr-bg pr-bg-white"></div>
                                                <!-- skill 1-->
                                                <div class="custom-skillbar-title"><span>Photoshop</span></div>
                                                <div class="skill-bar-percent">95%</div>
                                                <div class="skillbar-bg" data-percent="95%">
                                                    <div class="custom-skillbar"></div>
                                                </div>
                                                <!-- skill 2-->
                                                <div class="custom-skillbar-title"><span>HTML/Css</span></div>
                                                <div class="skill-bar-percent">65%</div>
                                                <div class="skillbar-bg" data-percent="65%">
                                                    <div class="custom-skillbar"></div>
                                                </div>
                                                <!-- skill 3-->
                                                <div class="custom-skillbar-title"><span>3D MAX</span></div>
                                                <div class="skill-bar-percent">95%</div>
                                                <div class="skillbar-bg" data-percent="95%">
                                                    <div class="custom-skillbar"></div>
                                                </div>
                                                <!-- skill 4-->
                                                <div class="custom-skillbar-title"><span>PHP</span></div>
                                                <div class="skill-bar-percent">70%</div>
                                                <div class="skillbar-bg" data-percent="70%">
                                                    <div class="custom-skillbar"></div>
                                                </div>
                                                <!-- skill 5-->
                                                <div class="custom-skillbar-title"><span>Javascript</span></div>
                                                <div class="skill-bar-percent">60%</div>
                                                <div class="skillbar-bg" data-percent="60%">
                                                    <div class="custom-skillbar"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="piechart-holder animaper" data-skcolor="#F57500">
                                                <!-- 1  -->
                                                <div class="piechart">
                                                    <span class="chart" data-percent="85">
                                                    <span class="percent"></span>
                                                    </span>
                                                    <div class="clearfix"></div>
                                                    <h4>French</h4>
                                                </div>
                                                <!-- 1 end -->
                                                <!-- 2  -->
                                                <div class="piechart">
                                                    <span class="chart" data-percent="95">
                                                    <span class="percent"></span>
                                                    </span>
                                                    <div class="clearfix"></div>
                                                    <h4>Dutch</h4>
                                                </div>
                                                <!-- 2 end  -->
                                                <!-- 2  -->
                                                <div class="piechart">
                                                    <span class="chart" data-percent="55">
                                                    <span class="percent"></span>
                                                    </span>
                                                    <div class="clearfix"></div>
                                                    <h4>Portugese</h4>
                                                </div>
                                                <!-- 2 end  -->                                                 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="section-number"> <span>0</span>4. </div>
                            </section>
                            <!--section end-->
                            <div class="section-separator fl-wrap"><span></span></div>
                            <!--section  --> 
                            <section class="scroll_sec" id="sec5">
                                <div class="container">
                                    <div class="section-title">
                                        <h3>Clents And Testimonilas</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.  </p>
                                    </div>
                                    <div class="testimonilas-carousel-wrap fl-wrap">
                                        <div class="tc-button tc-button-next"><i class="fal fa-angle-right"></i></div>
                                        <div class="tc-button tc-button-prev"><i class="fal fa-angle-left"></i></div>
                                        <div class="testimonilas-carousel">
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper">
                                                    <!--testi-item-->
                                                    <div class="swiper-slide">
                                                        <div class="testi-item fl-wrap">
                                                            <div class="testi-avatar"><img src="{{url('fronted/images/avatar/1.jpg')}}" alt=""></div>
                                                            <div class="testimonilas-text fl-wrap">
                                                                <h3>Andy Dimasky</h3>
                                                                <p>"Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor. Duis autem vel eum  sit amet semiriure dolor consectetur adipiscing elit."</p>
                                                                <span class="testi-number">01.</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--testi-item end-->
                                                    <!--testi-item-->
                                                    <div class="swiper-slide">
                                                        <div class="testi-item fl-wrap">
                                                            <div class="testi-avatar"><img src="{{url('fronted/images/avatar/2.jpg')}}" alt=""></div>
                                                            <div class="testimonilas-text fl-wrap">
                                                                <h3>Frank Dellov</h3>
                                                                <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                                                <span class="testi-number">02.</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--testi-item end-->
                                                    <!--testi-item-->
                                                    <div class="swiper-slide">
                                                        <div class="testi-item fl-wrap">
                                                            <div class="testi-avatar"><img src="{{url('fronted/images/avatar/3.jpg')}}" alt=""></div>
                                                            <div class="testimonilas-text fl-wrap">
                                                                <h3>Centa Simpson</h3>
                                                                <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                                                <span class="testi-number">03.</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--testi-item end-->
                                                    <!--testi-item-->
                                                    <div class="swiper-slide">
                                                        <div class="testi-item fl-wrap">
                                                            <div class="testi-avatar"><img src="{{url('fronted/images/avatar/4.jpg')}}" alt=""></div>
                                                            <div class="testimonilas-text fl-wrap">
                                                                <h3>Nicolo Svensky</h3>
                                                                <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                                                <span class="testi-number">04.</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--testi-item end-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tc-pagination"></div>
                                    </div>
                                    <!-- client-list -->
                                    <div class="fl-wrap client-list">
                                        <ul class="">
                                            <li><a href="#" target="_blank"><img src="{{url('fronted/images/clients/1.png')}}" alt=""></a></li>
                                            <li><a href="#" target="_blank"><img src="{{url('fronted/images/clients/2.png')}}" alt=""></a></li>
                                            <li><a href="#" target="_blank"><img src="{{url('fronted/images/clients/3.png')}}" alt=""></a></li>
                                            <li><a href="#" target="_blank"><img src="{{url('fronted/images/clients/4.png')}}" alt=""></a></li>
                                        </ul>
                                        <!-- client-list end-->
                                    </div>
                                </div>
                                <div class="section-number"> <span>0</span>5. </div>
                            </section>
                            <!--section end-->                 
                        </div>
                        <!--column-wrap-container end -->          
                    </div>
                    <!--column-wrap end-->    
                    <div class="to-top-btn to-top"><i class="fal fa-long-arrow-up"></i></div>
                </div>
                <!-- content end--> 
                <div class="hero-scroll-down-notifer">
                    <div class="scroll-down-wrap ">
                        <div class="mousey">
                            <div class="scroller"></div>
                        </div>
                    </div>
                    <i class="far fa-angle-down"></i>
                </div>
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
     
        @endsection
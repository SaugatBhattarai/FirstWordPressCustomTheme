<?php get_header(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12  col-head-image">
            <div class="header-image">
                <img src="<?php echo get_template_directory_uri().'/images/imageheader.jpg'?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width;?>" />
                <div class="middle-content">
                    <span class="art-text-abs"> Art is Eternal Happiness</span>
                    <button type="button" class="btn btn-primary btn-lg btn-in-image">WORK WITH US </button>
                    <button type="button" class="btn btn-primary btn-lg btn-in-image-scroll-down"> Scroll down <i class="fa fa-arrow-down" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row what-we-do">
        <div class="col-xs-12">
            <div class="what-we-do-top">
                <div class="what-we-do-main">
                    <span>WHAT WE DO</span>
                </div>
                <div class="what-we-do-detail">
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur</span>
                </div>
            </div>
        </div>
        <div class="row image-detail-what">
            <div class="col-xs-12 col-md-4 col-lg-4 col-sm-4 col-img-justify">
                <div class="div-image-what">
                    <img class="src-image" src="<?php echo get_template_directory_uri().'/images/wordpressin.jpg'?>" alt="div-camera">
                </div>
                <div class="div-image-title">
                    <span>Lorem Ipsum</span>
                </div>
                <div class="div-image-detail">
                        This is photography detail by Saugat Bhattarai.Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet.
                </div>
                <div class="div-learn-more">
                    <button type="button" class="btn btn-primary btn-sm">Learn More</button>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 col-lg-4 col-sm-4 col-img-justify">
                <div class="div-image-what">
                    <img class="src-image" src="<?php echo get_template_directory_uri().'/images/wordpressin.jpg'?>" alt="div-camera">
                </div>
                <div class="div-image-title">
                    <span>Lorem Ipsum</span>
                </div>
                <div class="div-image-detail">
                    This is photography detail by Saugat Bhattarai.Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet.
                </div>
                <div class="div-learn-more">
                    <button type="button" class="btn btn-primary btn-sm">Learn More</button>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 col-lg-4 col-sm-4 col-img-justify">
                <div class="div-image-what">
                    <img class="src-image" src="<?php echo get_template_directory_uri().'/images/wordpressin.jpg'?>" alt="div-camera">
                </div>
                <div class="div-image-title">
                    <span>Lorem Ipsum</span>
                </div>
                <div class="div-image-detail">
                    This is photography detail by Saugat Bhattarai.Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet.
                </div>
                <div class="div-learn-more">
                    <button type="button" class="btn btn-primary btn-sm">Learn More</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--our latest work section-->
<section class="our-latest-work">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-work-header-col">
                        <div class="latest-work-header">
                            <h1>OUR LATEST WORK</h1>
                        </div>
                        <div class="latest-work-detail">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="margin-top-tabs">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#photography">Photography</a></li>
                            <li><a data-toggle="tab" href="#design">Design</a></li>
                            <li><a data-toggle="tab" href="#print">Print</a></li>
                        </ul>
                    </div>

                    <div class="tab-content">
                        <div id="photography" class="tab-pane fade in active">
                            <h3>Photograhpy</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div id="design" class="tab-pane fade">
                            <h3>Design</h3>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div id="print" class="tab-pane fade">
                            <h3>Print</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
        </div>
    </div>
</section>
<div class="container-fluid">
    <div class="row">

    </div>
</div>
<div class="container-fluid">
    <div class="row testimonials">
        <div class="col-sm-12">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner carousel-display-size" role="listbox">
                    <div class="item active">
                        <img class="img-responsive carousel-image-inside" src="<?php echo get_template_directory_uri().'/images/c1.jpg'?>" alt="saugat bhattarai" width="1000" height="450">
                        <div class="carousel-caption">
                            <h3>Saugat Bhattarai</h3>
                            <p>Beatiful flowers in Kolymbari, Crete.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-responsive carousel-image-inside" src="<?php echo get_template_directory_uri().'/images/c3.jpg'?>" alt="saugat bhattarai" width="1000" height="450">
                        <div class="carousel-caption">
                            <h3>Saugat Bhattarai2</h3>
                            <p>Beatiful flowers in Kolymbari, Crete.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-responsive carousel-image-inside" src="<?php echo get_template_directory_uri().'/images/c4.jpg'?>" alt="saugat bhattarai" width="1000" height="450">
                        <div class="carousel-caption">
                            <h3>Saugat Bhattarai3</h3>
                            <p>Beatiful flowers in Kolymbari, Crete.</p>
                        </div>
                    </div>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<section class="our-happy-client">
    <div class="our-happy-client-top">
        <div class="our-happy-client-main">
            <span>OUR HAPPY CLIENT</span>
        </div>
        <div class="our-happy-client-sub">
           <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur</span>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row our-happy-client-row">
            <div class="col-md-3 col-sm-3 col-xm-3 our-happy-client-col">
                <img class="src-image" src="<?php echo  get_template_directory_uri().'/images/google.png'?>" alt="google logo">
            </div>
            <div class="col-md-3 col-sm-3 col-xm-3 our-happy-client-col">
                <img class="src-image" src="<?php echo  get_template_directory_uri().'/images/yahoo.png'?>" alt="yahoo logo" >
            </div>
            <div class="col-md-3 col-sm-3 col-xm-3 our-happy-client-col">
                <img class="src-image" src="<?php echo  get_template_directory_uri().'/images/microsoft.png'?>" alt="microsoft logo" >
            </div>
            <div class="col-md-3 col-sm-3 col-xm-3 our-happy-client-col">
                <img class="src-image" src="<?php echo  get_template_directory_uri().'/images/intel.png'?>" alt="intel logo" >
            </div>
            <div class="col-md-3 col-sm-3 col-xm-3 our-happy-client-col">
                <img class="src-image" src="<?php echo  get_template_directory_uri().'/images/qualcomm.png'?>" alt="qualcomm logo" >
            </div>
            <div class="col-md-3 col-sm-3 col-xm-3  our-happy-client-col">
                <img class="src-image" src="<?php echo  get_template_directory_uri().'/images/cisco.png'?>" alt="cisco logo">
            </div>
            <div class="col-md-3 col-sm-3 col-xm-3 our-happy-client-col">
                <img class="src-image" src="<?php echo  get_template_directory_uri().'/images/apple.png'?>" alt="apple logo">
            </div>
            <div class="col-md-3 col-sm-3 col-xm-3 our-happy-client-col">
                <img class="src-image" src="<?php echo  get_template_directory_uri().'/images/asus.png'?>" alt="asus logo">
            </div>
        </div>
        <div class="see-all">
            <button type="button" class="btn btn-primary see-all-btn">See all client  <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
        </div>
    </div>
</section>
<section class="meet-the-team">
    <div class="section-top">
        <div class="section-head">
            <span>MEET THE TEAM</span>
        </div>
        <div class="section-subhead">
            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur saugat</span>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row profile-container">
                <div class="col-md-12 person-super">
                    <div class="person">
                        <img class="img-circle person-profile" src="<?php echo  get_template_directory_uri().'/images/saugat.jpg'?>" alt="Saugat your pp">
                        <div class="person-line"></div>
                        <div class="person-name">Krisna Wijaya</div>
                        <div class="social-icon-coll">
                            <div class="social-icon">
                                <i class="fa fa-facebook icon-square" aria-hidden="true"></i>
                                <i class="fa fa-twitter icon-square"  aria-hidden="true"></i>
                                <i class="fa fa-linkedin icon-square" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="person">
                        <img class="img-circle person-profile" src="<?php echo  get_template_directory_uri().'/images/saugat.jpg'?>" alt="Saugat your pp">
                        <div class="person-line"></div>
                        <div class="person-name">Gobriel Yoshua</div>
                        <div class="social-icon-coll">
                            <div class="social-icon">
                                <i class="fa fa-facebook icon-square" aria-hidden="true"></i>
                                <i class="fa fa-twitter icon-square"  aria-hidden="true"></i>
                                <i class="fa fa-linkedin icon-square" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="person">
                        <img class="img-circle person-profile" src="<?php echo  get_template_directory_uri().'/images/saugat.jpg'?>" alt="Saugat your pp">
                        <div class="person-line"></div>
                        <div class="person-name">Adik N.K.L</div>
                        <div class="social-icon-coll">
                            <div class="social-icon">
                                <i class="fa fa-facebook icon-square" aria-hidden="true"></i>
                                <i class="fa fa-twitter icon-square"  aria-hidden="true"></i>
                                <i class="fa fa-linkedin icon-square" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="person">
                        <img class="img-circle person-profile" src="<?php echo  get_template_directory_uri().'/images/saugat.jpg'?>" alt="Saugat your pp">
                        <div class="person-line"></div>
                        <div class="person-name">Zan D.J.</div>
                        <div class="social-icon-coll">
                            <div class="social-icon">
                                <i class="fa fa-facebook icon-square" aria-hidden="true"></i>
                                <i class="fa fa-twitter icon-square"  aria-hidden="true"></i>
                                <i class="fa fa-linkedin icon-square" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="person">
                        <img class="img-circle person-profile" src="<?php echo  get_template_directory_uri().'/images/saugat.jpg'?>" alt="Saugat your pp">
                        <div class="person-line"></div>
                        <div class="person-name">Faizal Febri</div>
                        <div class="social-icon-coll">
                            <div class="social-icon">
                                <i class="fa fa-facebook icon-square" aria-hidden="true"></i>
                                <i class="fa fa-twitter icon-square"  aria-hidden="true"></i>
                                <i class="fa fa-linkedin icon-square" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="meet-team-footer">

    <div class="container-fluid meet-the-team-footer">
        <div class="btn-meet">
            <button type="button" class="btn btn-primary btn-work">WORK WITH US</button>
        </div>
    </div>
</section>

<?php get_footer(); ?>

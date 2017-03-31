<?php get_header(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12  col-head-image">
            <div class="header-image">
                <img <?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width;?>" />
                <div class="middle-content">
                    <span class="art-text-abs"> Art is Eternal Happiness</span>
                    <button type="button" class="btn btn-primary btn-lg btn-in-image">WORK WITH US</button>
                    <button type="button" class="btn btn-primary btn-lg btn-in-image-scroll-down">Scroll down</button>
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
                    <img class="src-image" src="wp-content/themes/practice theme/images/wordpressin.jpg" alt="div-camera">
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
                    <img class="src-image" src="wp-content/themes/practice theme/images/wordpressin.jpg" alt="div-camera">
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
                    <img class="src-image" src="wp-content/themes/practice theme/images/wordpressin.jpg" alt="div-camera">
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
                        <img class="img-responsive" src="wp-content/themes/practice theme/images/c1.jpg" alt="saugat bhattarai" width="400" height="320">
                        <div class="carousel-caption">
                            <h3>Saugat Bhattarai</h3>
                            <p>Beatiful flowers in Kolymbari, Crete.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="wp-content/themes/practice theme/images/c3.jpg" alt="saugat bhattarai" width="400" height="320">
                        <div class="carousel-caption">
                            <h3>Saugat Bhattarai2</h3>
                            <p>Beatiful flowers in Kolymbari, Crete.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="wp-content/themes/practice theme/images/c4.jpg" alt="saugat bhattarai" width="400" height="320">
                        <div class="carousel-caption">
                            <h3>Saugat Bhattarai3</h3>
                            <p>Beatiful flowers in Kolymbari, Crete.</p>
                        </div>
                    </div>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="false"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="false"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

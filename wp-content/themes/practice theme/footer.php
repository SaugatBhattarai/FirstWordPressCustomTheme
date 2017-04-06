        <footer>
            <div class="container-fluid">
                <div class="row footer-footer">
                    <?php get_sidebar();?>
                </div>
                    <div class="row footer-as-seen-on">
                        <div class="col-sm-12 col-md-12 as-seen-on-title">
                            <span>AS SEEN ON</span>
                        </div>
                        <div class="as-seen-on-logo">
                            <div class="col-sm-6 col-md-3">
                                <img src="<?php echo get_template_directory_uri() . '/images/cnn.png' ?>" alt="CNN NEWS LOGO" width="200px" height="100px">
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <img src="<?php echo get_template_directory_uri() . '/images/fox-news.png' ?>" alt="FOX NEWS LOGO" width="200px" height="100px">
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <img src="<?php echo get_template_directory_uri() . '/images/bbcnews.png' ?>" alt="CNN NEWS LOGO" width="200px" height="100px">
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <img src="<?php echo get_template_directory_uri() . '/images/the-new-york-times.png' ?>" alt="CNN NEWS LOGO" width="200px" height="100px">
                            </div>
                        </div>
                    </div>
                <div class="col-sm-12">
                    <div class="footer-mast-head">
                        <span>made with &hearts; by Saugat:)</span>
                    </div>
                </div>
            </div>
        <!--    wordpress default-->
            <?php wp_footer();?>
        </footer>

    </div> <!-- end of .container-fluid class-->
</body>
</html>
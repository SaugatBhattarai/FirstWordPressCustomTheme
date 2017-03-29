<?php
/*
  * Template Name: Home template
 */
get_header();

?>
<div class="row">

    <div class="image-header">
        <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
    </div>
    <div class="header-middle-style">
        <div class="div-middle-text">
            <span class="middle-text">Art is Eternal Happiness</span>
        </div>
        <div class="div-middle-button-text">
            <a href="#" class="btn btn-default" role="button">WORK WITH US</a>
        </div>
    </div>
<?php get_footer(); ?>
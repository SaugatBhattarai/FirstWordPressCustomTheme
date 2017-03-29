<?php
/*
  * Template Name: Page No Title
 */
get_header(); ?>
<?php
if ( have_posts() ):
    while( have_posts() ): the_post(); ?>
        <h1>My Static Status:</h1>
        <small> Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>,<?php the_category(); ?> </small>
        <p> <?php the_content(); ?></p>
        <hr>
    <?php  endwhile;
endif;
?>
<?php get_footer(); ?>

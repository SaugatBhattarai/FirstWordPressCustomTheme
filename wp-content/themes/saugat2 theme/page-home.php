<?php get_header(); ?>
    <div class="row">
        <div class="col-xs-12">
            <?php
            $args = array(
                'type' => 'post',
                'posts_per_page' => 3,
                'category__in' => array(11,12,13),
                'category__not_in' => array(14)
            );
                $lastBlog = new WP_Query($args);
                if ( $lastBlog->have_posts() ):
                    while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
                        <div class="col-xs-12 col-xs-4">
                            <?php get_template_part('content','featured');?>
                        </div>
                    <?php  endwhile;
                endif;

                wp_reset_postdata();
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-8">
            <?php
            if ( have_posts() ):
                while( have_posts() ): the_post(); ?>
                    <?php get_template_part('content', get_post_format());?>
                <?php  endwhile;
            endif;

            //OTHER OTHER TWO EXCEPT FIRST ONE
//            $args = array(
//                'type' => 'post',
//                'posts_per_page' => 2,
//                'offset' => 1,
//            );
//            $lastBlog = new WP_Query($args);
//            if ( $lastBlog->have_posts() ):
//                while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
<!--                    --><?php //get_template_part('content', get_post_format());?>
<!--                --><?php // endwhile;
//            endif;
//            wp_reset_postdata();


//            //PRINT BY CATEGORY
////            $lastBlog = new WP_Query('type=post&posts_per_page=-1&cat=13');
//            $lastBlog = new WP_Query('type=post&posts_per_page=-1&category_name=news');
//            if ( $lastBlog->have_posts() ):
//                while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
<!--                    --><?php //get_template_part('content', get_post_format());?>
<!--                --><?php // endwhile;
//            endif;
//
//            wp_reset_postdata();
            ?>
        </div>

        <div class="col-xs-12 col-sm-4">
            <?php get_sidebar(); ?>
        </div>

    </div>
<?php get_footer(); ?>
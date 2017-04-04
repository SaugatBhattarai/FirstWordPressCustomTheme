<article id= "post-<?php the_ID();?>" <?php post_class();?>>
    <div class="row">
        <?php if ( has_post_thumbnail() ): ?>
            <div class="col-xs-12 col-sm-4">
                <div class="thumbnail"><?php the_post_thumbnail('thumbnail');?></div>
            </div>
        <?php else: ?>
            <div class="col-xs-12">
                <p> <?php the_content(); ?></p>
            </div>
        <?php endif ?>
    </div>
</article>

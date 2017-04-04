<article id= "post-<?php the_ID();?>" <?php post_class();?>>
    <?php if ( has_post_thumbnail() ): ?>
        <div class="thumbnail"><?php the_post_thumbnail('thumbnail');?></div>
    <?php endif ?>
</article>
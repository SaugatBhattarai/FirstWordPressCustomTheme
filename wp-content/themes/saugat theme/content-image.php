<article id= "post-<?php the_ID();?>" <?php post_class();?>>
    <h3>CONTENT IMAGE</h3>
    <div class="thumbnail-img"><?php if ( has_post_thumbnail() ) {
            the_post_thumbnail('medium');
        }
        ?></div>
    <hr>
</article>
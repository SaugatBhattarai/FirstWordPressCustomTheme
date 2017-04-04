<!--<div id="sidebar" class="widgets-area">-->
<!--    --><?php //dynamic_sidebar('sidebar-1'); ?>
<!--</div>-->
<div id="sidebar" class="row widgets-area">

<!--    --><?php //if(is_active_sidebar(sidebar-1)): ?>
        <div class="col-md-4">
                <?php dynamic_sidebar('sidebar-1'); ?>
        </div>
<!--    --><?php //endif;?>

<!--    --><?php //if(is_active_sidebar(sidebar-2)): ?>
    <div class="col-md-4">
            <?php dynamic_sidebar('sidebar-2'); ?>
    </div>
<!--    --><?php //endif;?>

<!--    --><?php //if(is_active_sidebar(sidebar-3)): ?>
    <div class="col-md-4">
            <?php dynamic_sidebar('sidebar-3'); ?>
    </div>
<!--    --><?php //endif;?>
</div>

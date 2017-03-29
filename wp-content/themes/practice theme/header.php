<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Practice theme</title>
    <?php wp_head();?>
</head>
<?php
    if(is_front_page()):
        $practice_classes = array('practice-class','my-class');
    else:
        $practice_classes = array('no-practice-class','no-my-class');
    endif;
?>
<body <?php body_class($practice_classes); ?>>

<?php wp_nav_menu(array(
    'theme_location'=>'primary',
    'container' => false
));
?>



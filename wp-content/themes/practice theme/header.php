<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Practice theme</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <nav class="navbar navbar-default">
                <div class="container-fluid  container-fluid-first">
                    <!-- Brand and toggle get grouped for better mobile display -->
                        <ul type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </ul>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <?php
                        wp_nav_menu(array(
                            'theme_location'=>'primary',
                            'container' => false,
                            'menu_class' => 'nav navbar-nav navbar-left'
                        ));
                        ?>
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">Switch</a>
                        </div>
                        <form class="navbar-form navbar-right search" role="search">
                            <div class="input-group add-on">
                                <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>  <!-- /.navbar-collapse -->

                </div><!-- /.container-fluid -->
            </nav>
        </div>
    </div>


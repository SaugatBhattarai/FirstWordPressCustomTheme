<!DOCTYPE html>
<html>
<head>
	<title>Saugat Theme</title>
    <?php wp_head();?>
</head>
<?php
//    if(is_home()):
    if(is_front_page()):
        $saugat_class = array('saugat_class','my-class');
    else:
        $saugat_class = array('no-saugat-class');
    endif;

?>
<body <?php body_class($saugat_class);?>>
<header class="header-main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <?php
                            wp_nav_menu(array(
                                    'theme_location'=>'primary',
                                    'container' => false,
                                    'menu_class' => 'nav navbar-nav navbar-left'
                                ));
                            ?>
                            <div class="nav navbar-nav navbar-left">
                                <a class="navbar-brand logo-center" href="#">Switch</a>
                            </div>
                            <form class="navbar-form navbar-right">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                                <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                            </form>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </div>
        <div class="image-header">
            <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
        </div>
        <div class="middle-middle-text">
            <div>
                <span class="middle-text">Art is Eternal Happiness</span>
            </div>

        </div>
</header>


<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<style type="text/css">
    font-weight:
</style>
</body>
</html>
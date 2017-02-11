<!DOCTYPE html>
<html lang="en" class="full-height">
<head>
    <meta charset="utf-8"/>
    <!--    <title>TEDxTehran 2016</title>-->

    <!-- Meta Datas -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="ArtStyles Brand (ArtTemplate, ArtIcons)"/>
    <meta name="keywords"
          content="agency, business, company, corporate, multipurpose, portfolio, projects, responsive, startup ,modern,template"/>
    <meta name="description" content="Multipurpose Business Agency/Personal Portfolio"/>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="144x144"
          href="<?php bloginfo('template_directory'); ?>/img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114"
          href="<?php bloginfo('template_directory'); ?>/img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72"
          href="<?php bloginfo('template_directory'); ?>/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="57x57"
          href="<?php bloginfo('template_directory'); ?>/img/favicons/apple-touch-icon-57x57.png">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicons/favicon.png"
          type="image/png">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css">

    <!-- JavaScripts -->
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.12.3.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.js" type="text/javascript"></script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>

</head>
<body>
<!-- Header -->
<header class="base-header fixed-header">
    <div class="container">
        <!-- Menu -->
        <div class="row">
            <div class="col-md-4">
                <div class="row row-logo">
                    <div class="logo">
                        <a href="<?php echo get_home_url(); ?>">
                            <img src="<?php bloginfo('template_directory'); ?>/img/TEDx-Logo_240pix_black.png"
                                 alt="TEDxTehran">
                        </a>
                    </div>
                </div>
            </div>
            <!DOCTYPE html>
<html lang="en" class="full-height">
<head>
    <meta charset="utf-8"/>
    <!--    <title>TEDxTehran 2016</title>-->

    <!-- Meta Datas -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="ArtStyles Brand (ArtTemplate, ArtIcons)"/>
    <meta name="keywords"
          content="agency, business, company, corporate, multipurpose, portfolio, projects, responsive, startup ,modern,template"/>
    <meta name="description" content="Multipurpose Business Agency/Personal Portfolio"/>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="144x144"
          href="<?php bloginfo('template_directory'); ?>/img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114"
          href="<?php bloginfo('template_directory'); ?>/img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72"
          href="<?php bloginfo('template_directory'); ?>/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="57x57"
          href="<?php bloginfo('template_directory'); ?>/img/favicons/apple-touch-icon-57x57.png">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicons/favicon.png"
          type="image/png">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css">

    <!-- JavaScripts -->
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.12.3.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.js" type="text/javascript"></script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>

</head>
<body>
<!-- Header -->
<header class="base-header fixed-header">
    <div class="container">
        <!-- Menu -->
        <div class="row">
            <div class="col-md-4">
                <div class="row row-logo">
                    <div class="logo">
                        <a href="<?php echo get_home_url(); ?>">
                            <img src="<?php bloginfo('template_directory'); ?>/img/TEDx-Logo_240pix_black.png"
                                 alt="TEDxTehran">
                        </a>
                    </div>
                </div>
            </div>
                 <div class="col-md-8">
                    <nav class="navbar main-nav">
                        <div class="navbar-header">
                            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        </div>
                        <div class="collapse navbar-collapse">
                            <?php            
                            $main_menu = array(
                            'theme_location'  => 'primary',
                            'menu' => 'top_menu',
                            'depth' => 2,
                            'container' => false,
                            'menu_class' => 'nav navbar-nav',
                            //Process nav menu using our custom nav walker
                            'walker' => new wp_bootstrap_navwalker()
                            );
                            wp_nav_menu( $main_menu );
                            ?>
                        </div>
                    </nav>
                </div>
        </div>
        <!-- /Menu -->

    </div>
</header>
<!-- /Header --> 
            <div class="col-md-8">
                <nav class="navbar main-nav">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse"
                                data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <?php
                    // Primary navigation menu.
                    wp_nav_menu(array(
                        'container_class' => 'collapse navbar-collapse',
                        'menu_class' => 'nav navbar-nav',
                        'theme_location' => 'primary',
                    ));
                    ?>
                </nav>
            </div>
        </div>
        <!-- /Menu -->

    </div>
</header>
<!-- /Header --> 
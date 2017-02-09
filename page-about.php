<?php /*
  Template Name: About Us
Template Post Type: post, page, event
 */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>TEDxTehran | About Us </title>

    <!-- Meta Data -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="ArtStyles Brand (ArtTemplate, ArtIcons)"/>
    <meta name="keywords"
          content="agency, business, company, corporate, multipurpose, portfolio, projects, responsive, startup ,modern,template"/>
    <meta name="description" content="Multipurpose Business Agency/Personal Portfolio"/>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="144x144"
          href="<?php bloginfo('template_directory'); ?>/images/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114"
          href="<?php bloginfo('template_directory'); ?>/images/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72"
          href="<?php bloginfo('template_directory'); ?>/images/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="57x57"
          href="<?php bloginfo('template_directory'); ?>/images/favicons/apple-touch-icon-57x57.png">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicons/favicon.png"
          type="image/png">

    <!-- Fonts -->
    <!--
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    -->
    <link type="text/css" media="all"
          href="<?php bloginfo('template_directory'); ?>/fonts/font-awesome-4.6.3/css/font-awesome.min.css"
          rel="stylesheet"/>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/animate.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/about.css"/>

    <!-- JavaScripts -->
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.12.3.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.js" type="text/javascript"></script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Header -->
<header class="base-header fixed-header">
    <div class="container">
        <!-- Menu -->
        <div class="row">
            <div class="col-md-4">
                <div class="row row-logo">
                    <div class="logo"><a href="index.html"><img
                                src="<?php bloginfo('template_directory'); ?>/images/TEDx-Logo_240pix_black.png"
                                alt="TEDxTehran"></a></div>
                </div>
            </div>
            <div class="col-md-8">
                <nav class="navbar main-nav">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse"
                                data-target=".navbar-collapse"><span class="icon-bar"></span> <span
                                class="icon-bar"></span> <span class="icon-bar"></span></button>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="index.html#">Events
                                    <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="event.html">2013</a></li>
                                    <li><a href="event.html">2014</a></li>
                                    <li><a href="event.html">2015</a></li>
                                    <li><a href="event.html">2016</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="index.html#">Team
                                    <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="team.html">2013</a></li>
                                    <li><a href="team.html">2014</a></li>
                                    <li><a href="team.html">2015</a></li>
                                    <li><a href="team.html">2016</a></li>
                                    <li><a href="team.html">2017</a></li>
                                </ul>
                            </li>
                            <li><a href="contacts.html">Blog</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="citizenx.html">CitizenX</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- /Menu -->
    </div>
</header>
<!-- /Header -->

<!-- About -->
<section class="section-white section-salutation about-top">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="text-salutation">
                    <div class="panel-group" id="accordion">
                        <?php
                        $args = array(
                            'post_type' => 'about-page-info',
                            'orderby' => 'menu_order',
                            'order' => 'ASC'
                        );
                        $i = 1;
                        $custom_query = new WP_Query($args);
                        while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

                            <div class="panel panel-style">
                                <div class="panel-heading <?php if ($i == 1) echo "active"; ?>">
                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                               href="#<?php echo "collapse-" . $i; ?>"><?php the_title(); ?>
                                            <span></span></a></h4>
                                </div>
                                <div id="<?php echo "collapse-" . $i; ?>"
                                     class="panel-collapse collapse <?php if ($i == 1) echo "in"; ?>">
                                    <div class="panel-body"> <?php the_content(); ?> </div>
                                </div>
                            </div>

                            <?php $i++; ?>

                        <?php endwhile; ?>


                        <!--
                        <div class="panel panel-style">
                          <div class="panel-heading">
                            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="index.html#collapseFour">What is TEDxYouth?<span></span></a> </h4>
                          </div>
                          <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body"> Etiam elit felis, porta ut massa in, consectetur finibus nibh. Vestibulum in efficitur velit. Proin mollis est in risus faucibus, nec finibus mauris vehicula. Duis at eleifend dui. Maecenas in dui eget erat ullamcorper dignissim nec sit amet tortor. </div>
                          </div>
                        </div>
                        -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 about-right">
                <?php
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
                ?>
            </div>
        </div>
    </div>
</section>
<!-- /About -->

<!-- Socials -->
<section class="section event-join about-social">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <?php

                $args = array(
                    'post_type' => 'social-links',
                    'orderby' => 'menu_order',
                    'order' => 'ASC'
                );
                $i = 1;
                $custom_query = new WP_Query($args);
                while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

                    <div class="abo-social col-sm-12 col-md-2 <?php if ($i == 1) echo "col-md-offset-1"; ?>">
                        <div class="item-join text-center">
                            <a href="<?php echo wp_strip_all_tags(get_the_excerpt()); ?>"><i class="fa" aria-hidden="true"></i></a>
                            <h5 class="animated fadeIn abt-social" id=""><?php the_title(); ?></h5>
                        </div>
                    </div>

                    <?php $i++; ?>
                <?php endwhile; ?>

                <script type="application/javascript">
                    $(document).ready(function () {
                        $(".abo-social a").each(function () {
                            var href = $(this).attr('href');
                            if (href.includes('linkedin')) {
                                $(this).find('i').addClass('fa-linkedin');
                            }
                            else if (href.includes('instagram')) {
                                $(this).find('i').addClass('fa-instagram');
                            }
                            else if (href.includes('twitter')) {
                                $(this).find('i').addClass('fa-twitter');
                            }
                            else if (href.includes('flickr')) {
                                $(this).find('i').addClass('fa-flickr');
                            }
                            else if (href.includes('facebook')) {
                                $(this).find('i').addClass('fa-facebook');
                            }
                            else {
                                $(this).find('i').addClass('fa-linkedin');
                            }
                        });
                    });
                </script>

            </div>
        </div>
    </div>
</section>
<!-- /Socials -->


<!-- Press -->
<section class="section section-red free-started">
    <div class="container">
        <!-- Title -->
        <div class="row">
            <?php while (have_posts()) : the_post(); ?>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <h2 id="press-title" class="title-section title-section-left"><?php the_field('press_title') ?></h2>
                    <?php the_field('press_info') ?>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6">
                    <img id="icon-press" class="img-responsive"
                         src="<?php bloginfo('template_directory'); ?>/images/icon-press.svg" alt="Press">
                </div>
            <?php endwhile; ?>
        </div>
        <!-- /Title -->
    </div>
</section>
<!-- /Press -->

<!-- Footer -->
<footer class="base-footer">
    <div class="container copy">
        <div class="row">
            <div class="col-sm-8 col-md-8">
                <p>This independent TEDx event is operated under license from TED. | Copyright © 2017 TEDxTehran</p>
            </div>
            <div class="col-sm-4 col-md-4 text-right">
                <ul class="list-unstyled no-list-style list-inline list-socials">
                    <li><a href="index.html#demo"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="index.html#demo"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="index.html#demo"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="index.html#demo"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- /Footer -->

<!-- Popup -->
<div id="dialog" class="zoom-anim-dialog mfp-hide">
    <h2 class="title-page-left">Notify Me!</h2>
    <p>Leave your email address and we will notify you about all the news and developments. Stay with us!</p>
</div>
<!-- /Popup -->

<!-- JavaScripts -->
<script src="<?php bloginfo('template_directory'); ?>/js/plugins.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/common.js" type="text/javascript"></script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript"> (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter38122770 = new Ya.Metrika({
                    id: 38122770,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    webvisor: true
                });
            } catch (e) {
            }
        });
        var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () {
            n.parentNode.insertBefore(s, n);
        };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";
        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks"); </script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/38122770" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
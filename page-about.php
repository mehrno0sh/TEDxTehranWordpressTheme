﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>TEDxTehran | About Us </title>

    <!-- Meta Data -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="ArtStyles Brand (ArtTemplate, ArtIcons)" />
    <meta name="keywords" content="agency, business, company, corporate, multipurpose, portfolio, projects, responsive, startup ,modern,template" />
    <meta name="description" content="Multipurpose Business Agency/Personal Portfolio" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory');?>/images/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory');?>/images/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory');?>/images/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory');?>/images/favicons/apple-touch-icon-57x57.png">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicons/favicon.png" type="image/png">

    <!-- Fonts -->
    <!--
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    -->
    <link type="text/css" media="all" href="<?php bloginfo('template_directory');?>/fonts/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/animate.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/about.css"/>

    <!-- JavaScripts -->
    <script src="<?php bloginfo('template_directory');?>/js/jquery-1.12.3.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory');?>/js/modernizr.custom.js" type="text/javascript"></script>

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
                    <div class="logo"> <a href="index.html"><img src="<?php bloginfo('template_directory');?>/images/TEDx-Logo_240pix_black.png" alt="TEDxTehran"></a> </div>
                </div>
            </div>
            <div class="col-md-8">
                <nav class="navbar main-nav">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="index.html#">Events <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="event.html">2013</a></li>
                                    <li><a href="event.html">2014</a></li>
                                    <li><a href="event.html">2015</a></li>
                                    <li><a href="event.html">2016</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="index.html#">Team <i class="fa fa-angle-down" aria-hidden="true"></i></a>
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
                        $args =  array(
                            'post_type' => 'about-page-info',
                            'orderby' => 'menu_order',
                            'order' => 'ASC'
                        );
                        $i = 1;
                        $custom_query = new WP_Query( $args );
                        while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

                            <div class="panel panel-style">
                                <div class="panel-heading <?php if($i==1) echo "active"; ?>">
                                    <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo "collapse-".$i; ?>"><?php the_title(); ?><span></span></a> </h4>
                                </div>
                                <div id="<?php echo "collapse-".$i; ?>" class="panel-collapse collapse <?php if($i==1) echo "in"; ?>">
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
                <h1 class="title-section-left">Learn more about TED</h1>
                <p class="slogan"> TED is a nonprofit organization devoted to Ideas Worth Spreading. Started as a four-day conference in California 30 years ago, TED has grown to support its mission with multiple initiatives. The two annual TED Conferences invite the world’s leading thinkers and doers to speak for 18 minutes or less. Many of these talks are then made available, free, atTED.com. TED speakers have included Bill Gates, Jane Goodall, Elizabeth Gilbert, Sir Richard Branson, Nandan Nilekani, Philippe Starck, Ngozi Okonjo-Iweala, Sal Khan and Daniel Kahneman. <br><br>

                    The annual TED Conference takes place each spring in Vancouver, British Columbia. TED’s media initiatives includeTED.com, where new TED Talks are posted daily; the Open Translation Project, which provides subtitles and interactive transcripts as well as translations from volunteers worldwide; the educational initiative TED-Ed. TED has established the annual TED Prize, where exceptional individuals with a wish to change the world get help translating their wishes into action; TEDx, which supports individuals or groups in hosting local, self- organized TED-style events around the world, and the TED Fellows program, helping world-changing innovators from around the globe to amplify the impact of their remarkable projects and activities. <br><br>

                    For information about TED’s upcoming conferences, <br> visit <a href="http://www.ted.com/registration/" target="_blank">http://www.ted.com/registration</a> <br><br>

                    Follow TED on Twitter at <a href="http://twitter.com/TEDTalks/" target="_blank">http://twitter.com/TEDTalks</a>, or on Facebook at <a href="http://www.facebook.com/TED/" target="_blank">http://www.facebook.com/TED</a> <br><br> </p>
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
                <div class="col-sm-12 col-md-2">
                    <div id="abo-fb" class="item-join text-center">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <h5 class="animated fadeIn" id="abt-fb">Follow TEDxTehran at Facebook</h5>
                    </div>
                </div>
                <div id="abo-tw" class="col-sm-12 col-md-2">
                    <div class="item-join text-center">
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <h5 class="animated fadeIn" id="abt-tw">Follow TEDxTehran at Twitter</h5>
                    </div>
                </div>
                <div id="abo-fl" class="col-sm-12 col-md-2">
                    <div class="item-join text-center">
                        <a href="#"><i class="fa fa-flickr" aria-hidden="true"></i></a>
                        <h5 class="animated fadeIn" id="abt-fl">Follow TEDxTehran at Flickr</h5>
                    </div>
                </div>
                <div id="abo-ig" class="col-sm-12 col-md-2">
                    <div class="item-join text-center">
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <h5 class="animated fadeIn" id="abt-ig">Follow TEDxTehran at Instagram</h5>
                    </div>
                </div>
                <div id="abo-fb" class="col-sm-12 col-md-2">
                    <div class="item-join text-center">
                        <a href="#"><i class="fa fa-terminal" aria-hidden="true"></i></a>
                        <h5 class="animated fadeIn" id="abt-ig">Follow TEDxTehran at Instagram</h5>
                    </div>
                </div>
                <div id="abo-in" class="col-sm-12 col-md-2">
                    <div class="item-join text-center">
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <h5 class="animated fadeIn" id="abt-in">Follow TEDxTehran at LinkedIn</h5>
                    </div>
                </div>
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
            <div class="col-xs-12 col-sm-12 col-md-6">
                <h2 id="press-title" class="title-section title-section-left">Press</h2>
                <p class="title-section-details">TEDxTehran offers a limited number of Press Pass to journalists and bloggers to cover each conference. If you wish to receive a Press Pass, please email us your name, name of your media outlet and your proposed area of coverage to Reza @ tedxtehran.com </p>
                <p class="title-section-details">Requests for interviews should be directed to Reza @ tedxtehran.com. Your email should include the following information: </p><br>
                <ul>
                    <li>
                        Name of publication/outlet
                    </li>
                    <li>
                        Brief background on your interview request
                    </li>
                    <li>
                        Proposed publication date
                    </li>
                    <li>
                        Your deadline
                    </li>
                </ul>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6">
                <img id="icon-press" class="img-responsive" src="<?php bloginfo('template_directory');?>/images/icon-press.svg" alt="Press">
            </div>
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
<script src="<?php bloginfo('template_directory');?>/js/plugins.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory');?>/js/common.js" type="text/javascript"></script>
<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter38122770 = new Ya.Metrika({ id:38122770, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/38122770" style="position:absolute; left:-9999px;" alt="" /></div>
</noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
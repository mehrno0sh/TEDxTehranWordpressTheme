<?php get_header(); ?>

<!-- Slider -->
<section class="main-slider main-slider-image" id="particles-js">
    <div class="container vertical-center">
        <div class="row">
            <div class="col-md-6 text-center text-white" data-top="opacity:1; transform[swing]:scale(1)"
                 data-top-bottom="opacity:0.9; transform[swing]:scale(0.8)" data-anchor-target=".main-slider">
                <p>Download TEDxTehran App it via official stores:</p>
                <div class="row" id="main-slider-stores">
                    <div class="col-md-2 col-md-offset-3"><a class="hvr-forward" href="#"><img
                                src="<?php bloginfo('template_directory'); ?>/img/google-play.png" alt="google-play"></a>
                    </div>
                    <div class="col-md-5"><a class="hvr-backward" href="#"><img
                                src="<?php bloginfo('template_directory'); ?>/img/app-store.png" alt="app-store"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <h1 class="heading text-white">Ideas Worth <span class="text-bold">Spreading</span></h1>
                <br>
                <div id="clockdiv">
                    <div><span class="days"></span>
                        <div class="smalltext">Days</div>
                    </div>
                    <div><span class="hours"></span>
                        <div class="smalltext">Hours</div>
                    </div>
                    <div><span class="minutes"></span>
                        <div class="smalltext">Minutes</div>
                    </div>
                    <div><span class="seconds"></span>
                        <div class="smalltext">Seconds</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12"><a id="btn-scroll-sec">Scroll<span></span></a></div>
        </div>
    </div>
</section>
<!-- /Slider -->

<!-- Talks -->
<section class="section second">
    <div class="container">
        <!-- Title -->
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="title-section">Talks</h2>
                <p id="talks-detail" class="title-section-details">Collection of TEDxTehran Talks,Divided by Year.</p>
            </div>
        </div>

        <!--2015-->
        <div class="row">
            <div class="col-md-12">
                <h2>2015</h2>
            </div>
        </div>
        <div class="row">
            <?php
            $pages = array(
                'post_type' => 'page',
                'meta_query' => array(
                    array(
                        'key' => '_wp_page_template',
                        'value' => 'page-speaker.php',
                    ),
                    array(
                        'key' => 'year',
                        'value' => '2015',
                    )
                ),
                'order' => 'asc'
            );

            $queryObject = new WP_Query($pages);

            ?>

            <?php while ($queryObject->have_posts()) : $queryObject->the_post(); ?>

                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="item-project item-team talk-hover">
                        <div class="cover">
                            <div class="fit">
                                <a href="<?php the_permalink(); ?>" target="_blank">
                                    <img class="img-cover" src="<?php the_field('thumbnail') ?>"
                                         alt="<?php the_title() ?>">
                                </a>
                            </div>
                            <ul class="list-unstyled list-inline social-team">
                                <li>
                                    <a target="_blank" href="<?php the_field('youtube_url') ?>">
                                        <i class="fa fa-youtube youtube-hover" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="<?php the_field('aparat_url') ?>">
                                        <div class="aparat-hover"></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="caption">
                            <h3><?php the_title() ?></h3>
                            <p class="details text-uppercase"><?php the_field('speak_title') ?></p>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
        </div>
        <!--/2015-->


        <!--2014-->
        <div class="row">
            <div class="col-md-12">
                <h2>2014</h2>
            </div>
        </div>
        <div class="row">
            <?php
            $pages = array(
                'post_type' => 'page',
                'meta_query' => array(
                    array(
                        'key' => '_wp_page_template',
                        'value' => 'page-speaker.php',
                    ),
                    array(
                        'key' => 'year',
                        'value' => '2014',
                    )
                ),
                'order' => 'asc'
            );

            $queryObject = new WP_Query($pages);

            ?>

            <?php while ($queryObject->have_posts()) : $queryObject->the_post(); ?>

                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="item-project item-team talk-hover">
                        <div class="cover">
                            <div class="fit">
                                <a href="<?php the_permalink(); ?>" target="_blank">
                                    <img class="img-cover" src="<?php the_field('thumbnail') ?>"
                                         alt="<?php the_title() ?>">
                                </a>
                            </div>
                            <ul class="list-unstyled list-inline social-team">
                                <li>
                                    <a target="_blank" href="<?php the_field('youtube_url') ?>">
                                        <i class="fa fa-youtube youtube-hover" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="<?php the_field('aparat_url') ?>">
                                        <div class="aparat-hover"></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="caption">
                            <h3><?php the_title() ?></h3>
                            <p class="details text-uppercase"><?php the_field('speak_title') ?></p>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
        </div>
        <!--/2014-->

        <!--2013-->
        <div class="row">
            <div class="col-md-12">
                <h2>2013</h2>
            </div>
        </div>
        <div class="row">
            <?php
            $pages = array(
                'post_type' => 'page',
                'meta_query' => array(
                    array(
                        'key' => '_wp_page_template',
                        'value' => 'page-speaker.php',
                    ),
                    array(
                        'key' => 'year',
                        'value' => '2013',
                    )
                ),
                'order' => 'asc'
            );

            $queryObject = new WP_Query($pages);

            ?>

            <?php while ($queryObject->have_posts()) : $queryObject->the_post(); ?>

                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="item-project item-team talk-hover">
                        <div class="cover">
                            <div class="fit">
                                <a href="<?php the_permalink(); ?>" target="_blank">
                                    <img class="img-cover" src="<?php the_field('thumbnail') ?>"
                                         alt="<?php the_title() ?>">
                                </a>
                            </div>
                            <ul class="list-unstyled list-inline social-team">
                                <li>
                                    <a target="_blank" href="<?php the_field('youtube_url') ?>">
                                        <i class="fa fa-youtube youtube-hover" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="<?php the_field('aparat_url') ?>">
                                        <div class="aparat-hover"></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="caption">
                            <h3><?php the_title() ?></h3>
                            <p class="details text-uppercase"><?php the_field('speak_title') ?></p>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
        </div>
        <!--/2013-->



</section>
<!-- /Talks -->

<section class="section" id="what-is-clip">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="title-section">What is TED & TEDx? Watch this</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <video id="ted-video-id" width="640" height="360"
                       poster="<?php bloginfo('template_directory'); ?>/img/Frame-8-1024x576.jpg" controls>
                    <source src="http://tedxtehran.com/main/wp-content/uploads/2013/08/TEDx-720p-EN_x264.mp4?_=1"
                            type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</section>

<!-- Quick Answers -->
<section class="section section-white section-answers">
    <div class="container">
        <!-- Title -->
        <div class="row">
            <div class="col-md-12">
                <h2 class="title-section-left">Quick Answers</h2>
                <p class="title-section-details">Answers to the most frequently asked questions.</p>
            </div>
        </div>
        <!-- /Title -->

        <div class="row">
            <div class="col-md-6">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-style">
                        <div class="panel-heading active">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                       href="<?php echo get_home_url(); ?>#collapseOne">About TED<span></span></a></h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body"> TED is a nonprofit organization devoted to Ideas Worth Spreading.
                                Started as a conference in California 1984, TED has grown to support those
                                world-changing ideas with many initiatives.At a TED conference, the world's leading
                                thinkers and doers are asked to give the talk of their lives in 18 minutes or less. TED
                                speakers have included Roger Ebert, Sheryl Sandberg, Bill Gates, Elizabeth Gilbert,
                                Benoit Mandelbrot, Philippe Starck, Ngozi Okonjo-Iweala, Brian Greene, Isabel Allende
                                and former UK Prime Minister Gordon Brown.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-style">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                       href="<?php echo get_home_url(); ?>#collapseTwo">What is TEDx?<span></span></a></h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body"> In the spirit of ideas worth spreading, TED has created a program
                                called TEDx. TEDx is a program of local, self-organized events that bring people
                                together to share a TED-like experience. Our event is called TEDxTehran, where x =
                                independently organized TED event. At our TEDxTehran event, TEDTalks video and live
                                speakers will combine to spark deep discussion and connection in a small group. The TED
                                Conference provides general guidance for the TEDx program, but individual TEDx events,
                                including ours, are self-organized.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-style">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                       href="<?php echo get_home_url(); ?>#collapseThree">What is TEDxTehran?<span></span></a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body"> Etiam elit felis, porta ut massa in, consectetur finibus nibh.
                                Vestibulum in efficitur velit. Proin mollis est in risus faucibus, nec finibus mauris
                                vehicula. Duis at eleifend dui. Maecenas in dui eget erat ullamcorper dignissim nec sit
                                amet tortor.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-style">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                       href="<?php echo get_home_url(); ?>#collapseFour">What is
                                    TEDxYouth?<span></span></a></h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body"> Etiam elit felis, porta ut massa in, consectetur finibus nibh.
                                Vestibulum in efficitur velit. Proin mollis est in risus faucibus, nec finibus mauris
                                vehicula. Duis at eleifend dui. Maecenas in dui eget erat ullamcorper dignissim nec sit
                                amet tortor.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="answer-image" data-bottom-top="opacity:0; transform[swing]:scale(0)"
                     data-top="opacity:1; transform[swing]:scale(1)" data-anchor-target=".section-answers"><img
                        src="<?php bloginfo('template_directory'); ?>/img/illustration-answer.svg" alt="Answers">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Quick Answers -->
<script>
    $("#btn-scroll-sec").click(function () {
        $('html,body').animate({
                scrollTop: $(".second").offset().top
            },
            'slow');
    });
</script>

<script src="<?php bloginfo('template_directory'); ?>/js/mo.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/particles-white.init.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/mo.effect1.init.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/countdown.js" type="text/javascript"></script>

<?php get_footer(); ?>

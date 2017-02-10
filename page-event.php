<?php /*
  Template Name: Event
Template Post Type: page
 */ ?>

<?php get_header(); ?>

<!-- EventsPage -->
<section class="event-single section-white">
    <!-- Header -->
    <?php while (have_posts()) : the_post(); ?>

        <section class="event-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1><?php the_title(); ?></h1>
                        <p class="slogan"><?php the_content(); ?></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- image -->
        <section class="event-image">
            <div class="container-fluid">
                <div class="row">
                    <img src="<?php the_field('banner') ?>">
                </div>
            </div>
        </section>
        <!-- date -->
        <section class="section event-date">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-event">
                        <div class="col-md-4">
                            <h5 class="timelineEvent-title text-uppercase"><img
                                    src="<?php bloginfo('template_directory'); ?>/img/calendar.svg">Date:</h5>
                            <div class="timelineEvent">
                                <p>
                                    <?php the_field('date') ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h5 class="timelineEvent-title text-uppercase"><img
                                    src="<?php bloginfo('template_directory'); ?>/img/clock.svg">Time:</h5>
                            <div class="timelineEvent">
                                <p>
                                    <?php the_field('time') ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h5 class="timelineEvent-title text-uppercase"><img
                                    src="<?php bloginfo('template_directory'); ?>/img/map.svg">Address:</h5>
                            <div class="timelineEvent">
                                <p>
                                    <?php the_field('address') ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- gallery -->
        <section class="section event-gallery">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <h2 class="title-section title-section-left">Album <?php the_field('year') ?></h2>
                        <p class="title-section-details">
                            <?php the_field('album_caption') ?>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 text-right">
                        <a href="<?php the_field('flicker_link') ?>" class="btn btn-big">View All Pictures</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- nominate -->
        <section class="section event-join">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title-section">Nominate</h2>
                        <p class="title-section-details">We're always looking for new voices and new ideas to add to the
                            TED
                            community.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-sm-12 col-md-4">
                            <div class="item-join text-center">
                                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/speech.svg"></a>
                                <h5 class="item-join-heading text-uppercase">Nominate a speaker</h5>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="item-join text-center">
                                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/persons.svg"></a>
                                <h5 class="item-join-heading text-uppercase">Nominate for the TED Attend</h5>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="item-join text-center">
                                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/hand.svg"></a>
                                <h5 class="item-join-heading text-uppercase">Apply to be a TED Fellow</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- statistic -->
        <section class="section event-state section-stats">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-12 col-xs-12 col-md-offset-1">
                        <div class="digits-item">
                            <h4 class="digit">
                                <?php the_field('attendees_count'); ?>
                            </h4>
                            <span class="digit-name">Attendees</span>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12 col-xs-12">
                        <div class="digits-item">
                            <h4 class="digit">
                                <?php the_field('applications_count'); ?>
                            </h4>
                            <span class="digit-name">Applications</span>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12 col-xs-12">
                        <div class="digits-item">
                            <h4 class="digit">
                                <?php the_field('talk_view'); ?>
                            </h4>
                            <span class="digit-name">Views of talks</span>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12 col-xs-12">
                        <div class="digits-item">
                            <h4 class="digit">
                                <?php the_field('volunteers'); ?>
                            </h4>
                            <span class="digit-name">Volunteers</span>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12 col-xs-12">
                        <div class="digits-item">
                            <h4 class="digit">
                                <?php the_field('online_views'); ?>
                            </h4>
                            <span class="digit-name">Online Talk Views</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- talks -->
        <section class="section event-talks">
            <div class="container">
                <!-- Title -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title-section">TEDxTehran <?php the_field('year') ?> Talks</h2>
                        <p class="title-section-details">All TEDxTehran Talks are posted online, giving our community
                            access
                            to showcase and exchange their ideas with the rest of the world</p>
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
                                'value' => get_field('year'),
                            )
                        ),
                        'order' => 'asc'
                    );

                    $queryObject = new WP_Query($pages);

                    ?>

                    <?php while ($queryObject->have_posts()) : $queryObject->the_post(); ?>

                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="talk-item-event">
                                <div class="cover">
                                    <a class="badge" href="<?php the_permalink(); ?>"></a>
                                    <div class="fit">
                                        <img class="img-cover" src="<?php the_field('thumbnail') ?>" alt="event">
                                    </div>
                                </div>
                                <div class="caption">
                                    <div class="row">
                                        <div class="col-md-6"></div>
                                        <div class="col-md-6"></div>
                                    </div>
                                    <h3><a href="#"><?php the_title() ?> </a></h3>
                                    <span class="details"><?php the_field('speaker_info') ?></span>
                                    <span class="details"><?php the_field('speak_title') ?></span>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>

                </div>
            </div>
        </section>

    <?php endwhile; ?>

    <?php while (have_posts()) : the_post(); ?>
        <!-- Partner -->
        <section class="section event-partner">
            <div class="container">
                <!-- Title -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title-section">Partners</h2>
                        <p class="title-section-details">TEDxTehran <?php the_field('year'); ?> Sponsors</p>
                    </div>
                </div>
                <!-- /Title -->
                <div class="row">
                    <div class="container text-center">
                        <div class="col-md-12">
                            <div class="row">
                                <?php
                                $year = get_field('year');
                                $pages = array(
                                    'post_type' => 'sponsors',
                                    'meta_query' => array(
                                        array(
                                            'key' => 'type',
                                            'value' => '1',
                                        ),
                                        array(
                                            'key' => 'event',
                                            'value' => $year,
                                        )
                                    ),
                                    'order' => 'asc'
                                );
                                $queryObject = new WP_Query($pages);
                                ?>

                                <?php while ($queryObject->have_posts()) : $queryObject->the_post(); ?>
                                    <div class="col-md-2 col-sm-2 col-md-offset-5 col-sm-offset-5">
                                        <img src="<?php the_field('logo'); ?>" alt="<?php the_title(); ?>">
                                    </div>
                                <?php endwhile; ?>
                            </div>
                            <div class="row">
                                <?php
                                $pages = array(
                                    'post_type' => 'sponsors',
                                    'meta_query' => array(
                                        array(
                                            'key' => 'type',
                                            'value' => '2',
                                        ),
                                        array(
                                            'key' => 'event',
                                            'value' => $year,
                                        )
                                    ),
                                    'order' => 'asc'
                                );
                                $queryObject = new WP_Query($pages);
                                $i = 1;
                                ?>

                                <?php while ($queryObject->have_posts()) : $queryObject->the_post(); ?>
                                    <div class="col-md-2 col-sm-2
                                     <?php if ($i == 1) echo "col-md-offset-2 col-sm-offset-2"; ?>">
                                        <img src="<?php the_field('logo'); ?>" alt="<?php the_title(); ?>">
                                    </div>
                                    <?php $i++; ?>
                                <?php endwhile; ?>
                            </div>
                            <div class="row">
                                <?php
                                $pages = array(
                                    'post_type' => 'sponsors',
                                    'meta_query' => array(
                                        array(
                                            'key' => 'type',
                                            'value' => '3',
                                        ),
                                        array(
                                            'key' => 'event',
                                            'value' => $year,
                                        )
                                    ),
                                    'order' => 'asc'
                                );
                                $queryObject = new WP_Query($pages);
                                ?>

                                <?php while ($queryObject->have_posts()) : $queryObject->the_post(); ?>
                                    <div class="col-md-2 col-sm-2">
                                        <img src="<?php the_field('logo'); ?>" alt="<?php the_title(); ?>">
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

    <?php endwhile; ?>

    <?php while (have_posts()) : the_post(); ?>
        <!-- Team -->
        <section class="section event-team">
            <div class="container">
                <!-- Title -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <h2 class="title-section title-section-left">Team</h2>
                        <p class="title-section-details">Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam </p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 text-right">
                        <a href="<?php the_field('team_page'); ?>" class="btn btn-big btn-white">View Team Members</a>
                    </div>
                </div>
                <!-- /Title -->
            </div>
        </section>
        <!-- press -->
        <section class="section event-press">
            <div class="container">
                <!-- Title -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title-section">Press</h2>
                        <p class="title-section-details">TEDxTehran 2016 Press</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="brands" class="owl-carousel owl-theme">
                            <?php
                            $pages = array(
                                'post_type' => 'press',
                                'meta_query' => array(
                                    array(
                                        'key' => 'event',
                                        'value' => get_field('year'),
                                        'compare' => 'LIKE'
                                    )
                                ),
                                'order' => 'asc'
                            );
                            $queryObject = new WP_Query($pages);
                            ?>
                            <?php while ($queryObject->have_posts()) : $queryObject->the_post(); ?>
                                <div class="item-brands">
                                    <a href="<?php the_field('link'); ?>">
                                        <img src="<?php the_field('logo'); ?>" alt="<?php the_title(); ?>">
                                    </a>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>
</section>

<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up" aria-hidden="true"></i> </a>
<script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/mo.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/mo.effect1.init.js" type="text/javascript"></script>

<?php get_footer(); ?>


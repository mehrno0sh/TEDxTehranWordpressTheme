<?php /*
  Template Name: About Us
Template Post Type: page
 */ ?>

<?php get_header(); ?>

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

<?php get_footer(); ?>

<?php /*
  Template Name: Team
Template Post Type: page
 */ ?>

<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
<!-- Slider -->
<section class="main-slider main-slider-static main-slider-black" id="particles-js"
         data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -200px;">
    <div class="container">
        <div class="row">
            <div id="team-slider" class="col-md-12">
                <h1 class="text-white"><?php the_title(); ?></h1>
                <p class="slogan text-white">Welcome to Cascadia. We are called to make their business best. Get started
                    now, your way to success!</p>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
<!-- /Slider -->
<!-- Team -->
<section class="section">
    <div class="container">
        <!-- Title -->
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="title-section">Who we are?</h2>
                <p class="title-section-details">We are a small creative team, which is full of enthusiasm.</p>
            </div>
        </div>
        <!-- /Title -->
        <!-- Filter -->
        <div class="row">
            <div class="col-md-12 text-center">
                <ul id="filtersMenu" class="filter-item">
                    <li>
                        <button class="is-checked" data-filter="*">
                            All Team</button>
                    </li>
                    <li>
                        <button data-filter=".team_core" class="">
                            Core Team</button>
                    </li>
                    <li>
                        <button data-filter=".team_curation" class="">
                            Curation</button>
                    </li>
                    <li>
                        <button data-filter=".team_media" class="">
                            Media</button>
                    </li>
                    <li>
                        <button data-filter=".team_technology" class="">
                            Technology</button>
                    </li>
                    <li>
                        <button data-filter=".team_partnerships" class="">
                            Partnerships</button>
                    </li>
                    <li>
                        <button data-filter=".team_operations" class="">
                            Operations</button>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /Filter -->

        <div class="row grid-progects" style="position: relative; height: 802px;">

            <?php

            $args = array(
                'post_type' => 'team-members',
                'orderby' => 'menu_order',
                'meta_query' => array(
                    array(
                        'key' => 'events',
                        'value' => get_field('event'),
                        'compare' => 'LIKE'
                    )
                ),
                'order' => 'ASC'
            );
            $i = 1;
            $custom_query = new WP_Query($args);
            while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

                <!-- Item Person -->
                <div class="col-sm-6 col-md-4 col-lg-3 team-item <?php echo implode(' ',get_field("teams")); ?>">
                    <div class="item-project item-team">
                        <div class="cover">
                            <div class="fit"><img class="img-cover" src="<?php the_field("photo"); ?>" alt="<?php the_title(); ?>"></div>
                            <ul class="list-unstyled list-inline social-team">
                                <?php if(!empty(get_field('twitter'))) { ?>
                                <li>
                                    <a href="<?php the_field("twitter"); ?>">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <?php } ?>

                                <?php if(!empty(get_field('linkedin'))) { ?>
                                    <li>
                                        <a href="<?php the_field("linkedin"); ?>">
                                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="caption">
                            <h3><?php the_title(); ?></h3>
                            <p class="details text-uppercase"><?php the_field("role"); ?></p>
                        </div>
                    </div>
                </div>
                <!-- /Item Person -->

                <?php $i++; ?>
            <?php endwhile; ?>

        </div>
    </div>
</section>
<?php  endwhile; ?>
<!-- /Team -->


<!-- JavaScripts -->
<script>
    $(document).ready(function () {
        $('.filter-item button').click(function () {
            var filterTeam = $(this).data('filter');

            $('.filter-item button').removeClass('is-checked');
            $(this).addClass('is-checked');

            if (filterTeam == '*') {
                $('.grid-progects').children('div.team-item').show("slow");
            }
            else {
                $('.grid-progects').children('div.team-item').hide("slow");
                $('.grid-progects').children('div' + filterTeam).show("slow");
            }
            return false;
        });
    });
</script>
<script src="<?php bloginfo('template_directory'); ?>/js/mo.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/particles-black.init.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/mo.effect1.init.js" type="text/javascript"></script>

<?php get_footer(); ?>
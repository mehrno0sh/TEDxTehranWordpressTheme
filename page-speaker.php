<?php /*
  Template Name: Speaker
Template Post Type: page, post
 */ ?>

<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <!-- Salutation -->
    <section class="section-white section-salutation volunteer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 WhyTedxText">
                    <div class="text-salutation">
                        <h1 class="title-section-left">
                            <?php the_title(); ?>
                            <div class="slogan">
                                <strong>(Pianist and Musicologist)</strong>
                            </div>
                        </h1>
                        <p class="slogan">
                            <strong>Classical Music with a Persian Twist</strong>
                        </p>
                        <p class="slogan">
                            The pianist and musicologist, Kiana Shafii, gives a superb performance and talk on how
                            Iranian composers give their classical pieces a Persian twist.
                            <br/>
                            Kiana Shafiei is an accomplished pianist, musicologist and speaker whose performances and
                            presentations activities have taken her to various concert venues and institutions overseas.
                        </p>
                    </div>
                </div>
                <article class="vid speakerVid">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/prhWJxpO6yg" frameborder="0"
                            allowfullscreen></iframe>
                </article>
            </div>
        </div>
    </section>
    <!-- /Salutation -->
    <section class="speaker-more">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="slogan speaker-about">
                        Kiana Shafiei is the recipient of several piano competition awards including the Royal College
                        of Music Piano Concerto Competition Distinction award, the 1st Prize of the 12th Luigi Zanuccoli
                        International Competition in Italy, three 1st Prizes of Fajr Music Festival in Iran, and others.
                        <br/>
                        In 2015 she was part of the jury panel for the Enkor International Piano Competition in Germany.
                        Kiana obtained her Master degree in Piano Performance in 2014 at the prestigious Royal College
                        of Music in London where she studied piano with John Byrne. In 2012 she received her Bachelor of
                        Arts degree with First Class Honours from Tehran University, faculty of Fine Arts, under the
                        guidance of professor Raphael Minaskanian. Her piano studies began at the age of six with
                        professor Gagik Babayan and later on with Peyman Yazdanian.
                    </p>
                </div>
                <div id="container-para" class="col-md-6 col-xs-12"><img
                        src="<?php bloginfo('template_directory'); ?>/images/speakers/kianashafiei.jpg"
                        class="img-responsive spk-photo"></div>
            </div>
        </div>
    </section>

<?php endwhile; ?>

<?php get_footer(); ?>
<?php /*
  Template Name: Nominate Citizenx
Template Post Type: page
 */ ?>

<?php get_header(); ?>

    <!-- Salutation -->
    <section class="section-white section-salutation volunteer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 WhyTedxText">
                    <div class="text-salutation">
                        <h1 class="title-section-left">Criteria for a CitizenX</h1>
                        <p class="slogan">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit facere, molestias a qui itaque facilis dicta sequi, in eius unde quasi minima nulla voluptates dolores autem sapiente sunt eos earum, culpa? Dignissimos corporis iure vero beatae in, eius, ipsum maiores maxime repellat deleniti rem?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit facere, molestias a qui itaque facilis dicta sequi, in eius unde quasi minima nulla voluptates dolores autem sapiente sunt eos earum, culpa? Dignissimos corporis iure vero beatae in, eius, ipsum maiores maxime repellat deleniti rem?
                        </p>
                        <p class="slogan">
                            <strong>Multiple suggestions for the same person won’t influence the CitizenX selection team in any way. We review every suggestion that comes in, and it only takes one.</strong>
                        </p>
                    </div>
                </div>
                <article class="vid whyTedxVid">
                    <div id="nominate">
                        <img src="<?php bloginfo('template_directory'); ?>/img/nominate-ct.png" />
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- /Salutation -->
    <!-- Departments -->
    <section class="section section-white">
        <div class="container">
            <!-- Title -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="title-section">Nominate the Next CitizenX</h2>
                    <p class="title-section-details title-section-details-custom">You can nominate the next CitizenX based on <a href="<?php echo get_home_url(); ?>/citizenx">CitizenX Criteria</a> right here by this form:</p>
                </div>
            </div>
            <!-- /Title -->
            <!-- Form -->
            <div class="row">
                <div class="col-md-12">
                    <form id="contactForm" data-toggle="validator">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-style" placeholder="* Your Email Address" id="email" required data-error="Please enter your email address.">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-style" placeholder="* Your First Name" id="name" required data-error="Please, enter your name.">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-style" placeholder="* Your Last Name" id="name" required data-error="Please, enter your last name.">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-style" placeholder="* Nominated Speaker First Name" id="name" required data-error="Please, enter nominated speaker name.">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-style" placeholder="* Nominated Speaker Last Name" id="name" required data-error="Please, enter nominated speaker last name.">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="url" class="form-control form-control-style" placeholder="Nominated Speaker Linkedin or Website" id="linkedin" data-error="Please, enter your nominated speaker Linkedin or website url.">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea id="message" class="form-control form-control-style" rows="3" placeholder="* Why are you recommending them?" required data-error="Please, fill in here."></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-big btn-full btn-no-radius">Nominate</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Form -->
        </div>
    </section>

    <!-- Apply for a position -->
    <section class="sectionCustom">
        <div class="container">
        </div>
    </section>
    <!-- /Our Features -->

<?php get_footer(); ?>
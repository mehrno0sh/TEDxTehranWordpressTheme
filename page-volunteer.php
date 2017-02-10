<?php /*
  Template Name: Volunteer
Template Post Type: page
 */ ?>

<?php get_header(); ?>

    <!-- Salutation -->
    <section class="section-white section-salutation volunteer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 WhyTedxText">
                    <div class="text-salutation">
                        <h1 class="title-section-left">Why Do We <b class="TEDxRed">TEDx</b></h1>
                        <p class="slogan">
                            TEDxTehran is a completely volunteer-run organization and relies on the tireless efforts and
                            expertise of these volunteers to create our main event, as well as TEDxYouth and a series of
                            shorter Salon events throughout the year.
                        </p>
                        <p class="slogan">
                            <strong>SMALL ACTS TRANSFORM THE WORLD</strong>
                        </p>
                    </div>
                </div>
                <article class="vid whyTedxVid">
                    <div id="14854283523413584">
                        <script type="text/JavaScript"
                                src="https://www.aparat.com/embed/MyvqW?data[rnddiv]=14854283523413584&data[responsive]=yes"></script>
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
                    <h2 class="title-section">Apply for a Position</h2>
                    <p class="title-section-details title-section-details-custom">If you have a passion for sharing
                        ideas worth spreading, working with a team of incredibly creative TEDxTehraners, and making a
                        difference in this community, we need your help.</p>
                </div>
            </div>
            <!-- /Title -->
            <!-- Contacts -->
            <section class="sectionCustom section-skills">
                <div class="container">
                    <div class="row">
                        <!-- Item contact -->
                        <div class="col-md-15 col-sm-3">
                            <div class="item-contact text-center">
                                <img src="<?php bloginfo('template_directory'); ?>/img/curation.svg" alt="curation">
                                <h5 class="item-contact-heading text-uppercase">Curation</h5>
                            </div>
                        </div>
                        <!-- /Item contact -->
                        <!-- Item contact -->
                        <div class="col-md-15 col-sm-3">
                            <div class="item-contact text-center">
                                <img src="<?php bloginfo('template_directory'); ?>/img/media.svg" alt="media">
                                <h5 class="item-contact-heading text-uppercase">Media</h5>
                            </div>
                        </div>
                        <!-- /Item contact -->
                        <!-- Item contact -->
                        <div class="col-md-15 col-sm-3">
                            <div class="item-contact text-center">
                                <img src="<?php bloginfo('template_directory'); ?>/img/technology.svg" alt="technology">
                                <h5 class="item-contact-heading text-uppercase">Technology</h5>
                            </div>
                        </div>
                        <!-- /Item contact -->
                        <!-- Item contact -->
                        <div class="col-md-15 col-sm-3">
                            <div class="item-contact text-center">
                                <img src="<?php bloginfo('template_directory'); ?>/img/partnerships.svg" alt="partnerships">
                                <h5 class="item-contact-heading text-uppercase">Partnerships</h5>
                            </div>
                        </div>
                        <!-- /Item contact -->
                        <!-- Item contact -->
                        <div class="col-md-15 col-sm-3">
                            <div class="item-contact text-center">
                                <img src="<?php bloginfo('template_directory'); ?>/img/operation.svg" alt="operation">
                                <h5 class="item-contact-heading text-uppercase">Operation</h5>
                            </div>
                        </div>
                        <!-- /Item contact -->
                    </div>
                </div>
            </section>
            <!-- /Contacts -->
            <!-- Departments -->
            <!-- Form -->
            <div class="row">
                <div class="col-md-12">
                    <form id="contactForm" data-toggle="validator">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-style"
                                           placeholder="* First Name" id="name" required
                                           data-error="Please, enter your name.">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-style" placeholder="* Last Name"
                                           id="name" required data-error="Please, enter your last name.">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-style" placeholder="* Email"
                                           id="email" required data-error="Please, enter your email.">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-style"
                                           placeholder="* Current city" id="name" required
                                           data-error="Please, enter your current city.">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="tel" class="form-control form-control-style"
                                           placeholder="* Phone number" id="name" required
                                           data-error="Please, enter your phone number.">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="url" class="form-control form-control-style"
                                           placeholder="Linkedin profile" id="linkedin"
                                           data-error="Please, enter your Linkedin profile.">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="position" id="DepartmentsSelect"
                                            class="form-control form-control-style">
                                        <option value="">Curation</option>
                                        <option value="">Media</option>
                                        <option value="">Technology</option>
                                        <option value="">Partnerships</option>
                                        <option value="">Operations</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="position" id="Availablepositions"
                                            class="form-control form-control-style">
                                        <option selected="selected" value="-1">* Please select a position which matches
                                            your skills and passion.
                                        </option>
                                        <option value="">Curation Vice Executive</option>
                                        <option value="">Host / Hostess</option>
                                        <option value="">Media Vice Executive</option>
                                        <option value="">iOS Application Developer</option>
                                        <option value="">Partnership Coordinator</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea id="message" class="form-control form-control-style" rows="3"
                                              placeholder="* Tell us a little about you (A quick, one paragraph bio)."
                                              required data-error="Please, fill in here."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea id="message" class="form-control form-control-style" rows="3"
                                              placeholder="* Why would you like to be part of TEDxTehran team?" required
                                              data-error="Please, fill in here."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea id="message" class="form-control form-control-style" rows="3"
                                              placeholder="* What do you know about TEDx?" required
                                              data-error="Please, fill in here."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea id="message" class="form-control form-control-style" rows="3"
                                              placeholder="* Relevant work experiences." required
                                              data-error="Please, fill in here."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea id="message" class="form-control form-control-style" rows="3"
                                              placeholder="* How did you hear about TEDxTehran?" required
                                              data-error="Please, fill in here."></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="url" class="form-control form-control-style"
                                           placeholder="Twitter handle" id="twitter"
                                           data-error="Please, enter your Twitter handle.">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="url" class="form-control form-control-style"
                                           placeholder="Facebook profile" id="facebook"
                                           data-error="Please, enter your Facebook profile.">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="file" class="form-control form-control-style"
                                           placeholder="Upload your resume/CV" id="resume">
                                </div>
                                <button type="submit" class="btn btn-big btn-full btn-no-radius">Apply</button>
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
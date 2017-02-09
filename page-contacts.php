<?php /*
  Template Name: Contact
Template Post Type: page
 */ ?>

<?php get_header(); ?>

    <!-- Salutation -->
    <section class="section-white section-salutation">
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <div class="text-salutation">
                        <h1 class="title-section-left">Get In Touch With Us</h1>
                        <p class="slogan"> While we appreciate any coverage, we kindly ask that all journalists and/or
                            bloggers be respectful of the difference between the TED and TEDx brands. Please note that
                            the ‘x’in ‘TEDx’stands for “independently organized event.”For more information on TED and
                            TEDx, please <a href="http://www.ted.com/about/programs-initiatives/tedx-program"
                                            target="_blank">click here</a> . </p>
                    </div>
                </div>
                <div id="container-para" class="col-md-6 hidden-xs hidden-sm"><img
                        src="<?php bloginfo('template_directory'); ?>/images/illustration-contact.svg"
                        class="guy img-responsive"></div>
                <!--<img id="ctn-photo" class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/illustration-contact.svg" alt="Contact">-->
            </div>
        </div>
    </section>
    <!-- /Salutation -->
    <!-- Contacts -->
    <section class="section section-skills">
        <div class="container">
            <div class="row">
                <!-- Item contact -->
                <div class="col-sm-4 col-md-4">
                    <div class="item-contact text-center copy-btn" data-clipboard-action="copy"
                         data-clipboard-target="#cn-mail1">
                        <img src="<?php bloginfo('template_directory'); ?>/images/icon-mail.svg" alt="Email">
                        <h5 class="item-contact-heading text-uppercase">General Inquiries</h5>
                        <p id="cn-mail1">info@tedxtehran.com</p>
                    </div>
                </div>
                <!-- /Item contact -->
                <!-- Item contact -->
                <div class="col-sm-4 col-md-4">
                    <div class="item-contact text-center copy-btn" data-clipboard-action="copy"
                         data-clipboard-target="#cn-mail2">
                        <img src="<?php bloginfo('template_directory'); ?>/images/icon-mail.svg" alt="Email">
                        <h5 class="item-contact-heading text-uppercase">Volunteer Inquiries</h5>
                        <p id="cn-mail2">volunteer@tedxtehran.com</p>
                    </div>
                </div>
                <!-- /Item contact -->
                <!-- Item contact -->
                <div class="col-sm-4 col-md-4">
                    <div class="item-contact text-center copy-btn" data-clipboard-action="copy"
                         data-clipboard-target="#cn-mail3">
                        <img src="<?php bloginfo('template_directory'); ?>/images/icon-mail.svg" alt="Email">
                        <h5 class="item-contact-heading text-uppercase">Press and Media Inquiries</h5>
                        <p>Reza Ghiabi, Licensee and Organizer TEDxTehran</p>
                        <p id="cn-mail3">pr@tedxtehran.com</p>
                    </div>
                </div>
                <!-- /Item contact -->

            </div>
        </div>
    </section>
    <!-- /Contacts -->
    <!-- Our Features -->
    <section class="section section-white">
        <div class="container">
            <!-- Title -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="title-section">Leave a Message</h2>
                    <p class="title-section-details">Don’t feel like opening your email client? We got your back, you
                        can contact us right here by this form:</p>
                </div>
            </div>
            <!-- /Title -->
            <!-- Form -->
            <div class="row">
                <div class="col-md-10" id="formm">
                    <form id="contactForm" data-toggle="validator">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-style" placeholder="Your Name"
                                           id="name" required data-error="Please, enter your name.">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-style" placeholder="Your Email"
                                           id="email" required data-error="Please, enter your email.">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <textarea id="message" class="form-control form-control-style" rows="3"
                                              placeholder="Message" required
                                              data-error="Please, enter message."></textarea>
                                </div>
                                <button type="submit" class="btn btn-submit btn-big btn-full btn-no-radius">Send
                                    Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Form -->
        </div>
    </section>
    <!-- /Our Features -->

    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.zlayer.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/clipboard.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/sweetalert.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/sweetalert.min.js"></script>

    <script>
        var clipboard = new Clipboard('.copy-btn');
        clipboard.on('success', function (e) {
            swal("Good job!", "Copied to Clipboard!", "success")
        });

        clipboard.on('error', function (e) {
            sweetAlert("Oops...", "Something went wrong!", "error");
        });

    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#container-para').zlayer([
                {
                    layer: '.guy',
                    mass: 15,
                    confine: 'y'
                }
            ], {
                repositionTransition: 'all 1s ease-in-out',
                reposition: false
            });
        });
    </script>

<?php get_footer(); ?>
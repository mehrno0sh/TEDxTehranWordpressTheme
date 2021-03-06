<!-- Footer -->
<footer class="base-footer">
    <div class="container copy">
        <div class="row">
            <div class="col-sm-8 col-md-8">
                <p>This independent TEDx event is operated under license from TED. | Copyright © 2017 TEDxTehran</p>
            </div>
            <div class="col-sm-4 col-md-4 text-right">
                <ul class="list-unstyled no-list-style list-inline list-socials">
                    <?php
                    $args = array(
                        'post_type' => 'social-links',
                        'orderby' => 'menu_order',
                        'order' => 'ASC'
                    );
                    $i = 1;
                    $custom_query = new WP_Query($args);
                    while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

                        <li><a href="<?php echo wp_strip_all_tags(get_the_excerpt()); ?>"><i class="fa" aria-hidden="true"></i></a>
                        </li>

                        <?php $i++; ?>
                    <?php endwhile; ?>

                    <script type="application/javascript">
                        $(document).ready(function () {
                            $(".list-socials a").each(function () {
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

                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- /Footer -->
<!-- Return to Top -->
<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>

<!-- Popup -->
<div id="dialog" class="zoom-anim-dialog mfp-hide">
    <h2 class="title-page-left">Example</h2>
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
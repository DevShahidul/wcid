            <section class="footer-wrap">
                <div class="footer-upper-wrap">
                    <div class="common-wrap clear">
                        <h3><?php the_field('promo_content','options'); ?></h3>
                    </div>
                </div>
                <div class="footer-lower-wrap" style="background-image: url(<?php the_field('background_image','options'); ?>); ?>/assets/images/footer-bg.jpg)">
                    <div class="footer-content-wrap">
                        <div class="common-wrap clear">
                            <div class="footer-content-col">
                                <?php the_field('address','options'); ?>
                                <div class="communication-info">
                                    <?php the_field('contact','options'); ?>
                                </div>
                            </div>
                            <div class="footer-content-col">
                                <?php the_field('links','options'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="copyright-wrap">
                       <div class="common-wrap clear">
                           <p><?php the_field('copyright_text','options'); ?></p>
                       </div>
                    </div>
                </div>
            </section>
            <!-- End footer-wrap -->
        </div>
    <?php wp_footer(); ?>
    </body>
</html>
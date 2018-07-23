<?php 
/* 
Template name: About Us
*/
get_header(); ?>
            <div class="main-content about-content">
                <div class="common-wrap content-inner-wrap clear">
                    <div class="title-wrap">
                        <h2><?php the_title(); ?></h2>
                    </div>

                    <?php while ( have_rows('bio_content') ) : the_row(); ?>
                    <div class="person-info-wrap">
                        <div class="person-info-title">
                            <h5><?php the_sub_field('head_text'); ?></h5>
                        </div>
                        <div class="person-item-row-wrap">
                            <?php while( have_rows('bio_data') ): the_row(); ?>
                            <div class="person-item">
                                <figure>
                                    <img src="<?php the_sub_field('image'); ?>" alt="">
                                </figure>
                                <p><span><?php the_sub_field('name'); ?></span><?php the_sub_field('designation'); ?></p>
                            </div>
                            <?php endwhile; ?> 
                        </div>
                    </div>
                    <?php endwhile; ?> 
                    <div class="content-wrap">
                        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
            <!-- End main content -->
<?php get_footer();
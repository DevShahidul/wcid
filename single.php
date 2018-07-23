<?php 
get_header(); ?>
            <div class="main-content">
                <div class="common-wrap content-inner-wrap clear">
                    <div class="title-wrap"  style="margin-bottom:0">
                        <h2><?php the_title(); ?></h2>
                    </div>
                    <div class="content-wrap" style="padding-top: 0">
                        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
            <!-- End main content -->
<?php get_footer();
<?php 
/* 
Template name: Bond Program
*/
get_header(); ?>
        <div class="main-content bond-program-content">
            <div class="common-wrap clear">
                <div class="title-wrap">
                    <h2><?php the_title(); ?></h2>
                </div>
                <div class="content-wrap">
                    <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                    <?php endwhile; endif; ?>
                </div>
                <div class="documents-item-row">
                    <?php while( have_rows('documents') ): the_row(); ?>
                    <?php
                        $document = get_sub_field('document');
                    ?>
                    <div class="documents-item">
                        <?php if ($document['type'] == 'application') { ?>
                        <div class="documents-icon clear">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/documents-icon.png" alt="">
                        </div>
                        <?php } elseif ($document['type'] == 'image') { ?>
                        <div class="documents-icon clear">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/imagetype.png" alt="">
                        </div>
                        <?php } else { ?>
                        <div class="documents-icon clear">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/unknown.jpg" alt="">
                        </div>
                        <?php } ?>
                        <a href="<?php echo $document['url']; ?>" download><?php the_sub_field('document_title'); ?></a>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
        <!-- End main content -->
<?php get_footer();
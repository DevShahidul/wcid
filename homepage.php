<?php 
/* 
Template name: Home
*/
get_header(); ?>
            <div class="main-content home-content">
                <!-- hero-wrap
                ============== -->
                <?php
                  $heroImg = get_field('banner_image');
                ?>
                <section class="hero-wrap" style="background-image: url(<?php echo $heroImg; ?>)">
                    <div class="hero-content-wrap">
                        <div class="common-wrap clear">
                            <div class="hero-content">
                                <?php the_field('hero_text'); ?>
                            </div>
                            <a href="<?php the_field('banner_button_link'); ?>" class="btn large-btn"><?php the_field('banner_button_text'); ?></a>
                        </div>
                    </div>
                </section>
                <!-- End hero wrap -->
                <!-- Begin service wrap
                ======================= -->
                <section class="service-wrap">
                   <div class="service-row">
                       <div class="common-wrap clear">
                           <div class="sevice-item-row-wrap">
                              <?php while ( have_rows('service_content') ) : the_row(); ?>
                                <div class="service-item clear">
                                   <div class="service-figure-wrap">
                                       <figure>
                                           <img src="<?php the_sub_field('back_image'); ?>" alt="">
                                       </figure>
                                       <div class="service-icon-wrap">
                                           <div class="service-icon clear">
                                               <img src="<?php the_sub_field('icon'); ?>" alt="">
                                           </div>
                                           <h6><?php the_sub_field('title'); ?></h6>
                                       </div>
                                   </div>
                                   <div class="service-content">
                                       <p><?php the_sub_field('description'); ?></p>
                                       <div class="btn-wrap">
                                           <a href="<?php the_sub_field('button_link'); ?>" class="btn medium-btn yellow-btn"><?php the_sub_field('button_text'); ?></a>
                                       </div>
                                   </div>
                                </div>
                              <?php endwhile; ?>
                           </div>
                           <div class="side-bar-wrap">
                               <div class="side-ber-item">
                                   <div class="sidebar-title">
                                       <h6><?php echo get_field('top_section_head_text'); ?></h6>
                                   </div>
                                   <?php 
                                      $wp_query = new WP_Query(); 
                                      $wp_query->query('showposts=2&post_type=constructions'.'&paged='.$paged); 

                                      while ($wp_query->have_posts()) : $wp_query->the_post(); 
                                   ?>
                                   <div class="sidebar-content">
                                       <h6><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h6>
                                       <p><?php echo get_the_excerpt(); ?></p>
                                       <div class="btn-wrap">
                                           <a href="<?php the_permalink(); ?>" class="icon-btn">READ MORE</a>
                                       </div>
                                   </div>
                                    <?php 
                                    endwhile; 
                                    wp_reset_query();
                                    
                                    ?>                                   
                               </div>
                               <div class="side-ber-item">
                                   <div class="sidebar-title">
                                       <h6><?php echo get_field('second_section_head_text'); ?></h6>
                                   </div>
                                   <div class="sidebar-content side-bar-link-wrap">
                                      <?php echo get_field('second_section_links'); ?>   
                                   </div>
                               </div>
                           </div>
                       </div>   
                   </div>
                    <div class="service-row mission-wrap">
                        <div class="common-wrap clear">
                            <div class="mission-icon">
                                <img src="<?php the_field('mission_icon'); ?>" alt="">
                            </div>
                            <div class="mission-content">
                                <?php the_field('mission_text'); ?>
                                <div class="btn-wrap">
                                    <a href="<?php the_field('mission_link'); ?>" class="btn small-btn">READ MORE</a>
                                </div>
                            </div>
                        </div>        
                    </div>
                </section>
                <!-- End service wrap -->
                <!-- mission wrap
                ================== -->
                
                <!-- End mission wrap -->
            </div>
            <!-- End main content -->
            <!-- footer wrap
            ============== -->
<?php get_footer();
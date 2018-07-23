<?php 
/* 
Template name: Board Meetings
*/
get_header(); ?>
        <div class="main-content board-meetings-content">
            <div class="common-wrap clear">
                <div class="title-wrap">
                    <h2><?php the_title(); ?></h2>
                </div>
                <div class="board-meetings-content-wrap">
                    <?php 
                        $meeting_data = get_field('meeting_data');
                        while( have_rows('meeting_data') ): the_row();
                        ?>    
                        <div class="lead-text">
                            <h4><?php the_sub_field('head_text'); ?> <span><?php the_sub_field('sub_head_text'); ?></span></h4>
                            <p><?php the_sub_field('short_details'); ?></p>
                        </div>
                        <div class="borad-meetings-item-row">
                            <div class="border-meetings-col">
                                <?php

                                $rows = get_sub_field('meeting_dates');
                                $row_count = count($rows);
                                $max_item = ceil($row_count/2);
                                //echo $max_item.'Code71';
                                $count = 1;

                                while( have_rows('meeting_dates') ): the_row();
                                $meeting_date = get_sub_field('meeting_date', false, false);
                                $meeting_date = new DateTime($meeting_date);  
                                ?>
                                <div class="item-row">
                                    <p><?php echo $meeting_date->format('l'); ?></p>
                                    <span><?php echo $meeting_date->format('F j, Y'); ?></span>
                                </div>
                                <?php 

                                if ($count%$max_item == 0)
                                {  
                                     echo '</div><div class="border-meetings-col">';
                                } 
                                $count++;
                                endwhile; 
                                ?>
                            </div>
                        </div>
                        <?php
                        endwhile;  
                        ?>
                    </div> 
                </div>
            </div>
        </div>
        <!-- End main content -->
<?php get_footer();
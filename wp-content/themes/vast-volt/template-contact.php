<?php
/**
 * Template Name:  Template Contact Us

 */

get_header();
?>

  <!-- Page Title -->

        <section class="page-title centred">
            <div class="bg-layer parallax-bg" data-parallax='{"y": 100}' style="background-image:url(<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>)"></div>
            <div class="auto-container">
                <div class="content-box">
                     <h2><?php the_field('banner_content_tittle'); ?></h2>
                    <ul class="bread-crumb clearfix">
                        <li><a href='<?php echo site_url(); ?>'>Home</a></li>
                        <li><?php echo the_title(); ?></li>
                    </ul>

                </div>
            </div>
        </section>


        <!-- End Page Title -->

        <!-- google-map-section -->

        <section class="google-map-section">
            <div class="map-inner p_relative d_block">
              <?php the_field('contact_map_block'); ?>
            </div>
        </section>

        <!-- google-map-section end -->

        <!-- contact-style-three -->

        <section class="contact-style-three">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 info-column">
                        <div class="contact-info mr_70">
                            <h3><?php the_field('get_touch_heading'); ?></h3>
                            <p><?php the_field('get_touch_paragraph'); ?></p>
                            <ul class="info-list clearfix">
                                <li><?php the_field('get_touch_address'); ?></li>
                                <li><a href="<?php the_field('get_touch_email_link'); ?>"><?php the_field('get_touch_email'); ?></a></li>
                                <li><a href="<?php the_field('get_touch_number_link'); ?>"><?php the_field('get_touch_number'); ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 form-column">
                        <div class="form-inner">
                            <?php 
                                echo do_shortcode('[contact-form-7 id="145" title="contact page form"]'); 
                            ?>                              
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- contact-style-three end -->


<?php get_footer(); ?>




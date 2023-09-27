<?php

/**
 * Template Name:  Template services

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

  <!-- service-style-two -->

        <section class="service-style-two service-page-1 sec-pad">
            <div class="auto-container">

                <div class="sec-title p_relative centred mb_50">
                    <h5 class="d_block fs_17 lh_25 fw_medium mb_9"><?php the_field('services_page_tittle') ?></h5>
                    <h2 class="d_block fs_40 lh_50 fw_bold"><?php the_field('services_page_head') ?></h2>
                </div>

                <div class="row clearfix">
                    <?php if( have_rows('services_page_list') ): ?>
                        <?php while( have_rows('services_page_list') ): the_row(); ?>  

                        <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                            <div class="service-block-one">
                                <div class="inner-box">
                                    <div class="image-box p_relative d_block">
                                        <div class="shape-1 p_absolute l_0 b_0"></div>
                                        <div class="shape-2 p_absolute l_0 b_0"></div>
                                        <figure class="image p_relative d_block">
                                            <a href="<?php the_sub_field('services_page_list_link'); ?>">
                                                <img src="<?php the_sub_field('services_page_list_image') ?>" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="lower-content p_relative d_block">
                                        <div class="icon-box p_absolute r_30 w_90 h_90 lh_80 fs_40 b_radius_50 centred">
                                            <img src="<?php the_sub_field('services_page_list_icon') ?>" alt="">
                                        </div>
                                        <h3><a href="<?php the_sub_field('services_page_list_link'); ?>"><?php the_sub_field('services_page_list_head') ?></a></h3>
                                        <p><?php the_sub_field('services_page_list_paragraph') ?></p>
                                        <div class="link"><a href="<?php the_sub_field('services_page_list_link'); ?>"><?php the_sub_field('services_page_list_link_tittle') ?><i class="icon-7"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php endwhile; ?>
                     <?php endif; ?>      
                     
                </div>
            </div>
        </section>

        <!-- service-style-two end -->


        <!-- subscribe-section -->

        <section class="subscribe-section p_relative">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row align-items-center clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                            <div class="text p_relative d_block">
                                <h2>12% off when you book direct.</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                            <div class="form-inner p_relative d_block">

                                <?php//  echo do_shortcode(' [newsletter_form]'); ?>

                                 <form  method="post">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="enter your email to recieve 12% off" required="">
                                        <button type="submit">Give me 12% OFF<i class="fa fa-angle-right"></i></button>
                                    </div>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- subscribe-section end -->

    <!--  -->

<?php get_footer(); ?>




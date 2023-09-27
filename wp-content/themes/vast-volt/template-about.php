<?php
/**
 * Template Name:  Template about 

 */

get_header();
?>

    <!-- Page Title -->

        <section class="page-title centred">
            <div class="bg-layer parallax-bg" data-parallax='{"y": 50}' style="background-image:url(<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>)"></div> 
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


         <!-- about-section -->

        <section class="about-section sec-pad">
            <div class="pattern-layer"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_one">
                            <div data-animation-box class="image-box p_relative d_block pl_120 pb_100 mr_30">
                                <div class="shape-box">
                                    <div class="shape-1 p_absolute l_70 t_40 w_130 h_130"></div>
                                    <div class="shape-2 p_absolute b_45 r_40 w_130 h_130"></div>
                                </div>
                                <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block" data-animation="overlay-animation">
                                    <img src="<?php the_field('about_image_left'); ?>">
                                </figure>
                                <div class="icon p_absolute l_25 float-bob-y"><img src="https://vastvoltelectrical.com.au/wp-content/uploads/2023/04/electric_icon.png" alt="" style="filter: invert(44%) sepia(100%) saturate(7451%) hue-rotate(342deg) brightness(98%) contrast(123%);"></div>
                                <div class="text-box centred p_absolute l_0 b_0 z_2" style="background-color: #FFEE21;">
                                    <div class="light-icon p_absolute"><img src="../wp-content/uploads/2023/04/about_us_icon-2.png"></div>
                                    <h2 class="d_block fs_40 lh_40 fw_bold mb_18"><?php the_field('about_image_left_number'); ?></h2>
                                    <h3 class="d_block fw_medium"><?php the_field('about_image_left_details'); ?></h3>
                                </div>                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_one">
                            <div class="content-box p_relative d_block ml_30">
                                <div class="sec-title p_relative mb_25">
                                    <h5 class="d_block fs_17 lh_25 fw_medium mb_9"><?php the_field('about_page_right_sub_heading'); ?></h5>
                                    <h2 class="d_block fs_40 lh_50 fw_bold"><?php the_field('about_page_right_heading'); ?></h2>
                                </div>
                                <div class="text p_relative d_block mb_30">
                                    <p><?php the_field('about_page_right_paragraph'); ?></p>
                                </div>
                                <div class="inner p_relative d_block mb_40">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <div class="icon-box"><img src="<?php the_field('about_page_right_description_image'); ?>"></div>
                                                <h4><?php the_field('about_page_right_description'); ?></h4> 
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <div class="icon-box"><img src="<?php the_field('about_page_right_description_image_second'); ?>"></div>
                                                <h4><?php the_field('about_page_right_description_second'); ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-style-one clearfix">
                                      <?php while(has_sub_field('about_page_listing')): ?>
                                    <li><?php the_sub_field('about_page_listing_title'); ?></li>
                                     <?php endwhile; ?> 
                                </ul>
                                <figure class="signature"><img src="../wp-content/uploads/2023/04/SignVVE-about.png" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- about-section end -->


    <!-- service-style-three -->

        <section class="service-style-three p_relative sec-pad bg-color-3 centred">
            <div class="pattern-layer" style="background-image: url(../wp-content/uploads/2023/04/about-shape-32.png);"></div>
            <div class="auto-container">
                <div class="sec-title p_relative mb_50">
                    <h5 class="d_block fs_17 lh_25 fw_medium mb_9"><?php the_field('about_page_investors_sub_heading'); ?></h5>
                    <h2 class="d_block fs_40 lh_50 fw_bold"><?php the_field('about_page_investors_heading'); ?></h2>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme owl-nav-none">
                    <?php if( have_rows('about_page_service_slide_list') ): ?>   
                    <?php while( have_rows('about_page_service_slide_list') ): the_row(); ?>  

                        <div class="service-block-two">
                            <div class="inner-box">
                                <figure class="image-box"><a href="<?php the_sub_field('about_page_service_list_link'); ?>">
                                    <img src="<?php the_sub_field('about_page_service_list_image'); ?>"></a>
                                </figure>
                                <div class="lower-content">
                                    <div class="icon-box">
                                        <div class="icon-shape" style="background-image: url(../wp-content/uploads/2023/04/lectrical-icon-bg-shape.png);"></div>
                                        <div class="icon"><img src="<?php the_sub_field('about_page_service_list_icon'); ?>"></div>
                                    </div>
                                    <h3><a href="<?php the_sub_field('about_page_service_list_link'); ?>"><?php the_sub_field('about_page_service_list_head'); ?></a></h3>
                                    <p><?php the_sub_field('about_page_service_list_paragraph'); ?></p>
                                    <div class="link">
                                        <a href="<?php the_sub_field('about_page_service_list_link'); ?>"><span><?php the_sub_field('about_page_service_list_link_tittle'); ?></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>
                    <?php endif; ?>              

                </div>
            </div>
        </section>

        <!-- service-style-three end -->


         <!-- testimonial-style-two -->

        <section class="testimonial-style-two about-page p_relative">
            <div class="bg-layer"></div>
            <div class="auto-container">
                <div class="sec-title light p_relative mb_50 centred">
                    <h5 class="d_block fs_17 lh_25 fw_medium mb_9"><?php the_field('about_testimonials_title'); ?></h5>testimonials_slide_list
                    <h2 class="d_block fs_40 lh_50 fw_bold"><?php the_field('about_testimonials_heading'); ?></h2>
                </div>
                <div class="two-item-carousel owl-carousel owl-theme owl-nav-none">

                <?php while(has_sub_field('testimonials_slide_list')): ?>       

                    <div class="testimonial-block-one">
                        <div class="inner-box p_relative d_block">
                            <div class="light-icon"><img src="../wp-content/uploads/2023/04/lectrical-icon-bg.png" alt=""></div>
                            <div class="icon-box p_relative d_block fs_65"><img src="<?php the_sub_field('testimonials_slide_list_icon'); ?>" alt=""></div>
                            <p><?php the_sub_field('testimonials_slide_list_paragraph'); ?></p>
                            <div class="author-box p_relative d_block">
                             <!--    <figure class="author-thumb p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-1.jpg" alt=""></figure>-->
                                <h5><?php the_sub_field('testimonials_slide_list_name'); ?></h5>
                                <span class="designation p_relative d_block"><?php the_sub_field('testimonials_slide_list_description'); ?></span>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?> 
                </div>
            </div>
        </section>

    <!-- testimonial-style-two end -->

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
                            <form action="index.html" method="post">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="enter your email to recieve 12% off" required="">
                                    <button type="submit">Give me 12% OFF<i class="icon-7"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- subscribe-section end -->

<?php get_footer(); ?>




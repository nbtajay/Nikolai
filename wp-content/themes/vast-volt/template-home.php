<?php
/**
 * Template Name:  Template Home

 */

get_header();
?>


 <!-- banner-section -->

  
        <section class="banner-section banner-style-one p_relative overflow-hidden">

            <div class="shape">
                <div class="shape-1 p_absolute l_0 b_0 z_2"></div>
                <div class="shape-2 p_absolute l_0 t_0 z_2"></div>
                <div class="shape-3 p_absolute l_0 t_0 z_2"></div>
            </div>

            <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
        <?php if( have_rows('home_banner') ): ?>
          <?php while( have_rows('home_banner') ): the_row(); ?>                   

                <div class="slide-item p_relative pt_180">
                    <div class="image-layer p_absolute"  style="background-image:url(<?php the_sub_field('home_background_image'); ?>)"></div>
                    <div class="auto-container">
                        <div class="content-box p_relative d_block z_5">
                            <h2 class="p_relative d_block fs_60 lh_70 fw_bold mb_18"><?php the_sub_field('home_banner_head') ?></h2>
                            <p class="p_relative d_block fs_18"><?php the_sub_field('home_banner_paragraph') ?></p>
                        </div> 
                    </div>
                </div>

                 <?php endwhile; ?>
            <?php endif; ?>  

            </div>
        </section>
        
        <!-- banner-section end -->

        <!-- search-field -->
  <!--
     <section class="search-field search-field-all">
        <div class="auto-container">
            <div class="outer-container">

                <div class="title-text centred p_relative d_block">
                     <h6 style="background-color: #FFEE21;"><?php the_field('book_an_electrician_form_heading') ?></h6>
                </div>

                <div class="search-area">

                <?php//  echo do_shortcode('[contact-form-7 id="582" title="Book An Electrician Form"]'); ?>

                </div>
            </div>
        </div>
    </section>  -->

  <section class="search-field search-field-all">
        <div class="auto-container">
            <div class="outer-containers">
				<div data-tf-sidetab="bUCTROcT" data-tf-opacity="100" data-tf-iframe-props="title=Schedule an Inspection (Web)
" data-tf-transitive-search-params data-tf-button-color="#0445AF" data-tf-button-text="Try me!" data-tf-medium="snippet" style="all:unset;"></div><script src="//embed.typeform.com/next/embed.js"></script>

        </div>
        </div>
    </section>

        <!-- search-field end -->

        <!-- about-section -->

        <?php if( have_rows('about_us') ): ?>
         <?php while( have_rows('about_us') ): the_row(); ?>

            <section class="about-section sec-pad">
                <div class="pattern-layer"> </div>
                  <div class="auto-container">
                     <div class="row clearfix">

                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image_block_one">
                                <div data-animation-box class="image-box p_relative d_block pl_120 pb_100 mr_30">
                                    <div class="shape-box">
                                        <div class="shape-1 p_absolute l_70 t_40 w_130 h_130"></div>
                                        <div class="shape-2 p_absolute b_45 r_40 w_130 h_130"></div>
                                    </div>
                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block" data-animation="overlay-animation">
                                        <img src="<?php the_sub_field('about_group_left_image') ?>">
                                    </figure>

                                    <div class="icon p_absolute l_25 float-bob-y">
                                        <img src="<?php bloginfo('template_url')?>/images/electric_icon.png" alt="" style="filter: invert(44%) sepia(100%) saturate(7451%) hue-rotate(342deg) brightness(98%) contrast(123%);">
                                    </div>

                                    <div class="text-box centred p_absolute l_0 b_0 z_2" style="background-color: #FFEE21;">
                                        <div class="light-icon p_absolute">
                                            <img src="<?php bloginfo('template_url')?>/images/about_us_icon-2.png" alt="">
                                        </div>

                                        <h2 class="d_block fs_40 lh_40 fw_bold mb_18"><?php the_sub_field('about_year_text') ?></h2>
                                        <h3 class="d_block fw_medium"><?php the_sub_field('about_year_experience') ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content_block_one">
                                <div class="content-box p_relative d_block ml_30">
                                    <div class="sec-title p_relative mb_25">
                                        <h5 class="d_block fs_17 lh_25 fw_medium mb_9"><?php the_sub_field('about_head') ?></h5>
                                        <h2 class="d_block fs_40 lh_50 fw_bold"><?php the_sub_field('about_solutions_head') ?></h2>
                                    </div>
                                    <div class="text p_relative d_block mb_30">
                                        <p><?php the_sub_field('about_paragraph') ?></p>
                                    </div>
                                    <div class="inner p_relative d_block mb_40">
                                        <div class="row clearfix">
                                            <?php while(has_sub_field('about_electrical_solutions_list')): ?>
                                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 single-column">
                                                    <div class="single-item">
                                                        <div class="icon-box"><img src="<?php the_sub_field('about_electrical_solutions_icon') ?>"></div>
                                                        <h4><?php the_sub_field('about_electrical_solutions_tittle') ?></h4>
                                                    </div>
                                                </div> 
                                            <?php endwhile; ?> 
                                        </div>
                                    </div>
                                    <ul class="list-style-one clearfix">
                                        <?php while(has_sub_field('about_list')): ?>
                                            <li><?php the_sub_field('about_list_title') ?></li>
                                        <?php endwhile; ?>    
                                    </ul>
                                    <figure class="signature"><img src="<?php the_sub_field('about_signature') ?>"></figure>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </section>

        <?php endwhile; ?>
    <?php endif; ?> 

        <!-- about-section end -->
        


        <!-- feature-section -->

 <?php if(get_field('feature_blocks_list')): ?>

        <section class="feature-section">
            <div class="outer-container p_relative pl_30 pr_30">
                <div class="row clearfix">
                    <?php while(has_sub_field('feature_blocks_list')): ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one wow fadeInLeft" data-wow-duration="1500ms">
                                <div class="inner-box p_relative d_block clearfix">
                                    <figure class="image-box p_relative d_block">
                                        <img src="<?php the_sub_field('feature_blocks_image') ?>">
                                    </figure>
                       
                                    <div class="content-box p_relative d_block">
                                        <div class="icon-box p_relative d_block fs_50 lh_50"><img src="<?php the_sub_field('feature_blocks_icon') ?>"></div>
                                        <h3><a href="<?php the_sub_field('feature_blocks_tittle_link'); ?>"><?php the_sub_field('feature_blocks_tittle'); ?></a></h3>

                                        <p><?php the_sub_field('feature_blocks_paragraph'); ?></p>

                                        <div class="link"><a href="<?php the_sub_field('feature_blocks_quote_link'); ?>">
                                            <span><?php the_sub_field('feature_blocks_quote_title'); ?></span><i class="icon-7"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endwhile;?>    

                </div>
            </div>
        </section>

   <?php  endif; ?>  


        <!-- feature-section end -->


        <!-- service-section -->

         <section class="service-section">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url(./wp-content/uploads/2023/04/electrical_serviceshape-3.png);"></div>
                <div class="pattern-2" style="background-image: url(./wp-content/uploads/2023/04/electric_service-shape-4.png);"></div>
            </div>
            <div class="auto-container">
                <div class="sec-title p_relative mb_50 centred">
                    <h5 class="d_block fs_17 lh_25 fw_medium mb_9"><?php the_field('home_service_title'); ?></h5>
                    <h2 class="d_block fs_40 lh_50 fw_bold"><?php the_field('home_service_head'); ?></h2>
                </div>
                <div class="tabs-box">

                    <div class="tab-btn-box p_relative d_block mb_60 centred">
                        <ul class="tab-btns tab-buttons clearfix">
                            <li class="tab-btn active-btn" data-tab="#tab-1"><?php the_field('electrical_services_tab_heading'); ?></li>
                            <li class="tab-btn" data-tab="#tab-2"><?php the_field('secuirty_services_tab_heading'); ?></li>
                            <li class="tab-btn" data-tab="#tab-3"><?php the_field('safety__services_tab_heading'); ?></li>
                        </ul>
                    </div>

                    <div class="tabs-content">
                        <div class="tab active-tab" id="tab-1">
                            <div class="inner-box">
                                
                                <div class="row clearfix">
                                    <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                                        <div class="content_block_two">
                                            <div class="content-box p_relative d_block mr_70">
                                                <?php while( have_rows('electrical_services_tabbing_content') ): the_row(); ?> 
                                                    <div class="text p_relative d_block">
                                                        <h3><?php the_sub_field('service_tabbing_head'); ?></h3>
                                                        <p><?php the_sub_field('service_tabbing_paragraph'); ?></p>
                                                        <p><?php the_sub_field('service_tabbing_paragraph_2'); ?></p>
                                                    </div>
                                                <?php endwhile; ?> 

                                                <div class="row clearfix">
                                                    <?php while(has_sub_field('electrical_services_tab_list')): ?>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                                            <div class="single-item p_relative d_block">
                                                                <div class="icon-box"><img src="<?php the_sub_field('electrical_services_icon'); ?>"></div>
                                                                <h4><a href="<?php the_sub_field('electrical_services_link'); ?>"><?php the_sub_field('electrical_services_head'); ?></a></h4>
                                                                <p><?php the_sub_field('electrical_services_paragraph'); ?></p>
                                                            </div>
                                                        </div>
                                                    <?php endwhile;?>  

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-12 col-sm-12 image-column">
                                        <div class="image_block_two">
                                            <div class="image-box p_relative d_block mt_8">
                                                <figure class="image p_relative d_block">
                                                    <img src="<?php the_field('electrical_services_image'); ?>">
                                                </figure>
                                                <div class="icon-box"><img src="<?php the_field('electrical_services_icon'); ?>"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                      
                         
                            </div>
                        </div>

                        <div class="tab" id="tab-2">
                            <div class="inner-box">
                                <div class="content_block_two">
                                    <div class="content-box p_relative d_block">
                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-12 col-sm-12 text-column">
                                                <?php while( have_rows('secuirty_services_tbbing_content') ): the_row(); ?> 
                                                    <div class="text p_relative d_block">
                                                        <h3><?php the_sub_field('secuirty_service_tabbing_head'); ?></h3>
                                                        <p><?php the_sub_field('secuirty_tabbing_paragraph'); ?></p>
                                                        <p><?php the_sub_field('secuirty_tabbing_paragraph_2'); ?></p>
                                                        <p><?php the_sub_field('secuirty_tabbing_paragraph_3'); ?></p>
                                                    </div>
                                                <?php endwhile; ?>    
                                            </div>
                                            <div class="col-lg-8 col-md-12 col-sm-12 inner-column">
                                                <div class="inner-content">
                                                    <div class="row clearfix">
                                                        <?php while(has_sub_field('secuirty_services_tab_list')): ?>
                                                            <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                                                <div class="single-item p_relative d_block">
                                                                    <div class="icon-box"><img src="<?php the_sub_field('secuirty_services_icon'); ?>"></div>
                                                                    <h4><a href="air-conditioning.html"><?php the_sub_field('secuirty_services_head'); ?></a></h4>
                                                                    <p><?php the_sub_field('secuirty_services_paragraph'); ?></p>
                                                                </div>
                                                            </div>
                                                        <?php endwhile;?>                                                             
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab" id="tab-3">
                            <div class="inner-box">
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-12 col-sm-12 image-column">
                                        <div class="image_block_three">
                                            <div class="image-box p_relative d_block">
                                                <figure class="image p_relative d_block"><img src="<?php the_field('services_image_experts_image'); ?>"></figure>
                                                <div class="text">
                                                    <h5><i class="icon-45"></i><?php the_field('services_image_experts_texts'); ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                                        <div class="content_block_three">
                                            <div class="content-box">
                                                <?php while( have_rows('safety_services_tbbing_content') ): the_row(); ?> 
                                                    <div class="text">
                                                        <h3><?php the_sub_field('safety_service_tabbing_head'); ?></h3>
                                                        <p><?php the_sub_field('safety_service_tabbing_paragraph'); ?></p>
                                                        <p><?php the_sub_field('safety_service_tabbing_paragraph_2'); ?></p>
                                                        <p><?php the_sub_field('safety_service_tabbing_paragraph_3'); ?></p>
                                                    </div>
                                                 <?php endwhile; ?>  
                                                <div class="list-box clearfix">
                                                    <ul class="list-style-one clearfix">
                                                        <?php while(has_sub_field('safety_services_tab_list')): ?>
                                                            <li><?php the_sub_field('safety_services_list_text'); ?></li>
                                                        <?php endwhile; ?>     
                                                    </ul>
                                                    <ul class="list-style-one clearfix">
                                                        <?php while(has_sub_field('safety_services_tab_list_two')): ?>
                                                            <li><?php the_sub_field('safety_services_tab_list_two_text'); ?></li>
                                                        <?php endwhile; ?>     
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section> 

        
        <!-- service-section end -->


        <!-- chooseus-section -->

        <section class="chooseus-section p_relative">
            <div class="pattern-layer" style="background-image: url(./wp-content/uploads/2023/04/why-choose-us-shape-5.png);"></div>
            <div class="bg-layer"></div>
            <div class="outer-container p_relative">
                <div class="row clearfix">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_four">
                            <div class="content-box">
                                <div class="sec-title p_relative mb_30">
                                    <h5 class="d_block fs_17 lh_25 fw_medium mb_9"><?php the_field('choose_included_title'); ?></h5>
                                    <h2 class="d_block fs_40 lh_50 fw_bold mb_25"><?php the_field('choose_included_head'); ?></h2>
                                    <p><?php the_field('choose_included_paragraph'); ?></p>
                                </div>

                                <div class="inner-box centred p_relative d_block chooseus_desktop">
                                    <div class="row clearfix">
                                        <?php while(has_sub_field('choose_included_list')): ?>
                                            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12 single-column">
                                                <div class="single-item">
                                                    <div class="icon-box p_relative d_iblock w_80 h_80 lh_80 fs_40 centred b_radius_50 tran_5">
                                                        <img src="<?php the_sub_field('choose_included_list_icon'); ?>" alt="icon">
                                                    </div>
                                                    <h5 class="fs_18 fw_sbold"><?php the_sub_field('choose_included_list_title'); ?></h5>
                                                </div>
                                            </div>
                                         <?php endwhile;?>
                                     </div>
                                </div>

                                <div class="inner-box centred p_relative d_none chooseus_mobile">
                                    <div class="row clearfix">
                                        <div class="five-item-carousels owl-carousel owl-theme owl-nav-none owl-dots-none">
                                            <?php while(has_sub_field('choose_included_list')): ?>
                                                <div class="col-lg-12 col-md-12 col-sm-12 single-column">
                                                    <div class="single-item">
                                                        <div class="icon-box p_relative d_iblock w_80 h_80 lh_80 fs_40 centred b_radius_50 tran_5">
                                                            <img src="<?php the_sub_field('choose_included_list_icon'); ?>" alt="icon">
                                                        </div>
                                                        <h5 class="fs_18 fw_sbold"><?php the_sub_field('choose_included_list_title'); ?></h5>
                                                    </div>
                                                </div>
                                             <?php endwhile;?>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_four">
                            <div class="image-box mt_8">
                                <div class="image-shape">
                                    <div class="shape-1" style="background-image: url(./wp-content/uploads/2023/04/glad-shape-6-icon.png);"></div>
                                    <div class="shape-2" style="background-image: url(./wp-content/uploads/2023/04/glab-shape-7-icon.png);"></div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 single-image">
                                        <figure class="image-1 p_relative d_block">
                                            <img src="<?php the_field('video_background_image_clip'); ?>" alt="">
                                        </figure>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 video-column">
                                        <div class="video-inner p_relative d_block">
                                            <figure class="image-2 p_relative d_block">
                                                <img src="<?php the_field('video_background_image'); ?>" alt="">
                                            </figure>
                                           <div class="video-btn">
                                                <a href="<?php the_field('video_link'); ?>" class="lightbox-image" data-caption="">
                                                    <i class="fa-solid fa-play"></i>
                                                </a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> 

        <!-- chooseus-section end -->



    <!-- clients-section -->

    <?php if(get_field('clients_logo_list')): ?>
         <section class="clients-section p_relative">
            <div class="auto-container">
                <div class="five-item-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                    <?php while(has_sub_field('clients_logo_list')): ?>
                        <figure class="clients-logo p_relative d_block">
                            <a href="<?php the_sub_field('clients_logo_images_link'); ?>"><img src="<?php the_sub_field('clients_logo_images'); ?>" alt="icon"></a>
                        </figure>
                     <?php endwhile;?>
                </div>
            </div>
        </section> 
    <?php  endif; ?>   

    <!-- clients-section end -->



    <!-- faq-section -->

         <section class="faq-section p_relative">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_five">
                            <div class="image-box">
                                <div class="shape" style="background-image: url(./wp-content/uploads/2023/04/faq-service-shape-9.png);"></div>
                                <figure class="image image-1"><img src="<?php the_field('home_faq_left_image'); ?>"></figure>
                                <figure class="image image-2"><img src="<?php the_field('home_faq_left_image_short'); ?>"></figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_five">
                            <div class="content-box p_relative d_block ml_30">
                                <div class="sec-title p_relative mb_50">
                                    <h5 class="d_block fs_17 lh_25 fw_medium mb_9"><?php the_field('home_faq_title'); ?></h5>
                                    <h2 class="d_block fs_40 lh_50 fw_bold mb_25"><?php the_field('home_faq_head'); ?></h2>
                                    <p class="fs_16"><?php the_field('home_faq_paragraph'); ?></p>
                                </div>
                                <ul class="accordion-box">
                                    <?php if(get_field('home_faq_list')): ?>
                                    <?php while(has_sub_field('home_faq_list')): ?> 
                                        <li class="accordion block">
                                            <div class="acc-btn">
                                                <div class="icon-outer"><i class="fa fa-angle-down"></i></div>
                                                <h5><?php the_sub_field('home_faq_accordion_heading'); ?></h5>
                                            </div>
                                            <div class="acc-content">
                                                <div class="text">
                                                    <p><?php the_sub_field('home_faq_accordion_paragrap'); ?></p>
                                                </div>
                                            </div>
                                        </li>

                                    <?php endwhile;?>
                                    <?php  endif; ?>  
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- faq-section end -->

    <!-- testimonial-section -->

        <section class="testimonial-section p_relative">
            <div class="bg-layer parallax-bg" data-parallax='{"y": 100}' style="background-image: url(<?php the_field('testimonial_background_image_clip'); ?>);"></div>
             <div class="bg-layer-2" style="background-image: url(<?php the_field('testimonial_background_image'); ?>);"></div>
            <div class="auto-container">
                <div class="row align-items-center clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                        <div class="sec-title light p_relative mb_50">
                            <h5 class="d_block fs_17 lh_25 fw_medium mb_9"><?php the_field('testimonial_tittle'); ?></h5>
                            <h2 class="d_block fs_40 lh_50 fw_bold"><?php the_field('testimonial_head'); ?></h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 testimonial-column">
                        <div class="testimonial-inner p_relative d_block ml_30">
                            <div class="single-item-carousel owl-carousel owl-dots-none nav-style-one">
                                <?php if(get_field('home_testimonial_slide')): ?>
                                <?php while(has_sub_field('home_testimonial_slide')): ?>  
                                    <div class="testimonial-block-one">
                                        <div class="inner-box p_relative d_block">
                                            <div class="light-icon"><img src="./wp-content/uploads/2023/04/client-say-icon-3.png" alt=""></div>
                                            <div class="icon-box p_relative d_block fs_65">
                                                 <img src="./wp-content/uploads/2023/04/client_quotie.png">
                                            </div>
                                            <p><?php the_sub_field('home_testimonial_slide_paragraph'); ?></p>

                                             <div class="author-box p_relative d_block" style="text-align: right;">
                                                <h5 style="display: inline-block;"><?php the_sub_field('home_testimonial_author_name'); ?></h5>
                                                <span class="designation p_relative d_block" style="display: inline-block;">
                                                    <?php the_sub_field('home_testimonial_author_designation'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile;?>
                                <?php  endif; ?>          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> 

        <!-- testimonial-section end -->

        <!-- cta-section -->

         <section class="cta-section bg-color-1 p_relative pt_120 pb_120">
                <div class="pattern-layer">
                    <div class="pattern-1" style="background-image: url(./wp-content/uploads/2023/04/shape-12.png);"></div>
                    <div class="pattern-2" style="background-image: url(./wp-content/uploads/2023/04/shape-13.png);"></div>
                   <!--  <div class="pattern-3" style="background-image: url(assets/images/shape/shape-7.png);"></div>
                    <div class="pattern-4" style="background-image: url(assets/images/shape/shape-7.png);"></div> -->
                </div>
                <figure class="image-layer"><br>
                <img src="<?php the_field('switchboard_left_image'); ?>"></figure><br><br>
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content_block_six">
                                <div class="content-box p_relative d_block mr_20">
                                    <div class="sec-title p_relative mb_13">
                                        <h5 class="d_block fs_17 lh_25 fw_medium mb_13"><?php the_field('switchboard_sub_heading'); ?></h5>
                                        <h2 class="d_block fs_40 lh_50 fw_bold"><?php the_field('switchboard_heading'); ?></h2>
                                    </div>
                                    <div class="text">
                                        <p><?php the_field('switchboard_paragraph'); ?></p>
                                    </div>
                                    <div class="support-box p_relative d_block">
                                        <div class="icon-box p_absolute l_0 t_0 w_70 h_70 lh_70 b_radius_50 fs_40"><img src="<?php the_field('switchboard_contact_icon'); ?>"></div>
                                        <h5><?php the_field('switchboard_contact_details'); ?></h5>
                                        <h3><a href="<?php the_field('switchboard_contact_link'); ?>"><?php the_field('switchboard_contact_number'); ?></a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <!-- cta-section end -->

        <!-- funfact-section -->
        
        <?php if(get_field('home_funfact_blocks')): ?>   
            <section class="funfact-section p_relative centred bg-color-2 funfact_desktop">
                <div class="auto-container">
                    <div class="inner-container p_relative">
                       <?php 
                       $counter = 0;
                       while(has_sub_field('home_funfact_blocks')): 
                        $counter++;
                        ?> 
                            <div class="counter-block-one wow slideInUp animated" data-wow-delay="<?php echo $counter;?>00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="icon-box p_relative d_block fs_60">
                                        <img src="<?php the_sub_field('home_funfact_icon'); ?>"></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1500" data-stop="<?php the_sub_field('home_funfact_count_fix_head'); ?>"><?php echo $counter;?>00ms</span>
                                    </div>
                                    <p><?php the_sub_field('home_funfact_count_text'); ?></p>
                                </div>
                            </div>
                        <?php endwhile;?>                                 
                    </div> 
                </div>
            </section>
        <?php  endif; ?>  

        <!-- funfact-section -->


        <!-- funfact-section  mobile -->
        
     <?php if(get_field('home_funfact_blocks')): ?>   
        <section class="funfact-section p_relative centred bg-color-2 d_none funfact_mobile">
            <div class="auto-container">
                <div class="inner-container p_relative">
                    <div class="five-item-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                       <?php 
                       $counter = 0;
                       while(has_sub_field('home_funfact_blocks')): 
                        $counter++;
                        ?> 
                            <div class="counter-block-one wow slideInUp animated" data-wow-delay="<?php echo $counter;?>00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="icon-box p_relative d_block fs_60">
                                        <img src="<?php the_sub_field('home_funfact_icon'); ?>"></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1500" data-stop="<?php the_sub_field('home_funfact_count_fix_head'); ?>"><?php echo $counter;?>00ms</span>
                                    </div>
                                    <p><?php the_sub_field('home_funfact_count_text'); ?></p>
                                </div>
                            </div>

                        <?php endwhile;?>
                             
                    </div>
                </div>    
            </div>
        </section>
    <?php  endif; ?>  

    <!-- funfact-section -->


    <!-- news-section -->

        <section class="news-section p_relative sec-pad">
            <div class="auto-container">
                <div class="sec-title p_relative mb_50 centred">
                    <h5 class="d_block fs_17 lh_25 fw_medium mb_9"><?php the_field('blog_section_tittle');  ?></h5>
                    <h2 class="d_block fs_40 lh_50 fw_bold"><?php the_field('blog_section_head');  ?></h2>
                </div>
                <div class="row clearfix">

                    <?php
                    global $post;

                    $myposts = get_posts( array(
                        'post_type'      => 'post',
                        'posts_per_page' => 3,

                    ) );

                    if ( $myposts ) {
                        foreach ( $myposts as $post ) : 
                            setup_postdata( $post ); ?>
           

                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <figure class="image-box"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?></a></figure>
                                <div class="lower-content p_relative d_block">
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <ul class="post-info clearfix">
                                        <li><i class="icon-42"></i><?php echo get_the_date(); ?></li>
                                        <li><i class="icon-43"></i><a href="javascript:void(0)"><?php
                                            $author_id = get_post_field ('post_author', $post_id);
                                            $display_name = get_the_author_meta( 'display_name' , $author_id ); 
                                            echo $display_name;
                                            ?></a></li>
                                    </ul>
                                   <div class="lexpt"><?php the_excerpt();?></div>
                                    <div class="link"><a href="<?php the_permalink(); ?>">Read more<i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <?php
                        endforeach;
                        wp_reset_postdata();
                    }
                    ?>

                </div>
            </div>
        </section>  

        <!-- news-section end -->

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




<?php
/**
 * Template Name:  Template Blog

 */

get_header();
?>

<!-- news-section -->


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


        <section class="news-section p_relative sec-pad">
            <div class="auto-container">
                <div class="row clearfix">

                    <?php
                    global $post;

                    $myposts = get_posts( array(
                        'post_type'      => 'post',
                        'posts_per_page' => 100,

                    ) );

                    if ( $myposts ) {
                        foreach ( $myposts as $post ) : 
                            setup_postdata( $post ); ?>
           

                    <div class="col-lg-4 col-md-6 col-sm-12 news-block mb_30">
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



<?php get_footer(); ?>




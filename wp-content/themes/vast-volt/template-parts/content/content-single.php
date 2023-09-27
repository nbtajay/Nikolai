<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<!-- Page Title -->

    <section class="page-title centred">
        <div class="bg-layer parallax-bg" data-parallax='{"y": 50}' style="background-image:url(<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>)"></div> 
        <div class="auto-container">
            <div class="content-box">
                <h2><?php echo the_title(); ?></h2>
                <ul class="bread-crumb clearfix">
                    <li><a href='<?php echo site_url(); ?>'>Home</a></li>
                    <li><?php echo the_title(); ?></li>
                </ul>
            </div>
        </div>
    </section>

<!-- End Page Title -->




<?php 
if ( is_single() ) {

    ?>

<section class="blog-single-page pt_120 pb_80 mr_single">
	<div class="auto-container">
		<div class="row clearfix">
			<div class="wp-style content-side col-lg-8">
				<div class="blog-details-content p_relative d_block">
					<div class="news-block-one">
						<div class="inner-box p_relative d_block">
							<figure class="image-box">
                                <?php twenty_twenty_one_post_thumbnail(); ?>

                                <!-- Gallery-section -->

								    <?php if(get_field('blog_gallery_list')): ?>
								         <section class="blog-gallery-section p_relative">
								            <div class="auto-container">
								                <div class="blog-gallery-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
								                    <?php while(has_sub_field('blog_gallery_list')): ?>
								                        <figure class="clients-logo p_relative d_block">
								                           <img src="<?php the_sub_field('blog_gallery_image'); ?>" alt="icon">
								                        </figure>
								                     <?php endwhile;?>
								                </div>
								            </div>
								        </section> 
								    <?php  endif; ?>   

								<!-- Gallery-section end -->

                                <div class="category"><a href='<?php echo site_url(); ?>'><?php echo get_the_date(); ?></a></div>
                            </figure>

                            <div class="lower-content p_relative d_block">
								<ul class="post-info clearfix">
                                        <li><i class="icon-42"></i><?php echo get_the_date(); ?></li>
                                        <li><i class="icon-43"></i><a href="javascript:void(0)"><?php
                                            $author_id = get_post_field ('post_author', $post_id);
                                            $display_name = get_the_author_meta( 'display_name' , $author_id ); 
                                            echo $display_name;
                                            ?></a></li>
                                    </ul>
								<div class="text">
									<?php
										the_content();

										wp_link_pages(
											array(
												'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
												'after'    => '</nav>',
												/* translators: %: Page number. */
												'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
											)
										);
										?>
								</div>
							</div>
						</div>						
					</div>

					<!-- <div class="author-box">
						
					</div> -->

				</div>
			</div>

			<div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
				<div class="blog-sidebar ml_20">
					<?php dynamic_sidebar( 'sidebar-3' ); ?>
				</div>	
			</div>

		</div>		
	</div>	
</section>



    <?php
}

 ?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header alignwide">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php// twenty_twenty_one_post_thumbnail(); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
			)
		);
		?>


	</div>




	<!-- .entry-content -->

	<footer class="entry-footer default-max-width">
		<?php twenty_twenty_one_entry_meta_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
		<?php get_template_part( 'template-parts/post/author-bio' ); ?>
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->













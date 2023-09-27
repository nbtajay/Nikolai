<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes  = 'main-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
?>



        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box clearfix">
                    <figure class="logo-box pull-left"><a href="<?php bloginfo('url')?>"><img src="<?php bloginfo('template_url')?>/images/logo-search.png" alt=""></a></figure>
                    <div class="close-search pull-right"><span class="fa fa-times"></span></div>
                </div>
                <div class="overlay-layer"></div>
                <div class="auto-container">
                    <div class="search-form">
         


                            <form method="post" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                               <div class="form-group">
                                <fieldset>
                                     <input type="text" name="s" id="s" class="form-control" name="search-input" value="<?php echo get_search_query(); ?>" placeholder="Type your keyword and hit" required >
                                   
                                    
                                        <button type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
                                </fieldset>
                                </div>
                            </form>



                    </div>
                </div>
            </div>
        </div>
<header id="masthead" class="<?php echo esc_attr( $wrapper_classes ); ?>">
<!-- header-top -->
<div class="header-top">
    <div class="top-inner">
        <div class="left-column">

            <?php dynamic_sidebar( 'header-top-left' ); ?>
        </div>
        <div class="right-column">
         
            <?php dynamic_sidebar( 'header-top-right' ); ?>
        </div>
    </div>
</div>  
<!-- end -->






<!-- header-lower -->
<div class="header-lower">
    <div class="outer-box">
        <div class="menu-area clearfix">
            <div class="logo-box">
                <figure class="logo"><a href="<?php bloginfo('url')?>"><?php the_custom_logo(); ?></a></figure>
            </div>
            <!--Mobile Navigation Toggler-->
            <div class="mobile-nav-toggler">
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
            </div>
            <nav class="main-menu navbar-expand-md navbar-light">
                
                		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'menu_class'      => '',
				'container_id' => 'navbarSupportedContent' ,
				'container_class' => 'collapse navbar-collapse show clearfix',
				'items_wrap'      => '<ul class="navigation clearfix">%3$s</ul>',
				 'add_li_class'  => 'dropdown',
				'fallback_cb'     => false,
			)
		);
		?>
           
               
            </nav>
        </div>
        <div class="nav-right">
            <?php dynamic_sidebar( 'header-nev-right' ); ?>
      
        </div>
    </div>
</div>


	<?php //get_template_part( 'template-parts/header/site-branding' ); ?>
	<?php //get_template_part( 'template-parts/header/site-nav' ); ?>
    

</header>
<!-- #masthead -->
<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fa fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="<?php bloginfo('url')?>"><img src="/wp-content/uploads/2023/04/voltaze-white-logo.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Port Phillip, Melbourne, VIC</li>
                        <li><a href="tel:1300870115"> 1300 870 115</a></li>
                        <li><a href="mailto:info@vastvoltelectrical.com.au">info@vastvoltelectrical.com.au</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End Mobile Menu -->
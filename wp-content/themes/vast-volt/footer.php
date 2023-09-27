<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	   <footer id="site-footer" role="contentinfo" class="main-footer p_relative ">
            <div class="footer-top">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget">
                                 <?php dynamic_sidebar( 'sidebar-logo' ); ?>
                            </div>                                        
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ml_100">
                                <?php dynamic_sidebar( 'sidebar-menu' ); ?>  
                            </div>                         
                        </div>

                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                            <?php dynamic_sidebar( 'sidebar-service' ); ?>                           
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <?php dynamic_sidebar( 'sidebar-contact' ); ?>                           
                        </div>
                    </div>    
                </div>
                <!-- .footer-credits -->            
            </div>
            <div class="footer-bottom p_relative">
                <div class="auto-container">
                    <div class="bottom-inner p_relative">
                        <div class="copyright">
                              <?php dynamic_sidebar( 'copyright' ); ?> 
                        </div>  
                    </div>
                </div>                
            </div>                       

        </footer>


        
           <!--Scroll to top-->
    <div class="scroll-to-top">
    <div>
        <div class="scroll-top-inner">
            <div class="scroll-bar">
                <div class="bar-inner"></div>
            </div>
            <div class="scroll-bar-text" style="color: #E00000;">Go To Top</div>
        </div>
    </div>
</div>
        <!-- Scroll to top end -->


        <!-- #site-footer -->

</div><!-- #page -->

<?php wp_footer(); ?>



	<!-- script -->

	<script src="<?php bloginfo( 'template_url' ); ?>/new-js/jquery.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/new-js/popper.min.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/new-js/bootstrap.min.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/new-js/plugins.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/new-js/owl.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/new-js/wow.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/new-js/validation.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/new-js/jquery.fancybox.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/new-js/appear.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/new-js/scrollbar.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/new-js/isotope.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/new-js/jquery.nice-select.min.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/new-js/jquery-ui.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/new-js/parallax-scroll.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/new-js/script.js"></script>

	<!-- script -->


</body>



</html>

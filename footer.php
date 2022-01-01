<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap-child
 * 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() ) : ?>

    <?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); 
    
    ?>
<?php endif; ?>


<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

                    <div class="site-info">    

                        <ul>
                                        
                            <li><h5>Useful Links</h5><li>
                                                
                            <li><a href="<?php echo esc_url( get_permalink(37) ); ?>"><?php esc_html_e( 'Contact Us', 'textdomain' ); ?></a></li>
                                                
                            <li><a href="<?php echo esc_url( get_permalink(21) ); ?>"><?php esc_html_e( 'About Us', 'textdomain' ); ?></a></li>
                                                
                            <li><a href="<?php echo esc_url( get_permalink(44) ); ?>"><?php esc_html_e( 'Frequently Asked Questions', 'textdomain' ); ?></a></li>
                                            
                        </ul>
                                            
                        <ul>
                                                
                            <li><h5>Legal</h5></li>   
                                            
                            <li><a href="<?php echo esc_url( get_permalink(76) ); ?>"><?php esc_html_e( 'Child Safeguarding', 'textdomain' ); ?></a></li>
                                                
                            <li><a href="<?php echo esc_url( get_permalink(40) ); ?>"><?php esc_html_e( 'Cookie Policy', 'textdomain' ); ?></a></li>
                                                
                            <li><a href="<?php echo esc_url( get_permalink(1022) ); ?>"><?php esc_html_e( 'Privacy Policy', 'textdomain' ); ?></a></li>
                                            
                        </ul>
                                            
                        <ul>
                                            
                            <li><h5>Site Navigation</h5></li>
                                                
                            <li><a href="<?php echo esc_url( get_permalink(82) ); ?>"><?php esc_html_e( 'Home', 'textdomain' ); ?></a></li>
                                                
                            <li><a href="#">Back to Top</a>&nbsp;<i class="fa fa-arrow-circle-up"></i></li>
                                            
                        </ul>   
                
                    </div><!-- .site-info -->
                            

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>


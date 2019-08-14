<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer footer-color" role="contentinfo">
		<div class="footer-block" >
        <div class="">
        <div class="row">
		<div class="col-lg-6 col-sm-4 col-xs-12">
		<?php twentysixteen_the_custom_logo(); ?>
		 <div class="top-social d-show">
		<?php dynamic_sidebar('logo-social');?>
        </div>
		</div> 
		<div class="col-lg-6 col-sm-8 col-xs-12">
		<?php dynamic_sidebar('footer-1');?>
		</div>
			<?php if ( has_nav_menu( 'secondary' ) ) : ?>
				<div class="col-md-6">
				<nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'secondary',
							'menu_class'     => 'primary-menu',
						 ) );
					?>
				</nav><!-- .main-navigation -->
			 </div>
			 <?php endif; ?>
       
			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'social',
							'menu_class'     => 'social-links-menu',
							'depth'          => 1,
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>',
						) );
					?>
				</nav><!-- .social-navigation -->
			<?php endif; ?>

</div>

<div class="copyy">
	  &copy Good Cents <?php echo date("Y"); ?>
</div>
 
 	<div class="app-right">
        <a class="sign-up" href="https://itunes.apple.com/us/app/good-cents-time-to-make-difference/id1094837798?ls=1&mt=8" target="_blank"> sign up </a>
		<a href="https://itunes.apple.com/us/app/good-cents-time-to-make-difference/id1094837798?ls=1&mt=8" target="_blank"><img src="http://demosrvr.com/wp/goodcents/wp-content/uploads/2018/02/app-icon.png"></a>
 
</div>

 <div class="top-social m-show">
 
		<?php dynamic_sidebar('logo-social');?>
        </div>
                
<div class="clr"></div>		
</div>

		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php if (!is_page( array( 10, 8 ) )  ):?>
   <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<?php endif; ?>

<script>
jQuery(document).ready(function($){
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
  
 
    if (scroll >= 100) {
        $(".site-header").addClass("darkHeader");
    } else {
        $(".site-header").removeClass("darkHeader");
    }
});
});

   </script>
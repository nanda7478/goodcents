<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/goodcents-child/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.typekit.net/iwq6hqd.css">
  <script src="<?php echo site_url(); ?>/wp-content/themes/goodcents-child/bootstrap/js/bootstrap.min.js"></script>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">
	 
		<header id="masthead" class="site-header" role="banner">
			<div class="site-header-main">
			<div class="row">
			<div class="col-md-6 lososo">	
				<div class="site-branding">

					<div class="site-logo">
					<?php twentysixteen_the_custom_logo(); ?>
                    <a href="<?php echo site_url(); ?>" class="logo2">
                    	<img width="240px;" src="<?php echo site_url(); ?>/wp-content/themes/goodcents-child/img/GoodCents_Logo_Color.png" />
                        </a>
					</div>
					<div class="top-social">
					<?php dynamic_sidebar('logo-social');?>
					</div>
                    
<a class="sign-cus tab-show" href="https://itunes.apple.com/us/app/good-cents-time-to-make-difference/id1094837798?ls=1&mt=8">Sign Up</a>
					  
				</div><!-- .site-branding -->
		</div>
		<div class="col-md-6 mensus">	
				<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
					<button id="menu-toggle1" class="menu-toggle"> <i class="fa fa-bars"></i> </button>

					<div id="site-header-menu" class="site-header-menu">
                     
                    <span class="remove"> <img src="<?php echo site_url(); ?>/wp-content/themes/goodcents-child/img/close.jpg" />  </span>
                    
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
									 ) );
								?>
							</nav><!-- .main-navigation -->
						<?php endif; ?>

						<?php if ( has_nav_menu( 'social' ) ) : ?>
							<nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentysixteen' ); ?>">
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
					</div><!-- .site-header-menu -->
				<?php endif; ?>
			</div><!-- .site-header-main -->
</div>
</div>
			<?php if ( get_header_image() ) : ?>
			 
				<div class="header-image">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>">
					</a>
				</div><!-- .header-image -->
			<?php endif; // End header image check. ?>
		</header><!-- .site-header -->
        
        <script> 
   jQuery(document).ready(function($) {
    $("#menu-toggle1").click(function(){
	 $("body").addClass("rakesh");	
	});
	$(".remove").click(function(){
		 $("body").removeClass("rakesh");	
	});
	
});
</script> 
		<div id="content" class="site-content">
 
  
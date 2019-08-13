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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
 
     <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/icofont.css"> 
 
     <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.css"> 
     <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/carousel.css"> 
      <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/main.css">
      <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/custom.css"> 


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function(){

    jQuery('a[href^="#menu-section"]').on('click', function(event) {

    var target = jQuery(this.getAttribute('href'));

    if( target.length ) {
        event.preventDefault();
        jQuery('html, body').stop().animate({
            scrollTop: target.offset().top-70
        }, 1100);
    }

     });

    });
	
	
    </script>


<script>
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 1) {
        $(".site-header").addClass("darkHeader");
		
    } else {
        $(".site-header").removeClass("darkHeader");
    }
});
</script>

<style type="text/css">
	.foo {
  display: none;
}
</style>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">
  
		<header id="masthead" class="site-header" role="banner">
			<div class="site-header-main">
               
               <div class="container">
               <div class="patiobar-header">
               <div class="row">
               <div class="col-lg-3 col-sm-6">
                
				<div class="site-branding">
					<?php twentysixteen_the_custom_logo(); ?>

		  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="custom-logo-link l2" rel="home" itemprop="url"><img src="<?php echo get_theme_mod( 'your_theme_hover_logo' ); ?>" class="custom-logo" alt="Patio Bar" itemprop="logo" width="240" height="51"></a>
               
		 </div><!-- .site-branding -->
                
				</div><!-- col-lg-4 -->

<div class="m-nav">                
<span class="humbers" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
    document.getElementById("main").style.marginLeft = "100%";
	
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>

<script type="text/javascript">
$(document).ready(function() {
  $('.humbers').on('click', function() {
  $('body').addClass('fixed-mobile-menu');
   });
});

$(document).ready(function() {
  $('.closebtn').on('click', function() {
  $('body').removeClass('fixed-mobile-menu');
   });
});
</script>

  <div id="mySidenav" class="sidenav right-header">
 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 
 <div class="header-social-menu"> 
                 	<ul>
                    <li><a href="https://www.facebook.com/PatioBarNJ/" target="_blank"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/patiobarnj?lang=en" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="http://instagram.com/PatioBarNJ" target="_blank"><i class="fab fa-instagram" ></i></a></li>
                    </ul>
                 	</div>
                    
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
 
 </div>
 </div>
               
                
                <div class="col-md-6 t-none">
				<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
					<button id="menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'twentysixteen' ); ?></button>

					<div id="site-header-menu" class="site-header-menu">
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
                 </div><!-- col-lg-4 -->

                 <div class="col-md-3 t-none">
                 	<div class="header-social-menu">
                 	<ul>
                    <li><a href="https://www.facebook.com/PatioBarNJ/" target="_blank"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/patiobarnj?lang=en" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="http://instagram.com/PatioBarNJ" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                 	</div>
                 </div><!-- col-lg-4 -->

				</div> <!-- row -->
				</div> <!-- patiobar-header -->
                </div><!-- Container -->

			</div><!-- .site-header-main -->

			<?php if ( get_header_image() ) : ?>
				<?php
					/**
					 * Filter the default twentysixteen custom header sizes attribute.
					 *
					 * @since Twenty Sixteen 1.0
					 *
					 * @param string $custom_header_sizes sizes attribute
					 * for Custom Header. Default '(max-width: 709px) 85vw,
					 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
					 */
					$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
				?>
				<div class="header-image">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				</div><!-- .header-image -->
			<?php endif; // End header image check. ?>
		</header><!-- .site-header -->

		<div id="content" class="site-content">

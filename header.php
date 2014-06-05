<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package codeinwp
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11"/>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


        <!-- [begin] header -->
        <header>
			
        	<div class="container">
				<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
 				<div class="logo">
					<?php if ( get_theme_mod( 'codeinwp_logo' ) ) : ?>
                        <div class='site-logo'>
                            <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo get_theme_mod( 'codeinwp_logo' ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
                        </div>
                    <?php else : ?>
                        <hgroup>
                            <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
                            <h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
                        </hgroup>
                    <?php endif; ?>
                </div><!-- .logo -->

            <?php if( get_theme_mod( 'codeinwp_social_link_fb' ) || get_theme_mod( 'codeinwp_social_link_tw' ) || get_theme_mod( 'codeinwp_social_link_gp' ) || get_theme_mod( 'codeinwp_social_link_in' ) || get_theme_mod( 'codeinwp_social_link_yo' ) ): ?>

              <div class="header-right">
                    <div class="header-social">
	                    <?php if ( get_theme_mod( 'codeinwp_social_link_fb' ) ) : ?>
                    		<a href="<?php echo get_theme_mod( 'codeinwp_social_link_fb' ); ?>" class="fb-icon" title="Facebook" target="_blank"></a>
                        <?php endif; ?>
	                    <?php if ( get_theme_mod( 'codeinwp_social_link_tw' ) ) : ?>
                    		<a href="<?php echo get_theme_mod( 'codeinwp_social_link_tw' ); ?>" class="tw-icon" title="Twitter" target="_blank"></a>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'codeinwp_social_link_gp' ) ) : ?>
                    		<a href="<?php echo get_theme_mod( 'codeinwp_social_link_fgp' ); ?>" class="gp-icon" title="Google+" target="_blank"></a>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'codeinwp_social_link_in' ) ) : ?>
                    		<a href="<?php echo get_theme_mod( 'codeinwp_social_link_in' ); ?>" class="in-icon" title="Linkedin" target="_blank"></a>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'codeinwp_social_link_yo' ) ) : ?>
                    		<a href="<?php echo get_theme_mod( 'codeinwp_social_link_yo' ); ?>" class="yo-icon" title="Youtube" target="_blank"></a>
                        <?php endif; ?>
                    </div><!-- .header-social -->
                </div><!-- .header-right -->
            
            <?php endif; ?>

            </div><!-- .container -->
            
            <div class="main-menu-wrap">
            	<div class="container">
                               
                	<div class="main-navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'my-primary', 'container' => false, 'fallback_cb' => false ) ); ?>
                    </div>
                   
                </div><!-- .container -->
                <div class="menu-shadow"></div>
            </div><!-- .main-menu-wrap -->
            	
        </header>  
        <!-- [end] header -->
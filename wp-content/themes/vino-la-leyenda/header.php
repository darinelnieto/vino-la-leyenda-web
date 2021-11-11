<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Vino-la-leyenda
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php 
	wp_body_open(); 
	$logo = get_field('logo', 'option');
?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'vino-la-leyenda' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row alinea-row">
				<div class="col-3">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo $logo['url'] ?>" alt="Logo vino la leyenda" class="logoHeader">
					</a>
				</div>
				<div class="col-9 col-lg-6">
					<nav id="site-navigation" class="main-navigation">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</nav><!-- #site-navigation -->
				</div>
				<div class="col-12 col-lg-3 searchContent">

				</div>
			</div>
		</div>
	</header><!-- #masthead -->

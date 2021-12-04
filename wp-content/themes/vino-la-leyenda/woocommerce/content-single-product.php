<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	<div class="banner-post">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h2 class="titulo-single-product"><?php echo $product->get_title(); ?></h2>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row mt-5 content-single-product-detail">
			<div class="col-12 col-lg-6">
				<?php do_action( 'woocommerce_before_single_product_summary' ); ?>
			</div>
			<div class="col-12 col-lg-6 text-center" style="background:rgba(0, 0, 0, .6); border: double #efcb80;">
				<h2 class="tituloSigleProduct mb-4">Detalles del producto</h2>
				<p class="productDescriptionSingle mb-4"><?php echo $product->get_description(); ?></p>
				<?php do_action( 'woocommerce_single_product_summary' ); ?>
			</div>
		</div>
	</div>
</div>

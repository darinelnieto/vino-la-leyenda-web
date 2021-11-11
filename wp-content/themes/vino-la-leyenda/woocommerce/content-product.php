<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php wc_product_class( '', $product ); ?>>
	<div class="card contentProductCard">
		<div class="imgProduct">
			<a href="<?php echo $product->get_permalink(); ?>">
				<?php echo($product->get_image());?>
			</a>
			<div class="btn-addTocart">
				<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
			</div>
		</div>
		<div class="descripcion mt-2">
			<a href="<?php echo $product->get_permalink(); ?>">
				<h5 class="tituloProduct"><?php echo($product->get_title()); ?></h5>
				<div class="desciption-and-price pl-3 pr-3">
					<p class="descripcion text-left"><?php echo $product->get_short_description(); ?></p>
					<p class="descripcion text-left">Precio: $<?php echo $product->get_price(); ?></p>
				</div>
			</a>
		</div>
	</div>
</li>

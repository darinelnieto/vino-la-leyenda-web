<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Vino-la-leyenda
 */
$fondo = get_field('fondo_post', 'option');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<section style="background:#000;">
		<?php if(get_field('contenido')){ ?>
			<div class="bannerPost" style="background:url(<?php echo the_field('imagen') ?>)">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<?php
							if ( is_singular() ) :
								the_title( '<h1 class="entry-title">', '</h1>' );
							else :
								the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
							endif;

							?>
						</div>
					</div>
				</div>
			</div>
			<div class="content-post" style="background:url(<?php echo $fondo ?>)">
				<div class="container">
					<div class="row alinea-row mt-5 pb-5">
						<?php foreach(get_field('contenido') as $itemPost){ ?>
							<?php if($itemPost['contenido_a_mostrar'] === 'Imagen'){ ?>
								<div class="col-12 col-lg-6">
									<img src="<?php echo $itemPost['imagen'] ?>" alt="" class="imagenPost">
								</div>
							<?php }else if($itemPost['contenido_a_mostrar'] === 'Video'){  ?>
								<div class="col-12 text-center mt-5 mb-5">
									<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $itemPost['video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
							<?php }else{ ?>
								<div class="col-12 col-lg-6 parrafosPost">
									<?php echo $itemPost['informacion'] ?>
								</div>
							<?php } ?>
						<?php } ?>
					</div>
				</div>
			</div>
		<?php }else{ ?>
			<div class="content-post" style="background:url(<?php echo $fondo ?>)">
				<?php the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'vino-la-leyenda' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					)
				);
			
				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'vino-la-leyenda' ),
						'after'  => '</div>',
					)
				); ?>
			</div>
		<?php } ?>
	</section>
</article><!-- #post-<?php the_ID(); ?> -->

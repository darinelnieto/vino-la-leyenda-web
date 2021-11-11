<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Vino-la-leyenda
 */
	$contacto = get_field('contacto', 'option');
	$background = get_field('background', 'option');
	$socialMedia = get_field('redes_sociales', 'option');
	$mediosPagos = get_field('slider_pasarela_de_pago', 'option');
	$copyRight = get_field('copyright', 'option');
	$logo = get_field('logo', 'option');
?>

	<footer id="colophon" class="site-footer" style="background-image:url(<?php echo $background['url'] ?>)">
		<div class="content-footer">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-4 col-xl-4 text-center text-lg-left mb-5 mb-lg-0">
						<h2 class="h3 tituloContacto">CONTACTO</h2>
						<p class="contactoFooter mt-4">
							<a href="tel:<?php echo $contacto['telefono'] ?>">
								<strong>Teléfono:</strong> <?php echo $contacto['telefono'] ?>
							</a>
						</p>
						<p class="contactoFooter">
							<a href="mailto:<?php echo $contacto['correo'] ?>">
								<strong>Correo:</strong> <?php echo $contacto['correo'] ?>
							</a>
						</p>
						<p class="contactoFooter"><strong>Ubicación:</strong> <?php echo $contacto['ubicacion'] ?></p>
					</div>
					<div class="col-12 col-lg-4 col-xl-4 text-center mb-5 mb-lg-0">
						<h2 class="h3 tituloSiguenos">SIGUENOS</h2>
						<div class="contentRedesFooter mt-4">
							<a href="<?php echo $socialMedia['url_facebook'] ?>" target="blank">
								<img src="<?php echo $socialMedia['facebook_icono'] ?>" alt="" class="redesSociales">
							</a>
							<a href="<?php echo $socialMedia['url_instagram'] ?>" target="blank">
								<img src="<?php echo $socialMedia['instagram_icono'] ?>" alt="" class="redesSociales">
							</a>
						</div>
					</div>
					<div class="col-12 col-lg-4 col-xl-4 text-center mb-5 mb-lg-0">
						<h2 class="h3 tituloEnvios">ENVÍOS</h2>
						<p class="infoEnvios mt-4">A nivel nacional.</p>
						<div class="sliderPagos mt-5">
							<p class="h4 metodoTitleSlider">Métodos de pago</p>
							<div class="owl-carousel pagos owl-theme">
								<?php if($mediosPagos){
									foreach($mediosPagos as $item){ ?>
										<div class="item pagos">
											<img src="<?php echo $item['imagen_png_pasarela'] ?>" alt="" class="imgPasarela">
										</div>
									<?php }
								} ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyrightContent mt-5">
				<div class="container">
					<div class="row pt-2 pb-2">
						<div class="col-12 col-md-7 text-center text-md-right">
							<p class="copyR mb-0"><i class="far fa-copyright"></i> <?php echo $copyRight ?></p>
						</div>
						<div class="col-12 col-md-4 text-center text-lg-left">
							<img src="<?php echo $logo['url'] ?>" alt="Logo vino la leyenda" class="logoHeader">
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<script>
	$('.owl-carousel.desktop').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:1
			}
		}
	});
	$('.owl-carousel.movil').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:1
			}
		}
	});
	$('.owl-carousel.pagos').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:1
			}
		}
	});
	$('.owl-carousel.equipo').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		responsive:{
			0:{
				items:2
			},
			600:{
				items:3
			},
			1000:{
				items:5
			}
		}
	});
</script>
</html>

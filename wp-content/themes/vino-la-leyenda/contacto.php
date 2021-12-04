<?php 
/*
*Template name: Contacto
*/
get_header();
$fondo = get_field('fondo_post', 'option');
?>
<section style="background:url(<?php echo $fondo ?>) #74142a">
    <div class="banner-contacto">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="title-contact-view">Contacto</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="content-form-and-map">
        <div class="container">
            <div class="row mt-5 pb-5">
                <div class="col-12 col-md-6">
                    <?php echo do_shortcode('[contact-form-7 id="229" title="contacto"]'); ?>
                </div>
                <div class="col-12 col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d15730.767639460024!2d-73.2789493!3d9.7073143!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x8e6071d53b50884b%3A0xc931535295c25938!2sCl.%204%20Becerril%2C%20Cesar!3m2!1d9.7073143!2d-73.2789493!5e0!3m2!1ses!2sco!4v1637893252734!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer() ?>
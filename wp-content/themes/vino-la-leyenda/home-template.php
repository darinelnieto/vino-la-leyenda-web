<?php 
    /*
     *Template Name: Home-Template 
     */
    $banner = get_field('imagenes_sliders');
    $banner_movil = get_field('banner_movil');
    $titulo = get_field('titulo');
    $producto = get_field('productos');
    get_header();
?>
    <section class="banner">
        <div class="owl-carousel desktop owl-theme">
            <?php 
                if($banner){
                    foreach($banner as $item){ ?>
                        <div class="item">
                            <img src="<?php echo($item['imagen']['url']) ?>" alt="Imagenes banners">
                        </div>
                <?php }
                } ?>
        </div>
        <div class="owl-carousel movil owl-theme">
            <?php 
                if($banner_movil){
                    foreach($banner_movil as $item){ ?>
                        <div class="item">
                            <img src="<?php echo($item['imagen']['url']) ?>" alt="Imagenes banners">
                        </div>
                <?php }
                } ?>
        </div>
    </section>
    <!-- sección uno productos descripción -->
    <section class="seccionUno">
        <div class="container">
            <div class="row pl-3 pr-3 alinea-row borderDorado">
                <div class="col-12 col-lg-5">
                    <h2 class="h3 titulovinotintoseccionuno"><?php echo $titulo ?></h2>
                    <p class="infoSeccionUnoBlanco"><?php echo get_field('informacion') ?></p>
                </div>
                <div class="col-12 col-lg-7 text-center">
                    <div class="row">
                        <?php if($producto){
                            foreach($producto as $prod){ ?>
                                <div class="col-12 col-lg-6 mt-5">
                                    <?php echo do_shortcode($prod['shortocode']) ?>
                                </div>
                           <?php }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fin sección uno productos descripción -->
    <?php 
        $videoContent = get_field('video');
        $infoHistoria = get_field('informacion_historia');
        $backgroundHistory = get_field('seccion_historia', 'option');
    ?>
    <!-- sección dos video historia -->
    <section style="background-image:url(<?php echo $backgroundHistory ?>)" class="historyContent">
        <div class="fondoVinoTintoHistori pt-5 pb-5">
            <div class="container">
                <div class="row alinea-row">
                    <!-- video -->
                    <div class="col-12 col-lg-6">
                        <a href="" data-toggle="modal" data-target="#videoModal" class="openModalVideo">
                            <div class="contentimgmodal">
                                <img src="<?php echo $videoContent['icono_play'] ?>" class="iconoPlayVideoModal">
                                <img src="<?php echo $videoContent['imagen'] ?>" alt="Imagen presentación vino la leyenda" class="imgVideoModal">
                            </div>
                        </a>
                    </div>
                    <!-- fin video -->
                    <div class="col-12 col-lg-6 mt-5 mt-lg-0">
                        <h3 class="h4 colorGolden"><?php echo $infoHistoria['titulo'] ?></h3>
                        <p class="infoHistoria"><?php echo $infoHistoria['descripcion'] ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal video -->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <a href="" class="close" data-dismiss="modal" aria-label="Close">X</a>
                        <iframe width="100%" class="iframe" height="315" src="https://www.youtube.com/embed/<?php echo $videoContent['id_video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- fin modal video -->
    </section>
    <!-- fin sección dos video historia -->
    <?php 
        $fondoContact = get_field('contacto_blog', 'option');
        $args = array("posts_per_page" => 1, "orderby" => "desc");
        $my_posts = get_posts($args);
    ?>
    <!-- sección contacto y blog -->
    <section>
        <div class="contentSeccionContactoBlog pt-5 pb-5">
            <div class="container">
                <div class="row alinea-row pt-lg-5 pb-lg-5">
                    <div class="col-12 col-lg-6">
                        <h5 class="suscribete">SUSCRÍBETE</h5>
                        <?php echo do_shortcode('[contact-form-7 id="92" title="Formulario de contacto 1"]'); ?>
                    </div>
                    <div class="col-12 col-lg-6">
                        <?php 
                            if($my_posts){
                                foreach($my_posts as $post){ ?>
                                    <div class="row alinea-row postBlogHome">
                                        <div class="col-6">
                                            <img src="<?php echo get_the_post_thumbnail_url($post->post_ID); ?>" alt="" class="imgPostHome">
                                        </div>
                                        <div class="col-6">
                                            <h4 class="tituloPostHome"><?php echo $post->post_title ?></h4>
                                            <p class="infoPostHome mt-3"><?php echo $post->descripcion_corta ?></p>
                                            <div class="text-center mt-5">
                                                <a href="<?php echo get_permalink( $post->post_ID )?>" class="btn-verMasPost">Ver más</a>
                                            </div>
                                        </div>
                                    </div>
                            <?php }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fin sección contacto y blog -->
<?php get_footer(); ?>
<script>
    $('.close').on('click', function(){
        $('.iframe').replaceWith('<iframe width="100%" class="iframe" height="315" src="https://www.youtube.com/embed/<?php echo $videoContent['id_video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
    });
</script>
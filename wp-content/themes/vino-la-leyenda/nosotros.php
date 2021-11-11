<?php 
/*
*Template name: nosotros
*/
get_header(); 
$banner_desktop = get_field('imagen_desktop');
$banner_movil = get_field('imagen_movil');
$historia = get_field('nosotros');
$content_corporativo = get_field('informacion');
$equipo = get_field('equipo');
$fondo = get_field('fondo_post', 'option');

$video_imagen = get_field('contenido_izquierda');
?>
<!-- banner -->
<section>
    <div class="desktop-banner-nosotros">
        <img src="<?php echo $banner_desktop ?>" alt="" width="100%">
    </div>
    <div class="movil-banner-nosotros">
        <img src="<?php echo $banner_movil ?>" alt="" width="100%">
    </div>
</section>
<!-- fin banner -->
<section class="nosotros-content" style="background:url(<?php echo $fondo ?>) #74142a">
    <!-- seccion uno -->
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 mb-5 text-center">
                <h2 class="titulo-nosotros mb-4"><?php echo $historia['titulo'] ?></h2>
                <p class="info-nosotros"><?php echo $historia['descripcion'] ?></p>
            </div>
        </div>
    </div>
    <!-- fin seccion uno -->
    <div class="container">
        <div class="row alinea-row">
            <div class="col-12 col-lg-6">
                <?php if($video_imagen['es_un_video'] === true){ ?>
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo $video_imagen['video'] ?>?controls=1&autoplay=1&mute=1&loop=1&playlist=<?php echo $video_imagen['video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <?php }else{ ?>
                    <img src="<?php echo $video_imagen['imagen_vino'] ?>" alt="Imagen del vino rose" class="img-vino-rose">
                <?php } ?>
            </div>
            <div class="col-12 col-lg-6">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <?php if($content_corporativo){
                        foreach($content_corporativo as $item){ ?>
                            <?php if($item['activo'] === true){ ?>
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab-<?php echo $item['titulo'] ?>" data-toggle="pill" href="#<?php echo $item['titulo'] ?>" role="tab" aria-controls="<?php echo $item['titulo'] ?>" aria-selected="true"><?php echo $item['titulo'] ?></a>
                                </li>
                            <?php }else{ ?>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-home-tab-<?php echo $item['titulo'] ?>" data-toggle="pill" href="#<?php echo $item['titulo'] ?>" role="tab" aria-controls="<?php echo $item['titulo'] ?>" aria-selected="false"><?php echo $item['titulo'] ?></a>
                                </li>
                            <?php } ?>
                        <?php }
                    } ?>  
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <?php if($content_corporativo){
                        foreach($content_corporativo as $item){ ?>
                            <?php if($item['activo'] === true){ ?>
                                <div class="tab-pane fade show active" style="color:white;" id="<?php echo $item['titulo'] ?>" role="tabpanel" aria-labelledby="pills-home-tab-<?php echo $item['titulo'] ?>">
                                    <?php echo $item['descripcion'] ?>
                                </div>
                            <?php }else{ ?>
                                <div class="tab-pane fade" style="color:white;" id="<?php echo $item['titulo'] ?>" role="tabpanel" aria-labelledby="pills-home-tab-<?php echo $item['titulo'] ?>">
                                    <?php echo $item['descripcion'] ?>
                                </div>
                            <?php } ?>
                        <?php }
                    } ?>  
                </div>
            </div>
        </div>
    </div>
</section>
<!-- seccion equipo de trabajo -->
<!-- <section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel equipo owl-theme">
                    <?php if($equipo){
                        foreach($equipo as $person){ ?>
                            <div class="item text-center">
                                <div class="image-person" style="background:url(<?php echo $person['foto'] ?>)"></div>
                                <p><strong><?php echo $person['nombre'] ?></strong></p>
                            </div>
                       <?php }
                    } ?>
                </div>
            </div>
        </div>
    </div>
</section> -->
<?php get_footer(); ?>
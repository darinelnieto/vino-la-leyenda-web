<?php
    /*
    *Template name: Blog
    */
    get_header();
    $args = array("posts_per_page" => -1, "orderby" => "rand");
    $my_posts = get_posts($args);
    $fondo = get_field('fondo_post', 'option');
?>
<section class="fondo-blog-content">
    <div class="post-content" style="background-image:url(<?php echo $fondo ?>)">
        <div class="bannerBlog">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2>Blog</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-5 mb-5">
                <?php if($my_posts){ ?>
                    <?php foreach($my_posts as $post){ ?>
                        <div class="col-12 col-md-4 col-lg-3">
                            <a href="<?php echo get_permalink( $post->post_ID )?>">
                                <div class="card card-post">
                                    <div class="content-image-post" style="background:url(<?php echo get_the_post_thumbnail_url($post->post_ID); ?>);"></div>
                                    <h5 class="titulo-post-blog mt-2"><?php echo $post->post_title ?></h5>
                                    <div class="card-body">
                                        <p class="description-card-post"><?php echo $post->descripcion_corta ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
<?php
    /*
    *Template name: Blog
    */
    get_header();
    $args = array("posts_per_page" => -1, "orderby" => "rand");
    $my_posts = get_posts($args);
?>
<section class="bannerBlog">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Blog</h2>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="post-content">
        <div class="container">
            <div class="row">
                <?php if($my_posts){ ?>
                    <?php foreach($my_posts as $post){ ?>
                        <div class="col-12 col-md-4 col-lg-3">
                            <a href="<?php echo get_permalink( $post->post_ID )?>">
                                <div class="card">
                                    <div class="content-image-post" style="background:url(<?php echo get_the_post_thumbnail_url($post->post_ID); ?>);"></div>
                                    <div class="card-body">
                                        <h4 class="tituloPostHome mb4"><?php echo $post->post_title ?></h4>
                                        <p class="infoPostHome mt-3"><?php echo $post->descripcion_corta ?></p>
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
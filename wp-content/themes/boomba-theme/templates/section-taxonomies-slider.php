<?php
$is_mobile = wp_is_mobile();
$responsive = $is_mobile ? 'mobile' : 'desktop';


$_posts_args = array(
    'post_type' => 'testimonials',
    'post_status' => 'publish',
    'posts_per_page' => 3,
);
$_posts = new WP_Query($_posts_args);

?>

<?php if ($_posts->have_posts()): ?>
    <div class="col-md-12 js-main-slider">
        <div class="row carousel slide" id="carouselTaxonomies" data-ride="carousel" data-interval="false">
            <div class="carousel-inner">
                <h3 class="h1 mb-3 text-center text-color-1"><?php the_field('testimonials_title', 'option') ; ?></h3>
                <?php $counter = 0; ?>
                <?php while ($_posts->have_posts()): $_posts->the_post(); ?>
                    <div class="carousel-item <?php echo $counter === 0 ? 'active' : '' ?>">
                        <div class="h-100">
                            <div class="d-flex col-12 col-md-8 mx-auto h-100 ">
                                <div class="row">
                                    <div class="col-12 align-self-center justify-content-center">
                                        <div class="w-100">
                                            <h2 class="h3 text-center text-color-5"><?php the_title(); ?></h2>
                                            <div class=" text-center"><?php the_content(); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $counter++ ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <a class="carousel-control-prev" href="#carouselTaxonomies" role="button" data-slide="prev">
                <span><i class="fa fa-angle-left fa-4x text-color-3"></i></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselTaxonomies" role="button" data-slide="next">
                <span><i class="fa fa-angle-right fa-4x text-color-3"></i></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
<?php endif; ?>




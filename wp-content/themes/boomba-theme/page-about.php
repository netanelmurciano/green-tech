<?php
// Template name: about
get_header();
the_post();

?>
    <section class="container-fluid bg-light">
        <div class="row justify-content-center">
            <div class="col-md-8 col-xs-12">
                <div class="row">
                    <div class="col-md-6 col-xs-12  text-left py-3 py-lg-5">
                        <h2 class="h1 mb-3 h-border-top "><?php the_title() ?></h2>
                        <div class="entry-content ">
                            <?php the_content() ?>
                        </div>
                    </div>

                    <?php if(get_the_post_thumbnail_url()) : ?>
                    <div class="col-md-6 col-xs-12 py-3 py-lg-5">
                        <img class="w-100 height-50" src="<?php echo get_the_post_thumbnail_url() ;?>"
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
?>
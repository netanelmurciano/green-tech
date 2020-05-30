<?php
get_header(); ?>
<section class="row justify-content-center">
    <div class="col-12 py-3">
        <h1 class="text-center text-color-1 mb-2"><?php echo get_field('projects_title', 'option') ?></h1>
    </div>
    <?php if (have_posts()) : ?>
        <div class="col-12 col-md-8">
            <div class="row">
                <div class="col-12">
                    <?php $counter = 1; ?>
                    <div class="row justify-content-center">
                        <?php while (have_posts()) : the_post(); ?>
                            <article class="col-12 col-md-4 mb-3">
                                <div class="text-center w-100 box-shadow-hover" data-toggle="modal"
                                     data-target="#pictureModal<?php echo $counter; ?>">
                                    <?php if (has_post_thumbnail()): ?>
                                        <div class="img-wrapper">
                                            <img src="<?php esc_url(the_post_thumbnail_url('small_image')); ?>"
                                                 alt="<?php the_title() ?>" class="w-100 mb-1"
                                                 data-aos="flip-right">
                                            <span class="icon-wrapper bg-color-1 xy-align border-1 rounded-circle">
                                            <span class="xy-align icon-s icon-search"></span>
                                        </span>
                                        </div>
                                    <?php endif; ?>
                                    <div class="bg-white ">
                                        <h3 class="h5 mb-2 font-weight-bold"><?php the_title() ?></h3>
                                        <div class="entry-content-activity-cards">
                                            <?php the_excerpt() ?>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <!-- Modal -->
                            <div class="modal fade" id="pictureModal<?php echo $counter; ?>" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><?php the_title() ?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <?php if (has_post_thumbnail()): ?>
                                                <img src="<?php the_post_thumbnail_url('small_image'); ?>"
                                                     class="w-100 mb-1"
                                                     data-aos="flip-right">
                                            <?php endif; ?>
                                        </div>
                                        <!--<div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                            </button>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <?php $counter++ ?>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <div class="page-navigation row justify-content-center">
                <?php function_exists('wp_pagenavi') ? wp_pagenavi() : null; ?>
            </div>
        </div>

    <?php endif; ?>
</section>

<!--<script>
    (function ($) {
        'use strict';
        $(document).ready(function () {
            /* light box */
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                console.log('natan')
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true
                    showArrows: true
                });
            });
        });
    })(jQuery);
</script>-->

<?php get_footer() ?>



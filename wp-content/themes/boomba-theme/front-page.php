<?php
// Template Name: Front page

get_header();

?>
<main>
    <!-- Main sliders -->
    <section class="pb-3 pb-md-4">
        <?php include "templates/section-main-slider.php"; ?>
    </section>

    <!-- About Section -->
    <section class="container-fluid bg-light">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="row ">
                    <div class="col-md-6 col-xs-12 text-left align-self-center">
                        <h2 class="h1 mb-3 h-border-top text-color-1"><?php the_field('about_title') ?></h2>
                        <div class="entry-content">
                            <?php echo get_field('about_text') ?>
                        </div>

                        <?php $btn = get_field('about_btn_text') ?>
                        <?php if ($btn) : ?>
                        <div data-aos="fade-up"
                             class="text-center py-3 d-flex justify-content-center justify-content-lg-end ">
                            <?php
                            print_btn(array(
                                'href' => get_field('about_link'),
                                'text' => $btn,
                                'class' => 's-btn-1',
                            ));
                            ?>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-md-6 col-xs-12">
                        <img class="w-100 height-50 box-shadow-lg" src="<?php the_field('about_pic') ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    $args = array(
        'post_type' => 'projects',
        'posts_per_page' => get_field('projects_number _of_projects'),
        'post_status' => array('Publish')
    );
    $project_query = new WP_Query($args);
    ?>


    <!-- Projects -->
    <?php if (get_field('projects_showhide_section')) : ?>
        <section class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="row py-3 py-md-4">
                        <div class="col-12">
                            <h3 class="h1 text-center text-color-1 mb-2"><?php the_field( 'projects_title' ) ?></h3>
                            <p class="p text-center text-color-1 mb-2"><?php the_field( 'projects_sub_title' ) ?></p>
                           <div class="row">
                               <?php while ($project_query->have_posts()): $project_query->the_post(); ?>
                                <div class="col-12 col-md-6 mb-3">
                                    <?php include "templates/component-box-hover-effect.php"; ?>
                                </div>
                               <?php endwhile; ?>
                           </div>
                            <?php wp_reset_postdata();
                            $btn = get_field( 'projects_btn_text' );
                            if ( $btn ): ?>
                                <div class="text-center">
                                    <?php
                                    print_btn( array(
                                        'text'   => $btn,
                                        'href'   => get_post_type_archive_link( 'projects' ),
                                        'class'  => 's-btn-1',
                                        'target' => get_sub_field( 'target_blank' ) ? '_blank' : '_self'
                                    ) );
                                    ?>
                                </div>
                            <?php endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>


    <!-- Testimonials-->
    <section class="container-fluid bg-light pb-3 pb-md-4" <?php sogo_print_bg(array(
        'url' => $tax_bg,
        'size' => 'cover',
        'position' => 'left ',
        'height' => 'auto',
    )) ?>>
        <div class="row" data-aos="fade-down">
            <?php include "templates/section-taxonomies-slider.php"; ?>
        </div>
    </section>

    <!-- Why to choose us-->
    <?php if (get_field('choose_us_show_hide_section')) : ?>
        <section class="container-fluid bg-white py-3 py-md-4">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8" data-aos="fade-up">
                    <?php if (have_rows('why_choose_us')): ; ?>
                        <h2 class="h1 mb-3 text-center text-color-1"><?php the_field('why_us_title'); ?></h2>
                        <div class="row text-center">
                            <?php while (have_rows('why_choose_us')): the_row(); ?>
                                <div class="col-12 col-md-3 mb-3 mb-md-0">
                                    <img src="<?php echo get_sub_field('icon') ?>" width="43px" height="34px"
                                         class="mb-1"/>
                                    <div class="h3 text-color-4"><?php echo get_sub_field('title') ?></div>
                                    <div><?php echo get_sub_field('sub_title') ?></div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- Contact Us Section -->
    <section class="container-fluid bg-light py-3 py-md-4" <?php sogo_print_bg(array(
        'url' => get_field('contact_us_home_bg_image'),
        'size' => 'cover',
        'position' => 'left ',
        'height' => 'auto',
    )) ?>>
        <div class="row justify-content-center">
            <div class="col-md-8 col-xs-12">
                <div class="row">
                    <!--<h3 class="col-12 h1 text-black text-center mb-2"><?php /*the_field('home_contact_us_title'); */ ?></h3>-->
                    <h3 class="col-12 h1 text-black text-center mb-2 text-color-1"><span>We are wait</span> <span
                                class="inline-block" data-aos="fade-right" data-aos-duration="2000">to your call</span>
                    </h3>
                    <div class="col-12 h6 text-black d-block text-center mb-3"><?php the_field('home_contact_us_sub_title'); ?></div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-12  text-right ">
                        <?php echo do_shortcode('[contact-form-7 id="118" title="contact us - home page"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>

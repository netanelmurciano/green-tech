<?php
// Template name: questions-and-answers

get_header();
the_post();


?>
    <section class=" bg-light">
        <div class="row justify-content-center">
            <div class="col-md-8 col-xs-12">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-xs-12  text-center py-3 py-lg-4">
                        <h2 class="h1 mb-3mb-3 h-border-top text-color-5"><?php the_title() ?></h2>
                        <div class="entry-content ">
                            <?php the_content() ?>
                        </div>

                        <div class="accordion panel-group  rounded " id="accordionExample_<?php echo $counter; ?>">
                            <?php $counter = 1; ?>
                            <?php while (have_rows('boom_questions-and-answers')): the_row(); ?>
                                <div class="rounded mb-3 text-left ">
                                    <div class="card">
                                        <div class="card-header" id="heading_<?php echo $counter; ?>">
                                            <h4 class="mb-0">
                                                <span><i class="fa fa-plus"></i> </span>
                                                <button class="btn btn-link text-color-5 h4 " type="button" data-toggle="collapse"
                                                        data-target="#collapse_<?php echo $counter; ?>"
                                                        aria-expanded="true"
                                                        aria-controls="collapse_<?php echo $counter; ?>">
                                                    <?php echo get_sub_field('question') ?>
                                                </button>
                                            </h4>

                                        </div>

                                        <div id="collapse_<?php echo $counter; ?>"
                                             class="collapse_<?php echo $counter; ?> collapse"
                                             aria-labelledby="heading_<?php echo $counter; ?>"
                                             data-parent="#accordionExample_<?php echo $counter; ?>">
                                            <div class="card-body">
                                                <?php echo get_sub_field('answers') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php $counter++; ?>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
?>
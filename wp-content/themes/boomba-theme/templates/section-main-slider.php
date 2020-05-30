<?php
$is_mobile = wp_is_mobile();
$responsive = $is_mobile ? 'mobile' : 'desktop';
$height = $responsive == 'mobile' ? '50vh' : '71vh';
?>

<section class="">
    <div class="js-main-slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">

            <div class="carousel-inner">
                <?php $counter = 0; ?>
                <?php while (have_rows('_sogo_main_sliders' )):the_row();
                    $image         = get_sub_field( 'bg_image' );
                ?>

                    <div class="carousel-item <?php echo $counter === 0 ? 'active' : '' ?>">
                        <div class="main-slider-wrapper" <?php echo sogo_print_bg( array( 'url' => $image, 'height'     => $height, ) ) ?>>
                           <div class="bg-opacity-1 h-100">
                               <div class="col-12 col-md-8 d-flex mx-auto  h-100">
                                   <div class="row w-100">
                                       <div class="col-12 align-self-center justify-content-center">
                                           <div class="w-100">
                                               <div class="text-slider-title text-center text-white"><?php the_sub_field( 'title' ); ?></div>
                                               <div class="h6 text-center text-white"><?php the_sub_field( 'sub_title' ); ?></div>
                                               <p class="p-relative zi-1 text-white"><?php the_sub_field( 'text' ); ?></p>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                        </div>

                    </div>
                    <?php $counter++ ?>
                <?php endwhile; ?>
            </div>
           <div class="d-flex">
               <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                   <span><i class="fa fa-angle-left fa-4x"></i></span>
                   <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                   <span><i class="fa fa-angle-right fa-4x"></i></span>
                   <span class="sr-only">Next</span>
               </a>
           </div>
        </div>
    </div>
</section>



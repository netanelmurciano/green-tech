<div class="cards-withhover-container w-100 h-100 px-0">
    <div class="content d-flex justify-content-center h-100" style="">
        <a href="<?php the_permalink() ?>">

            <div class="content-overlay h-100"></div>

            <?php
            the_post_thumbnail( 'projects_image', array( "class" => "img-fluid mb-3 content-image w-100 h-100" ) )
            ?>
            <div style="" class="ik-linear-background h-100"></div>

            <div class="content-details-no-hover pr-3 pb-2 h-100 d-flex align-items-center">
                <h2 class="textToHide text-white font-weight-bold h2 py-0 my-0"><?php the_title() ?></h2>
            </div>

            <div class="content-details fadeIn-left text-left">
                <h2 class="h2 font-weight-bold text-white pb-0 mb-0"><?php the_title() ?></h2>
                <p class="p line-height-md-lg mb-1"><?php the_excerpt() ?></p>
               <!-- --><?php
/*                    print_btn( array(
                        'text'   => 'קרא עוד',
                        'href'   => esc_url( get_sub_field( 'btn_url' ) ),
                        'class'  => 's-btn-1 mt-2',
                        'target' => get_sub_field( 'target_blank' ) ? '_blank' : '_self'
                    ) );
                */?>
            </div>

        </a>
    </div>
</div>

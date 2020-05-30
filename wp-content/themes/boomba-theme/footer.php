<footer class="bg-white">
    <div class="container-fluid">
        <div class="row py-3">
            <div class="col-12 col-md-8 mx-auto">
                <div class="row">
                    <div class="col-md-3 py-2 mb-2 mb-md-0">
                        <!-- Logo -->
                        <?php echo wp_get_attachment_image(get_field('general_main_logo', 'option'), 'full', false, array('class' => 'img-fluid')) ?>
                        <!-- Phone Number-->
                        <?php $phone = get_field( 'contact_phone', 'option' ); ?>
                        <a class="text-color-1 d-flex justify-content-center justify-content-lg-start align-items-center mt-2"
                           href="tel:<?php echo $phone?>">
                            <span class=" icon-s text-color-1"><i class="fa fa-phone" aria-hidden="true"></i></span>
                            <span class="h6 mb-0 white-space-nowrap hover-color-3 transition"><?php echo $phone ?></span>
                        </a>

                    </div>

                    <div class="col-md-3 mb-2 mb-md-0 menu-footer-col-1-container text-center">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary_menu',
                            'container' => false,
                            'depth' => 0
                        ));
                        ?>
                    </div>

                    <div class="col-md-3 mb-2 mb-md-0">

                    </div>

                    <div class="col-md-3 mb-2 mb-md-0">

                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>




<?php wp_footer(); ?>
</body>
</html>

<!doctype html>
<html lang="en_EN" style="direction: ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic Site</title>

    <?php wp_head(); ?>

    <script id="__bs_script__">//<![CDATA[
        document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.17.3'><\/script>".replace("HOST", location.hostname));
        //]]></script>
</head>

<!-- We load tht AOS animation -->
<script>
    jQuery(function() {
        AOS.init();
    });
</script>
<body>

<!-- phone number-->
<div class="container-fluid" >
    <div class="row bg-color-2">
        <div class="col-8 py-1 mx-auto">
            <div class="row text-left ">
                <div class="col-10 pl-4">
                    <a class="text-color-1 d-flex justify-content-center justify-content-lg-start align-items-center mt-2" href="tel:<?php the_field('contact_phone', 'option') ?>">
                        <span class=" icon-s text-color-1"><i class="fa fa-phone" aria-hidden="true"></i></span>
                        <span class=" h6 mb-0 white-space-nowrap hover-color-3 transition ml-1"><?php the_field('contact_phone', 'option') ?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<header id="sticky-header" class="w-100 pos-t-0 pos-l-0 z-index-10 header-box-shadow">
    <div class="container-fluid">
        <div class="row d-flex menu-wrapper justify-content-center">
            <div class="col-12 col-md-8 align-self-center">
                <div class="row">
                    <!-- Logo -->
                    <div class="col-10 col-md-4">
                        <div class="d-md-block text-left">
                            <a href="<?php echo site_url( '/' ) ?>">
                                <?php echo wp_get_attachment_image(get_field('general_main_logo', 'option'), 'full', false, array('class' => 'img-fluid w-75')) ?>
                            </a>
                        </div>
                    </div>

                    <button class="hamburger js-hamburger hamburger--spring d-md-none" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>

                    <!-- Nav Menu -->
                    <div class="col-auto col-md-8 align-self-center">
                        <div class="row justify-content-end">
                            <nav class="primary-menu">
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'primary_menu',
                                    'container' => false,
                                    'depth' => 0,

                                ));
                                ?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    (function ($) {
        'use strict';
        $(document).ready(function () {
            $('.js-hamburger').on('click', function () {
                $(this).toggleClass('is-active');
                $('.primary-menu').toggleClass('is-active')
            });
        });
    })(jQuery);
</script>


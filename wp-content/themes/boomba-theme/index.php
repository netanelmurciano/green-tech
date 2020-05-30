<?php
/**
 * The template for main file
 */
?>
<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div id="sidebar" class="sidebar">

            </div><!-- .sidebar -->
        </div>
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <div id="content" class="site-content">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">
                        <header class="page-header">
                            <h1 class="page-title"><?php the_title() ?></h1>

                        </header><!-- .page-header -->
                    </main><!-- .main -->
                </div><!-- .content-area -->
            </div><!-- .site-content -->
        </div><!-- .col-lg-12 -->
    </div><!-- .row -->
</div><!-- .container -->
<?php get_footer(); ?>


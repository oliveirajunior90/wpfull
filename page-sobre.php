<?php
/*
 Template Name: Sobre
*/

get_header();

the_post();
?>

<div class="template page">

    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo get_query_var('pagename'); ?>
                    <!--<small>Subheading</small>-->
                </h1>
                <?php if ( function_exists('yoast_breadcrumb') )
                {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="sobre-img img">
                        <?php the_post_thumbnail(''); ?>
                    </div>
                    <div class="clear"></div>
                <?php else: ?>
                    <img class="img-responsive img-hover" src="http://placehold.it/750x450" alt="">
                <?php endif; ?>
            </div>
            <div class="col-md-6">
                <h2><?php the_title(); ?></h2>

                <?php the_content(); ?>

            </div>
        </div>

    </div>

</div>

<?php
get_footer();
?>

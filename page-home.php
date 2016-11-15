<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<!-- PAGE HOME -->
<div class="template page">
    <div id="slider" class="hidden-xs">
        <?php
            echo do_shortcode("[metaslider id=679]"); 
        ?>
    </div>

    <div id="s1">
        <div class="container">
            <div class="row xs-center">
                <div class="col-md-4 col-sm-4 col-xs-6 bloco b1">
                    <a href='<?php echo get_site_url(); ?>/'>
                        <h2>COLUNA</h2>
                        <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/" alt=""></div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6 bloco b2">
                    <a href='<?php echo get_site_url(); ?>/'>
                        <h2>COLUNA</h2>
                        <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/" alt=""></div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6 bloco b3">
                    <a href='<?php echo get_site_url(); ?>/'>
                        <h2>COLUNA</h2>
                        <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/" alt=""></div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="s2">
        <div class="container banner-sm-xs">
            <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/" alt=""></div>
        </div>
    </div>

    <div id="s3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="<?php echo get_site_url(); ?>/"><h2>NEWS</h2></a>
                </div>
            </div>
            <div class="row">
                <?php query_posts( 'posts_per_page=3' ); ?>

                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="col-md-4 col-sm-4">
                        <div class="bloco">
                            <a href="<?php echo get_permalink(); ?>">
                                <div class="img"><?php the_post_thumbnail('large'); ?></div>
                                <h3 class="post-title">
                                    <?php the_title() ;?>
                                </h3>
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

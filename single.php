<?php
/*
Index - Posts
*/
?>

<?php get_header(); ?>

  <section id="page-news" class="template archive">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">News</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-12 post">
          <div class="post-single">
            <div <?php post_class(); ?>>
                <h3 class="post-title news-title">
                  <?php the_title() ;?>
                </h3>
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-img news-img img">
                      <?php the_post_thumbnail(''); ?>
                    </div>
                    <div class="clear"></div>
                <?php endif; ?>
                <div class="post-content content">
                <?php the_content(); ?>
                </div>

                <?php wp_link_pages(); ?>
                <!-- <?php get_template_part('template-part', 'postmeta'); ?> -->
                <?php comments_template(); ?>
            </div>
          </div>
        </div><!-- .col-md-8 -->

        <div class="col-md-4 col-sm-4 col-xs-12">
        	<?php get_sidebar( 'right' ); ?>
        </div>

      </div><!-- .row -->
    </div><!-- .containerr -->
  </section>

<?php get_footer(); ?>
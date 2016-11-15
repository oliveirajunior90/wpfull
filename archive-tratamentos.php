<?php
/*
Template Name: Archive Tratamentos
*/
?>

<?php get_header(); ?>

<section id="page-home" class="template archive">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
          <h1 class="page-header">Tratamentos</h1>
      </div>
    </div>
    
    <div class="row">
      <?php // theloop
          if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- posts comecam aqui -->
            <div class="col-md-4 post">
              <div class="box post-box" <?php post_class(); ?>>

                  <h3 class="post-title tratamentos-title">
                      <a href="<?php the_permalink(); ?>" rel="bookmark">
                        <?php the_title(); ?>
                      </a>
                  </h3>

                  <?php if ( has_post_thumbnail() ) : ?>
                    <a href="<?php the_permalink(); ?>" rel="bookmark">
                      <div class="post-img tratamentos-img img">
                        <?php the_post_thumbnail('medium'); ?>
                      </div>
                    </a>
                    <div class="clear"></div>
                  <?php endif; ?>
                  <div class="post-text tratamentos-text post-content content">
                    <?php the_excerpt(); ?>
                  </div>
                  <?php wp_link_pages(); ?>
              </div>
            </div>

          <?php endwhile; ?>
          <div class="navis">
            <div class="nav-previous alignleft"><?php next_posts_link( 'Próxima página >' ); ?></div>
            <div class="nav-next alignright"><?php previous_posts_link( '< Página anterior' ); ?></div>
          </div>
          <?php else: ?>

            <?php get_404_template(); ?>

          <?php endif; ?>

      </div><!-- .col-md-8 -->

    </div><!-- .row -->

  </div><!-- .containerr -->
</section>

<?php get_footer(); ?>


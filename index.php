<?php

/*

Index - Posts

*/

?>



<?php get_header(); ?>


<section id="page-news" class="template archive">
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
      <div class="col-md-8">
        <?php // theloop
          if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div <?php post_class(); ?>>
                  <h2 class="post-title news-title">
                      <a href="<?php the_permalink(); ?>" rel="bookmark">
                        <?php the_title(); ?>
                      </a>
                  </h2>

                  <p class="lead">
                      by <a href="index.php"><?php the_author(); ?></a>
                  </p>

                  <p><i class="fa fa-clock-o"></i> Postado em <?php echo get_the_date(); ?></p>

                  <hr>

                  <a href="<?php the_permalink(); ?>">
                      <?php if ( has_post_thumbnail() ) : ?>
                          <div class="post-img news-img img">
                              <?php the_post_thumbnail(''); ?>
                          </div>
                          <div class="clear"></div>
                      <?php else: ?>
                          <img class="img-responsive img-hover" src="http://placehold.it/900x300" alt="">
                      <?php endif; ?>
                  </a>

                  <hr>

                  <div class="resumo">
                    <?php the_excerpt(); ?>
                  </div>
                  <?php wp_link_pages(); ?>

              </div>

          <?php endwhile; ?>

          <!-- Pager -->
          <ul class="pager">
              <li class="previous">
                  <?php next_posts_link( '&larr; Mais Antigos' ); ?>
              </li>
              <li class="next">
                  <?php previous_posts_link( 'Mais recentes &rarr;' ); ?>
              </li>
          </ul>
          
            <?php  endif; ?>

          <hr>


      </div><!-- .col-md-8 -->

      <div class="col-md-4">
      	<?php get_sidebar( 'right' ); ?>
      </div>

    </div><!-- .row -->
  </div><!-- .containerr -->
</section>



<?php get_footer(); ?>




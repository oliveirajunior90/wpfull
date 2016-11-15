<?php
/*
Template Name: Search Results
*/

get_header();


$allsearch = &new WP_Query('s=$s&showposts=-1');
$key = wp_specialchars($s, 1);
$count = $allsearch->post_count; _e(''); _e('<strong>')
?>


<section id="page-news" class="template archive">

 <div class="container">

     <div class="row">
         <div class="col-sm-12">
             <h1 class="page-header">Resultados de Busca</h1>
             <h2 class="lead"><?php echo $count; ?> Resultados para <?php echo $key; _e('</strong>'); _e(' &mdash; '); wp_reset_query(); ?></h2>
         </div>
     </div>

     <div class="row">
         <section class="col-xs-12 col-sm-6 col-md-12">

             <?php if(have_posts()): while(have_posts()): the_post(); ?>
                 <article class="search-result row">
                     <div class="col-xs-12 col-sm-12 col-md-3">
                         <a href="#" title="Lorem ipsum" class="thumbnail"><img src="http://lorempixel.com/250/140/" alt="Lorem ipsum" /></a>
                     </div>

                     <div class="col-xs-12 col-sm-12 col-md-9 excerpet">
                         <h3><a href="#" title=""><?php the_title(); ?></a></h3>
                         <?php the_content(); ?>
                         <a href="<?php the_permalink(); ?>" class="btn btn-primary">Ver</a>
                     </div>
                     <span class="clearfix borda"></span>
                 </article>
             <?php endwhile; endif;?>

         </section>
     </div>

</div>

</section>
<?php
get_footer();
?>

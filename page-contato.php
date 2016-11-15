<?php
/*
Template Name: Contato
*/
?>

<?php get_header(); ?>

<!-- PAGE CONTATO -->
<section id="page-contato" class="template page">
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


        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->

            <div class="col-md-8">
                <a href="waze://?ll=<lat>,<lon>" class="btn-waze hidden-lg hidden-md"><img src="<?php echo get_template_directory_uri()?>/assets/img/waze-icon.png">Abrir o mapa no Waze</a>
                <!-- Embedded Google Map -->
                <iframe class="hidden-sm hidden-xs" width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4 ">
                <h3>Contact Details</h3>
                <p>
                    3481 Melrose Place<br>Beverly Hills, CA 90210<br>
                </p>
                <p><i class="fa fa-phone"></i>
                    <abbr title="Phone">P</abbr>: (123) 456-7890</p>
                <p><i class="fa fa-envelope-o"></i>
                    <abbr title="Email">E</abbr>: <a href="mailto:name@example.com">name@example.com</a>
                </p>
                <p><i class="fa fa-clock-o"></i>
                    <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>

                <?php echo do_shortcode('[addtoany]'); ?>

            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h3>Fale Conosco</h3>
                <?php echo do_shortcode( '[ninja_forms id=1]' ); ?>
            </div>

        </div>
        <!-- /.row -->

    </div><!-- .container -->
</section>

<?php get_footer(); ?>

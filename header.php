<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
    <?php wp_head(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/flexslider.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/plugins/ml-slider/assets/metaslider/public.css">
    
    <!-- JS -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.flexslider-min.js"></script>

    <!-- FONT -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    
</head>
<body <?php body_class(); ?>>

<header class="navbar-inverse">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div id="logo" class="xs-center">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo get_bloginfo ( 'name' );  ?>" class="logo">
                        <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="<?php echo get_bloginfo ( 'name' );  ?>" title="<?php echo get_bloginfo ( 'name' );  ?>"></div>
                    </a>                
                </div>
            </div>

            <div class="col-md-8 col-sm-12 col-xs-12">
                <div id="menu">
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle menu-button" data-toggle="collapse" data-target=".navbar-1-collapse">
                                MENU
                            </button>
                        </div>

                        <?php
                        wp_nav_menu( array(
                                'theme_location'    => 'main_menu',
                                'depth'             => 2,
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse navbar-1-collapse',
                                'menu_class'        => 'nav navbar-nav navbar-right',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            => new wp_bootstrap_navwalker())
                        );
                        ?>
                    </nav>
    		    </div>
            </div>
        </div>
    </div>

	<!-- REDES SOCIAIS 
	<div class="redes-sociais">
		<a href="https://www.facebook.com/" target="_blank">
    		<div class="mini-rede mini-fb">
    			<i class="fa fa-facebook"></i>
    		</div>
		</a>
		<a href="https://instagram.com/" target="_blank">
    		<div class="mini-rede mini-insta">
    			<i class="fa fa-instagram"></i>
    		</div>
		</a>
		<a href="<?php echo get_site_url(); ?>/contato">
    		<div class="mini-rede mini-mail">
    			<i class="fa fa-envelope"></i>
    		</div>
		</a>
	</div>
	-->

</header><!-- .header -->
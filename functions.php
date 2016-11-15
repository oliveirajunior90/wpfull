<?php



/*

add_filter( 'the_content_more_link', 'modify_read_more_link' );

function modify_read_more_link() {

return '<a class="moretag" href="' . get_permalink() . '">LEIA MAIS..</a>';

}



// Replaces the excerpt "more" text by a link



function new_excerpt_more($more) {

       global $post;

    return '<br></br><a class="moretag" href="'. get_permalink($post->ID) . '">LEIA MAIS..</a>';

}

add_filter('excerpt_more', 'new_excerpt_more');

*/



////////////////////////////////////////////////////

// REGISTRA A SIDEBAR RIGHT

///////////////////////////////////////////////////

function wpb_widgets_init() {



   register_sidebar( array(

       'name' => __( 'Right Sidebar', 'wpb' ),

       'id' => 'sidebar-right',

       'description' => __( 'Sidebar da direita do blog', 'wpb' ),

       'before_widget' => '<aside id="%1$s" class="well widget %2$s">',

       'after_widget' => '</aside>',

       'before_title' => '<h4 class="widget-title">',

       'after_title' => '</h3>',

   ) );
   register_sidebar( array(

       'name' => __( 'Left Sidebar', 'wpb' ),

       'id' => 'sidebar-left',

       'description' => __( 'Sidebar da esquerda do blog', 'wpb' ),

       'before_widget' => '<aside id="%1$s" class="widget %2$s">',

       'after_widget' => '</aside>',

       'before_title' => '<h3 class="widget-title">',

       'after_title' => '</h3>',

   ) );


}



add_action( 'widgets_init', 'wpb_widgets_init' );





function alx_browser_body_class( $classes ) {

    global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;

 

    if($is_lynx) $classes[] = 'lynx';

    elseif($is_gecko) $classes[] = 'gecko';

    elseif($is_opera) $classes[] = 'opera';

    elseif($is_NS4) $classes[] = 'ns4';

    elseif($is_safari) $classes[] = 'safari';

    elseif($is_chrome) $classes[] = 'chrome';

    elseif($is_IE) {

        $browser = $_SERVER['HTTP_USER_AGENT'];

        $browser = substr( "$browser", 25, 8);

        if ($browser == "MSIE 7.0"  ) {

            $classes[] = 'ie7';

            $classes[] = 'ie';

        } elseif ($browser == "MSIE 6.0" ) {

            $classes[] = 'ie6';

            $classes[] = 'ie';

        } elseif ($browser == "MSIE 8.0" ) {

            $classes[] = 'ie8';

            $classes[] = 'ie';

        } elseif ($browser == "MSIE 9.0" ) {

            $classes[] = 'ie9';

            $classes[] = 'ie';

        } else {

            $classes[] = 'ie';

        }

    }

    else $classes[] = 'unknown';

 

    if( $is_iphone ) $classes[] = 'iphone';

 

    return $classes;

}

add_filter( 'body_class', 'alx_browser_body_class' );





function new_excerpt_length($length) {

    return 27;

}

add_filter('excerpt_length', 'new_excerpt_length');





////////////////////////////////////////////////////

// CODIGO DO LEIA MAIS DOS POSTS 

////////////////////////////////////////////////////

function excerpt_read_more_link($output) {

 global $post;

 return $output . '<a class="moretag" href="'. get_permalink($post->ID) . '">leia mais</a> <hr>';

}

add_filter('the_excerpt', 'excerpt_read_more_link');





//////////////////////////////////////////////////

// REMOVE O MARGIN TOP IMPORTANT DO HTML

/////////////////////////////////////////////////

add_action('get_header', 'remove_admin_login_header');

function remove_admin_login_header() {

    remove_action('wp_head', '_admin_bar_bump_cb');

}





////////////////////////////////////////////////////////////////////

// Theme Information

////////////////////////////////////////////////////////////////////



    $themename = "Agência Novos Elementos";

    $developer_uri = "http://novoselementos.com.br";

    $shortname = "NE";

    $version = '1.2016';





////////////////////////////////////////////////////////////////////

// Enqueue Styles (normal style.css and bootstrap.css)

////////////////////////////////////////////////////////////////////

    function theme_stylesheets()

    {

        wp_enqueue_style( 'stylesheet', get_stylesheet_uri(), array(), '1', 'all' );

    }

    add_action('wp_enqueue_scripts', 'theme_stylesheets');



////////////////////////////////////////////////////////////////////

// Register Bootstrap JS with jquery

////////////////////////////////////////////////////////////////////

    function theme_js()

    {

        global $version;

        wp_enqueue_script('theme-js', get_template_directory_uri() . 'assets/js/bootstrap.min.js',array( 'jquery' ),$version,true );

    }

    add_action('wp_enqueue_scripts', 'theme_js');



////////////////////////////////////////////////////////////////////

// Add Title Tag Support with Regular Title Tag injection Fall back.

////////////////////////////////////////////////////////////////////



function title_tag() {

    add_theme_support( 'title-tag' );

}



add_action( 'after_setup_theme', 'title_tag' );



if(!function_exists( '_wp_render_title_tag')) {



    function render_title() {

        ?>

        <title><?php wp_title( '|', true, 'right' ); ?></title>

    <?php

    }

    add_action( 'wp_head', 'render_title' );



}



////////////////////////////////////////////////////////////////////

// Register Custom Navigation Walker include custom menu widget to use walkerclass

////////////////////////////////////////////////////////////////////



    require_once('lib/wp_bootstrap_navwalker.php');

    require_once('lib/bootstrap-custom-menu-widget.php');



////////////////////////////////////////////////////////////////////

// Register Menus

////////////////////////////////////////////////////////////////////



        register_nav_menus(

            array(

                'main_menu' => 'Main Menu',

                'footer_menu' => 'Footer Menu'

            )

        );



////////////////////////////////////////////////////////////////////

// Register the Sidebar(s)

////////////////////////////////////////////////////////////////////



        register_sidebar(

            array(

            'name' => 'Sidebar',

            'id' => 'sidebar',

            'before_widget' => '<aside id="%1$s" class="widget %2$s">',

            'after_widget' => '</aside>',

            'before_title' => '<h3>',

            'after_title' => '</h3>',

        ));



////////////////////////////////////////////////////////////////////

// Add support for a featured image and the size

////////////////////////////////////////////////////////////////////



    add_theme_support( 'post-thumbnails' );

    set_post_thumbnail_size(300,300, true);



////////////////////////////////////////////////////////////////////

// Adds RSS feed links to for posts and comments.

////////////////////////////////////////////////////////////////////



    add_theme_support( 'automatic-feed-links' );
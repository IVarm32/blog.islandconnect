<?php
/**
 * Island Connect Child theme functions and definitions
 */

if ( ! defined( 'ABSPATH' ) ) {
    return;
}

function island_connect_child_scripts() {
    wp_enqueue_style( 'hello-elementor-child-style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
    wp_enqueue_style( 'island-connect-styles', get_stylesheet_directory_uri() . '/css/style.css', array(), time() );
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css', array(), '6.0.0' );
    wp_enqueue_script( 'tailwind-cdn', 'https://cdn.tailwindcss.com', array(), null, false );
    wp_enqueue_script( 'chart-js', 'https://cdn.jsdelivr.net/npm/chart.js', array(), '3.7.0', true );
    wp_enqueue_script( 'island-connect-js', get_stylesheet_directory_uri() . '/js/main.js', array('chart-js'), time(), true );
}
add_action( 'wp_enqueue_scripts', 'island_connect_child_scripts' );

function island_connect_child_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Footer Area 1', 'island-connect-child' ),
        'id'            => 'footer-1',
        'description'   => __( 'Widgets in this area will be shown in the footer.', 'island-connect-child' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="font-semibold mb-4">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'island_connect_child_widgets_init' );

function island_connect_tailwind_config() {
    ?>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        jamaican: {
                            green: '#009B3A',
                            gold: '#FED100',
                            black: '#000000',
                            yellow: '#FFD700',
                        }
                    }
                }
            }
        }
    </script>
    <?php
}
add_action( 'wp_head', 'island_connect_tailwind_config' );

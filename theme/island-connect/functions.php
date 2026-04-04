<?php
/**
 * Island Connect functions and definitions
 */

function island_connect_enqueue_scripts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap', array(), null );
    wp_enqueue_script( 'tailwind-cdn', 'https://cdn.tailwindcss.com', array(), null, false );
    wp_enqueue_style( 'island-connect-style', get_stylesheet_directory_uri() . '/css/style.css', array(), time() );
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0' );
    wp_enqueue_script( 'chart-js', 'https://cdn.jsdelivr.net/npm/chart.js', array(), '3.7.0', true );
    wp_enqueue_script( 'island-connect-main-js', get_stylesheet_directory_uri() . '/js/main.js', array('chart-js'), time(), true );
}
add_action( 'wp_enqueue_scripts', 'island_connect_enqueue_scripts' );

function island_connect_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'island_connect_setup' );

function island_connect_tailwind_config() {
    echo "<script>
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
    </script>";
}
add_action( 'wp_head', 'island_connect_tailwind_config' );

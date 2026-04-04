<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package IslandConnectChild
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

    <!-- Custom Style Variables for Jamaican Brand Colors -->
    <style>
        :root {
            --jamaican-green: #009B3A;
            --jamaican-gold: #FED100;
            --jamaican-black: #000000;
            --jamaican-yellow: #FFD700;
            --jamaican-dark-green: #006B2A;
        }
    </style>
</head>
<body <?php body_class('bg-gradient-to-br from-green-50 to-yellow-50 min-h-screen'); ?>>
<?php wp_body_open(); ?>

    <!-- Navigation -->
    <nav class="bg-black/90 backdrop-blur-md shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-3">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center space-x-3">
                        <div class="text-3xl">🇯🇲</div>
                        <div>
                            <div class="text-2xl font-bold text-yellow-400">Island Connect AI</div>
                            <p class="text-sm text-green-400">Jamaican Smart Solutions</p>
                        </div>
                    </a>
                </div>
                <div class="hidden lg:flex space-x-6">
                    <a href="#blog" class="nav-link text-yellow-400 hover:text-green-400">Blog</a>
                    <a href="#introduction" class="nav-link text-yellow-400 hover:text-green-400">Introduction</a>
                    <a href="#real-estate" class="nav-link text-yellow-400 hover:text-green-400">Real Estate</a>
                    <a href="#tourism" class="nav-link text-yellow-400 hover:text-green-400">Tourism</a>
                    <a href="#case-studies" class="nav-link text-yellow-400 hover:text-green-400">Case Studies</a>
                    <a href="#future" class="nav-link text-yellow-400 hover:text-green-400">Future</a>
                </div>
                <button id="mobile-menu-btn" aria-expanded="false" aria-controls="mobile-menu" class="lg:hidden text-yellow-400" aria-label="Toggle mobile menu">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden lg:hidden mt-4 pb-4">
                <div class="flex flex-col space-y-3">
                    <a href="#blog" class="nav-link text-yellow-400 hover:text-green-400">Blog</a>
                    <a href="#introduction" class="nav-link text-yellow-400 hover:text-green-400">Introduction</a>
                    <a href="#real-estate" class="nav-link text-yellow-400 hover:text-green-400">Real Estate</a>
                    <a href="#tourism" class="nav-link text-yellow-400 hover:text-green-400">Tourism</a>
                    <a href="#case-studies" class="nav-link text-yellow-400 hover:text-green-400">Case Studies</a>
                    <a href="#future" class="nav-link text-yellow-400 hover:text-green-400">Future</a>
                </div>
            </div>
        </div>
    </nav>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
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
    <nav class="bg-black/90 backdrop-blur-md shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 text-yellow-400 font-bold text-2xl">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">🏝️ Island Connect AI</a>
        </div>
    </nav>

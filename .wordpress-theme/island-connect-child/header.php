<?php
/**
 * The header for our theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-gradient-to-br from-green-50 to-yellow-50 min-h-screen'); ?>>
<?php wp_body_open(); ?>
    <nav class="bg-black/90 backdrop-blur-md shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-3">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center space-x-3">
                        <div class="text-3xl">🇯🇲</div>
                        <div class="text-2xl font-bold text-yellow-400">Island Connect AI</div>
                    </a>
                </div>
            </div>
        </div>
    </nav>

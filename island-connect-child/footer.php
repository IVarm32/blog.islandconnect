<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package IslandConnectChild
 */
?>
    <!-- Footer -->
    <footer class="bg-black text-white py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid md:grid-cols-4 gap-8">
                    <div>
                        <div class="flex items-center space-x-3 mb-4">
                            <div class="text-3xl">🏝️</div>
                            <div>
                                <h3 class="text-xl font-bold">Island Connect AI</h3>
                                <p class="text-sm text-gray-400">Smart Solutions</p>
                            </div>
                        </div>
                        <p class="text-gray-400 text-sm">
                            Revolutionizing real estate and tourism through AI-powered solutions.
                        </p>
                    </div>
                    <div>
                        <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-1' ); ?>
                        <?php else : ?>
                            <h4 class="font-semibold mb-4">Solutions</h4>
                            <ul class="space-y-2 text-sm text-gray-400">
                                <li><a href="#real-estate" class="hover:text-white transition-colors">Real Estate AI</a></li>
                                <li><a href="#tourism" class="hover:text-white transition-colors">Tourism AI</a></li>
                                <li><a href="#" class="hover:text-white transition-colors">Smart Websites</a></li>
                                <li><a href="#" class="hover:text-white transition-colors">AI Consulting</a></li>
                            </ul>
                        <?php endif; ?>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-4">Company</h4>
                        <ul class="space-y-2 text-sm text-gray-400">
                            <li><a href="#" class="hover:text-white transition-colors">About Us</a></li>
                            <li><a href="#case-studies" class="hover:text-white transition-colors">Case Studies</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Careers</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Contact</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-4">Connect</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-400 hover:text-white transition-colors" aria-label="Follow us on Linkedin">
                                <i class="fab fa-linkedin text-xl"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-white transition-colors" aria-label="Follow us on Twitter">
                                <i class="fab fa-twitter text-xl"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-white transition-colors" aria-label="Follow us on Facebook">
                                <i class="fab fa-facebook text-xl"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-white transition-colors" aria-label="Follow us on Instagram">
                                <i class="fab fa-instagram text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="border-t border-gray-800 mt-8 pt-8 text-center">
                    <p class="text-gray-400 text-sm">
                        &copy; <?php echo date('Y'); ?> Island Connect AI. All rights reserved. |
                        <a href="#" class="hover:text-white transition-colors">Privacy Policy</a> |
                        <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>

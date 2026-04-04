<?php get_header(); ?>
<section class="py-20 bg-gradient-to-br from-green-50 to-yellow-50">
    <div class="container mx-auto px-4">
        <header class="text-center mb-16">
            <h1 class="text-4xl md:text-6xl font-bold mb-4"><?php the_archive_title(); ?></h1>
            <p class="text-xl text-gray-600"><?php the_archive_description(); ?></p>
        </header>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="h-48 overflow-hidden">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium_large', ['class' => 'w-full h-full object-cover transform hover:scale-105 transition-transform duration-500']); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    <div class="p-6">
                        <div class="text-sm text-green-600 font-semibold mb-2"><?php the_category(', '); ?></div>
                        <h2 class="text-xl font-bold mb-3">
                            <a href="<?php the_permalink(); ?>" class="hover:text-green-600 transition-colors"><?php the_title(); ?></a>
                        </h2>
                        <div class="text-gray-600 mb-4"><?php the_excerpt(); ?></div>
                        <a href="<?php the_permalink(); ?>" class="text-black font-bold flex items-center hover:translate-x-2 transition-transform">
                            Read More <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </article>
            <?php endwhile; else : ?>
                <p>No posts found.</p>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>

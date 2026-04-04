<?php get_header(); ?>
<div class="container mx-auto px-4 py-12">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('max-w-4xl mx-auto bg-white rounded-3xl shadow-2xl overflow-hidden'); ?>>
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="h-96 overflow-hidden">
                    <?php the_post_thumbnail('full', ['class' => 'w-full h-full object-cover']); ?>
                </div>
            <?php endif; ?>

            <div class="p-8 md:p-12">
                <header class="mb-8">
                    <h1 class="text-4xl md:text-5xl font-bold text-black mb-4"><?php the_title(); ?></h1>
                    <div class="flex items-center text-gray-500 text-sm">
                        <span><?php the_date(); ?></span>
                        <span class="mx-2">•</span>
                        <span><?php the_category(', '); ?></span>
                    </div>
                </header>

                <div class="prose prose-lg max-w-none text-gray-700">
                    <?php the_content(); ?>
                </div>

                <footer class="mt-12 pt-8 border-t border-gray-100">
                    <?php the_tags('<div class="flex flex-wrap gap-2">', '', '</div>'); ?>
                </footer>
            </div>
        </article>
    <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>

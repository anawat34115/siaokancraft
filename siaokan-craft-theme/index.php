<?php
/**
 * Main Fallback Template
 */

get_header();
?>

<main class="py-20 px-6 max-w-7xl mx-auto">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="bg-card-dark p-8 rounded-3xl border border-border-dark space-y-4">
            <h1 class="text-3xl font-extrabold text-soft-cream"><?php the_title(); ?></h1>
            <div class="prose prose-invert text-muted-gray leading-relaxed font-light">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php
get_footer();

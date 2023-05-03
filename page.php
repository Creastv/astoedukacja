<?php
$displayTitle = get_field( 'wylacz_naglowek' );
get_header();

while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" class="hentry">
    <?php if($displayTitle == false) : ?>
    <?php get_template_part( 'templates-parts/header/header', 'title' );  ?>
    <?php endif; ?>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
</article>

<?php endwhile;
get_footer();

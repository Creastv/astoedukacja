<?php
$header   = get_field('header_articles', 'options');
$category_object = get_the_category(get_the_ID());
$category_name = $category_object[0]->name;
$obecny = get_the_ID();

$posts = new WP_Query( array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'order' => 'DESC',
        'category_name' => $category_name,
        'post__not_in' => array($obecny)
));
?>
<section id="articles">
    <?php if($posts) { ?>
    <div class="container">
        <div class="row">
            <div id="title-block_4b75bc520cb772c121968badecea2cce" class="go-title  text-center">
                <h2>Może Cię zainteresować</h2>
            </div>
        </div>
        <div class="row">
            <div class="posts-wraper posts-wraper--suggested">
                <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                <?php   get_template_part( 'templates-parts/content/content', 'index' );  ?>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </div>
    <?php } ?>
</section>

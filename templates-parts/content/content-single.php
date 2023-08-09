<article id="post-<?php the_ID(); ?>" class="single-post hentry">
    <header class="entry-header">
        <h1 class="entry-title ">
            <?php the_title(); ?>
        </h1>

        </div>
        <div class="img-wraper">
            <div class="img">
                <?php the_post_thumbnail(); ?>
                <div class="o-border">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>
    <div class="content entry-content">
        <?php if(is_singular('post')) { ?>
        <div class="meta-group">
        <div class="meta meta-category">
                  <!--  <span><?php _e(' Kategoria: ', 'go' ); ?></span>
                <?php // the_category();?>-->
            </div> 
            <div class="meta meta-pub">
                <span><?php _e('Opublikowano: ', 'go' ); ?></span>
                <time class="meta meta-data-pub published" datetime="<?php the_time() ?>"> <span><?php the_time('d.m.Y');?></span></time>
            </div>
        </div>
        <hr class="hr">
        <?php } ?>

        <?php the_content(); ?>
    </div>
   

</article>

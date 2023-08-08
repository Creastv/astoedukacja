</div>
</div>
<?php if(is_singular('post')) { ?>
<?php get_template_part( 'templates-parts/content/content', 'suggested' ); ?>
<?php } ?>
</main>
<footer id="footer" itemscope itemtype="http://schema.org/WPFooter">
    <span class="footer_bg"></span>
    <div class="container">
        <div class="row">
            <div class="col">
                <?php get_template_part('templates-parts/header/header', 'brand'); ?>
                <?php do_action( 'before_sidebar' ); ?>
                <?php if ( ! dynamic_sidebar( 'footer-1' ) ) : ?><?php endif; ?>
            </div>
            <div class="col">
                <?php do_action( 'before_sidebar' ); ?>
                <?php if ( ! dynamic_sidebar( 'footer-2' ) ) : ?><?php endif; ?>
            </div>
            <div class="col">
                <?php do_action( 'before_sidebar' ); ?>
                <?php if ( ! dynamic_sidebar( 'footer-3' ) ) : ?><?php endif; ?>
            </div>
        </div>
        <div class="row">
            <?php get_template_part('templates-parts/footer/footer', 'info'); ?>
        </div>
    </div>
</footer>
<span id="go-to-top">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <path fill="#606161" d="M6,18l2.115,2.115,8.385-8.37V30h3V11.745l8.37,8.385L30,18,18,6Z" transform="translate(-6 -6)" />
    </svg>
</span>
<?php wp_footer(); ?>
</body>

</html>

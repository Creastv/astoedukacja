<?php
function register_acf_block_types() {

    acf_register_block_type(array(
        'name'              => 'posts',
        'title'             => __('Ostatnio dodane posty'),
        'render_template'   => 'blocks/posts/posts.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#575289',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Posts' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-posts',  get_template_directory_uri() . '/blocks/posts/posts.min.css' );
      },
    ));
    acf_register_block_type(array(
        'name'              => 'tytul',
        'title'             => __('Tytuł'),
        'render_template'   => 'blocks/tytul/tytul.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#575289',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'tytul' ),
      'supports' => array( 'align' =>true ),
    ));

    acf_register_block_type(array(
        'name'              => 'conatainer',
        'title'             => __('Container'),
        'render_template'   => 'blocks/conatiner/container.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#575289',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
        'mode'            => 'preview', 
        'keywords'          => array( 'conatainer' ),
        'supports'		=> [
            'align'			=> false,
            'anchor'		=> false,
            'customClassName'	=> false,
            'jsx' 			=> true,
          ],
        'enqueue_assets'    => function(){
            wp_enqueue_style( 'go-conainer',  get_template_directory_uri() . '/blocks/conainer/conainer.min.css' );
        },
    ));

    acf_register_block_type(array(
        'name'              => 'media',
        'title'             => __('media'),
        'render_template'   => 'blocks/media/media.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#575289',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
        'mode'            => 'preview', 
        'keywords'          => array( 'media' ),
        'supports'		=> [
            'align'			=> false,
            'anchor'		=> false,
            'customClassName'	=> false,
            'jsx' 			=> true,
          ],
        'enqueue_assets'    => function(){
            wp_enqueue_style( 'go-media',  get_template_directory_uri() . '/blocks/media/media.min.css' );
        },
    ));

    acf_register_block_type(array(
        'name'              => 'personel',
        'title'             => __('personel'),
        'render_template'   => 'blocks/personel/personel.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#575289',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
        'mode'            => 'preview', 
        'keywords'          => array( 'personel' ),
        
        'enqueue_assets'    => function(){
            wp_enqueue_style( 'go-personel',  get_template_directory_uri() . '/blocks/personel/personel.min.css' );
        },
    ));


    acf_register_block_type(array(
        'name'              => 'btn',
        'title'             => __('Btn'),
        'render_template'   => 'blocks/btn/btn.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#575289',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'btn' ),
      'supports' => array( 'align' =>true ),
       
    ));
    acf_register_block_type(array(
        'name'              => 'hero',
        'title'             => __('Hero'),
        'render_template'   => 'blocks/hero/hero.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#575289',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'hero' ),
      'supports'		=> [
          'align'			=> false,
          'anchor'		=> false,
          'customClassName'	=> false,
          'jsx' 			=> true,
        ],
       'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-hero',  get_template_directory_uri() . '/blocks/hero/hero.min.css' );
      },
    ));
     acf_register_block_type(array(
        'name'              => 'carousel',
        'title'             => __('carousel'),
        'render_template'   => 'blocks/carousel/carousel.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#575289',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'carousel' ),
      'supports'		=> [
          'align'			=> false,
          'anchor'		=> false,
          'customClassName'	=> false,
          'jsx' 			=> true,
        ],
       'enqueue_assets'    => function(){
         wp_enqueue_style( 'ra_svipeer_css', 'https://unpkg.com/swiper/swiper-bundle.min.css' );
          wp_enqueue_script('ra-swiper_js', 'https://unpkg.com/swiper/swiper-bundle.min.js',  array(), '20130456', true );
          wp_enqueue_script('go-carousel-init', get_template_directory_uri() . '/blocks/carousel/carousel.js', array( 'jquery' ),'4', true );
          wp_enqueue_style( 'go-carousel',  get_template_directory_uri() . '/blocks/carousel/carousel.min.css' );
      },
    ));
    //  acf_register_block_type(array(
    //     'name'              => 'list',
    //     'title'             => __('List'),
    //     'render_template'   => 'blocks/list/block-list.php',
    //     'category'          => 'formatting',
    //     'icon' => array(
    //       'background' => '#575289',
    //       'foreground' => '#fff',
    //       'src' => 'ellipsis',
    //     ),
    //   'mode'            => 'preview', 
    //   'keywords'          => array( 'list' ),
    //   'supports' => array( 'align' =>false ),
    //   'enqueue_assets'    => function(){
    //       wp_enqueue_style( 'go-list',  get_template_directory_uri() . '/blocks/list/list.min.css' );
    //       wp_enqueue_script('go-list-cdn', '//cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js', array( 'jquery' ),'4', true );
    //        wp_enqueue_script('go-list', get_template_directory_uri().'/blocks/list/list.js', array( 'jquery' ),'4', true );
    //   },
    // ));
}
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}

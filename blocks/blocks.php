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

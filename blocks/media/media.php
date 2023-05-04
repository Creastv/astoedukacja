<?php
$media = get_field( 'media' );
?>

<?php
echo '<section class="media">';
if($media) : 
    echo ' <div class="media__wraper">';
    $count = 0;
    foreach($media as $med) :
        echo '<div class="media__item">';
        echo '<div class="media__item__wraper">';
        
        if( $med['zdjecie'] ) {
            echo wp_get_attachment_image( $med['zdjecie'], 'post-item' );
        }
        
        $name = 'link-' . $count;
        
        $name = $med['link'];
        if( $name ): 
            $name_url = $name['url'];
            $name_title = $name['title'];
            $name_target = $name['target'] ? $name['target'] : '_self';
        endif;
        echo  '<h3> <a href="' . esc_url( $name_url ). '" target="' .esc_attr( $name_target ) . '">' .esc_html( $name_title ) . '</a></h3>';

    
        echo '</div>';
        echo ' </div>';
        $count ++;
    endforeach;
    echo '</div>';
endif;
echo '<section>';
?>

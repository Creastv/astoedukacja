<?php
$btns = get_field( 'butony' );
?>
<?php 
if($btns) :
echo '<div class="btn-group">';
$count = 0;
foreach($btns as $btn) :
    $name = 'link-' . $count;
    $styleName = $btn['btn_style'] == 'normal' ? 'btn' : 'btn-revers';
    
    $name = $btn['btn'];
    if( $name ): 
        $name_url = $name['url'];
        $name_title = $name['title'];
        $name_target = $name['target'] ? $name['target'] : '_self';
    endif;
    echo  '<a class="' . $styleName . '" href="' . esc_url( $name_url ). '" target="' .esc_attr( $name_target ) . '">' .esc_html( $name_title ) . '</a>';
$count ++;
endforeach;
echo '</div>';
endif;
?>

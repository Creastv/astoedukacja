<?php
$personel = get_field( 'personel' );
?>

<?php
echo '<section class="personel">';
if($personel) : 
    echo ' <div class="personel__wraper">';
    foreach($personel as $person) :
        echo '<div class="personel__item">';
        echo '<div class="personel__item__wraper">';

        echo '<div class="left">';
        
        if( $person['avatar'] ) {
            echo wp_get_attachment_image( $person['avatar'], 'post-thumbnails' );
        }
        echo '</div>';

        echo '<div class="right">';

        echo $person['link'] ? '<a href="' . $person['link']. '">' : false ;
        echo '<h3>' . $person['name']. '</h3>';
        echo $person['link'] ? '</a>' : false ;
        echo '<p>' . $person['pozycja']. '</p>';

        echo '</div>';
      

        echo '</div>';
        echo ' </div>';
    endforeach;
    echo '</div>';
endif;
echo '<section>';
?>

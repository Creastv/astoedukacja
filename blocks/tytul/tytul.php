<?php 
$title = get_field( 'tytul' );
$tag = get_field( 'tag' );

$id = 'title-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
   $className .= ' text-' . $block['align'];
}

?>
<!-- esc_attr($className) -->

<?php 
echo '<div id="'.esc_attr($id).'"  class="go-title '.esc_attr($className).'" >';
echo '<' . $tag .'>';
echo $title;
echo '</'  . $tag . '>';
echo '</div>';
?>

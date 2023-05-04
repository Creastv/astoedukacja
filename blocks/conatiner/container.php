<?php 
$wrap = get_field( 'container' );
$bg = get_field( 'bg_color' );

$classWraper = $wrap == 'container' ? 'container' : 'container-narrow';
if($bg){
$bgStyle = 'style="background-color:' . $bg . '"';
}

?>
<div class="cus-container container <?php echo $classWraper; ?>" <?php echo $bgStyle?>>
    <div class="row">
        <InnerBlocks />
    </div>
</div>

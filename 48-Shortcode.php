<?php echo do_shortcode($content, $ignore_html)?>



<?php 
function caption_shortcode( $atts, $content = null ) {
	return '<span class="caption">' . $content . '</span>';
}
add_shortcode( 'caption', 'caption_shortcode' );
?>

<!-- When used like this: -->

[caption]My Caption[/caption]

<!-- The output would be: -->

<span class="caption">My Caption</span>
<?php 

function wpdocs_menu_item_class( $classes, $item, $args ) {
    if ( 'topmenu' === $args->theme_location ) {
        $classes[] = 'list-inline-item';
    }
 
    return $classes;
}
add_action( 'nav_menu_css_class', 'wpdocs_menu_item_class', 10, 3 );

?>

<!-- ----------------------------- -->

<?php 

$args = array(
    'container'     => '',
    'theme_location'=> 'your-theme-loc',
    'depth'         => 1,
    'fallback_cb'   => false,
    'add_li_class'  => 'your-class-name1 your-class-name-2'
    );
wp_nav_menu($args);



function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


?>

<!-- ------------------------- -->

<?php 

( function( $ ) {
    $(document).ready(function(){

        $(".titumenuclass li").addClass("addclasstitujquery");

    });
} )( jQuery );

?>
<?php
// Must be inside a loop.
 
if ( has_post_thumbnail() ) {
    the_post_thumbnail();
}
else {
    echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) 
        . '/images/thumbnail-default.jpg" />';
}
?>




<?php

// without parameter -> Post Thumbnail (as set by theme using set_post_thumbnail_size()) 

the_post_thumbnail();

the_post_thumbnail('thumbnail');       // Thumbnail (default 150px x 150px max)
the_post_thumbnail('medium');          // Medium resolution (default 300px x 300px max)
the_post_thumbnail('medium_large');    // Medium Large resolution (default 768px x 0px max)
the_post_thumbnail('large');           // Large resolution (default 1024px x 1024px max)
the_post_thumbnail('full');            // Original image resolution (unmodified)

the_post_thumbnail( array(100,100) );  // Other resolutions

?>



<!-- Add New Post Thumbnail Sizes -->

<?php

add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)

?>

<!-- Here is an example of how to use this new Post Thumbnail size in theme template files. -->

<?php the_post_thumbnail( 'category-thumb' ); ?>

<!-- Regenerate Thumbnail Plugin Install if you add new image size
Fix the add image size problem -->

<!-- // Image Size -->

<?php 
function imagesizefix(){
    return null;
}
add_filter("wp_calculate_image_sizes","imagesizefix")
?>

<!-- CSS Class Add in Thumbnail -->

<?php 
the_post_thumbnail( 'thumbnail', array( 'class' => 'alignleft' ) );
the_post_thumbnail( 'thumbnail', array( "left","bottom" ) );
?>



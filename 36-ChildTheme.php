<!-- 
If your parent theme name is alpha then create a folder alpha-child

Then create style.css file like as
 -->

 /*
 Theme Name:   Alpha Child
 Theme URI:    http://example.com/twenty-fifteen-child/
 Description:  Twenty Fifteen Child Theme
 Author:       John Doe
 Author URI:   http://example.com
 Template:     alpha
 Version:      1.0.0
 License:      GNU General Public License v2 or later
 License URI:  http://www.gnu.org/licenses/gpl-2.0.html
 Tags:         light, dark, two-columns, right-sidebar, responsive-layout, accessibility-ready
 Text Domain:  alpha-child
*/

<!-- Then create functions.php -->

<?php

function my_plugin_add_stylesheet() {
    wp_enqueue_style( 'my-style', get_parent_theme_file_uri( ) . '/style.css', );
}
add_action( 'wp_enqueue_scripts', 'my_plugin_add_stylesheet' );

?>


// If you want to change any content, create same folder as parent folder then change the content

// Over right function file

// First surrounding the functions file into this code then change to the child theme function file


<?php

if(!function_exists("name")){
    
}

?>

//Child theme styel.css file priority
//Write this code in child functions.php

<?php

function ccct() {
    wp_enqueue_style( 'my-style', get_parent_theme_file_uri( ) . '/style.css', );
    
}
add_action( 'wp_enqueue_scripts', 'ccct' );


function ccctt() {
    wp_dequeue_style("alpha-style");//parent css file name
    wp_deregister_style("alpha-style");
    wp_enqueue_style(("alpha-style",get_theme_file_uri("/assets/css/alpha.css"))
    
}
add_action( 'wp_enqueue_scripts', 'ccctt','11' );



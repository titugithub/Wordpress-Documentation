<?php 
function acf_css() {
    if(class_exists('ACF')) {
        $bg = get_field('header_background', 'option');
    }
    ?>
        <style>
            .header-top{
                background-color: <?php echo $bg;?>
            }
        </style>
    <?php
}
add_action('wp_head', 'acf_css');
?>

<!-- ------------------ -->

<?php 
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Halim Options', 'halim',
		'menu_title'	=> 'Halim Options', 'halim',
		'menu_slug' 	=> 'halim-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Halim Header Settings', 'halim',
		'menu_title'	=> 'Header', 'halim',
		'parent_slug'	=> 'halim-options',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Halim About Settings', 'halim',
		'menu_title'	=> 'About', 'halim',
		'parent_slug'	=> 'halim-options',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Halim FAQ & Skills Settings', 'halim',
		'menu_title'	=> 'FAQ & Skills', 'halim',
		'parent_slug'	=> 'halim-options',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> 'Halim CTA Settings', 'halim',
		'menu_title'	=> 'CTA', 'halim',
		'parent_slug'	=> 'halim-options',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> 'Halim Contact Settings', 'halim',
		'menu_title'	=> 'Contact', 'halim',
		'parent_slug'	=> 'halim-options',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> 'Halim Footer Settings', 'halim',
		'menu_title'	=> 'Footer', 'halim',
		'parent_slug'	=> 'halim-options',
	));
	
}
?>
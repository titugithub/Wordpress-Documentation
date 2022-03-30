<?php wp_head()?>

<?php wp_footer()?>

<body <?php body_class( array("hello","world") ); ?>>

<meta charset="<?php bloginfo('charset') ?>">

<html <?php language_attributes(); ?>>

<?php echo get_template_directory_uri()?>/assets/img/hero.png


<?php get_header()?>
<?php get_footer()?>
<?php get_sidebar()?>
<?php get_template_part($slug, $name)?>


<!-- Create screenshot.png for display image theme -->
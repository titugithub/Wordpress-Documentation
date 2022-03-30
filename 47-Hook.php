<!-- Do Action Hook -->

<?php
function hookme(){
    echo "<h2>Hello world</h2>";
}
add_action("Hello","hookme");
?>

<?php do_action("Hello")?>


<!-- Filter Hook -->


<?php 

function mee($text){
    return strtoupper($text);
}
add_filter( "mehook","mee" );


?>

<?php echo apply_filters( "mehook","hello world" ) ?>


<!-- Example: Let display custom length of post excerpt. -->

<?php 

if( ! function_exists( 'prefix_custom_excerpt_length' ) )
{
    function prefix_custom_excerpt_length( $length )
    {
        return 40;
    }
}
add_filter( 'excerpt_length', 'prefix_custom_excerpt_length', 999 );

?>


// Example: If you want to inject a CLASS/ID CSS in content. Let’s add extra CLASS/ID to post content.

<?php 

//Add Class/ID to Post Content
add_filter('the_content', 'xai_my_class');
function xai_my_class($content)
{
    //Replace the instance with the Class/ID markup.
    $string = '<ul'; //your tag
    $replace = '<ul class="detail-list"'; //add your class/id and tag
    $content = str_replace( $string, $replace, $content );
    return $content;
}

?>


<!-- Remove Action -->

<?php
add_action( 'wp_head', 'remove_my_action' );
function remove_my_action() {
    remove_action( 'wp_footer', 'function_being_removed' );
}
?>


<!-- Pluggable Functions -->

<?php 

if( ! function_exists('wp_mail') ) {
    function wp_mail( $to, $subject, $message, $headers = '' ) {
      if( $headers == '' ) {
        $headers = "MIME-Version: 1.0\n" .
          "From: " . get_settings('admin_email') . "\n" . 
          "Cc: dummy@example.com\n" .
          "Content-Type: text/plain; charset=\"" . get_settings('blog_charset') . "\"\n";
      }
  
      return @mail($to, $subject, $message, $headers);
    }
  }

?>





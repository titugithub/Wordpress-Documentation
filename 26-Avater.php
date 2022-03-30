<?php 
// Image
 echo get_avatar( get_the_author_meta("id") );
//  Author Name
 echo  get_the_author_meta("display_name");
//  Author Description
 echo  get_the_author_meta("description");
 the_author_posts_link(  );
 

?>


<!-- Insert this code to call the avatar of current user. -->


<?php
$user = wp_get_current_user();
 
if ( $user ) :
    ?>
    <img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />
<?php endif; ?>



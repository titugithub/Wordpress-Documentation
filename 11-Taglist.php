<?php

/** @var string|false|WP_Error $tag_list */
$tag_list = get_the_tag_list( '<ul><li>', '</li><li>', '</li></ul>' );
 
if ( $tag_list && ! is_wp_error( $tag_list ) ) {
    echo $tag_list;
}

?>


<ul>
    <li><a href="tag1">Tag 1</a></li>
    <li><a href="tag2">Tag 2</a></li>
    ...
</ul>

<!-- ------------------------ -->

<!-- This outputs the list of tags inside a paragraph, with tags separated by commas. -->

<?php echo get_the_tag_list( sprintf( '<p>%s: ', __( 'Tags', 'textdomain' ) ), ', ', '</p>' );?>

<p>Tags: <a href="tag1">Tag 1</a>, <a href="tag2">Tag 2</a>, ...</p>

<!-- Loop with tag post by ID and Link to -> /tag/slug: -->

<!-- GET TAGS BY POST_ID -->

<?php 

$tags = get_the_tags($post->ID);  ?>
 
<ul class="cloudTags">

     <?php foreach($tags as $tag) :  ?>

    <li>
       <a class="btn btn-warning"
           href="<?php bloginfo('url');?>/tag/<?php print_r($tag->slug);?>">
                 <?php print_r($tag->name); ?>
        </a>   
     </li>
     <?php endforeach; ?>
</ul>

?>

<!-- Display tags with links to tag pages in an unordered list: -->


<?php 

$post_tags = get_the_tags();
if ( ! empty( $post_tags ) ) {
    echo '<ul>';
    foreach( $post_tags as $post_tag ) {
        echo '<li><a href="' . get_tag_link( $post_tag ) . '">' . $post_tag->name . '</a></li>';
    }
    echo '</ul>';
} 

?>

<!-- This example prints the tags of current post: -->

<?php 

$post_tags = get_the_tags();
 
if ( $post_tags ) {
    foreach( $post_tags as $tag ) {
    echo $tag->name . ', '; 
    }
}

?>





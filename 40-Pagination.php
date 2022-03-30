<!-- Loop with Pagination -->

<?php if ( have_posts() ) : ?>
 
 <!-- Add the pagination functions here. -->

 <!-- Start of the main loop. -->
 <?php while ( have_posts() ) : the_post(); ?>

 <!-- the rest of your theme's main loop -->

 <?php endwhile; ?>
 <!-- End of the main loop -->

 <!-- Add the pagination functions here. -->


<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>



<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>


<?php else : ?>

<?php _e('Sorry, no posts matched your criteria.'); ?>

<?php endif; ?>


<!-- Methods for displaying pagination links -->

<?php 

unction your_themes_pagination(){
    global $wp_query; 
    echo paginate_links();
}

?>


<!-- Numerical Pagination -->

<?php the_posts_pagination();?>


<!-- Pagination Between Single Posts -->

<?php 

previous_post_link();
next_post_link();


?>


<!-- Pagination within a post -->



<?php if ( have_posts() ) : ?>
   
   <!-- Start of the main loop. -->
   <?php while ( have_posts() ) : the_post(); ?>
     
       <?php the_content(); ?>
         
       <?php wp_link_pages(); ?> 
      
   <?php endwhile; ?>
 
<?php endif; ?>
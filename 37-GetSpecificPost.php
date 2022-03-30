<div class="postsection">
<?php

    $_p = get_posts(array(
        'posts__in' => array(73,70,68),
        'order_by' => 'post__in',
        'posts_per_page' => 2
        
    ));
    foreach ($_p as $post) {
        setup_postdata($post);
        ?>

         <h2><a href="<?php the_permalink()?>"><?php the_title();?></a></h2>



       <?php        
    }
    wp_reset_postdata(  );
    
?>


</div>


<!-- Paginate -->



<div class="postsection">
<?php
   $paged = get_query_var("paged")? get_query_var("paged"):1;
    $_p = get_posts(array(
        'posts__in' => array(73,70,68),
        'order_by' => 'post__in',
        'posts_per_page' => 2,
        'paged' => $paged
        
    ));
    foreach ($_p as $post) {
        setup_postdata($post);
        ?>

         <h2><a href="<?php the_permalink()?>"><?php the_title();?></a></h2>



       <?php        
    }
    wp_reset_postdata(  );
    
?>

<div class="paginate">
    <?php echo paginate_links(array(
        "total" => 2
    ));?>
</div>


</div>



<?php

    $args = array(
        'post_type' => 'sliders',
        'posts_per_page' => 3
    );
    $query = new WP_Query($args);
    while( $query -> have_posts() ) {
        $query -> the_post();
    ?>
    <!-- Content -->
    <?php
    }
    wp_reset_postdata();
    
?>
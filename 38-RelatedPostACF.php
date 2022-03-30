<div>
    <h3>Related Posts</h3>
    <?php
        $relpost = get_field("fieldname");
        $alphrel = new WP_Query(array(
            'post__in' => $relpost,
            'orderby' => 'post__in'
        ));

        while ($alphrel->have_posts()) {
            $alphrel->the_post();
            ?>
            <h4><?php the_title();?></h4>
            <?php
        }
        wp_reset_query();
    ?>
</div>



<div id="sidebar-primary" class="sidebar">
    <?php dynamic_sidebar( 'primary' ); ?>
</div>


<div id="sidebar-primary" class="sidebar">
    <?php if ( is_active_sidebar( 'primary' ) ) : ?>
        <?php dynamic_sidebar( 'primary' ); ?>
    <?php else : ?>
        <!-- Time to add some widgets! -->
    <?php endif; ?>
</div>

<!-- ---------------- -->

<!-- Register Sidebar -->


<?php

function halim_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'titu' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'halim' ),
        'before_widget' => '<div class="about-menu">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );


}
add_action( 'widgets_init', 'halim_widgets_init' );



<?php 
// Creating the widget 
class acf_cat_widget extends WP_Widget {
  
    function __construct() {
    parent::__construct(
      
    // Base ID of your widget
    'acf_cat', 
      
    // Widget name will appear in UI
    __('ACF Category Widget', 'acf'), 
      
    // Widget description
    array( 'description' => __( 'Sample widget', 'acf' ), ) 
    );
    }
      
    // Creating widget front-end
      
    public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );
      
    // before and after widget arguments are defined by themes
    echo $args['before_widget'];
    if ( ! empty( $title ) )
    echo $args['before_title'] . $title . $args['after_title'];
      
    ?>
        <div class="categories">
            <?php $categories = get_categories();?>
            <?php
                foreach($categories as $cat) {
            ?>
                <li><a href="<?php echo get_category_link($cat->term_id);?>"><?php echo $cat->name;?> <span class="fa fa-chevron-right"></span></a></li>
            <?php
                }
            ?>
        </div>
    <?php
    echo $args['after_widget'];
    }
              
    // Widget Backend 
    public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
    $title = $instance[ 'title' ];
    }
    else {
    $title = __( 'Services', 'acf' );
    }
    // Widget admin form
    ?>
    <p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <?php 
    }
          
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
    }
     
    // Class wpb_widget ends here
    } 
     
     
    // Register and load the widget
    function acf_cat_load_widget() {
        register_widget( 'acf_cat_widget' );
    }
    add_action( 'widgets_init', 'acf_cat_load_widget' );
	
	
	
	
	
	
	
	
	
	
	
	

// Latest Post Widget

// Creating the widget 
class acf_post_widget extends WP_Widget {
  
    function __construct() {
    parent::__construct(
      
    // Base ID of your widget
    'acf_post', 
      
    // Widget name will appear in UI
    __('ACF Latest Post Widget', 'acf'), 
      
    // Widget description
    array( 'description' => __( 'Sample widget', 'acf' ), ) 
    );
    }
      
    // Creating widget front-end
      
    public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );
      
    // before and after widget arguments are defined by themes
    echo $args['before_widget'];
    if ( ! empty( $title ) )
    echo $args['before_title'] . $title . $args['after_title'];
      $post = array(
          'post_type' => 'post',
          'posts_per_page' => 3
      );
      $query = new WP_Query($post);
      while($query->have_posts()) {
          $query->the_post();
    ?>
    <div class="block-21 mb-4 d-flex">
        <a class="blog-img mr-4" style="background-image: url(<?php echo the_post_thumbnail_url();?>"></a>
        <div class="text">
            <h3 class="heading"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
            <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> <?php the_date();?></a></div>
                <div><a href=""><span class="icon-person"></span> <?php the_author_link();?></a></div>
            </div>
        </div>
    </div>
    <?php
      }
    ?>
        
    <?php
    echo $args['after_widget'];
    }
              
    // Widget Backend 
    public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
    $title = $instance[ 'title' ];
    }
    else {
    $title = __( 'Recent Posts', 'acf' );
    }
    // Widget admin form
    ?>
    <p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <?php 
    }
          
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
    }
     
    // Class wpb_widget ends here
    } 
     
     
    // Register and load the widget
    function acf_post_load_widget() {
        register_widget( 'acf_post_widget' );
    }
    add_action( 'widgets_init', 'acf_post_load_widget' );

















// Creating the widget 
class acf_tags_widget extends WP_Widget {
  
    function __construct() {
    parent::__construct(
      
    // Base ID of your widget
    'acf_tags', 
      
    // Widget name will appear in UI
    __('ACF Tags Widget', 'acf'), 
      
    // Widget description
    array( 'description' => __( 'Sample widget', 'acf' ), ) 
    );
    }
      
    // Creating widget front-end
      
    public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );
      
    // before and after widget arguments are defined by themes
    echo $args['before_widget'];
    if ( ! empty( $title ) )
    echo $args['before_title'] . $title . $args['after_title'];
    ?>
    <div class="tagcloud">
    <?php     
        $tags = get_tags(); 
        foreach($tags as $tag) {
    ?>
        <a href="<?php echo get_tag_link($tag->term_id); ?>" class="tag-cloud-link"><?php echo $tag->name;?></a>        
    <?php
        }
    ?>
    </div>
    <?php
    echo $args['after_widget'];
    }
              
    // Widget Backend 
    public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
    $title = $instance[ 'title' ];
    }
    else {
    $title = __( 'Tags Cloud', 'acf' );
    }
    // Widget admin form
    ?>
    <p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <?php 
    }
          
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
    }
     
    // Class wpb_widget ends here
    } 
     
     
    // Register and load the widget
    function acf_tags_load_widget() {
        register_widget( 'acf_tags_widget' );
    }
    add_action( 'widgets_init', 'acf_tags_load_widget' );














// Creating the widget 
class acf_search_widget extends WP_Widget {
  
    function __construct() {
    parent::__construct(
      
    // Base ID of your widget
    'acf_search', 
      
    // Widget name will appear in UI
    __('ACF Search Widget', 'acf'), 
      
    // Widget description
    array( 'description' => __( 'Sample widget', 'acf' ), ) 
    );
    }
      
    // Creating widget front-end
      
    public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );
      
    // before and after widget arguments are defined by themes
    echo $args['before_widget'];
    if ( ! empty( $title ) )
    // echo $args['before_title'] . $title . $args['after_title'];
    ?>
    <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
        <div class="form-group">
            <span class="fa fa-search"></span>
            <input type="text" class="form-control" placeholder="Type a keyword and hit enter" value="<?php echo get_search_query() ?>" name="s">
        </div>
    </form>
    <?php
    echo $args['after_widget'];
    }
              
    // Widget Backend 
    public function form( $instance ) {
    // Widget admin form
    ?>
    <p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <?php 
    }
          
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
    }
     
    // Class wpb_widget ends here
    } 
     
     
    // Register and load the widget
    function acf_search_load_widget() {
        register_widget( 'acf_search_widget' );
    }
    add_action( 'widgets_init', 'acf_search_load_widget' );

?>
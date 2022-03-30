<!-- Index.php -->

<?php get_header();?>
<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4><?php echo single_post_title();?></h4>
                    <ul>
                        <li><a href="<?php echo site_url();?>"></a>Home</li> / 
                        <li><?php echo single_post_title();?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-area pb-100 pt-100" id="blog">
         <div class="container">
            <div class="row">
               <?php
                  while(have_posts()){
                     the_post();
                  ?>
                     <div class="col-md-4">
                        <div class="single-blog">
                           <div class="post-img" style="background-image:url('<?php the_post_thumbnail_url();?>')"></div>
                           <div class="post-content">
                              <div class="post-title">
                                 <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                              </div>
                              <div class="pots-meta">
                                 <ul>
                                    <li><a href="#"><?php the_date();?></a></li>
                                    <li><?php the_category(', ');?></li>
                                    <li><?php the_author_posts_link(); ?></li>
                                 </ul>
                              </div>
                              <?php the_excerpt();?>
                              <a href="<?php the_permalink();?>" class="box-btn">read more <i class="fa fa-angle-double-right"></i></a>
                           </div>
                        </div>
                     </div>
                  <?php
                  }
               ?>
            </div>
            <div class="row">
               <div class="col-md-12 text-center mt-5">
                  <a href="blog-single.html" class="box-btn">load more <i class="fa fa-angle-double-right"></i></a>
               </div>
            </div>
         </div>
      </section>
      <!-- Latest News Area End -->
 <?php get_footer();?>


 <!-- ------------------------------------------ -->

 <!-- Page.php -->




 <?php

/*
Template Name: Page Template
*/

get_header();?>
<?php get_template_part('inc/breadcumb'); ?>

<section class="page-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="page">
                    <h4><?php the_title();?></h4>
                    <?php the_content();?>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                    if(is_active_sidebar('sidebar-1')) {
                        dynamic_sidebar('sidebar-1');
                    }
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>


<!-- --------------------- -->


<!-- Single.php -->



<?php get_header();?>

<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4><?php the_title();?></h4>
                    <ul>
                        <li><a href="<?php echo site_url();?>"></a>Home</li> / 
                        <li><?php the_title();?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-single pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <h2><?php the_title();?></h2>
                <?php the_post_thumbnail();?>
                <?php the_content();?>
                <div class="comments">
                    <?php
                        if(comments_open()) {
                            comments_template();
                        }
                    ?>
                </div>
            </div>
            <div class="col-xl-4">
                <?php
                    if(is_active_sidebar('sidebar-1')) {
                        dynamic_sidebar('sidebar-1');
                    }
                ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>






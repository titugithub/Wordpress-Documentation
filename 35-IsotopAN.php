<!-- HTML -->

<section class="projects-area pb-100 pt-100" id="projects">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="portfolio-menu mb-40 text-center">
                     <button class="active" data-filter="*">ALL</button>
                     <button data-filter=".cat1" class="">Business </button>
                     <button data-filter=".cat2" class="">Finance</button>
                     <button data-filter=".cat3">Marketing</button>
                     <button data-filter=".cat4">Idea</button>
                  </div>
               </div>
            </div>
            <div class="row grid no-gutters">
               <div class="col-md-4 grid-item cat3 cat2">
                  <div class="single-portfolio">
                     <img src="assets/img/projects/01.jpg" alt="">
                     <div class="portfolio-hover">
                        <div class="portfolio-content">
                           <h3><a href="portfolio-single.html" class=""><i class="fa fa-link"></i> project name <span>branding</span></a></h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 grid-item cat2 cat1 cat3">
                  <div class="single-portfolio">
                     <img src="assets/img/projects/02.jpg" alt="">
                     <div class="portfolio-hover">
                        <div class="portfolio-content">
                           <h3><a href="portfolio-single.html"><i class="fa fa-link"></i> project name <span>branding</span></a></h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 grid-item cat2 cat4 cat3" >
                  <div class="single-portfolio">
                     <img src="assets/img/projects/03.jpg" alt="">
                     <div class="portfolio-hover">
                        <div class="portfolio-content">
                           <h3><a href="portfolio-single.html"><i class="fa fa-link"></i> project name <span>branding</span></a></h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 grid-item cat2 cat5 cat1">
                  <div class="single-portfolio">
                     <img src="assets/img/projects/04.jpg" alt="">
                     <div class="portfolio-hover">
                        <div class="portfolio-content">
                           <h3><a href="portfolio-single.html"><i class="fa fa-link"></i> project name <span>branding</span></a></h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 grid-item cat1 cat4 cat5">
                  <div class="single-portfolio">
                     <img src="assets/img/projects/05.jpg" alt="">
                     <div class="portfolio-hover">
                        <div class="portfolio-content">
                           <h3><a href="portfolio-single.html"><i class="fa fa-link"></i> project name <span>branding</span></a></h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 grid-item cat1 cat4 cat3">
                  <div class="single-portfolio">
                     <img src="assets/img/projects/06.jpg" alt="">
                     <div class="portfolio-hover">
                        <div class="portfolio-content">
                           <h3><a href="portfolio-single.html"><i class="fa fa-link"></i> project name <span>branding</span></a></h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- projectss Area End -->



      <!-- PHP -->

      <!-- projectss Area Start -->
<section class="projects-area pb-100 pt-100" id="projects">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="portfolio-menu mb-40 text-center">
                     <button class="active" data-filter="*">ALL</button>

                     <?php
                        $portfolio_menus =  get_terms('portfolio-cat');
                        foreach ($portfolio_menus as $portfolio_menu){
                     ?>
                        <button data-filter=".<?php echo $portfolio_menu->slug;?>" class=""><?php echo $portfolio_menu->name;?> </button>
                     <?php
                        }
                     ?>
                  </div>
               </div>
            </div>
            <div class="row grid no-gutters">

            <?php
               $args = array(
                  'post_type' => 'portfolio',
                  'posts_per_page' => 10
               );
               $query = new WP_Query($args);
               while($query->have_posts()){
                  $query->the_post();
               ?>

               

               <div class="col-md-4 grid-item 
                  <?php
                     $portfolio_items = get_the_terms(get_the_ID(), 'portfolio-cat');
                     foreach ($portfolio_items as $portfolio_item){
                        echo $portfolio_item->slug.' ';
                     }
                  ?>
               ">
                  <div class="single-portfolio">
                     <?php the_post_thumbnail();?>
                     <div class="portfolio-hover">
                        <div class="portfolio-content">
                           <h3><a href="<?php the_permalink();?>" class=""><i class="fa fa-link"></i> <?php the_title();?> <span><?php echo $portfolio_item->name;?></span></a></h3>
                        </div>
                     </div>
                  </div>
               </div>
            <?php
               }
               wp_reset_postdata();
            ?>
               


            </div>
         </div>
      </section>
      <!-- projectss Area End -->
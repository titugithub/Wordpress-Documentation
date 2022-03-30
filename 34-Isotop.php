<!-- HTML -->

<section class="templatemo-container">
    <div class="container">
        <div class="row margin-bottom-30">
            <div class="col-lg-12 text-uppercase text-center">
                <h2 class="section-title">Profile</h2>
                <div class="section-title-underline-blue"></div>
                <hr class="section-title-underline" />
                <p class="small">Proin Gravidani</p>
            </div>
        </div>
        <div class="row margin-bottom-30">
            <div class="col-lg-12">
                <ul id="filters" class="folio-filters">
                    <li class="current"><a href="#" data-filter="*">All</a></li>
                    <li class="">
                        <a href="#" data-filter=".design">Design</a>
                    </li>
                    <li class=""><a href="#" data-filter=".web">Web</a></li>
                    <li class="">
                        <a href="#" data-filter=".branding">Branding</a>
                    </li>
                    <li class=""><a href="#" data-filter=".print">Print</a></li>
                </ul>
            </div>
        </div>
        <div id="folio-container" class="row">
            <div
                class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item design"
            >
                <img src="img/18.jpg" alt="Image" class="img-thumbnail" />
            </div>
            <div
                class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item design"
            >
                <img src="img/19.jpg" alt="Image" class="img-thumbnail" />
            </div>
            <div
                class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item design"
            >
                <img src="img/20.jpg" alt="Image" class="img-thumbnail" />
            </div>
            <div
                class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item design"
            >
                <img src="img/21.jpg" alt="Image" class="img-thumbnail" />
            </div>
            <div
                class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item web"
            >
                <img src="img/22.jpg" alt="Image" class="img-thumbnail" />
            </div>
            <div
                class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item web"
            >
                <img src="img/23.jpg" alt="Image" class="img-thumbnail" />
            </div>
            <div
                class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item web"
            >
                <img src="img/24.jpg" alt="Image" class="img-thumbnail" />
            </div>
            <div
                class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item branding"
            >
                <img src="img/25.jpg" alt="Image" class="img-thumbnail" />
            </div>
            <div
                class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item branding"
            >
                <img src="img/26.jpg" alt="Image" class="img-thumbnail" />
            </div>
            <div
                class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item branding"
            >
                <img src="img/27.jpg" alt="Image" class="img-thumbnail" />
            </div>
            <div
                class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item print"
            >
                <img src="img/28.jpg" alt="Image" class="img-thumbnail" />
            </div>
            <div
                class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item print"
            >
                <img src="img/29.jpg" alt="Image" class="img-thumbnail" />
            </div>
        </div>
    </div>
</section>



<!-- PHP -->


<section class="templatemo-container">
            <div class="container">
                <div class="row margin-bottom-30">
                    <div class="col-lg-12 text-uppercase text-center">
                        <h2 class="section-title">Profile</h2>
                        <div class="section-title-underline-blue"></div>
                        <hr class="section-title-underline">
                        <p class="small">Proin Gravidani</p>
                    </div>
                </div>


                <div class="row margin-bottom-30">
                    <div class="col-lg-12">
                        <ul id="filters" class="folio-filters">
                            <li class="current"><a href="#" data-filter="*">All</a></li>
                           
                            <!-- <li class=""><a href="#" data-filter=".web">Web</a></li>
                            <li class=""><a href="#" data-filter=".branding">Branding</a></li>
                            <li class=""><a href="#" data-filter=".print">Print</a></li> -->

                            <?php
                            $cats = get_terms("portfolio-cat");
                            foreach ($cats as $cat) { ?>
                                
                                <li class=""><a href="#" data-filter=".<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></a></li>
                            <?php }
                            ?>
                        </ul>
                    </div>
                </div>


                <div id="folio-container" class="row">



                    <?php
                    $args = [
                        "post_type" => "portfolio",
                        "posts_per_page" => -1,
                    ];
                    $query = new WP_Query($args);
                    while ($query->have_posts()) {
                        $query->the_post(); ?>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item 
                    <?php
                    $port_cat = get_the_terms(get_the_ID(), "portfolio-cat");
                    foreach ($port_cat as $cat) {
                        echo $cat->slug . " ";
                    }
                    ?> ">
                    ">
                        
                        <?php the_post_thumbnail("", [
                            "class" => "img-thumbnail",
                            "title" => "Feature image",
                        ]); ?>
                    </div>
                    <?php
                    }
                    wp_reset_postdata();
                    ?>



            </div>
        </div>
    </section>




<!-- Register -->



 <?php
 // Portfolio Custom Post
 register_post_type("portfolio", [
     "labels" => [
         "name" => __("Portfolios", "halim"),
         "singular_name" => __("Portfolio", "halim"),
     ],
     "public" => true,
     "show_ui" => true,
     "supports" => ["title", "editor", "thumbnail", "custom-fields"],
 ]);

 register_taxonomy("portfolio-cat", "portfolio", [
     "lables" => [
         "name" => __("Categories", "halim"),
         "singular_name" => __("Category", "halim"),
     ],
     "hierarchical" => true,
     "show_admin_column" => true,
 ]);
 ?>
		 ?>
<!-- HTML -->

<section class="templatemo-container">
    <div class="container">
        <div class="row section-title-container">
            <div class="col-lg-12 text-uppercase text-center">
                <h2 class="section-title">Blog</h2>
                <div class="section-title-underline-blue"></div>
                <hr class="section-title-underline" />
                <p class="small">Proin Gravidani</p>
            </div>
        </div>
        <div class="row posts-container">
            <div class="post-excerpt post-excerpt-left">
                <div class="post-content">
                    <h3 class="post-title">Nullam Acurna Euelis</h3>
                    <p class="post-description">
                        Scondimentum siamet augue autodit sit red non neque elit
                        edut nemoen.
                    </p>
                </div>
                <div class="post-date-container">
                    <div class="post-month">Nov</div>
                    <div class="post-date">18</div>
                </div>
                <div class="post-arrow-container rotate-arrow">
                    <img src="img/blog-arrow.png" alt="arrow" />
                </div>
            </div>
            <div class="post-excerpt post-excerpt-right">
                <div class="post-arrow-container">
                    <img src="img/blog-arrow.png" alt="arrow" />
                </div>
                <div class="post-date-container">
                    <div class="post-month">Nov</div>
                    <div class="post-date">19</div>
                </div>
                <div class="post-content">
                    <h3 class="post-title">Condenimtin nemoa</h3>
                    <p class="post-description">
                        Scondimentum siamet augue autodit sit red non neque elit
                        edut nemoen.
                    </p>
                </div>
            </div>
            <div class="post-excerpt post-excerpt-left">
                <div class="post-content">
                    <h3 class="post-title">Voluptatem Quial</h3>
                    <p class="post-description">
                        Scondimentum siamet augue autodit sit red non neque elit
                        edut nemoen.
                    </p>
                </div>
                <div class="post-date-container">
                    <div class="post-month">Nov</div>
                    <div class="post-date">20</div>
                </div>
                <div class="post-arrow-container rotate-arrow">
                    <img src="img/blog-arrow.png" alt="arrow" />
                </div>
            </div>
            <div class="post-excerpt post-excerpt-right">
                <div class="post-arrow-container">
                    <img src="img/blog-arrow.png" alt="arrow" />
                </div>
                <div class="post-date-container">
                    <div class="post-month">Nov</div>
                    <div class="post-date">21</div>
                </div>
                <div class="post-content">
                    <h3 class="post-title">Augue Autioist</h3>
                    <p class="post-description">
                        Scondimentum siamet augue autodit sit red non neque elit
                        edut nemoen.
                    </p>
                </div>
            </div>
            <div class="post-excerpt post-excerpt-left">
                <div class="post-content">
                    <h3 class="post-title">Tempori Autemos</h3>
                    <p class="post-description">
                        Scondimentum siamet augue autodit sit red non neque elit
                        edut nemoen.
                    </p>
                </div>
                <div class="post-date-container">
                    <div class="post-month">Nov</div>
                    <div class="post-date">22</div>
                </div>
                <div class="post-arrow-container rotate-arrow">
                    <img src="img/blog-arrow.png" alt="arrow" />
                </div>
            </div>
        </div>
    </div>
</section>


<!-- PHP -->

<section class="templatemo-container">
            <div class="container">
                <div class="row section-title-container">
                    <div class="col-lg-12 text-uppercase text-center">
                        <h2 class="section-title">Blog</h2>
                        <div class="section-title-underline-blue"></div>
                        <hr class="section-title-underline">
                        <p class="small">Proin Gravidani</p>
                    </div>
                </div>
                <div class="row posts-container">

                <?php
                    $philosophy_fp = new WP_Query(
                        array(
                            'post_type' => 'post',
                            'posts_per_page' => 5
                        )
                    );

                    $post_data = array();
                    while ( $philosophy_fp->have_posts() ) {
                        $philosophy_fp->the_post();
                        $categories = get_the_category();
                        $category = $categories[mt_rand(0,count($categories)-1)];
                        $post_data[] = array(
                            "title" => get_the_title(),
                            "date"=>get_the_date('m'),
                            "datee"=>get_the_date('j'),
                            "exercpt"=>get_the_excerpt(),

                            
                            
                        );
                    }
                   ?>

                    <div class="post-excerpt post-excerpt-left">
                        <div class="post-content">
                            <h3 class="post-title"><?php echo esc_html($post_data[0]['title']); ?></h3>
                            <p class="post-description"><?php echo esc_html($post_data[0]['exercpt']); ?></p>
                        </div>
                        <div class="post-date-container">
                            <div class="post-month"><?php echo esc_html($post_data[0]['date']); ?></div>
                            <div class="post-date"><?php echo esc_html($post_data[0]['datee']); ?></div>
                        </div>
                        <div class="post-arrow-container rotate-arrow">
                            <img src="<?php echo get_template_directory_uri()?>/img/blog-arrow.png" alt="arrow">
                        </div>
                    </div>


                    <div class="post-excerpt post-excerpt-right">
                        <div class="post-arrow-container">
                            <img src="<?php echo get_template_directory_uri()?>/img/blog-arrow.png" alt="arrow">
                        </div>
                        <div class="post-date-container">
                            <div class="post-month"><?php echo esc_html($post_data[1]['date']); ?></div>
                            <div class="post-date"><?php echo esc_html($post_data[1]['datee']); ?></div>
                        </div>
                        <div class="post-content">
                            <h3 class="post-title"><?php echo esc_html($post_data[1]['title']); ?></h3>
                            <p class="post-description"><?php echo esc_html($post_data[1]['exercpt']); ?></p>
                        </div>
                    </div>




                    <div class="post-excerpt post-excerpt-left">
                        <div class="post-content">
                            <h3 class="post-title"><?php echo esc_html($post_data[2]['title']); ?></h3>
                            <p class="post-description"><?php echo esc_html($post_data[2]['exercpt']); ?></p>

                        </div>
                        <div class="post-date-container">
                            <div class="post-month"><?php echo esc_html($post_data[2]['date']); ?></div>
                            <div class="post-date"><?php echo esc_html($post_data[2]['datee']); ?></div>
                        </div>
                        <div class="post-arrow-container rotate-arrow">
                            <img src="<?php echo get_template_directory_uri()?>/img/blog-arrow.png" alt="arrow">
                        </div>
                    </div>



                    <div class="post-excerpt post-excerpt-right">
                        <div class="post-arrow-container">
                            <img src="<?php echo get_template_directory_uri()?>/img/blog-arrow.png" alt="arrow">
                        </div>
                        <div class="post-date-container">
                            <div class="post-month"><?php echo esc_html($post_data[3]['date']); ?></div>
                            <div class="post-date"><?php echo esc_html($post_data[3]['datee']); ?></div>
                        </div>
                        <div class="post-content">
                            <h3 class="post-title"><?php echo esc_html($post_data[3]['title']); ?></h3>
                            <p class="post-description"><?php echo esc_html($post_data[3]['exercpt']); ?></p>

                        </div>
                    </div>



                    <div class="post-excerpt post-excerpt-left">
                        <div class="post-content">
                            <h3 class="post-title"><?php echo esc_html($post_data[4]['title']); ?></h3>
                            <p class="post-description"><?php echo esc_html($post_data[4]['exercpt']); ?></p>
                        </div>
                        <div class="post-date-container">
                            <div class="post-month"><?php echo esc_html($post_data[4]['date']); ?></div>
                            <div class="post-date"><?php echo esc_html($post_data[4]['datee']); ?></div>
                        </div>
                        <div class="post-arrow-container rotate-arrow">
                            <img src="<?php echo get_template_directory_uri()?>/img/blog-arrow.png" alt="arrow">
                        </div>
                    </div>


                

                </div>
            </div>
        </section>


        
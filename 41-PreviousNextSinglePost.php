<div class="s-content__pagenav">
                    <div class="s-content__nav">
                        <div class="s-content__prev">
                            <?php
                            $philosophy_prev_post = get_previous_post();
                            if ( $philosophy_prev_post ):
                                ?>
                                <a href="<?php echo get_the_permalink( $philosophy_prev_post ); ?>" rel="prev">
                                    <span><?php _e( "Previous Post", "philosophy" ); ?></span>
                                    <?php echo get_the_title( $philosophy_prev_post ); ?>
                                </a>
                            <?php
                            endif;
                            ?>
                        </div>
                        <div class="s-content__next">
                            <?php
                            $philosophy_next_post = get_next_post();
                            if ( $philosophy_next_post ):
                                ?>
                                <a href="<?php echo get_the_permalink( $philosophy_next_post ); ?>" rel="next">
                                    <span><?php _e( "Next Post", "philosophy" ); ?></span>
                                    <?php echo get_the_title( $philosophy_next_post ); ?>
                                </a>
                            <?php
                            endif;
                            ?>
                        </div>
                    </div>
                </div> <!-- end s-content__pagenav --
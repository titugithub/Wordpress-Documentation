<div class="s-content__author">
                    <?php echo get_avatar( get_the_author_meta( "ID" ) ); ?>

                    <div class="s-content__author-about">
                        <h4 class="s-content__author-name">
                            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ); ?>">
                                <?php the_author(); ?>
                            </a>
                        </h4>

                        <p>
                            <?php the_author_meta( "description" ); ?>
                        </p>

                        <ul class="s-content__author-social">
                            <?php
                            $philosophy_author_facebook  = get_field( "facebook", "user_" . get_the_author_meta( "ID" ) );
                            $philosophy_author_twitter   = get_field( "twitter", "user_" . get_the_author_meta( "ID" ) );
                            $philosophy_author_instagram = get_field( "instagram", "user_" . get_the_author_meta( "ID" ) );
                            ?>
                            <?php if ( $philosophy_author_facebook ): ?>
                                <li><a href="<?php echo esc_url( $philosophy_author_facebook ); ?>">Facebook</a></li>
                            <?php endif; ?>
                            <?php if ( $philosophy_author_twitter ): ?>
                                <li><a href="<?php echo esc_url(   $philosophy_author_twitter ); ?>">Twitter</a></li>
                            <?php endif; ?>
                            <?php if ( $philosophy_author_instagram ): ?>
                                <li><a href="<?php echo esc_url( $philosophy_author_instagram ); ?>">Instagram</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
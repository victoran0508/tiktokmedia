		<aside class="sidebar sidebar--document">
            <dl>
                <dt>
                    <h4>LATEST<small>最新の資料</small></h4>
                </dt>
                <dd>
                    <ul>
                    <?php
                        $latest_post = new WP_Query( array( 'post_type' => 'document', 'posts_per_page' => 4, 'post__not_in' => array($post->ID), ) );
                        while ( $latest_post->have_posts() ) : $latest_post->the_post();
                    ?>
                        <li class="item item--document">
                            <dl>
                                <dt>
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="<?php the_post_thumbnail_url(); ?>">
                                        <p><?php the_title(); ?></p>
                                    </a>
                                </dt>
                                <dd class="datetime">
                                    <span><?php the_time('Y.m.d'); ?></span>
                                </dd>
                            </dl>
                        </li>
                    <?php endwhile; ?>
                    </ul>
                <?php wp_reset_query(); ?>
                </dd>
            </dl>
        </aside>
        
<ul>
<?php
    if (have_posts()): while(have_posts()): the_post();
?>
    <li class="item">
        <dl>
            <dt>
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php the_post_thumbnail_url(); ?>">
                    <p><?php the_title(); ?></p>
                </a>
                <div class="keyword-panel">
                <?php
                    $posttags = get_the_tags();
                    if ($posttags) {
                        foreach($posttags as $tag) {
                            echo "<a href=\"" . get_tag_link( $tag->term_id ) . "\" class=\"keyword\">$tag->name</a>";
                        }
                    }
                ?>
                </div>
            </dt>
            <dd class="datetime">
                <span><?php the_time('Y.m.d'); ?></span>
            </dd>
        </dl>
    </li>
<?php 
    endwhile; endif;
    wp_reset_query();
?>
</ul>
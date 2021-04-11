<ul>
<?php
    if (have_posts()): while(have_posts()): the_post();
?>
    <li class="item item--document">
        <dl>
            <a href="<?php the_permalink(); ?>"></a>
            <dt>
                <img src="<?php the_post_thumbnail_url(); ?>">
                <p><?php the_title(); ?></p>
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
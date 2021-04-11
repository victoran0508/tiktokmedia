<?php get_header(); ?>

<?php wpb_set_post_views(get_the_ID()); ?>

	<main class="page-wrapper with-sidebar">
        <div class="main">
            <section class="section section--article section--topmargin">
                <article class="article">
                    <!-- div class="float-sns-btn">
                        <span><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>999</span>
                        <span><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>9999</span>
                    </div -->
                    <summary class="summary">
                        <div class="top">
                            <span class="category category--<?php echo get_the_category()[0]->slug; ?>"><?php echo str_replace('-', ' ', strtoupper(get_category(the_category_ID(false))->slug)); ?></span>
                            <?php 
                                if (get_the_time() == get_the_modified_time()) {
                            ?>
                            <span class="refresh">
                                <i class="fa fa-redo"></i><time><?php the_modified_time('Y.m.d'); ?></time>
                            </span>
                            <?php
                                }
                            ?>
                        </div>
                        <h1><?php the_title(); ?></h1>
                        <p class="keyword-panel">
							<?php
							$posttags = get_the_tags();
							if ($posttags) {
								foreach($posttags as $tag) {
									echo "<a href=\"" . get_tag_link($tag->term_id) . "\" class=\"keyword\">$tag->name</a>";
								}
							}
							?>
                        </p>
                        <div class="thumbnail">
                            <?php echo get_the_post_thumbnail(); ?>
                        </div>
                    </summary>
                    
					<div class="the-content">
						<?php the_content(); ?>
					</div>
                    
                    <dl class="share-on-sns">
                        <dt>Share On</dt>
                        <dd>
                            <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                        </dd>
                    </dl>
                    <dl class="about-author">
                        <dt>記事を書いた人</dt>
                        <dd>
                            <?php
                                $writer = wp_get_single_post(get_post_meta( $post->ID, 'writer', true));
                            ?>
                            <div class="avatar">
                                <!-- img src="<?php // echo get_the_post_thumbnail_url(get_post_meta( $post->ID, 'writer', true)); ?>" -->
                                <?php echo get_the_post_thumbnail( get_post_meta( $post->ID, 'writer', true), array(120, 120) ); ?>
                            </div>
                            <span class="intro">
                                <b><?php echo get_post_meta(get_post_meta( $post->ID, 'writer', true), 'name', true); ?></b><br>
                                <small class="pc tb"><?php echo get_post_meta(get_post_meta( $post->ID, 'writer', true), 'intro', true); ?></small>
                            </span>
                            <span class="sp"><?php echo get_post_meta(get_post_meta( $post->ID, 'writer', true), 'intro', true); ?></span>
                        </dd>
                    </dl>
                </article>
            </section>
        </div>
        <?php get_sidebar(); ?>
    </main>

    <section class="section section--related">
        <dl class="content-wrapper">
            <dt class="header">
                <h3>RELATION<span>関連記事</span></h3>
            </dt>
            <dd class="body">
                <ul>
                    <?php
                        $args = array(
                            'post_type' => 'post',
                            'post__not_in' => array($post->ID),
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field' => 'slug',
                                    'terms' => get_the_category()[0]->slug,
                                    'operator'=> 'IN'
                                )),
                            'posts_per_page' => 3, // Number of related posts that will be shown.
                            'ignore_sticky_posts' => 1
                        );
                          
                        $my_query = new wp_query( $args );
                        if ($my_query->have_posts()) {
                            while ($my_query->have_posts()) {
                                $my_query->the_post();
                    ?>
                    <li class="item">
                        <dl>
                            <a href="<?php the_permalink(); ?>"></a>
                            <dt>
                                <img src="<?php the_post_thumbnail_url(); ?>">
                                <p><?php the_title(); ?></p>
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
                            }
                        }
                        wp_reset_query();
                    ?>
                </ul>
                <p><a href="<?php home_url(); ?>/category/<?php echo get_category(the_category_ID(false))->slug; ?>" class="view-more">VIEW MORE<i class="fas fa-arrow-right"></i></a></p>
            </dd>
        </dl>
    </section>

    <footer class="page-footer">
        <div class="footer-top">
            <div class="footer-middle">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="<?php home_url(); ?>/">TOP</a></li>
                        <li><a href="<?php home_url(); ?>/category/<?php echo get_category(the_category_ID(false))->slug; ?>"><?php echo get_category(the_category_ID(false))->name; ?></a></li>
                        <li><span><?php the_title(); ?></span></li>
                      </ul>
                </div>
				
<?php get_footer(); ?>
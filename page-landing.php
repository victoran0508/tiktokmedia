<?php get_header(); ?>
    
    <main class="page-wrapper">
        <section class="hero section--topmargin">
            <div class="hero-carousel">
            <?php
                $popularpost = new WP_Query( array( 'posts_per_page' => 3, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
                while ( $popularpost->have_posts() ) : $popularpost->the_post();
            ?>
                <div class="hero-item" style="background: right center url(<?php the_post_thumbnail_url(); ?>) no-repeat; background-size: contain;">
                    <div class="hero-title">
                        <article class="hero-title-wrapper">
                            <mark class="category category--<?php echo get_category(the_category_ID(false))->slug; ?>"><?php echo str_replace('-', ' ', strtoupper(get_category(the_category_ID(false))->slug)); ?></mark>
                            <summary><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></summary>
                            <time><?php the_time('Y.m.d'); ?></time>
                        </article>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
            </div>
        </section>

        <section class="section section--category-how-to">
            <dl class="content-wrapper">
                <dt class="header">
                    <h3>HOW TO<span>ナレッジ記事</span></h3>
                </dt>
                <dd class="body">
                    <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field' => 'slug',
                                    'terms' => 'how-to'
                                )
                             )
                        );
                        
                        query_posts($args);
                    ?>
                    <?php get_template_part('post-list'); ?>
                    <?php wp_reset_query(); ?>
                    <p><a href="<?php home_url(); ?>/category/how-to" class="view-more">VIEW MORE<i class="fas fa-arrow-right"></i></a></p>
                </dd>
            </dl>
        </section>

        <section class="section section--category-case-study">
            <dl class="content-wrapper">
                <dt class="header">
                    <h3>CASE STUDY<span>プロモーション事例</span></h3>
                </dt>
                <dd class="body">
                    <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field' => 'slug',
                                    'terms' => 'case-study'
                                )
                             )
                        );
                        
                        query_posts($args);
                    ?>
                    <?php get_template_part('post-list'); ?>
                    <?php wp_reset_query(); ?>
                    <p><a href="<?php home_url(); ?>/category/case-study" class="view-more">VIEW MORE<i class="fas fa-arrow-right"></i></a></p>
                </dd>
            </dl>
        </section>

        <section class="section section--category-interview">
            <dl class="content-wrapper">
                <dt class="header">
                    <h3>INTERVIEW<span>インタビュー記事</span></h3>
                </dt>
                <dd class="body">
                    <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field' => 'slug',
                                    'terms' => 'interview'
                                )
                             )
                        );
                        
                        query_posts($args);
                    ?>
                    <?php get_template_part('post-list'); ?>
                    <?php wp_reset_query(); ?>
                    <p><a href="<?php home_url(); ?>/category/interview" class="view-more">VIEW MORE<i class="fas fa-arrow-right"></i></a></p>
                </dd>
            </dl>
        </section>

        <section class="section section--category-topics">
            <dl class="content-wrapper">
                <dt class="header">
                    <h3>TOPICS<span>ニュース・トピックス</span></h3>
                </dt>
                <dd class="body">
                    <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field' => 'slug',
                                    'terms' => 'topics'
                                )
                             )
                        );
                        
                        query_posts($args);
                    ?>
                    <?php get_template_part('post-list'); ?>
                    <?php wp_reset_query(); ?>
                    <p><a href="<?php home_url(); ?>/category/topics" class="view-more">VIEW MORE<i class="fas fa-arrow-right"></i></a></p>
                </dd>
            </dl>
        </section>

        <section class="section section--event">
            <dl class="content-wrapper">
                <dt class="header">
                    <h3>EVENT<span>セミナー・イベント情報</span></h3>
                </dt>
                <dd class="body">
                    <ul>
                        <li class="item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event01.png">
                        </li>
                        <li class="item">
                            <span class="datetime">2020.12.16</span>
                            <p class="text">「ゲーム業界のTikTok広告活用事例とブランドエフェクト活用術」—「リーグオブレジェンド：ワイルドリフト」のTikTok施策について解説</p>
                            <p class="view-detail">
                                <a href="#" class="view-more">VIEW MORE<i class="fas fa-arrow-right"></i></a>
                            </p>
                        </li>
                    </ul>
                </dd>
            </dl>
        </section>

        <section class="section section--ranking">
            <ul>
                <li class="ranking-panel">
                    <dl class="content-wrapper">
                        <dt class="header">
                            <h3>RANKING<span>人気記事</span></h3>
                        </dt>
                        <dd class="body">
                            <ul>
                            <?php
                                $popularpost = new WP_Query( array( 'posts_per_page' => 5, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
                                while ( $popularpost->have_posts() ) : $popularpost->the_post();
                            ?>
                                <li class="item">
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="<?php the_post_thumbnail_url(); ?>">
                                        <p>
                                            <span class="category category--<?php echo get_category(the_category_ID(false))->slug; ?>"><?php echo str_replace('-', ' ', strtoupper(get_category(the_category_ID(false))->slug)); ?></span>
                                            <?php the_title(); ?>
                                        </p>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                            <?php wp_reset_query(); ?>
                            </ul>
                        </dd>
                    </dl>
                </li>
                <li class="tag-panel">
                    <dl class="content-wrapper">
                        <dt class="header">
                            <h3>TAG<span>人気のタグ</span></h3>
                        </dt>
                        <dd class="body keyword-panel">
                            <?php get_template_part('popular-keywords'); ?>
                        </dd>
                    </dl>
                    <p class="view-all"><a href="<?php home_url(); ?>/tags">VIEW ALL<i class="fas fa-arrow-right"></i></a></p>
                </li>
            </ul>
        </section>

        <section class="section section--document">
            <dl class="content-wrapper">
                <dt class="header">
                    <h3>DOCUMENT<span>お役立ち資料</span></h3>
                </dt>
                <dd class="body">
                    <ul>
                        <li class="item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/document.png">
                            <p>TikTokプロモーション完全ガイド</p>
                        </li>
                        <li class="item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/document.png">
                            <p>TikTokプロモーション完全ガイド</p>
                        </li>
                        <li class="item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/document.png">
                            <p>TikTokプロモーション完全ガイド</p>
                        </li>
                        <li class="item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/document.png">
                            <p>TikTokプロモーション完全ガイド</p>
                        </li>
                    </ul>
                    <p>
                        <a class="btn" href="#">無料ダウンロード</a>
                    </p>
                </dd>
            </dl>
        </section>
    </main>

    <footer class="page-footer">
        <div class="footer-top">
            <div class="footer-middle">

<?php get_footer(); ?>
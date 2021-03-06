		<aside class="sidebar">
            <dl>
                <dt>
                    <h4>RANKING<small>人気記事</small></h4>
                </dt>
                <dd>
                <?php
                    // 人気順による選択ロジック
                    // $popularpost = new WP_Query( array( 'posts_per_page' => 5, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
                    // カスタムオーダによる選択ロジック
                    $popularpost = new WP_Query( array( 'posts_per_page' => 5 ) );
                    while ( $popularpost->have_posts() ) : $popularpost->the_post();
                ?>
                    <article>
                        <div class="thumb" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
                        <summary>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </summary>
                    </article>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
                </dd>
            </dl>
            <dl>
                <dt>
                    <h4>TAG<small>人気のタグ</small></h4>
                </dt>
                <dd>
                    <p class="keyword-panel">
                    <?php get_template_part('popular-keywords'); ?>
                    </p>
                </dd>
            </dl>
            <dl>
                <dt>
                    <h4>EVENT<small>セミナー・イベント情報</small></h4>
                </dt>
                <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field' => 'slug',
                                'terms' => 'event'
                            )
                        )
                    );
                    
                    query_posts($args);

                    if (have_posts()) {
                        the_post();
                ?>
                <dd>
                    <p class="big"><?php the_title(); ?></p>
                    <p class="btn-panel"><a href="<?php the_permalink(); ?>" class="btn">イベント情報を見る</a></p>
                </dd>
                <?php
                    }
                    wp_reset_query();
                ?>
            </dl>
            <dl class="dark-back">
                <dt class="contact">
                    <h4><span>お問い合わせ</span></h4>
                </dt>
                <dd>
                    <p class="big">
                        TikTokのビジネス活用についてもっと知りたい方、広告・プロモーションに興味をお持ちの方は、Star Creationへお問い合わせください。
                    </p>
                    <p class="btn-panel"><a href="https://star-creation.com/contact/" class="btn">お問合せフォームへ</a></p>
                </dd>
            </dl>
        </aside>

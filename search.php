<?php get_header(); ?>

<main class="page-wrapper">
        <section class="section section--topmargin">
            <dl class="content-wrapper">
                <dt class="header">
                    <h3>検索結果</h3>
                </dt>
                <dd class="body">
                	<?php
                    	if (have_posts()) {
                    		get_template_part('post-list');
                        } else {
                        	get_template_part('no-search-result');
                        }
                    ?>
                </dd>
            </dl>
            <?php get_template_part('navigator'); ?>
        </section>
    </main>

    <footer class="page-footer">
        <div class="footer-top">
            <div class="footer-middle">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="<?php home_url(); ?>/">TOP</a></li>
                        <li><span>検索結果：<?php echo get_search_query(); ?></span></li>
                      </ul>
                </div>


<?php get_footer(); ?>
<?php

get_header();

query_posts('posts_per_page=12');

$cat_slug = get_category(get_query_var('cat'))->slug;
$cat_description = category_description(get_query_var('cat'));

?>

	<main class="page-wrapper">
        <section class="section section--topmargin">
            <dl class="content-wrapper">
                <dt class="header">
                    <h3>ALL<span>記事一覧</span></h3>
                </dt>
                <dd class="body">
					<div class="decription">
						<?php echo $cat_description; ?>
					</div>
                    <?php get_template_part('post-list'); ?>
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
                        <li><span>記事一覧</span></li>
                      </ul>
                </div>

<?php

wp_reset_query();  // Restore global post data

get_footer();

?>
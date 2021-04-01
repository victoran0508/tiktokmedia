<?php

get_header();

$post = $wp_query->post;

query_posts('posts_per_page=12&cat=' . get_query_var( 'cat' ));

$cat_slug = get_category(get_query_var('cat'))->slug;
$cat_capital = str_replace('-', ' ', strtoupper($cat_slug));
$cat_name = get_category(get_query_var('cat'))->name;
$cat_description = category_description(get_query_var('cat'));

?>

	<main class="page-wrapper">
        <section class="section section--category-<?php echo $cat_slug; ?> section--topmargin">
            <dl class="content-wrapper">
                <dt class="header">
					<h3>
                        <?php echo $cat_capital; ?>
                        <span><?php echo $cat_name; ?></span>
                    </h3>
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
                        <li><span><?php echo $cat_name; ?></span></li>
                      </ul>
                </div>

<?php get_footer(); ?>
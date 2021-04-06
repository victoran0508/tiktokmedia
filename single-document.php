<?php get_header(); ?>

<?php wpb_set_post_views(get_the_ID()); ?>

	<main class="page-wrapper with-sidebar">
        <div class="main">
            <section class="section section--article section--topmargin">
                <article class="article">
                    <summary class="summary">
                        <h1><?php the_title(); ?></h1>
                        <div class="thumbnail">
                            <?php echo get_the_post_thumbnail(); ?>
                        </div>
                    </summary>
                    
					<div class="the-content">
						<?php the_content(); ?>
					</div>
                </article>
            </section>
        </div>
        <?php get_sidebar('document'); ?>
    </main>

    <footer class="page-footer">
        <div class="footer-top">
            <div class="footer-middle">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="<?php home_url(); ?>/">TOP</a></li>
                        <li><a href="<?php home_url(); ?>/document/">お役立ち資料</a></li>
                        <li><span><?php the_title(); ?></span></li>
                      </ul>
                </div>
				
<?php get_footer(); ?>
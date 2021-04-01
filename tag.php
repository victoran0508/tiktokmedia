<?php get_header(); ?>

<main class="page-wrapper">
        <section class="section section--topmargin">
            <dl class="content-wrapper">
                <dt class="header">
                    <h3># <?php echo urldecode(get_query_var('tag')); ?></h3>
                </dt>
                <dd class="body">
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
                        <li><a href="<?php home_url(); ?>/tags">タグ一覧</a></li>
                        <li><span># <?php echo urldecode(get_query_var('tag')); ?></span></li>
                      </ul>
                </div>


<?php get_footer(); ?>
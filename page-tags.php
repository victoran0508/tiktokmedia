<?php get_header(); ?>


	<main class="page-wrapper with-sidebar">
        <div class="main">
            <section class="section section--topmargin">
                <dl class="content-wrapper">
                    <dt class="header">
                        <h3>TAG<span>タグ一覧</span></h3>
                    </dt>
                    <dd class="body">
                        <p class="keyword-panel">
                            <?php get_template_part('keywords'); ?>
                        </p>
                    </dd>
                </dl>
            </section>
        </div>
        
        <?php get_sidebar(); ?>
    </main>

    <footer class="page-footer">
        <div class="footer-top">
            <div class="footer-middle">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="<?php home_url(); ?>/">TOP</a></li>
                        <li><span>タグ一覧</span></li>
                      </ul>
                </div>


<?php get_footer(); ?>
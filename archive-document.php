<?php get_header(); ?>


    <main class="page-wrapper">
        <section class="section section--topmargin">
            <dl class="content-wrapper">
                <dt class="header">
                    <h3>DOCUMENT<span>お役立ち資料</span></h3>
                </dt>
                <dd class="body">
                    <?php get_template_part('document-list'); ?>
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
                        <li><span>お役立ち資料</span></li>
                      </ul>
                </div>


<?php get_footer(); ?>

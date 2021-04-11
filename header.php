<!-- HTMLコード -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/slick/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/theme.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- javascript -->
    <script src="<?php echo get_template_directory_uri(); ?>/libs/jquery/jquery-3.4.1.min.js"></script>
</head>

<body>
    <header class="page-header">
        <div class="header-inner">
            <div class="big-block">
                <div class="logo-block">
                    <span>TikTokのビジネス活用を語るメディア</span>
                    <a href="<?php echo home_url(); ?>/" class="logo">
                        <img class="pc tb" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" />
                        <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-sp.png" alt="" />
                    </a>
                </div>
                <a class="menu menu--sitemap"><!-- i class="fa fa-grip-lines" aria-hidden="true"></!--></a>
                <div class="menu-popup">
                    <div class="popup-container">
                        <div class="popup-inner">
                            <dl class="category">
                                <dt class="header">CATEGORY</dt>
                                <a href="<?php home_url(); ?>/category/how-to">
                                    <dt>HOW TO</dt>
                                    <dd>ナレッジ記事</dd>
                                </a>
                                <a href="<?php home_url(); ?>/category/case-study">
                                    <dt>CASE STUDY</dt>
                                    <dd>プロモーション事例</dd>
                                </a>
                                <a href="<?php home_url(); ?>/category/interview">
                                    <dt>INTERVIEW</dt>
                                    <dd>インタビュー記事</dd>
                                </a>
                                <a href="<?php home_url(); ?>/category/topics">
                                    <dt>TOPICS</dt>
                                    <dd>ニュース・トピックス</dd>
                                </a>
                            </dl>
                            <dl class="contents">
                                <dt class="header">CONTENTS</dt>
                                <a href="https://star-creation.com/service/">
                                    <dt>SERVICE</dt>
                                    <dd>サービス</dd>
                                </a>
                                <a>
                                    <dt>EVENT</dt>
                                    <dd>セミナー・イベント情報</dd>
                                </a>
                                <a>
                                    <dt>DOCUMENT</dt>
                                    <dd>お役立ち資料</dd>
                                </a>
                                <a href="https://star-creation.com/contact/">
                                    <dt>CONTACT</dt>
                                    <dd>お問い合わせ</dd>
                                </a>
                            </dl>
                            <div class="footer-menu">
                                <dl class="about">
                                    <dt><a href="<?php home_url(); ?>/terms">利用規約</a></dt>
                                    <dt><a href="<?php home_url(); ?>/privacy">プライバシーポリシー</a></dt>
                                    <dt><a href="https://starmusic.co.jp/">運営会社</a></dt>
                                </dl>
                                <div class="sns">
                                    <a href="https://twitter.com/star_music_inc"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                    <a href="https://www.facebook.com/Star-Music-Entertainment-Inc-309575329117117/"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <p>Copyright © 2021 Star Music Entertainment Inc. <br class="sp">All rights reserved. </p>
                        </div>
                    </div>
                </div>
                <div class="menu-background"></div>
            </div>
            <div class="small-block">
                <a class="menu menu--search"><!-- i class="fa fa-search" aria-hidden="true"></!--></a>
                <div class="menu-popup">
                    <div class="popup-container">
                        <div class="popup-inner">
                            <dl class="keyword-input">
                                <dt>KEYWORD</dt>
                                <dd>
                                	<?php get_search_form( true ); ?>
                                </dd>
                            </dl>
                            <dl class="tag-list">
                                <dt>TAG</dt>
                                <dd>
                                    <p class="keyword-panel">
                                        <?php get_template_part('keywords'); ?>
                                    </p>
                                    
                                    <div class="view-all-btn">
                                        <a class="view-all" href="<?php home_url(); ?>/tags">VIEW ALL<i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="menu-background"></div>
            </div>
        </div>
    </header>
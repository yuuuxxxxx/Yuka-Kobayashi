<!DOCTYPE html>
<html lang="ja">
<head>
<meta name="google-site-verification" content="nsUu274EkooO-ng18NmdKhyvUDG9FqE57fLMF7Qx0Ls" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<?php get_template_part('template/main'); ?>
<?php wp_head(); ?>
<script src="<?php bloginfo('template_url'); ?>/common/js/swiper.js"></script>
<script src="<?php bloginfo('template_url'); ?>/common/js/common.js"></script>
</head>
<header class="header">
    <div class="header-innerwrap">
        <div class="logo-wrap">
            <h1 class="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php bloginfo('template_url'); ?>/common/img/logo.png" alt="<?php bloginfo('name'); ?>">
                    <span class="c-name">株式会社 小林鉄筋</span>
                </a>
            </h1>
        </div>
        <div class="nav-wrap">
            <nav class="pc-menu">
                <div class="phone-contact">
                <img src="<?php bloginfo('template_url'); ?>/common/img/phone-icon.svg">
                    <div class="phone-info-wrap">
                        <span class="hours">08:00~17:00</span>
                        <span class="num">0269-23-1757</span>
                    </div>
                </div>
                <?php wp_nav_menu(array('theme_location'=>'nav')); //ナビメニュー呼び出し ?>
            </nav>
           
            <!-- ハンバーガーメニュー -->
            <a class="menu-trigger">
            <span></span>
            <span></span>
            <span></span>
            </a>

            <!-- ハンバーガーメニュー中身 -->
            <nav class="sp-menu" style="display:none">
                <?php wp_nav_menu(array('theme_location'=>'nav')); //ナビメニュー呼び出し ?>
                <div class="contact-btn-wrap">
                <a class="contact-button" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
                    <span class="contact">お問い合わせ</span>
                </a>
            </div>
            </nav>
        </div>
    </div>
</header>

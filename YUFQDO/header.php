<!DOCTYPE html>
<html style="margin-top:0 !important;" lang="ja">
<head>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-KG9K8RP');</script>
  <!-- End Google Tag Manager -->
<meta http-equiv="content-type" content="text/html;charset=utf-8/">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="<?php bloginfo('template_url')?>/common/css/normalize.css" type="text/css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<?php get_template_part('template/main'); ?>
<?php wp_head(); ?>
<script src="<?php bloginfo('template_url')?>/common/js/base.js"></script>
<meta name="google-site-verification" content="w0oLFu8tKWhDVUUCopx52w5vTsEKnI19IEbix5xPtEE" />
</head>
<body class="PageWrapper" data-spy="scroll" data-target="#Navbar" data-offset="100">
    <header id="Header" class="HeaderWrapper">
        <div class="HeaderWrapper__position">
            <h1>
                <img src="<?php echo get_template_directory_uri(); ?>/common/img/YUFQDO.png" height="65">
			</h1>
            <nav class="NavWrapper" id="Navbar">
                <ul class="NavWrapper__ul nav nav-pills">
                    <li class="NavWrapper__li">
                        <a class="NavWrapper__a" href="https://yukimifuu.com/#home">HOME</a>
                    </li> 
                    <li class="NavWrapper__li">
                        <a class="NavWrapper__a" href="https://yukimifuu.com/#about">ABOUT</a>
                    </li> 
                    <li class="NavWrapper__li">
                        <a class="NavWrapper__a" href="https://yukimifuu.com/#skill">SKILL</a>
                    </li> 
                    <li class="NavWrapper__li">
                        <a class="NavWrapper__a" href="https://yukimifuu.com/#works">WORKS</a>
                    </li>
                    <li class="NavWrapper__li">
                        <a class="NavWrapper__a" href="https://yukimifuu.com/#contact">CONTACT</a>
                    </li> 
                </ul> 
            </nav> 
        </div> 

        <!-- ハンバーガーメニュー -->
        <div id="Menu" class="HamburgerWrapper">
            <a class="Hamburger">
                <span></span>
                <span></span>
                <span></span>
            </a>
            <ul class="HamburgerWrapper__ul mb-0 nav nav-pills">
                <li class="HamburgerWrapper__li">
                    <a class="HamburgerWrapper__a" href="https://yukimifuu.com/#home">HOME</a>
                </li>
                <li class="HamburgerWrapper__li"> 
                    <a class="HamburgerWrapper__a" href="https://yukimifuu.com/#about">ABOUT</a>
                </li>
                <li class="HamburgerWrapper__li">
                    <a class="HamburgerWrapper__a" href="https://yukimifuu.com/#skill">SKILL</a>
                </li>
                <li class="HamburgerWrapper__li">
                    <a class="HamburgerWrapper__a" href="https://yukimifuu.com/#works">WORKS</a>
                </li>
                <li class="HamburgerWrapper__li">
                    <a class="HamburgerWrapper__a" href="https://yukimifuu.com/#contact">CONTACT</a>
                </li>
            </ul>
        </div>
    </header> 

  <?php get_template_part('content-mainvisual');//メインビジュアル ?>

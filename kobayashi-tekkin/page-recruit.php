<?php get_header(); ?>
<article class="recruit container">
    <div class="mainv">
        <?php if( !(is_home() || is_front_page() )): ?>
            <div class="breadcrumb-area">
                <?php
                if ( function_exists( 'bcn_display' ) ) {
                bcn_display();
                }
            ?>
            </div>
        <?php endif; ?>

        <h1>採用情報</h1>
    </div>
    <section class="section-recruit">
        <h2>私たちと一緒に働きませんか？</h2>
        <p>小林鉄筋では新卒・中途問わず社員を募集しています。<br>
        興味のある方はお気軽にお問い合わせください。</p>
    </section>
</article>
<?php get_footer(); ?>
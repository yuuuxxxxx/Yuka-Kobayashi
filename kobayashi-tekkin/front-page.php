<?php get_header(); ?>

    <article class="front container">
        <div class="front-mainv">
            <div class="front-innerwrap">
                <div class="maintext-wrap">
                    <span>長野県中野市の鉄筋工事</span>
                    <h1>鉄筋の加工・組立のことなら</h1>
                    <p>工場での加工から現場では加工された鉄筋部材をもとに、組立を行います。</p>
                    <div class="button-wrap">
                        <a class="compatible-button" href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><span><span>お問い合わせはこちら</span></span><span><span>お問い合わせはこちら</span></span></a>
                    </div>
                </div>
            </div>
        </div>
               
        <section class="front-company">
            <div class="background">
                <div class="company-container">
                    <div class="company-box">
                        <h1>
                            <img src="<?php bloginfo('template_url'); ?>/common/img/front-company-icon.svg" alt="" width="45">
                            <span>地域密着企業として</span>
                        </h1>
                        <p>長野県の北信地域を中心に施工を行ってきました。<br>
                        住宅や施設など多岐に渡り地域の皆様のために安心安全な基礎づくりを行っております。
                        </p>
                        <div class="front-button-wrap">
                            <a class="front-button" href="<?php echo esc_url( home_url( '/company' ) ); ?>"><span><span>当社について</span></span><span><span>当社について</span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="front-casestudy">
            <div class="title-wrap">
            <div class="text-wrap">
                <h2>施工事例</h2>
                <p>これまで当社が施工してきた事例を掲載しています。<br>
                </p>
            </div>
            </div>
            <div class="archive-list">
            <?php
            $paged = (int) get_query_var('paged');
            $args = array(
            'posts_per_page' => 8,
            'paged' => $paged,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_type' => 'case_study',
            'post_status' => 'publish'
            );
            //ループ開始
            $the_query = new WP_Query($args);
            if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
            <?php get_template_part('content', 'case_study'); ?>  
            <?php endwhile; endif; ?>
        </div>
        <div class="front-button-wrap">
            <a class="front-button" href="<?php echo esc_url( home_url( '/case' ) ); ?>"><span><span>施工事例一覧はこちら</span></span><span><span>施工事例一覧はこちら</span></span></a>
        </div>
        </section>

        <section class="front-news">
            <div class="title-wrap">
                <h2>お知らせ</h2>
                <p>当社のお知らせを掲載しています。<br>
                工事の経過報告なども発信しています。</p>
            </div>
            <div class="container news">
            <div class="news-main" role="main">
                    <div class="n-container">
                        <div class="news-list">
                            <?php
                            $paged = (int) get_query_var('paged');
                            $args = array(
                            'posts_per_page' => 3,
                            'paged' => $paged,
                            'orderby' => 'post_date',
                            'order' => 'DESC',
                            'post_type' => 'post',
                            'post_status' => 'publish'
                            );
                            //ループ開始
                            $the_query = new WP_Query($args);
                            if ( $the_query->have_posts() ) :
                            while ( $the_query->have_posts() ) : $the_query->the_post();
                            ?>

                                <?php get_template_part('content'); ?>  
                                
                            <?php endwhile; endif; ?>
                        </div>
                        <?php if (!(is_front_page())): ?>
                        <div class="pager">
                            <?php
                            if ($the_query->max_num_pages > 1) {
                            echo paginate_links(array(
                            'base' => get_pagenum_link(1) . '%_%',
                            // 'format' => 'page/%#%/',
                            'current' => max(1, $paged),
                            'prev_text' => __('&larr;'),
                                'next_text' => __('&rarr;'),
                            'total' => $the_query->max_num_pages
                            ));
                            }
                            ?>
                        </div>
                        <?php endif; ?>
                        <?php if (is_front_page()): ?>
                            <div class="front-button-wrap">
                                <a class="front-button" href="<?php echo esc_url( home_url( '/news' ) ); ?>"><span><span>お知らせ一覧はこちら</span></span><span><span>お知らせ一覧はこちら</span></span></a>
                            </div>
                        <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </section>
    </article>

    <?php get_footer(); ?>
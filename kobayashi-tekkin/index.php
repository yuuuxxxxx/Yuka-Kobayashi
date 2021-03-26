<?php get_header(); ?>
<article class="news container">
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
        <h1>お知らせ一覧</h1>
    </div>
    <main class="news-main" role="main">
        <div class="n-container">
            <div class="news-list">
                <?php
                $paged = (int) get_query_var('paged');
                $args = array(
                'posts_per_page' => 6,
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
            <?php wp_reset_postdata(); ?>
        </div>
    </main>
</div>

<?php get_footer(); ?>

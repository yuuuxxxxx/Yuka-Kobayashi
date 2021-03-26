<?php get_header(); ?>

<div class="case-study container">
    <div class="mainv">
        <h1>施工事例</h1>
    </div>
    <div class="tax-wrap">
        <?php
        echo '<ul class="tax-list">';
            $args = array(
                'parent' => 0,
                'taxonomy' => 'case_study_case',
                'hide_empty' => 0,
            );
            
            $parent_categories = get_categories( $args );
            foreach ( $parent_categories as $parent_category ) {
                    echo '<li class="tax-item tax-item'.$count.'"><a class="tax-button" href="' . esc_url( get_category_link( $parent_category->term_id )) . '"><span>' . $parent_category->name . '</span></a></li>';
                  }
        echo '</ul>';
        ?>
        </div>

    <main class="archive-main" role="main">
        <div class="container">
            
            <div class="archive-list">
                <?php
                $paged = (int) get_query_var('paged');
                $args = array(
                'posts_per_page' => 12,
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

            <div class="pager">
                <?php
                if ($the_query->max_num_pages > 1) {
                echo paginate_links(array(
                'base' => get_pagenum_link(1) . '%_%',
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
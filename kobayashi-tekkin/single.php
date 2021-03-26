<?php get_header(); ?>
<?php
	$classes = array( 'sub-container', 'single-post-container', );
?>
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
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
        <article class="news-item-wrap">
        <div class="single-item-header">
          <time class="news-item-date"><?php the_time('Y年m月d日'); ?></time>
          
          <h3 class="news-item-title">
              <?php the_title();?>
          </h3>
          </div>
          <div class="single-contents-body">
                  <?php if ( has_post_thumbnail()): ?>
                    <figure class="single-contents-body-img-wrapper">
                      <?php the_post_thumbnail('single-post-work-featured'); ?>
                    </figure>
                  <?php endif; ?>
                  <?php the_content();?>
                </div>
              <?php endwhile ; ?>
            <?php endif ; ?>
        </article>
        <div class="single-footer"><a href="<?php echo esc_url( home_url( '/news' ) ); ?>"><svg id="single-post-arrow" xmlns="http://www.w3.org/2000/svg" width="17.599" height="17.599" viewBox="0 0 17.599 17.599"><path id="パス_89" data-name="パス 89" d="M8.8,0a8.8,8.8,0,1,0,8.8,8.8A8.8,8.8,0,0,0,8.8,0ZM7.982,13.39,6.466,11.874,9.541,8.8,6.466,5.724,7.982,4.209,12.573,8.8Z" fill="#1d1d1d"/></svg><span>ニュース一覧へ戻る</span></a></div>
        </main>
        </div>
</article>
<!-- ここまでコンテンツ -->
<?php get_footer(); ?>

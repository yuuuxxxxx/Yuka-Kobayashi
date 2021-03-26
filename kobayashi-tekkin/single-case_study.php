<?php get_header(); ?>
<?php
	$classes = array( 'sub-container', 'single-case_study-container', );

    //カスタムフィールドの値を取得
    $case_study_area = get_field('case_study_area');
    $case_study_prefectures = get_field('case_study_prefectures');
    $case_study_structure = get_field('case_study_structure');
    
?>
<article id="post-<?php the_ID(); ?>"  <?php post_class($classes); ?>>
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
                    echo '<li class="tax-item tax-item"><a class="tax-button" href="' . esc_url( get_category_link( $parent_category->term_id )) . '"><span>' . $parent_category->name . '</span></a></li>';
                  }
        echo '</ul>';
        ?>
    </div>
    <main class="contents" role="main">
      <!-- コンテンツの取得開始 -->
      <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
          <div class="single-head">
            <h1 class="single-title">
            <?php if ($case_study_area ) : ?>
                    <span><?php echo $case_study_area; ?></span>
            <?php endif; ?>
            </h1>
            <p class="archive-title"><?php the_title(); ?></p>
            <?php the_content(); ?>
          </div>

          <div class="single-main">
                    <!-- スライダー -->
            <div class="swiper-group">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                    <?php if( get_field('case_study_img')) { ?>
                        <div class="swiper-slide">
                        <img src="<?php the_field('case_study_img'); ?>" alt="">
                        </div>
                    <?php } ?>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                </div>
                <script>
                var swiper = new Swiper('.swiper-container', {
                    navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                    },
                    loop: true,
                    pagination: {
                        el: '.swiper-pagination',
                        type: 'bullets',
                        clickable: true,
                    },
                });
                </script>  
            </div>
        <?php endwhile ; ?>
      <?php endif ; ?>
    </main>
    <div class="button-wrap">
        <a class="deco-button-frame" href="<?php echo esc_url( home_url( '/case_study' ) ); ?>">
            <span  class="frame-deco-button">一覧へ戻る</span>
        </a>
    </div>
  </div>
</article>
<!-- ここまでコンテンツ -->
<?php get_footer(); ?>

<!-- header取得 -->
<?php get_header(); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>
<h2><?php the_title(); ?></h2>
  <!-- 投稿した記事を表示   -->
  <?php the_content(); ?>
<?php endwhile; ?>
<?php endif; ?>
<!-- footer取得 -->
<?php get_footer(); ?>
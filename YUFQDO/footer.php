<footer class="FooterWrapper">
  <?php wp_reset_query(); ?>
  <?php if(is_front_page()): //トップページはパンくずなし?>
  <?php else: ?>
  <?php if(function_exists("the_breadcrumb")){the_breadcrumb();} ?>
  <?php endif; //ここまでトップページはパンくずなし?>
  <?php wp_reset_query(); ?>
  <div class="FooterWrapper__copyright">Copyright（C） <?php bloginfo('name') ?> All Rights Reserved</div>
</footer>
</body>
</html>

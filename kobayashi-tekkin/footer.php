<footer class="footer">
    <div class="footer-container">
        <div class="footer-meta">
            <div class="left-container">
                <span>長野県中野市の鉄筋工業</span>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php bloginfo('template_url'); ?>/common/img/logo.png" alt="" class="footer-meta-logo">
                    <span class="c-name">株式会社 小林鉄筋</span>
                </a>
                <div class="address-wrap">
                    <address class="footer-address">
                    〒383-0043 長野県中野市大字三ツ和１４<br>
                    TEL 0269-23-1757<br>
                    FAX 0269-23-1758<br>
                    </address>
                </div>
            </div>
        </div>
        <div class="footer-navwrap">
            <nav class="footer-nav" role=‘navigation’>
            <?php wp_nav_menu(array(
                'theme_location'=>'footer-nav',
                'container_class'=>'footer-nav'
            )); ?>
            </nav>
            <div class="copyright">Copyrights (C) KobayashiTekkin,inc. All Rights Reserved.</div>
        </div>
    </div>
    </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>

<?php get_header(); ?>
<article class="company container">
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

        <h1>会社情報</h1>
    </div>

    <section class="section-overview">
        <h2 class="headline">会社概要</h2>

        <table class="company-table">
            <tbody>
                <tr>
                    <th>会社名</th>
                    <td>株式会社小林鉄筋</td>
                </tr>
                <tr>
                    <th>代表者名</th>
                    <td>代表取締役　小林信夫</td>
                </tr>
                <tr>
                    <th>資本金</th>
                    <td>800万円</td>
                </tr>
                <tr>
                    <th>創業年月</th>
                    <td>H.6 11月</td>
                </tr>
                <tr>
                    <th>取引先</th>
                    <td>不特定多数</td>
                </tr>
                <tr>
                    <th>建設業の許可証</th>
                    <td>XXXXXX</td>
                </tr>
                <tr>
                    <th>会社所在地</th>
                    <td>長野県中野市三ツ和14<br>
                        TEL 0269-23-1757<br>
                        FAX 0269-23-1758</td>
                </tr>
                <tr>
                    <th>MAP</th>
                    <td class="p-0"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3197.9452559602155!2d138.33375195019212!3d36.72387597986609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601d8bcb07b40063%3A0x44d9b50acf4d6b5b!2z44CSMzgzLTAwNDMg6ZW36YeO55yM5LiK6auY5LqV6YOh5Lit6YeO5biC5aSn5a2X5LiJ44OE5ZKM77yR77yU!5e0!3m2!1sja!2sjp!4v1599272205168!5m2!1sja!2sjp" width="100%" height="300" frameborder="0" style="border:0;margin-bottom:-3px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></td>
                </tr>
            </tbody>
        </table>

    </section>

    <section class="section-message">
        <div class="message-wrap">
        <h2 class="headline">代表メッセージ</h2>
        <p>小林鉄筋は平成6年の創業以来、長野県内を中心に鉄筋の加工や組立を行ってきました。<br>
        社員は日々現場での仕事や資格の取得など技術を磨き、若手の育成にも力を入れております。<br>
        お客様に喜んでいただける物づくりを1番に考え、1人1人仕事に対するプライドと責任を持って努めてまいります。
        <br>
        今後ともご支援、ご愛顧を賜りますよう心よりお願い申し上げます。<br>
        <br>
        代表取締役　小林 信夫
        </p>
        </div>
    </section>
</article>
<?php get_footer(); ?>
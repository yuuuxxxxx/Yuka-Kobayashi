<article class="news-item-wrap">
    <div class="news-item-header">
    <time class="news-item-date"><?php the_time('Y年m月d日'); ?></time>
    
    <h3 class="news-item-title">
        <?php the_title();?>
    </h3>
    </div>
    <?php if (!(is_front_page())): ?>
    <?php if( get_field('news_thumbnail')) { ?>
        <div class="news-thumbnail-wrap">
        <img src="<?php the_field('news_thumbnail'); ?>" alt="">
        <div class="news-item-text">
            <div>
            <?php if(!empty($post->post_content)): ?>
                <?php echo mb_substr(strip_tags($post-> post_content),0,100) . '…'; ?>
            <?php endif; ?>
            </div>
        <a href="<?php the_permalink(); ?>" class="news-item-link"><svg id="single-post-arrow" xmlns="http://www.w3.org/2000/svg" width="17.599" height="17.599" viewBox="0 0 17.599 17.599"><path id="パス_89" data-name="パス 89" d="M8.8,0a8.8,8.8,0,1,0,8.8,8.8A8.8,8.8,0,0,0,8.8,0ZM7.982,13.39,6.466,11.874,9.541,8.8,6.466,5.724,7.982,4.209,12.573,8.8Z" fill="#1d1d1d"/></svg><span>もっと見る</span></a>
        </div>
        </div>
        <?php } ?>
        <?php if( !get_field('news_thumbnail')) { ?>
        <div class="news-item-text">
        <div>
            <?php if(!empty($post->post_content)): ?>
                <?php echo mb_substr(strip_tags($post-> post_content),0,100) . '…'; ?>
            <?php endif; ?>
            </div>
        <a href="<?php the_permalink(); ?>" class="news-item-link"><svg id="single-post-arrow" xmlns="http://www.w3.org/2000/svg" width="17.599" height="17.599" viewBox="0 0 17.599 17.599"><path id="パス_89" data-name="パス 89" d="M8.8,0a8.8,8.8,0,1,0,8.8,8.8A8.8,8.8,0,0,0,8.8,0ZM7.982,13.39,6.466,11.874,9.541,8.8,6.466,5.724,7.982,4.209,12.573,8.8Z" fill="#1d1d1d"/></svg><span>もっと見る</span></a>
        </div>
        <?php } ?>
    <?php endif; ?>
    <?php if (is_front_page()): ?>
        <a href="<?php the_permalink(); ?>" class="news-item-link"><svg id="single-post-arrow" xmlns="http://www.w3.org/2000/svg" width="17.599" height="17.599" viewBox="0 0 17.599 17.599"><path id="パス_89" data-name="パス 89" d="M8.8,0a8.8,8.8,0,1,0,8.8,8.8A8.8,8.8,0,0,0,8.8,0ZM7.982,13.39,6.466,11.874,9.541,8.8,6.466,5.724,7.982,4.209,12.573,8.8Z" fill="#1d1d1d"/></svg><span>もっと見る</span></a>
    <?php endif; ?>
</article>
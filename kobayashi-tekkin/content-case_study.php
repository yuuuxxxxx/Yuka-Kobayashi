<?php

    $case_study_area = get_field('case_study_area');

?>
<article id="post-<?php the_ID(); ?>" class="archive-item-wrap">
    <figure class="archive-item-img">

        <?php if( get_field('case_study_thumbnail')): ?>
            <img src="<?php the_field('case_study_thumbnail'); ?>" alt="">
            <?php else:?><img src="<?php bloginfo('template_url'); ?>/common/img/noimg.png" alt="画像なし"><?php endif; ?>
    </figure>
    <div class="archive-txtbox">
        <div class="archive-txtbox-inner">
            <?php if ($case_study_area ) : ?>
                <h3 class="archive-item-area"><?php echo $case_study_area; ?></h3>
            <?php endif; ?>
            <hr>
            <div class="archive-title"><?php the_title(); ?></div>
        </div>
        <a href="<?php the_permalink(); ?>" class="archive-item-link"><span>MORE</span><svg id="circle-arrow" data-name="arrow" xmlns="http://www.w3.org/2000/svg" width="14.744" height="14.744" viewBox="0 0 14.744 14.744">
  <path id="パス_7" data-name="パス 7" d="M193.447,134.1l2.374,2.374-2.374,2.374,1.17,1.17,3.544-3.544-3.544-3.544Z" transform="translate(-187.876 -129.1)" fill="#8b7850"/>
  <path id="パス_8" data-name="パス 8" d="M7.372,0a7.372,7.372,0,1,0,7.372,7.372A7.372,7.372,0,0,0,7.372,0Zm4.394,11.766a6.214,6.214,0,1,1,1.82-4.394A6.193,6.193,0,0,1,11.766,11.766Z" fill="#8b7850"/>
</svg>
</a>
    </div>
    
</article>
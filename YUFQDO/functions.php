<?php
register_nav_menus(array('nav'=>'ナビゲーション'));

function my_scripts() {
wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

add_theme_support('post-thumbnails');



///////////////////////////////////////////////////////////////////
// ページャ
///////////////////////////////////////////////////////////////////
function the_pagination() {
  global $wp_query;
  $bignum = 999999999;
  if ( $wp_query->max_num_pages <= 1 )
    return;
  echo '<div class="pager">';
  echo paginate_links( array(
    'base'         => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
    'format'       => '',
    'current'      => max( 1, get_query_var('paged') ),
    'total'        => $wp_query->max_num_pages,
    'prev_text'    => '&larr;',
    'next_text'    => '&rarr;',
    // 'type'         => 'list',
    'end_size'     => 3,
    'mid_size'     => 3
  ) );
  echo '</div>';
}
////////////////////////////////////////////////////////////////
// パンくずリスト
////////////////////////////////////////////////////////////////
function the_breadcrumb(){
    global $post;
	$title = '';
    $str ='';
    if(!is_home()&&!is_admin()){
        // ホーム（必ず表示）
        $str.= '<div id="breadcrumb" class="cf"><span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">';
        $str.= '<a href="'. home_url() .'" itemprop="url"><span itemprop="title">ホーム</span></a> &gt; </span>';

        // 以下条件分岐
        // カテゴリー
        if(is_category()) {
            $cat = get_queried_object();
            if($cat -> parent != 0){
                $ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
                foreach($ancestors as $ancestor){
                    $str.='<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_category_link($ancestor) .'" itemprop="url"><span itemprop="title">'. get_cat_name($ancestor) .'</span></a> &gt; </span>';
                }
            }
			$title = single_cat_title('',false);
        // タグ
		} elseif(is_tag()) {
			$title = single_tag_title('',false);
        } elseif(is_date()) {
            $title = get_the_time('Y年n月');
        // 固定ページ
		} elseif(is_page()){
            if($post -> post_parent != 0 ){
                $ancestors = array_reverse(get_post_ancestors( $post->ID ));
                foreach($ancestors as $ancestor){
                    $str.='<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_permalink($ancestor).'" itemprop="url"><span itemprop="title">'. get_the_title($ancestor) .'</span></a> &gt; </span>';
                }
            }
			$title = get_the_title();
        // ブログ投稿
		} elseif(is_singular('post')){
            $categories = get_the_category($post->ID);
            $cat = $categories[0];
            if($cat -> parent != 0){
                $ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
                foreach($ancestors as $ancestor){
                    $str.='<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_category_link($ancestor).'" itemprop="url"><span itemprop="title">'. get_cat_name($ancestor). '</span></a> &gt; </span>';
                }
            }
            $str.='<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_category_link($cat -> term_id). '" itemprop="url"><span itemprop="title">'. $cat-> cat_name . '</span></a> &gt; </span>';
			$title = get_the_title();

        // 以下カスタム投稿
        // タクソノミー
		} elseif(is_tax()){
			$query = get_queried_object();
			$taxonomy_slug = $query->taxonomy;
            $terms = array_reverse(get_the_terms($post->ID, $taxonomy_slug));
			$term = $terms[0];
            if($term -> parent != 0){
				$ancestors = get_ancestors( $term -> term_id, $taxonomy_slug);
                foreach($ancestors as $ancestor){
                	$term_name = get_term_by('term_taxonomy_id', $ancestor, $taxonomy_slug);
                    $str.='<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_term_link($ancestor, $taxonomy_slug).'" itemprop="url"><span itemprop="title">'. $term_name->name . '</span></a> &gt; </span>';
                }
            }
			$title = esc_html($query->name);
        // カスタム投稿
		} elseif(is_singular()){
			$query = get_queried_object();
            $typelink = get_post_type_archive_link($query->post_type);
			$typename = get_post_type_object($query->post_type);
            $str.='<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. $typelink .'" itemprop="url"><span itemprop="title">'. $typename->labels->name . '</span></a> &gt; </span>';
			$title = get_the_title();
        // カスタム投稿アーカイブ
		} elseif (is_post_type_archive()) {
			$posttypeTitle = post_type_archive_title('', false );
			$title = esc_html($posttypeTitle);

		} elseif (is_404()) {
			$title = '404 ページが見つかりません';
		} else {

        }
        $str.='<span>'. $title .'</span>';
        $str.='</div>';
    }
    echo $str;
}

///////////////////////////////////////////////////////////
// 検索を投稿記事だけにする
///////////////////////////////////////////////////////////
function SearchFilter($query) {
if ($query->is_search) {
$query->set('post_type', 'post');
}
return $query;
}
add_filter('pre_get_posts','SearchFilter');

// 人気記事出力用
function getPostViews($postID){
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if($count==''){
			delete_post_meta($postID, $count_key);
			add_post_meta($postID, $count_key, '0');
			return "0 View";
	}
	return $count.' Views';
}
function setPostViews($postID) {
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if($count==''){
			$count = 0;
			delete_post_meta($postID, $count_key);
			add_post_meta($postID, $count_key, '0');
	}else{
			$count++;
			update_post_meta($postID, $count_key, $count);
	}
}
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

// pタグ除去

add_action('init', function() {
remove_filter('the_excerpt', 'wpautop');
remove_filter('the_content', 'wpautop');
});
add_filter('tiny_mce_before_init', function($init) {
$init['wpautop'] = false;
$init['apply_source_formatting'] = ture;
return $init;
});

// タイトルタグ
add_theme_support( 'title-tag' );

 ?>
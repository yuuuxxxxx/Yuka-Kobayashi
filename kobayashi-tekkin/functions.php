<?php

///////////////////////////////////////////////////
// ナビゲーション追加
///////////////////////////////////////////////////
register_nav_menus(array('nav'=>'ナビゲーション'));
register_nav_menus(array('footer-nav'=>'フッターナビ'));


///////////////////////////////////////////////////
// WPのjquery読み込み
///////////////////////////////////////////////////
function add_jquery() {
    if( !is_admin() ){
     //remove WP-Default-jQuery
     wp_deregister_script('jquery');
  
      // add Google-CDN-jQuery
      wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
    }
  }
  add_action('wp_enqueue_scripts', 'add_jquery');

  add_filter( 'show_admin_bar', '__return_false' );


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
    'end_size'     => 3,
    'mid_size'     => 3
  ) );
  echo '</div>';
}

/////////////////////////////////////////////////////
////投稿の名前変更
/////////////////////////////////////////////////////
function Change_menulabel() {
	global $menu;
	global $submenu;
	$name = 'お知らせ';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name.'一覧';
	$submenu['edit.php'][10][0] = '新しい'.$name;
}
function Change_objectlabel() {
	global $wp_post_types;
	$name = 'お知らせ';
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $name;
	$labels->singular_name = $name;
	$labels->add_new = _x('追加', $name);
	$labels->add_new_item = $name.'の新規追加';
	$labels->edit_item = $name.'の編集';
	$labels->new_item = '新規'.$name;
	$labels->view_item = $name.'を表示';
	$labels->search_items = $name.'を検索';
	$labels->not_found = $name.'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );



add_filter('the_content', 'wpautop_filter', 9);
function wpautop_filter($content) {
global $post;
$remove_filter = false;
$arr_types = array('post'); //適用させる投稿タイプを指定
$post_type = get_post_type( $post->ID );
if (in_array($post_type, $arr_types)) $remove_filter = true;
if ( $remove_filter ) {
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');
}
return $content;
}

 ///////////////////////////////////////////////////
  //パンくずリスト
  ///////////////////////////////////////////////////
  function breadcrumb() {
    $home = '<li><a href="'.get_bloginfo('url').'" >トップ</a></li>';
    
    echo '<ul class="breadcrumb">';
    if ( is_front_page() ) {
        // トップページの場合
    }

    else if ( is_archive() ) {
    echo $home;
    the_archive_title('<li>','</li>');
    }

    else if ( is_single() ) {
    // 投稿ページの場合
    echo $home;
    echo $compatible;
    the_title('<li>', '</li>');
    
    }

    else if( is_page() ) {
    // 固定ページの場合
    echo $home;
    the_title('<li>', '</li>');
    }
    else if( is_404() ) {
    // 404ページの場合
    echo $home;
    echo '<li>ページが見つかりません</li>';
    }
    echo "</ul>";
}

// アーカイブの余計なタイトルを削除
add_filter( 'get_the_archive_title', function ($title) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_month() ) {
        $title = single_month_title( '', false );
    }
    return $title;
});



?>
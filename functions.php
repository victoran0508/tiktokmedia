<?php
	require_once('functions/admin.php');

	add_theme_support('post-thumbnails');
    
    // 投稿取得条件を変更
	function change_posts_per_page($query) {
		/* 管理画面,メインクエリに干渉しないために必須 */
		if(is_admin() || !$query->is_main_query()) {
			return;
		}

		$query->set('posts_per_page', 12);
	}
	add_action('pre_get_posts', 'change_posts_per_page');

	function wpb_set_post_views($postID) {
		$count_key = 'wpb_post_views_count';
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
?>
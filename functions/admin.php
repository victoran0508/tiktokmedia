<?php
    // カスタム投稿とタクソノミーを追加
	add_action('init', function(){
        // ライター
        register_post_type('writer',
            array(
                'labels' => array(
					'name' => __('ライター'),
					'singular_name' => __('ライター')
				),
				'rewrite' => array(
					'slug' => 'writer',
					'with_front' => false,
				),
				'hierarchical' => false,
				'has_archive' => true,
				'menu_position' => 21,
				'public' => true,
                "supports" => ['title', 'thumbnail'],
            )
        );

		flush_rewrite_rules();

        add_filter( 'manage_writer_posts_columns', 'smashing_writer_columns' );
        function smashing_writer_columns( $columns ) {
            $columns = array(
            'cb' => $columns['cb'],
            'avatar' => __( 'アバター' ),
            'name' => __( '姓名' ),
            'intro' => __( '紹介' ),
            );
            return $columns;
        }

        add_action( 'manage_writer_posts_custom_column', 'smashing_writer_column', 10, 2);
        function smashing_writer_column( $column, $post_id ) {
            if ( 'avatar' === $column ) {
                echo get_the_post_thumbnail( $post_id, array(80, 80) );
            }
            if ( 'name' === $column ) {
                echo get_post_meta( $post_id, 'name', true);
            }
            if ( 'intro' === $column ) {
                echo get_post_meta( $post_id, 'intro', true);
            }
        }
	});
?>

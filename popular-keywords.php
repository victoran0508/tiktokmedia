<?php
    global $wpdb;
    $term_ids = $wpdb->get_col("
        SELECT term_id FROM $wpdb->term_taxonomy
        INNER JOIN $wpdb->term_relationships ON $wpdb->term_taxonomy.term_taxonomy_id=$wpdb->term_relationships.term_taxonomy_id
        INNER JOIN $wpdb->posts ON $wpdb->posts.ID = $wpdb->term_relationships.object_id
        WHERE DATE_SUB(CURDATE(), INTERVAL 30 DAY) <= $wpdb->posts.post_date");

    if (count($term_ids) > 0) {
        $tags = get_tags(array(
            'orderby' => 'count',
            'order'   => 'DESC',
            'number'  => 30,
            'include' => $term_ids,
        ));

        foreach ( (array) $tags as $tag ) {
            $tag_link = get_tag_link( $tag->term_id );
            echo "<a href=\"$tag_link\" class=\"keyword\">" . $tag->name . "</a>";
        }
    }
?>

<?php
    // $tags = get_tags();
    // foreach ( $tags as $tag ) {
    //     $tag_link = get_tag_link( $tag->term_id );
    //     echo "<a href=\"$tag_link\" class=\"keyword\">" . $tag->name . "</a>";
    // }
?>
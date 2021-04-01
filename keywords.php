<?php
    $tags = get_tags();
    foreach ( $tags as $tag ) {
        $tag_link = get_tag_link( $tag->term_id );
        echo "<a href=\"$tag_link\" class=\"keyword\">" . $tag->name . "</a>";
    }
?>
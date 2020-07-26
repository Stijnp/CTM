<?php

function books_register_type() {
    $labels = array(
        'name' => 'Books',
        'singalur_name' => 'Book',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'show_in_rest' => true,
    );

    register_post_type( 'book', $args );
}
<?php

function books_register_author_taxonomy()
{
    $labels = array(
        'name' => 'Authors',
        'singular_name' => 'Author',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
    );

    $post_types = array('book');

    register_taxonomy('author', $post_types, $args);
}


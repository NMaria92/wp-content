<?php

function sejr_og_davidsen_posttypes()
{
    register_post_type('nyheder', array(
        'public' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'Nyheder',
            'add_new_item' => 'Tilføj en ny Nyhed',
            'edit_item' => 'Rediger nyhed',
            'all_items' => 'Alle Nyheder',
            'singular_name' => 'Nyhed'
        ),
        'menu_icon' => 'dashicons-admin-site-alt3',
    ));

    register_post_type('Hunde', array(
        'public' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'Hunde',
            'add_new_item' => 'Tilføj en ny hund',
            'edit_item' => 'Rediger hund',
            'all_items' => 'Alle hunde',
            'singular_name' => 'hund'
        ),
        'menu_icon' => 'dashicons-pets',
    ));


    register_post_type('Racer', array(
        'public' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'Racer',
            'add_new_item' => 'Tilføj en ny race',
            'edit_item' => 'Rediger race',
            'all_items' => 'Alle racer',
            'singular_name' => 'race'
        ),
        'menu_icon' => 'dashicons-book',
    ));
}

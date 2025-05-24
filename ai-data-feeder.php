<?php 
/**
* Plugin Name: AI Data Feeder
* Description: Custom WP plugin to manage and organize AI-readable case data. It will be used to feed data to an AI Model.
* Version: 1.0
* Author Name: Matthew John Alex
* Text Domain: ai-data-feeder
* Domain Path: /languages
*/

/*
AI Data Feeder is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

AI Data Feeder is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with MJ Slider. If not, see http://www.gnu.org/licenses/gpl-2.0.html.
*/


if (! defined ("ABSPATH")){
    exit;
}

// Register Custom Post Type
function adf_register_post_type() {
    $labels = array(
        'name' => 'AI Knowledge Chunks',
        'singular_name' => 'AI Data Feeder',
        'menu_name' => 'AI Data Feeder',
        'name_admin_bar' => 'AI data Chunk',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Data',
        'edit_item' => 'Edit Data',
        'new_item' => 'New Data',
        'view_item' => 'View Data',
        'all_items' => 'All Data',
        'search_items' => 'Search Data',
        'not_found' => 'No Data found',
    );

    $args = array(
        'labels' => $labels,
        'public' => true, // Visible to AI
        'exclude_from_search' => true, // Hide from WP search
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 20,
        'menu_icon' => 'dashicons-media-document',
        'supports' => array('title', 'editor', 'thumbnail'), // Use content editor and image
        'has_archive' => false,
        'rewrite' => array('slug' => 'ai-data-feeder'),
        'show_in_rest' => true, // Enables Gutenberg editor
    );

    register_post_type('ai-data-feeder', $args);
}
add_action('init', 'adf_register_post_type');

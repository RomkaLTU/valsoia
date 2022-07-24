<?php

function cptui_register_my_taxes(): void
{

    /**
     * Taxonomy: Prod. categories.
     */

    $labels = [
        "name" => __("Prod. categories", "codesome"),
        "singular_name" => __("Prod. category", "codesome"),
    ];


    $args = [
        "label" => __("Prod. categories", "codesome"),
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "hierarchical" => false,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => [ 'slug' => 'product_categories', 'with_front' => true, ],
        "show_admin_column" => true,
        "show_in_rest" => true,
        "show_tagcloud" => true,
        "rest_base" => "product_categories",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "rest_namespace" => "wp/v2",
        "show_in_quick_edit" => true,
        "sort" => true,
        "show_in_graphql" => false,
    ];
    register_taxonomy("product_categories", [ "products" ], $args);
}
add_action('init', 'cptui_register_my_taxes');

function cptui_register_my_cpts(): void
{

    /**
     * Post Type: Products.
     */

    $labels = [
        "name" => __("Products", "codesome"),
        "singular_name" => __("product", "codesome"),
    ];

    $args = [
        "label" => __("Products", "codesome"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => true,
        "can_export" => true,
        "rewrite" => [ "slug" => "products", "with_front" => true ],
        "query_var" => true,
        "menu_position" => 5,
        "menu_icon" => "dashicons-cart",
        "supports" => [ "title", "editor", "thumbnail", "page-attributes" ],
        "show_in_graphql" => false,
    ];

    register_post_type("products", $args);
}

add_action('init', 'cptui_register_my_cpts');

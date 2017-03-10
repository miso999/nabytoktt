<?php
/*
Plugin Name: Portfolio
Description: Plugin pre portfolio na uvodnu stranku
Author: M. Simoncic
*/


function create_porfolio() {

    register_post_type( 'portfolio',
        // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Portfólio' ),
                'singular_name' => __( 'Portfólio' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'portfolio'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_porfolio' );


/*
* Creating a function to create our CPT
*/

function custom_post_type() {



// Set other options for Custom Post Type

    $args = array(
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'taxonomy', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies'          => array( 'nabytok' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );

    // Registering your Custom Post Type
    register_post_type( 'portfolio', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'custom_post_type', 0 );


//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_topics_hierarchical_taxonomy', 0 );

//create a custom taxonomy name it topics for your posts

function create_topics_hierarchical_taxonomy() {

// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI

    $labels = array(
        'name' => _x( 'Kategória nábytku', 'taxonomy general name' ),
        'singular_name' => _x( 'Nábytok', 'taxonomy singular name' ),
        'menu_name' => __( 'Kategórie nábytku' ),
    );

// Now register the taxonomy

    register_taxonomy('nabytok',array('post','portfolio','media'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'nabytok' ),
    ));

}

function wptp_add_categories_to_attachments() {
    register_taxonomy_for_object_type( 'nabytok', 'attachment' );
}
add_action( 'init' , 'wptp_add_categories_to_attachments' );



?>
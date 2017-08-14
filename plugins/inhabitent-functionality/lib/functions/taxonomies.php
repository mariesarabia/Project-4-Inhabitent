<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...

// Register Custom Taxonomy
function inhabitent_tax_product_type() {
    
        $labels = array(
            'name'                       => 'Product Types',
            'singular_name'              => 'Product Type',
            'menu_name'                  => 'Product Types',
            'all_items'                  => 'All Product Types',
            'parent_item'                => 'Parent Product Type',
            'parent_item_colon'          => 'Parent Product Type:',
            'new_item_name'              => 'New Product Type Name',
            'add_new_item'               => 'Add New Product Type',
            'edit_item'                  => 'Edit Product Type',
            'update_item'                => 'Update Product Type',
            'view_item'                  => 'View Product Type',
            'separate_items_with_commas' => 'Separate Product Types with commas',
            'add_or_remove_items'        => 'Add or remove Product TypeS',
            'choose_from_most_used'      => 'Choose from the most used',
            'popular_items'              => 'PopularProduct Type',
            'search_items'               => 'Search Product Type',
            'not_found'                  => 'Not Found',
            'no_terms'                   => 'No Product Type',
            'items_list'                 => 'Product TypeS list',
            'items_list_navigation'      => 'Product Types list navigation',
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
            'show_in_rest'               => true,
        );
        register_taxonomy( 'product', array( 'product' ), $args );
    
    }
    add_action( 'init', 'inhabitent_tax_product_type', 0 );
   

<?php

// Remover links e funcionalidades desnecessárias do wp_head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Registrar o Custom Post Type para Temperos
function custom_post_type_temperos() {
    register_post_type('temperos', array(
        'label' => 'Temperos',
        'description' => 'Temperos',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => false,
        'rewrite' => array('slug' => 'temperos', 'with_front' => true),
        'query_var' => true,
        'supports' => array('title', 'editor', 'page-attributes', 'post-formats', 'thumbnail', 'custom-fields'),
        'labels' => array (
            'name' => 'Temperos',
            'singular_name' => 'Tempero',
            'menu_name' => 'Temperos',
            'add_new' => 'Adicionar Novo',
            'add_new_item' => 'Adicionar Novo Tempero',
            'edit' => 'Editar',
            'edit_item' => 'Editar Tempero',
            'new_item' => 'Novo Tempero',
            'view' => 'Ver Tempero',
            'view_item' => 'Ver Tempero',
            'search_items' => 'Procurar Temperos',
            'not_found' => 'Nenhum Tempero Encontrado',
            'not_found_in_trash' => 'Nenhum Tempero Encontrado no Lixo',
        )
    ));
}
add_action('init', 'custom_post_type_temperos');

// Adicionar campos personalizados usando CMB2
add_action('cmb2_admin_init', 'cmb2_fields_home');

function cmb2_fields_home() {
    $cmb = new_cmb2_box([
        'id'           => 'home_box',
        'title'        => 'Home',
        'object_types' => ['page'], // Mostra o metabox para todas as páginas
         'show_on' => [
             'key' => 'page-template',
             'value' => 'page-home.php',
         ]
    ]);

    $cmb->add_field([
        'name' => 'Tempero',
        'id'   => 'tempero',
        'type' => 'text', // Tipo de campo
    ]);
}

?>

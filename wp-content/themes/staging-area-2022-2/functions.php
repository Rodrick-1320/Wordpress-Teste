<?php

add_theme_support('post-thumbnails');  


add_image_size( 'post-image', 330, 190, true );

add_filter( 'image_size_names_choose', 'my_custom_image_sizes' );
function my_custom_image_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'post-image' => __( 'Post Images' ),
    ) );
}


//Adicionando a função para adicionar a aba cursos

function my_custom_curso_item()
{
	$labels = array(
		'name'               => _x('curso items', 'post type general name'),
		'singular_name'      => _x('curso item', 'post type singular name'),
		'menu_name'          => 'Curso'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Descrição do curso',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
		'has_archive'   => 'course',
		'taxonomies' => ['type_business']
	);
	register_post_type('course', $args);
}
add_action('init', 'my_custom_curso_item');


/**
 * Remove size images
 */
// function remove_width_attribute($html)
// {
//     $html = preg_replace('/(width|height)="\d*"\s/', "", $html);
//     return $html;
// }
// add_filter('post_thumbnail_html', 'remove_width_attribute', 10);
// add_filter('image_send_to_editor', 'remove_width_attribute', 10);




function create_taxonomy_type()
{

	register_taxonomy(
		'type_business', //Indentificador da taxonomia
		'course',
		array(
			'label' => 'Categorias de Cursos',
			'rewrite' => array('slug' => 'categoria-curso'),
			'hierarchical' => true,
		)
	);
}

add_action('init', 'create_taxonomy_type');


function custom_meta_box_markup()
{
    
}

function add_custom_meta_box()
{
    add_meta_box("demo-meta-box", "Custom Meta Box", "custom_meta_box_markup", "post", "side", "high", null);
}


add_action("add_meta_boxes", "add_custom_meta_box"); 




//ACF Fields
//require_once( '/inc/fields.php' );



/**
 * This function adds a meta box with a callback function of my_metabox_callback()
 */
function add_wpdocs_meta_box() {
    $var1 = 'this';
    $var2 = 'that';
    add_meta_box(
        'metabox_id',
        __( 'Metabox Title', 'textdomain' ),
        'wpdocs_metabox_callback',
        'post',
        'normal',
        'low',
        array( 'foo' => $var1, 'bar' => $var2 )
    );
}
 
/**
 * Get post meta in a callback
 *
 * @param WP_Post $post    The current post.
 * @param array   $metabox With metabox id, title, callback, and args elements.
 */
 
function wpdocs_metabox_callback( $post, $metabox ) {
    // Output last time the post was modified.
    echo 'Last Modified: ' . $post->post_modified;
 
    // Output 'this'.
    echo $metabox['args']['foo'];
 
    // Output 'that'.
    echo $metabox['args']['bar'];
 
    // Output value of custom field.
    echo get_post_meta( $post->ID, 'wpdocs_custom_field', true );
}

add_action("add_meta_boxes", "add_wpdocs_meta_box"); 
?>
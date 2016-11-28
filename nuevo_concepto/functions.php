<?php
/*
 *  Author: Creativa
 *  URL: 
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

// Load any external files you have here

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (!isset($content_width))
{
    $content_width = 900;
}

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    add_image_size('members_size', 360, 352,true);

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('nuevoconcepto', get_template_directory() . '/languages');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// Nuevo concepto navigation
function nuevoconcepto_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

// Load Nuevo concepto scripts (header.php)
function nuevoconcepto_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

    	wp_register_script('conditionizr', get_template_directory_uri() . '/js/lib/conditionizr-4.3.0.min.js', array(), '4.3.0'); // Conditionizr
        wp_enqueue_script('conditionizr'); // Enqueue it!

        wp_register_script('modernizr', get_template_directory_uri() . '/js/lib/modernizr-2.7.1.min.js', array(), '2.7.1'); // Modernizr
        wp_enqueue_script('modernizr'); // Enqueue it!

        wp_register_script('jquery', 'https://code.jquery.com/jquery-2.2.4.min.js', array(), '2.2.4'); // Modernizr
        wp_enqueue_script('jquery'); // Enqueue it!

        wp_register_script( 'additional-validation', 'http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js', array(), '1.0.0', true );
        wp_enqueue_script('additional-validation');

        wp_register_script('slick', get_template_directory_uri() . '/js/lib/slick.min.js', array('jquery'), '1.0.0'); // Slick
        wp_enqueue_script('slick'); // Enqueue it!

        wp_register_script('ninja-slider', get_template_directory_uri() . '/js/lib/ninja-slider.js', array('jquery'), '1.0.0'); // Ninja Slider
        wp_enqueue_script('ninja-slider'); // Enqueue it!

        wp_register_script('nuevoconceptocripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('nuevoconceptocripts'); // Enqueue it!
    }
}

// Load Nuevo concepto conditional scripts
function nuevoconcepto_conditional_scripts()
{
    if (is_page('pagenamehere')) {
        wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
        wp_enqueue_script('scriptname'); // Enqueue it!
    }
}

// Load Nuevo concepto styles
function nuevoconcepto_styles()
{
    wp_register_style('fontastic','https://fonts.googleapis.com/css?family=Poppins:400,500,700', '1.0.0', 'all');
    wp_enqueue_style('fontastic'); // Enqueue it!
    
    wp_register_style('bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', '3.7.7', 'all');
    wp_enqueue_style('bootstrap'); // Enqueue it!

    wp_register_style('ninja-slider', get_template_directory_uri() . '/stylesheets/ninja-slider.css', array(), '1.0', 'all');
    wp_enqueue_style('ninja-slider'); // Enqueue it!

    wp_register_style('css', get_template_directory_uri() . '/stylesheets/style.css', array(), '1.0', 'all');
    wp_enqueue_style('css'); // Enqueue it!

}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}



// Custom Excerpts
function nuevoconceptowp_index($length) // Create 20 Word Callback for Index page Excerpts, call using nuevoconceptowp_excerpt('nuevoconceptowp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using nuevoconceptowp_excerpt('nuevoconceptowp_custom_post');
function nuevoconceptowp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function nuevoconceptowp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function nuevoconcepto_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function nuevoconceptoblankgravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

add_action('admin_head', 'my_custom_admin_style');

function my_custom_admin_style() {
    wp_enqueue_style('style-admin' , get_template_directory_uri() . '/stylesheets/style-admin.css');
}


/*------------------------------------*\
    Custom Post Type
\*------------------------------------*/

// Register Custom Post Type
function Integrantes() {

    $labels = array(
        'name'                  => 'Integrantes',
        'singular_name'         => 'Integrante',
        'menu_name'             => 'Integrantes',
        'name_admin_bar'        => 'Integrantes',
        'archives'              => 'Integrantes',
        'parent_item_colon'     => 'Integrantes',
        'all_items'             => 'Todos los Integrantes',
        'add_new_item'          => 'Nuevo integrante',
        'add_new'               => 'Agregar nuevo',
        'new_item'              => 'Nuevo integrante',
        'edit_item'             => 'Editar integrante',
        'update_item'           => 'Actualizar integrante',
        'view_item'             => 'Ver integrante',
        'search_items'          => 'Buscar integrante',
        'not_found'             => 'No encontrado',
        'not_found_in_trash'    => 'No encontrado en papelera',
        'featured_image'        => 'Imagen destacada',
        'set_featured_image'    => 'Poner imagen descatada',
        'remove_featured_image' => 'Quitar imagen destacada',
        'use_featured_image'    => 'Usar como imagen destacada',
        'insert_into_item'      => 'Insertar en integrantes',
        'uploaded_to_this_item' => 'Subir en este integrante',
        'items_list'            => 'Lista de integrantes',
        'items_list_navigation' => 'Menu de lista de integrantes',
        'filter_items_list'     => 'Filtrar lista de integrantes',
    );
    $args = array(
        'label'                 => 'Integrante',
        'description'           => 'Integrantes del grupo nuevo concepto',
        'labels'                => $labels,
        'supports'              => array('title','thumbnail'),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-businessman',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,        
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'integrantes', $args );

}

add_action( 'init', 'Integrantes', 0 );


function nc_register_meta_fields() {

    register_meta( 'Integrantes',
               'rol_integrante',
               [
                 'description'      => _x( 'Rol del integrante', 'meta description', 'nc-textdomain' ),
                 'single'           => true,
                 'sanitize_callback' => 'sanitize_text_field',
                 'auth_callback'     => 'nc_custom_fields_auth_callback'
               ]
      );

      register_meta( 'Integrantes',
                   'estudio_integrante',
                   [
                     'description'      => _x( '¿En que lugar estudio?', 'meta description', 'nc-textdomain' ),
                     'single'           => true,
                     'sanitize_callback' => 'sanitize_text_field',
                     'auth_callback'     => 'nc_custom_fields_auth_callback'
                   ]
      );

      register_meta( 'Integrantes',
                   'experiencia_integrante',
                   [
                     'description'      => _x( 'Experiencia del integrante', 'meta description', 'nc-textdomain' ),
                     'single'           => true,
                     'sanitize_callback' => 'sanitize_text_field',
                     'auth_callback'     => 'nc_custom_fields_auth_callback'
                   ]
      );

}

add_action( 'init', 'nc_register_meta_fields' );


function nc_meta_boxes() {
    add_meta_box( 'datos-integrante', __( 'Datos del integrante', 'nc_textdomain' ), 'nc_meta_box_callback', 'Integrantes' );
}

function nc_meta_box_callback($post) {

     // El nonce es opcional pero recomendable. Vea http://codex.wordpress.org/Function_Reference/wp_nonce_field
     wp_nonce_field( 'nc_meta_box', 'nc_meta_box_noncename' );
    
     // Obtenermos los meta data actuales para rellenar los custom fields
     // en caso de que ya tenga valores
     $post_meta = get_post_custom( $post->ID );

     // El input text para el nombre
     ?>
     <div class="input-area">
         <label class="label" for="rol_integrante"><?php _e( 'Rol del integrante', 'nc_textdomain' ); ?></label>
         <input  name="rol_integrante" id="rol_integrante" type="text" value="<?php echo esc_attr( get_post_meta( $post->ID, 'rol_integrante', true ) ); ?>">
     </div>
     <?php

     // El input text para el nombre
     ?>
     <div class="input-area">
         <label class="label" for="estudio_integrante"><?php _e( 'Estudios del integrante', 'nc_textdomain' ); ?></label>
         <input  name="estudio_integrante" id="estudio_integrante" type="text" value="<?php echo esc_attr( get_post_meta( $post->ID, 'estudio_integrante', true ) ); ?>">
     </div>
     <?php

     // El input text para el nombre
     ?>
     <div class="input-area">
         <label class="label" for="experiencia_integrante"><?php _e( 'Experiencia del integrante', 'nc_textdomain' ); ?></label>
         <input  name="experiencia_integrante" id="experiencia_integrante" type="text" value="<?php echo esc_attr( get_post_meta( $post->ID, 'experiencia_integrante', true ) ); ?>">
     </div>
     <?php
    
}

function nc_save_custom_fields( $post_id, $post ){
    
    // Primero, comprobamos el nonce como medida de seguridad
    if ( ! isset( $_POST['nc_meta_box_noncename'] ) || ! wp_verify_nonce( $_POST['nc_meta_box_noncename'], 'nc_meta_box' ) ) {
        return;
    }
            
    // Segundo, si hemos recibido valor de un custom field, los actualizamos
    // El saneado/validación se hace automáticamente en el callback definido en el paso 2
    if( isset( $_POST['rol_integrante'] ) && $_POST['rol_integrante'] != "" ) {
        update_post_meta( $post_id, 'rol_integrante', $_POST['rol_integrante'] );
    } else {
        delete_post_meta( $post_id, 'rol_integrante' );
    }
    
    if( isset( $_POST['estudio_integrante'] ) && $_POST['estudio_integrante'] != "" ) {
        update_post_meta( $post_id, 'estudio_integrante', $_POST['estudio_integrante'] );
    } else {

        delete_post_meta( $post_id, 'estudio_integrante' );
    }

    if( isset( $_POST['experiencia_integrante'] ) && $_POST['experiencia_integrante'] != "" ) {
        update_post_meta( $post_id, 'experiencia_integrante', $_POST['experiencia_integrante'] );
    } else {
        delete_post_meta( $post_id, 'experiencia_integrante' );
    }
}

add_action( 'save_post', 'nc_save_custom_fields', 10, 2 );


add_action( 'add_meta_boxes', 'nc_meta_boxes' );


function nc_custom_fields_auth_callback( $allowed, $meta_key, $post_id, $user_id, $cap, $caps ) {
  
  if( 'post' == get_post_type( $post_id ) && current_user_can( 'edit_post', $post_id ) ) {
    $allowed = true;
  } else {
    $allowed = false;
  }

  return $allowed;

}



/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'nuevoconcepto_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_print_scripts', 'nuevoconcepto_conditional_scripts'); // Add Conditional Page Scripts
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'nuevoconcepto_styles'); // Add Theme Stylesheet
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()


// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'nuevoconceptoblankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'nuevoconcepto_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether


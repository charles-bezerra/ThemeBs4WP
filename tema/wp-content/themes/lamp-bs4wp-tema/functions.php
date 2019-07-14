<?php
//Chamar a tag title e torna-la dinámica


function lamp_theme_support() {
    // Chamar a tag Title
    add_theme_support('title-tag');
    // Adicionar os formatos de posts
    add_theme_support('post-formats', array('aside', 'image', 'gallery'));
    // Adicionar o logotipo
    add_theme_support( 'custom-logo' );
}
add_action('after_setup_theme', 'lamp_theme_support');


//Prevenir error em versões mais antigas do wordpress
if( !function_exists("_wp_render_title_tag") ){
    function lamp_render_title(){
        ?>
            <title><?php wp_title('|', true, 'right'); ?></title>
        <?php
    }
    add_action('wp_head','lamp_render_title');
}

//Registra o Custon Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

//Registrar os menus
register_nav_menus( array(
    'principal' => __('Menu Principal', 'Lamp-bs4wp')
));

// Definir a miniaturas dos posts
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(1280, 720, true);

// Definir tamanho do resumo
add_filter('excerpt_length', function($length){
    return 20;
});

//Registrar a barra lateral
register_sidebar(
    array(
        'name' => 'Barra lateral',
        'id' => 'sidebar',
        'before_widget' => '<div class="card mb-4">',
        'after_widget' => '</div></div>',
        'before_title' => '<h5 class="card-header">',
        'after_title' => '</h5><div class="card-body">'
    )
);

//Registrar a Busca no Header
register_sidebar(
    array(
        'name' => 'Busca',
        'id' => 'busca',
        'before_widget' => '<div class="blog-search">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>'
    )
);


// A custom function that calls register_post_type
function register_carros_novos_post_type() {
  // Set various pieces of text, $labels is used inside the $args array
  $labels = array(
     'name' => _x( 'Carros Novos', 'post type general name' ),
     'singular_name' => _x( 'Carro Novo', 'post type singular name' ),
  );
  // Set various pieces of information about the post type
  $args = array(
    'labels' => $labels,
    'description' => 'My custom post type',
    'capability_type' => 'post',
    'has_archive' => true,
    'public' => true,
  );
  // Register the movie post type with all the information contained in the $arguments array
  register_post_type( 'carros_novos', $args );
}

add_action( 'init', 'register_carros_novos_post_type' );

// A custom function that calls register_post_type
function register_carros_seminovos_post_type() {
    // Set various pieces of text, $labels is used inside the $args array
    $labels = array(
       'name' => _x( 'Carros Seminovos', 'post type general name' ),
       'singular_name' => _x( 'Carro Seminovo', 'post type singular name' ),
    );
    // Set various pieces of information about the post type
    $args = array(
      'labels' => $labels,
      'description' => 'My custom post type',
      'capability_type' => 'post',
      'has_archive' => true,
      'public' => true,
    );
    // Register the movie post type with all the information contained in the $arguments array
    register_post_type( 'carros_seminovos', $args );
  }
  
  add_action( 'init', 'register_carros_seminovos_post_type' );
?>
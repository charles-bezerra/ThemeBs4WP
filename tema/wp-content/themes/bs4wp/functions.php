<?php
//Chamar a tag title e torna-la dinámica

function bs4wp_theme_support() {
    // Chamar a tag Title
    add_theme_support('title-tag');
    // Adicionar os formatos de posts
    add_theme_support('post-formats', array('aside', 'image'));
    // Adicionar o logotipo
    add_theme_support( 'custom-logo' );
}
add_action('after_setup_theme', 'bs4wp_theme_support');

//Prevenir error em versões mais antigas do wordpress
if( !function_exists("_wp_render_title_tag") ){
    function bs4wp_render_title(){
        ?>
            <title><?php wp_title('|', true, 'right'); ?></title>
        <?php
    }
    add_action('wp_head','bs4wp_render_title');
}

//Registra o Custon Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

//Registrar os menus
register_nav_menus( array(
    'principal' => __('Menu Principal', 'bs4wp')
));

// Definir a miniaturas dos posts
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(1280, 720, true);

// Definir tamanho do resumo
add_filter('excerpt_length', function($length){
    return 60;
});

// Modificar a paginação
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');
function posts_link_attributes(){
    return 'class="btn btn-outline-my-color-2"';
}

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

// Ativar o formulario para respostas nos comentários
function theme_queue_js(){
    if ( (!is_admin()) && is_singular() && comments_open() && get_option( 'thread_comments' ) ) wp_enqueue_script('comment-reply');
}
add_action('wp_print_scripts', 'theme_queue_js');

//Personalizar os comentários
function format_comment($comment, $args, $depth){

    $GLOBALS['comment'] = $comment; ?>
    
    <div <?php comment_class('ml-4');?> id="comment-<?php comment_ID();?>">
        <div class="card mb-3">
            <div class="card-body">

            <div class="comment-intro">
                <h5 class='card-title'><?php printf(__('%s'), get_comment_author_link() );?></h5>
                <h6 class='card-subtitle mb-3 text-muted'> comentou em <?php printf(__('%1$s'), get_comment_date('d/m/y'), get_comment_time()); ?></h6>
            </div>

            <?php comment_text(); ?>

            <div class="reply">
                <?php comment_reply_link($args, array_merge( array('depth' => $depth, 'max-depth' => $args['max-depth'])) ); ?>
            </div>
        </div>
    </div>
<?php
} 

// Incluir as funções de personalização 
require get_template_directory() . '/inc/customizer.php';
?>
<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Astra
 * @since 1.0.0
 */

get_header(); ?>

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

	<div id="primary" <?php astra_primary_class(); ?>>

		<?php astra_primary_content_top(); ?>

		<?php astra_content_loop(); ?>
      
      
          
<!-- fim teste paulo -->          
          
          


		<!--CADASTRO DE carros -->
		<?php the_field( 'descricao' ); ?>

		<?php $imagem_do_veiculo = get_field( 'imagem_do_veiculo' ); ?>
		<?php if ( $imagem_do_veiculo ) { ?>
		<?php echo wp_get_attachment_image( $imagem_do_veiculo, 'full' ); ?>
		<?php } ?>
      
      	<?php // acessorios ( value )
$acessorios_array = get_field( 'acessorios' );
if ( $acessorios_array ):
	foreach ( $acessorios_array as $acessorios_item ):
	 	echo $acessorios_item;
	endforeach;
endif; ?>
    

      
      
      
		<?php astra_primary_content_bottom(); ?>

	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>

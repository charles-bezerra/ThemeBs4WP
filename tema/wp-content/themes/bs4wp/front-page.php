<?php get_header(); ?>
            <?php 
                //args
                $my_args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'category_name' => 'destaque'
                );

                //query
                $my_query = new WP_QUERY( $my_args );

            ?>
            <div class="row">
                <?php if($my_query->have_posts()) : while( $my_query->have_posts() ) : $my_query->the_post(); ?>
                        <div class="col-sm-12 col-md-4">
                            <div class="card mb-5 z-depth-1">
                                <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid card-img-top')); ?>
                                <div class="card-body">
                                    <h5 class='card-title'>
                                        <?php the_title(); ?>
                                    </h5>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-my-color-2 my-2 text-white">Ver mais</a>
                                </div>
                            </div>
                        </div>
                <?php endwhile; endif;?>  
                <?php wp_reset_query();?>
            </div>
            
            <div class='row'>
                <div class="col-md-8 col-sm-12">
                    
                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                        <?php get_template_part('content', get_post_format()); ?>
                    <?php endwhile; ?>
                    <?php else : get_404_template(); endif?>    
                    
                    <div class="blog-pagination mb-5">
                        <?php next_posts_link('Mais antigos');?> <?php previous_posts_link('Mais novos'); ?>
                    </div>
                </div>
                

                <?php get_sidebar(); ?>   
        </div>
        <div class="row">

            <div class="col-md-8 col-sm-12">
                
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>  

                    <h3 class="mb-3">
                        <?php the_title(); ?>
                    </h3>
                    
                    <?php the_content(); ?>

                <?php endwhile; ?>

                <?php else : get_404_template();  endif; ?>

            </div>
        </div>

<?php get_footer(); ?>
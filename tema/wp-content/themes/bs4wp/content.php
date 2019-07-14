<?php if( is_single() ) : ?>
    
    <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid rounded mb-4') ); ?>
    <h3 class='mb-3 pb-2 border-bottom'><?php the_title(); ?></h3>
    <?php the_content(); ?>
    <p class="text-muted">Publicado em: <span class='badge text-white badge-my-color-2'><?php echo get_the_date('d/m/y'); ?></span></p>
    <hr>
    <?php comments_template(); ?>

<?php else : ?>
    <div class="blog-post">
        <h3 class='mb-3 pb-2 border-bottom'>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h3>
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-3">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid') ); ?>
                </a>
            </div>
            <div class="col-lg-6 col-md-12 mb-3">
                <?php the_excerpt(); ?>
            </div>
        </div>
        <p class="text-muted">Publicado em: <span class='badge text-white badge-my-color-2'><?php echo get_the_date('d/m/y'); ?></span></p>
    </div>
<?php endif;?>
<?php if( is_single() ) : ?>
    
    <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid rounded mb-4') ); ?>
    <h3 class='mb-3 pb-2 border-bottom'><?php the_title(); ?></h3>
    <?php the_content(); ?>
    <p class="text-muted">Publicado em: <span class='badge text-white badge-my-color-2'><?php echo get_the_date('d/m/y'); ?></span></p>
    <hr>
    <?php comments_template(); ?>

<?php else : ?>
<div class="col-sm-12 col-md-4 mb-5">
	<div class="card shadow w-100 rounded card-hover">
		  <a href="<?php the_permalink(); ?>">
			  <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid card-img-top') ); ?>
		  </a>
		  <div class="card-body">
			  <div class="text-center card-title">
				  <h3><b><?php the_title(); ?></b></h3>
			 </div>
			 <hr/>
			 <h5 class="card-text text-center pl-1 pr-1 pb-2 text-primary">
				  <?php the_excerpt(); ?>
			 </h5>
			 <hr/>
			 <div class="text-center pr-2 pl-2">
				<button href="#" class="btn btn-success card-car w-100 shadow py-2" data-toggle="modal" data-target="#myModal<?php the_ID(); ?>">
					<b>Estou interessado</b>
				</button>
			 </div>
		 </div>
	</div>
</div>

<!-- The Modal -->
<div class="modal fade" id="myModal<?php the_ID(); ?>" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
		
	  <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid w-100'));?>
	
	  <div style="background-color:#FAFAFA">
		  <!-- Modal body -->
		  <div class="modal-body">
			  <div class="my-3"></div>
			  <div class="container">
				  <div class='row'>
					  <div class='col-sm-12'>
						  <h2 class="text-darkgray" style="font-weight: 500"><?php the_title(); ?></h2>
					  </div>
				  </div>
				  <div class="row">
					  <div class="col-sm-12 text-center">
						  <h4 class="text-center text-success">
							  <?php the_excerpt();?>
						  </h4>
					  </div>
				  </div>
				  <div class="my-5"></div>
				  <div class="row">
					  <div class="col-sm-12 text-center">
						  <h4 style="font-weight: 600">Quer receber um desconto exclusivo?</h4>
						  <p>Preencha os campos abaixo, corretamente e consiga um desconto exclusivo para você comprar</p> 
					  </div>
				  </div>
				  <div class="my-3"></div>
				  <form action='#'>
					  <div class='row'>
						  <div class='col-md-12 col-lg-6'>
							  <div class="form-group">
								 <input type="text" class="form-control" id="nome" placeholder="Seu nome" name="nome">
								  <small id="nome" class="form-text text-muted">Digite seu nome corretamente</small>
							  </div>
						  </div>
						  <div class='col-md-12 col-lg-6'>
							  <div class="form-group">
								 <input type="phone" class="form-control" id="telefone" placeholder="Seu telefone de contato" name="telefone">
								  <small id="phone" class="form-text text-muted">Digite seu número de telefone corretamente</small>
							  </div>
						  </div>
					  </div>
					  <div class="row">
						  <div class='col-sm-12'>
							  <div class="form-group">
								 <input type="email" class="form-control" id="email" placeholder="Seu e-mail de contato" name="email">
								  <small id="email" class="form-text text-muted">Digite seu endenreço de e-mail corretamente</small>
							  </div>
						  </div>
					  </div>
					  <div class="row">
						  <div class="col-12 text-center">
							 <input type='submit' class='btn btn-success' value="EU QUERO"/>
						  </div>
					  </div>
				  </form>
				  <div class="my-3"></div>

			  </div>
		  </div>
	 </div>
		

    </div>
  </div>
</div>
<?php endif;?>

                  
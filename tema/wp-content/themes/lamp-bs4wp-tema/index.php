<?php get_header()?>
	
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"> </li>
        <!-- adicionar o botão de navegação -->
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="http://fenixveiculoscaico.com.br/wp-content/uploads/2018/12/1600-1.jpeg" class="d-block w-100" height="500px" alt="...">
            </div>
            <div class="carousel-item">
            <img src="http://fenixveiculoscaico.com.br/wp-content/uploads/2019/01/FÊNIX_VEÍCULOS_-_TELA_DA_FRENTE.jpg" height="500px" class="d-block w-100" alt="...">
            </div>
            <!--Adicionar items-->
            
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>

		<?php require_once "slickslider.php";?>

        <section class="pb-5" id="veiculos">
            <div class="container">            
                
               <div class="row" style="padding-top: 100px; padding-bottom: 100px">
                    <div class="col-12 text-center">
                        <h4 class="pb-2" style="font-weight: 700; font-size: 27pt; font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';">
                            SUPER OFERTAS
                        </h4>
                        <h5 class="py-0" style="color: gray; font-size: 15px; font-weight: 300; text-transform: uppercase; letter-spacing: 3px;">	
                                Várias marcas e modelos a sua disposição!
                        </h5>
                    </div>
				</div>
				
			
                <div class="row">
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
						<?php get_template_part('content'); ?>
					<?php endwhile; ?>
					<?php else : get_404_template(); endif?>            

				</div>
		</div>
	</section>

	<section>
		<div class="background-img display">
			<div class="background">			
				<div class="container">
					<div class="row pt-100">
						<div class="col-sm-12 col-md-9">
							<h2 class="display-title pb-5">
								Que tal começar 2019 de carro 0 KM?
							</h2>
							<p class="text-display pl-0">
								Pensando na melhor praticidade para nosso cliente, prestamos consultoria totalmente confiável e honesta para que você não  perca tempo pesquisando a melhor condição. <b>Vânia Fontes</b>,  consultora de vendas, é especialista no caso. Clique no botão abaixo e entre em contato.
							</p>
							<br>
							<div class="py-5">
								<button class="button-display">
									Falar com Vânia Fontes
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer() ?>
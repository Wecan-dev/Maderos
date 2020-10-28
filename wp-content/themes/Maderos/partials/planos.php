<section > 
	<div class="content-zone row">
		<div class="main-plan col-12">
			<div class="main-planos__content">
				<?php $args = array( 'post_type' => 'PlanosDelProyecto');
				$planos = 1;?>   
				<?php $loop = new WP_Query( $args ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="main-planos__items">
						<div class="items-slider">
							<div class="text-plano">
								<p class="content-zone__text">PLANOS DEL PROYECTO</p>
								<hr class="content-zone__text--hr">
							</div>
							<img onclick="openModal2();currentSlide2(<?php echo $planos  ?>)"  src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
						</div>
						<div >
							<p class="tamaño"><strong class="texto-planos"><?php the_title(); ?></strong></p>


							<div class="items-planos ">
								<ul>
									<li class="wow fadeInUp" data-wow-delay="0.1s"><img class="iconos-planos" src="<?php echo get_template_directory_uri();?>/assets/img/iconos/icon-planos6.png" alt="" /><?php the_field( 'habitaciones' ); ?></li>
									<li class="wow fadeInUp" data-wow-delay="0.2s"><img class="iconos-planos" src="<?php echo get_template_directory_uri();?>/assets/img/iconos/icon-planos5.png" alt="" /><?php the_field( 'banos_con_ducha' ); ?></li>
									<li class="wow fadeInUp" data-wow-delay="0.3s"><img class="iconos-planos" src="<?php echo get_template_directory_uri();?>/assets/img/iconos/icon-planos2.png" alt="" /><?php the_field( 'sala' ); ?></li>
									<li class="wow fadeInUp" data-wow-delay="0.4s"><img class="iconos-planos" src="<?php echo get_template_directory_uri();?>/assets/img/iconos/icon-planos1.png" alt="" /><?php the_field( 'espacio_para_comedor' ); ?></li>
									<li class="wow fadeInUp" data-wow-delay="0.5s"><img class="iconos-planos" src="<?php echo get_template_directory_uri();?>/assets/img/iconos/icon-planos1.png" alt="" /><?php the_field( 'cocina' ); ?></li>
									<li class="wow fadeInUp" data-wow-delay="0.6s"><img class="iconos-planos" src="<?php echo get_template_directory_uri();?>/assets/img/iconos/icon-planos4.png" alt="" /><?php the_field( 'zona_de_ropas' ); ?></li>
									<li class="wow fadeInUp" data-wow-delay="0.7s"><img class="iconos-planos" src="<?php echo get_template_directory_uri();?>/assets/img/iconos/icon-planos3.png" alt="" /><?php the_field( 'amplio_balcon' ); ?></li>
									<li class="wow fadeInUp" data-wow-delay="0.8s"><img class="iconos-planos" src="<?php echo get_template_directory_uri();?>/assets/img/iconos/icon-planos7.png" alt="" /> <?php the_field( 'parqueadero_en_semisotano' ); ?></li>
									<li class="wow fadeInUp" data-wow-delay="0.9s"><img class="iconos-planos" src="<?php echo get_template_directory_uri();?>/assets/img/iconos/icon-planos7.png" alt="" /> <?php the_field( 'cuarto_util' ); ?></li>
								</ul>
							</div>
							<a href="#formulario" class="btn btn-black btn-form btp">OBTENER INORMACIÓN</a>
						</div>
					</div>

				<?php $planos++; endwhile; ?>
				
				

				


			</div>
		</div>
	</div>
	<div id="galeria"></div>
</section>



<div id="myModal2" class="modal">


	<div class="modal-content">
		<button aria-label='Close' class='close' data-dismiss='modal' type='button' onclick="closeModal2()">
			<span aria-hidden='true' class='fa fa-close'></span>
		</button>
		<?php $args = array( 'post_type' => 'PlanosDelProyecto');?>   
		<?php $loop = new WP_Query( $args ); ?>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="mySlides2">
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" style="width:100%">
			</div>
		<?php endwhile; ?>


		<a class="prev" onclick="plusSlides2(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides2(1)">&#10095;</a>



	</div>
</div>
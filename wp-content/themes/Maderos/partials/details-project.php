<?php if ( have_posts() ) : the_post(); ?>
	<section class="p-50" id="detalle-proyecto"> 

		<div class="content-zone__item">
			<div class="content-zone__text ">
				<div class="title-general">
					<h3 >detalles del proyecto</h3>
					<hr>
				</div>

<section class="p-50 items" > 


					<div class="detail-content wow fadeInUp " data-wow-delay='0.5s'> <img src="<?php echo get_template_directory_uri();?>/assets/img/iconos/icon-bloques.png" alt="">

						<div>

							<p class="title"><?php the_field( 'titulo_1' ); ?></p>
							<p class="description-detail"><?php the_field( 'descripcion' ); ?></p>

						</div>

					</div>

					<div class="detail-content wow fadeInUp" data-wow-delay='0.5s'> <img src="<?php echo get_template_directory_uri();?>/assets/img/iconos/Piso-laminado.png" alt="">

						<div>
							<p class="title"><?php the_field( 'titulo_2' ); ?></p>
							<p class="description-detail"><?php the_field( 'descripcion_2' ); ?></p>
						</div>

					</div>
					<div class="detail-content wow fadeInUp" data-wow-delay='0.5s'> <img src="<?php echo get_template_directory_uri();?>/assets/img/iconos/Cocina.png" alt="">
						<div>
							<p class="title"><?php the_field( 'titulo_3' ); ?></p>
							<p class="description-detail"><?php the_field( 'descripcion_3' ); ?></p>
						</div>

					</div>
					<div class="detail-content wow fadeInUp" data-wow-delay='0.5s'> <img src="<?php echo get_template_directory_uri();?>/assets/img/iconos/horno.png" alt="">
						<div>
							<p class="title"><?php the_field( 'titulo_4' ); ?></p>
							<p class="description-detail"><?php the_field( 'descripcion_4' ); ?></p>
						</div>

					</div>
					<div class="detail-content wow fadeInUp" data-wow-delay='0.5s'> <img src="<?php echo get_template_directory_uri();?>/assets/img/iconos/baños.png" alt="">
						<div>
							<p class="title"><?php the_field( 'titulo_5' ); ?></p>
							<p class="description-detail"><?php the_field( 'descripcion_5' ); ?></p>
						</div>

					</div>
					<div class="detail-content wow fadeInUp" data-wow-delay='0.5s'> <img src="<?php echo get_template_directory_uri();?>/assets/img/iconos/Iluminacion-led.png" alt="">
						<div>
							<p class="title"><?php the_field( 'titulo_6' ); ?></p>
							<p class="description-detail"><?php the_field( 'descripcion_6' ); ?></p>
						</div>

					</div>




				</div>


			</div>
		</div>
	</section>
	<?php endif; ?>
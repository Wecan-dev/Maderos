
<section class='main-video' id='video' style='background-image: url(<?php the_field( 'imagen_de_presentacion' ); ?>);'>
	<h3><?php the_field( 'titulo_del_video' ); ?></h3>
	<!-- < ?php the_field( 'etiqueta_html' ); ?> -->
	<div class='main-video__trigger' data-target='#videoModal' data-toggle='modal'>
		<img class='wow zoomIn' src='<?php echo get_template_directory_uri();?>/assets/img/iconos/play.png'>
	</div>
</section>
<!-- Modal -->
<div aria-hidden='true' class='modal fade modal-video' id='videoModal' role='dialog' tabindex='-1'>
	<div class='modal-dialog' role='document'>
		<div class='modal-content'>
			<div class='modal-body'>
				<button aria-label='Close' class='close' data-dismiss='modal' type='button'>
					<span aria-hidden='true' class='fa fa-close'></span>
				</button>
				<?php if ( get_field( 'medio_de_carga_del_video' ) == 'Agregar ULR' ) : ?>
					<video controls=''>
						<source src='<?php the_field( 'agregar_url' ); ?>' type='video/webm'>
						</video>
						<?php elseif ( get_field( 'medio_de_carga_del_video' ) == 'Cargar Video' ): ?>
							<video controls=''>
								<source src='<?php the_field( 'cargar_video' ); ?>' type='video/webm'>
								</video>
								<?php else: ?>
									<?php the_field( 'etiqueta_html' ); ?>
								<?php endif ?>

							</div>
						</div>
					</div>
				</div>
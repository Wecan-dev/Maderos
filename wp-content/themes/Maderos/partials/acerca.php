
<section class="" id="acerca">

	<div class="about">
		<div class="image-section-first wow fadeInUp" data-wow-delay='0.5s'><img src="<?php echo get_template_directory_uri();?>/assets/img/about.png"></div>
		<div class="text-section-content"> 
			<div class="content-about">
				<div class="text-section-title">
					<div class="subtitle-general">
						<p> <?php the_field( 'titulo_acerca_del_proyecto' ); ?></p>
						<hr>
					</div>
				</div>
				<div class="text-section-subtitle "><?php the_field( 'subtitulo_acerca_del_proyecto' ); ?></div>
				<div class="text-section-content wow fadeInUp" data-wow-delay='0.5s'>
					<?php the_field( 'descripcion_acerca_del_proyecto' ); ?>
				</div>
			</div>
		</div>
	</section>
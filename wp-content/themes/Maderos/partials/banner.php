<section id="banner" class="banner">
	<div class="main-banner">
		<div class="banner-slider">
			<?php $args = array( 'post_type' => 'banner');?>   
			<?php $loop = new WP_Query( $args ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="main-banner__img">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
					<div class="main-banner__text"  data-animation='fadeInUp'>
						<?php the_content(); ?>
					</div>
				</div>
			<?php endwhile; ?>
		<!-- 	<div class="main-banner__img">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/slider/2.png" alt="">
				<div class="main-banner__text" data-animation='fadeInUp'>
					<p>MADEROS <br>DEL <br>RETIRO</p>
					<hr>
					<span>Ubicación</span>
					<p>El Altico, Retiro</p>
					<span>Área </span>
					<p>Desde 55 m² hasta 69.9 m²</p>
					<span>Desde</span>
					<div class="price">
						<p>$273.000.000
						</p>
						<small>Valor impuestos incluido*</small>
					</div>
				</div>
			</div>
			<div class="main-banner__img">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/slider/3.jpg" alt="">
				<div class="main-banner__text" data-animation='fadeInUp'>
					<p>MADEROS <br>DEL <br>RETIRO</p>
					<hr>
					<span>Ubicación</span>
					<p>El Altico, Retiro</p>
					<span>Área </span>
					<p>Desde 55 m² hasta 69.9 m²</p>
					<span>Desde</span>
					<div class="price">
						<p>$273.000.000
						</p>
						<small>Valor impuestos incluido*</small>
					</div>
				</div>
			</div> -->

		</div>	
			<!-- <div class="logo-banner">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt="">
			</div> -->
		</div>
	</section>
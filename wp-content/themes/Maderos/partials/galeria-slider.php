<section>
	<div class="main-galery__avance">
		<div class="title-general">
			<h3>AVANCE DE LA OBRA</h3>
			<hr>
		</div>

		<div class="">
			<div class="main-galery__grid">
				<div class="grid-slider-galeria">


					<div class="grid-slide-galeria d-none d-sm-block d-md-block d-lg-block">
						<?php $args = array( 'post_type' => 'Avance');
						$avances = 1;
						?>   
						<?php $loop = new WP_Query( $args ); ?>
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<img onclick="openModal1();currentSlide1(<?php echo $avances  ?>)" class="wow zoomIn" data-wow-delay='0.1s' src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
						<?php $avances++; endwhile; ?>


					</div>
					<div class="grillas d-grid d-sm-none d-md-none d-lg-none">
						<?php $args = array( 'post_type' => 'Avance');?>   
						<?php $loop = new WP_Query( $args ); ?>
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<div class="content-image__mobile">

							<img onclick="openModal1();currentSlide1(<?php echo $avances  ?>)" class="wow zoomIn" data-wow-delay='0.1s' src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
						</div>
						<?php $avances++; endwhile; ?>
					</div>

				</div>

			</div>
			<div id="ubicacion"></div>

		</div>
	</section>
	<div id="myModal1" class="modal">


	<div class="modal-content">
		<button aria-label='Close' class='close' data-dismiss='modal' type='button' onclick="closeModal1()">
			<span aria-hidden='true' class='fa fa-close'></span>
		</button>
		<?php $args = array( 'post_type' => 'Avance');?>   
		<?php $loop = new WP_Query( $args ); ?>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="mySlides1">
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" style="width:100%">
			</div>
		<?php endwhile; ?>


		<a class="prev" onclick="plusSlides1(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides1(1)">&#10095;</a>



	</div>
</div>

<section class="gallery-grid p-50" >
	<div class="main-galery">
		<div class="title-general">
			<h3>Galería</h3>
			<hr>
		</div>
		<div class="container-fluid">




			<div class="main-mansory-grid">
				<?php $args = array( 'post_type' => 'GaleriaMansory');?>   
			<?php $loop = new WP_Query( $args ); 
 					$countimagen = 1;
			?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" style="width:100%" onclick="openModal();currentSlide(<?php echo $countimagen; ?>)" class="hover-shadow cursor">
			<?php $countimagen++; endwhile; ?>
			

			</div>

			<div id="myModal" class="modal">


				<div class="modal-content">
					<button aria-label='Close' class='close' data-dismiss='modal' type='button' onclick="closeModal()">
						<span aria-hidden='true' class='fa fa-close'></span>
					</button>
	<?php $args = array( 'post_type' => 'GaleriaMansory');?>   
			<?php $loop = new WP_Query( $args ); 
 				
			?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="mySlides">
						<!-- <div class="numbertext">1 / 4</div> -->
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" style="width:100%">
					</div>
<?php  endwhile; ?>
			


					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>

		

		</div>
	</div>
<div  id="avances-obra"></div>
<div class="imagenes-360">
	<div class="title-general">
		<h3>Recorrido 360</h3>
		<hr>
	</div>
	<iframe class="mt-3" src="https://my.matterport.com/show/?m=sAVdS7YBtpE" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
</div>

</section>
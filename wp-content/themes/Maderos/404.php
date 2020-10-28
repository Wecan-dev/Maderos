<?php get_header();?>

  <!-- Banner-->
  <div class="main-banner" id="home">
		<div class="main-banner__content">
			<div class="main-banner__item">
				<div class="mask">
					<div class="main-banner__boxtext">
						<div class="main-banner__text main-banner__text--center  main-banner__text--pad">
							<div class="main-banner__description main-banner__description--error">
								<p><strong class="subtitle--error">Lo sentimos</strong></p>
							</div>
							<div class="main-banner__title main-banner__title--error">
								<p>
									4<span class="letra-color">0</span>4
								</p>
							</div>
							<div class="main-banner__description main-banner__error">
								<p>No pudimos encontrar la página que buscas</p>
								<p class="text-two-error"><strong>Te llevamos de regreso</strong></p>
							</div>
							<div class="content-btn-404">
								<button class="btn btn-black btn-form btp" style="letter-spacing: 1.9px;width:55%;">
									volver al home
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="main-banner__img main-banner__img--thanks">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/banner.png">
				</div>
			</div>
		</div>
	</div>
  <!-- End Banner-->

<?php get_footer();?>
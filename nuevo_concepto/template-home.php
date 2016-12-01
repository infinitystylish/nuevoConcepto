<?php /* Template Name: Home */ get_header(); ?>
	
  	<?php if (has_post_thumbnail( $post->ID ) ){ ?>
	  	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); ?>
		<section class="main-image" style="background-image: url('<?php echo $image[0]; ?>')" />
	<?php }else{ ?>
	<section class="main-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/nuevo-concepto.jpg')" />
	<?php } ?>
		
		<div class="rectangle-text-parent">
			<div class="rectangle-text one">
				<h1><?php echo get_post_meta( get_the_ID(), 'titulo' , true ); ?></h1>
			</div>
		</div>
		<div class="rectangle-text-parent">
			<div class="rectangle-text two">
				<h2><?php echo get_post_meta( get_the_ID(), 'texto_principal' , true ); ?></h2>
			</div>
		</div>
		<div class="rectangle-text-parent right">
			<div class="rectangle-text three">
				<h3><?php echo get_post_meta( get_the_ID(), 'texto_secundario' , true ); ?></h3>
			</div>
		</div>
	</section>

	 <div class="ninja-slider-container">
        <div id="ninja-slider">
            <div class="slider-inner">
                <ul>

					<?php 
						$galeria = get_post_meta( get_the_ID(), '_galeriaPost' , true );
						if(!empty($galeria )){
							foreach ($galeria as $key => $value) {
								if( !empty($value['id_image']) ) {
									$idImage = $value['id_image'];
								}
								?>
								
				                    <li>
				                        <a class="ns-img" href="<?php echo wp_get_attachment_url( $idImage ); ?> "></a>
				                        <div class="caption">
				                            <h3><?php echo $value['title']; ?></h3>
				                            <p><?php echo $value['description']; ?></p>
				                        </div>
				                    </li>

								<?php 
							}
						}
					 ?>
                </ul>
                <div id="fsBtn" class="fs-icon" title="Expand/Close"></div>
            </div>
        </div>
    </div>
	
	<section class="gallery">
		<div class="title-section">
			<div class="horizontal-line"></div>
			<h3>Galería</h3>
			<h4>Fotos de nuestro show</h4>
		</div>

		<div class="gallery-section-container">
			<div class="container">
				<div class="row">

				 	<?php
  
					 	

					 	if(!empty($galeria )){
					 		$gallery_count = 0;
							foreach ($galeria as $key => $value) {
								if( !empty($value['id_image']) ) {
									$idImage = $value['id_image'];
						        } 
						        if($gallery_count > 4){ 
						        	break;
						        }

						        if($gallery_count == 0){ ?>
						        	<div class="col-sm-4 col-sm-push-1">
										<div class="gallery-image">
											<div class="hover-gallery-image" onclick="lightbox(<?php echo $gallery_count; ?>)">
												Mostrar galería
											</div>
											<?php echo wp_get_attachment_image( $idImage, "gallery_size_1", true ); ?>
										</div>
									</div>
								<?php
						        }elseif($gallery_count >= 1){ ?>

						        	<div class="col-sm-3 col-sm-push-1">
										<div class="gallery-image">
											<div class="hover-gallery-image" onclick="lightbox(<?php echo $gallery_count; ?>)">
												Mostrar galería
											</div>
											<?php echo wp_get_attachment_image( $idImage, "gallery_size_2", true ); ?>
										</div>
									</div>
								<?php
						        }
							    
								$gallery_count++;
							}

						}
							

					?>
				</div>
			</div>
		</div>
	</section>

	<section class="video videos">
		<div class="title-section">
			<div class="horizontal-line"></div>
			<h3>Video</h3>
			<h4>Video de nuestro show</h4>
		</div>	
		<div class="video-play-container">
			<div class="video-play">
				<?php 
					$id=44; 
					$post = get_post($id); 
					$content = apply_filters('the_content', $post->post_content); 
					echo $content;  
					?>
			</div>
		</div>
	</section>

	<section class="packages">
		<div class="title-section">
			<div class="horizontal-line"></div>
			<h3>Paquetes</h3>
			<h4>Nos ajustamos a tus necesidades</h4>
		</div>
		<div class="main-image-packages" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/background-packages.jpg')">
			<div class="package-slider">

							 <?php
							    $mypost = array( 'post_type' => 'Paquetes', );
							    $loop = new WP_Query( $mypost );
							    ?>
							    <?php while ( $loop->have_posts() ) : $loop->the_post();?>
									
									<div class="rhombus-parent">
										<div class="rhombus">
											<div class="package-content">
												<div>
													<h5><?php the_title(); ?></h5>
													<?php the_content(); ?>
												</div>
					           					<div class="icon-music"></div>
											</div>
										</div>
									</div>

							    <?php endwhile; ?>

							<?php wp_reset_query(); ?>
			</div>
		</div>
	</section>

	<section class="musical-equipment">
		<div class="musical-equipment-slider">
			<div class="square-title-container">
				<div class="icon-musics"></div>
				<h3>
					Equipo
				</h3>
			</div>
			<div class="musical-equipment-slider-container">

			 <?php
				    $mypost = array( 'post_type' => 'EquipoMusical', );
				    $loop = new WP_Query( $mypost );
				    ?>
				    <?php while ( $loop->have_posts() ) : $loop->the_post();?>
						
					<div>
						<?php the_post_thumbnail('musical_equipment'); ?>
					</div>
				    <?php endwhile; ?>

				<?php wp_reset_query(); ?>

			</div>
		</div>

	</section>

	<section class="members">
		<div class="title-section">
			<div class="horizontal-line"></div>
			<h3>Integrantes</h3>
			<h4>Nuestro grupo de talentos</h4>
		</div>	

		<div class="members-container">
			<div class="members-container-slider">
				

				 <?php
				    $mypost = array( 'post_type' => 'Integrantes', );
				    $loop = new WP_Query( $mypost );
				    ?>
				    <?php while ( $loop->have_posts() ) : $loop->the_post();?>
						
						<?php  $rol_integrante =  get_post_meta( get_the_ID(), 'rol_integrante', true ); ?>
						<?php  $estudio_integrante =  get_post_meta( get_the_ID(), 'estudio_integrante', true ); ?>
						<?php  $experiencia_integrante =  get_post_meta( get_the_ID(), 'experiencia_integrante', true ); ?>

		    			<div class="member-container">
							<div class="member">
								<div class="presentation-member">
									<h4><?php the_title(); ?></h4>
									<?php if( $rol_integrante != "" ) { ?>
										<div class="ocupation">
											<?php echo esc_html( $rol_integrante ); ?>
										</div>
									<?php } ?>

									<?php if( $estudio_integrante != "" ) { ?>
									<div class="studies">
										<?php echo esc_html( $estudio_integrante ); ?>
									</div>
									<?php } ?>
									
									<?php if( $experiencia_integrante != "" ) { ?>
									<div class="experience">
										<?php echo esc_html( get_post_meta( get_the_ID(), 'experiencia_integrante', true ) ); ?>
									</div>
									<?php } ?>
								</div>
								<?php the_post_thumbnail('members_size'); ?>
							</div>
						</div>
		           

				    <?php endwhile; ?>

				<?php wp_reset_query(); ?>
			</div>
		</div>	
	</section>

	<section class="repertory">
		<div class="title-section">
			<div class="horizontal-line"></div>
			<h3>Repertorio</h3>
			<h4>Nuestras interpretaciones</h4>
		</div>
		<a href="<?php echo get_post_meta( get_the_ID(), 'repertorio' , true ); ?>" target="_blank" class="button-repertory">
			<div class="icon-repertory"></div>
			<div class="name-repertory">
				Ver repertorio
			</div>
		</a>
	</section>

	<section class="contact">
		<div class="contact-container">
			<div class="title-section contact">
				<div class="horizontal-line"></div>
				<h3>Contacto</h3>
			</div>
			<div class="container">
				<div class="col-sm-12 col-sm-push-0 col-md-10 col-md-push-1">
					<div class="contact-form">
						<form action="#">
							<div class="row">
								<div class="col-sm-6">
									<div class="input-container">
										<label for="name">Nombre</label>
										<input name="name" type="text" />
									</div>
								</div>
								<div class="col-sm-6">
									<div class="input-container">
										<label for="name">Email</label>
										<input name="email" type="mail" />
									</div>
								</div>
							</div>
							<div class="input-container">
								<label for="name">Mensaje</label>
								<textarea name="message" id="" cols="30" rows="10"></textarea>
							</div>
							<button type="submit">
								Mandar mensaje
							</button>
						</form>
						<div class="contact-data">
							<div class="contact-data-one">
								<div class="phone">
									<div class="icon-phone"></div>
									<div class="phone-text">
										Teléfono: 4432080809
									</div>
								</div>
								<div class="mail">
									<div class="icon-mail"></div>
									<div class="mail-text">
										Correo: info@nuevoconcepto.mx
									</div>
								</div>
							</div>
							<div class="contact-data-two">
								<a href="#" class="icon-facebook"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
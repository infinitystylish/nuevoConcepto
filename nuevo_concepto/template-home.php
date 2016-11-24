<?php /* Template Name: Home */ get_header(); ?>

	<section class="main-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/nuevo-concepto.jpg')" />
		<div class="rectangle-text-parent">
			<div class="rectangle-text one">
				<h1>Nuevo Concepto</h1>
			</div>
		</div>
		<div class="rectangle-text-parent">
			<div class="rectangle-text two">
				<h2>Grupo con prestigio</h2>
			</div>
		</div>
		<div class="rectangle-text-parent right">
			<div class="rectangle-text three">
				<h3>Garantía de éxito en su evento</h3>
			</div>
		</div>
	</section>

	 <div class="ninja-slider-container">
        <div id="ninja-slider">
            <div class="slider-inner">
                <ul>
                    <li>
                        <a class="ns-img" href="<?php echo get_template_directory_uri(); ?>/img/NC1.jpg"></a>
                        <div class="caption">
                            <h3>Dummy Caption 1</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan purus.</p>
                        </div>
                    </li>
                    <li>
                        <a class="ns-img" href="<?php echo get_template_directory_uri(); ?>/img/NC36_1.jpg"></a>
                        <div class="caption">
                            <h3>Dummy Caption 2</h3>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>
                        </div>
                    </li>
                    <li>
                        <a href="/"><img class="ns-img" src="<?php echo get_template_directory_uri(); ?>/img/NC48_1.jpg" /></a>
                        <div class="caption">
                            <h3>Dummy Caption 3</h3>
                            <p>Duis fringilla arcu convallis urna commodo, et tempus velit posuere.</p>
                        </div>
                    </li>
                    <li>
                        <a class="ns-img" href="<?php echo get_template_directory_uri(); ?>/img/NC51_1.jpg""></a>
                        <div class="caption">
                            <h3>Dummy Caption 4</h3>
                            <p>Proin non dui at metus suscipit bibendum.</p>
                        </div>
                    </li>
                    <li>
                        <a class="ns-img" href="<?php echo get_template_directory_uri(); ?>/img/NC105.jpg""></a>
                        <div class="caption">
                            <h3>Dummy Caption 5</h3>
                            <p>Proin non dui at metus suscipit bibendum.</p>
                        </div>
                    </li>
                    <li>
                        <a class="ns-img" href="<?php echo get_template_directory_uri(); ?>/img/NC112.jpg""></a>
                        <div class="caption">
                            <h3>Dummy Caption 6</h3>
                            <p>Proin non dui at metus suscipit bibendum.</p>
                        </div>
                    </li>
                    <li>
                        <a class="ns-img" href="<?php echo get_template_directory_uri(); ?>/img/NC122.jpg""></a>
                        <div class="caption">
                            <h3>Dummy Caption 7</h3>
                            <p>Proin non dui at metus suscipit bibendum.</p>
                        </div>
                    </li>
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
					<div class="col-sm-4 col-sm-push-1">
						<div class="gallery-image">
							<div class="hover-gallery-image" onclick="lightbox(0)">
								Mostrar galería
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/gallery1.jpg" width="360" height="430" alt="">
						</div>
					</div>
					<div class="col-sm-3 col-sm-push-1">
						<div class="gallery-image">
							<div class="hover-gallery-image" onclick="lightbox(1)">
								Mostrar galería
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/gallery2.jpg" width="262" height="200" alt="">
						</div>
						<div class="gallery-image">
							<div class="hover-gallery-image" onclick="lightbox(2)">
								Mostrar galería
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/gallery2.jpg" width="262" height="200" alt="">
						</div>
					</div>
					<div class="col-sm-3 col-sm-push-1">
						<div class="gallery-image">
							<div class="hover-gallery-image" onclick="lightbox(3)">
								Mostrar galería
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/gallery2.jpg" width="262" height="200" alt="">
						</div>
						<div class="gallery-image">
							<div class="hover-gallery-image" onclick="lightbox(4)">
								Mostrar galería
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/gallery2.jpg" width="262" height="200" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="video">
		<div class="title-section">
			<div class="horizontal-line"></div>
			<h3>Video</h3>
			<h4>Video de nuestro show</h4>
		</div>	
		<div class="video-play-container">
			<div class="video-play">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/i8q8fFs3kTM" frameborder="0" allowfullscreen></iframe>
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
				<div class="rhombus-parent">
					<div class="rhombus">
						<div class="package-content">
							<h5>Espectacular</h5>
							<ul>
								<li>
									9 músicos totalmente en vivo: dos voces femeninas, una voz masculina, batería, bajo, tecladista, guitarrista, percusionista y saxofonista.
								</li>
								<li>
									Iluminación tipo beam, spot y wash.
								</li>
								<li>
									Paneles de leds manejados por computadora.
								</li>
								<li>
									Ingeniero de audio con sistema de alta fidelidad HK.
								</li>
								<li>
									Caracterizaciónes de acuerdo al estilo musical tanto para el grupo como para los invitados.
								</li>
								<li>
									Diversos souvenirs como: pelucas, antifaces, boas, sombreros de figuras, máscaras de personajes, políticas, caricaturas.
								</li>
								<li>
									Trajes de timbiriche y diferentes caracterizaciones.
								</li>
								<li>
									Interacción con el público.
								</li>
								<li>
									Descarga de confeti y otros efectos.
								</li>
								<li>
									Show de botargas.
								</li>
								<li>
									Una hora de música ambiental grabada, dirección del programa y vals con maestro de ceremonias.
								</li>
								<li>
									Show de saxofón.
								</li>
								<li>
									Pantallas gigantes de 3 X 2 metros.
								</li>
							</ul>
							<div class="icon-music"></div>
						</div>
					</div>
				</div>
				<div class="rhombus-parent">
					<div class="rhombus">
						<div class="package-content">
							<h5>Básico</h5>
							<ul>
								<li>
									9 músicos totalmente en vivo: dos voces femeninas, una voz masculina, batería, bajo, tecladista, guitarrista, percusionista y saxofonista.
								</li>
								<li>
									Iluminación tipo beam, spot y wash.
								</li>
								<li>
									Paneles de leds manejados por computadora.
								</li>
								<li>
									Ingeniero de audio con sistema de alta fidelidad HK.
								</li>
								<li>
									Caracterizaciónes de acuerdo al estilo musical tanto para el grupo como para los invitados.
								</li>
								<li>
									Diversos souvenirs como: pelucas, antifaces, boas, sombreros de figuras, máscaras de personajes, políticas, caricaturas.
								</li>
								<li>
									Trajes de timbiriche y diferentes caracterizaciones.
								</li>
								<li>
									Interacción con el público.
								</li>
								<li>
									Descarga de confeti y otros efectos.
								</li>
								<li>
									Show de botargas.
								</li>
								<li>
									Una hora de música ambiental grabada, dirección del programa y vals con maestro de ceremonias.
								</li>
								<li>
									Show de saxofón.
								</li>
								<li>
									Pantallas gigantes de 3 X 2 metros.
								</li>
							</ul>
							<div class="icon-music"></div>
						</div>
					</div>
				</div>
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
				<div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/guitar.jpg"  width="292" height="262" alt="">
				</div>
				<div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/piano.jpg" width="292" height="262"  alt="">
				</div>
				<div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/battery.jpg" width="292" height="262"  alt="">
				</div>
				<div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/piano.jpg" width="292" height="262"  alt="">
				</div>
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
				<div class="member-container">
					<div class="member">
						<div class="presentation-member">
							<h4>Adam Levine</h4>
							<div class="ocupation">
								Cantante
							</div>
							<div class="studies">
								Conservatorio de las rosas
							</div>
							<div class="experience">
								11 años de experiencia
							</div>
						</div>
						<img src="<?php echo get_template_directory_uri(); ?>/img/adam_levine.jpg" alt="">
					</div>
				</div>
				<div class="member-container">
					<div class="member">
						<div class="presentation-member">
							<h4>Adam Levine</h4>
							<div class="ocupation">
								Cantante
							</div>
							<div class="studies">
								Conservatorio de las rosas
							</div>
							<div class="experience">
								11 años de experiencia
							</div>
						</div>
						<img src="<?php echo get_template_directory_uri(); ?>/img/adam_levine.jpg" alt="">
					</div>
				</div>
				<div class="member-container">
					<div class="member">
						<div class="presentation-member">
							<h4>Adam Levine</h4>
							<div class="ocupation">
								Cantante
							</div>
							<div class="studies">
								Conservatorio de las rosas
							</div>
							<div class="experience">
								11 años de experiencia
							</div>
						</div>
						<img src="<?php echo get_template_directory_uri(); ?>/img/adam_levine.jpg" alt="">
					</div>
				</div>
				<div class="member-container">
					<div class="member">
						<div class="presentation-member">
							<h4>Adam Levine</h4>
							<div class="ocupation">
								Cantante
							</div>
							<div class="studies">
								Conservatorio de las rosas
							</div>
							<div class="experience">
								11 años de experiencia
							</div>
						</div>
						<img src="<?php echo get_template_directory_uri(); ?>/img/adam_levine.jpg" alt="">
					</div>
				</div>
			</div>
		</div>	
	</section>

	<section class="repertory">
		<div class="title-section">
			<div class="horizontal-line"></div>
			<h3>Repertorio</h3>
			<h4>Nuestras interpretaciones</h4>
		</div>
		<a href="#" class="button-repertory">
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
										<input type="text" />
									</div>
								</div>
								<div class="col-sm-6">
									<div class="input-container">
										<label for="name">Email</label>
										<input type="mail" />
									</div>
								</div>
							</div>
							<div class="input-container">
								<label for="name">Mensaje</label>
								<textarea name="" id="" cols="30" rows="10"></textarea>
							</div>
							<button>
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
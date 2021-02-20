<?php 

include 'templates/cabecera.php';

?>

		<hr>
		<div class="carousel">
			<div class="carousel__contenedor">
				<button aria-label="Anterior" class="carousel__anterior">
					<i class="fas fa-chevron-left"></i>
				</button>

				<div class="carousel__lista">
					<div class="carousel__elemento">
						<img src="images/200.jpg" alt="Perro en mesa de intervensiones">
						<p>Hospitalizacion</p>
					</div>
					<div class="carousel__elemento">
						<img src="images/300.jpg" alt="Gatito">
						<p>Pension</p>
					</div>
					<div class="carousel__elemento">
						<img src="images/400.jpg" alt="Perrito con moño rosa">
						<p>Estetica Canina y Felina</p>
					</div>
					<div class="carousel__elemento">
						<img src="images/500.jpg" alt="Accesorios y alimentos">
						<p>Accesorios y alimentos</p>
					</div>
	
					<div class="carousel__elemento">
						<img src="images/600.jpg" alt="Gato con cuellera">
						<p>Medicina Preventiva</p>
					</div>
					<div class="carousel__elemento">
						<img src="images/700.jpg" alt="Radiografia">
						<p>Laboratorio</p>
					</div>
					<div class="carousel__elemento">
						<img src="images/800.jpg" alt="Tratamientos Inmunologicos">
						<p>Tratamientos Inmunologicos</p>
					</div>
					<div class="carousel__elemento">
						<img src="images/901.jpg" alt="Imagenologia">
						<p>Imagenologia</p>
					</div>
					<div class="carousel__elemento">
						<img src="images/102.jpg" alt="Proloterapia">
						<p>Proloterapia</p>
					</div>

				</div>

				<button aria-label="Siguiente" class="carousel__siguiente">
					<i class="fas fa-chevron-right"></i>
				</button>
			</div>

			<div role="tablist" class="carousel__indicadores"></div>
		</div>
	</div>



<?php

include 'templates/pie.php';

?>






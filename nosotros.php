<?php include 'php/cabecera.asjofn'; ?>

<div id="titulo">
	<h1>Nosotros</h1>
</div>
<div id="contenedor">

	
	<div id="clases">
		<h2>Clases que ofrecemos:</h2>
		<ul id="clasesLista">
			<li class="clasesItem">
				<img src="resources/img/clases/1.jpg" alt="clase">				
				<h3>Clase</h3>
			</li>
			<li class="clasesItem">
				<img src="resources/img/clases/2.jpg" alt="clase">
				<h3>Clase</h3>
			</li>
			<li class="clasesItem">
				<img src="resources/img/clases/3.jpg" alt="clase">
				<h3>Clase</h3>
			</li>
			<li class="clasesItem">
				<img src="resources/img/clases/4.jpg" alt="clase">
				<h3>Clase</h3>
			</li>
		</ul>
	</div>
	<div id="profesores">
		<h2>Nuestros profesores:</h2>
		<ul id="profesoresLista">
			<li class="profesoresItem">
				<img src="resources/img/profesores/1.png" alt="profesor">
				<h3>Nombre</h3>
			</li>
			<li class="profesoresItem">
				<img src="resources/img/profesores/2.png" alt="profesor">
				<h3>Nombre</h3>
			</li>
			<li class="profesoresItem">
				<img src="resources/img/profesores/3.png" alt="profesor">
				<h3>Nombre</h3>
			</li>
			<li class="profesoresItem">
				<img src="resources/img/profesores/4.png" alt="profesor">
				<h3>Nombre</h3>
			</li>
			<li class="profesoresItem">
				<img src="resources/img/profesores/5.png" alt="profesor">
				<h3>Nombre</h3>
			</li>
			<li class="profesoresItem">
				<img src="resources/img/profesores/6.png" alt="profesor">
				<h3>Nombre</h3>
			</li>
		</ul>
	</div>
</div>
<script>
jQuery(document).ready(function($) {
	$('#nosotrosItem').addClass('activeItem');
	$('#nosotrosItem').css('color', 'black');
});
</script>
<?php include 'php/pie.asjofn'; ?>
<?php include 'php/cabecera.asjofn'; ?>

<div id="titulo">
	<h1>Contacto</h1>
</div>
<div class="contenedorCentral">
	<form action="php/recibirMensaje.php" method="post">
		<label for="">
			<strong>

				Nombre:
			</strong>
		</label>
		<input type="text" class="inputsForm" name="nombreUser">
		<label for="">
			<strong>

				Correo:
			</strong>
		</label>
		<input type="email" class="inputsForm" name="correoUser">
		<label for="">
			<strong>

				Telefono:
			</strong>
		</label>
		<input type="number" class="inputsForm" name="telefonoUser">
		<label for="">
			<strong>

				Mensaje:
			</strong>
		</label>
		<textarea class="inputsForm txtAreaForm" name="mensajeUser"></textarea>
		<button style='float: right; font-family: inherit; font-size: 18px;' class="button button-3d-action ">
			Enviar <i class="fa fa-envelope-o"></i>
		</button>
	</form>
</div>
<div id="mapabox" style="width: 100%; min-height: 600px; margin-top: 40px;">

</div>
<script>
jQuery(document).ready(function($) {
	$('#contactoItem').addClass('activeItem');
	$('#contactoItem').css('color', 'black');
	
	map = new GMaps({
		div: '#mapabox',
		zoom: 16,
		lat: 19.700461,
		lng: -101.199628,
	});

	map.addMarker({
		lat: 19.700461,
		lng: -101.199628,
		infoWindow: {
			content: '<p>Aqui estamos</p>'
		}
	});
});
</script>
<?php include 'php/pie.asjofn'; ?>
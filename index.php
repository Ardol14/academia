<?php include 'php/cabecera.asjofn'; ?>
<div id="container" style="width:98%; margin: 0 auto;">

	<ul class="bxslider">
		<li>
			<img src="resources/img/galeria/1.jpg" class="captionIMG"  title="Clases de esto"/>
		</li>
		<li>
			<img src="resources/img/galeria/2.jpg" class="captionIMG"  title="Clases del otro"/>
		</li>
		<li>
			<img src="resources/img/galeria/3.jpg" class="captionIMG"  title="Clases del otro"/>
		</li>
		<li>
			<img src="resources/img/galeria/4.jpg" class="captionIMG"  title="Clases del otro"/>
		</li>
		<li>
			<img src="resources/img/galeria/5.jpg" class="captionIMG"  title="Clases del otro"/>
		</li>
		<li>
			<img src="resources/img/galeria/6.jpg" class="captionIMG"  title="Clases del otro"/>
		</li>
	</ul>
</div>
<script>
$(document).ready(function(){
	$('.bxslider').bxSlider({
		captions: true,
		adaptiveHeight: true,
		auto: true
	});

		$('#homeItem').addClass('activeItem');
		$('#homeItem').css('color', 'black');
	
});
</script>
<?php include 'php/pie.asjofn'; ?>
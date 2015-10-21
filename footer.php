<footer class="">
	<div class="container">
		<ul class="contacto__footer">
			<li>&nbsp;<span>EDIFICIO ACOMEDICA I</span> Calle 127 No. 19ª - 10, Cons. 312</li>
			<li>&nbsp;<span>CORREO</span> <a href="mailto:consulta@dradelcyaraquelafaurie.com">consulta@dradelcyaraquelafaurie.com</a></li>
			<li>&nbsp;<span>TELÉFONO</span> +57 649 7605/06 Ext. 300 y 318</li>
		</ul>
	</div>

	<div class="bg__blue">
		<div class="container">
			<div class="two columns">
			<ul class="menu__footer">
				<li><a href="#">INICIO</a></li>
				<li><a href="#">QUIÉN SOY</a></li>
				<li><a href="#">ENFERMEDADES</a></li>
				<li><a href="#">DIAGNOSTICOS</a></li>
				<li><a href="#">CONTÁCTANOS</a></li>
			</ul>
			</div>
			<div class="three columns">
				<ul class="menu__footer">
					<li><a href="#">ANEURISMA</a></li>
					<li><a href="#">ARTERIOSCLEROSIS</a></li>
					<li><a href="#">PIE DIABÉTICO</a></li>
					<li><a href="#">LINFEDEMAS</a></li>
					<li><a href="#">VARISES</a></li>
					<li><a href="#">ESCLEROTERAPIA</a></li>
				</ul>
			</div>
			<div class="six columns">
				<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3976.3704212095818!2d-74.09653872698628!3d4.705549556248209!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2s!4v1445284858274" width="100%" height="152" frameborder="0" style="border:10" allowfullscreen></iframe>
			</div>
		</div>	
	</div>

	<div class="bg__blue_2">
		<div class="container center">
			<strong>&copy; DRA. DELCY ARAQUE LAFAURIE</strong> HECHO CON <img width="10px" src="images/corazon.png" alt=""> POR <a target="new" href="http://suwwweb.com/">suWWWeb S.A.S</a>
		</div>
	</div>
</footer>

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery.meanmenu.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.magic-accordion.js"></script>
<script>

$(document).ready(function () {
	$('header nav').meanmenu();
});
</script>

<script>
	$(document).ready(function() {
 
	  $("#owl-demo").owlCarousel({
	 
	      navigation : true, // Show next and prev buttons
	      slideSpeed : 300,
	      autoPlay:true,
	      paginationSpeed : 400,
	      singleItem:true,
	      pagination:false
	 
	      // "singleItem:true" is a shortcut for:
	      // items : 1, 
	      // itemsDesktop : false,
	      // itemsDesktopSmall : false,
	      // itemsTablet: false,
	      // itemsMobile : false
	 
	  });
	 
	});
</script>

<script type="text/javascript">
			$(document).ready(function(){
				$('.acordeon').magicAccordion({
					headingTag 	: 'h3',
					bodyClass 	: 'body',
					headClass 	: 'head',
					activeClass : 'active',
					speed 		: 200,
					easing 		: 'swing'
				}).on( 'opened.magic', function(e){
					console.log(e.head);
				}).on( 'closed.magic', function(e){
					console.log(e.body);
				});

				var app = $('.acordeon').data( 'magic-accordion' );
				$('.unbind').click( function(e) {
					e.preventDefault();
					app.unbind();
				});
				$('.rebind').click( function(e) {
					e.preventDefault();
					app.rebind();
				});
			});
		</script>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>

<!-- Footer Start -->
<footer class="footer">
	<div class="container">
		<div class="grid grid-cols-12">
			<div class="col-span-12">
				<div class="footer-py-60">
					<div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
						<div class="lg:col-span-4 md:col-span-12">
							<a href="#" class="logo-footer">
								<i style="font-size: 36px; color: rgb(79 70 229 / 0.9);" class="uil-flask l-dark"></i>
								<!--
								<img src="<?php echo base_url() ?>assets/images/logo-light.png" alt="">
								-->
								Ciencia Book.
							</a>
							<p class="mt-6 text-gray-300">Aprende de una manera divertida con FunLabs y conecta con nosotros mediante nuestras redes sociales.</p>
							<ul class="list-none social-icon foot-social-icon mt-6">
								<li class="inline"><a href="" class="btn btn-icon btn-sm border icon-border rounded-md hover:border-primary-600 hover:bg-primary-600"><i data-feather="facebook" class="h-4 w-4"></i></a></li>
								<li class="inline"><a href="" class="btn btn-icon btn-sm border icon-border rounded-md hover:border-primary-600 hover:bg-primary-600"><i data-feather="instagram" class="h-4 w-4"></i></a></li>
								<li class="inline"><a href="" class="btn btn-icon btn-sm border icon-border rounded-md hover:border-primary-600 hover:bg-primary-600"><i data-feather="twitter" class="h-4 w-4"></i></a></li>
								<li class="inline"><a href="" class="btn btn-icon btn-sm border icon-border rounded-md hover:border-primary-600 hover:bg-primary-600"><i data-feather="linkedin" class="h-4 w-4"></i></a></li>
							</ul><!--end icon-->
						</div><!--end col-->

						<div class="lg:col-span-2 md:col-span-4">
							<h5 class="footer-head">Experimentos</h5>
							<ul class="list-none footer-list mt-6">
								<?php foreach ($categories as $category): ?>
									<li><a href="#" class="text-gray-300 hover:text-gray-400"><i class="uil uil-angle-right-b me-1"></i> <?php echo $category['category_name'] ?></a></li>
								<?php endforeach; ?>
							</ul>
						</div><!--end col-->

						<div class="lg:col-span-3 md:col-span-4">
							<h5 class="footer-head">FunLabs</h5>
							<ul class="list-none footer-list mt-6">
								<li><a href="#" class="text-gray-300 hover:text-gray-400"><i class="uil uil-angle-right-b me-1"></i> Politicas</a></li>
								<li><a href="#" class="text-gray-300 hover:text-gray-400"><i class="uil uil-angle-right-b me-1"></i> Cookies</a></li>
							</ul>
						</div><!--end col-->

						<div class="lg:col-span-3 md:col-span-4">
							<h5 class="footer-head">Newsletter</h5>
							<p class="mt-6">Recibe las ultimas noticias, inscribete a nuestro newsletter.</p>
							<form>
								<div class="grid grid-cols-1">
									<div class="foot-subscribe my-3">
										<label class="form-label">Ingresa tu email <span class="text-danger-600">*</span></label>
										<div class="form-icon relative mt-2">
											<i data-feather="mail" class="w-4 h-4 absolute top-3 left-4"></i>
											<input type="email" class="form-input pl-12" placeholder="Email" name="email" required="">
										</div>
									</div>

									<button type="submit" id="submitsubscribe" name="send" class="btn btn-primary rounded-md">Subscribir</button>
								</div>
							</form>
						</div><!--end col-->
					</div><!--end grid-->
				</div><!--end col-->
			</div>
		</div><!--end grid-->
	</div><!--end container-->

	<div class="footer-py-30 footer-bar">
		<div class="container text-center">
			<div class="grid md:grid-cols-2 items-center">
				<div class="md:text-left text-center">
					<p class="mb-0">© <script>document.write(new Date().getFullYear())</script> FunLabs. </p>
				</div>

				<ul class="list-none md:text-right text-center mt-6 md:mt-0">
					<li class="inline"><a href=""><img src="assets/images/payments/american-ex.png" class="max-h-6 inline" title="American Express" alt=""></a></li>
					<li class="inline"><a href=""><img src="assets/images/payments/discover.png" class="max-h-6 inline" title="Discover" alt=""></a></li>
					<li class="inline"><a href=""><img src="assets/images/payments/master-card.png" class="max-h-6 inline" title="Master Card" alt=""></a></li>
					<li class="inline"><a href=""><img src="assets/images/payments/paypal.png" class="max-h-6 inline" title="Paypal" alt=""></a></li>
					<li class="inline"><a href=""><img src="assets/images/payments/visa.png" class="max-h-6 inline" title="Visa" alt=""></a></li>
				</ul>
			</div><!--end grid-->
		</div><!--end container-->
	</div>
</footer><!--end footer-->
<!-- Footer End -->

<!-- Start Cookie Popup -->
<div class="cookie-popup fixed max-w-lg bottom-3 right-3 left-3 sm:left-0 sm:right-0 mx-auto bg-white shadow rounded-md py-5 px-6 z-10">
	<p class="text-muted-400">Este sitio web utiliza cookies para mejorar tu experiecncia al utilizar el sitio. Al utilizar el sitio aceptas el uso de nuestras cookies.</p>
	<div class="cookie-popup-actions text-right">
		<button class="absolute border-none bg-none p-0 cursor-pointer font-semibold top-2 right-2"><i class="uil uil-times text-dark text-2xl"></i></button>
	</div>
</div><!--Note: Cookies Js including in plugins.init.js (path like; assets/js/plugins.init.js) and Cookies css including in _helper.scss (path like; scss/_helper.scss)-->
<!-- End Cookie Popup -->

<!-- Back to top -->
<a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed text-lg rounded-full z-10 bottom-5 right-5 h-9 w-9 text-center bg-primary-600 text-white leading-9"><i class="uil uil-arrow-up"></i></a>
<!-- Back to top -->

<!-- JAVASCRIPTS -->
<script src="<?php echo base_url() ?>assets/libs/tiny-slider/min/tiny-slider.js"></script>
<script src="<?php echo base_url() ?>assets/libs/tobii/js/tobii.min.js"></script>
<script src="<?php echo base_url() ?>assets/libs/feather-icons/feather.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins.init.js"></script>
<script src="<?php echo base_url() ?>assets/js/app.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready( function () {
		$('#myTable').DataTable({
			"language": {
				"lengthMenu": "Mostrar _MENU_ Publicaciones",
				"zeroRecords": "No se encontraron publicaciones - 😢",
				"info": "Mostrando _PAGE_ de _PAGES_",
				"infoEmpty": "No hay publicaciones disponibles",
				"infoFiltered": "(filtrando de _MAX_ publicaciones totales)",
				"search": "",
				"infoThousands": ",",
				"loadingRecords": "Cargando...",
				"searchPlaceholder": "Busca Experimentos...🔍",
				"paginate": {
					"first": "Primero",
					"last": "Último",
					"next": "Siguiente",
					"previous": "Anterior"
				},
			}
		});
	} );
</script>

<!-- JAVASCRIPTS -->

<?php if( isset($navbar) && $navbar==1): ?>
<script>

	$(function() {
		//caches a jQuery object containing the header element
		var header = $(".clearHeader");
		$(window).scroll(function() {
			var scroll = $(window).scrollTop();

			if (scroll >= 500) {
				header.removeClass('clearHeader').addClass("nav-sticky");
			} else {
				header.removeClass("darkHeader").addClass('nav-sticky');
			}
		});
	});


</script>
<?php endif; ?>


</body>
</html>

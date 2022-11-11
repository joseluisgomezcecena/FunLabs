<!-- Footer -->
<footer class="mt-auto">
	<div class="footer">
		<span class='uppercase'>&copy; 2022 Yeti Themes</span>
		<nav>
			<a href="mailto:Yeti Themes<info@yetithemes.net>?subject=Support">Support</a>
			<span class="divider">|</span>
			<a href="http://yeti.yetithemes.net/docs" target="_blank">Docs</a>
		</nav>
	</div>
</footer>

</main>

<!-- Scripts -->
<script src="<?php echo base_url() ?>/assets/js/vendor.js"></script>
<script src="<?php echo base_url() ?>/assets/js/chart.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.1"></script> -->
<script src="<?php echo base_url() ?>/assets/js/script.js"></script>

<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
	var toolbarOptions = [
		['bold', 'italic', 'underline', 'strike'],        // toggled buttons
		['blockquote', 'code-block'],

		[{ 'header': 1 }, { 'header': 2 }],               // custom button values
		[{ 'list': 'ordered'}, { 'list': 'bullet' }],
		[{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
		[{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
		[{ 'direction': 'rtl' }],                         // text direction

		[{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
		[{ 'header': [1, 2, 3, 4, 5, 6, false] }],
		[  'image',  'formula' ],          // add's image support
		[{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
		[{ 'font': [] }],
		[{ 'align': [] }],

		['clean']                                         // remove formatting button
	];

	var quill = new Quill('#editor', {
		modules: {
			toolbar: toolbarOptions
		},

		theme: 'snow'
	});
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready( function () {
		$('#myTable').DataTable({
			"language": {
				"lengthMenu": "Mostrar _MENU_ publicaciones por pagina",
				"zeroRecords": "No se encontraron publicaciones - 😢",
				"info": "Showing page _PAGE_ of _PAGES_",
				"infoEmpty": "No hay publicaciones disponibles",
				"infoFiltered": "(filtrando de _MAX_ publicaciones totales)",
				"search": "Buscar:",
				"infoThousands": ",",
				"loadingRecords": "Cargando...",
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


<script>
	setTimeout(function() {
		$('.alert').hide(300);
	}, 5000);
</script>

</body>

</html>

<!-- Breadcrumb -->
<section class="breadcrumb">
	<h1><?= $title ?></h1>
	<ul>
		<li><a href="#">Paginas</a></li>
		<li class="divider la la-arrow-right"></li>
		<li><a href="#">Blog</a></li>
		<li class="divider la la-arrow-right"></li>
		<li><?= $title ?></li>
	</ul>
</section>

<?php echo form_open_multipart('categories/create')?>

<div class="grid lg:grid-cols-4 gap-5">

	<!-- Content -->

	<div class="lg:col-span-2 xl:col-span-3">
		<div class="card p-5">

			<div class="mb-2">
				<?php echo validation_errors(); ?>
			</div>

			<div class="mb-5 xl:w-1/2">
				<label for="name" class="label block mb-2" >Category Name</label>
				<input id="name" name="name" type="text" class="form-control">
			</div>

		</div>
	</div>

	<div class="flex flex-col gap-y-5 lg:col-span-2 xl:col-span-1">

		<!-- Publish -->
		<div class="card p-5 flex flex-col gap-y-5">
			<h3>Acciones</h3>

			<div class="flex flex-wrap gap-2 mt-5">
				<button type="submit" name="submit" class="btn btn_primary uppercase">Publicar</button>
			</div>
		</div>

		<!-- Featured Image -->
		<div class="card p-5">
			<h3>Imagen de la Categoria</h3>

			<img src=""
				 id="image"
				 width="250"
				 height="auto">

			<input style="display: none;" class="block
				w-full
				px-3
				py-1.5
				text-base
				font-normal
				text-gray-700
				bg-white bg-clip-padding
				border border-solid border-gray-300
				rounded
				transition
				ease-in-out
				m-0
				focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none rounded uppercase"
				   type="file" name="userfile" id="myfile" size="20">

      			<div class="mt-5 btn btn_outlined btn_secondary uppercase" onclick="browse()">Elegir Imagen</div>

		</div>
	</div>
</div>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>
	function browse() {
		document.getElementById("myfile").click();
	}


	document.getElementById('myfile').addEventListener('change', function(){
		if (this.files[0] ) {
			var picture = new FileReader();
			picture.readAsDataURL(this.files[0]);
			picture.addEventListener('load', function(event) {
				document.getElementById('image').setAttribute('src', event.target.result);
				document.getElementById('image').style.display = 'block';
			});
		}
	});

</script>

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

<?php echo form_open_multipart(base_url() . 'categories/delete/' . $category['category_id'])?>

<div class="grid lg:grid-cols-4 gap-5">

	<!-- Content -->
	<input type="hidden" name="id" value="<?php echo $category['category_id'] ?>">
	<div class="lg:col-span-2 xl:col-span-3">
		<div class="card p-5">

			<div class="mb-2">
				<?php echo validation_errors(); ?>
			</div>

			<div class="mb-5 xl:w-1/2">
				<label for="name" class="label block mb-2" >Category Name</label>
				<input id="name" name="name" type="text" value="<?php echo $category['category_name']; ?>" class="form-control" readonly>
			</div>

		</div>
	</div>

	<div class="flex flex-col gap-y-5 lg:col-span-2 xl:col-span-1">

		<!-- Publish -->
		<div class="card p-5 flex flex-col gap-y-5">
			<h3>Acciones</h3>

			<div class="flex flex-wrap gap-2 mt-5">
				<button type="submit" name="submit" class="btn btn_danger uppercase">Eliminar</button>
			</div>
		</div>

		<!-- Featured Image -->
		<div class="card p-5">
			<h3>Imagen de la Categoria</h3>

			<img src="<?php echo base_url() ?>assets/uploads/categories/<?php echo $category['category_image_url'] ?>" id="image" width="250" height="auto">


		</div>
	</div>
</div>
</form>


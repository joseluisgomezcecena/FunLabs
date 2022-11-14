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



<div class="grid lg:grid-cols-4 gap-5">

	<!-- Content -->

	<input type="hidden" name="id" value="<?php echo $post['id'] ?>">

	<div class="lg:col-span-2 xl:col-span-3">
		<div class="card p-5">


			<p>
				¿Estas seguro que quieres eliminar esta publicacion? <br> <b>Esta acción no se puede deshacer.</b>
				<br/><br>
				Titulo: <b><?php echo $post['title']; ?></b>
				<br><br></br>
			</p>

			<?php echo form_open("posts/delete/{$post['id']}") ?>
			<input type="hidden" name="id" value="<?php echo $post['id'] ?>">
			<button type="submit" name="delete" class="btn btn_danger uppercase">Eliminar</button>
			<?php echo form_close() ?>

		</div>
	</div>

	<div class="flex flex-col gap-y-5 lg:col-span-2 xl:col-span-1">



		<!-- Featured Image -->
		<div class="card p-5">
			<h3>Imagen de la publicación</h3>
			<img class="image" id="image" src="<?php echo base_url() . 'assets/uploads/posts/' . $post['image_url'] ?>" />
			<input style="display: none !important;" class="block
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


		</div>
	</div>
</div>

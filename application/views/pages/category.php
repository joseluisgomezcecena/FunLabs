<div class="container mt-10">

	<h3 style="margin-top: 95px;" class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-medium">
		Publicaciones por categoria
		<br>
		<span class="text-primary-600"></span>
	</h3>

	<div class="mt-10 mb-5 grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">

		<?php foreach ($posts as $post): ?>
		<div class="blog border relative rounded-md shadow-sm overflow-hidden hover:shadow-xl  mt-10 mb-5">
			<img src="<?php echo base_url() ?>assets/uploads/posts/<?php echo $post['image_url'] ?>" alt="">

			<div class="content p-6">
				<a href="blog-detail.html" class="title h5 text-lg font-medium hover:text-primary-600 transition duration-500"><?php echo $post['title'] ?></a>
				<p class="text-muted-400 mt-3"><?php echo substr($post['body'],"0", "200") . '...' ?></p>

				<div class="mt-4">
					<a href="<?php echo base_url() ?>post/<?php echo $post['id'] ?>" class="btn btn-link font-normal hover:text-primary-600 after:bg-primary-600 transition duration-500">Leer Mas <i class="uil uil-arrow-right"></i></a>
				</div>
			</div>
		</div><!--blog end-->
		<?php endforeach; ?>
	</div>
</div>

<script>
	var d =document.getElementById("topnav");
	d.className += " nav-sticky";
</script>

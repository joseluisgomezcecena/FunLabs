<style>
	th{
		border: 0 !important;
	}
	tbody{
		border: 0 !important;
	}
	table{
		border: 0 !important;
	}

	input[type="search"] {
		border: 1px solid #c9c9c9 !important;
		background-color: white !important;
		border-radius: 9999px !important;
		box-shadow: 2px 2px 2px #a4a2a2 !important;
		width: 250px !important;
	}

	.dataTables_wrapper .dataTables_length select {
		background-color: white !important;
		box-shadow: 1px 1px 1px #a4a2a2 !important;
	}

</style>
<!-- Breadcrumb -->
<section class="breadcrumb lg:flex items-start">
	<div>
		<h1><?= $title ?></h1>
		<ul>
			<li><a href="#">Paginas</a></li>
			<li class="divider la la-arrow-right"></li>
			<li><a href="#">Blog</a></li>
			<li class="divider la la-arrow-right"></li>
			<li><?= $title ?></li>
		</ul>
	</div>

	<div class="flex flex-wrap gap-2 items-center ltr:ml-auto rtl:mr-auto mt-5 lg:mt-0">

		<!-- Layout
		<div class="flex gap-x-2">
			<a href="blog-list.html" class="btn btn-icon btn-icon_large btn_outlined btn_secondary">
				<span class="la la-bars"></span>
			</a>
			<a href="#" class="btn btn-icon btn-icon_large btn_outlined btn_primary">
				<span class="la la-list"></span>
			</a>
			<a href="blog-list-card-columns.html"
			   class="btn btn-icon btn-icon_large btn_outlined btn_secondary">
				<span class="la la-th-large"></span>
			</a>
		</div>
		-->
		<!-- Search
		<form class="flex flex-auto items-center" action="#">
			<label class="form-control-addon-within rounded-full">
				<input type="text" class="form-control border-none" placeholder="Buscar">
				<button type="button"
						class="btn btn-link text-gray-300 dark:text-gray-700 dark:hover:text-primary text-xl leading-none la la-search ltr:mr-4 rtl:ml-4"></button>
			</label>
		</form>
		-->
		<div class="flex gap-x-2">

			<!-- Sort By
			<div class="dropdown">
				<button class="btn btn_outlined btn_secondary uppercase" data-toggle="dropdown-menu">
					Sort By
					<span class="ltr:ml-3 rtl:mr-3 la la-caret-down text-xl leading-none"></span>
				</button>
				<div class="dropdown-menu">
					<a href="#">Ascending</a>
					<a href="#">Descending</a>
				</div>
			</div>
			-->
			<!-- Add New -->
			<a href="<?php echo base_url() ?>/posts/create" class="btn btn_primary uppercase">Nueva Publicación</a>
		</div>
	</div>
</section>

<table id="myTable" class="table">
	<thead>
	<tr>
		<th scope="col">Title</th>
	</tr>
	</thead>
	<tbody>


	<?php
	foreach ($posts as $post):

		?>
		<tr>
			<td>
		<div class="flex flex-col gap-y-5">
			<div class="card card_row card_hoverable mb-5">
				<div>
					<div class="image">
						<div class="aspect-w-4 aspect-h-3">
							<img src="<?php echo base_url() . 'assets/uploads/posts/' . $post['image_url'] ?>">
						</div>
						<label class="custom-checkbox absolute top-0 ltr:left-0 rtl:right-0 mt-2 ltr:ml-2 rtl:mr-2">
							<input type="checkbox" data-toggle="cardSelection">
							<span></span>
						</label>
						<div
								class="badge badge_outlined badge_secondary uppercase absolute top-0 ltr:right-0 rtl:left-0 mt-2 ltr:mr-2 rtl:ml-2">
							<?php echo $post['category_name'] ?>
						</div>
					</div>
				</div>
				<div class="header">
					<h5><?php echo $post['title'] ?> <small><?php echo $post['category_name'] ?></small></h5>
					<p><?php echo word_limiter($post['body'], 50)  ?></p>
				</div>
				<div class="body">
					<h6 class="uppercase">Status</h6>
					<p>
						<?php
						if($post['status'] == 1)
						{
							echo "Published";
						}
						else
						{
							echo "Unpublished";
						}

						?>
					</p>
					<h6 class="uppercase mt-4 lg:mt-auto">Date Created</h6>
					<p><?php echo date_format(date_create($post['created_at']), "d/m/Y")  ?></p>
				</div>
				<div class="actions">
					<div class="dropdown ltr:-ml-3 rtl:-mr-3 lg:ltr:ml-auto lg:rtl:mr-auto">
						<button class="btn-link" data-toggle="dropdown-menu">
							<span class="la la-ellipsis-v text-4xl leading-none"></span>
						</button>
						<div class="dropdown-menu">
							<a href="<?php echo base_url('/posts/' . $post['id']) ?>">Ver Post</a>
							<a href="#">Cambiar Visibilidad</a>
							<hr>
							<a href="#">Something Else</a>
						</div>
					</div>
					<a href="<?php echo base_url('/posts/edit/' . $post['id']) ?>"
					   class="btn btn-icon btn_outlined btn_secondary mt-auto ltr:ml-auto rtl:mr-auto lg:ltr:ml-0 lg:rtl:mr-0">
						<span class="la la-pen-fancy"></span>
					</a>
					<a href="<?php echo base_url('/posts/delete/' . $post['id']) ?>"
					   class="btn btn-icon btn_outlined btn_danger lg:mt-2 ltr:ml-2 rtl:mr-2 lg:ltr:ml-0 lg:rtl:mr-0">
						<span class="la la-trash-alt"></span>
					</a>
				</div>
			</div>
		</div>

		</td>
		</tr>
	<?php endforeach; ?>





	</tbody>
</table>



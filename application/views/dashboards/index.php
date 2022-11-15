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
		<div class="flex gap-x-2">
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
			<div class="card card_row card_hoverable mb-5 hover:scale-105 hover:shadow-lg transition-transform duration-200">
				<div>
					<div class="image">
						<div class="aspect-w-4 aspect-h-3">
							<img src="<?php echo base_url() . 'assets/uploads/posts/' . $post['image_url'] ?>">
						</div>

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
							echo "Listo";
						}
						elseif ($post['status'] == 0)
						{
							echo "Borrador";
						}
						else
						{
							echo "Borrador";
						}

						?>
					</p>
					<h6 class="uppercase mt-4 lg:mt-auto">Fecha de publicación:</h6>
					<p><?php echo date_format(date_create($post['created_at']), "d/M/Y")  ?></p>
				</div>
				<div class="actions">

					<div class="dropdown ltr:-ml-3 rtl:-mr-3 lg:ltr:ml-auto lg:rtl:mr-auto">
						<button class="btn-link" data-toggle="dropdown-menu">
							<span class="la la-ellipsis-v text-4xl leading-none"></span>
						</button>
						<div class="dropdown-menu">
							<a href="<?php echo base_url('posts/review/' . $post['id']) ?>">
											<span  class="btn btn-icon btn_outlined btn_secondary mt-auto ltr:ml-auto rtl:mr-auto lg:ltr:ml-0 lg:rtl:mr-0">
												<span class="la la-eye"></span>
											</span>
								Revisar/Aprobar/Rechazar
							</a>
						</div>
					</div>

				</div>
			</div>
		</div>

		</td>
		</tr>
	<?php endforeach; ?>





	</tbody>
</table>



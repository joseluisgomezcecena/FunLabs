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
		<!-- Search -->
		<div class="flex gap-x-2">
			<!-- Add New -->
			<a href="<?php echo base_url() ?>categories/create" class="btn btn_primary uppercase">Nueva Categoria</a>
		</div>
	</div>
</section>


<table id="myTable" class="table">
	<thead>
		<tr>
			<th scope="col"></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($categories as $category): ?>
			<tr>
				<td>
					<div class="flex flex-col gap-y-5">
						<div class="card card_row card_hoverable mb-5">
							<div>
								<div class="image">
									<div class="aspect-w-4 aspect-h-3">
										<img src="<?php echo base_url() . 'assets/uploads/categories/' . $category['category_image_url'] ?>">
									</div>
									<label class="custom-checkbox absolute top-0 ltr:left-0 rtl:right-0 mt-2 ltr:ml-2 rtl:mr-2">
										<input type="checkbox" data-toggle="cardSelection">
										<span></span>
									</label>
									<div
										class="badge badge_outlined badge_secondary uppercase absolute top-0 ltr:right-0 rtl:left-0 mt-2 ltr:mr-2 rtl:ml-2">
										<?php echo $category['category_name'] ?>
									</div>
								</div>
							</div>
							<div class="header">
								<h5><?php echo $category['category_name'] ?> <small><?php echo $category['category_name'] ?></small></h5>
								<p><?php echo word_limiter($category['category_name'], 50)  ?></p>
							</div>
							<div class="body">
								<h6 class="uppercase">Status</h6>

								<h6 class="uppercase mt-4 lg:mt-auto">Date Created</h6>
								<p><?php echo date_format(date_create($category['created_at']), "d/m/Y")  ?></p>
							</div>
							<div class="actions">
								<div class="dropdown ltr:-ml-3 rtl:-mr-3 lg:ltr:ml-auto lg:rtl:mr-auto">
									<button class="btn-link" data-toggle="dropdown-menu">
										<span class="la la-ellipsis-v text-4xl leading-none"></span>
									</button>
									<div class="dropdown-menu">
										<a href="<?php echo base_url('/categories/edit/' . $category['category_id']) ?>">
											<span  class="btn btn-icon btn_outlined btn_secondary mt-auto ltr:ml-auto rtl:mr-auto lg:ltr:ml-0 lg:rtl:mr-0">
												<span class="la la-pen-fancy"></span>
											</span>
											Editar
										</a>
										<a href="<?php echo base_url('/categories/delete/' . $category['category_id']) ?>">
											<span  class="btn btn-icon btn_outlined btn_danger lg:mt-2 ltr:ml-2 rtl:mr-2 lg:ltr:ml-0 lg:rtl:mr-0">
												<span class="la la-trash-alt"></span>
											</span>
											Eliminar
										</a>

									</div>
								</div>
								<!--
								<a href="#"
								   class="btn btn-icon btn_outlined btn_secondary mt-auto ltr:ml-auto rtl:mr-auto lg:ltr:ml-0 lg:rtl:mr-0">
									<span class="la la-pen-fancy"></span>
								</a>
								<a href="<?php echo base_url('/posts/delete/' . $category['category_id']) ?>"
								   class="btn btn-icon btn_outlined btn_danger lg:mt-2 ltr:ml-2 rtl:mr-2 lg:ltr:ml-0 lg:rtl:mr-0">
									<span class="la la-trash-alt"></span>
								</a>
								-->
							</div>
						</div>
					</div>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

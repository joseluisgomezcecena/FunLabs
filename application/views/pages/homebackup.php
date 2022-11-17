<style>
	.btn.btn-danger {
		--tw-border-opacity: 1;
		border-color: rgb(18, 255, 155);
		--tw-bg-opacity: 1;
		background-color: rgb(18, 255, 155);
		--tw-text-opacity: 1;
		color: rgb(255 255 255 / var(--tw-text-opacity));
	}

	.btn.btn-danger:hover {
		--tw-border-opacity: 1;
		border-color: rgb(18, 255, 155);
		--tw-bg-opacity: 1;
		background-color: rgb(25, 231, 127);
		--tw-text-opacity: 1;
		color: rgb(255 255 255 / var(--tw-text-opacity));
	}
</style>

<!-- Start Hero -->
<section class="relative table w-full py-36 pb-0 lg:py-44 lg:pb-0 bg-primary-600" style="background: url('assets/images/bg2.png') center center no-repeat;">
	<div class="container">
		<div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
			<div class="lg:col-span-7">
				<div class="md:mr-6 md:mb-20">
					<h5 class="text-lg text-white/60">Crea y Aprende</h5>
					<h4 class="font-semibold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 text-white">FunLab <br> </h4>
					<p class="text-white/60 text-lg max-w-xl">Con FunLab podras aprender de una forma divertida, replica nuestros experimentos o sube tus propios experimentos!</p>

					<div class="mt-6">
						<a href="<?php echo  base_url() ?>users/register" class="btn btn-danger rounded-md mr-2 mt-2"><i class="uil uil-book-reader"></i> Registrate!</a>
						<a href="<?php echo base_url() ?>posts" class="btn btn-light rounded-md mr-2 mt-2"><i class="uil uil-flask"></i> Ver los experimentos</a>
					</div>
				</div>
			</div><!--end col-->

			<div class="lg:col-span-5 mt-8 md:mt-0">
				<img src="<?php  echo base_url() ?>assets/images/hero.svg" alt="">
			</div><!--end col-->
		</div><!--end grid-->
	</div><!--end container-->
</section><!--end section-->
<div class="relative">
	<div class="shape overflow-hidden z-1 text-light-50">
		<svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
		</svg>
	</div>
</div>
<!-- End Hero -->


<section class="py-6 bg-light-50">
	<div class="container">

			<div class="grid lg:grid-cols-12 grid-cols-1" id="reserve-form">
				<div class="lg:col-span-12 mt-8">
					<div class="bg-white border-0 shadow rounded p-3">
						<form action="#">
							<div class="registration-form text-dark text-start">
								<div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 lg:gap-0 gap-6">
									<div class="filter-search-form relative filter-border">
										<i class="uil uil-flask-potion icons mt-1"></i>
										<input name="name" type="text" id="job-keyword" class="form-input filter-input-box bg-light-50 border-0" placeholder="Busca por palabras clave">
									</div>

									<div class="filter-search-form relative filter-border">
										<select class="form-select mt-4" data-trigger name="choices-location" id="choices-location" aria-label="Default select example">
											<option value="">Todas las categorias</option>
											<?php foreach ($categories as $category): ?>
												<option value="<?php echo $category['category_id'] ?>"><?php echo $category['category_name'] ?></option>
											<?php endforeach; ?>
										</select>
									</div>



									<input type="submit" id="search" name="search" style="height: 60px;" class="btn btn-primary searchbtn submit-btn w-100" value="Buscar">
								</div><!--end grid-->
							</div><!--end container-->
						</form>
					</div>
				</div><!--ed col-->
			</div><!--end grid-->


	</div><!--end container-->
</section><!--end section-->







<section class="relative md:py-24 py-16">
	<div class="container">
		<div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
			<div class="lg:col-span-8 md:col-span-6">
				<div class="grid lg:grid-cols-1 grid-cols-1 gap-[30px]">




					<table id="myTable" class="table">
						<thead>
						<tr>
							<th scope="col">Title</th>
						</tr>
						</thead>
						<tbody>

					<?php foreach($posts as $post):?>

						<tr>
							<td>

								<!--
								blog relative rounded-md shadow-sm border hover:shadow-xl overflow-hidden
								-->
								<div class="h-52 w-full blog relative rounded-lg shadow-sm border hover:shadow-xl  lg:flex md:flex">
									<img class="object-cover w-full md:w-1/2 lg:w-1/3" src="<?php echo base_url() ?>assets/uploads/posts/<?php echo $post['image_url']; ?>" alt="image"/>

									<div class="px-6 py-4">
										<h4 class="mb-3 title h5 text-lg font-medium hover:text-primary-600 transition duration-500">
											<?php echo $post['title'] ?>
										</h4>
										<p class="mb-2 text-sm leading-normal text-justify text-sky-900">
											<?php echo substr($post['body'],"0", "100") . '...' ?>
										</p>
										<button
												class="
        px-4
        py-2
        text-sm
        shadow
        bg-sky-100
        shadow-sky-600
        text-sky-700
        hover:bg-sky-600 hover:text-sky-100">
											Read more
										</button>




									</div>
									<div class="px-4 pt-3 pb-4 border-t border-gray-300 bg-gray-100">
										<div class="text-xs uppercase font-bold text-gray-600 tracking-wide">Category </div>
										<div class="flex items-center pt-2">
											<div>
												<p class="font-bold text-gray-900"><?php echo $post['category_name'] ?></p>
											</div>
										</div>
									</div>
								</div>

								<!--
						<div style="height: 520px;" class="blog relative rounded-md shadow-sm border hover:shadow-xl overflow-hidden">
							<img style="min-height: 220px; max-height: 230px;" class="image mx-auto" src="<?php echo base_url() ?>assets/uploads/posts/<?php echo $post['image_url']; ?>" alt="">

							<div style="height: 220px;" class="content p-6">
								<a href="<?php echo base_url() ?>post/<?php echo $post['id'] ?>" class="title h5 text-lg font-medium hover:text-primary-600 transition duration-500"><?php echo $post['title'] ?></a>
								<p class="text-muted-400 mt-3"><?php echo substr($post['body'],"0", "50") . '...' ?></p>

								<div class="mt-4">
									<a href="<?php echo base_url() ?>post/<?php echo $post['id'] ?>" class="btn btn-link font-normal hover:text-primary-600 after:bg-primary-600 transition duration-500">Read More <i class="uil uil-arrow-right"></i></a>
								</div>
							</div>


							<div class="px-4 pt-3 pb-4 border-t border-gray-300 bg-gray-100">
								<div class="text-xs uppercase font-bold text-gray-600 tracking-wide">Category </div>
								<div class="flex items-center pt-2">
									<div>
										<p class="font-bold text-gray-900"><?php echo $post['category_name'] ?></p>
									</div>
								</div>
							</div>


						</div>
						-->
							</td>
						</tr>
					<?php endforeach; ?>

						</tbody>
					</table>


				</div><!--end grid-->

				<!--
				<div class="grid md:grid-cols-12 grid-cols-1 mt-8">
					<div class="md:col-span-12 text-center">
						<nav aria-label="Page navigation example">
							<ul class="inline-flex items-center -space-x-px">
								<li>
									<a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-muted-400 bg-white rounded-l-lg hover:text-white border border-slate-200 hover:border-primary-600 hover:bg-primary-600">
										<i class="uil uil-angle-left text-[20px]"></i>
									</a>
								</li>
								<li>
									<a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-muted-400 hover:text-white bg-white border border-slate-200 hover:border-primary-600 hover:bg-primary-600">1</a>
								</li>
								<li>
									<a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-muted-400 hover:text-white bg-white border border-slate-200 hover:border-primary-600 hover:bg-primary-600">2</a>
								</li>
								<li>
									<a href="#" aria-current="page" class="z-10 w-[40px] h-[40px] inline-flex justify-center items-center text-white bg-primary-600 border border-primary-600">3</a>
								</li>
								<li>
									<a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-muted-400 hover:text-white bg-white border border-slate-200 hover:border-primary-600 hover:bg-primary-600">4</a>
								</li>
								<li>
									<a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-muted-400 hover:text-white bg-white border border-slate-200 hover:border-primary-600 hover:bg-primary-600">5</a>
								</li>
								<li>
									<a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-muted-400 bg-white rounded-r-lg hover:text-white border border-slate-200 hover:border-primary-600 hover:bg-primary-600">
										<i class="uil uil-angle-right text-[20px]"></i>
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
				-->
				<!--end grid-->
			</div>


			<div class="lg:col-span-4 md:col-span-6 rounded-md">
				<div class="sticky top-20 shadow-md">

					<h5 class="text-lg font-semibold bg-primary-600 shadow rounded-t-md p-2 text-white text-center mt-1">Categorias</h5>

					<?php foreach ($categories as $category): ?>
					<div class="flex items-center mt-8 ml-2">
						<img src="<?php echo base_url() ?>assets/uploads/categories/<?php echo $category['category_image_url'] ?>" class="h-16 rounded-md shadow" alt="">

						<div class="ml-3">
							<a href="<?php echo base_url() ?>posts/category/<?php echo $category['category_id']; ?>" class="font-semibold hover:text-primary-600"><?php echo $category['category_name'] ?></a>
						</div>
					</div>
					<?php endforeach; ?>



					<h5 class="text-lg font-semibold bg-light-50 shadow rounded-md p-2 text-center mt-8 mb-8">Redes Sociales</h5>
					<ul class="list-none social-icon foot-social-icon text-center mt-8">
						<li class="inline"><a href="" class="btn btn-icon btn-sm border icon-border rounded-md text-muted-400 hover:border-primary-600 hover:text-white hover:bg-primary-600"><i data-feather="facebook" class="h-4 w-4"></i></a></li>
						<li class="inline"><a href="" class="btn btn-icon btn-sm border icon-border rounded-md text-muted-400 hover:border-primary-600 hover:text-white hover:bg-primary-600"><i data-feather="instagram" class="h-4 w-4"></i></a></li>
						<li class="inline"><a href="" class="btn btn-icon btn-sm border icon-border rounded-md text-muted-400 hover:border-primary-600 hover:text-white hover:bg-primary-600"><i data-feather="youtube" class="h-4 w-4"></i></a></li>
					</ul><!--end icon-->

					<div style="height: 25px;"></div>

				</div>
			</div>
		</div><!--end grid-->
	</div><!--end container-->

</section>



<!-- Start
<section class="py-20 w-full table relative" style="background: url('assets/images/team.jpg') top center no-repeat">
	<div class="absolute inset-0 bg-black/70"></div>
	<div class="container relative">
		<div class="grid grid-cols-1 text-center">
			<h3 class="mb-4 md:text-3xl text-2xl text-white font-medium">Stop leaving money on the table.</h3>

			<p class="text-white/70 max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>

			<a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="lightbox h-20 w-20 rounded-full inline-flex items-center justify-center bg-white text-primary-600 mx-auto mt-10">
				<i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
			</a>
		</div>
	</div>
</section>
End -->

<!-- Start
<section class="relative md:py-24 py-16">
	<div class="container">
		<div class="grid grid-cols-1 pb-8 text-center">
			<h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What Our Users Say</h3>

			<p class="text-muted-400 max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
		</div>

		<div class="grid grid-cols-1 mt-8">
			<div class="tiny-three-item">
				<div class="tiny-slide text-center">
					<div class="customer-testi">
						<div class="content relative rounded shadow m-2 p-6 bg-white">
							<i class="mdi mdi-format-quote-open mdi-48px text-primary-600"></i>
							<p class="text-muted-400">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. "</p>
							<ul class="list-none mb-0 text-warning-400 mt-3">
								<li class="inline"><i class="mdi mdi-star"></i></li>
								<li class="inline"><i class="mdi mdi-star"></i></li>
								<li class="inline"><i class="mdi mdi-star"></i></li>
								<li class="inline"><i class="mdi mdi-star"></i></li>
								<li class="inline"><i class="mdi mdi-star"></i></li>
							</ul>
						</div>

						<div class="text-center mt-5">
							<img src="<?php  echo base_url() ?>assets//images/client/01.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto" alt="">
							<h6 class="mt-2 fw-semibold text-dark">Calvin Carlo</h6>
							<span class="text-muted-400 text-sm">Manager</span>
						</div>
					</div>
				</div>

				<div class="tiny-slide text-center">
					<div class="customer-testi">
						<div class="content relative rounded shadow m-2 p-6 bg-white">
							<i class="mdi mdi-format-quote-open mdi-48px text-primary-600"></i>
							<p class="text-muted-400">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
							<ul class="list-none mb-0 text-warning-400 mt-3">
								<li class="inline"><i class="mdi mdi-star"></i></li>
								<li class="inline"><i class="mdi mdi-star"></i></li>
								<li class="inline"><i class="mdi mdi-star"></i></li>
								<li class="inline"><i class="mdi mdi-star"></i></li>
								<li class="inline"><i class="mdi mdi-star"></i></li>
							</ul>
						</div>

						<div class="text-center mt-5">
							<img src="<?php  echo base_url() ?>assets//images/client/02.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto" alt="">
							<h6 class="mt-2 fw-semibold text-dark">Christa Smith</h6>
							<span class="text-muted-400 text-sm">Manager</span>
						</div>
					</div>
				</div>

				<div class="tiny-slide text-center">
					<div class="customer-testi">
						<div class="content relative rounded shadow m-2 p-6 bg-white">
							<i class="mdi mdi-format-quote-open mdi-48px text-primary-600"></i>
							<p class="text-muted-400">" One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others. "</p>
							<ul class="list-none mb-0 text-warning-400 mt-3">
								<li class="inline"><i class="mdi mdi-star"></i></li>
								<li class="inline"><i class="mdi mdi-star"></i></li>
								<li class="inline"><i class="mdi mdi-star"></i></li>
								<li class="inline"><i class="mdi mdi-star"></i></li>
								<li class="inline"><i class="mdi mdi-star"></i></li>
							</ul>
						</div>

						<div class="text-center mt-5">
							<img src="<?php  echo base_url() ?>assets//images/client/03.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto" alt="">
							<h6 class="mt-2 fw-semibold text-dark">Jemina CLone</h6>
							<span class="text-muted-400 text-sm">Manager</span>
						</div>
					</div>
				</div>

				<div class="tiny-slide text-center">
					<div class="customer-testi">
						<div class="content relative rounded shadow m-2 p-6 bg-white">
							<i class="mdi mdi-format-quote-open mdi-48px text-primary-600"></i>
							<p class="text-muted-400">" Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. "</p>
							<ul class="list-none mb-0 text-warning-400 mt-3">
								<li class="inline"><i class="mdi mdi-star"></i></li>
								<li class="inline"><i class="mdi mdi-star"></i></li>
								<li class="inline"><i class="mdi mdi-star"></i></li>
								<li class="inline"><i class="mdi mdi-star"></i></li>
								<li class="inline"><i class="mdi mdi-star"></i></li>
							</ul>
						</div>

						<div class="text-center mt-5">
							<img src="<?php  echo base_url() ?>assets//images/client/04.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto" alt="">
							<h6 class="mt-2 fw-semibold text-dark">Smith Vodka</h6>
							<span class="text-muted-400 text-sm">Manager</span>
						</div>
					</div>
				</div>

				<div class="tiny-slide text-center">
					<div class="customer-testi">
						<div class="content relative rounded shadow m-2 p-6 bg-white">
							<i class="mdi mdi-format-quote-open mdi-48px text-primary-600"></i>
							<p class="text-muted-400">" There is now an abundance of readable dummy texts. These are usually used when a text is required. "</p>
							<ul class="list-none mb-0 text-warning-400 mt-3">
								<li class="inline"><i class="mdi mdi-star"></i></li>
								<li class="inline"><i class="mdi mdi-star"></i></li>
								<li class="inline"><i class="mdi mdi-star"></i></li>
								<li class="inline"><i class="mdi mdi-star"></i></li>
								<li class="inline"><i class="mdi mdi-star"></i></li>
							</ul>
						</div>

						<div class="text-center mt-5">
							<img src="<?php  echo base_url() ?>assets//images/client/05.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto" alt="">
							<h6 class="mt-2 fw-semibold text-dark">Cristino Murfi</h6>
							<span class="text-muted-400 text-sm">Manager</span>
						</div>
					</div>
				</div>

				<div class="tiny-slide text-center">
					<div class="customer-testi">
						<div class="content relative rounded shadow m-2 p-6 bg-white">
							<i class="mdi mdi-format-quote-open mdi-48px text-primary-600"></i>
							<p class="text-muted-400">" According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero. "</p>
							<ul class="list-none mb-0 text-warning-400 mt-3">
								<li class="inline"><i class="mdi mdi-star"></i></li>
								<li class="inline"><i class="mdi mdi-star"></i></li>
								<li class="inline"><i class="mdi mdi-star"></i></li>
								<li class="inline"><i class="mdi mdi-star"></i></li>
								<li class="inline"><i class="mdi mdi-star"></i></li>
							</ul>
						</div>

						<div class="text-center mt-5">
							<img src="<?php  echo base_url() ?>assets//images/client/06.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto" alt="">
							<h6 class="mt-2 fw-semibold text-dark">Cristino Murfi</h6>
							<span class="text-muted-400 text-sm">Manager</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> container-->

<!--
	<div class="container md:mt-24 mt-16">
		<div class="grid md:grid-cols-12 grid-cols-1 items-center">
			<div class="md:col-span-6">
				<h6 class="text-primary-600 text-sm font-bold uppercase mb-2">Blogs</h6>
				<h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Reads Our Latest <br> News & Blog</h3>
			</div>

			<div class="md:col-span-6">
				<p class="text-muted-400 max-w-xl">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
			</div>
		</div><

		<div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]">
			<div class="blog relative rounded-md shadow overflow-hidden">
				<img src="<?php  echo base_url() ?>assets//images/blog/01.jpg" alt="">

				<div class="content p-6">
					<a href="blog-detail.html" class="title h5 text-lg font-medium hover:text-primary-600 transition duration-500">Design your apps in your own way</a>
					<p class="text-muted-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>

					<div class="mt-4">
						<a href="blog-detail.html" class="btn btn-link font-normal hover:text-primary-600 after:bg-primary-600 transition duration-500">Read More <i class="uil uil-arrow-right"></i></a>
					</div>
				</div>
			</div>

			<div class="blog relative rounded-md shadow overflow-hidden">
				<img src="<?php  echo base_url() ?>assets//images/blog/02.jpg" alt="">

				<div class="content p-6">
					<a href="blog-detail.html" class="title h5 text-lg font-medium hover:text-primary-600 transition duration-500">How apps is changing the IT world</a>
					<p class="text-muted-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>

					<div class="mt-4">
						<a href="blog-detail.html" class="btn btn-link font-normal hover:text-primary-600 after:bg-primary-600 transition duration-500">Read More <i class="uil uil-arrow-right"></i></a>
					</div>
				</div>
			</div>

			<div class="blog relative rounded-md shadow overflow-hidden">
				<img src="<?php  echo base_url() ?>assets//images/blog/03.jpg" alt="">

				<div class="content p-6">
					<a href="blog-detail.html" class="title h5 text-lg font-medium hover:text-primary-600 transition duration-500">Smartest Applications for Business</a>
					<p class="text-muted-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>

					<div class="mt-4">
						<a href="blog-detail.html" class="btn btn-link font-normal hover:text-primary-600 after:bg-primary-600 transition duration-500">Read More <i class="uil uil-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
End -->

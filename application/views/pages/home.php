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


<!--
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
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>


	</div>
</section>
-->






<section class="relative md:py-24 py-16">
	<div class="container">
		<div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
			<div class="lg:col-span-8 md:col-span-6">
				<div class="grid lg:grid-cols-1 grid-cols-1 gap-[30px]">




					<table style="width: 100%" id="myTable" class="table table-responsive">
						<thead>
						<tr>
							<th scope="col"></th>
						</tr>
						</thead>
						<tbody>

					<?php foreach($posts as $post):?>

					<tr>
						<td>

							<div class="relative mx-auto w-full hover:shadow-xl mt-5">
								<a href="<?php echo base_url() ?>post/<?php echo $post['id'] ?>" class="relative inline-block duration-300 ease-in-out transition-transform transform hover:-translate-y-2 w-full">
									<div class="shadow p-4 rounded-lg bg-white">
										<div style="background-image: url('<?php echo base_url() ?>assets/uploads/posts/<?php echo $post['image_url']; ?>') ; background-size: cover; background-position: center center"  class="flex justify-center relative rounded-lg overflow-hidden h-52">
											<div class="transition-transform duration-500 transform ease-in-out hover:scale-110 w-full">
												<div class="absolute inset-0 bg-black opacity-10">

												</div>
											</div>

											<!--
											<div class="absolute flex justify-center bottom-0 mb-3">
												<div class="flex bg-white px-4 py-1 space-x-5 rounded-lg overflow-hidden shadow">
													<p class="flex items-center font-medium text-gray-800">
														<svg class="w-5 h-5 fill-current mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
															<path d="M480,226.15V80a48,48,0,0,0-48-48H80A48,48,0,0,0,32,80V226.15C13.74,231,0,246.89,0,266.67V472a8,8,0,0,0,8,8H24a8,8,0,0,0,8-8V416H480v56a8,8,0,0,0,8,8h16a8,8,0,0,0,8-8V266.67C512,246.89,498.26,231,480,226.15ZM64,192a32,32,0,0,1,32-32H208a32,32,0,0,1,32,32v32H64Zm384,32H272V192a32,32,0,0,1,32-32H416a32,32,0,0,1,32,32ZM80,64H432a16,16,0,0,1,16,16v56.9a63.27,63.27,0,0,0-32-8.9H304a63.9,63.9,0,0,0-48,21.71A63.9,63.9,0,0,0,208,128H96a63.27,63.27,0,0,0-32,8.9V80A16,16,0,0,1,80,64ZM32,384V266.67A10.69,10.69,0,0,1,42.67,256H469.33A10.69,10.69,0,0,1,480,266.67V384Z"></path></svg>
														3 + 1
													</p>

													<p class="flex items-center font-medium text-gray-800">
														<svg class="w-5 h-5 fill-current mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 512"><path d="M423.18 195.81l-24.94-76.58C387.51 86.29 356.81 64 322.17 64H157.83c-34.64 0-65.34 22.29-76.07 55.22L56.82 195.8C24.02 205.79 0 235.92 0 271.99V400c0 26.47 21.53 48 48 48h16c26.47 0 48-21.53 48-48v-16h256v16c0 26.47 21.53 48 48 48h16c26.47 0 48-21.53 48-48V271.99c0-36.07-24.02-66.2-56.82-76.18zm-310.99-66.67c6.46-19.82 24.8-33.14 45.64-33.14h164.34c20.84 0 39.18 13.32 45.64 33.13l20.47 62.85H91.72l20.47-62.84zM80 400c0 8.83-7.19 16-16 16H48c-8.81 0-16-7.17-16-16v-16h48v16zm368 0c0 8.83-7.19 16-16 16h-16c-8.81 0-16-7.17-16-16v-16h48v16zm0-80.01v32H32v-80c0-26.47 21.53-48 48-48h320c26.47 0 48 21.53 48 48v48zM104.8 248C78.84 248 60 264.8 60 287.95c0 23.15 18.84 39.95 44.8 39.95l10.14.1c39.21 0 45.06-20.1 45.06-32.08 0-24.68-31.1-47.92-55.2-47.92zm10.14 56c-3.51 0-7.02-.1-10.14-.1-12.48 0-20.8-6.38-20.8-15.95S92.32 272 104.8 272s31.2 14.36 31.2 23.93c0 7.17-10.53 8.07-21.06 8.07zm260.26-56c-24.1 0-55.2 23.24-55.2 47.93 0 11.98 5.85 32.08 45.06 32.08l10.14-.1c25.96 0 44.8-16.8 44.8-39.95 0-23.16-18.84-39.96-44.8-39.96zm0 55.9c-3.12 0-6.63.1-10.14.1-10.53 0-21.06-.9-21.06-8.07 0-9.57 18.72-23.93 31.2-23.93s20.8 6.38 20.8 15.95-8.32 15.95-20.8 15.95z"></path></svg>
														2
													</p>

													<p class="flex items-center font-medium text-gray-800">
														<svg class="w-5 h-5 fill-current mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M504,256H64V61.25a29.26,29.26,0,0,1,49.94-20.69L139.18,65.8A71.49,71.49,0,0,0,128,104c0,20.3,8.8,38.21,22.34,51.26L138.58,167a8,8,0,0,0,0,11.31l11.31,11.32a8,8,0,0,0,11.32,0L285.66,65.21a8,8,0,0,0,0-11.32L274.34,42.58a8,8,0,0,0-11.31,0L251.26,54.34C238.21,40.8,220.3,32,200,32a71.44,71.44,0,0,0-38.2,11.18L136.56,18A61.24,61.24,0,0,0,32,61.25V256H8a8,8,0,0,0-8,8v16a8,8,0,0,0,8,8H32v96c0,41.74,26.8,76.9,64,90.12V504a8,8,0,0,0,8,8h16a8,8,0,0,0,8-8V480H384v24a8,8,0,0,0,8,8h16a8,8,0,0,0,8-8V474.12c37.2-13.22,64-48.38,64-90.12V288h24a8,8,0,0,0,8-8V264A8,8,0,0,0,504,256ZM228.71,76.9,172.9,132.71A38.67,38.67,0,0,1,160,104a40,40,0,0,1,40-40A38.67,38.67,0,0,1,228.71,76.9ZM448,384a64.07,64.07,0,0,1-64,64H128a64.07,64.07,0,0,1-64-64V288H448Z"></path></svg>
														3
													</p>
												</div>
											</div>
-->
											<span class="absolute top-0 left-0 inline-flex mt-3 ml-3 px-3 py-2 rounded-lg z-10 bg-red-500 text-sm font-medium text-white select-none">
			<?php echo $post['category_name'] ?>
		  </span>
										</div>

										<div class="mt-4">
											<h2 class="font-medium text-base md:text-lg text-gray-800 line-clamp-1" title="New York">
												<?php echo $post['title'] ?>
											</h2>
											<p class="mt-2 text-sm text-gray-800 " title="<?php echo $post['title'] ?>">
												<?php echo substr($post['body'],"0", "200") . '...' ?>

											</p>
										</div>




										<div class="grid grid-cols-2 mt-8">
											<div class="flex items-center">
												<div class="relative">
													<div style="background-image: url('<?php echo base_url() ?>assets/uploads/users/<?php echo $post['profile_image']; ?>'); background-size: cover; background-position: center center" class="rounded-full w-6 h-6 md:w-8 md:h-8 bg-gray-200"></div>
													<span class="absolute top-0 right-0 inline-block w-3 h-3 bg-primary-red rounded-full"></span>
												</div>

												<p class="ml-2 text-gray-800 line-clamp-1">
													<?php echo $post['username'] ?>
												</p>
											</div>

											<div class="flex justify-end">
												<p class="inline-block font-semibold text-primary whitespace-nowrap leading-tight rounded-xl">
													<span class="text-sm">Creado:<?php echo date_format(date_create($post['created_at']),'d/m/Y')  ?></span>
												</p>
											</div>
										</div>
									</div>
								</a>
							</div>								<!--
								blog relative rounded-md shadow-sm border hover:shadow-xl overflow-hidden

								<a href="<?php echo base_url() ?>post/<?php echo $post['id'] ?>">
								<div class="h-52 w-full blog relative rounded-lg shadow-sm border hover:shadow-xl  lg:flex md:flex overflow-hidden">

									<img class="object-cover w-full  md:w-1/3 lg:w-1/3" src="<?php echo base_url() ?>assets/uploads/posts/<?php echo $post['image_url']; ?>" alt="image"/>

									<div class="px-6 py-4">
										<h4 class="mb-3 title h5 text-lg font-bold hover:text-primary-600 transition duration-500">
											<?php echo $post['title'] ?>
										</h4>
										<p class="mb-2 text-sm leading-normal text-justify">
											<?php echo substr($post['body'],"0", "100") . '...' ?>
										</p>
										<p class=" mt-3  text-sm  leading-normal text-justify right">
											Publicado en: <b class="text-primary-600"><?php echo $post['category_name'] ?> </b>
											<br>Autor: <span class="text-primary-600"><?php echo $post['username'] ?></span>
											Fecha: <span class="text-primary-600"><?php echo date_format(date_create($post['created_at']),'d/m/Y')  ?></span>
										</p>




									</div>
								</div>
								</a>

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

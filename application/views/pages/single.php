<!-- Start Hero -->
<section class="relative table w-full py-36 pb-0 lg:py-44 lg:pb-0 bg-primary-600" style="background: url('assets/images/bg2.png') center center no-repeat;">
	<div class="container">
		<div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
			<div class="lg:col-span-7">
				<div class="md:mr-6 md:mb-20 mt-20">
					<h4 class="font-semibold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 text-white"><?php echo $post['title'] ?> <br> </h4>
					<h6 class="font-semibold lg:leading-normal leading-normal mb-5 text-white"><?php echo $post['category_name'] ?> </h6>

					<p class="font-medium lg:leading-normal leading-normal mb-5 text-white">Fecha de publicación: <?php echo date_format(date_create($post['created_at']),"d/m/Y")  ?> <br> </p>


					<!--
					<p class="text-white/60 text-lg max-w-xl">Con FunLab podras aprender de una forma divertida, replica nuestros experimentos o sube tus propios experimentos!</p>
					-->
					<br><br><br>
					<div class="mt-6">
						<a href="<?php echo base_url() ?>" class="btn btn-light rounded-md mr-2 mt-2 shadow-md"><i class="uil uil-backward "></i> Regresar</a>
					</div>

				</div>
			</div><!--end col-->

			<div class="lg:col-span-5 mt-8 md:mt-0">
				<img class="rounded-lg" src="<?php  echo base_url() ?>assets/uploads/posts/<?php echo $post['image_url'] ?>" alt="">
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
<section class="relative md:py-24 py-16">
	<div class="container">
		<div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
			<div class="lg:col-span-8 md:col-span-6">
				<div class="p-6 rounded-md shadow">

					<img src="<?php echo base_url() ?>assets/uploads/posts/<?php echo $post['image_url'] ?>" class="rounded-md" alt="">

					<div class="mt-6">
						<p class="text-muted-400">
							<b>Que esta sucediendo?</b><br>
							<?php echo $post['body']; ?>
						</p>
					</div>
				</div>

				<div class="p-6 rounded-md shadow mt-8">
					<h5 class="text-lg font-semibold">Paso a paso:</h5>
					<?php echo $post['steps']; ?>
				</div>

				<!--
				<div class="p-6 rounded-md shadow mt-8">
					<h5 class="text-lg font-semibold">Leave A Comment:</h5>

					<form class="mt-8">
						<div class="grid lg:grid-cols-12 lg:gap-6">
							<div class="lg:col-span-6 mb-5">
								<div class="text-left">
									<label for="name" class="font-semibold">Your Name:</label>
									<div class="form-icon relative mt-2">
										<i data-feather="user" class="w-4 h-4 absolute top-3 left-4"></i>
										<input name="name" id="name" type="text" class="form-input pl-11" placeholder="Name :">
									</div>
								</div>
							</div>

							<div class="lg:col-span-6 mb-5">
								<div class="text-left">
									<label for="email" class="font-semibold">Your Email:</label>
									<div class="form-icon relative mt-2">
										<i data-feather="mail" class="w-4 h-4 absolute top-3 left-4"></i>
										<input name="email" id="email" type="email" class="form-input pl-11" placeholder="Email :">
									</div>
								</div>
							</div>
						</div>

						<div class="grid grid-cols-1">
							<div class="mb-5">
								<div class="text-left">
									<label for="comments" class="font-semibold">Your Comment:</label>
									<div class="form-icon relative mt-2">
										<i data-feather="message-circle" class="w-4 h-4 absolute top-3 left-4"></i>
										<textarea name="comments" id="comments" class="form-input pl-11 textarea" placeholder="Message :">

										</textarea>
									</div>
								</div>
							</div>
						</div>
						<button type="submit" id="submit" name="send" class="btn btn-primary rounded-md w-full">Send Message</button>
					</form>
				</div>
				-->
			</div>

			<div class="lg:col-span-4 md:col-span-6">
				<div class="sticky top-20">
					<h5 class="text-lg font-semibold bg-light-50 shadow rounded-md p-2 text-center">Author</h5>
					<div class="text-center mt-8">
						<img src="assets/images/client/05.jpg" class="h-24 w-24 mx-auto rounded-full shadow mb-4" alt="">

						<a href="" class="text-lg font-semibold hover:text-primary-600 transition-all duration-500 ease-in-out">Cristina Romsey</a>
						<p class="text-muted-400">Content Writer</p>
					</div>

					<h5 class="text-lg font-semibold bg-light-50 shadow rounded-md p-2 text-center mt-8">Relacionados</h5>

					<?php foreach ($relateds as $related): ?>
						<div class="flex items-center mt-8 ml-2">
							<img src="<?php echo base_url() ?>assets/uploads/posts/<?php echo $related['image_url'] ?>" class="h-16 rounded-md shadow" alt="">

							<div class="ml-3">
								<a href="<?php echo base_url() ?>posts/category/<?php echo $related['id']; ?>" class="font-semibold hover:text-primary-600"><?php echo $related['title'] ?></a>
							</div>
						</div>
					<?php endforeach; ?>



					<!--
					<h5 class="text-lg font-semibold bg-light-50 shadow rounded-md p-2 text-center mt-8">Social sites</h5>
					<ul class="list-none social-icon foot-social-icon text-center mt-8">
						<li class="inline"><a href="" class="btn btn-icon btn-sm border icon-border rounded-md text-muted-400 hover:border-primary-600 hover:text-white hover:bg-primary-600"><i data-feather="facebook" class="h-4 w-4"></i></a></li>
						<li class="inline"><a href="" class="btn btn-icon btn-sm border icon-border rounded-md text-muted-400 hover:border-primary-600 hover:text-white hover:bg-primary-600"><i data-feather="instagram" class="h-4 w-4"></i></a></li>
						<li class="inline"><a href="" class="btn btn-icon btn-sm border icon-border rounded-md text-muted-400 hover:border-primary-600 hover:text-white hover:bg-primary-600"><i data-feather="twitter" class="h-4 w-4"></i></a></li>
						<li class="inline"><a href="" class="btn btn-icon btn-sm border icon-border rounded-md text-muted-400 hover:border-primary-600 hover:text-white hover:bg-primary-600"><i data-feather="linkedin" class="h-4 w-4"></i></a></li>
						<li class="inline"><a href="" class="btn btn-icon btn-sm border icon-border rounded-md text-muted-400 hover:border-primary-600 hover:text-white hover:bg-primary-600"><i data-feather="github" class="h-4 w-4"></i></a></li>
						<li class="inline"><a href="" class="btn btn-icon btn-sm border icon-border rounded-md text-muted-400 hover:border-primary-600 hover:text-white hover:bg-primary-600"><i data-feather="youtube" class="h-4 w-4"></i></a></li>
						<li class="inline"><a href="" class="btn btn-icon btn-sm border icon-border rounded-md text-muted-400 hover:border-primary-600 hover:text-white hover:bg-primary-600"><i data-feather="gitlab" class="h-4 w-4"></i></a></li>
					</ul>
						-->

					<!--
					<h5 class="text-lg font-semibold bg-light-50 shadow rounded-md p-2 text-center mt-8">Tagscloud</h5>
					<ul class="list-none text-center mt-8">
						<li class="inline-block m-2"><a href="" class="px-3 py-1 text-muted-400 hover:text-white bg-light-50 text-sm hover:bg-primary-600 rounded-md shadow transition-all duration-500 ease-in-out">Business</a></li>
						<li class="inline-block m-2"><a href="" class="px-3 py-1 text-muted-400 hover:text-white bg-light-50 text-sm hover:bg-primary-600 rounded-md shadow transition-all duration-500 ease-in-out">Finance</a></li>
						<li class="inline-block m-2"><a href="" class="px-3 py-1 text-muted-400 hover:text-white bg-light-50 text-sm hover:bg-primary-600 rounded-md shadow transition-all duration-500 ease-in-out">Marketing</a></li>
						<li class="inline-block m-2"><a href="" class="px-3 py-1 text-muted-400 hover:text-white bg-light-50 text-sm hover:bg-primary-600 rounded-md shadow transition-all duration-500 ease-in-out">Fashion</a></li>
						<li class="inline-block m-2"><a href="" class="px-3 py-1 text-muted-400 hover:text-white bg-light-50 text-sm hover:bg-primary-600 rounded-md shadow transition-all duration-500 ease-in-out">Bride</a></li>
						<li class="inline-block m-2"><a href="" class="px-3 py-1 text-muted-400 hover:text-white bg-light-50 text-sm hover:bg-primary-600 rounded-md shadow transition-all duration-500 ease-in-out">Lifestyle</a></li>
						<li class="inline-block m-2"><a href="" class="px-3 py-1 text-muted-400 hover:text-white bg-light-50 text-sm hover:bg-primary-600 rounded-md shadow transition-all duration-500 ease-in-out">Travel</a></li>
						<li class="inline-block m-2"><a href="" class="px-3 py-1 text-muted-400 hover:text-white bg-light-50 text-sm hover:bg-primary-600 rounded-md shadow transition-all duration-500 ease-in-out">Beauty</a></li>
						<li class="inline-block m-2"><a href="" class="px-3 py-1 text-muted-400 hover:text-white bg-light-50 text-sm hover:bg-primary-600 rounded-md shadow transition-all duration-500 ease-in-out">Video</a></li>
						<li class="inline-block m-2"><a href="" class="px-3 py-1 text-muted-400 hover:text-white bg-light-50 text-sm hover:bg-primary-600 rounded-md shadow transition-all duration-500 ease-in-out">Audio</a></li>
					</ul>
					-->


				</div>
			</div>
		</div><!--end grid-->
	</div><!--end container-->
</section>


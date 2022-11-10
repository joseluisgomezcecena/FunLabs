<!-- Breadcrumb -->

<section class="breadcrumb">
	<h1><?= $title ?></h1>
	<ul>
		<li><a href="#">Pages</a></li>
		<li class="divider la la-arrow-right"></li>
		<li><a href="#">Blog</a></li>
		<li class="divider la la-arrow-right"></li>
		<li>Add Post</li>
	</ul>
</section>

<?php // echo form_open('posts/create')?>

<div class="grid lg:grid-cols-4 gap-5">

	<!-- Content -->
	<?php  echo validation_errors(); ?>

	<div class="lg:col-span-2 xl:col-span-3">
		<div class="card p-5">

			<div class="mb-5 xl:w-1/2">
				<label class="label block mb-2" for="title">Title</label>
				<input id="title" name="title" type="text" class="form-control" value="<?php echo $post['title'] ?>" readonly>
			</div>
			<div class="mb-5 xl:w-1/2">
				<label class="label block mb-2" for="slug">Slug</label>
				<input id="slug" type="text" class="form-control" value="<?php echo $post['slug'] ?>" readonly>
			</div>
			<div class="mb-5">
				<label class="label block mb-2" for="content">Content</label>
				<textarea id="content" name="body" class="form-control" rows="16" readonly><?php echo $post['body'] ?></textarea>
				<hr>
				<h2>Add Comment</h2>
				<?php echo form_open('comments/create/' . $post['id']) ?>
					<div class="mb-5 xl:w-1/2">


						<input type="hidden" name="id" value="<?php echo $post['id'] ?>">
						<label class="label block mb-2" for="title">Name</label>
						<input id="title" name="name" class="form-control" >
					</div>
					<div class="mb-5 xl:w-1/2">
						<label class="label block mb-2" for="title">Email</label>
						<input id="title" name="email" type="email" class="form-control">
					</div>
					<div class="mb-5 xl:w-1/2">
						<label class="label block mb-2" for="title">Comment</label>
						<textarea id="title" name="comment"  class="form-control"></textarea>
					</div>

					<button class="btn btn_primary uppercase" type="submit" name="submit">Submit</button>
				</form>
			</div>
			<!--
			<div class="xl:w-1/2">
				<label class="label block mb-2" for="excerpt">Excerpt</label>
				<textarea id="excerpt" class="form-control" rows="8"></textarea>
			</div>
			-->
		</div>
	</div>

	<div class="flex flex-col gap-y-5 lg:col-span-2 xl:col-span-1">

		<!-- Publish -->
		<div class="card p-5 flex flex-col gap-y-5">
			<h3>Publish</h3>
			<div class="flex items-center">
				<!--
				<div class="w-1/4">
					<label class="label block">Status</label>
				</div>
				<div class="w-3/4 ml-2">
					<div class="custom-select">
						<select class="form-control">
							<option>Draft</option>
							<option>Option</option>
						</select>
						<div class="custom-select-icon la la-caret-down"></div>
					</div>
				</div>
				-->
			</div>
			<div class="flex items-center">
				<div class="w-1/4">
					<label class="label block">Visibility</label>
				</div>
				<div class="w-3/4 ml-2">
					<div class="custom-select">
						<select class="form-control" name="visibility" disabled>
							<option <?php if($post['visibility'] == 1){echo "selected";}else{echo "";} ?> value="1">Public</option>
							<option <?php if($post['visibility'] == 0){echo "selected";}else{echo "";} ?> value="0">Private</option>
						</select>
						<div class="custom-select-icon la la-caret-down"></div>
					</div>
				</div>
			</div>
			<div class="flex items-center">
				<div class="w-1/4">
					<label class="label block">Publish</label>
				</div>
				<div class="w-3/4 ml-2">
					<label class="label switch">
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
					</label>
				</div>
			</div>
			<div class="flex flex-wrap gap-2 mt-5">
				<a href="<?php echo base_url() ?>posts/edit/<?php echo $post['id'] ?>" class="btn btn_primary uppercase">Edit</a>
				<a href="<?php echo base_url() ?>posts/delete/<?php echo $post['id'] ?>" class="btn btn_outlined btn_danger uppercase">Delete</a>
			</div>
		</div>

		<!-- Categories -->
		<div class="card p-5">
			<h3>Categories</h3>
			<div class="tabs">
				<nav class="tab-nav mt-5">
					<button class="nav-link h5 uppercase active" data-toggle="tab" data-target="#tab-1">
						Categories
					</button>

				</nav>
				<div class="tab-content mt-5">
					<div id="tab-1" class="collapse open flex flex-col gap-y-2">

						<label class="custom-checkbox">
							<input type="checkbox" checked>
							<span></span>
							<span><?php echo $post['category_name'] ?></span>
						</label>

					</div>
					<!--
					<div id="tab-2" class="collapse flex flex-col gap-y-2">
						<label class="custom-checkbox">
							<input type="checkbox" checked>
							<span></span>
							<span>Uncategorized</span>
						</label>
						<label class="custom-checkbox">
							<input type="checkbox">
							<span></span>
							<span>Recent</span>
						</label>
						<label class="custom-checkbox">
							<input type="checkbox">
							<span></span>
							<span>Featured</span>
						</label>
						<label class="custom-checkbox">
							<input type="checkbox">
							<span></span>
							<span>Trending</span>
						</label>
						<label class="custom-checkbox">
							<input type="checkbox">
							<span></span>
							<span>International</span>
						</label>
					</div>
					-->
				</div>
			</div>
		</div>

		<!-- Tags
		<div class="card p-5">
			<h3>Tags</h3>
				<label class="form-control-addon-within flex-row-reverse">
					<input type="text" class="form-control ltr:pl-2 rtl:pr-2 border-none w-full"
						   placeholder="Enter a tag">
					<span class="flex items-center ltr:pl-4 rtl:pr-4">
								<span class="badge badge_primary">
									tag
									<button type="button" class="ltr:ml-1 rtl:mr-1 la la-times"></button>
								</span>
							</span>
				</label>
				<small class="block mt-2">Seperate tags with commas</small>
		</div>
		-->
		<!-- Featured Image -->
		<div class="card p-5">
			<h3>Featured Image</h3>
			<img class="image" src="<?php echo base_url() . 'assets/uploads/posts/' . $post['image_url'] ?>" />
			<!--
			<button class="mt-5 btn btn_outlined btn_secondary uppercase">Browse</button>
			-->
		</div>
	</div>
</div>
<!--
</form>
-->

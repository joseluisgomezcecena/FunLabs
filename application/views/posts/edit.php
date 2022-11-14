<!-- Breadcrumb -->

<section class="breadcrumb">
	<h1>Posts</h1>
	<ul>
		<li><a href="#">Pages</a></li>
		<li class="divider la la-arrow-right"></li>
		<li><a href="#">Blog</a></li>
		<li class="divider la la-arrow-right"></li>
		<li>Edit <?= $title ?></li>
	</ul>
</section>

<?php
$attributes = array('id' => 'createform');
echo form_open_multipart(base_url() . "posts/edit/{$post['id']}", $attributes)
?>

<div class="grid lg:grid-cols-4 gap-5">

	<!-- Content -->

	<input type="hidden" name="id" value="<?php echo $post['id'] ?>">

	<div class="lg:col-span-2 xl:col-span-3">
		<div class="card p-5">

			<div class="mb-2">
				<?php echo validation_errors(); ?>
			</div>

			<div class="mb-5 xl:w-1/2">
				<label class="label block mb-2" for="title">Title</label>
				<input id="title" name="title" type="text" class="form-control" value="<?php echo $post['title'] ?>" >
			</div>
			<div class="mb-5 xl:w-1/2">
				<label class="label block mb-2" for="slug">Slug</label>
				<input id="slug" type="text" class="form-control bg-[#D1D5DB]" value="<?php echo $post['slug'] ?>" readonly>
			</div>
			<div class="mb-5">
				<label class="label block mb-2" for="content">Content</label>
				<textarea id="content" name="body" class="form-control" rows="5"><?php echo $post['body'] ?></textarea>
			</div>
			<div class="mb-5">
				<label class="label block mb-2" for="content">Pasos para replicar tu experimento</label>
			</div>
			<div id="editor">
				<?php echo $post['steps']; ?><br><br><br><br><br><br><br><br><br><br><br><br><br/>
			</div>

		</div>
	</div>

	<div class="flex flex-col gap-y-5 lg:col-span-2 xl:col-span-1">

		<!-- Publish -->
		<div class="card p-5 flex flex-col gap-y-5">
			<h3>Acciones</h3>
			<div class="flex items-center">

			</div>

			<div class="flex items-center">
				<!--
				<div class="w-1/4">
					<label class="label block">Publicar</label>
				</div>
				-->
				<!--
				<div class="w-3/4 ml-2">
					<label class="label switch">
						<input type="checkbox" name="status" value="1" checked>
						<span></span>
						<span>Inmediatamente</span>
					</label>
				</div>
				-->
			</div>
			<div class="flex flex-wrap gap-2 mt-5">
				<button type="submit" name="submit" class="btn btn_primary uppercase">Guardar Cambios</button>
				<!--
				<button class="btn btn_outlined btn_secondary uppercase">Save Draft</button>
				-->
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

						<?php foreach ($categories as $category): ?>
							<label class="custom-checkbox">
								<input <?php if($post['category_id'] == $category['category_id']){echo 'checked';} ?> type="checkbox" name="category[]" value="<?php echo $category['category_id'] ?>">
								<span></span>
								<span><?php echo $category['category_name'] ?></span>
							</label>
						<?php endforeach; ?>


						<!--
						<label class="custom-checkbox">
							<input type="checkbox" checked>
							<span></span>
							<span>Uncategorized</span>
						</label>
						-->
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

				<div class="mt-5 btn btn_outlined btn_secondary uppercase" onclick="browse()">Elegir Imagen</div>

		</div>
	</div>
</div>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>

	$("input:checkbox").on('click', function() {
		// in the handler, 'this' refers to the box clicked on
		var $box = $(this);
		if ($box.is(":checked")) {
			// the name of the box is retrieved using the .attr() method
			// as it is assumed and expected to be immutable
			var group = "input:checkbox[name='" + $box.attr("name") + "']";
			// the checked state of the group/box on the other hand will change
			// and the current value is retrieved using .prop() method
			$(group).prop("checked", false);
			$box.prop("checked", true);
		} else {
			$box.prop("checked", false);
		}
	});

	$(document).ready(function(){
		$("#createform").on("submit", function () {
			var hvalue = $('.ql-editor').html();
			$(this).append("<textarea name='steps' style='display:none'>"+hvalue+"</textarea>");
		});
	})



	function browse() {
		document.getElementById("myfile").click();
	}


	document.getElementById('myfile').addEventListener('change', function(){
		if (this.files[0] ) {
			var picture = new FileReader();
			picture.readAsDataURL(this.files[0]);
			picture.addEventListener('load', function(event) {
				document.getElementById('image').setAttribute('src', event.target.result);
				document.getElementById('image').style.display = 'block';
			});
		}
	});



</script>


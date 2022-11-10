<!-- Breadcrumb -->
<section class="breadcrumb">
	<h1><?= $title ?></h1>
	<ul>
		<li><a href="#">UI</a></li>
		<li class="divider la la-arrow-right"></li>
		<li><a href="#">Form</a></li>
		<li class="divider la la-arrow-right"></li>
		<li><?= $title ?></li>
	</ul>
</section>

<div class="grid lg:grid-cols-1 gap-5">
	<div class="flex flex-col gap-y-5 lg:col-span-1">

		<!-- Basic -->
		<div class="card p-5">
			<h3>Delete this post</h3>
			<div class="input-group mt-5">
				<p>
					Are you sure you want to delete this post? <br>
					Title: <b><?php echo $post['title']; ?></b>
				</p>
				<img class="image" src="<?php echo base_url() . 'assets/uploads/posts/' . $post['image_url'] ?>">
			</div>
			<div class="input-group mt-5">
				<?php echo form_open("posts/delete/{$post['id']}") ?>
					<input type="hidden" name="id" value="<?php echo $post['id'] ?>">
					<button type="submit" name="delete" class="btn btn_danger uppercase">Delete</button>
				</form>
			</div>
		</div>

	</div>
</div>

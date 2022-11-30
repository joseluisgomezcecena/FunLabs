<div class="container flex items-center justify-center  py-10">
	<div class="w-full md:w-1/2 xl:w-1/3">
		<div class="mx-5 md:mx-10">
			<h2 class="uppercase">Bienvenido a Ciencia Book!</h2>
			<h4 class="uppercase">Recupera tu contraseña</h4>
		</div>


		<?php if($this->session->flashdata('sent')): ?>

			<div class="alert alert_outlined alert_success mb-5 mt-5">
				<strong class="uppercase"><bdi>Contraseña Actualizada</bdi></strong>
				<?php echo $this->session->flashdata('sent') ?>.
				<button type="button" class="dismiss la la-times" data-dismiss="alert"></button>
			</div>

		<?php endif; ?>



		<?php if($this->session->flashdata('error')): ?>

			<div class="alert alert_outlined alert_success mb-5 mt-5">
				<strong class="uppercase"><bdi>Error</bdi></strong>
				<?php echo $this->session->flashdata('error') ?>.
				<button type="button" class="dismiss la la-times" data-dismiss="alert"></button>
			</div>

		<?php endif; ?>


		<div class="card mt-5 p-5 md:p-10">

			<?php echo validation_errors(); ?>




			<?php echo form_open(base_url() . 'forgot') ?>
				<div class="mb-5">
					<label class="label block mb-2" for="email">Tu Correo Electronico</label>
					<input id="email" type="email" name="email" class="form-control" placeholder="example@example.com">
				</div>

				<div class="flex items-center">
					<button type="submit" class="btn btn_primary ltr:ml-auto rtl:mr-auto uppercase">Recuperar Contraseña</button>
				</div>

			</form>
		</div>

		<br><a href="<?php echo base_url() ?>"> 🔙 Volver al inicio</a>
	</div>
</div>

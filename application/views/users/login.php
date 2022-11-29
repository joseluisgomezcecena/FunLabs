<div class="container flex items-center justify-center  py-10">
	<div class="w-full md:w-1/2 xl:w-1/3">
		<div class="mx-5 md:mx-10">
			<h2 class="uppercase">Bienvenido a Ciencia Book!</h2>
			<h4 class="uppercase">Ingresa aqui</h4>
		</div>
		<div class="card mt-5 p-5 md:p-10">

			<?php echo form_open('users/login') ?>
				<div class="mb-5">
					<label class="label block mb-2" for="email">Usuario</label>
					<input id="email" type="text" name="username" class="form-control" placeholder="example@example.com">
				</div>
				<div class="mb-5">
					<label class="label block mb-2" for="password">Contraseña</label>
					<label class="form-control-addon-within">
						<input id="password" type="password" name="password" class="form-control border-none" value="12345">
						<span class="flex items-center ltr:pr-4 rtl:pl-4">
                            <button type="button"
									class="btn btn-link text-gray-300 dark:text-gray-700 la la-eye text-xl leading-none"
									data-toggle="password-visibility"></button>
                        </span>
					</label>
				</div>
				<div class="flex items-center">
					<a href="<?php echo base_url() ?>forgot" class="text-sm uppercase">Olvidaste tu contraseña?</a>
					<button type="submit" class="btn btn_primary ltr:ml-auto rtl:mr-auto uppercase">Iniciar Sesión</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php if($this->session->userdata('logged_in'))
{
	$user_info = $this->session->userdata('user_id');
}
else
{
	redirect(base_url() . 'users/login');
}

?>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<title>CienciaBook - Ciencia y Diversión</title>


	<!-- Generics -->
	<link rel="icon" href="<?php echo base_url() ?>/assets/images/favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" href="<?php echo base_url() ?>/assets/images/favicon/favicon-32x32.png" sizes="128x128">
	<link rel="icon" href="<?php echo base_url() ?>/assets/images/favicon/favicon-32x32.png" sizes="192x192">

	<!-- Android -->
	<link rel="shortcut icon" href="<?php echo base_url() ?>/assets/images/favicon/android-chrome-192x192.png" sizes="196x196">

	<!-- iOS -->
	<link rel="apple-touch-icon" href="<?php echo base_url() ?>/assets/images/favicon/apple-touch-icon.png" sizes="152x152">
	<link rel="apple-touch-icon" href="<?php echo base_url() ?>/assets/images/favicon/apple-touch-icon.png" sizes="167x167">
	<link rel="apple-touch-icon" href="<?php echo base_url() ?>/assets/images/favicon/apple-touch-icon.png" sizes="180x180">

	<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style.css" />


	<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

	<link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">


	<style>
		th{
			border: 0 !important;
		}
		tbody{
			border: 0 !important;
		}
		table{
			border: 0 !important;
		}

		input[type="search"] {
			border: 1px solid #c9c9c9 !important;
			background-color: white !important;
			border-radius: 9999px !important;
			box-shadow: 2px 2px 2px #a4a2a2 !important;
			width: 250px !important;
		}

		.dataTables_wrapper .dataTables_length select {
			background-color: white !important;
			box-shadow: 1px 1px 1px #a4a2a2 !important;
		}

		table.dataTable thead>tr>th.sorting_asc:before,
		table.dataTable thead>tr>th.sorting_desc:after, table.dataTable thead>tr>td.sorting_asc:before, table.dataTable thead>tr>td.sorting_desc:after
		{
			display: none !important;
		}
		table.dataTable thead>tr>th.sorting:after, table.dataTable thead>tr>th.sorting_asc:after, table.dataTable thead>tr>th.sorting_desc:after, table.dataTable thead>tr>th.sorting_asc_disabled:after, table.dataTable thead>tr>th.sorting_desc_disabled:after, table.dataTable thead>tr>td.sorting:after, table.dataTable thead>tr>td.sorting_asc:after, table.dataTable thead>tr>td.sorting_desc:after, table.dataTable thead>tr>td.sorting_asc_disabled:after, table.dataTable thead>tr>td.sorting_desc_disabled:after
		{
			display: none;
		}

	</style>


</head>

<body>

<!-- Top Bar -->
<header class="top-bar">

	<!-- Menu Toggler -->
	<button type="button" class="menu-toggler la la-bars" data-toggle="menu"></button>

	<!-- Brand -->
	<span class="brand">Ciencia Book</span>

	<!-- Search
	<form class="hidden md:block ltr:ml-10 rtl:mr-10" action="#">
		<label class="form-control-addon-within rounded-full">
			<input type="text" class="form-control border-none" placeholder="Search">
			<button type="button"
					class="btn btn-link text-gray-300 dark:text-gray-700 dark:hover:text-primary text-xl leading-none la la-search ltr:mr-4 rtl:ml-4"></button>
		</label>
	</form>
-->
	<!-- Right -->
	<div class="flex items-center ltr:ml-auto rtl:mr-auto">


		<?php
		if($this->session->userdata('logged_in')):
		?>

			<!-- Dark Mode -->
			<label class="switch switch_outlined" data-toggle="tooltip" data-tippy-content="Cambiar A Modo Obscuro">
				<input id="darkModeToggler" type="checkbox">
				<span></span>
			</label>

			<!-- Fullscreen -->
			<button id="fullScreenToggler" type="button"
					class="hidden lg:inline-block btn-link ltr:ml-3 rtl:mr-3 px-2 text-2xl leading-none la la-expand-arrows-alt"
					data-toggle="tooltip" data-tippy-content="Pantalla Completa"></button>

			<!-- Apps
			<div class="dropdown self-stretch">
				<button type="button"
						class="flex items-center h-full btn-link ltr:ml-4 rtl:mr-4 lg:ltr:ml-1 lg:rtl:mr-1 px-2 text-2xl leading-none la la-box"
						data-toggle="custom-dropdown-menu" data-tippy-arrow="true" data-tippy-placement="bottom">
				</button>
				<div class="custom-dropdown-menu p-5 text-center">
					<div class="flex justify-around">
						<a href="#" class="p-5 text-normal hover:text-primary">
							<span class="block la la-cog text-5xl leading-none"></span>
							<span>Settings</span>
						</a>
						<a href="#" class="p-5 text-normal hover:text-primary">
							<span class="block la la-users text-5xl leading-none"></span>
							<span>Users</span>
						</a>
					</div>
					<div class="flex justify-around">
						<a href="#" class="p-5 text-normal hover:text-primary">
							<span class="block la la-book text-5xl leading-none"></span>
							<span>Docs</span>
						</a>
						<a href="#" class="p-5 text-normal hover:text-primary">
							<span class="block la la-dollar text-5xl leading-none"></span>
							<span>Shop</span>
						</a>
					</div>
				</div>
			</div>
			-->

			<!-- Notifications
			<div class="dropdown self-stretch">
				<button type="button"
						class="relative flex items-center h-full btn-link ltr:ml-1 rtl:mr-1 px-2 text-2xl leading-none la la-bell"
						data-toggle="custom-dropdown-menu" data-tippy-arrow="true" data-tippy-placement="bottom-end">
                    <span
							class="absolute top-0 right-0 rounded-full border border-primary -mt-1 -mr-1 px-2 leading-tight text-xs font-body text-primary">3</span>
				</button>
				<div class="custom-dropdown-menu">
					<div class="flex items-center px-5 py-2">
						<h5 class="mb-0 uppercase">Notifications</h5>
						<button class="btn btn_outlined btn_warning uppercase ltr:ml-auto rtl:mr-auto">Clear All</button>
					</div>
					<hr>
					<div class="p-5 hover:bg-primary hover:bg-opacity-5">
						<a href="#">
							<h6 class="uppercase">Heading One</h6>
						</a>
						<p>Lorem ipsum dolor, sit amet consectetur.</p>
						<small>Today</small>
					</div>
					<hr>
					<div class="p-5 hover:bg-primary hover:bg-opacity-5">
						<a href="#">
							<h6 class="uppercase">Heading Two</h6>
						</a>
						<p>Mollitia sequi dolor architecto aut deserunt.</p>
						<small>Yesterday</small>
					</div>
					<hr>
					<div class="p-5 hover:bg-primary hover:bg-opacity-5">
						<a href="#">
							<h6 class="uppercase">Heading Three</h6>
						</a>
						<p>Nobis reprehenderit sed quos deserunt</p>
						<small>Last Week</small>
					</div>
				</div>
			</div>

			 User Menu -->




		<div class="dropdown">
			<button class="flex items-center ltr:ml-4 rtl:mr-4" data-toggle="custom-dropdown-menu"
					data-tippy-arrow="true" data-tippy-placement="bottom-end">
				<span style="border:transparent !important;" class="avatar">
					 <img src="<?php echo base_url() ?>assets/uploads/users/<?php echo $user_info['profile_image'];?>" alt="<?php echo strtoupper(substr($user_info['username'],0,1));   ?>">
				</span>
			</button>
			<div class="custom-dropdown-menu w-64">
				<div class="p-5">
					<h5 class="uppercase">
						<?php echo $user_info['username'] ?>
					</h5>
					<p>
						<?php
						if($user_info['level']==0)
						{echo "Usuario Registrado";}
						elseif($user_info['level']==1)
						{echo "Administrador";}
						elseif($user_info['level']==2)
						{echo "Super Administrador";}
						else{echo "Usuario Registrado";}
						?>
					</p>
				</div>
				<hr>
				<div class="p-5">
					<a href="<?php echo base_url() ?>users/profile" class="flex items-center text-normal hover:text-primary">
						<span class="la la-user-circle text-2xl leading-none ltr:mr-2 rtl:ml-2"></span>
						Mi Perfil
					</a>
					<!--
					<a href="#" class="flex items-center text-normal hover:text-primary mt-5">
						<span class="la la-key text-2xl leading-none ltr:mr-2 rtl:ml-2"></span>
						Change Password
					</a>
					-->
				</div>
				<hr>
				<div class="p-5">
					<a href="<?php echo base_url() ?>users/logout" class="flex items-center text-normal hover:text-primary">
						<span class="la la-power-off text-2xl leading-none ltr:mr-2 rtl:ml-2"></span>
						Logout
					</a>
				</div>
			</div>
		</div>

		<?php else: ?>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url() ?>/users/login" class="btn btn_primary uppercase">Login</a>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url() ?>/users/register" class="btn btn_primary btn_outlined uppercase">Register</a>

		<?php endif; ?>
	</div>
</header>

<!-- Menu Bar -->
<aside class="menu-bar menu-sticky">
	<div class="menu-items">
		<div class="menu-header hidden">
			<a href="#" class="flex items-center mx-8 mt-8">
				<span class="avatar w-16 h-16"><?php echo strtoupper(substr($user_info['username'],0,1));   ?></span>
				<div class="ltr:ml-4 rtl:mr-4 ltr:text-left rtl:text-right">
					<h5><?php echo $user_info['username']; ?></h5>
					<p class="mt-2">
						<?php
						if($user_info['level']==0)
						{echo "Usuario Registrado";}
						elseif($user_info['level']==1)
						{echo "Administrador";}
						elseif($user_info['level']==2)
						{echo "Super Administrador";}
						else{echo "Usuario Registrado";}
						?>
					</p>
				</div>
			</a>
			<hr class="mx-8 my-4">
		</div>
		<?php if($user_info['level']==2): ?>

		<a href="<?php echo base_url() ?>dashboard" class="link" data-toggle="tooltip-menu" data-tippy-content="Dashboard">
			<span class="icon la la-laptop"></span>
			<span class="title">Mi Panel</span>
		</a>
		<?php endif; ?>

		<a href="#no-link" class="link" data-target="[data-menu=pages]" data-toggle="tooltip-menu"
		   data-tippy-content="Pages">
			<span class="icon la la-file-alt"></span>
			<span class="title">Mis Pubicaciones</span>
		</a>


		<?php if($user_info['level']==2): ?>
		<a href="#no-link" class="link" data-target="[data-menu=menu]" data-toggle="tooltip-menu"
		   data-tippy-content="Menu">
			<span class="icon la la-sitemap"></span>
			<span class="title">Configuración</span>
		</a>
		<?php endif; ?>



	</div>

	<!-- Dashboard -->
	<!--
	<div class="menu-detail" data-menu="dashboard">
		<div class="menu-detail-wrapper">
			<a href="index.html">
				<span class="la la-cube"></span>
				Default
			</a>
			<a href="index.html">
				<span class="la la-file-alt"></span>
				Content
			</a>
			<a href="index.html">
				<span class="la la-shopping-bag"></span>
				Ecommerce
			</a>
		</div>
	</div>
	-->

	<!-- UI -->
	<div class="menu-detail" data-menu="ui">
		<div class="menu-detail-wrapper">
			<h6 class="uppercase">Form</h6>
			<a href="form-components.html">
				<span class="la la-cubes"></span>
				Components
			</a>
			<a href="form-input-groups.html">
				<span class="la la-stop"></span>
				Input Groups
			</a>
			<a href="form-layout.html">
				<span class="la la-th-large"></span>
				Layout
			</a>
			<a href="form-validations.html">
				<span class="la la-check-circle"></span>
				Validations
			</a>
			<a href="form-wizards.html">
				<span class="la la-hand-pointer"></span>
				Wizards
			</a>
			<hr>
			<h6 class="uppercase">Components</h6>
			<a href="components-alerts.html">
				<span class="la la-bell"></span>
				Alerts
			</a>
			<a href="components-avatars.html">
				<span class="la la-user-circle"></span>
				Avatars
			</a>
			<a href="components-badges.html">
				<span class="la la-certificate"></span>
				Badges
			</a>
			<a href="components-buttons.html">
				<span class="la la-play"></span>
				Buttons
			</a>
			<a href="components-cards.html">
				<span class="la la-layer-group"></span>
				Cards
			</a>
			<a href="components-collapse.html">
				<span class="la la-arrow-circle-right"></span>
				Collapse
			</a>
			<a href="components-colors.html">
				<span class="la la-palette"></span>
				Colors
			</a>
			<a href="components-dropdowns.html">
				<span class="la la-arrow-circle-down"></span>
				Dropdowns
			</a>
			<a href="components-modal.html">
				<span class="la la-times-circle"></span>
				Modal
			</a>
			<a href="components-popovers-tooltips.html">
				<span class="la la-thumbtack"></span>
				Popovers & Tooltips
			</a>
			<a href="components-tabs.html">
				<span class="la la-columns"></span>
				Tabs
			</a>
			<a href="components-tables.html">
				<span class="la la-table"></span>
				Tables
			</a>
			<a href="components-toasts.html">
				<span class="la la-bell"></span>
				Toasts
			</a>
			<hr>
			<h6 class="uppercase">Extras</h6>
			<a href="extras-carousel.html">
				<span class="la la-images"></span>
				Carousel
			</a>
			<a href="extras-charts.html">
				<span class="la la-chart-area"></span>
				Charts
			</a>
			<a href="extras-editors.html">
				<span class="la la-keyboard"></span>
				Editors
			</a>
			<a href="extras-sortable.html">
				<span class="la la-sort"></span>
				Sortable
			</a>
		</div>
	</div>

	<!-- Pages -->
	<div class="menu-detail" data-menu="pages">
		<div class="menu-detail-wrapper">
			<h6 class="uppercase">Publicaciones</h6>
			<a href="<?php echo base_url() ?>posts">
				<span class="la la-file"></span>
				Administrar
			</a>

		</div>
	</div>


	<!-- Menu -->
	<div class="menu-detail" data-menu="menu">
		<div class="menu-detail-wrapper">
			<a href="<?php echo base_url() ?>categories">
				<span class="la la-cube"></span>
				Categorias
			</a>
		</div>
	</div>
</aside>


<!-- Workspace -->
<main class="workspace overflow-hidden">

	<?php if($this->session->flashdata('user_registered')): ?>

		<div class="alert alert_outlined alert_info">
			<strong class="uppercase"><bdi>Info!</bdi></strong>
			<?php $this->session->flashdata('user_registered') ?>
			<button type="button" class="dismiss la la-times" data-dismiss="alert"></button>
		</div>

	<?php endif; ?>


	<?php if($this->session->flashdata('post_created')): ?>

		<div class="alert alert_info mb-5 mt-5">
			<strong class="uppercase"><bdi>Publicación creada.</bdi></strong>
			<?php echo $this->session->flashdata('post_created') ?>
			<button type="button" class="dismiss la la-times" data-dismiss="alert"></button>
		</div>

	<?php endif; ?>





	<?php if($this->session->flashdata('login_success')): ?>

		<div class="alert  alert_info mb-5 mt-5">
			<strong class="uppercase"><bdi>Sesión iniciada</bdi></strong>
			<?php echo $this->session->flashdata('login_success') ?>
			<button type="button" class="dismiss la la-times" data-dismiss="alert"></button>
		</div>

	<?php endif; ?>




	<?php if($this->session->flashdata('profile_updated')): ?>

		<div class="alert alert_outlined alert_success mb-5 mt-5">
			<strong class="uppercase"><bdi>Perfil Acutalizado!</bdi></strong>
			<?php echo $this->session->flashdata('profile_updated') ?>.
			<button type="button" class="dismiss la la-times" data-dismiss="alert"></button>
		</div>

	<?php endif; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<title>Dashboard - Yeti!!!!!!!!!</title>


	<!-- Generics -->
	<link rel="icon" href="<?php echo base_url() ?>/assets/images/favicon/favicon-32.png" sizes="32x32">
	<link rel="icon" href="<?php echo base_url() ?>/assets/images/favicon/favicon-128.png" sizes="128x128">
	<link rel="icon" href="<?php echo base_url() ?>/assets/images/favicon/favicon-192.png" sizes="192x192">

	<!-- Android -->
	<link rel="shortcut icon" href="<?php echo base_url() ?>/assets/images/favicon/favicon-196.png" sizes="196x196">

	<!-- iOS -->
	<link rel="apple-touch-icon" href="<?php echo base_url() ?>/assets/images/favicon/favicon-152.png" sizes="152x152">
	<link rel="apple-touch-icon" href="<?php echo base_url() ?>/assets/images/favicon/favicon-167.png" sizes="167x167">
	<link rel="apple-touch-icon" href="<?php echo base_url() ?>/assets/images/favicon/favicon-180.png" sizes="180x180">

	<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style.css" />


	<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">



</head>

<body>

<!-- Top Bar
<header class="top-bar">

	<button type="button" class="menu-toggler la la-bars" data-toggle="menu"></button>

	<span class="brand">Yeti</span>


	<div class="flex items-center ltr:ml-auto rtl:mr-auto">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url() ?>/users/login" class="btn btn_primary uppercase">Login</a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url() ?>/users/register" class="btn btn_primary btn_outlined uppercase">Register</a>
	</div>
</header>
-->

<!-- Workspace -->
<main class="workspace">

	<?php if($this->session->flashdata('user_registered')): ?>

		<div class="alert alert_outlined alert_info">
			<strong class="uppercase"><bdi>Info!</bdi></strong>
			<?php $this->session->flashdata('user_registered') ?>
			<button type="button" class="dismiss la la-times" data-dismiss="alert"></button>
		</div>

	<?php endif; ?>


	<?php if($this->session->flashdata('post_created')): ?>

		<div class="alert alert_outlined alert_info">
			<strong class="uppercase"><bdi>Info!</bdi></strong>
			<?php $this->session->flashdata('post_created') ?>
			<button type="button" class="dismiss la la-times" data-dismiss="alert"></button>
		</div>

	<?php endif; ?>


	<?php if($this->session->flashdata('login_failed')): ?>

		<div class="alert alert_outlined alert_danger">
			<strong class="uppercase"><bdi>Login Failed</bdi></strong>
			<?php $this->session->flashdata('login_failed') ?>Incorrect username or password.
			<button type="button" class="dismiss la la-times" data-dismiss="alert"></button>
		</div>

	<?php endif; ?>


	<?php if($this->session->flashdata('login_success')): ?>

		<div class="alert alert_outlined alert_success mb-5 mt-5">
			<strong class="uppercase"><bdi>Logged in</bdi></strong>
			<?php $this->session->flashdata('login_success') ?>You are now logged in.
			<button type="button" class="dismiss la la-times" data-dismiss="alert"></button>
		</div>

	<?php endif; ?>


	<?php if($this->session->flashdata('user_logged_out')): ?>

		<div class="alert alert_outlined alert_success mb-5 mt-5">
			<strong class="uppercase"><bdi>Logged out</bdi></strong>
			<?php $this->session->flashdata('user_logged_out') ?>You have logged out.
			<button type="button" class="dismiss la la-times" data-dismiss="alert"></button>
		</div>

	<?php endif; ?>

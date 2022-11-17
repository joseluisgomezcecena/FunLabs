<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8" />
	<title>FunLab - Experimentos y mas!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta content="Tailwind CSS Saas & Software Landing Page Template" name="description" />
	<meta name="author" content="Shreethemes" />
	<meta name="website" content="https://shreethemes.in" />
	<meta name="email" content="support@shreethemes.in" />
	<meta name="version" content="1.0.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<!-- favicon -->
	<link rel="shortcut icon" href="<?php  echo base_url() ?>assets/images/favicon/favicon.ico" />

	<!-- Css -->
	<link href="<?php  echo base_url() ?>assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
	<link href="<?php  echo base_url() ?>assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
	<!-- Main Css -->
	<link href="<?php  echo base_url() ?>assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
	<link rel="stylesheet" href="<?php  echo base_url() ?>assets/css/icons.css" />
	<link rel="stylesheet" href="<?php  echo base_url() ?>assets/css/tailwind.css" />

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
			width: 100% !important;
			height: 3rem;
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
		#myTable_length{
			display: none;
		}
		.dataTables_wrapper .dataTables_filter{
			width: 100%;
		}
	</style>

</head>

<body>
<!-- Loader Start -->
<!-- <div id="preloader">
	<div id="status">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div>
</div> -->
<!-- Loader End -->

<!-- Start Navbar -->
<nav id="topnav" class="defaultscroll is-sticky">
	<div class="container">
		<!-- Logo container-->
		<a class="logo" href="<?php echo base_url() ?>">
                    <span class="logo-light-mode">
						<span class="l-dark" style="color:rgb(79 70 229 / 0.9);"><i style="font-size: 36px; color: rgb(79 70 229 / 0.9);" class="uil-flask l-dark"></i>FunLab</span>
						<span class="l-light" style="color:white;"><i style="font-size: 36px; color: white;" class="uil-flask l-light"></i>FunLab</span>
						<!--
                        <img src="<?php  echo base_url() ?>assets//images/logo-dark.png" class="l-dark" height="24" alt="">
                        <img src="<?php  echo base_url() ?>assets//images/logo-light.png" class="l-light" height="24" alt="">
                        -->
                    </span>


			<!--
			<img src="<?php  echo base_url() ?>assets/images/logo-light.png" height="24" class="logo-dark-mode" alt="">
			-->
		</a>

		<!-- End Logo container-->
		<div class="menu-extras">
			<div class="menu-item">
				<!-- Mobile menu toggle-->
				<a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
					<div class="lines">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</a>
				<!-- End mobile menu toggle-->
			</div>
		</div>

		<!--Login button Start-->
		<ul class="buy-button list-none mb-0">
			<li class="inline mb-0">
				<a href="#">
					<div class="login-btn-primary"><span class="btn   btn-primary btn-soft">Login</span></div>
				</a>
			</li>

			<li class="inline pl-1 mb-0">
				<a href="#" target="_blank">
					<div class="login-btn-light"><span class="btn  btn-light">Login</span></div>
				</a>
			</li>
		</ul>
		<!--Login button End-->

		<div id="navigation">
			<!-- Navigation Menu-->
			<ul class="navigation-menu nav-light">

				<!--
				<li class="has-submenu parent-parent-menu-item">
					<a href="javascript:void(0)">Landing</a><span class="menu-arrow"></span>

					<ul class="submenu megamenu">
						<li>
							<ul>
								<li><a href="index-saas.html" class="sub-menu-item">Saas</a></li>
								<li><a href="index-apps.html" class="sub-menu-item">Application</a></li>
								<li><a href="index-smartwatch.html" class="sub-menu-item">Smartwatch</a></li>
								<li><a href="index-marketing.html" class="sub-menu-item">Marketing</a></li>
								<li><a href="index-it-solution.html" class="sub-menu-item">IT Solution</a></li>
							</ul>
						</li>

						<li>
							<ul>
								<li><a href="index-digital-agency.html" class="sub-menu-item">Digital Agency</a></li>
								<li><a href="index-job.html" class="sub-menu-item">Job</a></li>
								<li><a href="index-restaurent.html" class="sub-menu-item">Restaurent</a></li>
								<li><a href="index-hosting.html" class="sub-menu-item">Hosting</a></li>
								<li><a href="index-gym.html" class="sub-menu-item">Gym</a></li>
							</ul>
						</li>

						<li>
							<ul>
								<li><a href="index-startup.html" class="sub-menu-item">Startup</a></li>
								<li><a href="index-hospital.html" class="sub-menu-item">Hospital</a></li>
								<li><a href="index-business.html" class="sub-menu-item">Business</a></li>
								<li><a href="index-corporate.html" class="sub-menu-item">Corporate</a></li>
							</ul>
						</li>

						<li>
							<ul>
								<li><a href="index-crypto.html" class="sub-menu-item">Cryptocurrency</a></li>
								<li><a href="index-personal.html" class="sub-menu-item">Personal</a></li>
								<li><a href="index-portfolio.html" class="sub-menu-item">Portfolio</a></li>
								<li><a href="index-studio.html" class="sub-menu-item">Studio</a></li>
							</ul>
						</li>

						<li>
							<ul>
								<li><a href="index-landing-one.html" class="sub-menu-item">Landing One</a></li>
								<li><a href="index-landing-two.html" class="sub-menu-item">Landing Two</a></li>
								<li><a href="index-landing-three.html" class="sub-menu-item">Landing Three</a></li>
								<li><a href="index-landing-four.html" class="sub-menu-item">Landing Four</a></li>
							</ul>
						</li>
					</ul>
				</li>
				-->


				<li class="has-submenu parent-parent-menu-item">
					<a href="javascript:void(0)">Categorias</a><span class="menu-arrow"></span>
					<ul class="submenu">
						<?php
						foreach ($categories as $category):
						?>
						<li class="has-submenu parent-menu-item"><a href="#"> <?php echo $category['category_name'] ?> </a><span class="submenu-arrow"></span></li>
						<?php endforeach; ?>

						<!--
						<li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Job / Careers </a><span class="submenu-arrow"></span>
							<ul class="submenu">
								<li><a href="page-job-grid.html" class="sub-menu-item">All Jobs</a></li>
								<li><a href="page-job-detail.html" class="sub-menu-item">Job Detail</a></li>
								<li><a href="page-job-apply.html" class="sub-menu-item">Job Apply</a></li>
								<li><a href="page-job-candidates.html" class="sub-menu-item">Job Candidates</a></li>
								<li><a href="page-job-candidate-detail.html" class="sub-menu-item">Candidate Detail</a></li>
								<li><a href="page-job-companies.html" class="sub-menu-item">All Companies</a></li>
								<li><a href="page-job-company-detail.html" class="sub-menu-item">Company Detail</a></li>
							</ul>
						</li>
						<li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Helpcenter </a><span class="submenu-arrow"></span>
							<ul class="submenu">
								<li><a href="helpcenter.html" class="sub-menu-item">Overview</a></li>
								<li><a href="helpcenter-faqs.html" class="sub-menu-item">FAQs</a></li>
								<li><a href="helpcenter-guides.html" class="sub-menu-item">Guides</a></li>
								<li><a href="helpcenter-support.html" class="sub-menu-item">Support</a></li>
							</ul>
						</li>
						<li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Blog </a><span class="submenu-arrow"></span>
							<ul class="submenu">
								<li><a href="blog.html" class="sub-menu-item">Blogs</a></li>
								<li><a href="blog-sidebar.html" class="sub-menu-item">Blogs & Sidebar</a></li>
								<li><a href="blog-detail.html" class="sub-menu-item">Blog Detail</a></li>
							</ul>
						</li>
						<li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Email Template</a><span class="submenu-arrow"></span>
							<ul class="submenu">
								<li><a href="email-confirmation.html" class="sub-menu-item">Confirmation</a></li>
								<li><a href="email-password-reset.html" class="sub-menu-item">Reset Password</a></li>
								<li><a href="email-alert.html" class="sub-menu-item">Alert</a></li>
								<li><a href="email-invoice.html" class="sub-menu-item">Invoice</a></li>
							</ul>
						</li>
						<li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Auth Pages </a><span class="submenu-arrow"></span>
							<ul class="submenu">
								<li><a href="auth-login.html" class="sub-menu-item">Login</a></li>
								<li><a href="auth-signup.html" class="sub-menu-item">Signup</a></li>
								<li><a href="auth-re-password.html" class="sub-menu-item">Reset Password</a></li>
							</ul>
						</li>
						<li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Utility </a><span class="submenu-arrow"></span>
							<ul class="submenu">
								<li><a href="page-terms.html" class="sub-menu-item">Terms of Services</a></li>
								<li><a href="page-privacy.html" class="sub-menu-item">Privacy Policy</a></li>
							</ul>
						</li>
						<li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Special</a><span class="submenu-arrow"></span>
							<ul class="submenu">
								<li><a href="page-comingsoon.html" class="sub-menu-item">Coming Soon</a></li>
								<li><a href="page-maintenance.html" class="sub-menu-item">Maintenance</a></li>
								<li><a href="page-error.html" class="sub-menu-item">Error</a></li>
								<li><a href="page-thankyou.html" class="sub-menu-item">Thank you</a></li>
							</ul>
						</li>
						<li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Contact </a><span class="submenu-arrow"></span>
							<ul class="submenu">
								<li><a href="contact-detail.html" class="sub-menu-item">Contact Detail</a></li>
								<li><a href="contact-one.html" class="sub-menu-item">Contact One</a></li>
								<li><a href="contact-two.html" class="sub-menu-item">Contact Two</a></li>
							</ul>
						</li>
						<li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Multi Level Menu</a><span class="submenu-arrow"></span>
							<ul class="submenu">
								<li><a href="javascript:void(0)" class="sub-menu-item">Level 1.0</a></li>
								<li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Level 2.0 </a><span class="submenu-arrow"></span>
									<ul class="submenu">
										<li><a href="javascript:void(0)" class="sub-menu-item">Level 2.1</a></li>
										<li><a href="javascript:void(0)" class="sub-menu-item">Level 2.2</a></li>
									</ul>
								</li>
							</ul>
						</li>
						-->
					</ul>
				</li>

				<!--
				<li class="has-submenu parent-parent-menu-item">
					<a href="javascript:void(0)">Portfolio</a><span class="menu-arrow"></span>
					<ul class="submenu megamenu">
						<li>
							<ul>
								<li class="megamenu-head">Modern Portfolio</li>
								<li><a href="portfolio-modern-two.html" class="sub-menu-item">Two Column</a></li>
								<li><a href="portfolio-modern-three.html" class="sub-menu-item">Three Column</a></li>
								<li><a href="portfolio-modern-four.html" class="sub-menu-item">Four Column</a></li>
								<li><a href="portfolio-modern-five.html" class="sub-menu-item">Five Column</a></li>
								<li><a href="portfolio-modern-six.html" class="sub-menu-item">Six Column</a></li>
							</ul>
						</li>

						<li>
							<ul>
								<li class="megamenu-head">Classic Portfolio</li>
								<li><a href="portfolio-classic-two.html" class="sub-menu-item">Two Column</a></li>
								<li><a href="portfolio-classic-three.html" class="sub-menu-item">Three Column</a></li>
								<li><a href="portfolio-classic-four.html" class="sub-menu-item">Four Column</a></li>
								<li><a href="portfolio-classic-five.html" class="sub-menu-item">Five Column</a></li>
								<li><a href="portfolio-classic-six.html" class="sub-menu-item">Six Column</a></li>
							</ul>
						</li>

						<li>
							<ul>
								<li class="megamenu-head">Creative Portfolio</li>
								<li><a href="portfolio-creative-two.html" class="sub-menu-item">Two Column</a></li>
								<li><a href="portfolio-creative-three.html" class="sub-menu-item">Three Column</a></li>
								<li><a href="portfolio-creative-four.html" class="sub-menu-item">Four Column</a></li>
								<li><a href="portfolio-creative-five.html" class="sub-menu-item">Five Column</a></li>
								<li><a href="portfolio-creative-six.html" class="sub-menu-item">Six Column</a></li>
							</ul>
						</li>

						<li>
							<ul>
								<li class="megamenu-head">Masonry Portfolio</li>
								<li><a href="portfolio-masonry-two.html" class="sub-menu-item">Two Column</a></li>
								<li><a href="portfolio-masonry-three.html" class="sub-menu-item">Three Column</a></li>
								<li><a href="portfolio-masonry-four.html" class="sub-menu-item">Four Column</a></li>
								<li><a href="portfolio-masonry-five.html" class="sub-menu-item">Five Column</a></li>
								<li><a href="portfolio-masonry-six.html" class="sub-menu-item">Six Column</a></li>
							</ul>
						</li>

						<li>
							<ul>
								<li class="megamenu-head">Portfolio Detail</li>
								<li><a href="portfolio-detail-one.html" class="sub-menu-item">Portfolio One</a></li>
								<li><a href="portfolio-detail-two.html" class="sub-menu-item">Portfolio Two</a></li>
								<li><a href="portfolio-detail-three.html" class="sub-menu-item">Portfolio Three</a></li>
								<li><a href="portfolio-detail-four.html" class="sub-menu-item">Portfolio Four</a></li>
							</ul>
						</li>
					</ul>
				</li>
				-->
				<li class="has-submenu parent-menu-item">
					<a href="javascript:void(0)">Sobre Nosotros</a><span class="menu-arrow"></span>
					<ul class="submenu">
						<li><a href="#" class="sub-menu-item">Quienes somos</a></li>
						<li><a href="#" class="sub-menu-item">Politicas</a></li>
					</ul>
				</li>

				<li><a href="#" target="_blank" class="sub-menu-item">Tienda</a></li>
			</ul><!--end navigation menu-->
		</div><!--end navigation-->
	</div><!--end container-->
</nav><!--end header-->
<!-- End Navbar -->


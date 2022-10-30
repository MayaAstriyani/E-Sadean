<?php $this->load->view('template/header'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
			</ul>

			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<!-- Navbar Login -->
				<li class="nav-item">
					<a class="nav-link" data-widget="navbar-search" href="#" role="button">
						<i class="fas fa-sign-out-alt">Logout</i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<?php $this->load->view('template/sidebar'); ?>

		<!-- Content Wrapper. Contains page content -->
		<?php $this->load->view($contents); ?>

	</div>

	<!-- footer-->
	<?php $this->load->view('template/footer'); ?>
</body>

</html>
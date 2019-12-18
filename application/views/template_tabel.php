
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title><?= $title; ?></title>
	
	<!-- Morris Chart Css-->
	<link href="<?= base_url(); ?>assets/plugins/morrisjs/morris.css" rel="stylesheet" />

	<!-- Favicon-->
	<link rel="icon" href="<?= base_url(); ?>assets/favicon.ico" type="image/x-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
		type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

	<!-- Bootstrap Core Css -->
	<link href="<?= base_url(); ?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

	<!-- Light Gallery Plugin Css -->
	<link href="<?= base_url(); ?>assets/plugins/light-gallery/css/lightgallery.css" rel="stylesheet">

	<!-- Waves Effect Css -->
	<link href="<?= base_url(); ?>assets/plugins/node-waves/waves.css" rel="stylesheet" />

	<!-- Animation Css -->
	<link href="<?= base_url(); ?>assets/plugins/animate-css/animate.css" rel="stylesheet" />

	<!-- JQuery DataTable Css -->
	<link href="<?= base_url(); ?>assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css"
		rel="stylesheet">

	<!-- Custom Css -->
	<link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">

	<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
	<link href="<?= base_url(); ?>assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-brown">
	<nav class="navbar">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse"
					data-target="#navbar-collapse" aria-expanded="false"></a>
				<a href="javascript:void(0);" class="bars"></a>
				<a class="navbar-brand" href="<?= base_url('admin') ?>">DINOMIX</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<!-- Call Search -->
					<li><a href="javascript:void(0);" class="js-search" data-close="true"><i
								class="material-icons">search</i></a></li>
					<!-- #END# Call Search -->
					<li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i
								class="material-icons">more_vert</i></a></li>
				</ul>
			</div>
		</div>
	</nav>
	<section>
		<!-- Left Sidebar -->
		<aside id="leftsidebar" class="sidebar">
			<div class="user-info">
				<div class="image">
					<img src="<?= base_url(); ?>assets/images/user.png" width="48" height="48" alt="User" />
				</div>
				<div class="info-container">
					<div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?= $_SESSION['nama']; ?></div>
					<div class="btn-group user-helper-dropdown">
						<i class="material-icons" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="true">keyboard_arrow_down</i>
						<ul class="dropdown-menu pull-right">
							<li><a type="button" data-toggle="modal" data-target="#modalEdit<?= $_SESSION['nama']; ?>"><i class="material-icons">person</i>Profile</a></li>
							<li role="seperator" class="divider"></li>
							<li><a href="<?= base_url('login/logout') ?>"><i class="material-icons">input</i>Sign
									Out</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Menu -->
			<div class="menu">
				<ul class="list">
					<li class="header">MAIN NAVIGATION</li>
					<?php if ($_SESSION['kelas'] == 'admin') { ?>
					<li>
						<a href="<?= base_url('admin/dashboard'); ?>">
							<i class="material-icons">home</i>
							<span>Dashboard</span>
						</a>
					</li>
					<li class="active">
						<a href="javascript:void(0);" class="menu-toggle">
							<i class="material-icons">dns</i>
							<span>Master</span>
						</a>
						<ul class="ml-menu">
							<li>
								<a href="<?= base_url('admin/penjual'); ?>">
									<span>Penjual</span>
								</a>
							</li>
							<li>
								<a href="<?= base_url('admin/pembeli'); ?>">
									<span>Pembeli</span>
								</a>
							</li>
							<li>
								<a href="<?= base_url('admin/barang'); ?>">
									<span>Barang</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" class="menu-toggle">
									<span>Layanan</span>
								</a>
								<ul class="ml-menu">
									<li>
										<a href="<?= base_url('admin/kurir'); ?>">
											<span>Kurir</span>
										</a>
									</li>
									<li>
										<a href="<?= base_url('admin/pembayaran	'); ?>">
											<span>Pembayaran</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?= base_url('admin/transaksi'); ?>">
							<i class="material-icons">trending_up</i>
							<span>Transaksi</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('admin/laporan'); ?>">
							<i class="material-icons">assessment</i>
							<span>Laporan</span>
						</a>
					</li>

					<?php } elseif ($_SESSION['kelas'] = 'penjual' ) { ?>

					<li>
						<a href="<?= base_url('penjual/barang'); ?>">
							<i class="material-icons">local_mall</i>
							<span>Barang</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('penjual/transaksi'); ?>">
							<i class="material-icons">trending_up</i>
							<span>Transaksi</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('penjual/history'); ?>">
							<i class="material-icons">history</i>
							<span>History</span>
						</a>
					</li>


					<?php } ?>
				</ul>
				<ul class="list">

					<li class="active">


					</li>

				</ul>
				
			</div>
			<!-- #Menu -->

		</aside>
		<!-- #END# Left Sidebar -->

		<!-- #END# Right Sidebar -->
	</section>

	<section class="content">
		<div class="container-fluid">
			<?php $this->load->view($konten);?>
		</div>
	</section>

	<!-- Jquery Core Js -->
	<script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>

	<!-- Bootstrap Core Js -->
	<script src="<?= base_url(); ?>assets/plugins/bootstrap/js/bootstrap.js"></script>



	<!-- Slimscroll Plugin Js -->
	<script src="<?= base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

	<!-- Waves Effect Plugin Js -->
	<script src="<?= base_url(); ?>assets/plugins/node-waves/waves.js"></script>

	<!-- Jquery DataTable Plugin Js -->
	<script src="<?= base_url(); ?>assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
	<script src="<?= base_url(); ?>assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
	<script src="<?= base_url(); ?>assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js">
	</script>
	<script src="<?= base_url(); ?>assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
	<script src="<?= base_url(); ?>assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
	<script src="<?= base_url(); ?>assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
	<script src="<?= base_url(); ?>assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
	<script src="<?= base_url(); ?>assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
	<script src="<?= base_url(); ?>assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

	<!-- Custom Js -->
	<script src="<?= base_url(); ?>assets/js/admin.js"></script>
	<script src="<?= base_url(); ?>assets/js/pages/tables/jquery-datatable.js"></script>

	<!-- Light Gallery Plugin Js -->
	<script src="<?= base_url(); ?>assets/plugins/light-gallery/js/lightgallery-all.js"></script>

	<!-- Demo Js -->
	<script src="<?= base_url(); ?>assets/js/demo.js"></script>
</body>

</html>

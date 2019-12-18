<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title><?= $title; ?></title>
	<!-- Favicon-->
	<link rel="icon" href="<?= base_url(); ?>assets/favicon.ico" type="image/x-icon">
	<!-- JQuery DataTable Css -->
	<link href="<?= base_url(); ?>assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css"
		rel="stylesheet">

	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
		type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

	<!-- Bootstrap Core Css -->
	<link href="<?= base_url(); ?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

	<!-- Waves Effect Css -->
	<link href="<?= base_url(); ?>assets/plugins/node-waves/waves.css" rel="stylesheet" />


	<!-- Animation Css -->
	<link href="<?= base_url(); ?>assets/plugins/animate-css/animate.css" rel="stylesheet" />

	<!-- Morris Chart Css-->
	<link href="<?= base_url(); ?>assets/plugins/morrisjs/morris.css" rel="stylesheet" />

	<!-- Custom Css -->
	<link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">

	<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
	<link href="<?= base_url(); ?>assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-brown">

	<!-- Overlay For Sidebars -->
	<div class="overlay"></div>
	<!-- #END# Overlay For Sidebars -->
	<!-- Search Bar -->
	<div class="search-bar">
		<div class="search-icon">
			<i class="material-icons">search</i>
		</div>
		<input type="text" placeholder="START TYPING...">
		<div class="close-search">
			<i class="material-icons">close</i>
		</div>
	</div>
	<!-- #END# Search Bar -->
	<!-- Top Bar -->
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
	<!-- #Top Bar -->
	<section>
		<!-- Left Sidebar -->
		<aside id="leftsidebar" class="sidebar">
			<!-- User Info -->
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
							<li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
							<li role="seperator" class="divider"></li>
							<li><a href="<?= base_url('login/logout') ?>"><i class="material-icons">input</i>Sign
									Out</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- #User Info -->
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
					<li  class="active">
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
										<a href="<?= base_url('admin/pembayaran'); ?>">
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
				
			</div>
			
			<!-- #Menu -->
			<!-- Footer -->
			<div class="legal">
				<div class="copyright">
					&copy; 2016 - 2017 <a href="javascript:void(0);">DINOMIX</a>. All right reserved
				</div>

			</div>
			<!-- #Footer -->
		</aside>
		<!-- #END# Left Sidebar -->
		<!-- Right Sidebar -->
		<aside id="rightsidebar" class="right-sidebar">
			<ul class="nav nav-tabs tab-nav-right" role="tablist">
				<li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
				<li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
			</ul>
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fade" id="settings">
					<div class="demo-settings">
						<p>GENERAL SETTINGS</p>
						<ul class="setting-list">
							<li>
								<span>Report Panel Usage</span>
								<div class="switch">
									<label><input type="checkbox" checked><span class="lever"></span></label>
								</div>
							</li>
							<li>
								<span>Email Redirect</span>
								<div class="switch">
									<label><input type="checkbox"><span class="lever"></span></label>
								</div>
							</li>
						</ul>
						<p>SYSTEM SETTINGS</p>
						<ul class="setting-list">
							<li>
								<span>Notifications</span>
								<div class="switch">
									<label><input type="checkbox" checked><span class="lever"></span></label>
								</div>
							</li>
							<li>
								<span>Auto Updates</span>
								<div class="switch">
									<label><input type="checkbox" checked><span class="lever"></span></label>
								</div>
							</li>
						</ul>
						<p>ACCOUNT SETTINGS</p>
						<ul class="setting-list">
							<li>
								<span>Offline</span>
								<div class="switch">
									<label><input type="checkbox"><span class="lever"></span></label>
								</div>
							</li>
							<li>
								<span>Location Permission</span>
								<div class="switch">
									<label><input type="checkbox" checked><span class="lever"></span></label>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</aside>
		<!-- #END# Right Sidebar -->
	</section>

	<section class="content">
		<div class="container-fluid">
			<?php $this->load->view($konten);?>
		</div>
	</section>

	<!-- Select Plugin Js -->
	<script src="<?= base_url() ?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

	<!-- Jquery DataTable Plugin Js -->
	<script src="<?= base_url() ?>assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
	<script src="<?= base_url() ?>assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
	<script src="<?= base_url() ?>assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
	<script src="<?= base_url() ?>assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
	<script src="<?= base_url() ?>assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
	<script src="<?= base_url() ?>assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
	<script src="<?= base_url() ?>assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
	<script src="<?= base_url() ?>assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
	<script src="<?= base_url() ?>assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

	<!-- Jquery Core Js -->
	<script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>

	<!-- Bootstrap Core Js -->
	<script src="<?= base_url(); ?>assets/plugins/bootstrap/js/bootstrap.js"></script>


	<!-- Slimscroll Plugin Js -->
	<script src="<?= base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

	<!-- Waves Effect Plugin Js -->
	<script src="<?= base_url(); ?>assets/plugins/node-waves/waves.js"></script>

	<!-- Jquery CountTo Plugin Js -->
	<script src="<?= base_url(); ?>assets/plugins/jquery-countto/jquery.countTo.js"></script>

	<!-- Morris Plugin Js -->
	<script src="<?= base_url(); ?>assets/plugins/raphael/raphael.min.js"></script>
	<script src="<?= base_url(); ?>assets/plugins/morrisjs/morris.js"></script>

	<!-- ChartJs -->
	<script src="<?= base_url(); ?>assets/plugins/chartjs/Chart.bundle.js"></script>

	<!-- Flot Charts Plugin Js -->
	<script src="<?= base_url(); ?>assets/plugins/flot-charts/jquery.flot.js"></script>
	<script src="<?= base_url(); ?>assets/plugins/flot-charts/jquery.flot.resize.js"></script>
	<script src="<?= base_url(); ?>assets/plugins/flot-charts/jquery.flot.pie.js"></script>
	<script src="<?= base_url(); ?>assets/plugins/flot-charts/jquery.flot.categories.js"></script>
	<script src="<?= base_url(); ?>assets/plugins/flot-charts/jquery.flot.time.js"></script>

	<!-- Sparkline Chart Plugin Js -->
	<script src="<?= base_url(); ?>assets/plugins/jquery-sparkline/jquery.sparkline.js"></script>

	<!-- Custom Js -->
	<script src="<?= base_url(); ?>assets/js/admin.js"></script>
	<script src="<?= base_url(); ?>assets/js/pages/index.js"></script>

	<!-- Demo Js -->
	<script src="<?= base_url(); ?>assets/js/demo.js"></script>
</body>

</html>

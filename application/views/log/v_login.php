<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title><?= $judul; ?></title>
	<!-- Favicon-->
	<link rel="icon" href="<?= base_url() ?>assets/favicon.ico" type="image/x-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
		type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

	<!-- Bootstrap Core Css -->
	<link href="<?= base_url() ?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

	<!-- Waves Effect Css -->
	<link href="<?= base_url() ?>assets/plugins/node-waves/waves.css" rel="stylesheet" />

	<!-- Animation Css -->
	<link href="<?= base_url() ?>assets/plugins/animate-css/animate.css" rel="stylesheet" />

	<!-- Custom Css -->
	<link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
</head>

<body class="login-page">
	<div class="login-box">
		<div class="logo">
			<a href="javascript:void(0);">Dino<b>mix</b></a>
			<small>Platform Jual Beli Keramik <b>Dinoyo</b></small>
		</div>
		<div class="card">
			<div class="body">
				<form action="<?= base_url('login/login') ?>" method="POST">
					<div class="msg">Sign in untuk memulai</div>
					<div class="input-group">
						<?php if ($this->session->flashdata('hijau')) { ?>
						<div class="alert alert-success alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<strong><?= $this->session->flashdata('hijau')?></strong>
						</div>
						<?php } elseif ($this->session->flashdata('merah')) { ?>
						<div class="alert alert-danger alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<strong><?= $this->session->flashdata('merah')?></strong>
						</div>
						<?php } elseif ($this->session->flashdata('kuning')) { ?>
						<div class="alert alert-warning alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<strong><?= $this->session->flashdata('kuning')?></strong>
						</div>
						<?php } ?>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">person</i>
						</span>
						<div class="form-line">
							<input type="text" class="form-control" name="username" placeholder="Username" required
								autofocus>
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">lock</i>
						</span>
						<div class="form-line">
							<input type="password" class="form-control" name="password" placeholder="Password" required>
						</div>
					</div>
					<div class="row">

						<div class="col-xs-12 p-t-5">
							<input class="btn btn-block bg-brown waves-effect" type="submit" value="Sign In">
						</div>
					</div>
					<div class="row m-t-15 m-b--20">
						<div class="col-xs-6">
							<a href="<?= base_url('registerPenjual'); ?>">Daftar</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Jquery Core Js -->
	<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>

	<!-- Bootstrap Core Js -->
	<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.js"></script>

	<!-- Waves Effect Plugin Js -->
	<script src="<?= base_url() ?>assets/plugins/node-waves/waves.js"></script>

	<!-- Validation Plugin Js -->
	<script src="<?= base_url() ?>assets/plugins/jquery-validation/jquery.validate.js"></script>

	<!-- Custom Js -->
	<script src="<?= base_url() ?>assets/js/admin.js"></script>
	<script src="<?= base_url() ?>assets/js/pages/examples/sign-in.js"></script>
</body>

</html>

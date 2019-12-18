<!-- #END# Basic Examples -->
<!-- Exportable Table -->
<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
					DATA PENJUAL
				</h2>
				<ul class="header-dropdown m-r--5">
					<li class="dropdown">
						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
							aria-haspopup="true" aria-expanded="false">
							<i class="material-icons">more_vert</i>
						</a>
						<ul class="dropdown-menu pull-right">
							<li><a href="javascript:void(0);">Action</a></li>
							<li><a href="javascript:void(0);">Another action</a></li>
							<li><a href="javascript:void(0);">Something else here</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="body">
				<div class="table-responsive">
					<table class="table table-bordered table-striped table-hover dataTable js-exportable">
						<thead>
							<tr>
								<th>Nama</th>
								<th>Email</th>
								<th>Username</th>
								<th>Action</th>
							</tr>
						</thead>

						<tbody>
							<?php foreach ($penjual as $p ) : ?>
							<tr>
								<td><?= $p['nama']; ?></td>
								<td><?= $p['email']; ?></td>
								<td><?= $p['username']; ?></td>
								<td>
									<a class="btn waves-effect waves-brown"
										href="<?= base_url(); ?>admin/penjual/hapusPenjual/<?= $p['id_penjual'] ?>"
										onclick="return confirm('Anda yakin ingin menghapus data penjual?')">
										<i class="material-icons font-bold col-pink">delete</i>
									</a>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- #END# Exportable Table -->

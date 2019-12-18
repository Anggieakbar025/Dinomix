<div class="row">
	<div class="col-md-5">
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
</div>
<!-- Exportable Table -->
<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
					DATA HISTORY
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
								<th>ID</th>
								<th>Nama Barang</th>
								<th>Pembeli </th>
								<th>Tanggal</th>
								<th>Action</th>
							</tr>
						</thead>

						<tbody>
							<?php foreach ($history as $h ) : ?>
							<tr>
								<td><?= $h['id_transaksi']; ?></td>
								<td><?= $h['nama_barang']; ?></td>
								<td><?= $h['nama_pembeli']; ?></td>
								<td><?= date('d M Y', $h['tanggal']) ?></td>
								<td>
									<a class="btn waves-effect waves-brown"
										href="<?= base_url(); ?>penjual/history/hapusHistory/<?= $h['id_barang'] ?>"
										onclick="return confirm('Anda yakin ingin menghapus data history?')">
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

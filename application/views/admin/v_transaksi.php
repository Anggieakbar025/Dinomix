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
					DATA TRANSAKSI
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
								<th>Tanggal</th>
								<th>Nama Barang</th>
								<th>Pembeli </th>
								<th>Penjual</th>
								<th>Kurir</th>
                                <th>Pembayaran</th>
                                <th>Status</th>
							</tr>
						</thead>

						<tbody>
							<?php foreach ($transaksi as $t ) : ?>
							<tr>
								<td><?= $t['id_transaksi']; ?></td>
								<td><?= date('d M Y', $t['tanggal']) ?></td>
								<td><?= $t['nama_barang']; ?></td>
								<td><?= $t['nama_pembeli']; ?></td>
								<td><?= $t['nama_penjual']; ?></td>
								<td><?= $t['nama_kurir']; ?></td>
								<td><?= $t['jenis']; ?></td>
								<td>
									<a class="btn waves-brown waves-effect" data-toggle="modal" type="button"
										data-target="#modalStatus<?= $t['id_transaksi']; ?>">
										<?= $t['status']; ?>
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

<?php foreach ($transaksi as $t ) : ?>
<div class="modal fade" id="modalStatus<?= $t['id_transaksi']; ?>" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="defaultModalLabel">Edit Status</h4>
			</div>
			<form action="<?= base_url(); ?>admin/transaksi/editStatus/<?= $t['id_transaksi']; ?>" method="POST"
				enctype="multipart/form-data">
				<div class="modal-body">
					<input type="hidden" name="filelama" value="<?=$t['id_transaksi']?>">
					<div class="form-group form-float">
						<div class="spzl">
							<select name="status" class="form-control">
								<option value="pesan" <?php if($t['status'] == 'pesan'){echo "selected"; } ?>>Pesan</option>
								<option value="bayar" <?php if($t['status'] == 'bayar') {echo "selected"; } ?>>Bayar</option>
								<option value="batal" <?php if($t['status'] == 'batal'){echo "selected"; } ?>>Dibatalkan</option>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<input type="submit" value="UPDATE" name="update" class="btn btn-link waves-effect">
					<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php endforeach; ?>


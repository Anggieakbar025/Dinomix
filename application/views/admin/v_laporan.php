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
					DATA LAPORAN
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
								<th>Penjual</th>
								<th>Kurir</th>
                                <th>Pembayaran</th>
								<th>Tanggal</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>

						<tbody>
							<?php foreach ($laporan as $l ) : ?>
							<tr>
								<td><?= $l['id_transaksi']; ?></td>
								<td><?= $l['nama_barang']; ?></td>
								<td><?= $l['nama_pembeli']; ?></td>
								<td><?= $l['nama_penjual']; ?></td>
								<td><?= $l['nama_kurir']; ?></td>
								<td><?= $l['jenis']; ?></td>
								<td><?= date('d M Y', $l['tanggal']) ?></td>
								<td><?= $l['status']; ?></td>
								<td>
									<a class="btn waves-effect waves-brown"
										href="<?= base_url(); ?>admin/laporan/hapusLaporan/<?= $l['id_transaksi'] ?>"
										onclick="return confirm('Anda yakin ingin menghapus data barang?')">
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

<?php foreach ($laporan as $l ) : ?>
<div class="modal fade" id="modalEdit<?= $l['id_barang']; ?>" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="defaultModalLabel">Edit Barang</h4>
			</div>
			<form action="<?= base_url(); ?>admin/laporan/editBarang/<?= $l['id_barang']; ?>" method="POST"
				enctype="multipart/form-data">
				<div class="modal-body">
					<input type="hidden" name="filelama" value="<?=$l['id_barang']?>">
					<div class="form-group form-float">
						<div class="form-line">
							<input name="nama" type="text" value="<?= $l['nama_barang']; ?>" class="form-control">
							<label class="form-label">Nama</label>
						</div>
					</div>


					<div class="form-group form-float">
						<div class="spzl">
							<select name="id_kategori" class="form-control">
								<option value="-">Pilih Kategori</option>
								<?php foreach ($kategori as $k ) :?>
								<option value="<?= $k['id_kategori'] ?>" <?php if ($k['id_kategori'] == $l['id_kategori']) {
									echo "selected";
								} ?>>
									<?= $k['kategori']; ?>
								</option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
					<div class="form-group form-float">
						<div class="form-line">
							<input name="harga" type="text" value="<?= $l['harga']; ?>" class="form-control">
							<label class="form-label">Harga</label>
						</div>
					</div>

					<div class="form-group form-float">
						<div class="spzl">
							<select name="id_penjual" class="form-control">
								<option value="-">Pilih Penjual</option>
								<?php foreach ($penjual as $p ) :?>
								<option value="<?= $p['id_penjual'] ?>" <?php if ($p['id_penjual'] == $l['id_penjual']) {
									echo "selected";
								} ?>>
									<?= $p['nama']; ?>
								</option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>

					<div class="form-group form-float">
						<div class="form-line">
							<input name="stok" type="text" value="<?= $l['stok']; ?>" class="form-control">
							<label class="form-label">Stok</label>
						</div>
					</div>

					<div class="form-group form-float">
						<div class="form-line">
							<label>Gambar Barang</label>
							<input name="fotopost" type="file" class="form-control">
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
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
					DATA BARANG
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
								<th>Penjual</th>
								<th>Harga</th>
								<th>Stok</th>
								<th>Kategori</th>
								<th>Gambar</th>
								<th>Action</th>
							</tr>
						</thead>

						<tbody>
							<?php foreach ($barang as $b ) : ?>
							<tr>
								<td><?= $b['nama_barang']; ?></td>
								<td><?= $b['nama_penjual']; ?></td>
								<td><?= $b['harga']; ?></td>
								<td><?= $b['stok']; ?></td>
								<td><?= $b['kategori'] ?></td>
								<td>
									<a class="btn waves-brown waves-effect" data-toggle="modal" type="button"
										data-target="#modalDetail<?= $b['id_barang']; ?>">
										<i class="material-icons font-bold col-cyan">search</i>
									</a>
								</td>
								<td>
									<a class="btn waves-brown waves-effect" data-toggle="modal" type="button"
										data-target="#modalEdit<?= $b['id_barang']; ?>">
										<i class="material-icons font-bold col-orange">edit</i>
									</a>
									<a class="btn waves-effect waves-brown"
										href="<?= base_url(); ?>admin/barang/hapusBarang/<?= $b['id_barang'] ?>"
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

<?php foreach ($barang as $b ) : ?>
<div class="modal fade" id="modalEdit<?= $b['id_barang']; ?>" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="defaultModalLabel">Edit Barang</h4>
			</div>
			<form action="<?= base_url(); ?>admin/barang/editBarang/<?= $b['id_barang']; ?>" method="POST"
				enctype="multipart/form-data">
				<div class="modal-body">
					<input type="hidden" name="filelama" value="<?=$b['id_barang']?>">
					<div class="form-group form-float">
						<div class="form-line">
							<input name="nama" type="text" value="<?= $b['nama_barang']; ?>" class="form-control">
							<label class="form-label">Nama</label>
						</div>
					</div>


					<div class="form-group form-float">
						<div class="spzl">
							<select name="id_kategori" class="form-control">
								<option value="-">Pilih Kategori</option>
								<?php foreach ($kategori as $k ) :?>
								<option value="<?= $k['id_kategori'] ?>" <?php if ($k['id_kategori'] == $b['id_kategori']) {
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
							<input name="harga" type="text" value="<?= $b['harga']; ?>" class="form-control">
							<label class="form-label">Harga</label>
						</div>
					</div>

					<div class="form-group form-float">
						<div class="spzl">
							<select name="id_penjual" class="form-control">
								<option value="-">Pilih Penjual</option>
								<?php foreach ($penjual as $p ) :?>
								<option value="<?= $p['id_penjual'] ?>" <?php if ($p['id_penjual'] == $b['id_penjual']) {
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
							<input name="stok" type="text" value="<?= $b['stok']; ?>" class="form-control">
							<label class="form-label">Stok</label>
						</div>
					</div>

					<div class="form-group form-float">
						<div class="form-line">
							<label>Gambar Barang</label>
							<img class="img-responsive thumbnail m-l-20" src="<?= base_url(); ?>upload/barang/<?= $b['gambar']; ?>">
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


<!-- ModalDetail -->
<?php foreach ($barang as $b ) : ?>
<div class="modal fade" id="modalDetail<?= $b['id_barang']; ?>" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="defaultModalLabel">Gambar Barang</h4>
			</div>
			<form action="<?= base_url(); ?>admin/barang/editBarang/<?= $b['id_barang']; ?>" method="POST"
				enctype="multipart/form-data">
				<div class="modal-body">
					<div id="aniimated-thumbnials" class="list-unstyled row clearfix">
						<div class="col-md-12">
							<a href="<?= base_url(); ?>upload/barang/<?= $b['gambar']; ?>" data-sub-html="Demo Description" target="_blank">
								<img class="img-responsive thumbnail m-l-20" src="<?= base_url(); ?>upload/barang/<?= $b['gambar']; ?>">
							</a>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php endforeach; ?>
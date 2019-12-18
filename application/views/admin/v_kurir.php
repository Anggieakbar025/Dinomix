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
<div class="row">
</div>
<!-- Custom Content -->
<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
					DATA KURIR
				</h2>
			</div>
			<div class="col-md-12 m-b-10 m-t-10 button-spzl">
				<button type="button" class="col-lg-2 btn bg-brown waves-brown waves-effect" data-toggle="modal"
					data-target="#modalTambah">TAMBAH</button>
			</div>
			<div class="body">
				<div class="row">
					<?php foreach ($kurir as $k ) : ?>
					<div class="col-sm-6 col-md-3">
						<div class="thumbnail">
							<img class="img-responsive thumbnail"
								src="<?= base_url(); ?>upload/kurir/<?= $k['gambar']; ?>">
							<div class="caption">
								<h3><?= $k['nama']; ?></h3>
								
								<p>
									<a class="btn waves-brown waves-effect" data-toggle="modal" type="button" data-target="#modalEdit<?= $k['id_kurir']; ?>">
										<i class="material-icons font-bold col-orange">edit</i>
									</a>
									<a class="btn waves-effect waves-brown"
										href="<?= base_url(); ?>admin/kurir/hapusKurir/<?= $k['id_kurir'] ?>"
										onclick="return confirm('Anda yakin ingin menghapus data barang?')">
										<i class="material-icons font-bold col-pink">delete</i>
									</a>
								</p>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- #END# Custom Content -->

<!-- Default Size -->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="defaultModalLabel">Modal title</h4>
			</div>
			<form action="<?= base_url('admin/tambahKurir') ?>" method="POST" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="form-group form-float">
						<div class="form-line">
							<input name="nama" type="text" class="form-control">
							<label class="form-label">Nama</label>
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
					<input type="submit" value="Tambah" name="create" class="btn btn-link waves-effect">
					<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
				</div>
			</form>
		</div>
	</div>
</div>

<?php foreach ($kurir as $k ) : ?>
<div class="modal fade" id="modalEdit<?= $k['id_kurir']; ?>" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="defaultModalLabel">Modal title</h4>
			</div>
			<form action="<?= base_url(); ?>admin/kurir/editKurir/<?= $k['id_kurir']; ?>" method="POST" enctype="multipart/form-data">
				<div class="modal-body">
				<input type="hidden" name="filelama" value="<?=$k['id_kurir']?>">
					<div class="form-group form-float">
						<div class="form-line">
							<input name="nama" type="text" value="<?= $k['nama']; ?>" class="form-control">
							<label class="form-label">Nama</label>
						</div>
					</div>

					<div class="form-group form-float">
						<div class="form-line">
							<label>Gambar Barang</label>
							<img class="img-responsive thumbnail"
								src="<?= base_url(); ?>upload/barang/<?= $k['gambar']; ?>">
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

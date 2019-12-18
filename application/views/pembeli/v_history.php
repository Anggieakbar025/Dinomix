		<!-- End Search Popup -->
<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area bg-image--3">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="bradcaump__inner text-center">
					<h2 class="bradcaump-title">History Belanja</h2>
					<nav class="bradcaump-content">
						<a class="breadcrumb_item" href="index.html">Home</a>
						<span class="brd-separetor">/</span>
						<span class="breadcrumb_item active">History Belanja</span>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Bradcaump area -->
<!-- cart-main-area start -->
<div class="cart-main-area section-padding--lg bg--white">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 ol-lg-12">
				<form action="#">
					<div class="table-content wnro__table table-responsive">
						<table>
							<thead>
								<tr class="title-top">
									<th class="product-thumbnail">ID</th>
									<th class="product-name">Produk</th>
									<th class="product-price">Penjual</th>
									<th class="product-quantity">Kurir</th>
									<th class="product-quantity">Pembayaran</th>
									<th class="product-subtotal">Tanggal</th>
									<th class="product-subtotal">Status</th>
								</tr>
							</thead>
							<tbody>
                            <?php foreach ($history as $h ) : ?>
							<tr>
								<td><?= $h['id_transaksi']; ?></td>
								<td><?= $h['nama_barang']; ?></td>
								<td><?= $h['nama_penjual']; ?></td>
								<td><?= $h['nama_kurir']; ?></td>
								<td><?= $h['jenis']; ?></td>
								<td><?= $h['tanggal']; ?></td>
								<td><?= $h['status']; ?></td>
							</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</form>
			</div>
		</div>

	</div>
</div>
<!-- cart-main-area end -->
<!-- Footer Area -->
<footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
	<div class="footer-static-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="footer__widget footer__menu">
						<div class="ft__logo">
							<a href="index.html">
								<img src="images/logo/3.png" alt="logo">
							</a>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have
								suffered duskam alteration variations of passages</p>
						</div>
						<div class="footer__content">
							<ul class="social__net social__net--2 d-flex justify-content-center">
								<li><a href="#"><i class="bi bi-facebook"></i></a></li>
								<li><a href="#"><i class="bi bi-google"></i></a></li>
								<li><a href="#"><i class="bi bi-twitter"></i></a></li>
								<li><a href="#"><i class="bi bi-linkedin"></i></a></li>
								<li><a href="#"><i class="bi bi-youtube"></i></a></li>
							</ul>
							<ul class="mainmenu d-flex justify-content-center">
								<li><a href="index.html">Trending</a></li>
								<li><a href="index.html">Best Seller</a></li>
								<li><a href="index.html">All Product</a></li>
								<li><a href="index.html">Wishlist</a></li>
								<li><a href="index.html">Blog</a></li>
								<li><a href="index.html">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright__wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="copyright">
						<div class="copy__right__inner text-left">
							<p>Copyright <i class="fa fa-copyright"></i> <a href="https://freethemescloud.com/">Free
									themes Cloud.</a> All Rights Reserved</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="payment text-right">
						<img src="images/icons/payment.png" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
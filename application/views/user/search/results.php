<style>
	#cardHover {
		transition: 0.2s all;
		overflow: hidden;
	}

	#cardHover:hover {
		box-shadow: 0 8px 50px rgba(0, 0, 0, 0.2);
		transform: scale(1.05);
	}

	.img-zoom {
		overflow: hidden;
	}

	.img-zoom img {
		transition: all ease 0.75s;
	}

	.img-zoom:hover img {
		transform: scale(1.25);
	}
</style>

<!--View Hasil Pencarian Ada -->
<div class="row">
	<?php
	//var_dump(@$dataIklan);
	foreach (@$dataIklan as $value) {
		?>
		<div class="col-lg-4 col-md-6 col-sm-10 px-2 mb-3">
			<div class="card" id="cardHover">
				<div class="img-zoom">
					<img class="card-img-top" src="assets/image/iklan/<?php echo $value->gambar_kerjaan ?>"
						 alt="<?php echo $value->judul_kerjaan; ?>"
						 title="<?php echo $value->judul_kerjaan; ?>">
				</div>
				<div class="card-body" style="height: 16rem;overflow: hidden;">
					<h5 class="card-title text-capitalize">
						<a href="<?php echo base_url() ?>detail/<?php echo $value->idkerjaan; ?>"><?php echo $value->judul_kerjaan; ?></a>
					</h5>
					<p class="card-text">
								  <span class="text-muted small">
									<i class="bi-clock mr-1"></i> <?php echo $value->tanggal_submit ?>
									- <i class="bi-grid ml-1 mr-1"></i> <?php echo $value->nama_kategori ?>
									- <i class="bi-geo-alt ml-1 mr-1"></i> <?php echo $value->nama_kabupaten ?>
								  </span>
					<div class="text-right">
						<h5>Rp <?php echo number_format($value->harga,2, ',', '.'); ?></h5>
					</div>
					</p>
				</div>
			</div>
		</div>
		<?php
	}
	?>
</div>

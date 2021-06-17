<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>

<section class="content">
	<div class="container-fluid">
		<!-- Info boxes -->
		<?= $this->session->flashdata('message'); ?>


		<div class="card-footer card-comments">
			<?php foreach ($komentar as $key => $value): ?>


				<div class="card-comment">
					<!-- User image -->
					<img class="img-circle img-sm" src="<?php echo base_url('assets/') ?>dist/img/user3-128x128.jpg" alt="User Image">

					<div class="comment-text">
						<span class="username">
							<?php echo $value->nama_komentar ?>
							<span class="text-muted float-right"><?php echo date('d M Y', strtotime($value->tanggal_komentar)) ?></span>
						</span><!-- /.username -->
						<?php echo $value->komen ?>
					</div>
					<!-- /.comment-text -->


					<div class="balas ml-5 mt-2 mb-2">
						<?php
						$id_komentar = $value->id_komentar;
						$queryBalas = $this->db->query("SELECT * FROM balas_komentar where id_komentar = '$id_komentar'")->result();
						foreach ($queryBalas as $key => $value2): ?>
							<img class="img-circle img-sm" src="<?php echo base_url('assets/') ?>dist/img/user3-128x128.jpg" alt="User Image">

							<div class="comment-text">
								<span class="username">
									balasan anda
									<span class="text-muted float-right"><?php echo date('d M Y', strtotime($value2->tanggal_balasan)) ?></span>
								</span><!-- /.username -->
								<?php echo $value2->balasan ?>
							</div>
						<?php endforeach ?>
						<form action="<?php echo base_url('pengelola/balasKomentar/'.$value->id_komentar) ?>" method="post" class="mt-2">
							<div class="input-group input-group-sm">
								<input type="text" class="form-control form-control-sm" name="balas" placeholder="balas komentar">
								<span class="input-group-append">
									<button type="submit" class="btn btn-info btn-flat">Balas</button>
								</span>
							</div>
						</form>
					</div>
				</div>
				<!-- /.card-comment -->
			<?php endforeach ?>
		</div>
	</div>
</section>
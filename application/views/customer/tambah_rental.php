<div class="container">
	
	<div class="card" style="margin-top: 170px; margin-bottom: 50px">
		
		<div class="card-header">
			Form Rental Mobil
		</div>
		<span class="mt-2"><?php echo $this->session->flashdata('pesan') ?></span>
		<div class="card-body">
			<?php foreach($detail as $dt) : ?>
				<!-- <span style="font-size: 1.2em;">Mobil <?php echo $dt->nama_type ?> dengan Merk <?php echo $dt->merk ?> ini disediakan oleh Perusahaan Rental <?php echo $dt->nama_rental ?>.</span>
				<hr> -->
				<form method="POST" action="<?php echo base_url('customer/rental/tambah_rental_aksi') ?>">

					<div class="form-group">
						<label>Merk</label>
						<input type="text" name="merk" class="form-control" value="<?php echo $dt->merk ?>" readonly>
					</div>
					
					<div class="form-group">
						<label>Penyedia</label>
						<input type="text" name="nama_rental" class="form-control" value="<?php echo $dt->nama_rental ?>" readonly>
					</div>

					<div class="form-group">
						<label>Alamat</label>
						<input type="text" name="alamat" class="form-control" value="<?php echo $dt->alamat ?>" readonly>
					</div>


					<div class="form-group">
						<label>Harga Sewa/Hari</label>
						<input type="hidden" name="id_mobil" value="<?php echo $dt->id_mobil ?>">
						<input type="hidden" name="nama_rental" value="<?php echo $dt->nama_rental ?>">
						<input type="text" name="harga" class="form-control" value="<?php echo $dt->harga ?>" readonly>
					</div>

					<div class="form-group">
						<label>Denda/Hari</label>
						<input type="text" name="denda" class="form-control" value="<?php echo $dt->denda ?>" readonly>
					</div>

					<div class="form-group">
						<label>Tanggal Rental</label>
						<input type="date" name="tanggal_rental" class="form-control">
					</div>

					<div class="form-group">
						<label>Tanggal Kembali</label>
						<input type="date" name="tanggal_kembali" class="form-control">
					</div>

					<?php if($dt->status == '1') { ?>
						<button type="submit" class="btn btn-warning">Rental</button>
					<?php } else { ?>
						<button type="button" class="btn btn-danger disabled">Tidak Tersedia</button>

					<?php } ?>


				</form>


			<?php endforeach; ?>
		</div>
	</div>
</div>
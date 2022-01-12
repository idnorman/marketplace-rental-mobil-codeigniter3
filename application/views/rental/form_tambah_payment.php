<div class="main-content">
	<div class="section">
		<div class="section-header">
			<h1>Form Tambah Alat Pembayaran</h1>
		</div>
	</div>

	<form method="POST" action="<?php echo base_url('rental/payment/tambah_payment_aksi') ?>">
		
		<div class="form-group">
			<label>Nama Alat Pembayaran</label>
			<input type="text" name="nama_payment" class="form-control"> 
        	<?php echo form_error('nama_payment','<div class="text-small text-danger">','</div>') ?>
		</div>

		<div class="form-group">
			<label>Nomor/Key Alat Pembayaran</label>
			<input type="text" name="key_payment" class="form-control"> 
        	<?php echo form_error('key_payment','<div class="text-small text-danger">','</div>') ?>
		</div>

		<div class="form-group">
			<label>Atas Nama</label>
			<input type="text" name="atas_nama" class="form-control"> 
		</div>

		<button type="submit" class="btn btn-primary">
			Simpan
		</button>
		<button type="reset" class="btn btn-danger">
			Reset
		</button>


	</form>

</div>
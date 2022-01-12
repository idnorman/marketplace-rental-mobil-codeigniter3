<div class="main-content">
	<div class="section">
		<div class="section-header">
			<h1>Form Update Data Pembayaran</h1>
		</div>
	</div>

	<?php foreach ($payment as $pm) : ?>
	<form method="POST" action="<?php echo base_url('rental/payment/update_payment_aksi/') ?>">
		
		<div class="form-group">
			<label>Nama Alat Pembayaran</label>
			<input type="hidden" name="id_payment" value="<?php echo $pm->id_payment ?>">
			<input type="text" name="nama_payment" class="form-control" value="<?php echo $pm->nama_payment ?>"> 
        	<?php echo form_error('nama_payment','<div class="text-small text-danger">','</div>') ?>
		</div>

		<div class="form-group">
			<label>Nomor/Key Alat Pembayaran</label>
			<input type="text" name="key_payment" class="form-control" value="<?php echo $pm->key_payment ?>"> 
        	<?php echo form_error('key_payment','<div class="text-small text-danger">','</div>') ?>
		</div>

		<div class="form-group">
			<label>Atas Nama</label>
			<input type="text" name="atas_nama" class="form-control" value="<?php echo $pm->atas_nama ?>"> 
		</div>

		<button type="submit" class="btn btn-primary">
			Simpan
		</button>
		<button type="reset" class="btn btn-danger">
			Reset
		</button>


	</form>
<?php endforeach; ?>

</div>
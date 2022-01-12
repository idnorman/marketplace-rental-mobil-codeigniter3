<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Alat Pembayaran</h1>
		</div>

		<a href="<?php echo base_url('rental/payment/tambah_payment')?>" class="btn btn-primary mb-3">Tambah Alat Bayar</a>

		        <?php echo $this->session->flashdata('pesan') ?>

		<table class="table table-striped table-bordered">
			<tr>
				<th>No</th>
				<th>Nama Pembayaran</th>
				<th>Rekening/Key Pembayaran</th>
				<th>Atas Nama</th>
				<th>Action</th>
			</tr>


				
				<?php
				$no = 1;
				foreach ($payment as $pm) : ?>
				<tr>

					<td><?php echo $no++ ?></td>
					<td><?php echo $pm->nama_payment ?></td>
					<td><?php echo $pm->key_payment ?></td>
					<td><?php echo $pm->atas_nama ?></td>

					<td>
						<div class="row">
							<a class="btn btn-sm btn-primary mr-2" href="<?php echo base_url('rental/payment/update_payment/' . $pm->id_payment) ?>"><i class="fas fa-edit"></i></a>
							<a class="btn btn-sm btn-danger mr-2" href="<?php echo base_url('rental/payment/delete_payment/' . $pm->id_payment) ?>"><i class="fas fa-trash"></i></a>
						</div>

					</td>
				</tr>

				<?php endforeach; ?>

			

		</table>
	</section>
</div>
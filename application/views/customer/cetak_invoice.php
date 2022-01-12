<div style="width: 500px">
<table style="width: 100%">

	<h3>Invoice Pembayaran Anda</h3>
	<hr>
	<?php foreach($transaksi as $tr) : ?>
		

		<tr>
			<td>Nama Customer</td>
			<td>: </td>
			<td><?php echo $tr->nama ?></td>
		</tr>

		<tr>
			<td>Merk Mobil</td>
			<td>: </td>
			<td><?php echo $tr->merk ?></td>
		</tr>

		<tr>
			<td>Tanggal Rental</td>
			<td>: </td>
			<td><?php echo date('d/m/Y', strtotime($tr->tanggal_rental)); ?></td>
		</tr>

		<tr>
			<td>Tanggal Kembali</td>
			<td>: </td>
			<td><?php echo date('d/m/Y', strtotime($tr->tanggal_kembali)); ?></td>
		</tr>

		<tr>
			<td>Biaya Sewa/Hari</td>
			<td>: </td>
			<td>Rp. <?php echo number_format($tr->harga,0,',','.') ?></td>
		</tr>

		<tr>
			<?php 
				$x = strtotime($tr->tanggal_kembali);
				$y = strtotime($tr->tanggal_rental);
				$jmlHari = abs(($x - $y)/(60*60*24));

			?>
			<td>Jumlah Hari Sewa</td>
			<td>: </td>
			<td><?php echo $jmlHari; ?> Hari</td>
		</tr>

		<tr>
			<td>Status Pembayaran</td>
			<td>:</td>
			<td>
				<?php 
					if($tr->status_pembayaran == '0') {
						echo "Belum Lunas";
					}else{
						echo "Lunas";
					}
				?>
			</td>
		</tr>

		<tr style="font-weight: bold; color: red">
			<td>JUMLAH PEMBAYARAN</td>
			<td>: </td>
			<td>Rp. <?php echo number_format(($tr->harga * $jmlHari),0,',','.') ?></td>
		</tr>

	<?php endforeach; ?>
</table>
<hr>
<span style="font-weight: bold">Informasi Rental</span>
<table style="width: 100%">
	<tr>
		<td>Nama Rental</td>
		<td>:</td>
		<td><?php echo $rental[0]->nama_rental ?></td>
	</tr>
	<tr>
		<td>Alamat Rental</td>
		<td>:</td>
		<td><?php echo $rental[0]->alamat ?></td>
	</tr>
</table>
<hr>
<span style="font-weight: bold">Alat Pembayaran: </span>
	<ul>
		<?php foreach ($payment as $pm ) : ?>
			<li><?php echo $pm->nama_payment . ' ' . $pm->key_payment . ' ' . $pm->atas_nama  ?></li>
		<?php endforeach; ?>
	</ul>
</div>
<script type="text/javascript">
	window.print();
</script>
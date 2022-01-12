<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Update Data Mobil</h1>
        </div>

        <div class="card">
        	<div class="card-body">

        		<?php foreach ($mobil as $mb) : ?>
        		<form method="POST" action="<?php echo base_url('admin/data_mobil/update_mobil_aksi') ?>" enctype="multipart/form-data">
        		<div class="row">
        			<div class="col-md-6">
        				<div class="form-group">
        					<label>Type Mobil</label>
        					<input type="hidden" name="id_mobil" value="<?php echo $mb->id_mobil ?>">
        					<select name="kode_type" class="form-control">
        						<option value="<?php echo $mb->kode_type ?>"><?php echo $mb->kode_type ?></option>

        						<?php foreach ($type as $tp) :?>
        							<option value="<?php echo $tp->kode_type?>"><?php echo $tp->nama_type?></option>
        						<?php endforeach ?>
        					</select>
        					<?php echo form_error('kode_type','<div class="text-small text-danger">','</div>') ?>
        				</div>

        				<div class="form-group">
        					<label>Merk</label>
        					<input type="text" name="merk" class="form-control" value="<?php echo $mb->merk ?>">
        					<?php echo form_error('merk','<div class="text-small text-danger">','</div>') ?>
        				</div>

        				<div class="form-group">
        					<label>No. Plat</label>
        					<input type="text" name="no_plat" class="form-control" value="<?php echo $mb->no_plat ?>">
        					<?php echo form_error('no_plat','<div class="text-small text-danger">','</div>') ?>
        				</div>

        				<div class="form-group">
        					<label>Warna</label>
        					<input type="text" name="warna" class="form-control" value="<?php echo $mb->warna ?>">
        					<?php echo form_error('warna','<div class="text-small text-danger">','</div>') ?>
        				</div>

                        <div class="form-group">
                            <label>AC</label>
                            <select name="ac" class="form-control">
                                <option <?php if($mb->ac == 1){echo "selected='selected'";}
                                    echo $mb->ac;?> value="1">Tersedia</option>

                                <option <?php if($mb->ac == 0){echo "selected='selected'";}
                                    echo $mb->ac;?> value="0">Tidak Tersedia</option>
                            </select>
                            <?php echo form_error('ac','<div class="text-small text-danger">','</div>') ?>
                        </div>

                        <div class="form-group">
                            <label>Supir</label>
                            <select name="supir" class="form-control">
                                <option <?php if($mb->supir == 1){echo "selected='selected'";}
                                    echo $mb->supir;?> value="1">Tersedia</option>

                                <option <?php if($mb->supir == 0){echo "selected='selected'";}
                                    echo $mb->supir;?> value="0">Tidak Tersedia</option>
                            </select>
                            <?php echo form_error('supir','<div class="text-small text-danger">','</div>') ?>
                        </div>


                        <div class="form-group">
                            <label>MP3 Player</label>
                            <select name="mp3_player" class="form-control">
                                <option <?php if($mb->mp3_player == 1){echo "selected='selected'";}
                                    echo $mb->mp3_player;?> value="1">Tersedia</option>

                                <option <?php if($mb->mp3_player == 0){echo "selected='selected'";}
                                    echo $mb->mp3_player;?> value="0">Tidak Tersedia</option>
                            </select>
                            <?php echo form_error('mp3_player','<div class="text-small text-danger">','</div>') ?>
                        </div>

                        <div class="form-group">
                            <label>Central Lock</label>
                            <select name="central_lock" class="form-control">
                                <option <?php if($mb->central_lock == 1){echo "selected='selected'";}
                                    echo $mb->central_lock;?> value="1">Tersedia</option>

                                <option <?php if($mb->central_lock == 0){echo "selected='selected'";}
                                    echo $mb->central_lock;?> value="0">Tidak Tersedia</option>
                            </select>
                            <?php echo form_error('central_lock','<div class="text-small text-danger">','</div>') ?>
                        </div>


                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option <?php if($mb->status == 1){echo "selected='selected'";}
                                    echo $mb->status;?> value="1">Tersedia</option>

                                <option <?php if($mb->status == 0){echo "selected='selected'";}
                                    echo $mb->status;?> value="0">Tidak Tersedia</option>
                            </select>
                            <?php echo form_error('status','<div class="text-small text-danger">','</div>') ?>
                        </div>



        			</div>
        			<div class="col-md-6">

                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="harga" class="form-control" value="<?php echo $mb->harga ?>">
                            <?php echo form_error('harga','<div class="text-small text-danger">','</div>') ?>
                        </div>

                        <div class="form-group">
                            <label>denda</label>
                            <input type="text" name="denda" class="form-control" value="<?php echo $mb->denda ?>">
                            <?php echo form_error('denda','<div class="text-small text-danger">','</div>') ?>
                        </div>

        				<div class="form-group">
        					<label>Tahun</label>
        					<input type="number" name="tahun" class="form-control" value="<?php echo $mb->tahun ?>">
        					<?php echo form_error('tahun','<div class="text-small text-danger">','</div>') ?>
        				</div>

        				<div class="form-group">
        					<label>Status</label>
        					<select name="status" class="form-control">
        						<option <?php if($mb->status == 1){echo "selected='selected'";}
        							echo $mb->status;?> value="1">Tersedia</option>

        						<option <?php if($mb->status == 0){echo "selected='selected'";}
        							echo $mb->status;?> value="0">Tidak Tersedia</option>
        					</select>
        					<?php echo form_error('status','<div class="text-small text-danger">','</div>') ?>
        				</div>

                        <div class="form-group">
                            <label>Pemilik Rental</label>
                            <select name="nama_rental" class="form-control">
                                <option value="<?php echo $mb->nama_rental?>"><?php echo $mb->nama_rental?></option>
                                <?php foreach ($nama_rental as $nr) :?>
                                    <?php if($mb->nama_rental != $nr->nama_rental) { ?>
                                        <option value="<?php echo $nr->nama_rental?>"><?php echo $nr->nama_rental?></option>
                                    <?php }else{?>
                                    <?php } ?>
                                <?php endforeach ?>

                            </select>
                            <?php echo form_error('nama_rental','<div class="text-small text-danger">','</div>') ?>
                        </div>


        				<div class="form-group">
        					<label>Gambar</label>
        					<input type="file" name="gambar" class="form-control">
        				</div>

        				<button type="submit" class="btn btn-primary">Simpan</button>
        				<button type="reset" class="btn btn-danger">Reset</button>
        			</div>
        		</div>
        		</form>
        	<?php endforeach; ?>
        	</div>
        </div>
    </section>
</div> 
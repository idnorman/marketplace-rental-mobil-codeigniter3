<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Update Data Customer</h1>
        </div>
    </section>

    <?php foreach ($customer as $cs) : ?>
    <form method="POST" action="<?php echo base_url('admin/data_customer/update_customer_aksi') ?>">
    	
    	<div class="form-group">
    		<label>Nama</label>
    		<input type="hidden" name="id_customer" value="<?php echo $cs->id_customer ?>">
    		<input type="text" name="nama" class="form-control" value="<?php echo $cs->nama ?>">
    		<?php echo form_error('nama','<span class="text-small text-danger">','</span>') ?>
    	</div>
    	<div class="form-group">
    		<label>Username</label>
    		<input type="text" name="username" class="form-control" value="<?php echo $cs->username ?>">
    		<?php echo form_error('username','<span class="text-small text-danger">','</span>') ?>
    	</div>
    	<div class="form-group">
    		<label>Alamat</label>
    		<input type="text" name="alamat" class="form-control" value="<?php echo $cs->alamat ?>">
    		<?php echo form_error('alamat','<span class="text-small text-danger">','</span>') ?>
    	</div>
    	<div class="form-group">
    		<label>Gender</label>
    		<select class="form-control" name="gender">
    			<option value="<?php echo $cs->gender ?>"><?php echo $cs->gender ?></option>
    			<option value="Laki-laki">Laki-laki</option>
    			<option value="Perempuan">Perempuan</option>
    		</select>
    		<?php echo form_error('gender','<span class="text-small text-danger">','</span>') ?>
    	</div>
    	<div class="form-group">
    		<label>No. Telepon</label>
    		<input type="text" name="no_telepon" class="form-control" value="<?php echo $cs->no_telp ?>">
    		<?php echo form_error('no_telepon','<span class="text-small text-danger">','</span>') ?>
    	</div>
    	<div class="form-group">
    		<label>No. KTP</label>
    		<input type="text" name="no_ktp" class="form-control"  value="<?php echo $cs->no_ktp ?>">
    		<?php echo form_error('no_ktp','<span class="text-small text-danger">','</span>') ?>
    	</div>


        <div class="form-group">
            <label>Level Customer</label>
            <select class="form-control" name="role_id">
                <option value="1" <?php if($cs->role_id == '1') echo ' selected="selected"'; ?>>Admin</option>
                <option value="2" <?php if($cs->role_id == '2') echo ' selected="selected"'; ?>>Customer Rental</option>
                <option value="3" <?php if($cs->role_id == '3') echo ' selected="selected"'; ?>>Pemilik Rental</option>
            </select>
        </div>

        <div class="form-group">
            <label>Perusahaan (opsional)</label>
            <input type="text" name="nama_rental" class="form-control"  value="<?php echo $cs->nama_rental ?>">
        </div>
    	<div class="form-group">
    		<label>Password</label>
    		<input type="password" name="password" class="form-control">
    		<?php echo form_error('password','<span class="text-small text-danger">','</span>') ?>
    	</div>

    	<button type="submit" class="btn btn-sm btn-primary">Simpan</button>
    	<button type="reset" class="btn btn-sm btn-danger">Reset</button>
    </form>
<?php endforeach; ?>
</div>
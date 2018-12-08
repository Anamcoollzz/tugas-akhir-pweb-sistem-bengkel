<div class="form-group">
	<label for="nama">Nama</label>
	<input value="<?=$akun->nama?>" type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
</div>
<div class="form-group">
	<label for="username">Username</label>
	<input value="<?=$akun->username?>" type="text" name="usernamejenis_transaksi" class="form-control" id="username" placeholder="Username">
</div>
<div class="form-group">
	<label for="password">Password</label>
	<input value="<?=$akun->password?>" type="password" name="password" class="form-control" id="password" placeholder="Password">
</div>
<select class="form-control" name="role" id="role">
	<option value="Kasir">Kasir</option>
	<option value="Manajer">Manajer</option>
	<option value="Admin">Admin</option>
</select>
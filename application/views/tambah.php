<form action="<?= base_url('page/save_tambah') ?>" method="POST">
	
	<div class="form-group">
		<label for="exampleInputEmail1">Nama Lengkap</label>
		<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap">
	</div>

	<div class="form-group">
		<label for="exampleInputEmail1">Tempat Lahir</label>
		<input type="text" name="tmp_lahir" class="form-control" placeholder="Masukkan Tempat Lahir">
	</div>

	<div class="form-group">
		<label for="exampleInputEmail1">Tanggal Lahir</label>
		<input type="date" name="tgl_lahir" class="form-control">
	</div>

	<div class="form-group">
		<label for="exampleInputEmail1">Email</label>
		<input type="email" name="email" class="form-control" placeholder="Masukkan email">
	</div>

	<div class="form-group">
		<label for="exampleInputEmail1">Jenis Kelamin</label>
		<select name="gender" class="form-control">
			<option>Jenis Kelamin</option>
			<option value="L">Laki-Laki</option>
			<option value="P">Perempuan</option>
		</select>
	</div>

	<div class="form-group">
		<label for="beratbadan">Berat Badan</label>
		<div class="input-group mb-3">
			<input type="text" name="bb" id="bb" class="form-control" onkeyup="hitung();" placeholder="Masukkan Berat Badan">
			<div class="input-group-append">
				<span class="input-group-text">KG</span>
			</div>
		</div>
	</div>


	<div class="form-group">
		<label for="tinggibadan">Tinggi Badan</label>
		<div class="input-group mb-3">
			<input type="text" name="tb" id="tb" onkeyup="hitung();" class="form-control" placeholder="Masukkan Tinggi Badan">
			<div class="input-group-append">
				<span class="input-group-text">M</span>
			</div>
		</div>
	</div>

	<div class="form-group">
		<label for="tinggibadan">Catatan</label>
		<input type="text" name="catatan" id="catatan" class="form-control" placeholder="Catatan Untuk Pasien">
		<input type="hidden" name="bmi" id="bmi">
		<input type="hidden" name="status_bmi" id="status_bmi">
	</div>

	<center><div id="hasilbmi"></div></center>

	<div class="card-footer">
		<button type="submit" class="btn btn-info">Simpan Data</button>
		<button type="reset" class="btn btn-default float-right">Cancel</button>
	</div>

</form>


<script type="text/javascript">
	function hitung() {
		let bb = document.getElementById("bb").value;
		let tb = document.getElementById("tb").value;
		let bmi = bb / (tb * tb);

		if (bmi < 18.5) {
			document.getElementById("hasilbmi").innerHTML="<div class='toast bg-warning fade show' role='alert' aria-live='assertive' aria-atomic='true'><div class='toast-body'>Kekurangan Berat Badan</div></div>";
			document.getElementById("status_bmi").value='Kekurangan Berat Badan';
		}else if(bmi <= 24.9){
			document.getElementById("hasilbmi").innerHTML="<div class='toast bg-success fade show' role='alert' aria-live='assertive' aria-atomic='true'><div class='toast-body'>Berat badan Normal</div></div>";
			document.getElementById("status_bmi").value='Berat Badan Normal';
		}else if(bmi <= 29.9){
			document.getElementById("hasilbmi").innerHTML="<div class='toast bg-warning fade show' role='alert' aria-live='assertive' aria-atomic='true'><div class='toast-body'>Kelebihan Berat Badan</div></div>";
			document.getElementById("status_bmi").value='Kelebihan Berat Badan';
		}else if(bmi >= 30){
			document.getElementById("hasilbmi").innerHTML="<div class='toast bg-danger fade show' role='alert' aria-live='assertive' aria-atomic='true'><div class='toast-body'>Obesitas</div></div>";
			document.getElementById("status_bmi").value='Obesitas';
		}

		document.getElementById("bmi").value=bmi;
	}
</script>
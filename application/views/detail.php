<?php foreach ($data_pasien as $data_pasien) {} ?>

<form action="<?= base_url('page/save_edit/').$this->uri->segment(3) ?>" method="POST">
	
	<div class="form-group">
		<label for="exampleInputEmail1">Nama Lengkap</label>
		<div class="input-group mb-3">
			<?php echo $data_pasien->nama ?>
		</div>
	</div>

	<div class="form-group">
		<label for="exampleInputEmail1">Tempat Lahir</label>
		<div class="input-group mb-3">
			<?php echo $data_pasien->tmp_lahir ?>
		</div>
	</div>

	<div class="form-group">
		<label for="exampleInputEmail1">Tanggal Lahir</label>
		<div class="input-group mb-3">
			<?php echo $data_pasien->tgl_lahir ?>
		</div>
	</div>

	<div class="form-group">
		<label for="exampleInputEmail1">Email</label>
		<div class="input-group mb-3">
			<?php echo $data_pasien->email ?>
		</div>
	</div>

	<div class="form-group">
		<label for="exampleInputEmail1">Jenis Kelamin</label>
		<div class="input-group mb-3">
			<?php echo $data_pasien->gender ?>
		</div>
	</div>

	<div class="form-group">
		<label for="beratbadan">Berat Badan</label>
		<div class="input-group mb-3">
			<?php echo $data_pasien->berat ?>
		</div>
	</div>


	<div class="form-group">
		<label for="tinggibadan">Tinggi Badan</label>
		<div class="input-group mb-3">
			<?php echo $data_pasien->tinggi ?>
		</div>
	</div>

	<div class="form-group">
		<label for="exampleInputEmail1">BMI</label>
		<div class="input-group mb-3">
			<?php echo $data_pasien->bmi ?>
		</div>
	</div>

	<div class="form-group">
		<label for="exampleInputEmail1">Status BMI</label>
		<div class="input-group mb-3">
			<?php echo $data_pasien->status_bmi ?>
		</div>
	</div>

	<div class="form-group">
		<label for="exampleInputEmail1">Catatan</label>
		<div class="input-group mb-3">
			<?php echo $data_pasien->catatan ?>
		</div>
	</div>

	<center><div id="hasilbmi"></div></center>


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
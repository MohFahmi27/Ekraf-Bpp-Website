<?php require_once('header.php'); ?>
<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "<article class=\"message is-success\">";
                echo "<div class=\"message-body\">";
                echo "Pendaftaran Lowongan baru berhasil!";
                echo "</div>";
                echo "</article>";
            } else {
                echo "<article class=\"message is-danger\">";
                echo "<div class=\"message-body\">";
                echo "Pendaftaran Lowongan gagal!";
                echo "</div>";
                echo "</article>";
            }
        ?>
    </p>
<?php endif; ?>
<script src="asset/ckeditor/ckeditor.js"></script>
	<div class="columns is-centered" id="postjob">
		<div class="column is-6">
			<a href="index.php" class="has-text-dark is-size-5">
				<u>
					← kembali ke beranda
			 	</u>
			</a>
			<h2 class="is-size-3 is-fwindsor mt-4">Posting Lowongan Kerja</h2>
			<p class="is-size-6 has-text-grey">Pastikan anda mengisi data instansi dengan benar dan sesuai</p>
			<br>

			<form action="input_kerja_db.php" method="POST" enctype="multipart/form-data">
				<div class="field mb-5">
					<label class="is-size-5">Nama Instansi</label>
					<div class="control mt-2">
						<input class="input is-medium" type="text" placeholder="Nama Instansi" required name="name">
					</div>
				</div>

				<div class="field mb-5">
					<label class="is-size-5">Logo Instansi</label>
					<div class="file mt-2 is-boxed has-name is-fullwidth">
					    <label class="file-label">
					      	<input class="" type="file" name="gambar" accept="image/*">
					      	<!-- <span class="file-cta">
					        	<span class="file-icon">
					          		<i class="fas fa-upload"></i>
					        	</span>
					        	<span class="file-label has-text-centered">
					          		Pilih Gambar
					        	</span>
					      	</span>
				    		<span class="id-file-name file-name">No file selected</span> -->
					    </label>
					</div>
				</div>

				<div class="field mb-5">
					<label class="is-size-5">Bidang Instansi</label>
					<div class="control mt-2">
						<div class="select is-fullwidth is-medium">
						  <select name="bidang_perkerjaan">
						    <option selected disabled>Pilih Bidang</option>
						    <option>Kuliner</option>
						    <option>Pendidikan</option>
						    <option>Telekomunikasi</option>
						    <option>Pemerintahan</option>
						    <option>Informasi dan Teknologi</option>
						    <option>Logistik</option>
						    <option>Energi dan Pertambangan</option>
						    <option>Perbankan</option>
						    <option>Usaha Mandiri</option>
						  </select>
						</div>
					</div>
				</div>

				

				<div class="field mb-5">
					<label class="is-size-5">Email</label>
					<div class="control mt-2">
						<input class="input is-medium" type="text" placeholder="Email instansi" required name="email">
					</div>
					<p class="help is-size-6 has-text-grey">Sebagai sarana calon pekerja mengirim berkas pendaftaran</p>
				</div>

				<label class="is-size-5">No Whatsapp</label>
				<div class="field has-addons mb-5 mt-2">
					<div class="control">
						<a class="button is-static is-medium">
							+62
						</a>
					</div>
					<div class="control is-expanded">
						<input class="input is-medium" type="text" placeholder="8xxx" required name="contact_perusahaan">
					</div>
				</div>

				<div class="field mb-5">
					<label class="is-size-5">Alamat</label>
					<div class="control mt-2">
						<input class="input is-medium" type="text" placeholder="Lokasi instansi" required name="lokasi_perusahaan">
					</div>
				</div>

				<div class="field mb-5">
					<label class="is-size-5">Batas Pendaftaran</label>
					<div class="control mt-2">
						<input class="input is-medium" type="date" placeholder="Nama Instansi" required name="tanggal">
					</div>
				</div>

				<div class="field mb-5">
					<label class="is-size-5">Posisi Pekerjaan Yang Dibutuhkan</label>
					<div class="control mt-2">
						<input class="input is-medium" type="text" placeholder="Admin, CS, Etc" required name="role_perkerjaan">
					</div>
				</div>

				<div class="field mb-7">
					<label class="is-size-5">Syarat atau Deskripsi Perkerjaan</label>
					<div class="control mt-2">
						<textarea rows="20" cols="70" class="ckeditor" id="deskripsi" name="deskripsi" required></textarea>
					</div>
				</div>

				<div class="field mb-5">
					<label class="is-size-5">Jenis Pekerjaan</label>
					<div class="control mt-2">
						<div class="select is-fullwidth is-medium">
						  <select name="jenis_perkerjaan">
						    <option selected disabled>Pilih Jenis</option>
						    <option>Full-time</option>
						    <option>Part-time</option>
							<option>Internship</option>
						    <option>Freelance</option>
						    <option>Remote</option>
						  </select>
						</div>
					</div>
				</div>
				<div class="field">
					<p class="control">
						<button type="submit" name="kirim" class="button is-dark is-medium is-fullwidth">Daftarkan Lowongan</button>
					</p>
				</div>
				<p class="is-size-6 has-text-centered has-text-grey">Setelah submit, Mohon tunggu 1x24 jam via email untuk proses verifikasi</p>
				
			</form>
		</div>
	</div>			
<?php require_once('footer.php'); ?>

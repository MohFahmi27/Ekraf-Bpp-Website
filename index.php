<?php require_once('header.php'); ?>
	<?php 
	include("koneksi.php");
	$sql = "SELECT * FROM perkerjaan WHERE status='Verify' AND state='Sudah Direview' AND tanggal_berlaku > NOW() ORDER BY tgl_input DESC";
	$query = mysqli_query($koneksi, $sql);
	?>
				<div class="columns" id="headerjob">
					<div class="column is-7">
						<h1 class="is-fwindsor is-size-1">
							Portal Lowongan Kerja Kota Balikpapan
						</h1>
						<p class=" is-size-5 mt-3" style="width: 80%">
							Temukan pekerjaan di berbagai bidang sesuai dengan minat dan keahlianmu
						</p>
						<br>
						<a href="index.php#jobs" class="button is-dark is-medium is-semibolded is-outlined">
								Lihat Lowongan
						</a>
						<div class="featured py-4 mt-6">
							<p class="is-size-6">Featured by</p>
							<figure class="image is-flex">
								<img src="asset/img/ekraf.png" class="px-2 py-2" alt="ekraf balikpapan">
								<img src="asset/img/balikpapan.jpg" class="px-2 py-2" alt="disporapar balikpapan">
								<img src="asset/img/index.jpg" class="px-2 py-2" alt="balikpapan">

							</figure>
						</div>
					</div>
					<div class="column" style="">
						<img class="" width="100%" src="asset/img/Header-3-2.png" alt="">
					</div>
				</div>
				<section class="section pt-0" id="jobs">
					<div class="has-text-centered my-6">
						<p class="is-size-2 is-fwindsor">
							Lowongan Kerja
						</p>
						<p class="is-size-5 has-text-grey">Beberapa yang tersedia saat ini</p>
					</div>
					<div class="columns is-centered is-multiline item-job-wrap">
					<?php 
						while ($lowongan = mysqli_fetch_array($query)) { ?>
						<div class="column is-10">
							<a href="detail.php?id=<?php echo $lowongan['id_perkerjaan'] ?>" class="columns py-4 px-3 item-job">
								<div class="column is-narrow">
									<figure class="image is-64x64">
									  <img class="is-rounded" src="asset/img/<?php echo $lowongan['img_perusahaan'] ?>">
									</figure>
								</div>
								<div class="column">
									<p class="has-text-dark is-size-5"><?php echo $lowongan['nama_perusahaan'] ?></p>
									<p class="has-text-dark is-size-4 is-semibolded"><?php echo $lowongan['role_perkerjaan'] ?></p>
									<p class="has-text-dark is-size-5"><?php echo $lowongan['jenis_perkerjaan'] ?></p>
								</div>
								<div class="column is-3" style="align-self: center;">
									<p class="has-text-dark "><?php echo $lowongan['lokasi'] ?></p>
								</div>
								<div class="column is-narrow">
									<p class="has-text-dark "><?php echo $lowongan['tanggal_berlaku'] ?></p>
								</div>
							</a>
						</div>
					<?php } ?>					
					</div>
				</section>		
<?php require_once('footer.php'); ?>
			
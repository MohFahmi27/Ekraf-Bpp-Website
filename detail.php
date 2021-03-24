<?php require_once('header.php'); ?>
<?php
include("koneksi.php");

    if(isset($_GET['id'])){

        $id = $_GET['id'];

    } else {
        die("akses dilarang...");
    }
    $sql = mysqli_query($koneksi, "SELECT * FROM perkerjaan WHERE id_perkerjaan=$id");
    $result = mysqli_fetch_array($sql);

?>
	<div class="columns is-centered" id="detailjob">
		<div class="column is-7">
			<a href="index.php" class="has-text-dark is-size-5">
				<u>
					← kembali ke beranda
			 	</u>
			 </a>
			<h1 class="is-fwindsor is-size-1 mt-4">
				<?php echo $result['role_perkerjaan'] ?>
			</h1>
			<div class="box-detail px-5 py-5 my-5 is-size-5 is-semibolded">
				<p> Lokasi : <?php echo $result['lokasi'] ?></p>
				<p> Jenis : <?php echo $result['jenis_perkerjaan'] ?></p>
				<p> Hingga : <?php echo date("d - M - Y", strtotime($result['tanggal_berlaku'])) ?></p>
				<p> </p>
			</div>
			<div class="is-size-6 mt-6" style="line-height: 1.8;">
				<?php echo $result['deskripsi_perkerjaan'] ?>
			</div>
		</div>
		<div class="column is-4">
			<div class="box-detail2 has-text-centered is-flex is-align-items-center is-flex-direction-column pt-6 pb-5">
				<figure class="image is-128x128 is-rounded">
					<img src="asset/img/<?php echo $result['img_perusahaan'] ?>" class="is-rounded"  alt="">
				</figure>
				<h1 class="is-size-4 has-text-weight-semibold mt-5"><?php echo $result['nama_perusahaan'] ?></h1>
				<h5 class="is-size-5 has-text-weight-semibold has-text-grey"><?php echo $result['bidang_perkerjaan'] ?></h5>
				<a href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&source=mailto&to=<?php echo $result['email_perusahaan'] ?>" class="button is-dark is-medium has-text-weight-semibold px-6 mt-5">Daftar Sekarang</a>
				<p class="mt-2 has-text-grey">Pastikan ketentuan dan berkas <br> anda sudah sesuai</p>
				<a href="https://wa.me/<?php echo $result['contact'] ?>" class="mt-4 is-size-6 has-text-grey-dark"><u>Ingin bertanya dahulu?</u></a>
			</div>
		</div>
	</div>		

<?php require_once('footer.php'); ?>

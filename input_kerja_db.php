<?php

include("koneksi.php");

if (isset($_POST['kirim'])) {
    $nama = $_POST['name'];
    $temp = $_FILES['gambar']['tmp_name'];
    $name_img = rand(0,9999).$_FILES['gambar']['name'];
    $email = $_POST['email'];
    $lokasi = $_POST['lokasi_perusahaan'];
    $contact = '62'+$_POST['contact_perusahaan'];
    $date = $_POST['tanggal'];
    $date = date('Y-m-d', strtotime($date));
    $jenis_perkerjaan = $_POST['jenis_perkerjaan'];
    $bidang_perkerjaan = $_POST['bidang_perkerjaan'];
    $role = $_POST['role_perkerjaan'];
    $deskripsi = $_POST['deskripsi'];
    $status = "Not Verify";
    move_uploaded_file($temp, 'asset/img/' . $name_img);
    $sql = "INSERT INTO perkerjaan (`nama_perusahaan`, `email_perusahaan`, `img_perusahaan`, `contact`, `deskripsi_perkerjaan`, `role_perkerjaan`, `tanggal_berlaku`, `jenis_perkerjaan`, `bidang_perkerjaan`, `lokasi`, `tgl_input`, `status`, `state`) VALUE ('$nama','$email', '$name_img','$contact', '$deskripsi', '$role', '$date', '$jenis_perkerjaan', '$bidang_perkerjaan', '$lokasi', NOW(), '$status', 'Belum Direview')";
    $query = mysqli_query($koneksi, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: postjob.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: postjob.php?status=gagal');
    }

} else {
    myseql_close("Akses dilarang...");
}
?>
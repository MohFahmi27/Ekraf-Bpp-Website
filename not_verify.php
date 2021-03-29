<?php


include("koneksi.php");

if(isset($_GET['id'])){

    // ambil id dari query string
    $id = $_GET['id'];
    $email = $_GET['email'];
    // buat query hapus
    $sql = "UPDATE perkerjaan SET state = 'Sudah Direview' WHERE id_perkerjaan=$id";
    $query = mysqli_query($koneksi, $sql);

    require('PHPMailer/PHPMailerAutoload.php');
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = 'ssl://smtp.gmail.com';
    $mail->Port = 465;
    $mail->isHTML();
    $mail->Username = '-';
    $mail->Password = '-';
    $mail->SetFrom('mohammadfahmi417@gmail.com', 'Administrator');
    $mail->Subject = '[UPDATE] Verifikasi Lowongan Input Kerja';
    $mail->Body = 'Mohon maaf lowongan kerja yang sudah ada lakukan telah berhasil diverifikasi, dan tidak bisa di verifikasi';
    $mail->AddAddress($email);

    $mail->Send();

    if( $query ){    
        header('Location: dashboard.php?status=sukses');
    } else {
        die("gagal verify...");
    }

} else {
    die("akses dilarang...");
}

?>
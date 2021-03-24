<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Lowongan</title>
    <link rel="stylesheet" href="asset/css/bulma.min.css">
    <link rel="stylesheet" href="asset/fontawesome-5.15.3/css/all.min.css">
</head>
<body>
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
<!-- START NAV -->
<nav class="navbar is-white">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item brand-text" href="list_lowongan_kerja.php">
              Admin Dashboard
            </a>
            <div class="navbar-burger burger" data-target="navMenu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div id="navMenu" class="navbar-menu">
            <div class="navbar-end">
                <a class="navbar-item" href="index.php">
                  Log Out
                </a>
            </div>
        </div>
    </div>
</nav>
<!-- END NAV -->

<div class="container">
  <div class="columns">
      <div class="column is-2">
          <aside class="menu is-hidden-mobile">
              <p class="menu-label">
                  General
              </p>
              <ul class="menu-list">
                  <li><a class="is-active" href="list_lowongan_kerja.php">Dashboard</a></li>
              </ul>
          </aside>
      </div>
      <div class="column is-four-fifths">
        <section class="hero is-info welcome is-small">
          <div class="hero-body">
              <a href="dashboard.php"><button class="button is-large is-info fas fa-arrow-left"> Back</button></a>
          </div>
        </section>
    <!-- START ARTICLE -->
    <div class="container">
    <div class="card article">
        <div class="card-content">
            <div class="media">
                <div class="media-content has-text-centered">
                    <p class="title article-title"><?php echo $result['jenis_perkerjaan'] ?></p>
                </div>
            </div>

            <div class="content article-body">
                <div class="columns">
                    <div class="column is-half">
                        <article class="message is-dark">
                        <div class="message-header">
                            <p class="is-6">Tanggal Di Post: </p>
                        </div>
                        <div class="message-body">
                        <?php echo date("d - M - Y | H:i", strtotime($result['tgl_input'])) ?>
                        </div>
                        </article>
                    </div>
                    <div class="column is-half">
                    <article class="message is-warning">
                        <div class="message-header">
                            <p class="is-6">Lowongan Berlaku:</p>
                        </div>
                        <div class="message-body">
                        <?php echo date("d - M - Y", strtotime($result['tanggal_berlaku'])) ?>
                    </div>
                    </article>                    
                    </div>                    
                </div>
                <div class="columns">
                    <div class="column is-one-third">
                        <article class="message is-dark">
                        <div class="message-header">
                            <p class="is-6">Nama Perusahaan: </p>
                        </div>
                        <div class="message-body">
                            <?php echo $result['nama_perusahaan'] ?>
                        </div>
                        </article>
                    </div>
                    <div class="column is-one-third">
                    <article class="message is-dark">
                    <div class="message-header">
                        <p class="is-6">Email:</p>
                    </div>
                    <div class="message-body">
                        <?php echo $result['email_perusahaan'] ?>
                    </div>
                    </article>                  
                    </div>    
                    <div class="column is-one-third">
                    <article class="message is-dark">
                    <div class="message-header">
                        <p class="is-6">Contact:</p>
                    </div>
                    <div class="message-body">
                     +<?php echo $result['contact'] ?>
                    </div>
                    </article>                  
                    </div>                
                </div>            
                
                <article class="message is-dark">
                    <div class="message-header">
                        <p class="is-6">Lokasi Perusahaan:</p>
                    </div>
                    <div class="message-body">
                    <?php echo $result['lokasi'] ?>
                    </div>
                </article>

                <article class="message is-dark">
                    <div class="message-header">
                        <p class="is-6">Role Perkerjaan:</p>
                    </div>
                    <div class="message-body">
                    <?php echo $result['role_perkerjaan'] ?>
                    </div>
                </article>

                <article class="message is-dark">
                    <div class="message-header">
                        <p class="is-6">Departement atau Bidang:</p>
                    </div>
                    <div class="message-body">
                    <?php echo $result['bidang_perkerjaan'] ?>
                    </div>
                </article>
                
                <article class="message is-dark">
                    <div class="message-header">
                        <p class="is-6 is-white">Deskripsi atau Syarat Perkerjaan:</p>
                    </div>
                    <div class="message-body">
                        <?php echo $result['deskripsi_perkerjaan'] ?>
                    </div>
                </article>
            </div>
            <nav class="level">
            <?php
            if ($result['state'] == "Belum Direview") {      
                echo "<div class=\"level-right\">"; 
                echo "<div class=\"level-item\">";
                echo "<a href='verify.php?id=".$result['id_perkerjaan']."&email=".$result['email_perusahaan']."'><button class=\"button is-info fas fa-check\"> Verifikasi</button></a>";                            
                echo "</div>";
                echo "<div class=\"level-item\">";
                echo "<a href='delete_lowongan.php?id=".$result['id_perkerjaan']."&email=".$result['email_perusahaan']."'><button class=\"button is-danger fas fa-ban\"> Tolak Verifikasi</button></a>";
                echo "</div>";
                echo "<div>";
            } 
            else if ($result['status'] == 'Not Verify' and $result['state'] == "Sudah Direview") {
                echo "<article class=\"message is-danger\">";
                echo "<div class=\"message-body\">";
                echo "Lowongan Tidak Diterima";
                echo "</div>";
                echo "</article>";
            } else {
                echo "<article class=\"message is-success\">";
                echo "<div class=\"message-body\">";
                echo "Lowongan Diterima";
                echo "</div>";
                echo "</article>";
            }
            ?>
            </nav>
        </div>                
    </div>
    </div>
<!-- END ARTICLE -->
</body>
<script async type="text/javascript" src="asset/js/bulma.js"></script>
</html>
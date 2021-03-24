<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Lowongan Dashboard</title>
    <link rel="stylesheet" href="asset/css/bulma.min.css">
    <link rel="stylesheet" href="asset/fontawesome-5.15.3/css/all.min.css">
</head>
<body>
 <!-- START NAV -->
 <nav class="navbar is-white">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item brand-text" href="../index.html">
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
                  <li><a class="is-active" href="">Dashboard</a></li>
              </ul>
          </aside>
      </div>
      <div class="column is-11">
        <section class="hero is-info welcome is-small">
          <div class="hero-body">
              <h1 class="title">
                  Hello, Admin.
              </h1>
              <h2 class="subtitle">
                  I hope you are having a great day!
              </h2>
          </div>
        </section>
        <div class="table-container">
        <table class="table is-hoverable is-striped">
          <thead>
            <tr>
              <th>Nama Perusahaan</th>
              <th>Email</th>
              <th>Contact</th>
              <th>Role Perkerjaan</th>
              <th>Tanggal Berlaku</th>
              <th>Jenis Perkerjaan</th>
              <th>Detail</th>
              <th>Verify</th>
            </tr>
          </thead>
          <tbody>
            <?php 
                $sql = "SELECT * FROM perkerjaan ORDER BY tgl_input DESC";
                $query = mysqli_query($koneksi, $sql);

                while ($lowongan = mysqli_fetch_array($query)) {
                    echo "<tr>";
                        echo "<td>".$lowongan['nama_perusahaan']."</td>";
                        echo "<td>".$lowongan['email_perusahaan']."</td>";
                        echo "<td>".$lowongan['contact']."</td>";
                        echo "<td>".$lowongan['role_perkerjaan']."</td>";
                        echo "<td>".$lowongan['tanggal_berlaku']."</td>";
                        echo "<td>".$lowongan['jenis_perkerjaan']."</td>";
                        echo "<td>";
                        echo "<a href='detail_dashboard.php?id=".$lowongan['id_perkerjaan']."'><button class=\"button is-small is-link fas fa-file\"></button></a>";
                        echo "</td>";
                        echo "<td>";
                        if ($lowongan['state'] == "Belum Direview") {                            
                            echo "<a href='verify.php?id=".$lowongan['id_perkerjaan']."&email=".$lowongan['email_perusahaan']."'><button class=\"button is-small is-info fas fa-check\"></button></a>";                            
                            echo "<a href='not_verify.php?id=".$lowongan['id_perkerjaan']."&email=".$lowongan['email_perusahaan']."'><button class=\"button is-small is-danger fas fa-ban\"></button></a>";
                        } 
                        else if ($lowongan['status'] == 'Not Verify' and $lowongan['state'] == "Sudah Direview") {
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
                    echo "</tr>";                
                }
            ?>
          </tbody>
      </table> 
      </div>
    </div>
  </div>
</div>
<script async type="text/javascript" src="asset/js/bulma.js"></script>
</body>
</html>
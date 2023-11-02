<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <title>Home</title>
</head>

<body>
  <br><br><br><br><br>
  <!-- navbar  -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid py-2 bg-navbar fixed-top">
      <a class="navbar-brand ps-5" href="#">
        <img src="image/logo/HEalty.png" alt="" class="img-responsive custom-img">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end me-5" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link mx-3 text-primary fw-bold text-light" href="home.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-3 text-light" href="performance.php">PERFORMANCE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-3 text-light" href="index.php">LOG OUT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- section 1 -->
  <section class="container h-auto mx-auto">
    <div class="row pt-5">
      <!-- PIE CHART -->
      <div class="col-sm-4 d-flex align-items-center justify-content-center px-2 py-2">
        <div class="card px-5 w-100 h-100">
          <div class="card-body pie-chart-padding">
            <h3 class="d-flex align-item-center justify-content-center text-adjust">Karyawan</h3>
            <p id="date" class="text-adjust text-center py-1"></p>
            <canvas id="karyawanChart"></canvas>
          </div>
        </div>
      </div>

      <!-- KARYAWAN TETAP -->
      <div class="col-sm-4 d-flex align-items-center justify-content-center px-2 py-2">
        <div class="card py-4 w-100 h-100">
          <div class="card-body ">
            <h3 class="d-flex align-item-center justify-content-center text-adjust text-center">Hasil Performance Karyawan Tetap</h3>
            <p id="date_y" class="text-adjust text-center py-1"></p>
            <canvas id="TetapChart" class="pt-2"></canvas>
            
          </div>
        </div>
      </div>

      <!-- KARYAWAN TIDAK TETAP -->
      <div class="col-sm-4 d-flex align-items-center justify-content-center px-2 py-2">
        <div class="card py-4 w-100 h-100">
          <div class="card-body">
            <h3 class="d-flex align-item-center justify-content-center text-adjust text-center">Hasil Performance Karyawan Tidak Tetap</h3>
            <p id="date_y2" class="text-adjust text-center py-1"></p>
            <canvas id="TidakTetapChart" class="pt-2"></canvas>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- section 2 table karyawan tetap -->
  <section class="container h-auto mx-auto mt-3 px-2">

    <div class="row">
      <div class="col">
        <div class="card mt-5 mb-2">
          <h2 class="display-6 text-center mb-2"><b>Karyawan Tetap</b> <br> dengan Performance C dan D 2023</h2>
        </div>
      </div>
    </div>

    <table class="table table-striped table-responsive text-center">
      <tr>
        <th>Foto</th>
        <th>NIK</th>
        <th>Nama</th>
        <th>Position</th>
      </tr>
      <?php

      include_once("connection.php");

      $query = "SELECT nik, foto, nama, position FROM performance WHERE status_kerja = 'Tetap' AND (grade = 'C' OR grade = 'D');";
      $result = mysqli_query($con, $query);
      if (mysqli_num_rows($result) > 0) {
        while ($data = mysqli_fetch_array($result)) {
          ?>
          <tr class="align-middle">
            <td>
              <?= "<img src='image/" . $data['foto'] . "' width='80' height='80' title='" . $data['nama'] . "'/>"; ?>
            </td>
            <td>
              <?= htmlspecialchars($data['nik']) ?>
            </td>
            <td>
              <?= htmlspecialchars($data['nama']) ?>
            </td>
            <td>
              <?= htmlspecialchars($data['position']) ?>
            </td>
          </tr>

          <?php
        }
      } else {
        ?>
        <tr>
          <td colspan="8" align="center"><i>Data Belum Ada</i></td>
        </tr>
        <?php
      }
      ?>
    </table>
  </section>

  <!-- section 3 table karyawan tidak tetap-->
  <section class="container h-auto mx-auto mt-5 px-2 py-2">

    <div class="row">
      <div class="col">
        <div class="card mt-5 mb-2">
          <div class="display-6 text-center mb-2"><b>Karyawan Tidak Tetap</b> <br> dengan Performance C dan D 2023</div>
        </div>
      </div>
    </div>

    <table class="table table-striped table-responsive text-center">
      <tr>
        <th>Foto</th>
        <th>NIK</th>
        <th>Nama</th>
        <th>Position</th>
      </tr>
      <?php

      // include_once("connection.php");
      
      $query = "SELECT nik, foto, nama, position FROM performance WHERE status_kerja = 'Tidak Tetap' AND (grade = 'C' OR grade = 'D');";
      $result = mysqli_query($con, $query);
      if (mysqli_num_rows($result) > 0) {
        while ($data = mysqli_fetch_array($result)) {
          ?>
          <tr class="align-middle">
            <td>
              <?= "<img src='image/" . $data['foto'] . "' width='80' height='80' title='" . $data['nama'] . "'/>"; ?>
            </td>
            <td>
              <?= htmlspecialchars($data['nik']) ?>
            </td>
            <td>
              <?= htmlspecialchars($data['nama']) ?>
            </td>
            <td>
              <?= htmlspecialchars($data['position']) ?>
            </td>
          </tr>

          <?php
        }
      } else {
        ?>
        <tr>
          <td colspan="8" align="center"><i>Data Belum Ada</i></td>
        </tr>
        <?php
      }
      ?>
    </table>
  </section>

  <br><br>
  <!-- footer -->
  <footer class="pt-3 mt-4 bg-black container-fluid text-light">
      <div class="row pt-3">
        <ul class="nav justify-content-center pb-2">
          <li class="nav-item mx-5 h4">
            <a href="home.php" class="nav-link px-2 text-light">Home</a>
          </li>
          <li class="nav-item mx-5 h4">
            <a href="performance.php" class="nav-link px-2 text-light">Performance</a>
          </li>
        </ul>
      </div>
      <hr class="d-flex justify-content-center mx-auto">
      <div class="row px-5 mx-5">
        <div class="col ps-5 ms-5">
          <img src="image/logo/HEalty.png" alt="logo" class="img-fluid mx-auto d-block footer-custom-img">
        </div>
        <div class="col pe-5 me-5 d-flex flex-column justify-content-center ">
          <div class="row">

            <table>
              <tr>
                <td class="py-3">
                  <img src="icon/marker.png" alt="location"
                    style="width: 20px; filter: invert(100%) sepia(0%) saturate(7482%) hue-rotate(72deg) brightness(99%) contrast(99%);">
                  PT. Health Foods Indonesia Jaya
                </td>
              </tr>
              <tr>
                <td class="pb-3">
                  <img src="icon/phone-call.png" alt="Phone Number"
                    style="width: 20px; filter: invert(100%) sepia(0%) saturate(7482%) hue-rotate(72deg) brightness(99%) contrast(99%);">
                  (123)
                  456-7890
                </td>
              <tr>
                <td class="pb-3">
                  <img src="icon/fax.png" alt="Fax"
                    style="width: 20px; filter: invert(100%) sepia(0%) saturate(7482%) hue-rotate(72deg) brightness(99%) contrast(99%);">
                  #(123) 456-7890
                </td>
              </tr>
            </table>
          </div>

          <br />
          <div class="row bg-black">
            <ul class="icon">
              <li><a href="#"><img src="icon/instagram.png" alt="ig"></a></li>
              <li><a href="#"><img src="icon/facebook.png" alt="fb"></a></li>
              <li><a href="#"><img src="icon/linkedin.png" alt="li"></a></li>
              <li><a href="#"><img src="icon/youtube.png" alt="yt"></a></li>
              <li><a href="#"><img src="icon/twitter.png" alt="tw"></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <p class="text-center text-light pb-5">© 2023 PT. Health Foods Indonesia Jaya, Inc</p>
      </div>

    </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-..."
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>

  <script>
    <?php
    include('connection.php');
    $query1 = "SELECT * from performance WHERE status_kerja = 'Tetap'";
    $query2 = "SELECT * from performance WHERE status_kerja = 'Tidak Tetap'";

    if ($result = mysqli_query($con, $query1)) {
      $rowcount1 = mysqli_num_rows($result);
    }
    if ($result = mysqli_query($con, $query2)) {
      $rowcount2 = mysqli_num_rows($result);
    }

    $queryA_T = "SELECT * from performance WHERE grade = 'A' AND status_kerja = 'Tetap'";
    $queryB_T = "SELECT * from performance WHERE grade = 'B' AND status_kerja = 'Tetap'";
    $queryC_T = "SELECT * from performance WHERE grade = 'C' AND status_kerja = 'Tetap'";
    $queryD_T = "SELECT * from performance WHERE grade = 'D' AND status_kerja = 'Tetap'";

    if ($result = mysqli_query($con, $queryA_T)) {
      $rowcountA = mysqli_num_rows($result);
    }
    if ($result = mysqli_query($con, $queryB_T)) {
      $rowcountB = mysqli_num_rows($result);
    }
    if ($result = mysqli_query($con, $queryC_T)) {
      $rowcountC = mysqli_num_rows($result);
    }
    if ($result = mysqli_query($con, $queryD_T)) {
      $rowcountD = mysqli_num_rows($result);
    }

    $queryA_TT = "SELECT * from performance WHERE grade = 'A' AND status_kerja = 'Tidak Tetap'";
    $queryB_TT = "SELECT * from performance WHERE grade = 'B' AND status_kerja = 'Tidak Tetap'";
    $queryC_TT = "SELECT * from performance WHERE grade = 'C' AND status_kerja = 'Tidak Tetap'";
    $queryD_TT = "SELECT * from performance WHERE grade = 'D' AND status_kerja = 'Tidak Tetap'";

    if ($result = mysqli_query($con, $queryA_TT)) {
      $rowcountA_TT = mysqli_num_rows($result);
    }
    if ($result = mysqli_query($con, $queryB_TT)) {
      $rowcountB_TT = mysqli_num_rows($result);
    }
    if ($result = mysqli_query($con, $queryC_TT)) {
      $rowcountC_TT = mysqli_num_rows($result);
    }
    if ($result = mysqli_query($con, $queryD_TT)) {
      $rowcountD_TT = mysqli_num_rows($result);
    }

    ?>

    const j_karyawan = document.getElementById('karyawanChart');
    const Tetap_P = document.getElementById('TetapChart');
    const TidakTetap_P = document.getElementById('TidakTetapChart');

    new Chart(j_karyawan, {
      type: 'pie',
      data: {
        labels: ['Tetap', 'Tidak Tetap'],
        datasets: [{
          label: 'Jumlah Karyawan',
          data: [<?= $rowcount1 ?>, <?= $rowcount2 ?>],
          borderWidth: 1
        }]
      },
      options: {
        
        backgroundColor : [
          'rgb(8, 160, 69)', 'rgb(107, 191, 84)'
        ]
      }
    });

    new Chart(Tetap_P, {
      type: 'bar',
      data: {
        labels: ['A', 'B', 'C', 'D'],
        datasets: [{
          label: 'Jumlah Karyawan',
          data: [<?= $rowcountA ?>, <?= $rowcountB ?>, <?= $rowcountC ?>, <?= $rowcountD ?>],
          borderWidth: 1
        }]
      },
      options: {
        
        backgroundColor : [
          'rgb(107, 191, 84)',
          'rgb(33, 211, 117)',
          'rgb(8, 160, 69)',
          'rgb(11, 110, 79)'
        ]
      }
    });

    new Chart(TidakTetap_P, {
      type: 'bar',
      data: {
        labels: ['A', 'B', 'C', 'D'],
        datasets: [{
          label: 'Jumlah Karyawan',
          data: [<?= $rowcountA_TT ?>, <?= $rowcountB_TT ?>, <?= $rowcountC_TT ?>, <?= $rowcountD_TT ?>],
          borderWidth: 1
        }]
      },
      options: {
       
        backgroundColor : [
          'rgb(107, 191, 84)',
          'rgb(33, 211, 117)',
          'rgb(8, 160, 69)',
          'rgb(11, 110, 79)'
        ],
        
      }
    });
  </script>

  <script>
    n = new Date();
    y = n.getFullYear();
    m = n.getMonth() + 1;
    d = n.getDate();
    document.getElementById("date").innerHTML = "[" + d + "-" + m + "-" + y + "]";
    document.getElementById("date_y").innerHTML = "[" + y + "]";
    document.getElementById("date_y2").innerHTML = "[" + y + "]";
  </script>

</body>

</html>
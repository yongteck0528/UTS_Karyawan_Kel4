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
  <!-- navbar  -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid py-2 bg-body-tertiary">
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
            <a class="nav-link mx-3 text-primary current-page-nav" href="home.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-3" href="performance.php">PERFORMANCE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-3" href="index.php">LOG OUT</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>


  <!-- section 1 -->
  <section class="container h-auto">

  </section>

  <!-- section 2 table karyawan tetap -->
  <section class="container h-auto mx-auto mt-5">

    <div class="row">
      <div class="col">
        <div class="card mt-5 mb-2">
          <div class="display-6 text-center mb-2"><b>Karyawan Tetap</b> <br> dengan Performance C dan D 2023</div>
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
          <tr>
            <td>
              <?= htmlspecialchars($data['foto']) ?>
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
  <section class="container h-auto mx-auto mt-5">

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
          <tr>
            <td>
              <?= htmlspecialchars($data['foto']) ?>
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

  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

  <!-- footer -->
  <footer class="pt-3 mt-4 bg-black container-fluid text-light">
    <div class="row pt-3">
      <ul class="nav justify-content-center pb-2">
        <li class="nav-item mx-5 h4">
          <a href="#" class="nav-link px-2 text-light">Home</a>
        </li>
        <li class="nav-item mx-5 h4">
          <a href="#" class="nav-link px-2 text-light">Performance</a>
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
                Company Name
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
      <p class="text-center text-light">© 2023 Company, Inc</p>
    </div>

  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-..."
    crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <title>Performance</title>
</head>

<body>
  <!-- navbar  -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid py-2 bg-body-tertiary">
      <a class="navbar-brand ps-5" href="#">
        <img src="image/logo_black.png" alt="" class="img-responsive custom-img">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end me-5" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link mx-3" href="home.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-3 current-page-nav" href="performance.php">PERFORMANCE</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <!-- form -->
  <form action="" method="POST" enctype="multipart/form-data">
    <table>
      <tr>
        <td>Foto :</td>
        <td><input type="file" accept=".png, .jpg, .jpeg, .jfif, .gif" name="foto" required /></td>
      </tr>
      <tr>
        <td>Tanggal Penilaian :</td>
        <td><input type="date" class="w-75 my-2 mx-2" name="tglPenilaian" required></td>
        <td>Responsibility (30%) :</td>
        <td><input type="number" class="w-75 my-2 mx-2" name="responsibility" min="0" max="100" required></td>
      </tr>
      <tr>
        <td>NIK :</td>
        <td><input type="text" class="w-75 my-2 mx-2" name="NIK" required></td>
        <td>Teamwork (30%) :</td>
        <td><input type="number" class="w-75 my-2 mx-2" name="teamwork" min="0" max="100" required></td>
      </tr>
      <tr>
        <td>Nama :</td>
        <td><input type="text" class="w-75 my-2 mx-2" name="nama" required></td>
        <td>Time Management (40%) :</td>
        <td><input type="number" class="w-75 my-2 mx-2" name="time-management" min="0" max="100" required></td>
      </tr>
      <tr>
        <td>Status Kerja :</td>
        <td><select name="status-kerja" class="w-75 my-2 mx-2" required>
            <option value="" selected disabled hidden>---Pilih---</option>
            <option value="KaryawanTetap">Karyawan Tetap</option>
            <option value="KaryawanTidakTetap">Karyawan Tidak Tetap</option>
          </select>
        </td>
        <td>Total:</td>
        <td><input type="number" class="w-75 my-2 mx-2" name="total" readonly></td>
      </tr>
      <tr>
        <td>Posisi :</td>
        <td><input type="text" class="w-75 my-2 mx-2" name="posisi" required></td>
        <td>Grade:</td>
        <td><input type="text" class="w-75 my-2 mx-2" name="grade" readonly></td>
      </tr>

    </table>
  </form>

  <!-- footer -->
  <footer class="py-3 my-4 bg-black container-fluid text-light">
    <div class="row pt-3">
      <ul class="nav justify-content-center pb-2">
        <li class="nav-item mx-3">
          <a href="#" class="nav-link px-2 text-light">Home</a>
        </li>
        <li class="nav-item mx-3">
          <a href="#" class="nav-link px-2 text-light">Performance</a>
        </li>
      </ul>
    </div>
    <hr class="d-flex justify-content-center mx-auto">
    <div class="row px-5 mx-5">
      <div class="col pe-5 me-5">
        <img src="image/logo_white.png" alt="logo" class="img-responsive mx-auto d-block footer-custom-img">
      </div>
      <div class="col pe-5 me-5 d-flex flex-column justify-content-center">
        ISI
        <br />
        <div class="row">
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
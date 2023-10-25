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
            <a class="nav-link mx-3 text-primary current-page-nav" href="performance.php">PERFORMANCE</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <!-- FORM Bootstrap -->
  <!-- form-control, form-label, form-select, input-group, input-group-text -->

  <section id="performance">
    <div class="container mx-auto mt-5 ">
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="row pb-5">
          <div class="col-5">
            <!-- Foto -->
            <div class="row">

              <div class="col-3">
                <div class="row">
                  <div class="col-11">
                    <label for="file" class="form-label">
                      <h5>File</h1>
                    </label>
                  </div>
                  <div class="col">
                    <div class="col-1 text-right">:</div>
                  </div>
                </div>
              </div>

              <div class="col-8">
                <input id="file" type="file" class="form-control w-75" accept=".png, .jpg, .jpeg, .jfif, .gif"
                  name="foto" required />
              </div>
            </div>
          </div>
          <!-- SPACE KOSONG -->
          <div class="col-6"></div>
          <div class="col-1">
            <!-- 3 Buttons -->
            <div class="row">
              <div class="col">
                <button type="button" class="btn btn-success w-100">Simpan</button>
              </div>
              <div class="row">
                <div class="col">
                  <button type="button" class="btn btn-danger w-100">Clear</button>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <button type="button" class="btn btn-secondary w-100">Cancel</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-5">
            <!-- Tanggal Penilaian -->
            <div class="row">
              <div class="col-3">
                <label for="tanggalPenilaian" class="form-label text-capitalize">Tanggal Penilaian :</label>
              </div>
              <div class="col-9">
                <input id="tanggalPenilaian" type="date" class="form-control w-75" name="responsibility" min="0"
                  max="100">
              </div>
            </div>
          </div>

          <div class="col">
            <!-- Responsibility -->
            <div class="row">
              <div class="col-3">
                <div class="row">
                  <div class="col-11">
                    <div class="mb-4 input-group">
                      <label for="responsibility" class="form-label">Responsibility (30%)</label>
                    </div>
                  </div>
                  <div class="col">
                    :
                  </div>
                </div>
              </div>
              <div class="col-9 w-50">
                <div class="mb-4 input-group">
                  <input id="responsibility" type="number" class="form-control w-25" name="responsibility" min="0"
                    max="100" placeholder="   0-100" required >
                  <span class="input-group-text">
                    <i class="bi bi-person-fill p-1">%</i>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- NIK -->
        <div class="row">
          <div class="col-5">
            <div class="row">
              <div class="col-3">
                <div class="row">
                  <div class="col-11">
                    <label for="nik" class="form-label">NIK</label>
                  </div>
                  <div class="col">
                    :
                  </div>
                </div>
              </div>
              <div class="col-9">
                <input id="nik" type="text" class="form-control w-75" name="responsibility" min="0" max="100" required>
              </div>
            </div>
          </div>
          <!-- teamwork -->
          <div class="col">
            <div class="row">
              <div class="col-3">
                <div class="row">
                  <div class="col-11">
                    <div class="mb-4 input-group">
                      <label for="teamwork" class="form-label">Teamwork (30%)</label>
                    </div>
                  </div>
                  <div class="col">
                    :
                  </div>
                </div>
              </div>
              <div class="col-9 w-50">
                <div class="mb-4 input-group">
                  <input id="teamwork" type="number" class="form-control w-25" name="teamwork" min="0" max="100" placeholder="   0-100"
                    required>
                  <span class="input-group-text">
                    <i class="bi bi-person-fill p-1">%</i>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- NAMA -->
          <div class="col-5">
            <div class="row">
              <div class="col-3">
                <div class="row">
                  <div class="col-11">
                    <label for="nama" class="form-label">Nama</label>
                  </div>
                  <div class="col">
                    :
                  </div>
                </div>
              </div>
              <div class="col-9">
                <input id="nama" type="text" class="form-control w-75" name="responsibility" min="0" max="100" required>
              </div>
            </div>
          </div>
          <!-- Time Management -->
          <div class="col">
            <div class="row">
              <div class="col-3">
                <div class="row">
                  <div class="col-11">
                    <div class="mb-4 input-group">
                      <label for="timeManagement" class="form-label">Time Management(40%)</label>
                    </div>
                  </div>
                  <div class="col">
                    :
                  </div>
                </div>
              </div>
              <div class="col-9 w-50">
                <div class="mb-4 input-group">
                  <input id="timeManagement" type="number" class="form-control w-25" name="teamManagement" min="0" placeholder="   0-100"
                    max="100" required>
                  <span class="input-group-text">
                    <i class="bi bi-person-fill p-1">%</i>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Status Kerja -->
          <div class="col-5">
            <div class="row">
              <div class="col-3">
                <div class="row">
                  <div class="col-11">
                    <label for="statusKerja" class="form-label">Status Kerja</label>
                  </div>
                  <div class="col">
                    :
                  </div>
                </div>
              </div>
              <div class="col-9">
                <select id="statusKerja" class="form-select w-75">
                  <option value="tetap" selected class="text-center"> ---Pilih---</option>
                  <option value="tetap"> Karyawan Tetap</option>
                  <option value="tidakTetap"> Karyawan Tidak Tetap</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col">
            <!-- TOTAL -->
            <div class="row">
              <div class="col-3">
                <div class="row">
                  <div class="col-11">
                    <div class="mb-4 input-group">
                      <label for="total" class="form-label">Total</label>
                    </div>
                  </div>
                  <div class="col">
                    :
                  </div>
                </div>
              </div>
              <div class="col-9 w-50">
                <input id="total" type="text" class="form-control w-100" name="total" min="0" max="100" readonly>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-5">
            <div class="row">
              <div class="col-3">
                <div class="row">
                  <div class="col-11">
                    <label for="posisi" class="form-label">Posisi</label>
                  </div>
                  <div class="col">
                    :
                  </div>
                </div>
              </div>
              <div class="col-9">
                <input id="posisi" type="text" class="form-control w-75" name="posisi" min="0" max="100" required>
              </div>
            </div>
          </div>
          <div class="col">
            <!-- TOTAL -->
            <div class="row mb-5">
              <div class="col-3">
                <div class="row">
                  <div class="col-11">
                    <div class="mb-4 input-group">
                      <label for="grade" class="form-label">Grade</label>
                    </div>
                  </div>
                  <div class="col">
                    :
                  </div>
                </div>
              </div>
              <div class="col-9 w-50">
                <input id="grade" type="text" class="form-control w-100" name="grade" min="0" max="100" readonly>
              </div>
            </div>
          </div>
        </div>
    </div>

  </section>
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
        <img src="image/logo_white.png" alt="logo" class="img-responsive mx-auto d-block footer-custom-img">
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
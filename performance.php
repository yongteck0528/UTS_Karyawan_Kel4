<?php
// initialize database connection
include_once("connection.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <!-- <link rel="stylesheet" href="setil.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <title>Performance</title>
  <script src="totalgrade.js"></script>
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
      <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="navbarNav">
        <div class="offcanvas-header">
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="collapse navbar-collapse offcanvas-body justify-content-end me-5" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link mx-3" href="home.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-3 text-primary current-page-nav" href="performance.php">PERFORMANCE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-3" href="index.php">LOG OUT</a>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </nav>


  <?php
  //Main
  if (isset($_GET['aksi'])) {
    switch ($_GET['aksi']) {
      case "view":
        view($con);
        showtable($con);
        break;
      case "edit":
        edit($con);
        showtable($con);
        break;
      case "hapus":
        hapus($con);
        break;
      default:
        echo "<h3>Aksi <i>" . $_GET['aksi'] . "</i> Belum Tersedia</h3>";
        add($con);
        showtable($con);
    }
  } else {
    add($con);
    showtable($con);
  }
  function add($con)
  {
    ?>
    <section id="performance">
      <div class="container mx-auto">
        <div class="row pb-1">

          <div class="container card-header mx-auto">
            <div class="row">
              <div class="col">
                <div class="card mt-5">
                  <div class="display-4 text-center mb-2">Performance</div>
                </div>
              </div>
            </div>

            <div class="container mx-auto mt-5 ">
            </div>
            <form method="POST" enctype="multipart/form-data" id="performanceForm">
              <div class="row pb-5">
                <div class="col-5">
                  <!-- Foto -->
                  <div class="row">

                    <div class="col-3">
                      <div class="row">
                        <div class="col-11">
                          <label for="file" class="form-label">
                            File
                          </label>
                        </div>
                        <div class="col">
                          <div class="col-1 text-right">:</div>
                        </div>
                      </div>
                    </div>

                    <div class="col-8">
                      <input id="file" type="file" class="form-control w-75" accept=".png, .jpg, .jpeg, .jfif, .gif"
                        name="file" required />
                    </div>
                  </div>
                </div>
                <!-- SPACE KOSONG -->
                <div class="col-6"></div>
                <div class="col-1">
                  <!-- 3 Buttons -->
                  <div class="row">
                    <div class="col">
                      <input type="submit" name="submit" value="Submit" class="btn btn-success w-100" id="submit">
                    </div>
                    <div class="row">
                      <div class="col">
                        <input type="reset" value="reset" class="btn btn-danger w-100">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <button type="button" class="btn btn-secondary w-100"><a href="performance.php"
                            style="text-decoration: none; color: inherit; font-weight: inherit;">Cancel</a></button>
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
                      <input id="tanggalPenilaian" type="date" class="form-control w-75" name="tanggalPenilaian" min="0"
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
                          max="100" placeholder="  0-100" oninput="hitung();" required>
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
                      <input id="nik" type="text" class="form-control w-75" name="nik" min="0" max="100" required>
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
                        <input id="teamwork" type="number" class="form-control w-25" name="teamwork" min="0" max="100"
                          placeholder="   0-100" oninput="hitung();" required>
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
                      <input id="nama" type="text" class="form-control w-75" name="nama" min="0" max="100" required>
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
                        <input id="timeManagement" type="number" class="form-control w-25" name="timeManagement" min="0"
                          placeholder="   0-100" max="100" oninput="hitung();" required>
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
                      <select id="statusKerja" class="form-select w-75" name="statusKerja">
                        <option value="" selected class="text-center"> ---Pilih---</option>
                        <option value="Tetap"> Karyawan Tetap</option>
                        <option value="Tidak Tetap"> Karyawan Tidak Tetap</option>
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
                      <input id="total" type="text" class="form-control w-100" name="total" min="0" max="100" value="0"
                        readonly>
                    </div>
                  </div>
                </div>
              </div>
              <!-- POSISI -->
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
                  <!-- GRADE -->
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
                      <input id="grade" type="text" class="form-control w-100" name="grade" min="0" max="100" value="0"
                        id="grade" readonly>
                    </div>
                  </div>
                </div>
              </div>
            </form>

            <!-- SUBMIT -->
            <?php
            if (isset($_POST['submit'])) {

              $nik = (int) $_POST["nik"];
              $loc = $_FILES["file"]["tmp_name"];
              $nama = $_POST["nama"];
              $statusKerja = $_POST["statusKerja"];
              $posisi = $_POST["posisi"];
              $tanggalPenilaian = $_POST["tanggalPenilaian"];
              $responsibility = $_POST["responsibility"];
              $teamwork = $_POST["teamwork"];
              $timeManagement = $_POST["timeManagement"];
              $total = $_POST["total"];
              $grade = $_POST["grade"];
              $filenm = $nama . '-' . uniqid() . '.png';
              move_uploaded_file($loc, 'image/' . $filenm);

              $sql = "INSERT INTO performance (nik, 
                                foto, 
                                nama, 
                                status_kerja, 
                                position, 
                                tgl_penilaian, 
                                responsibility, 
                                teamwork, 
                                management_time, 
                                total, 
                                grade) 
                  VALUES (?,?,?,?,?,?,?,?,?,?,?)";

              $stmt = mysqli_stmt_init($con);

              if (!mysqli_stmt_prepare($stmt, $sql)) {
                die(mysqli_stmt_error($con));
              }

              mysqli_stmt_bind_param(
                $stmt,
                "isssssdddds",
                $nik,
                $filenm,
                $nama,
                $statusKerja,
                $posisi,
                $tanggalPenilaian,
                $responsibility,
                $timeManagement,
                $teamwork,
                $total,
                $grade
              );
              mysqli_stmt_execute($stmt);
            }
            ?>
          </div>
        </div>
    </section>
    <?php
  }
  //Tampilkan data dari database
  function showtable($con)
  {
    ?>
    <section id="table">
      <div class="container mx-auto">

        <table class="table table-striped table-responsive text-center">
          <tr>
            <th>Tanggal</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Status Kerja</th>
            <th>Posisi</th>
            <th>Total</th>
            <th>Grade</th>
            <th>Aksi</th>
          </tr>

          <?php
          $query = "SELECT * FROM performance"; //SQL Query statement
          $result = mysqli_query($con, $query); //
          if (mysqli_num_rows($result) > 0) {
            while ($data = mysqli_fetch_array($result)) {
              ?>
              <tr>
                <td>
                  <?= $data['tgl_penilaian']; ?>
                </td>
                <td>
                  <?= $data['nik']; ?>
                </td>
                <td>
                  <?= $data['nama']; ?>
                </td>
                <td>
                  <?= $data['status_kerja']; ?>
                </td>
                <td>
                  <?= $data['position']; ?>
                </td>
                <td>
                  <?= $data['total']; ?>
                </td>
                <td>
                  <?= $data['grade']; ?>
                </td>
                <td align="center">
                  <a href="performance.php?aksi=view&kd=<?= $data['nik']; ?>"><button type="button"
                      class="btn btn-primary">View</button>
                  </a> |
                  <a href="performance.php?aksi=edit&kd=<?= $data['nik']; ?>">Edit</a> |
                  <a href="performance.php?aksi=hapus&kd=<?= $data['nik']; ?>"
                    onclick="return confirm('Apakah yakin dihapus?')">Hapus</a>
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
      </div>
      </div>
      <?php
  }

  //function hapus
  function hapus($con)
  {
    if (isset($_GET['kd'])) {
      $kd = $_GET['kd'];
      $sql = "DELETE FROM performance WHERE nik='$kd'";
      $result = mysqli_query($con, $sql);
      if ($result) {
        header('location: performance.php');
      }
    }
  }

  //function view
  function view($con)
  {
    $id = $_GET['kd'];
    $sql = "SELECT * FROM performance WHERE nik='$id'";
    $result = mysqli_query($con, $sql);
    while ($data = mysqli_fetch_array($result)) {
      ?>
        <section id="view">
          <div class="container mx-auto">
            <div class="row pb-1">
              <div class="col-5">
                <div class="container card-header mx-auto">
                  <div class="row">
                    <div class="col">
                      <div class="card mt-5">
                        <div class="display-4 text-center mb-2">Performance</div>
                      </div>
                    </div>
                  </div>

                  <div class="container mx-auto mt-5 ">
                  </div>
                  <form method="POST" enctype="multipart/form-data" id="performanceForm">
                    <div class="row pb-5">
                      <div class="col-5">
                        <!-- Foto -->
                        <div class="row">
                          <div class="col-8">
                            <?= "<img src='image/" . $data['foto'] . "' width='100' height='100' title='" . $data['nama'] . "'/>"; ?>
                          </div>
                        </div>
                      </div>
                      <!-- SPACE KOSONG -->
                      <div class="col-6"></div>
                      <div class="col-1">
                        <!-- 3 Buttons -->
                        <div class="row">
                          <div class="col">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <button type="button" class="btn btn-secondary w-100"> <a href="performance.php"
                                style="text-decoration: none; color: inherit; font-weight: inherit;">Cancel</a></button>
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
                        <input type="date" name="tgl_penilaian" value="<?= $data['tgl_penilaian']; ?>" readonly />
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
                          <input type="number" name="responsibility" step="1" min="1" max="100" onFocus="start_count();"
                            onBlur="stop_count();" value="<?= $data['responsibility']; ?>" readonly>
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
                        <input type="number" name="nik" value="<?= $id ?>" readonly />
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
                          <input type="number" name="teamwork" step="1" min="1" max="100" onFocus="start_count();"
                            onBlur="stop_count();" value="<?= $data['teamwork']; ?>" readonly>
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
                        <input type="text" name="nama" placeholder="Nama" value="<?= $data['nama']; ?>" readonly />
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
                          <input type="number" name="timemanagement" step="1" min="1" max="100" onFocus="start_count();"
                            onBlur="stop_count();" value="<?= $data['management_time']; ?>" readonly>
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
                        <select name="status_kerja" readonly>
                          <option value="tidak tetap" <?php if ($data['status_kerja'] == 'Tidak Tetap')
                            echo 'selected'; ?>>
                            Tidak Tetap</option>
                          <option value="tetap" <?php if ($data['status_kerja'] == 'Tetap')
                            echo 'selected'; ?>>Tetap
                          </option>
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
                        <input type="number" name="total" value="<?= $data['total']; ?>" readonly>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- POSISI -->
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
                        <input type="text" name="position" placeholder="Posisi" value="<?= $data['position']; ?>"
                          readonly />
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <!-- GRADE -->
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
                        <input type="text" name="grade" value="<?= $data['grade']; ?>" readonly>
                      </div>
                    </div>
                  </div>
                </div>
                </form>
              </div>
        </section>
        <?php
    }
  }

  //Function edit
  function edit($con)
  {
    $id = $_GET['kd'];
    $sql = "SELECT * FROM performance WHERE nik='$id'";
    $result = mysqli_query($con, $sql);
    while ($data = mysqli_fetch_array($result)) {
      ?>
        <section id="performance">
          <div class="container mx-auto">
            <div class="row pb-1">

              <div class="container card-header mx-auto">
                <div class="row">
                  <div class="col">
                    <div class="card mt-5">
                      <div class="display-4 text-center mb-2">Performance</div>
                    </div>
                  </div>
                </div>

                <div class="container mx-auto mt-5 ">
                </div>
                <form method="POST" enctype="multipart/form-data" id="performanceForm">
                  <div class="row pb-5">
                    <div class="col-5">
                      <!-- Foto -->
                      <div class="row">
                        <div class="col-8">
                          <input type="hidden" name="old" value="<?= $data['foto']; ?>" />
                          <?= "<img src='image/" . $data['foto'] . "' name='old_photo' width='100' height='100' title='" . $data['nama'] . "'/>"; ?>
                          <input id="file" type="file" class="form-control w-75" accept=".png, .jpg, .jpeg, .jfif, .gif"
                            name="file" />
                        </div>
                      </div>
                    </div>
                    <!-- SPACE KOSONG -->

                    <div class="col-6"></div>
                    <div class="col-1">
                      <!-- 3 Buttons -->
                      <div class="row">
                        <div class="col">
                          <input type="submit" value="update" name="update" class="btn btn-success w-100" id="update">
                        </div>
                        <div class="row">
                          <div class="col">
                            <input type="reset" value="Clear" class="btn btn-danger w-100">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <button type="button" class="btn btn-secondary w-100"> <a href="performance.php"
                                style="text-decoration: none; color: inherit; font-weight: inherit;">Cancel</a></button>
                          </div>
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
                      <input type="date" name="tgl_penilaian" value="<?= $data['tgl_penilaian']; ?>" />
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
                        <input type="number" name="responsibility" step="1" min="1" max="100" oninput="hitung();"
                          value="<?= $data['responsibility']; ?>" id="responsibility">
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
                      <input type="number" name="nik" value="<?= $id ?>" />
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
                        <input type="number" name="teamwork" step="1" min="1" max="100" oninput="hitung();"
                          value="<?= $data['teamwork']; ?>" id="teamwork">
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
                      <input type="text" name="nama" placeholder="Nama" value="<?= $data['nama']; ?>" />
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
                        <input type="number" name="timemanagement" step="1" min="1" max="100" oninput="hitung();"
                          value="<?= $data['management_time']; ?>" id="timeManagement">
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
                      <select name="status_kerja" readonly>
                        <option value="tidak tetap" <?php if ($data['status_kerja'] == 'Tidak Tetap')
                          echo 'selected'; ?>>
                          Tidak Tetap</option>
                        <option value="Tetap" <?php if ($data['status_kerja'] == 'Tetap')
                          echo 'selected'; ?>>Tetap
                        </option>
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
                      <input type="number" name="total" value="<?= $data['total']; ?>" id="total" readonly>
                    </div>
                  </div>
                </div>
              </div>
              <!-- POSISI -->
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
                      <input type="text" name="position" placeholder="Posisi" value="<?= $data['position']; ?>">
                    </div>
                  </div>
                </div>
                <div class="col">
                  <!-- GRADE -->
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
                      <input type="text" name="grade" value="<?= $data['grade']; ?>" id="grade" readonly>
                    </div>
                  </div>
                </div>
              </div>
              </form>
            </div>
          </div>
        </section>
        <?php
    }

    if (isset($_POST['update'])) {
      $id = $_POST['nik'];
      $old_foto = $_POST['old'];
      $new_foto = $_FILES['file']['tmp_name'];
      $nama = $_POST['nama'];
      $status_kerja = $_POST['status_kerja'];
      $position = $_POST['position'];
      $tgl_penilaian = $_POST['tgl_penilaian'];
      $responsibility = $_POST['responsibility'];
      $teamwork = $_POST['teamwork'];
      $management_time = $_POST['timemanagement'];
      $total = $_POST['total'];
      $grade = $_POST['grade'];

      if ($new_foto == "") {
        $sql = "UPDATE performance SET 
                                            nama='$nama', 
                                            status_kerja ='$status_kerja',
                                            position ='$position',
                                            tgl_penilaian ='$tgl_penilaian',
                                            responsibility ='$responsibility',
                                            teamwork ='$teamwork',
                                            management_time ='$management_time',
                                            total ='$total',
                                            grade = '$grade'
                                            WHERE nik='$id'";
        $result = mysqli_query($con, $sql);
      } else {
        //unlink('UTS_karyawan_kel4/image/'.$old_foto);
        $foto = $_FILES['file']['tmp_name'];
        $filenm = $nama . '-' . uniqid() . '.png';
        move_uploaded_file($foto, 'image/' . $filenm);

        $sql = "UPDATE performance SET 
                                            foto ='$filenm ',
                                            nama='$nama', 
                                            status_kerja ='$status_kerja',
                                            position ='$position',
                                            tgl_penilaian ='$tgl_penilaian',
                                            responsibility ='$responsibility',
                                            teamwork ='$teamwork',
                                            management_time ='$management_time',
                                            total ='$total',
                                            grade = '$grade'
                                            WHERE nik='$id'";
        $result = mysqli_query($con, $sql);
      }
    }
  }
  ?>

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
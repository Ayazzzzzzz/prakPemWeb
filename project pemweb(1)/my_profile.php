<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-color: #F0F0F0;">
<nav class="navbar" style="background-color: #A2D2FF;">
    <a class="nav-link fs-5 mx-3" style="color : #213555;"  href="#"><button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAJJJREFUWEft1cENgCAMhWEYRXfQTXQe59FNdAcdRS96g/wxDUmbPK9NSf14QE7OvuxsnqSBaEckJCESoHqcDHXDdNPfWOrXsRUxqkIa6OWOkyFLPiy9EiK9qlA/zgs1W+rnvhbX17H/VH9fjO62zJIPS6+OPenFEdJrT6+9OyEKX6t6nFC3EqB1JSQhEqC6MkRCD4X3KCVINjI6AAAAAElFTkSuQmCC"/>
    </button></a>
    <a class="navbar-brand" href="#">My Account</a>

  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-body">
        <ul class="navbar-nav pe-3">
          <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">My Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="appoinment.php">My Appointment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="history.php">History</a>
          </li>
      </div>
    </div>
</nav> 

    <?php 
        session_start();
        include 'connect_pemweb.php';

        $pasienID = $_SESSION['pasienID'];
        $query = mysqli_query($connect, "SELECT * FROM pasien WHERE pasienID='$pasienID'")
                or die(mysqli_error($connect)); 
        while($data = mysqli_fetch_array($query)) {
    ?>

    <div class="container mt-3">
        <div class="row">
            <div class="col"></div>
            <div class="col-10 bg-transparent">
                <div class="card mb-3 shadow" style="background-image: url('hospital_cartoon.png'); background-repeat: none; background-size: cover;">  
                    <div class="card-body">
                        <img src="profile1.avif" class="rounded-circle mb-2" style="margin-top: 6rem;" alt="" width="100px" height="100px">
                        <div class="row">
                            <div class="col-4"><h5><?php echo $data['first_name'].' '.$data['last_name']; ?></h5></div>
                            <div class="col-4"><p><?php echo $data['address']; ?></p></div>
                            <div class="col-4"><p><?php echo $data['contact']; ?></p></div>
                        </div>
                    </div>   
                </div>

                <div class="container p-3 mb-3 shadow" style="background-color: #FEF9EF;">
                    <table border=0>
                        <tr>
                            <td style="width: 12rem; height: 2rem;">Nama Lengkap</td>
                            <td style="width: 25rem;"><?php echo $data['first_name'].' '.$data['last_name'] ?></td>
                        </tr>
                        <tr>
                            <td style="width: 12rem; height: 2rem;">Tanggal Lahir</td>
                            <td><?php echo $data['birth_date']; ?></td>
                            <td><a href="edit_profile.php?pasienID=<?php echo $data['pasienID']; ?>"><button class="btn px-4 rounded-pill fw-semibold" style="background-color : #A2D2FF;  width: 200px; font-size: 17px;" type="submit" value="edit_profile">Edit Akun</button></a></td>
                        </tr>
                        <tr>
                            <td style="width: 12rem; height: 2rem;">No. Telp</td>
                            <td><?php echo $data['contact']; ?></td>
                        </tr>
                        <tr>
                            <td style="width: 12rem; height: 2rem;">Alamat</td>
                            <td><?php echo $data['address']; ?></td>
                            <td><button class="btn px-4 rounded-pill fw-semibold" style="background-color : #FF865E;  width: 200px; font-size: 17px;" type="submit" data-bs-toggle="modal" data-bs-target="#exampleHapus" value="hapus_profile">Hapus Akun</button></td>
                        </tr>
                        <tr>
                            <td style="width: 12rem; height: 2rem;">Email</td>
                            <td><?php echo $data['email']; ?></td>
                        </tr>
                        <tr>
                            <td style="width: 12rem; height: 2rem;">Password</td>
                            <td><input class="border border-0 bg-transparent" type="password" value="<?php echo $data['password']; ?>" disabled></td>
                            <td><button class="btn px-4 rounded-pill fw-semibold" style="background-color : #FEE440;  width: 200px; font-size: 17px;" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal" value="Logout">Logout</button></td>
                        </tr>
                        <tr>
                            <td style="width: 12rem; height: 2rem;">Riwayat</td>
                            <td><?php echo $data['riwayat']; ?></td>
                        </tr>
                    </table>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title fs-5" id="exampleModalLabel">Logout</h3>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Apakah anda yakin ingin logout dari akun ini?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <a href="logout.php"><button type="submit" class="btn btn-primary">Yakin</button></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="exampleHapus" tabindex="-1" aria-labelledby="exampleHapusLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title fs-5" id="exampleHapusLabel">Logout</h3>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Apakah anda yakin ingin menghapus akun ini?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <a href="hapus_profile.php?pasienID=<?php echo $data['pasienID']; ?>"><button type="submit" class="btn btn-primary">Yakin</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>

    <?php 
    } ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
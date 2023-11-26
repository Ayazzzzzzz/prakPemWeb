<?php 
    session_start();
    include 'connect_pemweb.php';
    $id =  $_SESSION["pasienID"];
    //$data = mysqli_query($connect,"SELECT * FROM kunjungan WHERE pasienID='$id'")or die (mysqli_error($connect));
    //var_dump($data->fetch_assoc())

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hospital Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&family=Inter:wght@200&family=Poppins:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,500;1,600;1,700;1,800;1,900&display=swap');

    body{
      font-family : 'Catamaran';
      color : #213555;
    }
  </style>
    </head>
  <body style="background-color : #FEF9EF; color : #213555">
  <ul class="nav justify-content-end p-4 py-1" style="background-color : #A2D2FF; font-size: 18px;" >
  <div class="col-5 justify-content-start" >
  <li>
    <!-- gimana biar dia ke pojok kiri -->
     <h2 class="fw-semibold fst-italic"> <img src="logo_rs.png" alt="" width=44px>FamCare </h2>
  </li>
  </div>
  <li class="nav-item">
    <a class="nav-link fs-5 mx-3" style="color : #213555;" aria-current="page" href="#">Article</a>
  </li>
  <li class="nav-item">
    <a class="nav-link fs-5 mx-3" style="color : #213555;"  href="contact_hos.php">Contact Us</a>
  </li>
  <li class="nav-item">
    <a class="nav-link fs-5 mx-3" style="color : #213555;"  href="location.php">Location</a>
  </li>
  <li class="nav-item">
  <a class="nav-link fs-5 mx-3" style="color : #213555;"  href="#"><button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
     Account
    </button></a>

  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header" style="background-color : #FEE440;">
        <h3 class="offcanvas-title" id="offcanvasNavbarLabel">Your Account</h3>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <center>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <img src="profile1.jpg" class="rounded-circle mt-1 mb-4" width= 100px; alt="">
            <!-- ini nanti kasih gmail dari dbnya ya   -->
        </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">My Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="appoinment.php">My Appointment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">History</a>
          </li>
          <li class="nav-item mt-4 pt-5">
            <a href="logout.php">
                <button class="btn px-4 rounded-pill fw-semibold fs-5" style="background-color : #FEE440;  width: 360px;" type="submit" value="Logout">Logout</button>
            </a>
          </li>
      </div>
      </center>
    </div>    
</li>
</ul>

<div class=" m-4 ">
    <table class="table table-bordered " style="border: #FEE440;  text-align: center; ">
        <tr>
            <td>Orang Tua/Wali</td>
            <td>Anak</td>
            <td>Umur Anak</td>
            <td>Gejala</td>
            <td>Informasi</td>
            <td>Tanggal </td>
            <td>Dokter</td>
            <td>Lokasi</td>
        </tr>
        <?php 
            include 'connect_pemweb.php';
            $query = mysqli_query($connect, "select k.parent_name, k.children_name, k.troubling_symptoms, k.addictional_information, k.children_age, k.visit_date, k.kunjunganID, d.nama, d.lokasi from kunjungan k 
                                   inner join dokter d on k.dokterID = d.dokterID where k.pasienID = $id and k.status = 1");
            while ($data = mysqli_fetch_array($query)){
               
        ?>
        <tr>
            <!-- <td colspan=3> Action </td> -->
            
            <td><?php echo $data['parent_name']; ?></td>
            <td><?php echo $data['children_name']; ?></td>
            <td><?php echo $data['children_age']; ?></td>
            <td><?php echo $data['troubling_symptoms']; ?></td>
            <td><?php echo $data['addictional_information']; ?></td>
            <td><?php echo $data['visit_date']; ?> </td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['lokasi']; ?></td>
        </tr>
        <?php 
            }
        ?>
    </table>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
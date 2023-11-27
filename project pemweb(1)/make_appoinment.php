<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Janjian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        select {
            border-color: #A2D2FF;
        }
    </style>
</head>
  <body style="background-color: #FEF9EF; color: #213555;">

  <nav class="navbar bg-transparent">
  <a class="navbar-brand" href="#"></a>
    <a class="nav-link fs-5 mx-3" style="color : #213555;"  href="#"><button class="navbar-toggler border border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAJJJREFUWEft1cENgCAMhWEYRXfQTXQe59FNdAcdRS96g/wxDUmbPK9NSf14QE7OvuxsnqSBaEckJCESoHqcDHXDdNPfWOrXsRUxqkIa6OWOkyFLPiy9EiK9qlA/zgs1W+rnvhbX17H/VH9fjO62zJIPS6+OPenFEdJrT6+9OyEKX6t6nFC3EqB1JSQhEqC6MkRCD4X3KCVINjI6AAAAAElFTkSuQmCC"/>
    </button></a>

  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-body">
        <ul class="navbar-nav pe-3">
          <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="my_profile.php">My Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="appoinment.php">My Appoinment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="history.php">History</a>
          </li>
      </div>
    </div>
</nav> 
        <center>
            <h1 class="mt-4 fs-1 fw-bold">Buat Jadwal Kunjungan</h1>
            </center>
            <div class="row">
                <div class="col-8">
            <form class="mx-3" action="input_janji.php" method="POST">
                <!-- //nama ortu, nama anak  -->
                <label class="ms-5 pe-5 mt-4" for="oarngtua">Nama Orang Tua/Wali</label> 
                <label for="anak" class="px-5" style="margin-left: 6.5rem;">Nama anak </label> <br>
                <input class="fw-light ms-5 bg-transparent py-1" type="text" name="orangtua" style="width: 39%; border: none; border-bottom: 1px solid #A2D2FF; margin-left : 6.5rem" required>
                <input class="fw-light ms-3 bg-transparent py-1" type="text" name="anak" style="width: 39%; border: none; border-bottom: 1px solid #A2D2FF;" required>
                <br>

                <!-- tanggal, umur anak  -->
                <label class="ms-5 pe-5 mt-4" for="birth_date">Tanggal Kunjungan</label>
                <label for="umur" class="px-5" style="margin-left: 8rem;">Umur Anak</label> <br>
                <input class="fw-light ms-5 bg-transparent py-1" type="date" style="width: 39%; border: none; border-bottom: 1px solid #A2D2FF;" name="tgl_janji" required>
                <input class="fw-light ms-3 bg-transparent py-1" type="number" style="width: 39%; border: none; border-bottom: 1px solid #A2D2FF;" name="umur" required>
                <br>  

                <!-- gejala, dokter(pake radio yang bisa di scroll) -->
                <label class="ms-5 pe-5 mt-4" for="gejala">Gejala</label> 
                <label for="dokter" class="px-5 pb-3" style="margin-left: 13.5rem;">Pilih Dokter</label> <br>
                <input class="fw-light ms-5 bg-transparent py-1" type="text" name="gejala" style="width: 39%; border: none; border-bottom: 1px solid #A2D2FF; margin-left : 6.5rem" required>
                <!-- <input class="fw-light ms-3 bg-transparent py-1" type="text" name="dokter" style="width: 25%; border: none; border-bottom: 1px solid #A2D2FF;" required> -->
                
                <select name="dokter" id="dokter" class="py-1 ms-4 bg-transparent" size="3" style="width: 39%; background-color: #A2D2FF;">
                    <option value="1">Dr. Anisa Dewi, Sp.A. - RSKIA Sadewa</option>
                    <option value="2">Dr. Aditya Pratama, Sp.A. - RSKIA Pratama UPN</option>
                    <option value="3">Dr. Siti Nurul Huda, Sp.A. - RSKIA UGM</option>
                    <option value="4">Dr. Maya Indriani, Sp.A. _ RSKIA Hermina</option>
                    <option value="5">Dr. Rina Fitriani, Sp.A. - RSKIA Permata Bunda</option>
                    <option value="6">Dr. Putri Handayani, Sp.A. - RSKIA Fajar</option>
                    <option value="7">Dr. Amanda Surya, Sp.A. - RSKIA Sadewa</option>
                    <option value="8">Dr. Ratna Cahaya, Sp.A. - RSKIA Pratama UPN</option>
                    <option value="9">Dr. Nina Kusuma, Sp.A. - RSKIA UGM</option>
                    <option value="10">Dr. Dian Pertiwi, Sp.A. - RSKIA Hermina</option>
                    <option value="11">Dr. Aditya Wijaya, Sp.A. - RSKIA Permata Bunda</option>
                    <option value="12">Dr. Maya Putri, Sp.A. - RSKIA Fajar</option>
                </select>
                <br>

                <!-- //infor tambahan  -->
                <label class="ms-5 mt-4" for="info">Informasi Tambahan</label> <br>
                <textarea class="fw-light ms-5 bg-transparent py-1" style="border: none; border-bottom: 1px solid #A2D2FF" name="info" cols="95" rows="2" placeholder="Enter.." required></textarea>
                <br>
                <center>
                <button class="mt-5 mb-5 rounded-pill border border-0 py-2 ms-3 fw-medium" style="width: 20%; background-color: #FEE440 ;" type="button" name="SignUp" data-bs-toggle="modal" data-bs-target="#exampleModal">Submit</button>
                </center>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title fs-5" id="exampleModalLabel">Make Appoinment</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Data Kunjungan Anda telah dibuat. Terima Kasih!
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Back to Home</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                
            </form>
                </div>
                <div class="col-4">
                    gambar disini
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
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
                    <option value="1">Dr. Anisa Dewi, Sp.A.</option>
                    <option value="2">Dr. Aditya Pratama, Sp.A.</option>
                    <option value="3">Dr. Siti Nurul Huda, Sp.A.</option>
                    <option value="4">Dr. Maya Indriani, Sp.A.</option>
                    <option value="5">Dr. Rina Fitriani, Sp.A.</option>
                    <option value="6">Dr. Putri Handayani, Sp.A.</option>
                    <option value="7">Dr. Amanda Surya, Sp.A.</option>
                    <option value="8">Dr. Ratna Cahaya, Sp.A.</option>
                    <option value="9">Dr. Nina Kusuma, Sp.A.</option>
                    <option value="10">Dr. Dian Pertiwi, Sp.A.</option>
                    <option value="11">Dr. Aditya Wijaya, Sp.A.</option>
                    <option value="12">Dr. Maya Putri, Sp.A.</option>
                </select>
                <br>

                <!-- //infor tambahan  -->
                <label class="ms-5 mt-4" for="info">Informasi Tambahan</label> <br>
                <textarea class="fw-light ms-5 bg-transparent py-1" style="border: none; border-bottom: 1px solid #A2D2FF" name="info" cols="95" rows="2" placeholder="Enter.." required></textarea>
                <br>
                <center>
                <button class="mt-5 mb-5 rounded-pill border border-0 py-2 ms-3 fw-medium" style="width: 20%; background-color: #FEE440 ;" type="submit" name="SignUp">Submit</button>
                </center>
            </form>
                </div>
                <div class="col-4">
                    gambar disini
                </div>
            </div>
        
  </body>
</html>
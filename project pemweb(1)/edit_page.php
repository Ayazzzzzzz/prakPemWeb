<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <?php 
        include 'connect_pemweb.php';
        $id = $_GET['kunjunganID'];
        $query = mysqli_query($connect, "select * from kunjungan where kunjunganID = '$id'");
        $data = mysqli_fetch_array($query);
    ?>

<form class="mx-3" action="edit.php" method="POST">
<input type="hidden" name="kunjunganID" value="<?php echo $data['kunjunganID'] ?>"><br>
                <!-- //nama ortu, nama anak  -->
                <label class="ms-5 pe-5 mt-4" for="oarngtua">Nama Orang Tua/Wali</label> 
                <label for="anak" class="px-5" style="margin-left: 6.5rem;">Nama anak </label> <br>
                <input class="fw-light ms-5 bg-transparent py-1" type="text" name="orangtua" value="<?php echo $data['parent_name'] ?>" style="width: 39%; border: none; border-bottom: 1px solid #A2D2FF; margin-left : 6.5rem" required>
                <input class="fw-light ms-3 bg-transparent py-1" type="text" name="anak" value="<?php echo $data['children_name'] ?>" style="width: 39%; border: none; border-bottom: 1px solid #A2D2FF;" required>
                <br>

                <!-- tanggal, umur anak  -->
                <label class="ms-5 pe-5 mt-4" for="birth_date">Tanggal Kunjungan</label>
                <label for="umur" class="px-5" style="margin-left: 8rem;">Umur Anak</label> <br>
                <input class="fw-light ms-5 bg-transparent py-1" type="date" value="<?php echo $data['visit_date'] ?>"  style="width: 39%; border: none; border-bottom: 1px solid #A2D2FF;" name="tgl_janji" required>
                <input class="fw-light ms-3 bg-transparent py-1" type="number" value="<?php echo $data['children_age'] ?>" style="width: 39%; border: none; border-bottom: 1px solid #A2D2FF;" name="umur" required>
                <br>  

                <!-- gejala, dokter(pake radio yang bisa di scroll) -->
                <label class="ms-5 pe-5 mt-4" for="gejala">Gejala</label> 
                <label for="dokter" class="px-5 pb-3" style="margin-left: 13.5rem;">Pilih Dokter</label> <br>
                <input class="fw-light ms-5 bg-transparent py-1" type="text" name="gejala" value="<?php echo $data['troubling_symptoms'] ?>"  style="width: 39%; border: none; border-bottom: 1px solid #A2D2FF; margin-left : 6.5rem" required>
                <!-- <input class="fw-light ms-3 bg-transparent py-1" type="text" name="dokter" style="width: 25%; border: none; border-bottom: 1px solid #A2D2FF;" required> -->
                <select name="dokter" id="dokter" class="py-1 ms-4 bg-transparent" size="3" style="width: 39%; background-color: #A2D2FF;">
                    <option value="1" <?php if($data['dokterID'] == '1') echo 'checked'; ?> >Dr. Anisa Dewi, Sp.A.</option>
                    <option value="2" <?php if($data['dokterID'] == '2') echo 'checked';?> >Dr. Aditya Pratama, Sp.A.</option>
                    <option value="3" <?php if($data['dokterID'] == '3') echo 'checked';?> >Dr. Siti Nurul Huda, Sp.A.</option>
                    <option value="4" <?php if($data['dokterID'] == '4') echo 'checked';?> >Dr. Maya Indriani, Sp.A.</option>
                    <option value="5" <?php if($data['dokterID'] == '5') echo 'checked';?> >Dr. Rina Fitriani, Sp.A.</option>
                    <option value="6" <?php if($data['dokterID'] == '6') echo 'checked';?>  >Dr. Putri Handayani, Sp.A.</option>
                    <option value="7" <?php if($data['dokterID'] == '7') echo 'checked';?> >Dr. Amanda Surya, Sp.A.</option>
                    <option value="8" <?php if($data['dokterID'] == '8') echo 'checked';?> >Dr. Ratna Cahaya, Sp.A.</option>
                    <option value="9" <?php if($data['dokterID'] == '9') echo 'checked';?> >Dr. Nina Kusuma, Sp.A.</option>
                    <option value="10" <?php if($data['dokterID'] == '10') echo 'checked';?> >Dr. Dian Pertiwi, Sp.A.</option>
                    <option value="11" <?php if($data['dokterID'] == '11') echo 'checked';?> >Dr. Aditya Wijaya, Sp.A.</option>
                    <option value="12" <?php if($data['dokterID'] == '12') echo 'checked';?> >Dr. Maya Putri, Sp.A.</option>
                </select>
                <br>

                <!-- //infor tambahan  -->
                <label class="ms-5 mt-4" for="info">Informasi Tambahan</label> <br>
                <textarea class="fw-light ms-5 bg-transparent py-1" style="border: none; border-bottom: 1px solid #A2D2FF" name="info" cols="95" rows="2" required><?php echo $data['addictional_information'] ?></textarea>
                <br>
                <center>
                <button class="mt-5 mb-5 rounded-pill border border-0 py-2 ms-3 fw-medium" style="width: 20%; background-color: #FEE440 ;" type="submit" name="SignUp">Submit</button>
                </center>
            </form>
  </body>
</html>
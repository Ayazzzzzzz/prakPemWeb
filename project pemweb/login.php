<!-- yang harus dibenerin dari login page :
- imgnya ganti yang lebih rame
- ganti font + colornya DONE
- benerin bentuk input email sama password
- buat ada tanda mata di password
- tambahin logo google (connectin ke google kalo bisa,
  klo enggak hapus aja) CANCELED OR HOLD
- benerin posisi pemberitahuannya 
- benerin fwnya lagi DONE
- buat gambarnya berubah dikondisi gagal login sama log out. -->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&family=Inter:wght@200&family=Poppins:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,500;1,600;1,700;1,800;1,900&display=swap');

    body{
      font-family : 'Catamaran';
      color : #213555;
    }
  </style>

  </head>
  <body style="background-color: #A2D2FF;">
  <center>
  <div class="row">
    <div class="col-7 align-middle mt-5">
        <img src="rabbit_1.png" alt="" height= 500px>
    </div>
    <div class="col-5" style="background-color: #FEF9EF; height: 39rem;">
        <h1 class="mt-5 fw-bold">Welcome Back!</h1>
        <p>Please enter your detail</p>

        <div class="fw-medium">
<?php  
//  tolong ini dibuat jadi gambar aja  
		if(isset($_GET['pesan']))
		{
			if($_GET['pesan'] == "gagal"){
			  echo "Login gagal! Username dan Password salah!";
			}else if($_GET['pesan'] == "logout"){
        echo "Anda telah berhasil logout";
      }else if($_GET['pesan'] == "belum_login"){
        echo "Anda harus login untuk mengakses halaman tersebut.";
      }
    }
  ?>
  </div>

    <form action="check_status.php" method="POST" class="m-5 p-5 pt-2 mt-0 mb-4"> 
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 fw-medium col-form-label">Email</label>
      <input type="email" class="form-control bg-transparent py-1" style="border: none; border-bottom: 2px solid #A2D2FF;"  id="inputEmail3" name="email" required>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 fw-medium col-form-label">Password</label>
      <input type="password" class="form-control bg-transparent py-1" id="inputPassword3" style="border: none; border-bottom: 2px solid #A2D2FF;" name="password" required>
      </div>
  <button type="submit" class="btn mt-5 px-4 rounded-pill fw-semibold fs-5" style="background-color : #FEE440; width: 360px;">Log in</button>

</form>
<h6 class="fw-normal ">Don't have an account? <a href="index_regis.php"> Sign Up</a></h6>
    </div>
  </div>
  
</center>
  </body>
</html>

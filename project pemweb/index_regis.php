<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&family=Inter:wght@200&family=Poppins:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            background-color: #A2D2FF;
            font-family: 'Catamaran';
        }
        #regis {
            background-color: #FEF9EF;
            height: 43rem;
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-7 align-middle mt-5">
            <center>
            <img src="nunggu_regis.png" alt="Registrasi" height=500px >
            </center>
        </div>
        <div class="col-5" id="regis">
            <h1 class="mt-5 fw-bold text-center">Sign Up</h1>
            <p class="text-center">Enter your details below to create your account</p>

            <form class="mx-3" action="cek_regis" method="POST">
                <label for="firstName">Full Name</label> <br>
                <input type="text" name="firstName" style="width: 49%;" placeholder="First Name" required>
                <input type="text" name="lastName" style="width: 49%;" placeholder="Last Name" required>
                <br>
                <label for="dateBirth">Date of Birth</label>
                <label for="phoneNumber" class="px-5" style="margin-left: 8rem;">Phone Number</label> <br>
                <input type="date" style="width: 49%;" name="dateBirth" required>
                <input type="number" style="width: 49%;" name="phoneNumber" placeholder="08123456789" required>
                <br>
                <label for="kunjungan">Tanggal Kunjungan</label>
                <label for="riwayatPenyakit" class="px-5" style="margin-left: 5rem;">Riwayat Penyakit</label> <br>
                <input type="date" style="width: 49%;" name="kunjungan" required>
                <input type="text" style="width: 49%;" name="riwayatPenyakit" placeholder="enter...">
                <br>
                <label for="address">Address</label> <br>
                <textarea name="address" cols="67" rows="3" placeholder="enter..."></textarea>
                <br>
                <label for="email">Email</label> 
                <label for="password" class="px-5" style="margin-left: 11rem;">Password</label> <br>
                <input type="email" name="email" style="width: 49%;" placeholder="example@gmail.com" required>
                <input type="password" name="password" style="width: 49%;" placeholder="enter..." required>
                <br>

                <button type="submit" name="SignUp">Sign Up</button>

            </form>
        </div>
    </div>
<!-- <div class="d-flex">
  <div class="p-2 flex-fill">
    <img class="mt-5" src="nunggu_regis.png" alt="Registrasi" height=450px >
  </div>
  <div class="p-2 flex-fill" id="regis" >
    <h1 class="mt-5 fw-bold text-center">Sign Up</h1>
    <p class="text-center">Enter your details below to create your account</p>

    <form class="mx-3" action="cek_regis" method="POST">
        <label for="FullName">Full Name</label> <br>
        <input type="text" name="firstName" placeholder="First Name" required>
        <input type="text" name="lastName" placeholder="Last Name" required>
        <br>
        <label for="DateBirth">Date of Birth</label> <br>
        <input type="date" name="dateBirth" required>
        <br>

    </form>
  </div>
</div> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

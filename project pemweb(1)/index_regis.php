<!-- Nanti tambahin navbar ya
jangan lupa benerin fw fs nya 
trs tolong buat kotaknya fit in di satu display   -->

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
            font-family: 'Poppins';
        }
        #regis {
            background-color: #FEF9EF;
            height: 45rem;
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-7 align-middle mt-5">
            <center>
            <img src="HAPPY KIDS.png" alt="" height= 540px>
            </center>
        </div>
        <div class="col-5" id="regis">
            <h1 class="mt-4 fw-bold text-center">Sign Up</h1>
            <p class="text-center fs-6 fw-light">Enter your details below to create your account</p>

            <form class="mx-3" action="input_regis.php" method="POST">
                <label class="ms-5 mt-4" for="first_name">First Name</label> 
                <label for="last_name" class="px-5" style="margin-left: 6.5rem;">Last Name</label> <br>
                <input class="fw-light ms-5 bg-transparent py-1" type="text" name="first_name" style="width: 39%; border: none; border-bottom: 1px solid #A2D2FF;" required>
                <input class="fw-light ms-3 bg-transparent py-1" type="text" name="last_name" style="width: 39%; border: none; border-bottom: 1px solid #A2D2FF;" required>
                <br>
                <label class="ms-5 mt-4" for="birth_date">Date of Birth</label>
                <label for="contact" class="px-5" style="margin-left: 5.5rem;">Phone Number</label> <br>
                <input class="fw-light ms-5 bg-transparent py-1" type="date" style="width: 39%; border: none; border-bottom: 1px solid #A2D2FF;" name="birth_date" required>
                <input class="fw-light ms-3 bg-transparent py-1" type="number" style="width: 39%; border: none; border-bottom: 1px solid #A2D2FF;" name="contact" required>
                <br>
                <label for="riwayat" class="ms-5 mt-4">Riwayat Penyakit</label> <br>
                <input class="fw-light ms-5 bg-transparent py-1" type="text" style="width: 83%; border: none; border-bottom: 1px solid #A2D2FF;" name="riwayat">
                <br>
                <label class="ms-5 mt-4" for="address">Address</label> <br>
                <textarea class="fw-light ms-5 bg-transparent py-1" style="border: none; border-bottom: 1px solid #A2D2FF" name="address" cols="55" rows="2" placeholder="Enter.." required></textarea>
                <br>
                <label class="ms-5 mt-4" for="email">Email</label> 
                <label for="password" class="px-5" style="margin-left: 8.5rem;">Password</label> <br>
                <input class="fw-light ms-5 bg-transparent py-1" type="email" name="email" style="width: 39%; border: none; border-bottom: 1px solid #A2D2FF;" required>
                <input class="fw-light ms-3 bg-transparent py-1" type="password" name="password" style="width: 39%; border: none; border-bottom: 1px solid #A2D2FF;" required>
                <br>
            
                <center>
                <button class="mt-4 mb-5 rounded-pill border border-0 py-2 ms-3 fw-medium" style="width: 78%; background-color: #FEE440 ;" type="submit" name="SignUp">Sign Up</button>
                </center>

            </form>

            <center>
                <span class="fw-light">Already have an account? <a class="text-decoration-none fw-medium" href="login.php">Login</a></span>
            </center>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
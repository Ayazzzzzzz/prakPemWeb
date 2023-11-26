<?php 
    session_start();
    include 'connect_pemweb.php';

    $pasienID = $_SESSION['pasienID'];

    $query = mysqli_query($connect, "DELETE FROM pasien
            WHERE pasienID='$pasienID'");
    
    if($query) {
        header("location:login.php?pesan=hapus");
    } else {
        echo "Proses hapus gagal";
    }
?>
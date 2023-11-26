<?php 
    include 'connect_pemweb.php';

    $kunjunganID = $_GET['kunjunganID'];
    $query = mysqli_query($connect, "delete from kunjungan where kunjunganID = '$kunjunganID'");

    if($query){
        header("location:appoinment.php");
    }
    else {
        echo "Proses hapus gagal";
    }
?>
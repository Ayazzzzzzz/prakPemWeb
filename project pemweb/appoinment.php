<?php 
    session_start();
    include 'connect_pemweb.php';
    $id =  $_SESSION["pasienID"];
    $data = mysqli_query($connect,"SELECT * FROM kunjungan WHERE pasienID='$id'")or die (mysqli_error($connect));
    var_dump($data->fetch_assoc())

?>
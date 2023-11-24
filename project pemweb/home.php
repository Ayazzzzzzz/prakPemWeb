<?php 
    session_start();
    if(empty($_SESSION['email'])){
        header("location:login_page.php?pesan=belum_login");
    }
?>

<a href="logout.php">
      <button style="background-color: #ce3046; color: white;" class="btn fs-6 p-2 pt-1 pb-1" type="submit" value="Logout">Logout</button>
</a>
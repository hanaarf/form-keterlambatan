<?php
    include 'koneksi.php';

    if(isset($_GET['nipd_guru'])){
        header ('location:totalguru.php');
    }

    $nipd_guru =$_GET['nipd_guru'];

    $sql = "DELETE FROM `totalguru` WHERE nipd_guru='$nipd_guru'";
    $query = mysqli_query($connect, $sql );

    if($query){
        header('Location: totalguru.php');
    }else{
        header('Location: hapustotguru.php?status=gagal');
    }
?>


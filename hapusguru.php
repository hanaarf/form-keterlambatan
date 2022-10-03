<?php
    include 'koneksi.php';

    if(isset($_GET['nipd_guru'])){
        header ('location:telatguru.php');
    }

    $nipd_guru =$_GET['nipd_guru'];

    $sql = "DELETE FROM `keterlambatan_guru` WHERE nipd_guru='$nipd_guru'";
    $query = mysqli_query($connect, $sql );

    if($query){
        header('Location: telatguru.php');
    }else{
        header('Location: hapusguru.php?status=gagal');
    }
?>


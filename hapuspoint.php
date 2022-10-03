<?php
    include 'koneksi.php';

    if(isset($_GET['no_pelanggaran'])){
        header ('location:point.php');
    }

    $no_pelanggaran =$_GET['no_pelanggaran'];

    $sql = "DELETE FROM `data_pelanggaran` WHERE no_pelanggaran='$no_pelanggaran'";
    $query = mysqli_query($connect, $sql );

    if($query){
        header('Location: point.php');
    }else{
        header('Location: hapuspoint.php?status=gagal');
    }
?>


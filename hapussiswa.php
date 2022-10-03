<?php
    include 'koneksi.php';

    if(isset($_GET['id_siswa'])){
        header ('location:telatsiswa.php');
    }

    $id_siswa =$_GET['id_siswa'];

    $sql = "DELETE FROM `keterlambatan_siswa` WHERE id_siswa='$id_siswa'";
    $query = mysqli_query($connect, $sql );

    if($query){
        header('Location: telatsiswa.php');
    }else{
        header('Location: hapussiswa.php?status=gagal');
    }
?>


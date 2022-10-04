<?php
    include 'koneksi.php';

    if(isset($_GET['id_siswa'])){
        header ('location:totalsiswa.php');
    }

    $id_siswa =$_GET['id_siswa'];

    $sql = "DELETE FROM `totalsiswa` WHERE id_siswa='$id_siswa'";
    $query = mysqli_query($connect, $sql );

    if($query){
        header('Location: totalsiswa.php');
    }else{
        header('Location: hapustotsiswa.php?status=gagal');
    }
?>


<?php 
include 'koneksi.php';

    if(isset($_POST['simpan'])){
        $id_siswa = $_POST['id_siswa'];
        $nama_siswa = $_POST['nama_siswa'];
        $point = $_POST['point'];
        ;
        

        $sql = "INSERT INTO totalsiswa  VALUES ('$id_siswa','$nama_siswa','$point')";
        $query =  mysqli_query ($connect, $sql);
        
        
        
        if($query){
            header('location: totalsiswa.php');
            
        }else{
            header('location: simpantotsiswa.php?status=gagal');
        }
        
    }
?>


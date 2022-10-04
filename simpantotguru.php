<?php 
include 'koneksi.php';

    if(isset($_POST['simpan'])){
        $nipd = $_POST['nipd'];
        $nama_guru = $_POST['nama_guru'];
        $point = $_POST['point'];
        ;
        

        $sql = "INSERT INTO totalguru  VALUES ('$nipd','$nama_guru','$point')";
        $query =  mysqli_query ($connect, $sql);
        
        
        
        if($query){
            header('location: totalguru.php');
            
        }else{
            header('location: simpantotguru.php?status=gagal');
        }
        
    }
?>


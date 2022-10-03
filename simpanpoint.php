<?php 
include 'koneksi.php';

    if(isset($_POST['simpan'])){
        $no_pelanggaran = $_POST['no_pelanggaran'];
        $jenis_pelanggaran = $_POST['jenis_pelanggaran'];
        $point = $_POST['point'];
        $sanksi = $_POST['sanksi'];
        

        $sql = "INSERT INTO data_pelanggaran  VALUES ('$no_pelanggaran','$jenis_pelanggaran','$point','$sanksi')";
        $query =  mysqli_query ($connect, $sql);
        
        
        
        if($query){
            header('location: point.php');
            
        }else{
            header('location: simpanpoint.php?status=gagal');
        }
        
    }
?>


<?php 
include 'koneksi.php';

    if(isset($_POST['simpan'])){
        $id_siswa = $_POST['id_siswa'];
        $nama_siswa = $_POST['nama_siswa'];
        $kelas = $_POST['kelas'];
        $tanggal = $_POST['tanggal'];
        $point = $_POST['point'];
        $sanksi = $_POST['sanksi'];
        $keterangan = $_POST['keterangan'];
        

        $sql = "INSERT INTO keterlambatan_siswa  VALUES ('$id_siswa','$nama_siswa','$kelas','$tanggal','$point','$keterangan')";
        $query =  mysqli_query ($connect, $sql);
        
        
        
        if($query){
            header('location: telatsiswa.php');
            
        }else{
            header('location: simpanformsiswa.php?status=gagal');
        }
        
    }
?>


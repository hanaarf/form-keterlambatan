<?php 
include 'koneksi.php';

    if(isset($_POST['simpan'])){
        $nipd_guru = $_POST['nipd_guru'];
        $nama_guru = $_POST['nama_guru'];
        $tanggal = $_POST['tanggal'];
        $point_baru = $_POST['point'];
        $sanksi = $_POST['sanksi'];
        $keterangan = $_POST['keterangan'];

        $get_point_sblmnya = "SELECT * FROM keterlambatan_guru WHERE nama_guru = '$nama_guru'";
        $query = mysqli_query ($connect,$get_point_sblmnya);
        $data= mysqli_fetch_array ($query);

        $tambah_point = $data['point'] + $point_baru;


        $sql = "INSERT INTO keterlambatan_guru  VALUES ('$nipd_guru','$nama_guru','$tanggal','$tambah_point','$sanksi','$keterangan')";
        $query =  mysqli_query ($connect, $sql);
        
        
        
        if($query){
            header('location: formguru.php');
            
        }else{
            header('location: simpanformguru.php?status=gagal');
        }
        
    }
?>


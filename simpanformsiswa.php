<?php 
include 'koneksi.php';

    if(isset($_POST['simpan'])){
        $id_siswa = $_POST['id_siswa'];
        $nama_siswa = $_POST['nama_siswa'];
        $kelas = $_POST['kelas'];
        $tanggal = $_POST['tanggal'];
        $point_baru = $_POST['point'];
        $sanksi = $_POST['sanksi'];
        $keterangan = $_POST['keterangan'];

        $get_point_sblmnya = "SELECT * FROM keterlambatan_siswa WHERE nama_siswa = '$nama_siswa'";
        $query = mysqli_query ($connect,$get_point_sblmnya);
        $data= mysqli_fetch_array ($query);

        $tambah_point = $data['point'] + $point_baru;


        $sql = "INSERT INTO keterlambatan_siswa  VALUES ('$id_siswa','$nama_siswa','$kelas','$tanggal','$tambah_point','$sanksi','$keterangan')";
        $query =  mysqli_query ($connect, $sql);
        
        
        
        if($query){
            header('location: formsiswa.php');
            
        }else{
            header('location: simpanformsiswa.php?status=gagal');
        }
        
    }
?>


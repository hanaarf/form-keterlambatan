<?php
    include 'koneksi.php';

    if(isset($_POST['simpan'])){
        header ('location:telatsiswa.php');
    }
        $id_siswa = $_POST['id_siswa'];
        $nama_siswa = $_POST['nama_siswa'];
        $kelas = $_POST['kelas'];
        $tanggal = $_POST['tanggal'];
        $point = $_POST['point'];
        $sanksi = $_POST['sanksi'];
        $keterangan = $_POST['keterangan'];

    $sql = "UPDATE `keterlambatan_siswa` SET `id_siswa`='$id_siswa',`nama_siswa`='$nama_siswa',`kelas`='$kelas',`tanggal`='$tanggal',`point`='$point',`sanksi`='$sanksi',`keterangan`='$keterangan' WHERE id_siswa='$id_siswa'";
    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: telatsiswa.php ');
    }else{
        header('Location: editsiswa.php?status=gagal');
    }
?>
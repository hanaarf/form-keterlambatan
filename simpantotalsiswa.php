<?php
    include 'koneksi.php';

    if(isset($_POST['simpan'])){
        header ('location:totalsiswa.php');
    }
        $id_siswa = $_POST['id_siswa'];
        $nama_siswa = $_POST['nama_siswa'];
        $point = $_POST['point'];
        
        

    $sql = "UPDATE `totalsiswa` SET `id_siswa`='$id_siswa',`nama_siswa`='$nama_siswa',`point`='$point' WHERE id_siswa='$id_siswa'";
    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: totalsiswa.php ');
    }else{
        header('Location: edittotsiswa.php?status=gagal');
    }
?>
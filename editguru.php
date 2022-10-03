<?php
    include 'koneksi.php';

    if(isset($_POST['simpan'])){
        header ('location:telatguru.php');
    }
        $nipd_guru = $_POST['nipd_guru'];
        $nama_guru = $_POST['nama_guru'];
        $tanggal = $_POST['tanggal'];
        $point = $_POST['point'];
        $sanksi = $_POST['sanksi'];
        $keterangan = $_POST['keterangan'];

    $sql = "UPDATE `keterlambatan_guru` SET `nipd_guru`='$nipd_guru',`nama_guru`='$nama_guru',`tanggal`='$tanggal',`point`='$point',`sanksi`='$sanksi',`keterangan`='$keterangan' WHERE nipd_guru='$nipd_guru'";
    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: telatguru.php ');
    }else{
        header('Location: editguru.php?status=gagal');
    }
?>
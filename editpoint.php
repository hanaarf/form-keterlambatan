<?php
    include 'koneksi.php';

    if(isset($_POST['simpan'])){
        header ('location:point.php');
    }
        $no_pelanggaran = $_POST['no_pelanggaran'];
        $jenis_pelanggaran = $_POST['jenis_pelanggaran'];
        $point = $_POST['point'];
        $sanksi = $_POST['sanksi'];
        

    $sql = "UPDATE `data_pelanggaran` SET `no_pelanggaran`='$no_pelanggaran',`jenis_pelanggaran`='$jenis_pelanggaran',`point`='$point',`sanksi`='$sanksi' WHERE no_pelanggaran='$no_pelanggaran'";
    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: point.php ');
    }else{
        header('Location: editpoint.php?status=gagal');
    }
?>
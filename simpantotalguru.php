<?php
    include 'koneksi.php';

    if(isset($_POST['simpan'])){
        header ('location:totalguru.php');
    }
        $nipd_guru = $_POST['nipd_guru'];
        $nama_guru = $_POST['nama_guru'];
        $point = $_POST['point'];
        
        

    $sql = "UPDATE `totalguru` SET `nipd_guru`='$nipd_guru',`nama_guru`='$nama_guru',`point`='$point' WHERE nipd_guru='$nipd_guru'";
    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: totalguru.php ');
    }else{
        header('Location: edittotguru.php?status=gagal');
    }
?>
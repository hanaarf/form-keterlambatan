<?php
     include 'koneksi.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>StarLate</title>
     <link rel="shortcut icon" type="" href="img/logo.jpeg">

     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,700;1,800;1,900&display=swap" rel="stylesheet">

     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eSHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <link rel="stylesheet" href="css/landingpage.css">
</head>
<body>
     
     <div class="navbar">
          <div class="judul">
               <img src="img/logo.jpeg" alt="" class="logo">
               <p class="nama">/ StarLate</p>
          </div>
          <div class="link">
                    <a href="#home">Home</a>
                    <a href="#Point">Point</a>
                    <a href="#Form">Form</a>
          </div>
     </div>

     <div class="deskripsi" id="home">
          <div class="tulisankiri">
               <p>Let's be disciplined about our time!</p>
          </div>
          <div class="tulisankiri1">
               <p class="satu"> StarLate hadir untuk membantu kita semua agar lebih disiplin lagi terhadap waktu yang sudah terjadwal. Membantu kita untuk menjadi orang yang lebih baik dan lebih menghargai waktu</p>
          </div>
     </div>

     <div class="kanan">
          <img src="img/bulet.png" alt="" class="bulet">
          <img src="img/buku.png" alt="" class="buku">
     </div>

     <img src="img/rules.png" alt="" class="rules">
     <div class="tulisantengah" id="Point">
          <div class="tengah">
               <h3 class="tengah">Our Rules</h3>
          </div>
          <div class="isi">
               <p>1. Terlambat masuk : 5 Point</p>
               <p>2. Keluar pada jam pelajaran : 10 Point</p>
               <p>3. Tidak masuk sekolah tanpa keterangan : 25 Point</p>
               <p>4. Meninggalkan KBM : 10 Point</p>
               <p>5. Mencemarkan nama baik sekolah : 50 Point</p>
               <p>6. Melawan guru dan pegawai sekolah : 75 Point</p>
               <p>7. Berkelahi / Tawuran : 100 Point</p>
               <p>8. Mengancam atau mengintimidasi : 100 Point</p>
               <p>9. Memelihara kuku panjang : 5 Point</p>
               <p>10. Membawa / Mengonsumsi / Memperjualbelikan narkoba : 100 Point</p>
          </div>
     </div>

     <h3 class="data" id="Form">Masukan Data</h3>
     <div class="elemen">
          <div class="one">
               <p>FORM SISWA</p>
               <button class="one1"><a href="formsiswa.php">Here</a></button>
          </div>
          <div class="two">
               <p>FORM GURU</p>
               <button class="two1"><a href="formguru.php">Here</a></button>
          </div>
     </div>

     <div class="header">
          <div class="footer-col">
               <h4>Ikuti kami</h4>
               <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
               </div>
          </div>
          <div class="footer-col">
               <h4>About Us</h4>
               <div class="link">
                    <a href="#">Tentang</a><br>
                    <a href="#">Peraturan & Ketaatan</a><br>
                    <a href="#">Being on rules</a><br>
                    <a href="#">Hubungi Kami</a><br>
               </div>
          </div>
          <div class="footer-col">
               <h4>Help</h4>
               <div class="link">
                    <a href="#">Contact Us</a><br>
                    <a href="#">Telp : +62 1234-5678</a><br>
                    <a href="#">Email : starlate@gmail.com</a><br>
               </div>
          </div>
     </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Guru</title>
    <link rel="shortcut icon" type="" href="logo.jpeg">
    
    <link rel='stylesheet' type='text/css' href='css/formsiswa.css'>

    <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,700;1,800;1,900&display=swap" rel="stylesheet">
     
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="judul">
                <a herf="">StarLate</a>
            </div>
            <div class="menu">
                <a href="landingpage.php">Home</a></li>
            </div>
        </div>
    </nav>

    <div class="about">
        <img src="img/orang.jpeg" alt="" class="orang">
        <div class="container">
            <form action="" method="POST">
                <tr>
                    <td>
                        <h2>Welcome to StarLate</h2>
                        <p><label>Id Siswa  : <input type="number" name="id_siswa" required="required" class="input1"></label></p>
                        <p><label>Nama Siswa  : <input type="text" name="nama_siswa" required="required" class="input2"></label></p>
                        <p><label>Kelas  : <input type="number" name="kelas" required="required" class="input3"></label></p>
                        <p><label>Tanggal  : <input type="number" name="tanggal" required="required" class="input4"></label></p>
                        <p><label>Point  : <input type="text" name="point" required="required" class="input5"></label></p>
                        <p><label>Sanksi  : <input type="text" name="sanksi" required="required" class="input6"></label></p>
                        <p><label>Keterangan  : <input type="text" name="keterangan" required="required" class="input7"></label></p>
                        <button type="submit" class="button">Simpan</button>
                     </td>
                </tr>
            </form>

        </div>   
        </div>
</body>
</html>
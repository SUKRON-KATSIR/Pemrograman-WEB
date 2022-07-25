<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nrp" id="nrp" required placeholder="NRP"><br>
        <input type="text" name="nama" id="nama" required placeholder="Nama"><br>
        <input type="text" name="alamat" id="alamat" required placeholder="Alamat"><br>
        <input type="text" name="prodi" id="prodi" required placeholder="Prodi"><br>
        <input type="text" name="tanggalLahir" id="tanggalLahir" required placeholder="Tetala"><br>
        <input type="checkbox" name="pr" id="pr" value="L">Laki-Laki
        <input type="checkbox" name="lk" id="lk" value="P">Perempuan<br>
        <input type="text" name="username" id="username" required placeholder="Username"><br>
        <input type="text" name="password" id="password" required placeholder="Password"><br>
        <button type="submit" name="registrasi">Registrasi</button>
    </form>
    <?php 
        if(isset($_POST['registrasi'])){
            $file = fopen('Data_Mahasiswa.txt', 'a');
            fwrite($file, 'NRP: ');
            fwrite($file, $_POST['nrp'] . "\n");
            fwrite($file, 'Nama: ');
            fwrite($file, $_POST['nama'] . "\n");
            fwrite($file, 'Alamat: ');
            fwrite($file, $_POST['alamat'] . "\n");
            fwrite($file, 'Prodi: ');
            fwrite($file, $_POST['prodi'] . "\n");
            fwrite($file, 'Tanggal Lahir: ');
            fwrite($file, $_POST['tanggalLahir'] . "\n");
            fwrite($file, 'Jenis Kelamin: ');
            if(isset($_POST['pr'])) {
                fwrite($file, $_POST['pr'] . "\n");
            } else {
                fwrite($file, $_POST['lk'] . "\n");
            }
            fwrite($file, 'Username: ');
            fwrite($file, $_POST['username'] . "\n");
            fwrite($file, 'Password: ');
            fwrite($file, $_POST['password'] . "\n\n");
            fclose($file);
        }
    ?>
</body>
</html>

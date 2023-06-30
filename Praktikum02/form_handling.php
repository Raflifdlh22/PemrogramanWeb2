<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form Hannding</title>
</head>
<body>
    <h1>
        Form pendaftaran Mahasiswa STT NF
    </h1>
    <form action="post.php" method="POST">
        <!-- type text -->
        <label for="">Nama Mahasiswa</label><br>
            <input type="text" name="nama" id=""><br><br>
        <!-- type Radio -->
        <label for="">Jenis kelamin</label>
            <input type="radio" name="jenis_kelamin" value="laki-laki" id="">
        <label for="">Laki Laki</label>
            <input type="radio" name="jenis_kelamin" value="perempuan" id="">
        <label for="">perempuan</label><br><br>
        <!-- type checkbox -->
        <label for="">mata kuliah</label><br>
        <input type="checkbox" name="mata_kuliah" value="Basis Data" id="">
            <label for="">basis data</label><br>
        <input type="checkbox" name="mata_kuliah" value="Bahasa Inggris" id="">
            <label for="">bahsa inggris</label><br>
        <input type="checkbox" name="mata_kuliah" value="Pweb" id="">
            <label for="">Pweb</label><br><br>
        <!-- type number -->
        <label for="">Nomor Telepon</label><br>
            <input type="number" name="nomor_telepon"><br><br>
        <!-- type select -->
        <label for="">prodi</label>
        <select name="prodi" id="">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Bisnis Digital">Bisnis Digital</option>
        </select><br><br>
        <!-- button -->
        <button type="submit">Kirim</button>
        <button type="Button">Contoh</button>
        <button type="Reset">Reset</button>
    </form>
</body>
</html>
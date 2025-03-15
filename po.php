<!DOCTYPE html>
<html>
<head>
    <title>Form CV</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        form { display: inline-block; text-align: left; padding: 20px; border: 1px solid #ccc; border-radius: 10px; }
    </style>
</head>
<body>
    <h2>Isi Data CV</h2>
    <form method="POST" enctype="multipart/form-data">
        Nama: <input type="text" name="nama" required><br><br>
        Tempat, Tanggal Lahir: <input type="text" name="ttl" required><br><br>
        Riwayat Pendidikan: <textarea name="pendidikan" required></textarea><br><br>
        Upload Foto: <input type="file" name="foto" accept="image/*" required><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>

<?php
// cv.php
session_start();
if (!isset($_SESSION['email']) || !isset($_SESSION['cv'])) {
    header("Location: index.php");
    exit();
}
$cv = $_SESSION['cv'];
$email = $_SESSION['email'];
?>

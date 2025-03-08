<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $born = htmlspecialchars($_POST['born']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $summary = htmlspecialchars($_POST['summary']);
    $education = $_POST['education'];
    $experience = $_POST['experience'];
    $skills = $_POST['skills'];

    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>CV - $name</title>
        <link rel='stylesheet' href='stylecv.css'>
    </head>
    <body>
        <h1>$name</h1>
        <p><strong>Tempat, Tanggal Lahir:</strong> $born</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>No. Telp:</strong> $phone</p>
        <h2>Tentang Saya</h2>
        <p>$summary</p>
        
        <h2>Edukasi</h2>
        <ul>";
    foreach ($education as $edu) {
        echo "<li>" . htmlspecialchars($edu) . "</li>";
    }
    echo "</ul>
        
        <h2>Pengalaman</h2>
        <ul>";
    foreach ($experience as $exp) {
        echo "<li>" . htmlspecialchars($exp) . "</li>";
    }
    echo "</ul>
        
        <h2>Skills</h2>
        <ul>";
    foreach ($skills as $skill) {
        echo "<li>" . htmlspecialchars($skill) . "</li>";
    }
    echo "</ul>
    </body>
    </html>";
} else {
    echo "Invalid request.";
}
?>
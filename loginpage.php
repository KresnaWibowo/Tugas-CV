<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $domain = explode('@', $email)[1]; 

        if ($password === $domain) {
            header("Location: p.php");
            exit();
        } else {
            echo "<script>alert('Invalid password. Password must be the domain of your email.');</script>";
        }
    } else {
        echo "<script>alert('Invalid email format.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN - Kresna</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="wrapper">
        <form action="loginpage.php" method="POST">
            <h1>Login</h1>

            <div class="input-box">
                <input type="email" name="email" placeholder="Email" required>
            </div>

            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
            </div>


            <button type="submit" class="btn">Login</button>

        </form>
    </div>
</body>
</html>
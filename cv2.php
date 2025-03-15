<?php
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $emailParts = explode('@', $email);
    if (count($emailParts) == 2) {
        $domain = $emailParts[1];
        if ($password === $domain) {
            $_SESSION['email'] = $email;
            header("Location: form.php");
            exit();
        } else {
            $error = "Password salah!";
        }
    } else {
        $error = "Format email tidak valid!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        form { display: inline-block; text-align: left; padding: 20px; border: 1px solid #ccc; border-radius: 10px; }
    </style>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST">
        Email: <input type="email" name="email" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>
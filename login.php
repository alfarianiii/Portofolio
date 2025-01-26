
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<?php
session_start(); 

$users = [
    ['username' => 'Syifaalfariani', 'password' => '0812'], 
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    foreach ($users as $user) {
        if ($user['username'] === $username && $user['password'] === $password) {
            $_SESSION['loggedin'] = true; 
            $_SESSION['username'] = $username; 
            header('Location: portofolio.php');
            exit();
        }
    }
    $error = "Username atau password salah! <br> periksa kembali username atau passwordnya";
}
?>

    <div class="login-box">
        <h1>Welcome</h1>
        <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>

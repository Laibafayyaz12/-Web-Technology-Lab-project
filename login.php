<?php
session_start();

$correct_username = "laiba";
$correct_password = "12345";

if(isset($_POST['login'])) {
    if($_POST['username'] === $correct_username && $_POST['password'] === $correct_password) {
        $_SESSION['user'] = "Laiba";
        $_SESSION['email'] = "laiba@gmail.com";
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Stylish Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-container">
    <h2>Welcome Back</h2>
    <?php if(isset($error)) echo "<p style='color:yellow;'>$error</p>"; ?>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">Login</button>
    </form>
</div>

</body>
</html>

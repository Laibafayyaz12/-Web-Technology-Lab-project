<?php
session_start();
if(!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="topbar">
    Hello <?php echo $_SESSION['user']; ?> 👋
</div>

<div class="sidebar">
    <a href="dashboard.php">🏠 Dashboard</a>
    <a href="#">👤 User Panel</a>
    <a href="profile.php">📝 Profile</a>
    <a href="#">⚙ Settings</a>
    <a href="#">🔔 Notifications</a>
    <a href="logout.php">🚪 Logout</a>
</div>

<div class="content">
    <div class="card">
        <h2>Dashboard Overview</h2>
        <p>Welcome to your modern dashboard.</p>
    </div>
</div>

</body>
</html>

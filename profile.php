<?php
session_start();
if(!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

if(isset($_POST['update'])) {
    $_SESSION['user'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $success = "Profile Updated Successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
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
        <h2>Your Profile</h2>

        <?php if(isset($success)) echo "<p style='color:lightgreen;'>$success</p>"; ?>

        <form method="POST">
            <label>Name</label><br>
            <input type="text" name="name" value="<?php echo $_SESSION['user']; ?>" required><br><br>

            <label>Email</label><br>
            <input type="email" name="email" value="<?php echo $_SESSION['email']; ?>" required><br><br>

            <button type="submit" name="update">Update Profile</button>
        </form>
    </div>
</div>

</body>
</html>

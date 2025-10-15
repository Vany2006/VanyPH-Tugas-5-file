<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['role'] !== 'user') {
  header('Location: login.php');
  exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>User Dashboard</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="dashboard user">
  <h1> Hallo, <?= ucfirst($_SESSION['username']); ?>!</h1>
  <p>Welcome to page User. Search Flower Your Favorite!🌷</p>

  <div class="menu">
    <a href="#" class="menu-card">💐 Search Type Flowers</a>
    <a href="#" class="menu-card">🛍️ view history order </a>
    <a href="#" class="menu-card">💬 Contact Admin</a>
  </div>

  <a href="logout.php" class="logout-btn">Logout</a>
</div>
</body>
</html>

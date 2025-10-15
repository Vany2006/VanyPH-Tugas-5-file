<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['role'] !== 'admin') {
  header('Location: login.php');
  exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Admin Dashboard</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="dashboard admin">
  <h1>💐 Hallo, <?= ucfirst($_SESSION['username']); ?>!</h1>
  <p>Welcome to page <strong>Admin</strong>. You can manage your flower catalog and orders </p>

  <div class="menu">
    <a href="#" class="menu-card">🌷 Manage Data Type Flowers</a>
    <a href="#" class="menu-card">🛒 Manage Order</a>
    <a href="#" class="menu-card">💬 Response User</a>
  </div>

  <a href="logout.php" class="logout-btn">Logout</a>
</div>
</body>
</html>

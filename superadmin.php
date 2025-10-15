<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['role'] !== 'superadmin') {
  header('Location: login.php');
  exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>SuperAdmin Dashboard</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="dashboard superadmin">
  <h1>👑 Hallo, <?= ucfirst($_SESSION['username']); ?>!</h1>
  <p>Wellcome to Page <strong>SuperAdmin</strong>. Manage System and User.</p>

  <div class="menu">
    <a href="#" class="menu-card"> Manage User</a>
    <a href="#" class="menu-card"> Manage Admin Data</a>
    <a href="#" class="menu-card"> Report Activity</a>
  </div>

  <a href="logout.php" class="logout-btn">Logout</a>
</div>
</body>
</html>

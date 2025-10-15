<?php
session_start();

$users = [
    'vany' => ['password' => 'handayanivp', 'role' => 'user'],
    'admin' => ['password' => 'admin', 'role' => 'admin'],
    'superadmin' => ['password' => 'superadmin', 'role' => 'superadmin']
];

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (isset($users[$username]) && $users[$username]['password'] === $password) {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $users[$username]['role'];

        switch ($_SESSION['role']) {
            case 'superadmin':
                header('Location: superadmin.php');
                exit;
            case 'admin':
                header('Location: admin.php');
                exit;
            case 'user':
                header('Location: user.php');
                exit;
        }
    } else {
        $message = '❌ Username or password Incorect!';
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Login website by Vany</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="login-container">
  <h1>LOGIN</h1>
  <?php if ($message): ?>
    <p class="error"><?= $message ?></p>
  <?php endif; ?>
  <form method="post">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit"> </button>
  </form>
  <p class="footer">© 2025 Website Tugas | by <strong>Vany Putri Handayani</strong></p>
</div>
</body>
</html>

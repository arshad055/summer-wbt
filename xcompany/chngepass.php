<?php
$msg = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $new = $_POST['new'] ?? "";
  $confirm = $_POST['confirm'] ?? "";
  if (strlen($new) < 4) {
    $msg = "New password must be at least 4 characters.";
  } elseif ($new !== $confirm) {
    $msg = "New password and confirm password must match.";
  } else {
    $msg = "Password changed.";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Change Password</title>
  <link rel="stylesheet" href="homepage.css">
</head>
<body>
  <header class="site">
    <nav class="nav">
      <a href="homepage.html">home</a>
      <a href="login.php">login</a>
      <a href="registration.php">registration</a>
    </nav>
  </header>

  <div class="container" style="max-width:380px;margin:20px auto;padding:16px;border:1px solid #ccc;">
    <h2 style="text-align:center;margin:0 0 12px;">Change Password</h2>

    <?php if ($msg): ?>
      <div style="margin-bottom:10px;"><?=$msg?></div>
    <?php endif; ?>

    <form method="post">
      <div class="field" style="margin-bottom:10px;">
        <label>New Password</label>
        <input type="password" name="new" style="width:100%;padding:8px;border:1px solid #bbb;">
      </div>
      <div class="field" style="margin-bottom:10px;">
        <label>Confirm Password</label>
        <input type="password" name="confirm" style="width:100%;padding:8px;border:1px solid #bbb;">
      </div>
      <div class="actions" style="text-align:center;">
        <button type="submit">Change</button>
      </div>
    </form>
  </div>
</body>
</html>

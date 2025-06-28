<?php
session_start();
include 'base.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $check = $connect->prepare("SELECT * FROM users WHERE username = ?");
    $check->bind_param("s", $username);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        $error = "⛔ Օգտատերը արդեն գոյություն ունի։";
    } else {
        $stmt = $connect->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $_SESSION['username'] = $username;
        header("Location: order.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="hy">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Գրանցում</title>
  <link rel="stylesheet" href="styles.css" />
  <style>
    body {
      font-family: 'Rubik', sans-serif;
      background-color: #f7f9fc;
      margin: 0;
      padding: 0;
    }

    .register-container {
      max-width: 400px;
      margin: 80px auto;
      background: #fff;
      border-radius: 12px;
      padding: 30px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .register-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    .register-container input {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ddd;
      border-radius: 6px;
      font-size: 16px;
    }

    .register-container button {
      width: 100%;
      padding: 12px;
      background-color: #0077cc;
      color: #fff;
      font-size: 16px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: 0.3s;
    }

    .register-container button:hover {
      background-color: #005fa3;
    }

    .register-container a {
      display: block;
      text-align: center;
      margin-top: 10px;
      color: #0077cc;
      text-decoration: none;
    }

    .register-container .error {
      background: #ffd6d6;
      padding: 10px;
      color: #a10000;
      border: 1px solid #ffa1a1;
      border-radius: 5px;
      text-align: center;
    }
  </style>
</head>
<body>

<div class="register-container">
    <h2>Գրանցում</h2>

    <?php if (isset($error)) { echo "<div class='error'>$error</div>"; } ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Օգտանուն" required>
        <input type="password" name="password" placeholder="Գաղտնաբառ" required>
        <button type="submit" name="register">Գրանցվել</button>
    </form>

    <a href="login.php">Արդեն ունե՞ք հաշիվ</a>
</div>

</body>
</html>

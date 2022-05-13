<?php
  $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

  $pass = md5($pass . "akrjgkuruhtu34itjk345");

  $mysql = new mysqli('localhost', 'root', 'root', 'register-bd','8889');

  $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
  $user = $result->fetch_assoc();
  if (count((array)$user) == 0) {
    echo "No such user was found";
    exit();
  }

  setcookie('user', $user['name'], time() + 3600, "/");

  $mysql->close();

  header('Location: /');

 ?>

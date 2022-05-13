<?php
  $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
  $name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

  if (mb_strlen($login) < 5 || mb_strlen($login) > 90) {
    echo "Invalid login length invalid";
    exit();
  } elseif (mb_strlen($name) < 3 || mb_strlen($name) > 50) {
    echo "Invalid name length";
    exit();
  } elseif (mb_strlen($pass) < 2 || mb_strlen($pass) > 6) {
      echo "Invalid password length (from 2 to 6 characters)";
    exit();
  }

  $pass = md5($pass. "akrjgkuruhtu34itjk345");

  $mysql = new mysqli('localhost', 'root', 'root', 'register-bd','8889');
  $mysql->query("INSERT INTO `users` (`login` , `pass` , `name`)
  VALUES('$login', '$pass', '$name')");

  $mysql->close();

  header('Location: /register.php');
 ?>

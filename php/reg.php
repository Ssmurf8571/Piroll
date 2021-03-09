<?php
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    if (isset($_POST['email'])) { $email=$_POST['email']; if ($email =='') { unset($email);} }
    if (isset($_POST['psw-repeat'])) { $psw_repeat=$_POST['psw-repeat']; if ($psw_repeat =='') { unset($psw_repeat);} }

 if (empty($login) or empty($password) or empty($email) or empty($psw_repeat)) 
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }

    if ($password != $psw_repeat) {
      exit ("<h1><center>Пароли не совпадают.</center></h1>");
    }

    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $email = stripslashes($email);
    $email = htmlspecialchars($email);

    $login = trim($login);
    $password = trim($password);
    $email = trim($email);

    include ("db.php");

    if ( $password != $psw_repeat ) {
      header('Location: /Piroll/err_reg.html');
    }

    $result = mysqli_query($db,"SELECT id FROM users WHERE login='$login'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
    }

    $result2 = mysqli_query ($db, "INSERT INTO users (login,password,email) VALUES('$login','$password','$email')");

    if ($result2=='TRUE')
    {
      header('Location: /Piroll/');
    }
 else {
   header('Location: /Piroll/err_reg.html');
    }
    ?>
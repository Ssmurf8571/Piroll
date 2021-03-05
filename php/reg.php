<?php
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    if (isset($_POST['email'])) { $email=$_POST['email']; if ($email =='') { unset($email);} }

 if (empty($login) or empty($password) or empty($email)) 
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    /
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

    $result = mysqli_query($db,"SELECT id FROM users WHERE login='$login'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
    }

    $result2 = mysqli_query ($db, "INSERT INTO users (login,password,email) VALUES('$login','$password','$email')");

    if ($result2=='TRUE')
    {
      header('Location: /Piroll/err_reg.html');
    }
 else {
   header('Location: /Piroll/err_reg.html');
    }
    ?>
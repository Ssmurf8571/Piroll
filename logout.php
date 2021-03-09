<?php
session_start(); 

if(isset($_SESSION['login'])) {
    setcookie($_SESSION['login'], '', 0);
    header('Location: /Piroll/');
}

session_destroy();
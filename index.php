<?php
session_start();
error_reporting(0);
include('includes/db_connection.php');

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);
}
?>
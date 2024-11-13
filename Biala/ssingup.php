<?php
$baza = new mysqli('localhost','root', '', 'biala');
if(@$_POST['sub']){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO login (Username, Email, Pass)  VALUES ('{$username}', '{$email}', '{$password}'";
    $baza->query($sql);
    header('location:singup.php');
    exit();
}
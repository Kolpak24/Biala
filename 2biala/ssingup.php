<?php
$baza = new mysqli('localhost','root', '', 'biala');
if(@$_POST['sub']){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO oddzial (miasto)  VALUES ('{$username}', '{$email}', '{$password}')";
    $baza->query($sql);
    header('location:index.php');
    exit();
}
?>
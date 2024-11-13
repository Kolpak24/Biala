<?php
$baza = new mysqli('localhost', 'root', '', 'komis24');
if ($baza->connect_error) {
    die("Connection failed: " . $baza->connect_error);
}
if(@$_POST['sub']){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO login (username, email, password)  VALUES ('{$username}', '{$email}', '{$password}')";
    $baza->query($sql);
    header('location:glowna.php');
    exit();
}
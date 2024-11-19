<?php
$baza = new mysqli('localhost','root', '', 'biala');
if(isset($_POST['sub'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT username, email, password FROM login WHERE username='{$username}' AND email='{$email}' AND '{$password}";
    $baza->query($sql);
    header('location:glowna.php');
    exit();
}
echo '1';
?>
<?php require_once "database.php";

$Username = $_POST ['newUsername'];
$Password = $_POST['newPassword'];
$Encrypt_pass = password_hash($Password, PASSWORD_DEFAULT);
$Query = "INSERT INTO users (Username, Pass) VALUES ('$Username', '$Encrypt_pass')";
$Result = mysqli_query($Connection, $Query);



?>
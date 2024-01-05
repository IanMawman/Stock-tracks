<?php
$Host = 'localhost';
$Username = 'root';
$Password = '';
$Databasename = 'stock';
$Connection = mysqli_connect ($Host, $Username, $Password, $Databasename);

if ($Connection == false) {

    die('Failed to connect, tough luck'.mysqli_connect_error());

}



























?>
<?php 
$id = $_GET['id'];
$con = mysqli_connect('localhost', 'root', 'farhad51', 'orni');
$con->query("delete from hello where id=$id");
 header("location:read.php");
?>
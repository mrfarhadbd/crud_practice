<?php $con = mysqli_connect('localhost', 'root', 'farhad51', 'orni');
$con->query("update hello set name='roven', email='roven@gmail.com' where id=7");

?>
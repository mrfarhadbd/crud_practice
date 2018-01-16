<?php $con = mysqli_connect('localhost', 'root', 'farhad51', 'orni');
$con->query("
	create table hi(
		id int(11) auto_increment primary key,
		name varchar(30) not null,
		email varchar(25) 
		)"
	);


?>
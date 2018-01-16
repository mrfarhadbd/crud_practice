<?php 
$id = $_GET['id'];
if (isset($_REQUEST['name']) && isset($_REQUEST['email'])) {
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $con = mysqli_connect('localhost', 'root', 'farhad51', 'orni');
  $con->query("update hello set name='$name' , email='$email' where id=$id");
}
$con = mysqli_connect('localhost', 'root', 'farhad51', 'orni');
$students = $con->query("select * from hello where id=$id");
$student = $students->fetch_object();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>update people</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
</head>
<body>
	 <?php require 'nav.php'; ?>
<div class="container">
	<div class="card">
		<div class="card-header">
			<h1>update a people</h1>
		</div>
	<div class="card-body">
		<form action="" method="POST">
			<div class="from-group">
				<label for="name">name</label>
				<input value="<?php echo $student->name; ?>" type="text" name="name" id="name" class="form-control"/>
			</div>
			<div class="from-group">
				<label for="email">email</label>
				<input value="<?php echo $student->email; ?>" type="email" name="email" id="email" class="form-control"/>
			</div>
			<div class="from-group">
				<button class="btn btn-outline-primary" type="submit">update people</button>
			</div>
		</form>
		</div>
		</div>	
</div>
</body>
</html>
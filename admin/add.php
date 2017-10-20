<?php
include '../config.php';

if(isset($_POST["submit"])){
	$name = $_POST["name"];
	$content =  $_POST["content"];
	$price =  $_POST["price"];
	$fol ="uploads/";

	$imgname = $fol . basename($_FILES['file']['name']);
	move_uploaded_file($_FILES['file']['tmp_name'], $imgname);

	$sql = "INSERT INTO  products(name, detail, price, image) VALUES(:name,:content,:price,:img)";

	$stmt = $db->prepare($sql);
	$stmt->execute(array(
			"name"=>$name,
			"content"=>$content,
			"price"=>$price,
			"img"=>$imgname,
		));
	header('location:index.php');
}





?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<style type="text/css">
	#main{
		width: 400px;
		margin: auto;
	}
	input{
		width: 100%;
	}
	textarea{
		width: 100%;
	}
	button{
		background: green;
		color: #fff;
		margin-top: 5px;
		width: 100px;
		height: 30px;
		border: none;
	}
</style>
<body>
	<div id="main">
		<h1>Add new product</h1>
		<form method="POST" enctype="multipart/form-data">
			<div class="form">
				<label>Name:</label></br>
				<input type="text" name="name" required="">
			</div>
			<div class="form">
				<label>Content:</label></br>
				<textarea name="content"></textarea required="">
			</div>
			<div class="form">
				<label>Price:</label></br>
				<input type="number" name="price" required="">
			</div>
			<div class="form">
				<label>Images:</label></br>
				<input type="file" name="file" required="">
			</div>
			<button type="submit" name="submit">Add</button>
		</form>
	</div>
</body>
</html>
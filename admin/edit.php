<?php
include '../config.php';

$id = $_GET['id'];
if(isset($_POST["submit"])){
	$name = $_POST["name"];
	$content =  $_POST["content"];
	$price =  $_POST["price"];
	$fol ="uploads/";

	$imgname = $fol . basename($_FILES['file']['name']);
	move_uploaded_file($_FILES['file']['tmp_name'], $imgname);

	$sql = " UPDATE  products SET name=:name, detail=:content, price=:price, image=:img WHERE Pro_ID = $id";

	$stmt = $db->prepare($sql);
	$stmt->execute(array(
			"name"=>$name,
			"content"=>$content,
			"price"=>$price,
			"img"=>$imgname,
		));
	header('location:index.php');
}
$sql = "SELECT * FROM products WHERE Pro_ID = $id";

$stmt = $db->prepare($sql);
$stmt->execute();

$pro = $stmt->fetch(PDO::FETCH_ASSOC);




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
		height: 30px;
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
	<h1>Edit product</h1>
		<form method="POST" enctype="multipart/form-data">
			<div class="form">
				<label>Name:</label>
				<input type="text" name="name" value="<?=$pro['name'] ?>" required="">
			</div>
			<div class="form">
				<label>Content:</label>
				<textarea name="content" required=""><?=$pro['detail'] ?></textarea>
			</div>
			<div class="form">
				<label>Price:</label>
				<input type="number" name="price" value="<?=$pro['price'] ?>" required="">
			</div>
			<div class="form">
				<label>images:</label>
				<input type="file" name="file" required="">
			</div>
			<button type="submit" name="submit">Edit</button>
		</form>
	</div>
</body>
</html>
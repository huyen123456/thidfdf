<?php
include '../config.php';

$sql = "SELECT * FROM products";

$stmt = $db->prepare($sql);
$stmt->execute();

$pro = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style type="text/css">
	#main{
		width: 800px;
		margin: auto;
	}
	a{
		text-decoration: none;
	}
	table{
		margin-top: 10px;
	}

</style>
<body>
	<div id="main">
	<h1>Admin</h1>
		<a href="add.php"><button>Add New</button></a>
		<table border="1">
			<thead>
				<th>ID</th>
				<th>NAME</th>
				<th>CONTENT</th>
				<th>price</th>
				<th>IMG</th>
				<th>AC</th>
			</thead>
			<tbody>
				<?php foreach ($pro as $value): ?>
				<tr>
					<td><?= $value['Pro_ID']?></td>
					<td><?= $value['name']?></td>
					<td><?= $value['detail']?></td>
					<td><?= $value['price']?></td>
					<td><?= $value['image']?></td>
					<td><a href="edit.php?id=<?= $value['Pro_ID']?>"><button>Edit</button></a>
					<a href="delete.php?id=<?= $value['Pro_ID']?>"><button>Del</button></a>

					</td>

				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</body>
</html>
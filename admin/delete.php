<?php
include '../config.php';
$id = $_GET['id'];
$sql = "DELETE  FROM products WHERE Pro_ID = $id";

$stmt = $db->prepare($sql);
$stmt->execute();
header('location:index.php');


?>
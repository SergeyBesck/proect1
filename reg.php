<?php

$mysqli=new mysqli ("localhost", "root", "","gitregister");
$mysqli->set_charset("utf8");

if (!empty($_POST)) {
	$name = $_POST['name'];
	$login = $_POST['login'];
	$pass = $_POST['pas'];

	$sql = "INSERT INTO `user`(`name`, `login`, `pass`) VALUES ($name,$login,$pass)";
	$result = $mysqli->query($sql);
}
?>
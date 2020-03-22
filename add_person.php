<?php require_once "db_connection.php"; ?>

<?php
	$name = $_POST["name"];
	$age = $_POST["age"];
	$profession = $_POST["profession"];

	mysqli_query($db_config, "INSERT INTO person (name, age, profession) VALUES ('$name', '$age', '$profession')" ); 

?>

<?php include('main_form.php') ?>
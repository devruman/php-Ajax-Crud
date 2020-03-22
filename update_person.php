<?php require_once "db_connection.php"; ?>
<?php
	$id = $_POST["id"];
	$name = $_POST["name"];
	$age = $_POST["age"];
	$profession = $_POST["profession"];
	mysqli_query($db_config, "UPDATE person SET name='$name', age='$age', profession='$profession' WHERE id='$id' " );
?>
<?php include('main_form.php') ?>
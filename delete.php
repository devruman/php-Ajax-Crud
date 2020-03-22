<?php require_once "db_connection.php"; ?>

<?php
	$id = $_POST["id"];
	mysqli_query($db_config, "delete from person where id=$id" ); 

?>

<?php include('main_form.php') ?>
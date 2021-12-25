<?php
	$clubname = $_GET['clubname'];

	require_once "./functions/database_functions.php";
	$conn = db_connect();

	$query = "DELETE FROM club WHERE clubname = '$clubname'";
	$result = mysqli_query($conn, $query);

	$query1 = "DELETE FROM members WHERE clubname = '$clubname'";
	$result1 = mysqli_query($conn, $query1);

	if(!$result){
		echo "delete data unsuccessfully " . mysqli_error($conn);
		exit;
	}
	header("Location: myclubs.php");
?>
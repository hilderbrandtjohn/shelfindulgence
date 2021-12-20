<?php 
	session_start();
	$clubname = $_GET['clubname'];
	$username=$_SESSION['username'];

	require_once "./functions/database_functions.php";
	$conn = db_connect();

	$query = "DELETE FROM members WHERE username ='$username' AND clubname = '$clubname' ";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "delete data unsuccessfully " . mysqli_error($conn);
		exit;
	}
	header("Location: myclubs.php");
	 ?>
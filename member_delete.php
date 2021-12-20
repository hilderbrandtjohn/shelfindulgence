<?php
    session_start();
	$id = $_GET['id'];

	require_once "./functions/database_functions.php";
	$conn = db_connect();

	$query = "SELECT clubname FROM members WHERE id='$id'";
    $result1 = mysqli_query($conn, $query);
    if(!$result1){
        echo "Can't retrieve data " . mysqli_error($conn);
        exit;
    }
    $row = mysqli_fetch_assoc($result1);
    $clubname=$row['clubname'];

	$query = "DELETE FROM members WHERE id = '$id'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "delete data unsuccessfully " . mysqli_error($conn);
		exit;
	}

	
	header("Location: manage_user.php?clubname=$clubname");
?>
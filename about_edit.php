<?php	
	// if save change happen

	if(!isset($_POST['update'])){
		echo "Something wrong!";
		exit;
	}

	$clubname = $_GET['clubname'];
	$about = trim($_POST['about']);
	

	require_once("./functions/database_functions.php");
	$conn = db_connect();


	$query = "UPDATE club SET  
	about = '$about' WHERE clubname='$clubname' ";
	
	// two cases for fie , if file submit is on => change a lot
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Can't update data " . mysqli_error($conn);
		exit;
	} else {
		header("Location: admin-dashboard.php?clubname=$clubname");
	}
?>
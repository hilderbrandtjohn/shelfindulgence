<?php	
	// if save change happen
	if(!isset($_POST['save_change'])){
		echo "Something wrong!";
		exit;
	}

	$username = trim($_POST['username']);
	$email = trim($_POST['email']);
	$state = trim($_POST['state']);
	$city = trim($_POST['city']);

	require_once("./functions/database_functions.php");
	$conn = db_connect();

	// username = '$username',


	$query = "UPDATE user SET  
	email = '$email', 
	 
	state = '$state', 
	city = '$city'";
	
	// two cases for fie , if file submit is on => change a lot
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Can't update data " . mysqli_error($conn);
		exit;
	} else {
		header("Location: edit_profile.php?username=$username");
	}
?>
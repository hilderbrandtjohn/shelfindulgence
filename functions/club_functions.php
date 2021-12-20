<?php 
function db_connect(){
		$conn = mysqli_connect("localhost", "root", "", "shelfindulgence");
		if(!$conn){
			echo "Can't connect database " . mysqli_connect_error($conn);
			exit;
		}
		return $conn;
	}
function getClubById($conn, $id){
		$query = "SELECT clubname, cstate, ccity, ctype FROM club WHERE id = '$id'";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "Can't retrieve data " . mysqli_error($conn);
			exit;
		}
		return $result;
	}
function getAll($conn){
		$query = "SELECT * from club ORDER BY id DESC";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "Can't retrieve data " . mysqli_error($conn);
			exit;
		}
		return $result;
	}

 ?>
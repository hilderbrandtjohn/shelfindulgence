<?php 
require_once "./functions/database_functions.php";
	$conn = db_connect();

	// $sql_query ="CREATE TABLE IF NOT EXISTS club(
 //    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 //    clubname varchar(75) UNIQUE NOT NULL,
 //    cstate varchar(75)  NOT NULL,
 //    ccity varchar(75)  NOT NULL,
	// ctype varchar(75)  NOT NULL)";
    

	// //Checking if connection is succesful

	// if (!mysqli_query($conn, $sql_query)) {
	//     echo "Error in creating table : " .mysqli_error($conn);
	// }

	// $sql_query ="CREATE TABLE IF NOT EXISTS members(
 //    username varchar(225)  NOT NULL ,
 //    clubname varchar(75)  NOT NULL,
 //    cstate varchar(75)  NOT NULL,
 //    ccity varchar(75)  NOT NULL,
 //    ctype varchar(75)  NOT NULL,
 //    member_type int(1) NOT NULL)";

	// //Checking if connection is succesful

	// if (!mysqli_query($conn, $sql_query)) {
	//     echo "Error in creating table : " .mysqli_error($conn);
	// }

	// $sql_query ="CREATE TABLE IF NOT EXISTS meeting(
 //    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 //    bookname varchar(225) NOT NULL,
 //    meetingdate date NOT NULL,
 //    meetingtime time NOT NULL,
 //    meetinglink varchar(225) NOT NULL,
 //    meetinglocation varchar(75) NOT NULL,
	// clubname varchar(75)  NOT NULL)";
    

	// //Checking if connection is succesful

	// if (!mysqli_query($conn, $sql_query)) {
	//     echo "Error in creating table : " .mysqli_error($conn);
	// }

	// $sql_query ="CREATE TABLE IF NOT EXISTS creading(
 //    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 //    book varchar(225) NOT NULL,
 //    author varchar(225) NOT NULL,
 //    startdate date NOT NULL,
 //    finishdate date NOT NULL,
 //    note varchar(225) NOT NULL,
	// clubname varchar(75)  NOT NULL)";
    

	// //Checking if connection is succesful

	// if (!mysqli_query($conn, $sql_query)) {
	//     echo "Error in creating table : " .mysqli_error($conn);
	// }

$sql_query ="CREATE TABLE IF NOT EXISTS logs(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    username varchar(225)  NOT NULL,
    msg text  NOT NULL,
	clubname varchar(75)  NOT NULL)";
    

	//Checking if connection is succesful

	if (!mysqli_query($conn, $sql_query)) {
	    echo "Error in creating table : " .mysqli_error($conn);
	}

 ?>
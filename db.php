<?php 
session_start(); //starts a session based on post request
// $host ="localhost";
// $username ="root";
// $pwd="";
// $database ="shelfindulgence";

//initialising form variables
$email="";
$username="";
$state="";
$city="";
$password="";
$errors = array();
$clubname="";
$cstate="";
$ccity="";
$type="";

//creating a connection to the server
$connection =mysqli_connect('localhost', 'root', '', 'shelfindulgence');

//checking if connection is succesful
if(!$connection){
	die("could not connect to server" . mysqli_connect_error());
}

//creating a database

$sql_query = "CREATE DATABASE IF NOT EXISTS shelfindulgence";

//checking if database creation is succesful

if (!mysqli_query($connection ,$sql_query)) {
	echo "Error in creating database";
}

//Creating a table

$sql_query ="CREATE TABLE IF NOT EXISTS User(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	email varchar(225) NOT NULL,
	username varchar(225) UNIQUE NOT NULL,
    state varchar(225) UNIQUE NOT NULL,
    city varchar(225) UNIQUE NOT NULL,
	password varchar(225) NOT NULL)";

//Checking if connection is succesful

if (!mysqli_query($connection, $sql_query)) {
	echo "Error in creating table : " .mysqli_error($connection);
}

$sql_query ="CREATE TABLE IF NOT EXISTS Club(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    clubname varchar(75) UNIQUE NOT NULL,
    cstate varchar(75)  NOT NULL,
    ccity varchar(75) UNIQUE NOT NULL,
    type varchar(75) NOT NULL)";

//Checking if connection is succesful

if (!mysqli_query($connection, $sql_query)) {
    echo "Error in creating table : " .mysqli_error($connection);
}	

//REGISTERING A USER
if (isset($_POST['create'])) {
	//getting input from user and performing query sanitisation on it
	$clubname= mysqli_real_escape_string($connection, $_POST['clubname']);
	$cstate= mysqli_real_escape_string($connection, $_POST['cstate']);
    $ccity= mysqli_real_escape_string($connection, $_POST['ccity']);
    $type= mysqli_real_escape_string($connection, $_POST['type']);

    //validating the form to ensure it is filled correctly
    //pushing corresponding errors unto $errors array by adding array_push()
    if(empty($clubname)){ array_push($errors, "Clubname is required");}
    if(empty($cstate)){ array_push($errors, "State/County is required");}
    if(empty($ccity)){ array_push($errors, "City/town is required");}
    if(empty($type)){ array_push($errors, "Club type is required");}
    
    // Checking database to ensure a club does not exist with the same name
    $club_check_query = "SELECT * FROM club WHERE clubname='$clubname' LIMIT 1";
    $result =mysqli_query($connection, $club_check_query);
    $user =mysqli_fetch_assoc($result);  
    // mysqli_fetch_assoc fetches the result row as an associative array

    if ($club) {
    	//if club exists
    	if ($club['clubname'] === $clubname) {
    		array_push($errors, "Clubname already exists,choose another");
    	}
    }

    //register club if there are no errors in form entry
    if (count($errors) == 0) {
    	//Inserting club data
    	$insert_query = "INSERT INTO club (clubname, cstate, ccity, type) VALUES('$clubname', '$cstate', '$ccity', '$type')";
    	mysqli_query($connection,$insert_query);

    	//track logged in users using sessions NB:include session_start at the top of the file
    	$_SESSION['username'] =$username;
    	$_SESSION['clubname'] =$clubname;
    	header('location: admin-dashboard.php');

    }

}

//LOGIN USER
if (isset($_POST['signin'])) {
	//Getting input from user
	$username= mysqli_real_escape_string($connection, $_POST['username']);
    $password= mysqli_real_escape_string($connection, $_POST['password']);

    //Error handling
    if(empty($username)){
        array_push($errors, "Username is required");
 	}
    if(empty($password)){
    	array_push($errors, "Password is required");
    }

if (count($errors) == 0) {
    $password = md5($password);
    $select_query ="SELECT * FROM User WHERE username='$username' AND password='$password'";
    $results =mysqli_query($connection,$select_query);
    if (mysqli_num_rows($results) ==1) {
        //track logged in users using sessions NB:include session_start at the top of the file
        $_SESSION['username'] =$username;
        $_SESSION['success'] ="You are now logged in";
        header('location: home.php');
    }else {
        array_push($errors, "Wrong username or password");
    }
  }

}

//REGISTERING A CLUB
if (isset($_POST['register'])) {
    //getting input from user and performing query sanitisation on it
    $email= mysqli_real_escape_string($connection, $_POST['email']);
    $username= mysqli_real_escape_string($connection, $_POST['username']);
    $state= mysqli_real_escape_string($connection, $_POST['state']);
    $city= mysqli_real_escape_string($connection, $_POST['city']);
    $password= mysqli_real_escape_string($connection, $_POST['password']);

    //validating the form to ensure it is filled correctly
    //pushing corresponding errors unto $errors array by adding array_push()
    if(empty($email)){ array_push($errors, "Email is required");}
    if(empty($username)){ array_push($errors, "Username is required");}
    if(empty($state)){ array_push($errors, "State/County is required");}
    if(empty($city)){ array_push($errors, "City/town is required");}
    if(empty($password)){ array_push($errors, "Password is required");}
    
    // Checking database to ensure a user does not exist with the same email and/or username
    $user_check_query = "SELECT * FROM User WHERE username='$username' OR email='$email' LIMIT 1";
    $result =mysqli_query($connection, $user_check_query);
    $user =mysqli_fetch_assoc($result);  
    // mysqli_fetch_assoc fetches the result row as an associative array

    if ($user) {
        //if user exists
        if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
        }

        if ($user['email'] === $email) {
            array_push($errors, "Email already exists");
        }
    }

    //register user if there are no errors in form entry
    if (count($errors) == 0) {
        //Hashing the password before saving it
        $password = md5($password);

        //Inserting User data
        $insert_query = "INSERT INTO User (email, username, state, city, password) VALUES('$email', '$username', '$state', '$city', '$password')";
        mysqli_query($connection,$insert_query);

        //track logged in users using sessions NB:include session_start at the top of the file
        $_SESSION['username'] =$username;
        $_SESSION['success'] ="You are now logged in";
        header('location: home.php');

    }

}
 
?>

<?php
session_start();
	
$username = $_SESSION['username'];
$msg = $_REQUEST['msg'];
$clubname = $_REQUEST['clubname'];

require_once "./functions/database_functions.php";
$conn = db_connect();

mysqli_query($conn, "INSERT INTO logs(username, msg, clubname) VALUES('$username','$msg', '$clubname')");

$result = mysqli_query($conn, "SELECT username, msg, clubname FROM logs WHERE clubname='$clubname' ORDER BY id ASC");
while($row=mysqli_fetch_array($result)){

echo "<span class='uname'>" . $row['username'] . "</span>: <span class='msg'>" . $row['msg'] . "</span></br></br>";

}
mysqli_close($conn);
?>


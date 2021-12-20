<?php
require_once "./functions/database_functions.php";
$conn = db_connect();
$clubname = $_REQUEST['clubname'];

$result = mysqli_query($conn, "SELECT username, msg, clubname FROM logs WHERE clubname='$clubname' ORDER BY id ASC");
while($row=mysqli_fetch_array($result)){
	
	echo "<span class='uname'>" . $row['username'] . "</span>: <span class='msg'>" . $row['msg'] . "</span></br></br>";
}
mysqli_close($conn);



?>




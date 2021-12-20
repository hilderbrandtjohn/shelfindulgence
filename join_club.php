<?php
    session_start();
    $clubname = $_GET['clubname'];
    $username=$_SESSION['username'];
    require "./functions/database_functions.php";
    $conn = db_connect();



    // get club data
    $query = "SELECT * FROM club WHERE clubname='$clubname' ";
    $result = mysqli_query($conn, $query);
    if(!$result){
        echo "Can't retrieve data " . mysqli_error($conn);
        exit;
    }
    $row = mysqli_fetch_assoc($result);

   $username=$_SESSION['username'];
    $clubname = $_GET['clubname'];
    

    $cstate=$row['cstate'];
    $ccity=$row['ccity'];
    $ctype=$row['ctype'];



    $member_type=2;

    $query = "INSERT INTO members(username, clubname, cstate, ccity, ctype, member_type) VALUES ('" . $username . "', '" . $clubname . "', '" . $cstate . "', '" . $ccity . "', '" . $ctype . "' ,'" . $member_type . "')";
        $result2 = mysqli_query($conn, $query);

    
    if(!$result2){
        echo "Can't add new data to member table" . mysqli_error($conn);
            exit;
    } else {
            header("Location: about-our-club.php?clubname=$clubname");
        }


    
?>
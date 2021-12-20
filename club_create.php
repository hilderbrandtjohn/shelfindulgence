<?php
    session_start();
    require "./functions/database_functions.php";
    $conn = db_connect();

    if(isset($_POST['create'])){
        $clubname = trim($_POST['clubname']);
        $clubname = mysqli_real_escape_string($conn, $clubname);
        
        $cstate = trim($_POST['cstate']);
        $cstate = mysqli_real_escape_string($conn, $cstate);

        $ccity = trim($_POST['ccity']);
        $ccity = mysqli_real_escape_string($conn, $ccity);
        
        $ctype = trim($_POST['ctype']);
        $ctype = mysqli_real_escape_string($conn, $ctype);

        $username =$_SESSION['username'];

        $member_type=1;

        $query = "INSERT INTO members(username, clubname, cstate, ccity, ctype, member_type) VALUES ('" . $username . "', '" . $clubname . "', '" . $cstate . "', '" . $ccity . "', '" . $ctype . "' ,'" . $member_type . "')";
        $result2 = mysqli_query($conn, $query);

        if(!$result2){
            echo "Can't add new data to member table" . mysqli_error($conn);
            exit;
        }
        $query = "INSERT INTO club(clubname, cstate, ccity, ctype) VALUES ('" . $clubname . "', '" . $cstate . "', '" . $ccity . "', '" . $ctype . "')";
        $result = mysqli_query($conn, $query);

        if(!$result){
            echo "Can't add new data to club table" . mysqli_error($conn);
            exit;
        } else {
            header("Location: admin-dashboard.php?clubname=$clubname");
        }


    }
?>
<?php 
session_start();
$clubname = $_GET['clubname'];
$username=$_SESSION['username'];
require_once "./functions/database_functions.php";
$conn = db_connect();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Messages</title>
    <meta name="description" content="Shelfindulgence makes organizing a book club simple. Create clubs, schedule meetings, and choose books, all for free." />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="cleartype" content="on" />
    <meta name="theme-color" content="#ffffff">
<!-- Font tags-->
    <!-- End Font tags -->

    <!-- Style Tags-->
    <link rel="stylesheet" href="static/css/vendors~main.css">
    <link rel="stylesheet" href="static/css/main.css">
    <link rel="stylesheet" href="static/css/MessagePage.css">
    <link rel="stylesheet" href="static/css/InvitationLink.css">
   
    <link href="static/css/style3.css" rel="stylesheet" type="text/css">
    <!-- End Style Tags -->
</head>

<body class="intent-mouse">
    <div id="root">
        <div>
            <div></div>
            <div class="wrapper-container fix-overflow-x">
                <header class="header-container">
                    <nav class="navbar">
                        <div class="navbar-header">
                            <div class="navbar-brand logo"><a href="home.php" aria-label="Link to Shelf Indulgence&#x27;s Homepage"><img width="233" height="30" src="static/media/logo.png" class="img-responsive" alt="" /></a></div>
                        </div>
                        <div class="skip-to-content"><a href="#content">Skip to content</a></div>
                        <div class="navbar-collapse">
                            <div class="nav-wrapper">
                                <div class="header-group-button"><button id="bt-open-menu" type="button" aria-label="Open menu" class="btn btn-open-menu lines-button x "><span class="lines"></span></button></div><a href="signin.php" class="btn-signin-rw ">Sign in</a>
                                <div aria-hidden="false" tabindex="-1" class="nav-container ">
                                    <ul class="nav bz-navbar-nav navbar-user"></ul>
                                    <ul class="nav bz-navbar-nav navbar-right">
                                        <li class="m-item" ><a href="" class="m-link">Resources <span class="ficon ficon-arrow-down-medium" aria-hidden="true"></span></a>
                                            <ul class="sub-menu sub-menu-user sub-menu-block">
                                                <li class="m-sub-item"><a href="https://www.goodreads.com/" target="_blank" class="m-link">Good Reads</a></li>
                                                <li class="m-sub-item"><a href="https://www.librarything.com/" target="_blank" class="m-link">Library Thing</a></li>
                                                <li class="m-sub-item"><a href="https://b-ok.africa/" target="_blank" class="m-link">Z-Library</a></li>
                                                <li class="m-sub-item"><a href="https://www.libgen.is/" target="_blank" class="m-link">Library Genesis</a></li>
                                            </ul>
                                        </li>
                                        <li class="m-item"><a href="" class="m-link">clubs</a>
                                            <ul class="sub-menu sub-menu-user sub-menu-block">
                                                 <li class="m-sub-item"><a href="joinclub.php" class="m-link">Join a club</a></li>
                                                <li class="m-sub-item"><a href="myclubs.php"  class="m-link">My clubs</a></li>
                                                <li class="m-sub-item"><a href="create-club.php"  class="m-link">Create club</a></li>
                                            </ul>
                                            
                                        </li>
                                        <li class="m-item"><a href="signin.php" class="m-link">Shop</a></li>
                                        <li class="m-item"><a href="about.html" class="m-link">About</a></li>
                                        
                                        <li class="m-item"><a href="getstarted.html" class="mtr-button btn-white">
                                            <?php if (isset($_SESSION['username'])) : ?>
                                                    <h3><?php echo $_SESSION['username']; ?></h3>
                                                <?php endif ?>
                                        </a></li>
                                        <li class="m-item text-center hidden-md hidden-lg">
                                            <h4 class="mb-title">The best website<br />for organizing your book club</h4><a href="signup.html" class="btn btn-default-corner bg-transparent btn-create-club">Create a club</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </header>
                <main class="main-container" id="content">
                    <div class="profile-container message-container">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="center">
                                    <div class="left-container">
                                        <div class="profile-content club-content">
                                            <div class="avatar-content">
                                                
                                                <div class="club-info">
                                                    <div>
                                                        <h3><?php echo $clubname; ?></h3>
                                                    </div>
                                                    <div>
                                                        <br>
                                                        <br>
                                                        <h3>Welcome  <?php echo $username; ?></h3>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="list-user-menu">
                                                <ul class="list">
                                                    <li class="item"><a class="" href="admin-dashboard.php?clubname=<?php echo $clubname; ?>">ADMIN DASHBOARD</a></li>
                                                    <li class="item"><a class="" href="about-our-club.php?clubname=<?php echo $clubname; ?>">ABOUT OUR CLUB</a></li>
                                                    <li class="item"><a class="" href="currently-reading.php?clubname=<?php echo $clubname; ?>">CURRENTLY READING</a></li>
                                                    <li class="item"><a class="" href="meetings.php?clubname=<?php echo $clubname; ?>">MEETINGS</a></li>
                                                    <li class="item"><a class="" href="members.php?clubname=<?php echo $clubname; ?>">MEMBERS</a></li>
                                                    <li class="item"><a class="active" href="#">MESSAGES</a></li>
                                                </ul>
                                            </div>
                                            
                                        </div>
                                    </div>
                                        <!-- <div class="block-container"><span></span></div> -->
                                        <div class="right-container">
                                            <div class="block-container">
                                                <div class="block-content">
                                                    <div class="no-messages"><img src="static/media/img-no-message.b47f0954.svg" alt="No Items" arial-label="No Items" width="176" height="101">
                                                        <h3 class="title">Messages</h3>
                                                        <div class="main-form input-message ">

                                                                <div id="chatlogs">
                                                                    LOADING CHATLOGS, PLEASE WAIT...
                                                                </div>


                                                            <div class="wrap-area ">
                                                                <div class="area-mask ">
                                                                    
                                                                    <div class="mentions mentions--multiLine" style="position: relative; overflow-y: visible;">
                                                                        <div class="mentions__control">
                                                                            <div class="mentions__highlighter" style="position: relative; box-sizing: border-box; width: 100%; color: transparent; overflow: hidden; white-space: pre-wrap; overflow-wrap: break-word; border: 1px solid transparent; text-align: start;"> </div> 
                                                                            <form name="form1">
                                                                                <textarea placeholder="Write a new message" aria-label="Write a new message" name="msg" id="message" class="mentions__input" style="display: block; width: 100%; position: absolute; margin: 0px; top: 0px; left: 0px; box-sizing: border-box; background-color: transparent; font-family: inherit; font-size: inherit; letter-spacing: inherit; height: 100%; bottom: 0px; overflow: hidden; resize: none;"></textarea>
                                                                                </form>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap-no-message-actions">
                                                                        <button class="btn-post-reply"><a href="#" onClick="submitchat()">Send</a></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group hidden"><span role="alert" class="notification-message error show"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="footer-container">
                        <div class="footer-top"><a href="/" class="logo-footer" aria-label="Link to Shelfindulgence&#x27;s Homepage"><img width="203" height="26" class="img-responsive" src="static/media/logo.png" alt="" /></a></div>
                        <div class="footer-middle">
                            <div class="footer-nav">
                                <div class="footer-nav-item">
                                    <h3 class="nav-title">Company</h3>
                                    <p class="nav-item"><a class="nav-link" href="/about">About Shelfindulgence</a></p>
                                    <p class="nav-item"><a class="nav-link" href="/privacy-policy">Privacy Policy</a></p>
                                </div>
                                <div class="footer-nav-item">
                                    <h3 class="nav-title">Community</h3>
                                    <p class="nav-item"><a class="nav-link" href="">Join a Book Club</a></p>
                                </div>
                                <div class="footer-nav-item">
                                    <h3 class="nav-title">Support</h3>
                                    <p class="nav-item"><a class="nav-link" href="/faq/#contact-us">Contact Us</a></p>
                                    <p class="nav-item"><a class="nav-link" href="/faq">FAQ</a></p>
                                </div>
                                
                                <div class="mask"></div>
                            </div>
                            <div class="subscribe-block">
                                <h3 class="nav-title">Keep in touch</h3>
                                <p class="nav-item">Join the Shelf Indulgence newsletter for monthly reading recommendations, book club tips, giveaways, and more.</p>
                                <div class="blog-subscribe subscribe-top-books">
                                    <div class="center">
                                        <h2 class="subscribe-title">Enter your email to receive Shelfindulgence&#x27; newsletter with reading recommendations and the most popular book club books each month.</h2>
                                        <form class="form-subscribe" novalidate=""><input type="email" class="input-form" value="" aria-label="Email address" placeholder="Email address" /><button type="submit" class="input-submit">SUBSCRIBE</button></form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-bottom">
                            <div class="copyright">
                                <p>©
                                    <!-- -->2021
                                    <!-- --> John Hilderbrandt All rights reserved
                                </p>
                            </div>
                            <div class="social-list">
                                <p class="social-items">Connect</p>
                                <div class="social-items"><a target="_blank" rel="noopener noreferrer" aria-label="Link to Shelfindulgence&#x27;s Instagram" href="https://www.instagram.com/bookclub.z/"><span class="ficon ficon-instagram"></span></a></div>
                                <div class="social-items"><a target="_blank" rel="noopener noreferrer" aria-label="Link to Shelfindulgence&#x27;s LinkedIn" href="https://www.linkedin.com/company/Shelfindulgence"><span class="ficon ficon-linkedin-circle"></span></a></div>
                                
                            </div>
                        </div>
                    </footer>
            </div>
            <div class="Toastify"></div>
        </div>
    </div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>

    function submitchat(){
        if(form1.msg.value == ''){ //exit if one of the field is blank
            alert('Enter your message !');
            return;
        }
        var msg = form1.msg.value;
        var xmlhttp = new XMLHttpRequest(); //http request instance
        
        xmlhttp.onreadystatechange = function(){ //display the content of insert.php once successfully loaded
            if(xmlhttp.readyState==4&&xmlhttp.status==200){
                document.getElementById('chatlogs').innerHTML = xmlhttp.responseText; //the chatlogs from the db will be displayed inside the div section
            }
        }
        xmlhttp.open('GET', 'insert.php?clubname=<?php echo $clubname; ?>&msg='+msg, true); //open and send http request
        xmlhttp.send();
    }
    $(document).ready(function(e) {
            $.ajaxSetup({cache:false});
            setInterval(function() {$('#chatlogs').load('logs.php?clubname=<?php echo $clubname; ?>');}, 2000);
        });
        
    </script>

</body>

</html>
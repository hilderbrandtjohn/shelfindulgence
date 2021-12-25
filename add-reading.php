<?php 
session_start();
$clubname = $_GET['clubname'];
$username=$_SESSION['username'];
require_once "./functions/database_functions.php";
$conn = db_connect();
$result= getReadByClubname($conn, $clubname);


if(isset($_POST['submit'])){
        $book= trim($_POST['book']);
        $book = mysqli_real_escape_string($conn, $book);
        
        $author = trim($_POST['author']);
        $author = mysqli_real_escape_string($conn, $author);

        $startdate = trim($_POST['startdate']);
        $startdate = mysqli_real_escape_string($conn, $startdate);
        
        $finishdate = trim($_POST['finishdate']);
        $finishdate = mysqli_real_escape_string($conn, $finishdate);

        $note = trim($_POST['note']);
        $note = mysqli_real_escape_string($conn, $note);

        $clubname = $_GET['clubname'];

        $query = "INSERT INTO creading(book, author, startdate, finishdate, note, clubname) VALUES ('" . $book . "', '" . $author . "', '" . $startdate . "', '" . $finishdate . "', '" . $note . "', '" . $clubname . "')";
        $result = mysqli_query($conn, $query);
        if(!$result){
            echo "Can't add new data " . mysqli_error($conn);
            exit;
        } else {
            header("Location: currently-reading.php?clubname=$clubname");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<title>Currently reading</title>
<meta name="description" content="Shelfindulgence makes organizing a book club simple. Create clubs, schedule meetings, and choose books, all for free." />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="cleartype" content="on" />
<meta name="theme-color" content="#ffffff">
<!-- Font tags-->
<!-- End Font tags -->

<!-- Style Tags-->
<link rel="stylesheet" href="static/css/vendors~main.css">
<link rel="stylesheet" href="static/css/main.css">
<link rel="stylesheet" href="static/css/CreateMeetingPage.css">

<!-- End Style Tags -->
</head>

<body class="intent-mouse">
    <div id="root">
        <div>
            <div></div>
            <div class="wrapper-container undefined">
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
                                        <li class="m-item" ><a href="" class="m-link">Resources</a>
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
                                        <li class="m-item"><a href="shop.php" class="m-link">Shop</a></li>
                                        <li class="m-item"><a href="about.php" class="m-link">About</a></li>
                                        
                                        <li class="m-item"><a href="profile.php" class="mtr-button btn-white">
                                            <?php if (isset($_SESSION['username'])) : ?>
                                                    <h3><?php echo $_SESSION['username']; ?></h3>
                                                <?php endif ?>
                                        </a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </header>
                <main class="main-container" id="content">
                    <div class="profile-container create-meeting-container">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="center">
                                    <div class="left-container">
                                        <div class="profile-content club-content">
                                            <div class="avatar-content">
                                                
                                                <div class="club-info">
                                                    <div style="text-transform: capitalize;font-weight: bold;font-style: oblique;font-size: 24px;font-family: bradler hand itc;">
                                                        <?php echo $clubname; ?>
                                                    </div>
                                                    <div style="text-transform: capitalize;font-style: oblique;font-size: 20px;font-family: bradler hand itc;">
                                                        <br>
                                            
                                                        Welcome  <?php echo $username; ?>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="list-user-menu">
                                                <ul class="list">
                                                    <li class="item"><a class="" href="admin-dashboard?clubname=<?php echo $clubname; ?>">ADMIN DASHBOARD</a></li>
                                                    <li class="item"><a class="" href="about-our-club.php?clubname=<?php echo $clubname; ?>">ABOUT OUR CLUB</a></li>
                                                    <li class="item"><a class="" href="currently-reading.php?clubname=<?php echo $clubname; ?>">CURRENTLY READING</a></li>
                                                    <li class="item"><a  href="meetings.php?clubname=<?php echo $clubname; ?>">MEETINGS</a></li>
                                                    <li class="item"><a class="" href="members.php?clubname=<?php echo $clubname; ?>">MEMBERS</a></li>
                                                    <li class="item"><a class="" href="messages.php?clubname=<?php echo $clubname; ?>">MESSAGES</a></li>
                                                </ul>
                                            </div>
                                           <p><span class="edit-profile-link"><a class="" href="delete_club.php?clubname=<?php echo $clubname; ?>">Delete this club</a></span></p> 
                                        </div>
                                    </div>
                                    <div class="right-container">
                                        <div class="block-container">
                                            <div>
                                                <table class="table" style="margin-top: 20px">
                                                                <tr>
                                                                    <th>Book Title</th>
                                                                    <th>Auther</th>
                                                                    <th>Start Date</th>
                                                                    <th>Finish Date</th>
                                                                    <th>Note</th>
                                                                    <th>&nbsp;</th>
                                                                </tr>
                                                                <?php while($row = mysqli_fetch_assoc($result)){ ?>
                                                                <tr>
                                                                    <td><?php echo $row['book']; ?></td>
                                                                    <td><?php echo $row['author']; ?></td>
                                                                    <td><?php echo $row['startdate']; ?></td>
                                                                    <td><?php echo $row['finishdate']; ?></td>
                                                                    <td><?php echo $row['note']; ?></td>
                                                                    
                                                                    <td><a href="read_delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                                                                </tr>
                                                                <?php } ?>
                                                            </table>
                                            </div>
                                            <div class="block-content create-meeting-content">
                                                <h1 class="block-title">Add a new read</h1>
                                                <div class="create-meeting-form">
                                                    
                                                    <div class="main-form">
                                                      <form novalidate="" method="POST" action="add-reading.php?clubname=<?php echo $clubname; ?>">
                                                        <div class="col-sm-12 ">
                                                                <div class="form-group undefined"><input type="text" maxLength="255" id="bookName" aria-label="ENTER BOOK TITLE " name="book" value=""  placeholder="ENTER BOOK TITLE" class="form-control" /><span role="alert" class="notification-message error"></span></div>
                                                            </div>
                                                        <div class="col-sm-12">
                                                                <div class="form-group undefined"><input type="text" maxLength="255" id="bookName" aria-label="ENTER BOOK AUTHOR " name="author" value=""  placeholder="ENTER BOOK AUTHOR" class="form-control" /><span role="alert" class="notification-message error"></span></div>
                                                            </div>    
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="rdt form-custom "><input type="date" class="form-control" value="" placeholder="START DATE" name="startdate" id="meetingDate" />
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group checkbox-time-readonly">
                                                                <div class="rdt form-custom "><input type="date" class="form-control" value="" placeholder="FINISH DATE" name="finishdate" id="meetingDate" />
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            
                                                            <div class="form-group hidden"><span role="alert" class="notification-message error show"></span></div>
                                                        </div>
    
                                                        <div class="col-sm-12">
                                                            <div class="form-group undefined"><input type="text" maxLength="225" id="virtualMeetingLink" aria-label="NOTE" name="note" value="" icon="link" placeholder="NOTE" class="form-control" /><span role="alert" class="notification-message error"></span></div>
                                                        
                                                    <div class="form-group button-group clearfix"><a href="currently-reading.php?clubname=<?php echo $clubname; ?>" class="btn btn-default-corner btn-cancel">Cancel</a>
                                                        <div class="wrap-create-action">
                                                            <div class="tooltip-create-meeting place-top ">
                                                            </div><button type="submit" name="submit" class="btn btn-default-corner btn-create-meeting btn-create" >Create read</button>
                                                        </div>
                                                    </div>
                                                    </form>
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
</body>

</html>
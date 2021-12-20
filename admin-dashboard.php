<?php 
session_start();
// $result = getClubByUsername($conn, $username);
$clubname = $_GET['clubname'];
$username=$_SESSION['username'];
require "./functions/database_functions.php";
$conn = db_connect();

$query = "SELECT username, clubname, member_type FROM members WHERE username = '$username' AND clubname= '$clubname'  ";
$result2 = mysqli_query($conn, $query);
if(!$result2){
     echo "Can't retrieve data " . mysqli_error($conn);
     exit;
}


while($row = mysqli_fetch_assoc($result2)){
    if ($row['member_type']==2){
            header("Location: about-our-club.php?clubname=$clubname");
            }
}

$query = "SELECT about FROM club WHERE clubname = '$clubname'";
    $result = mysqli_query($conn, $query);
    if(!$result){
        echo "Can't retrieve data " . mysqli_error($conn);
        exit;
    }
    $row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Club settings</title>
    <meta name="description" content="Shelfindulgence makes organizing a book club simple. Create clubs, schedule meetings, and choose books, all for free." />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="cleartype" content="on" />
    <meta name="theme-color" content="#ffffff">



    <!-- Font tags-->
    

    <!-- End Font tags -->

    <!-- Style Tags-->
    <link rel="stylesheet" href="static/css/vendors~main.css">
    <link rel="stylesheet" href="static/css/main.css">
    <link rel="stylesheet" href="static/css/vendors~AboutOurClubPage.css">
    <link rel="stylesheet" href="static/css/AdminDashboardPage.css">
    <link rel="stylesheet" href="static/css/InvitationLink.css">
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
                                        <li class="m-item"><a href="shop.php" class="m-link">Shop</a></li>
                                        <li class="m-item"><a href="about.html" class="m-link">About</a></li>
                                        
                                        <li class="m-item"><a href="profile.php" class="mtr-button btn-white">
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
                    <div class="profile-container member-setting-container">
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
                                                    <li class="item"><a class="active" href="#">ADMIN DASHBOARD</a></li>
                                                    <li class="item"><a class="" href="about-our-club.php?clubname=<?php echo $clubname; ?>">ABOUT OUR CLUB</a></li>
                                                    <li class="item"><a class="" href="currently-reading.php?clubname=<?php echo $clubname; ?>">CURRENTLY READING</a></li>
                                                    <li class="item"><a class="" href="meetings.php?clubname=<?php echo $clubname; ?>">MEETINGS</a></li>
                                                    <li class="item"><a class="" href="members.php?clubname=<?php echo $clubname; ?>">MEMBERS</a></li>
                                                    <li class="item"><a class="" href="messages.php?clubname=<?php echo $clubname; ?>">MESSAGES</a></li>
                                                </ul>
                                            </div>
                                            
                                            <p><span class="edit-profile-link"><a class="" href="delete_club.php?clubname=<?php echo $clubname; ?>">Delete this club</a></span></p>
                                        </div>
                                    </div>
                                    <div class="right-container admin-club-dashboard">
                                        <div class="block-container mb30">ADMIN DASHBOARD</div>
                                        <div class="wrap-small-tasks">
                                            <div class="task-cols left-col">
                                            
                                                <div class="admin-tasks update-description-task">
                                                    <div class="image" style="width:117px;height:93px"><img class="img-responsive" src="static/media/description.d0042ce2.png" alt="" width="87" height="93" /></div>
                                                    <div class="content">
                                                        <h2 class="title">Update your club description</h2>
                                                        <form class="main-form" novalidate="" method="POST" action="about_edit.php?clubname=<?php echo $clubname; ?>">
                                                            
                                                            <div class="form-group undefined">
                                                                <textarea name="about" cols="40" rows="10" ><?php echo $row['about'];?></textarea>
                                                                <span role="alert" class="notification-message error"></span></div>
                                                            
                                                            <div class="form-group button-group"><button name="update" type="submit"  class="mtr-button">Update</button></div>
                                                        </form>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="task-cols">
                                                <div class="admin-tasks create-meeting-task">
                                                    <div class="image" style="width:121px;height:77px"><img class="img-responsive" src="static/media/meeting.70003eb4.png" alt="" width="80" height="77" /></div>
                                                    <div class="content">
                                                        <h2 class="title">Get <?php echo $clubname; ?> on the calendar!</h2>
                                                        <p class="desc"><a href="create-meeting.php?clubname=<?php echo $clubname; ?>">Schedule or delete a meeting</a> <!-- -->and let your members be aware.</p>
                                                    </div>
                                                </div>
                                                <div class="admin-tasks update-description-task">
                                                    <div class="image" style="width:117px;height:93px"><img class="img-responsive" src="static/media/description.d0042ce2.png" alt="" width="87" height="93" /></div>
                                                    <div class="content">
                                                        <h2 class="title">Get <?php echo $clubname; ?> moving</h2>
                                                        <p class="desc"><a href="add-reading.php?clubname=<?php echo $clubname; ?>">Add or remove to your reading list</a> <!-- -->and let the discussions begin.</p>
                                                        
                                                    </div>
                                                </div>
                                                <div class="admin-tasks update-description-task">
                                                    <div class="image" style="width:117px;height:93px"><img class="img-responsive" src="static/media/description.d0042ce2.png" alt="" width="87" height="93" /></div>
                                                    <div class="content">
                                                        <h2 class="title">Manage members on<?php echo $clubname; ?></h2>
                                                        <p class="desc"><a href="manage_user.php?clubname=<?php echo $clubname; ?>">View and remove users</a> <!-- -->and have controll.</p>
                                                        
                                                    </div>
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


    <script src='https://js.sentry-cdn.com/1c8495df5e944e25a338de5ddd1fa7cb.min.js' crossorigin="anonymous"></script>
    <script type="text/javascript">
        if (typeof Sentry !== 'undefined') {
            Sentry.onLoad(function() {
                Sentry.init({
                    release: "4bb8cc1",
                    environment: "production",
                    allowUrls: [
                        "https://browser.sentry-cdn/",
                        "https://Shelfindulgence.com/"
                    ]
                });
            });
        }
    </script>





    <script type="text/javascript">
        if (typeof window.mixpanel === 'undefined') {
            console.log('Mixpanel not loaded.')
            window.mixpanel = {
                track: function(eventName) {
                    if (eventName === undefined) {
                        eventName = 'no eventName provided'
                    }
                    console.log("Event " + eventName + " sent to undefined mixpanel.track function")
                },
                identify: function(eventName) {
                    if (eventName === undefined) {
                        eventName = 'no eventName provided'
                    }
                    console.log("Event " + eventName + " sent to undefined mixpanel.identify function")
                },
                people: {
                    set: function() {}
                }
            }
        }
        if (typeof window.gtag === 'undefined') {
            console.log('Gtag not loaded.')
            window.gtag = function(eventName) {
                if (eventName === undefined) {
                    eventName = 'no eventName provided'
                }
                console.log("Event " + eventName + " sent to undefined gtag function")
            }
        }
        if (typeof window.fbq === 'undefined') {
            console.log('fbq not loaded.')
            window.fbq = function(eventName) {
                if (eventName === undefined) {
                    eventName = 'no eventName provided'
                }
                console.log("Event " + eventName + " sent to undefined fbq function")
            }
        }
    </script>



    <script type="text/javascript">
        if (window.location.pathname === '/') {
            mixpanel.track('screen_view', {
                'screen_name': 'Home page',
                'user_type': 'anonymous'
            });
            gtag('event', 'screen_view', {
                'screen_name': 'Home page',
                'user_type': 'anonymous'
            });
            fbq('track', 'PageView', {
                'content_name': 'Home page'
            });
        }
        if (window.location.pathname === '/signup') {
            mixpanel.track('screen_view', {
                'screen_name': 'Signup page',
                'user_type': 'anonymous'
            });
            gtag('event', 'screen_view', {
                'screen_name': 'Signup page',
                'user_type': 'anonymous'
            });
            fbq('track', 'PageView', {
                'content_name': 'Signup page'
            });
        }
    </script>


</body>

</html>
<?php 
session_start();
$clubname = $_GET['clubname'];
$username=$_SESSION['username'];
require_once "./functions/database_functions.php";
$conn = db_connect();
$result = getMeetingByClubname($conn, $clubname);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Meetings</title>
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
    <link rel="stylesheet" href="static/css/MeetingPage.css">
    <link rel="stylesheet" href="static/css/InvitationLink.css">
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
                    <div class="profile-container meeting-container">
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
                                                    <li class="item"><a class="active" href="#">MEETINGS</a></li>
                                                    <li class="item"><a class="" href="members.php?clubname=<?php echo $clubname; ?>">MEMBERS</a></li>
                                                    <li class="item"><a class="" href="messages.php?clubname=<?php echo $clubname; ?>">MESSAGES</a></li>
                                                </ul>
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                    <div class="right-container">
                                        <div class="block-container"><span></span>
                                            <div class="book-list-container">
                                                <div class="block-content block-my-clubs block-list-meeting">
                                                    <div class="block-main-header">
                                                        <div class="block-header">
                                                            <h1 class="block-title">UPCOMING MEETING(S)</h1>
                                                        </div>
                                                        <div>
                                                            <table class="table" style="margin-top: 20px">
                                                                <tr>
                                                                    <th>Book Title</th>
                                                                    <th>Meeting date</th>
                                                                    <th>Meeting time</th>
                                                                    <th>Meeting Virtual link</th>
                                                                    <th>Meeting location</th>
                                                                    
                                                                </tr>
                                                                <?php while($row = mysqli_fetch_assoc($result)){ ?>
                                                                <tr>
                                                                    <td><?php echo $row['bookname']; ?></td>
                                                                    <td><?php echo $row['meetingdate']; ?></td>
                                                                    <td><?php echo $row['meetingtime']; ?></td>
                                                                    <td><?php echo $row['meetinglink']; ?></td>
                                                                    <td><?php echo $row['meetinglocation']; ?></td>
                                                                </tr>
                                                                <?php } ?>
                                                            </table>
                                                        </div>
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
                        "https://bookclubz.com/"
                    ]
                });
            });
        }
    </script>




    <!-- Script Tags-->
    <script id="__LOADABLE_REQUIRED_CHUNKS__" type="application/json">
        [125, 45, 0, 1, 4, 5, 81, 146, 2, 117, 80, 149, 107, 111, 121, 76, 43, 126, 19, 113]
    </script>
    <script id="__LOADABLE_REQUIRED_CHUNKS___ext" type="application/json">
        {
            "namedChunks": ["react-smartbanner", "CookiesSolution", "MeetingPage-jsx", "UploadAvatar", "LazyBackground", "react-modal", "SidebarMenu", "SocialShare", "react-copy-to-clipboard", "InvitationLink", "ConfirmPopup", "react-tiny-spin", "BlockHeader", "SubscribeBlock"]
        }
    </script>
    <script async data-chunk="main" src="static/js/runtime.107cf924.js"></script>
    <script async data-chunk="main" src="static/js/vendors~main.8c609c0d.chunk.js"></script>
    <script async data-chunk="main" src="static/js/main.ddf7c0ff.chunk.js"></script>
    <script async data-chunk="react-smartbanner" src="static/js/react-smartbanner.e65ee81c.chunk.js"></script>
    <script async data-chunk="CookiesSolution" src="static/js/CookiesSolution.fdf1d9d4.chunk.js"></script>
    <script async data-chunk="MeetingPage-jsx" src="static/js/vendors~AboutOurClubPage-jsx~AboutPage-jsx~AdminDashboardPage-jsx~BlogDetailPage-jsx~BlogsByCategory~8591dfa7.3fdac4df.chunk.js"></script>
    <script async data-chunk="MeetingPage-jsx" src="static/js/vendors~AboutOurClubPage-jsx~AboutPage-jsx~AdminDashboardPage-jsx~BlogDetailPage-jsx~BlogsPage-jsx~B~fc3e1284.3b543c6c.chunk.js"></script>
    <script async data-chunk="MeetingPage-jsx" src="static/js/vendors~AboutOurClubPage-jsx~AdminDashboardPage-jsx~BookDetailPage-jsx~BookInspirationPage-jsx~ClubA~a0cd9e04.2b0e9359.chunk.js"></script>
    <script async data-chunk="MeetingPage-jsx" src="static/js/vendors~AboutOurClubPage-jsx~AdminDashboardPage-jsx~BookInspirationPage-jsx~ClubAlbumPhotosPage-jsx~~1c1832a6.85a4c264.chunk.js"></script>
    <script async data-chunk="MeetingPage-jsx" src="static/js/MeetingPage-jsx.1078795b.chunk.js"></script>
    <script async data-chunk="UploadAvatar" src="static/js/vendors~UploadAvatar.1486965a.chunk.js"></script>
    <script async data-chunk="UploadAvatar" src="static/js/AboutPage-jsx~BlogDetailPage-jsx~BlogsByCategoryPage-jsx~BlogsPage-jsx~BookOfTheMonthPage-jsx~Bookcl~4a7841f2.9ddfdddf.chunk.js"></script>
    <script async data-chunk="UploadAvatar" src="static/js/UploadAvatar.98ed188c.chunk.js"></script>
    <script async data-chunk="LazyBackground" src="static/js/LazyBackground.321ce9e4.chunk.js"></script>
    <script async data-chunk="react-modal" src="static/js/vendors~react-modal.b61a7b7e.chunk.js"></script>
    <script async data-chunk="SidebarMenu" src="static/js/SidebarMenu.d1ddb37a.chunk.js"></script>
    <script async data-chunk="SocialShare" src="static/js/SocialShare.44bea157.chunk.js"></script>
    <script async data-chunk="react-copy-to-clipboard" src="static/js/react-copy-to-clipboard.77ebe58d.chunk.js"></script>
    <script async data-chunk="InvitationLink" src="static/js/InvitationLink.552653e3.chunk.js"></script>
    <script async data-chunk="ConfirmPopup" src="static/js/ConfirmPopup.86ef072b.chunk.js"></script>
    <script async data-chunk="react-tiny-spin" src="static/js/react-tiny-spin.014fdf51.chunk.js"></script>
    <script async data-chunk="BlockHeader" src="static/js/BlockHeader.26adab6f.chunk.js"></script>
    <script async data-chunk="SubscribeBlock" src="static/js/SubscribeBlock.dd6b4b9b.chunk.js"></script>
    <!-- End Script Tags -->

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
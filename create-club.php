<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Create a book club</title>
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
    <link rel="stylesheet" href="static/css/CreateClubPage.css">
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
                            <div class="navbar-brand logo"><a href="/" aria-label="Link to Shelf Indulgence&#x27;s Homepage"><img width="233" height="30" src="static/media/logo.png" class="img-responsive" alt="" /></a></div>
                        </div>
                        <div class="skip-to-content"><a href="#content">Skip to content</a></div>
                        <div class="navbar-collapse">
                            <div class="nav-wrapper">
                                <div class="header-group-button"><button id="bt-open-menu" type="button" aria-label="Open menu" class="btn btn-open-menu lines-button x "><span class="lines"></span></button></div><a href="signin.php" class="btn-signin-rw ">Sign in</a>
                                <div aria-hidden="false" tabindex="-1" class="nav-container ">
                                    <ul class="nav bz-navbar-nav navbar-user"></ul>
                                    <ul class="nav bz-navbar-nav navbar-right">
                                        <li class="m-item"><a href="books.html" class="m-link"> Books <span class="ficon ficon-arrow-down-medium" aria-hidden="true"></span></a>
                                            <ul class="sub-menu sub-menu-user sub-menu-book">
                                                <li class="m-sub-item"><a href="/most-popular-books/10/2021" class="m-link">Top books</a></li>
                                                <li class="m-sub-item"><a href="/indie-author-corner" class="m-link">author 1 corner</a></li>
                                                <li class="m-sub-item"><a href="/hear-our-voices-bookclub" class="m-link">(bookclubname) book club</a></li>
                                                <li class="m-sub-item"><a href="/girlhood-around-the-world" class="m-link">bookclubname</a></li>
                                                
                                            </ul>
                                        </li>
                                        <li class="m-item" ><a href="" class="m-link">Resources <span class="ficon ficon-arrow-down-medium" aria-hidden="true"></span></a>
                                            <ul class="sub-menu sub-menu-user sub-menu-block">
                                                <li class="m-sub-item"><a href="https://www.goodreads.com/" target="_blank" class="m-link">Good Reads</a></li>
                                                <li class="m-sub-item"><a href="https://www.librarything.com/" target="_blank" class="m-link">Library Thing</a></li>
                                                <li class="m-sub-item"><a href="https://b-ok.africa/" target="_blank" class="m-link">Z-Library</a></li>
                                                <li class="m-sub-item"><a href="https://www.libgen.is/" target="_blank" class="m-link">Library Genesis</a></li>
                                            </ul>
                                        </li>
                                        <li class="m-item"><a href="signin.php" class="m-link">Join a book club</a></li>
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
                    <div class="club-container create-club-container">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="center">
                                    <div class="create-club-content">
                                        <div class="create-club"><img class="image" src="static/media/create-club.7647949c.png" alt="Create club" arial-label="Create club" width="183" height="75" />
                                            <h1 class="title">Lets create your club</h1>
                                            <?php include('errors.php'); ?>
                                            <form class="main-form" novalidate="" method="POST" action="db.php">
                                                <div class="form-group undefined"><input type="text" maxLength="75" id="clubname" aria-label="Club name" name="clubname" value="" placeholder="Club name" class="form-control" /><span role="alert" class="notification-message error"></span></div>
                                                <div class="form-group undefined"><input type="text" maxLength="75" id="cstate" aria-label="State/County" name="cstate" value="" placeholder="State/County" class="form-control" /><span role="alert" class="notification-message error"></span></div>
                                                <div class="form-group undefined"><input type="text" maxLength="75" id="ccity" aria-label="City/Town" name="ccity" value="" placeholder="City/Town" class="form-control" /><span role="alert" class="notification-message error"></span></div>
                                                
                                                <div class="form-group undefined">
                                                    <label for="club">Club type</label>
                                                    <select name="type" required size="1" id="type" >
                                                        <option value="singleread">Singleread</option>
                                                        <option value="multipleread">Multipleread</option>
                                                        <option value="author led">Auther led</option>
                                                    </select> 
                                                    <span role="alert" class="notification-message error"></span></div>
                                                <center class="form-group button-group"><button name="create" type="submit" class="mtr-button">
                                                        <!-- -->Create My Club
                                                    </button></center>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </main>
                 <footer class="footer-container">
                        <div class="footer-top"><a href="/" class="logo-footer" aria-label="Link to BookClubz&#x27;s Homepage"><img width="203" height="26" class="img-responsive" src="static/media/logo.png" alt="" /></a></div>
                        <div class="footer-middle">
                            <div class="footer-nav">
                                <div class="footer-nav-item">
                                    <h3 class="nav-title">Company</h3>
                                    <p class="nav-item"><a class="nav-link" href="/about">About Bookclubz</a></p>
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
                                        <h2 class="subscribe-title">Enter your email to receive Bookclubz&#x27; newsletter with reading recommendations and the most popular book club books each month.</h2>
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
                                <div class="social-items"><a target="_blank" rel="noopener noreferrer" aria-label="Link to BookClubz&#x27;s Instagram" href="https://www.instagram.com/bookclub.z/"><span class="ficon ficon-instagram"></span></a></div>
                                <div class="social-items"><a target="_blank" rel="noopener noreferrer" aria-label="Link to BookClubz&#x27;s LinkedIn" href="https://www.linkedin.com/company/bookclubz"><span class="ficon ficon-linkedin-circle"></span></a></div>
                                
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
                    release: "64195a2",
                    environment: "production",
                    allowUrls: [
                        "https://browser.sentry-cdn/",
                        "https://bookclubz.com/"
                    ]
                });
            });
        }
    </script>



    <img src="https://www.shareasale.com/sale.cfm?tracking=5955467&amount=0.00&merchantID=109298&transtype=lead" style="opacity: 0; visibility: hidden; position: absolute;" width="1" height="1">




    <!-- Script Tags-->
   
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
        if (typeof mixpanel !== 'undefined') {
            mixpanel.identify("195998");
            mixpanel.people.set({
                "$name": "",
            });
        }
        if (typeof Sentry !== 'undefined') {
            Sentry.configureScope(function(scope) {
                scope.setUser({
                    "id": "195998"
                })
            });
        }
    </script>



</body>

</html>
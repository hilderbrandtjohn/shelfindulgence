<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Shelf indulgence</title>
    <meta name="description" content="Shelf indulgence makes organizing a book club simple. Create clubs, schedule meetings, and choose books, all for free." />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#ffffff">
    
    <!-- Font tags-->
    <link rel="preload" as="font" href="static/media/bookclubz.71358ad4.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="static/media/glyphicons-halflings-regular.448c34a5.woff2" type="font/woff2" crossorigin="anonymous">
    <!-- End Font tags -->

    <!-- Style Tags-->
    <link rel="stylesheet" href="static/css/vendors~main.css">
    <link rel="stylesheet" href="static/css/main.css">
    <link rel="stylesheet" href="static/css/AboutPage.css">
    <link rel="stylesheet" href="static/css/HomePage.css">
    <link rel="stylesheet" href="static/css/vendors~react-slick.css">
    <!-- End Style Tags -->

    
</head>

<body class="intent-mouse">
    <div id="root">
        <div>
            <div class="bg-homepage-fix homepage-container">
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
                        <div class="home-container">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="home-banner">
                                        <div class="banner-content">
                                            <h1 class="banner-text">Its not gossip if the characters are fictional.</h1>
                                            <div class="wrap-button">
                                                <a href="create-club.php" class="mtr-button btn-20" aria-label="create your club">Create your club</a>
                                            </div>
                                        </div>
                                        <picture>
                                            <source srcSet="static/media/banner_home.4d2a8620.webp" type="image/webp" />
                                            <img class="banner" src="static/media/banner_home.d7418b49.png" alt="Banner home" width="1440" height="650" />
                                        </picture>
                                        <picture>
                                            <source srcSet="static/media/banner_home_mobile.7e1f7c82.webp" type="image/webp" />
                                            <img class="banner-mobile" src="static/media/banner_home_mobile.9ab89307.png" alt="Banner home" width="360" height="373" />
                                        </picture>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="block-container how-it-work">
                                        <div class="center">
                                            <h2 aria-label="bookclubz makes organizing a book club simple." class="block-title">To Read, Or Not To Read...Not Even a Question.</h2>
                                            <p class="slight-text">Drop everything and begin reading together.</p>
                                            <div class="list-media">
                                                <div class="content">
                                                    <div tabindex="-1" aria-hidden="true">
                                                        <picture>
                                                            <source srcSet="static/media/img-feature-1.52a0c2c8.webp" type="image/webp" />
                                                            <img class="image" src="static/media/img-feature-1.6e693a84.png" alt="" width="300" height="300" />
                                                        </picture>
                                                    </div>
                                                    <p class="description" style="width:300px">Create a book club or add your existing club — it’s easy!</p>
                                                </div>
                                                <div class="content">
                                                    <div tabindex="-1" aria-hidden="true">
                                                        <picture>
                                                            <source srcSet="static/media/img-feature-2.cb98982f.webp" type="image/webp" />
                                                            <img class="image" src="static/media/img-feature-2.c77a7af7.png" alt="" width="300" height="300" />
                                                        </picture>
                                                    </div>
                                                    <p class="description" style="width:300px">Have deep and exiting discursions with your friends</p>
                                                </div>
                                                <div class="content">
                                                    <div tabindex="-1" aria-hidden="true">
                                                        <picture>
                                                            <source srcSet="static/media/img-feature-3.cd1c08c9.webp" type="image/webp" />
                                                            <img class="image" src="static/media/img-feature-3.9b39ef25.png" alt="" width="300" height="300" />
                                                        </picture>
                                                    </div>
                                                    <p class="description" style="width:300px">Create a meeting to send invites and collect RSVPs</p>
                                                </div>
                                            </div>
                                            <div class="btn-wrap">
                                                <a href="join-club.php" class="mtr-button">Say hello to a better book club experience</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="block-container block-features">
                                        <div class="center">
                                            <h2 aria-label="organize your book club...and your bookshelves. all for free." class="block-title">Organize your book club...and your bookshelves.All for free.</h2>
                                            <div class="list-media">
                                                <div class="content">
                                                    <div tabindex="-1" aria-hidden="true">
                                                        <picture>
                                                            <source srcSet="static/media/img-feature-4.e81d54d2.webp" type="image/webp" /><img class="image" src="static/media/img-feature-4.e3b00662.png" alt="" width="250" height="250" />
                                                        </picture>
                                                    </div>
                                                    <p class="description" style="width:250px">View all the books your club has read in one place</p>
                                                </div>
                                                <div class="content">
                                                    <div tabindex="-1" aria-hidden="true">
                                                        <picture>
                                                            <source srcSet="static/media/img-feature-5.82f68013.webp" type="image/webp" /><img class="image" src="static/media/img-feature-5.0bc73a9e.png" alt="" width="250" height="250" />
                                                        </picture>
                                                    </div>
                                                    <p class="description" style="width:250px">Manage your club membership</p>
                                                </div>
                                                
                                            </div>
                                            <div class="btn-wrap pt0"><a href="create-club.php" class="mtr-button">Create your club</a></div>
                                        </div>
                                    </div>
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
                                    <p class="nav-item"><a class="nav-link" href="signin.php">Join a Book Club</a></p>
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



    <img src="https://www.shareasale.com/sale.cfm?tracking=5955298&amount=0.00&merchantID=109298&transtype=lead" style="opacity: 0; visibility: hidden; position: absolute;" width="1" height="1">




    <!-- Script Tags-->
    <script id="__LOADABLE_REQUIRED_CHUNKS__" type="application/json">
        [108, 0, 7, 1, 2, 66, 69, 133, 107]
    </script>
    <script id="__LOADABLE_REQUIRED_CHUNKS___ext" type="application/json">
        {
            "namedChunks": ["react-smartbanner", "HomePage-jsx", "ImageItem", "react-slick"]
        }
    </script>
    <script async data-chunk="main" src="static/js/runtime.b09c94d6.js"></script>
    <script async data-chunk="main" src="static/js/vendors~main.e913675b.chunk.js"></script>
    <script async data-chunk="main" src="static/js/main.90b7755d.chunk.js"></script>
    <script async data-chunk="react-smartbanner" src="static/js/react-smartbanner.b9ccb7cf.chunk.js"></script>
    <script async data-chunk="HomePage-jsx" src="static/js/vendors~AboutOurClubPage-jsx~AboutPage-jsx~AdminDashboardPage-jsx~BlogDetailPage-jsx~BlogsByCategory~5112d84f.5bd938ae.chunk.js"></script>
    <script async data-chunk="HomePage-jsx" src="static/js/vendors~BookDetailPage-jsx~DetailJoinABookClubPage-jsx~HomePage-jsx~HomePageB-jsx~JoinABookClubByCat~75caafd6.d74d6503.chunk.js"></script>
    <script async data-chunk="HomePage-jsx" src="static/js/AboutOurClubPage-jsx~AboutPage-jsx~AdminDashboardPage-jsx~BlogDetailPage-jsx~BlogsByCategoryPage-jsx~19d20ad4.3519e182.chunk.js"></script>
    <script async data-chunk="HomePage-jsx" src="static/js/AboutPage-jsx~BlogDetailPage-jsx~BlogsByCategoryPage-jsx~BlogsPage-jsx~BookDetailPage-jsx~BookOfTheM~eb2311c5.4e407db1.chunk.js"></script>
    <script async data-chunk="HomePage-jsx" src="static/js/HomePage-jsx.1f070337.chunk.js"></script>
    <script async data-chunk="ImageItem" src="static/js/ImageItem.dee7c36c.chunk.js"></script>
    <script async data-chunk="react-slick" src="static/js/vendors~react-slick.fd36e0ac.chunk.js"></script>
    <script async data-chunk="react-slick" src="static/js/react-slick.2e0a7ab9.chunk.js"></script>
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
 <?php

?>
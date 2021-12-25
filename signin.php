<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login to your shelf indulgence account here.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="cleartype" content="on" />
    <meta name="msapplication-TileColor" content="#ea6852">
    <meta name="theme-color" content="#ffffff">

    <!-- Font tags-->
    
    <!-- End Font tags -->

    <!-- Style Tags-->
    <link  rel="stylesheet" href="static/css/vendors~main.css">
    <link  rel="stylesheet" href="static/css/main.css">
    <link  rel="stylesheet" href="static/css/SigninPage.css">
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
                            <div class="navbar-brand logo"><a href="index.html" aria-label="Link to Shelf Indulgence&#x27;s Homepage"><img width="233" height="30" src="static/media/logo.png" class="img-responsive" alt="" /></a></div>
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
                                        <li class="m-item"><a href="" class="m-link">Join a book club</a></li>
                                        <li class="m-item"><a href="signin.php" class="m-link">Shop</a></li>
                                        <li class="m-item"><a href="about.html" class="m-link">About</a></li>
                                        <li class="m-item"><a href="getstarted.php" class="mtr-button btn-white">Sign up</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </header>
                <main class="main-container" id="content">
                    <div class="signin-container">
                        <div class="left-container">
                            <div class="signin-content">
                                <div class="main-form-content signin-form-content">
                                    <form class="main-form" novalidate="" method="POST" action="signin.php">
                                        <h1 class="title-form">Shelf Indulgence member? Log In</h1>
                                        <?php include('errors.php'); ?>
                                        <div class="form-group hidden"><span role="alert" class="notification-message error show"></span></div>
                                        <div class="form-group undefined"><input type="text" maxLength="255" id="username" aria-label="Your Username" name="username" aria-required="true" value="" placeholder="Your Username" class="form-control" /><span role="alert" class="notification-message error"></span></div>
                                        <div class="form-group undefined"><input type="password" maxLength="255" id="password" aria-label="Password" name="password" aria-required="true" value="" placeholder="Password" class="form-control" /><span role="alert" class="notification-message error"></span></div>
                                        <div class="form-group button-group"><button name="signin" type="submit"  class="mtr-button">Log in now</button></div>
                                    </form><a href="getstarted.php" class="txt-forgot-link">Dont have a Shelf Induldence account?Sign up</a>
                                </div>
                            </div>
                        </div>
                        <div class="right-container" style="background-image:url(static/media/bg-sign.jpg)"></div>
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
</body>

</html>
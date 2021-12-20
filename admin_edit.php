<?php
    session_start();
    
    $title = "Edit book";
    
    require_once "./functions/database_functions.php";
    $conn = db_connect();

    if(isset($_GET['bookisbn'])){
        $book_isbn = $_GET['bookisbn'];
    } else {
        echo "Empty query!";
        exit;
    }

    if(!isset($book_isbn)){
        echo "Empty isbn! check again!";
        exit;
    }

    // get book data
    $query = "SELECT * FROM books WHERE book_isbn = '$book_isbn'";
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
    
    <title></title>
    <meta name="description" content="Shelf indulgence makes organizing a book club simple. Create clubs, schedule meetings, and choose books, all for free." />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#ffffff">
    
    <!-- Font tags-->
    <link rel="preload" as="font" href="static/media/bookclubz.71358ad4.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="static/media/glyphicons-halflings-regular.448c34a5.woff2" type="font/woff2" crossorigin="anonymous">
    <!-- End Font tags -->

    <!-- Style Tags-->
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./static/css/vendors~main.css">
    <link rel="stylesheet" href="./static/css/main.css">
    <link rel="stylesheet" href="./static/css/AboutPage.css">
    <link rel="stylesheet" href="./static/css/vendors~react-slick.css">
    <link rel="stylesheet" href="./static/css/HomePage.css">

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
                                        
                                        <li class="m-item" ><a href="" class="m-link">Resources <span class="ficon ficon-arrow-down-medium" aria-hidden="true"></span></a>
                                            <ul class="sub-menu sub-menu-user sub-menu-block">
                                                <li class="m-sub-item"><a href="https://www.goodreads.com/" target="_blank" class="m-link">Good Reads</a></li>
                                                <li class="m-sub-item"><a href="https://www.librarything.com/" target="_blank" class="m-link">Library Thing</a></li>
                                                <li class="m-sub-item"><a href="https://b-ok.africa/" target="_blank" class="m-link">Z-Library</a></li>
                                                <li class="m-sub-item"><a href="https://www.libgen.is/" target="_blank" class="m-link">Library Genesis</a></li>
                                            </ul>
                                        </li>
                                        
                                        <li class="m-item"><a href="books.php" class="m-link"><span class="glyphicon glyphicon-book"></span>&nbsp; Books</a></li>
                                        <li class="m-item"><a href="contact.php" class="m-link">about</a></li>
                                        <li class="m-item"><a href="" class="m-link">clubs</a>
                                            <ul class="sub-menu sub-menu-user sub-menu-block">
                                                 <li class="m-sub-item"><a href="joinclub.php" class="m-link">Join a club</a></li>
                                                <li class="m-sub-item"><a href="myclubs.php"  class="m-link">My clubs</a></li>
                                                <li class="m-sub-item"><a href="create-club.php"  class="m-link">Create club</a></li>
                                            </ul>
                                            
                                        </li>
                                        <li class="m-item"><a href="admin_book.php" class="m-link"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp; Sell</a></li>
                                         <li class="m-item"><a href="getstarted.html" class="mtr-button btn-white">
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
                        <div class="home-container">
                            <div class="container-fluid">
                                 <form method="post" action="edit_book.php" enctype="multipart/form-data">
                                    <table class="table">
                                        <tr>
                                            <th>ISBN</th>
                                            <td><input type="text" name="isbn" value="<?php echo $row['book_isbn'];?>" readOnly="true"></td>
                                        </tr>
                                        <tr>
                                            <th>Title</th>
                                            <td><input type="text" name="title" value="<?php echo $row['book_title'];?>" required></td>
                                        </tr>
                                        <tr>
                                            <th>Author</th>
                                            <td><input type="text" name="author" value="<?php echo $row['book_author'];?>" required></td>
                                        </tr>
                                        <tr>
                                            <th>Image</th>
                                            <td><input type="file" name="image"></td>
                                        </tr>
                                        <tr>
                                            <th>Description</th>
                                            <td><textarea name="descr" cols="40" rows="5"><?php echo $row['book_descr'];?></textarea>
                                        </tr>
                                        <tr>
                                            <th>Price</th>
                                            <td><input type="text" name="price" value="<?php echo $row['book_price'];?>" required></td>
                                        </tr>
                                        <tr>
                                            <th>Seller_name</th>
                                            <td><input type="text" name="sname" value="<?php echo $row['seller_name'];?>" required></td>
                                        </tr>
                                        <tr>
                                            <th>Seller_contact</th>
                                            <td><input type="text" name="scontact" value="<?php echo $row['seller_contact'];?>" required></td>
                                        </tr>
                                    </table>
                                    <input type="submit" name="save_change" value="Change" class="btn btn-primary">
                                    <input type="reset" value="cancel" class="btn btn-default">
                                </form>
                                <br/>
                                <a href="admin_book.php" class="btn btn-success">Confirm</a>

                                
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

<script type="text/javascript" src="./bootstrap/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
 <?php

?>
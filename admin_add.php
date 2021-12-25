<?php
    session_start();
    $title = "Add new book";
    require "./functions/database_functions.php";
    $conn = db_connect();

    if(isset($_POST['add'])){
        $isbn = trim($_POST['isbn']);
        $isbn = mysqli_real_escape_string($conn, $isbn);
        
        $title = trim($_POST['title']);
        $title = mysqli_real_escape_string($conn, $title);

        $author = trim($_POST['author']);
        $author = mysqli_real_escape_string($conn, $author);
        
        $descr = trim($_POST['descr']);
        $descr = mysqli_real_escape_string($conn, $descr);
        
        $price = floatval(trim($_POST['price']));
        $price = mysqli_real_escape_string($conn, $price);


        $sname = trim($_POST['sname']);
        $sname = mysqli_real_escape_string($conn, $sname);


        $scontact = trim($_POST['scontact']);
        $scontact = mysqli_real_escape_string($conn, $scontact);

        $username =$_SESSION['username'];

        
       

        // add image
        if(isset($_FILES['image']) && $_FILES['image']['name'] != ""){
            $image = $_FILES['image']['name'];
            $directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);
            $uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . "static/media";
            $uploadDirectory .= $image;
            move_uploaded_file($_FILES['image']['tmp_name'], $uploadDirectory);
        }

        

        $query = "INSERT INTO books(book_isbn, book_title, book_author, book_image, book_descr, book_price, seller_name, seller_contact,username) VALUES ('" . $isbn . "', '" . $title . "', '" . $author . "', '" . $image . "', '" . $descr . "', '" . $price . "', '" . $sname . "', '" . $scontact . "', '" . $username . "')";
        $result = mysqli_query($conn, $query);
        if(!$result){
            echo "Can't add new data " . mysqli_error($conn);
            exit;
        } else {
            header("Location: admin_book.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <title></title>
    <meta name="description" content="Shelf indulgence makes organizing a book club simple. Create clubs, schedule meetings, and choose books, all for free." />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#ffffff">
    
    <!-- Font tags-->
    
    <link rel="preload" as="font" href="static/media/glyphicons-halflings-regular.woff2" type="font/woff2" crossorigin="anonymous">
    <!-- End Font tags -->

    <!-- Style Tags-->
    <link rel="stylesheet" href="./static/css/vendors~main.css">
    <link rel="stylesheet" href="./static/css/main.css">
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
                                        
                                        <li class="m-item" ><a href="" class="m-link">Resources</a>
                                            <ul class="sub-menu sub-menu-user sub-menu-block">
                                                <li class="m-sub-item"><a href="https://www.goodreads.com/" target="_blank" class="m-link">Good Reads</a></li>
                                                <li class="m-sub-item"><a href="https://www.librarything.com/" target="_blank" class="m-link">Library Thing</a></li>
                                                <li class="m-sub-item"><a href="https://b-ok.africa/" target="_blank" class="m-link">Z-Library</a></li>
                                                <li class="m-sub-item"><a href="https://www.libgen.is/" target="_blank" class="m-link">Library Genesis</a></li>
                                            </ul>
                                        </li>
                                        
                                        <li class="m-item"><a href="books.php" class="m-link">All Books</a></li>
                                        <li class="m-item"><a href="about.php" class="m-link">about</a></li>
                                        <li class="m-item"><a href="" class="m-link">clubs</a>
                                            <ul class="sub-menu sub-menu-user sub-menu-block">
                                                 <li class="m-sub-item"><a href="joinclub.php" class="m-link">Join a club</a></li>
                                                <li class="m-sub-item"><a href="myclubs.php"  class="m-link">My clubs</a></li>
                                                <li class="m-sub-item"><a href="create-club.php"  class="m-link">Create club</a></li>
                                            </ul>
                                            
                                        </li>
                                    
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
                        <div class="home-container">
                            <div class="container-fluid">
                                <form method="post" action="admin_add.php" enctype="multipart/form-data">
                                    <table class="table">
                                        <tr>
                                            
                                            <td>
                                                <input style="width: 300px;  " type="text" maxLength="255"  aria-label="ISBN" name="isbn" aria-required="true" value="" placeholder="ISBN" class="form-control" />

                                            </td>
                                        </tr>
                                        <tr>
                                            
                                            <td>
                                                <input style="width: 300px;  " type="text" maxLength="255"  aria-label="title" name="title" aria-required="true" value="" placeholder="title" class="form-control" />
                                            </td>
                                        </tr>
                                        <tr>
                                            
                                            <td>
                                                <input style="width: 300px;  " type="text" maxLength="255"  aria-label="author" name="author" aria-required="true" value="" placeholder="author" class="form-control" required />
                                            </td>
                                        </tr>
                                        <tr>
                                            
                                            <td>Image <input type="file" name="image" ></td>
                                        </tr>
                                        <tr>
                                            
                                            <td><textarea style="border-radius: 5px; " placeholder="Description" name="descr" cols="40" rows="5"></textarea></td>
                                        </tr>
                                        <tr>
                                            
                                            <td>
                                                <input style="width: 300px;  " type="text" maxLength="255"  aria-label="price" name="price" aria-required="true" value="" placeholder="Price" class="form-control" required />
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            
                                            <td>
                                                <input style="width: 300px;  " type="text" maxLength="255"  aria-label="seller name" name="sname" aria-required="true" value="" placeholder="seller name" class="form-control" required />
                                            </td>
                                        </tr>
                                        <tr>
                                            
                                            <td>
                                                <input style="width: 300px;  " type="text" maxLength="255"  aria-label="seller contact" name="scontact" aria-required="true" value="" placeholder="seller contact" class="form-control" required/>
                                            </td>
                                        </tr>
                                    </table>
                                    <input type="submit" name="add" value="Add new book" class="btn btn-primary">
                                    <input type="reset" value="cancel" class="btn btn-default">
                                </form>
                                <br/>
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
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
   
    <!-- End Font tags -->

    <!-- Style Tags-->
    <link rel="stylesheet" href="static/css/vendors~main.css">
    <link rel="stylesheet" href="static/css/main.css">
    <link rel="stylesheet" href="static/css/HomePage.css">
    
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
                                        <li class="m-item"><a href="#" class="m-link">About</a></li>
                                        
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
                                The rapidly increasing rate of internet penetration coupled with the rise and spread of social media has increased the global interaction between people and opened up a space for people to share ideas. This is a space that transcends boundaries and physical distance and hugely bridges the social divide. The ongoing covid pandemic has in its part played a role in demonstrating the importance of remote interaction media. This phase change has brought with it the emergence of online book clubs that move away from the traditional physical book clubs and bridged the gap by having people meet online and have their discussions. With the ever-changing and increasing global social interaction and the opportunities opened up by the pending, it has become clear that there needs development of online book clubs which combine the old ways of reading and taking advantage of the global interaction technology to come up with clubs fitted for this “social media” generation.
One of the biggest challenges to novice book readers who love to read hardcopy paperback books is the high cost that comes with buying some books. With others having read books just lying on shelves, it has come evident that there needs to be a way of circulating these books amongst book lovers and cheaper prices. Shelf indulgence aims to create a space for book readers worldwide to share ideas and organize each other and allow them to circulate books for hire and sale and affordable prices and rent out their reading accounts for a small fee.

                            </div>
                        </div>
                    </main>
                    
                </div>
            </div>
            <div class="Toastify"></div>
        </div>
    </div>


</body>

</html>

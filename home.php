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
                                                    <p class="description" style="width:300px">Email the unique club invite link to your members</p>
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
                                                <a href="signup" class="mtr-button">Say hello to a better book club experience</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="block-container popular-book recommended-books">
                                        <div class="center">
                                            <h2 aria-label="October’s Recommended Reading" class="block-title">October’s Recommended Reading</h2>
                                            <p class="slight-text">Monthly inspiration for your next book club read, with discussion questions to guide your meeting.</p>
                                            <div class="slider-container" aria-hidden="false">
                                                <div class="slider-content">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix">

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
                                                    <p class="description" style="width:250px">Manage your club membership online — no more email chains!</p>
                                                </div>
                                                <div class="content">
                                                    <div tabindex="-1" aria-hidden="true">
                                                        <picture>
                                                            <source srcSet="static/media/img-feature-6.cb71553e.webp" type="image/webp" /><img class="image" src="static/media/img-feature-6.b803bdf4.png" alt="" width="250" height="250" />
                                                        </picture>
                                                    </div>
                                                    <p class="description" style="width:250px">Get inspired — see what other book clubs are reading</p>
                                                </div>
                                                <div class="content">
                                                    <div tabindex="-1" aria-hidden="true">
                                                        <picture>
                                                            <source srcSet="static/media/img-feature-7.f41d1090.webp" type="image/webp" /><img class="image" src="static/media/img-feature-7.0226031b.png" alt="" width="250" height="250" />
                                                        </picture>
                                                    </div>
                                                    <p class="description" style="width:250px">Poll your members to select books and meeting dates</p>
                                                </div>
                                                <div class="content">
                                                    <div tabindex="-1" aria-hidden="true">
                                                        <picture>
                                                            <source srcSet="static/media/img-feature-8.e405c2a7.webp" type="image/webp" /><img class="image" src="static/media/img-feature-8.922ca7e4.png" alt="" width="250" height="250" />
                                                        </picture>
                                                    </div>
                                                    <p class="description" style="width:250px">Rate each book you read and save ratings</p>
                                                </div>
                                                <div class="content">
                                                    <div tabindex="-1" aria-hidden="true">
                                                        <picture>
                                                            <source srcSet="static/media/img-feature-9.0b9753d4.webp" type="image/webp" /><img class="image" src="static/media/img-feature-9.c1f4ab69.png" alt="" width="250" height="250" />
                                                        </picture>
                                                    </div>
                                                    <p class="description" style="width:250px">Connect with others in the Bookclubz community</p>
                                                </div>
                                            </div>
                                            <div class="btn-wrap pt0"><a href="signup" class="mtr-button">Create your club</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row"></div>
                                <div class="row">
                                    <div class="block-container block-jbc">
                                        <div class="lazyload-wrapper ">
                                            <div class="lazyload-placeholder"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="block-container home-testimonials">
                                        <div class="center">
                                            <h2 class="block-title">Testimonials</h2>
                                            <div class="testimonial-container">
                                                <div class="left-content">
                                                    <picture>
                                                        <source srcSet="static/media/testimonial.ec5f3525.webp" type="image/webp" /><img class="img-responsive" src="static/media/testimonial.608c8b20.png" alt="" width="440" height="440" />
                                                    </picture>
                                                </div>
                                                <div class="right-content">
                                                    <div class="slick-slider slick-initialized" dir="ltr"><button type="button" data-role="none" class="slick-arrow slick-prev" style="display:block">
                                                            <!-- -->Previous
                                                        </button>
                                                        <div class="slick-list">
                                                            <div class="slick-track" style="width:900%;left:-100%">
                                                                <div data-index="-1" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width:11.11111111111111%">
                                                                    <div>
                                                                        <div class="testimonial-item" tabindex="-1" style="width:100%;display:inline-block">
                                                                            <h2 class="testimonial-title">Fewer emails</h2>
                                                                            <p class="testimonial-description">“So many emails before Bookclubz! Now I can easily manage three book clubs, not just one, and it’s so fun and simple. Best service ever.”</p>
                                                                            <div class="testimonial-image">
                                                                                <picture>
                                                                                    <source srcSet="data:image/webp;base64,UklGRk4FAABXRUJQVlA4WAoAAAAQAAAAYwAAYwAAQUxQSIwCAAABkEVrkyFJsbZt2zaebNu2bdu2bdu2bdsaVqwyOzIiXveciJgA+J9/iIID1l1/cWtvl6R6Rex5GY3vOoXQKUSrJ2g9JYRGUeehr/0VinYIffbPoc9iJFwTJlvlhm0a59OjCFIG/8R/VlRjK4nxfRotQr1zcCkPaJkSqb09LcKAmump1qYGTSN7RN1B16tEG5UZTfQ5lC65PRrMrAusIGqoTCGiqcrEJXoVXhd4R4PdlNlA9CaJLn2JcIUuuahW6gIXaGbGUKY7TTJQNsIdiu+gbrFvBK/0gYK7fbulEIT1fDqkEXzwaYBK131ZGE2lfTa3F/QpBDpvsCkLai+2qaLXZJu2OoWInbvkSptZ+sRpOGXPB/TR793Z5bUT6xG+9eZApP65s3w4HVo/Rrd3eidUoK6Hzt+OTCgt1hPk+LyOsHbI0+sp6ywTDC4tKYPHBU9IaoZ8Cwpaz2iwoJuMtstJiYw/hxRTihOmFdONVWUxy1m1EnOY1VgxL1gtkxIXWe+QUpDXLSkVePmFFNKSFyYSMopZUSErLaawqC5kh8mvPovWQo6bntZjMUbIQ9N5HktlhPAzHajPYruMOGjeyuOmjMwWK51s3mTwCymiqMV0J+unGDCxiNIWAxu4ONDRVFxEVYvWjVzcrW2qLqKBRQ0nP0uY2ojoYFHWCeYxjRcx0KJ4Yye5ggzLREywyNHUSelHhp0i5lskdFNzn+GOiJWm4DBuWq40BISS0MP0Blo4GTrFgMkkQPKF/7oGLZ3M7fivg8lBaPKFfx12tKYOIn6cmA0EJ2/0EHc42lMCLw6MDtKL1YPWTg7EKwY6Jm+08SHNw4Udk4Gq0Yt1nHjw4MOPf318eHHjxI4VowNbVlA4IJwCAADwEQCdASpkAGQAPlEkj0WjoiEUSdzkOAUEsobk8uABAvqunsdF4YHjF3W+F5J5xu2f8wHm5+iD/b74f6AHSngmZBhXPuvrnnkGF2TubsmGPQ63wzG4HzSm9OeQQi2j471FdnHgkG/cMrQBD7OwQNSd/FVHeqmMIB7zPjkc3iwkkJmFQSNVS6WCmJ4Uw9pc+a2XaGz02zMMeAD+/gbQDl+Vz/nf6Lv/8fr6pzH11Kfw+9DL+ngV1aVR5+67elN0muMAZ67ixApTGzqTbbNYeKH6/HZi9emwULOlof1fK1zf57jlQydgmaFXG+Q912avpUJTXZ5z6oUYHLj/z+Y241u853bSjbN1KTwBPr17SWeUFsFZ4qrkUNs7VrfwozZUss2tc+Me3jFiaQ8vT/iUe0lxdvJ386HoadHzW0FFGhgMx0pcWKygTRXlVorcJSdOjbqVBMXvD+D6AH///wA4Xck39001+yQaasvMZ/0kW5xcVR8zZwzlz366RG75/4/mkb74aL/RVDdi3CjrZPmYkjJZwxJ+4ZZEZVUqro5g4kUPsql5UsvIA7ufH8xLx1g5+bbVg+QGEYwHeFC8DTWSa3PxYizwammL9OqUdUGozjUxbJtO3ILVpM3Wg+s1UknScm1mnzmj2Oy8/b73jUg4lYLpwE7+h/RPkt+d9qqjn+YCxaUgJjjPdCBUeMu66kZ7xFnWej781NgPFz/QiRsNbe07h23WNvdpcn+HPPy4wuUYih9Lxgn249+V23syYUH8y1eEOCL0qQ1+vw4faF/SYMZ6QGX5euy3kBbY3YikbcezE2Pd8Ggcn2Br39AG4iYw6ujHkfLxf6833L6eCSgHHXSwe4k0Rin/Iff/+oa3H7C3LStGbIcHFF8PcAAAAA==" type="image/webp" /><img src="static/media/testimonial4.58a63854.png" alt="" width="100" height="100" />
                                                                                </picture>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline:none;width:11.11111111111111%">
                                                                    <div>
                                                                        <div class="testimonial-item" tabindex="-1" style="width:100%;display:inline-block">
                                                                            <h2 class="testimonial-title">Happier members</h2>
                                                                            <p class="testimonial-description">“Our club started off as an experiment for me to bring together all the incredible women in my life together under a common interest (books), but it&#x27;s turned into much more than that! Now after two years, we&#x27;ve come together as one group of friends and confidants who support, share, and challenge each other on everything from literature to love &amp; loss to life in general.”</p>
                                                                            <div class="testimonial-image">
                                                                                <picture>
                                                                                    <source srcSet="data:image/webp;base64,UklGRqgFAABXRUJQVlA4WAoAAAAQAAAAYwAAYwAAQUxQSKsCAAABkEXb1rEt72/btm3/2a4r27Zt27Zt27brt5ndk97T8zznXDciYgKU/8HUrj/7UFpZ0bOzOwdU0CXKblwWg6YNMaeoQQb71+xoejoxjmUJ1Ph+5MHyzYkZzfh2I2YBp7satBzj9N6ZFBvGuxUpFbhtIaUDtzQdSuZy++RCyWFurCohGnf5jSTE+yu/PYQMY/wf0xFSJCDXiIrIF0zgZ2cqRjKh/lTYFgmJoUKxnSoihQxF64WACnQoQwXEERLwndsXR0K0M7itUyjtzOlxFw1SNNdzeN3CT0OhttbOE2eyYJnaCtF7QFlk9QPl6lE1EFRkQtUq0Hs7qs6DmCdB9pXr169bAuvuo0NLhXXZjOuP/OOjaloREX2Bib3Z2ZmA5u+Z+F2+2Gp8YlKON0ZlkcYkPWCKaTSTdiYiq3x53trgackkTsBzTqYWaNw+yTQQTX0m8zQ0a6Rai+aKVIexmJZLdQVLKJP6HpZqcr3A0l2ubB0ki+QqMUNyWKrvY0yQXJFgXr4aq2qM5JkEc9IB1YxwmJRIsOopoI4hDtdvarezue26C2hihCOcqS+9wO3kFUArKxwVAaPucrtyHNDJFUdTQMcsbne2Avp64xgGaPqa25OlgCG+OFYBmn3nljYFMNYfxwlAC8Y9dzRgWiCO62rfBZQOAiwIR6HxUu1NG34fegJWxqMwLVPL6cXve3vA5iQU7t/UHk7ix1oC9qSgCGfqV9ZJcSwJRSXA8RMCWgDOJ6BoBthwTcQPtZtRuhiGAaY/FtDhvdr9SB0MKwAD8wR0L1GbqKtgHAbo+l5Av+y/nXZXkLqvVmn/Q8Dwl4yxstlhCmL3Nml/dGICpz5kt0ebK9grrE4T1LOCQmOI3+40Pmmre7sppJpX6D379Om0sj/K0m7vnt27gbkiLQBWUDgg1gIAALARAJ0BKmQAZAA+USSQRaOiIZNLNNA4BQSzl66Fci5t7OkOvW7Y3nkt1i/2PsLbzN/lp7XZPezv+qd+oev8ECpeD2NRKrrrJ3eaTIwZCuhFubCJ7TDMmcXod2E1UxhEg2Vkn8iBNEOLH932lmkdY+J7RrTbfVBZNUlEyE4463CPmAE6RTZOvns8VR0Kl6b82w67oqDUAAD+/bToEP/+cSfzOf/Rpb37m/rg0yJJ8/LdWH242PNc71Z8xCp3GKUoUNgfFw+MvQ0dMFjuKcxk89KTMAAwvHQ+QKJfUDQsUG3kzp6uyMYsIpmCXESBPAWcA9OxqjaffpAcSLHGWMR455ECFg0Idjf2hMjJWpP94VMmeKm7xoUGZOg1OgG3AP3//n/uIBvoE2uq3A+SqXOfetDWDW2/AhZmsf/FkAmH8UsLCpvX81K1q4FkDrt8Mzvh/nefvX9VkfdCiz/vv+Nbc9V38nP/ngbKblhBKHrAYeplAre1p3KUkBLK1Hm8lqnxKXFOkhdpV/Vt2P+nb/1yivBGHmd/xhs41vUe8tff6Q4rTmjy3h5Wbf+9sVDAnHfg6OKNjzL2jK1CQUigVsc3f05hBm+/dB4FxfV+J4BVPPbdkfxsXXsqmtkzoQ6KRxVQ/k5q1L8Ws1hvM3hRLYTsvy8fEaPqHJnsoBOiOPDWKtjw1iVTFVGiDQpuBcbB1ARuxbSA3dh1ORXF2Q895C+ILLbgRcmDLl1XKWh0Eyp93USDNpA3fbhFxc6fHJTHNRwDYYDIhq/CkYiETn8jRq5VWEe1qR62wMENKmr5wLqsjCs86Tb3KkG7Z1oKjROmN7PcFC8eV9goJYcLH/u7Ae18/OUKBy/PW5nXing6NAX674EiWyJHirW21BNXbWnFvNp+Lt5191nXkp1XwA+/vVDYMfZU7UthhtdDi3izTybNi5Qw5HYvy6f//zK9SrZONx9RRgKfZiIAAA==" type="image/webp" /><img src="static/media/testimonial1.309af152.png" alt="" width="100" height="100" />
                                                                                </picture>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-index="1" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline:none;width:11.11111111111111%">
                                                                    <div>
                                                                        <div class="testimonial-item" tabindex="-1" style="width:100%;display:inline-block">
                                                                            <h2 class="testimonial-title">Saves time</h2>
                                                                            <p class="testimonial-description">“What has made it easier for our book club with your platform? Almost everything. From being able to add books with a visual aspect, which has helped cut down on the number of times members can’t find the right book, to being able to have members put books on shelves that they would like our group to read, to being able to have all our information in one easy resource. Thank you.”</p>
                                                                            <div class="testimonial-image">
                                                                                <picture>
                                                                                    <source srcSet="data:image/webp;base64,UklGRkYEAABXRUJQVlA4WAoAAAAQAAAAYwAAYwAAQUxQSGcCAAABkEZbkyFJMWvbtm3btm3btm3btm3bGtv2xKI6T2ZE/N4TERMA/1laqWNpANjgczuvYEsRIzf13I6IbvkhcZFaReIL1DwKFf2eOcQhvs8lS5FuA3ZEosZHomSPRs1RZSWpj9p7SVJJ32BJ5utrJ0erY0HaQjOJkTQWtQfPADET/dR3GATtpg/7CtLIwHFBThu4IUdvNHhMjqUmVsuR552BcXJAoWh9kxPLUdTAtGRyXEf9Z0DMjGjQN4sYiaIM4CExYJEJrCQG9LjyMVbXrcRyABRCvReb2YGkNfX8SAOy9tTTG4TdpOVrfGmeaOkAwsYP1RA3F6TNh8r2cxftOLGxKYjbV60bCH1Graw0WasMmjJ1cLPS3kpxeWRpcD4EdcaMaZpVjjTbUH/U40mpZUh2A80GrswuwVw07tyRXyY/cxgxl90AJDmf2wkaOJJXAm8igTVYlUaq91i1IoN1OU2ns4XTcTr2KRl9pIMF+aTyJ9SNT34kvJJPZUpX+DSh9IHPAEpOCdkspBSSkc0+SnHF2VyjhE3ZPCY1jM17Usu52DkobCNwgEtyb4XuBC5wyRim0JXABy554xQ6EwizY1IeFTsQwIxM6qu0p1CNSQeVNgb8xthoy2SASmsDUTVtDGAyQaWVAaxrYwGT+URa2TjMZK1KCxP9I62eMdlNZIyPlUtSHodVmpuY7WAVkY3HSSLrX1hhER55dtM4edHqdlYeAHl222hq4tFuRPRfXRoY5+ljb+z9Onw9Ow1wr73bHpuYuNWwNshYJudpez32u0fnBlHT1B69+vZte/9//O1fn149unUaIAsAVlA4ILgBAACwCwCdASpkAGQAPlEmjkUjoiEVjaRgOAUEs4BrNO0f5fXnMNulzwFKqgivi1URvJAZmCjjYGadCzejUnHt7SxpSDnNy10jQrQ6WvCivTOX5NXjlYv2kNjsmIriKaAvPLcMCX7l/UAA/v02aAFB9qxSYXVppb7JSKQSSFJDEymCTkCy5MdZXrqhVhIPLaXtbttf678e3559Xxu5nZIIHZR8B66nzncIvgGkBGnHS9a0sUcmhVdR+t4/QVob16yh9tdIyBAD7IMCDF/h4p7ZorMrXHiu26wYfqCmQnL6EkMn/5lfp+uc8k3+NTdEl6IJuD3/BDH/sqMyQZhSktc0rxlqurbc4ExluSoJbppfG1fq7faK9lf3xSAU+k+gO6ln/9Qd7+f/3tg+1SAappMGOoCq18R76/YLhZbOmqndStB34IgDyiTFutDogyanTBM6jG3S06hJ9RNETm8jJbkMnVfKaqYlu8Apx9IIbkx+PKi/leeCCcRgE4zDDu35hLlcVu5D36cW9KO31dU4rabmDbcOBtr+iM5V/5FdcHV/EQ/JeFv/QMFf/9u2hMMeBiNeK4WoHY6ZXAAAAA==" type="image/webp" /><img src="static/media/testimonial2.74ad70a0.png" alt="" width="100" height="100" />
                                                                                </picture>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-index="2" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline:none;width:11.11111111111111%">
                                                                    <div>
                                                                        <div class="testimonial-item" tabindex="-1" style="width:100%;display:inline-block">
                                                                            <h2 class="testimonial-title">Better meeting</h2>
                                                                            <p class="testimonial-description">“My first book club meeting went well and was ah-mazing. Thanks so much for following up. Bookclubz was great in facilitating the meeting set up with the reminders and the attendees loved it as much as I did. Thanks again for everything.”</p>
                                                                            <div class="testimonial-image">
                                                                                <picture>
                                                                                    <source srcSet="data:image/webp;base64,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" type="image/webp" /><img src="static/media/testimonial3.7b87e1a5.png" alt="" width="100" height="100" />
                                                                                </picture>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-index="3" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline:none;width:11.11111111111111%">
                                                                    <div>
                                                                        <div class="testimonial-item" tabindex="-1" style="width:100%;display:inline-block">
                                                                            <h2 class="testimonial-title">Fewer emails</h2>
                                                                            <p class="testimonial-description">“So many emails before Bookclubz! Now I can easily manage three book clubs, not just one, and it’s so fun and simple. Best service ever.”</p>
                                                                            <div class="testimonial-image">
                                                                                <picture>
                                                                                    <source srcSet="data:image/webp;base64,UklGRk4FAABXRUJQVlA4WAoAAAAQAAAAYwAAYwAAQUxQSIwCAAABkEVrkyFJsbZt2zaebNu2bdu2bdu2bdsaVqwyOzIiXveciJgA+J9/iIID1l1/cWtvl6R6Rex5GY3vOoXQKUSrJ2g9JYRGUeehr/0VinYIffbPoc9iJFwTJlvlhm0a59OjCFIG/8R/VlRjK4nxfRotQr1zcCkPaJkSqb09LcKAmump1qYGTSN7RN1B16tEG5UZTfQ5lC65PRrMrAusIGqoTCGiqcrEJXoVXhd4R4PdlNlA9CaJLn2JcIUuuahW6gIXaGbGUKY7TTJQNsIdiu+gbrFvBK/0gYK7fbulEIT1fDqkEXzwaYBK131ZGE2lfTa3F/QpBDpvsCkLai+2qaLXZJu2OoWInbvkSptZ+sRpOGXPB/TR793Z5bUT6xG+9eZApP65s3w4HVo/Rrd3eidUoK6Hzt+OTCgt1hPk+LyOsHbI0+sp6ywTDC4tKYPHBU9IaoZ8Cwpaz2iwoJuMtstJiYw/hxRTihOmFdONVWUxy1m1EnOY1VgxL1gtkxIXWe+QUpDXLSkVePmFFNKSFyYSMopZUSErLaawqC5kh8mvPovWQo6bntZjMUbIQ9N5HktlhPAzHajPYruMOGjeyuOmjMwWK51s3mTwCymiqMV0J+unGDCxiNIWAxu4ONDRVFxEVYvWjVzcrW2qLqKBRQ0nP0uY2ojoYFHWCeYxjRcx0KJ4Yye5ggzLREywyNHUSelHhp0i5lskdFNzn+GOiJWm4DBuWq40BISS0MP0Blo4GTrFgMkkQPKF/7oGLZ3M7fivg8lBaPKFfx12tKYOIn6cmA0EJ2/0EHc42lMCLw6MDtKL1YPWTg7EKwY6Jm+08SHNw4Udk4Gq0Yt1nHjw4MOPf318eHHjxI4VowNbVlA4IJwCAADwEQCdASpkAGQAPlEkj0WjoiEUSdzkOAUEsobk8uABAvqunsdF4YHjF3W+F5J5xu2f8wHm5+iD/b74f6AHSngmZBhXPuvrnnkGF2TubsmGPQ63wzG4HzSm9OeQQi2j471FdnHgkG/cMrQBD7OwQNSd/FVHeqmMIB7zPjkc3iwkkJmFQSNVS6WCmJ4Uw9pc+a2XaGz02zMMeAD+/gbQDl+Vz/nf6Lv/8fr6pzH11Kfw+9DL+ngV1aVR5+67elN0muMAZ67ixApTGzqTbbNYeKH6/HZi9emwULOlof1fK1zf57jlQydgmaFXG+Q912avpUJTXZ5z6oUYHLj/z+Y241u853bSjbN1KTwBPr17SWeUFsFZ4qrkUNs7VrfwozZUss2tc+Me3jFiaQ8vT/iUe0lxdvJ386HoadHzW0FFGhgMx0pcWKygTRXlVorcJSdOjbqVBMXvD+D6AH///wA4Xck39001+yQaasvMZ/0kW5xcVR8zZwzlz366RG75/4/mkb74aL/RVDdi3CjrZPmYkjJZwxJ+4ZZEZVUqro5g4kUPsql5UsvIA7ufH8xLx1g5+bbVg+QGEYwHeFC8DTWSa3PxYizwammL9OqUdUGozjUxbJtO3ILVpM3Wg+s1UknScm1mnzmj2Oy8/b73jUg4lYLpwE7+h/RPkt+d9qqjn+YCxaUgJjjPdCBUeMu66kZ7xFnWej781NgPFz/QiRsNbe07h23WNvdpcn+HPPy4wuUYih9Lxgn249+V23syYUH8y1eEOCL0qQ1+vw4faF/SYMZ6QGX5euy3kBbY3YikbcezE2Pd8Ggcn2Br39AG4iYw6ujHkfLxf6833L6eCSgHHXSwe4k0Rin/Iff/+oa3H7C3LStGbIcHFF8PcAAAAA==" type="image/webp" /><img src="static/media/testimonial4.58a63854.png" alt="" width="100" height="100" />
                                                                                </picture>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-index="4" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width:11.11111111111111%">
                                                                    <div>
                                                                        <div class="testimonial-item" tabindex="-1" style="width:100%;display:inline-block">
                                                                            <h2 class="testimonial-title">Happier members</h2>
                                                                            <p class="testimonial-description">“Our club started off as an experiment for me to bring together all the incredible women in my life together under a common interest (books), but it&#x27;s turned into much more than that! Now after two years, we&#x27;ve come together as one group of friends and confidants who support, share, and challenge each other on everything from literature to love &amp; loss to life in general.”</p>
                                                                            <div class="testimonial-image">
                                                                                <picture>
                                                                                    <source srcSet="data:image/webp;base64,UklGRqgFAABXRUJQVlA4WAoAAAAQAAAAYwAAYwAAQUxQSKsCAAABkEXb1rEt72/btm3/2a4r27Zt27Zt27brt5ndk97T8zznXDciYgKU/8HUrj/7UFpZ0bOzOwdU0CXKblwWg6YNMaeoQQb71+xoejoxjmUJ1Ph+5MHyzYkZzfh2I2YBp7satBzj9N6ZFBvGuxUpFbhtIaUDtzQdSuZy++RCyWFurCohGnf5jSTE+yu/PYQMY/wf0xFSJCDXiIrIF0zgZ2cqRjKh/lTYFgmJoUKxnSoihQxF64WACnQoQwXEERLwndsXR0K0M7itUyjtzOlxFw1SNNdzeN3CT0OhttbOE2eyYJnaCtF7QFlk9QPl6lE1EFRkQtUq0Hs7qs6DmCdB9pXr169bAuvuo0NLhXXZjOuP/OOjaloREX2Bib3Z2ZmA5u+Z+F2+2Gp8YlKON0ZlkcYkPWCKaTSTdiYiq3x53trgackkTsBzTqYWaNw+yTQQTX0m8zQ0a6Rai+aKVIexmJZLdQVLKJP6HpZqcr3A0l2ubB0ki+QqMUNyWKrvY0yQXJFgXr4aq2qM5JkEc9IB1YxwmJRIsOopoI4hDtdvarezue26C2hihCOcqS+9wO3kFUArKxwVAaPucrtyHNDJFUdTQMcsbne2Avp64xgGaPqa25OlgCG+OFYBmn3nljYFMNYfxwlAC8Y9dzRgWiCO62rfBZQOAiwIR6HxUu1NG34fegJWxqMwLVPL6cXve3vA5iQU7t/UHk7ix1oC9qSgCGfqV9ZJcSwJRSXA8RMCWgDOJ6BoBthwTcQPtZtRuhiGAaY/FtDhvdr9SB0MKwAD8wR0L1GbqKtgHAbo+l5Av+y/nXZXkLqvVmn/Q8Dwl4yxstlhCmL3Nml/dGICpz5kt0ebK9grrE4T1LOCQmOI3+40Pmmre7sppJpX6D379Om0sj/K0m7vnt27gbkiLQBWUDgg1gIAALARAJ0BKmQAZAA+USSQRaOiIZNLNNA4BQSzl66Fci5t7OkOvW7Y3nkt1i/2PsLbzN/lp7XZPezv+qd+oev8ECpeD2NRKrrrJ3eaTIwZCuhFubCJ7TDMmcXod2E1UxhEg2Vkn8iBNEOLH932lmkdY+J7RrTbfVBZNUlEyE4463CPmAE6RTZOvns8VR0Kl6b82w67oqDUAAD+/bToEP/+cSfzOf/Rpb37m/rg0yJJ8/LdWH242PNc71Z8xCp3GKUoUNgfFw+MvQ0dMFjuKcxk89KTMAAwvHQ+QKJfUDQsUG3kzp6uyMYsIpmCXESBPAWcA9OxqjaffpAcSLHGWMR455ECFg0Idjf2hMjJWpP94VMmeKm7xoUGZOg1OgG3AP3//n/uIBvoE2uq3A+SqXOfetDWDW2/AhZmsf/FkAmH8UsLCpvX81K1q4FkDrt8Mzvh/nefvX9VkfdCiz/vv+Nbc9V38nP/ngbKblhBKHrAYeplAre1p3KUkBLK1Hm8lqnxKXFOkhdpV/Vt2P+nb/1yivBGHmd/xhs41vUe8tff6Q4rTmjy3h5Wbf+9sVDAnHfg6OKNjzL2jK1CQUigVsc3f05hBm+/dB4FxfV+J4BVPPbdkfxsXXsqmtkzoQ6KRxVQ/k5q1L8Ws1hvM3hRLYTsvy8fEaPqHJnsoBOiOPDWKtjw1iVTFVGiDQpuBcbB1ARuxbSA3dh1ORXF2Q895C+ILLbgRcmDLl1XKWh0Eyp93USDNpA3fbhFxc6fHJTHNRwDYYDIhq/CkYiETn8jRq5VWEe1qR62wMENKmr5wLqsjCs86Tb3KkG7Z1oKjROmN7PcFC8eV9goJYcLH/u7Ae18/OUKBy/PW5nXing6NAX674EiWyJHirW21BNXbWnFvNp+Lt5191nXkp1XwA+/vVDYMfZU7UthhtdDi3izTybNi5Qw5HYvy6f//zK9SrZONx9RRgKfZiIAAA==" type="image/webp" /><img src="static/media/testimonial1.309af152.png" alt="" width="100" height="100" />
                                                                                </picture>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-index="5" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width:11.11111111111111%">
                                                                    <div>
                                                                        <div class="testimonial-item" tabindex="-1" style="width:100%;display:inline-block">
                                                                            <h2 class="testimonial-title">Saves time</h2>
                                                                            <p class="testimonial-description">“What has made it easier for our book club with your platform? Almost everything. From being able to add books with a visual aspect, which has helped cut down on the number of times members can’t find the right book, to being able to have members put books on shelves that they would like our group to read, to being able to have all our information in one easy resource. Thank you.”</p>
                                                                            <div class="testimonial-image">
                                                                                <picture>
                                                                                    <source srcSet="data:image/webp;base64,UklGRkYEAABXRUJQVlA4WAoAAAAQAAAAYwAAYwAAQUxQSGcCAAABkEZbkyFJMWvbtm3btm3btm3btm3bGtv2xKI6T2ZE/N4TERMA/1laqWNpANjgczuvYEsRIzf13I6IbvkhcZFaReIL1DwKFf2eOcQhvs8lS5FuA3ZEosZHomSPRs1RZSWpj9p7SVJJ32BJ5utrJ0erY0HaQjOJkTQWtQfPADET/dR3GATtpg/7CtLIwHFBThu4IUdvNHhMjqUmVsuR552BcXJAoWh9kxPLUdTAtGRyXEf9Z0DMjGjQN4sYiaIM4CExYJEJrCQG9LjyMVbXrcRyABRCvReb2YGkNfX8SAOy9tTTG4TdpOVrfGmeaOkAwsYP1RA3F6TNh8r2cxftOLGxKYjbV60bCH1Graw0WasMmjJ1cLPS3kpxeWRpcD4EdcaMaZpVjjTbUH/U40mpZUh2A80GrswuwVw07tyRXyY/cxgxl90AJDmf2wkaOJJXAm8igTVYlUaq91i1IoN1OU2ns4XTcTr2KRl9pIMF+aTyJ9SNT34kvJJPZUpX+DSh9IHPAEpOCdkspBSSkc0+SnHF2VyjhE3ZPCY1jM17Usu52DkobCNwgEtyb4XuBC5wyRim0JXABy554xQ6EwizY1IeFTsQwIxM6qu0p1CNSQeVNgb8xthoy2SASmsDUTVtDGAyQaWVAaxrYwGT+URa2TjMZK1KCxP9I62eMdlNZIyPlUtSHodVmpuY7WAVkY3HSSLrX1hhER55dtM4edHqdlYeAHl222hq4tFuRPRfXRoY5+ljb+z9Onw9Ow1wr73bHpuYuNWwNshYJudpez32u0fnBlHT1B69+vZte/9//O1fn149unUaIAsAVlA4ILgBAACwCwCdASpkAGQAPlEmjkUjoiEVjaRgOAUEs4BrNO0f5fXnMNulzwFKqgivi1URvJAZmCjjYGadCzejUnHt7SxpSDnNy10jQrQ6WvCivTOX5NXjlYv2kNjsmIriKaAvPLcMCX7l/UAA/v02aAFB9qxSYXVppb7JSKQSSFJDEymCTkCy5MdZXrqhVhIPLaXtbttf678e3559Xxu5nZIIHZR8B66nzncIvgGkBGnHS9a0sUcmhVdR+t4/QVob16yh9tdIyBAD7IMCDF/h4p7ZorMrXHiu26wYfqCmQnL6EkMn/5lfp+uc8k3+NTdEl6IJuD3/BDH/sqMyQZhSktc0rxlqurbc4ExluSoJbppfG1fq7faK9lf3xSAU+k+gO6ln/9Qd7+f/3tg+1SAappMGOoCq18R76/YLhZbOmqndStB34IgDyiTFutDogyanTBM6jG3S06hJ9RNETm8jJbkMnVfKaqYlu8Apx9IIbkx+PKi/leeCCcRgE4zDDu35hLlcVu5D36cW9KO31dU4rabmDbcOBtr+iM5V/5FdcHV/EQ/JeFv/QMFf/9u2hMMeBiNeK4WoHY6ZXAAAAA==" type="image/webp" /><img src="static/media/testimonial2.74ad70a0.png" alt="" width="100" height="100" />
                                                                                </picture>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-index="6" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width:11.11111111111111%">
                                                                    <div>
                                                                        <div class="testimonial-item" tabindex="-1" style="width:100%;display:inline-block">
                                                                            <h2 class="testimonial-title">Better meeting</h2>
                                                                            <p class="testimonial-description">“My first book club meeting went well and was ah-mazing. Thanks so much for following up. Bookclubz was great in facilitating the meeting set up with the reminders and the attendees loved it as much as I did. Thanks again for everything.”</p>
                                                                            <div class="testimonial-image">
                                                                                <picture>
                                                                                    <source srcSet="data:image/webp;base64,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" type="image/webp" /><img src="static/media/testimonial3.7b87e1a5.png" alt="" width="100" height="100" />
                                                                                </picture>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-index="7" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width:11.11111111111111%">
                                                                    <div>
                                                                        <div class="testimonial-item" tabindex="-1" style="width:100%;display:inline-block">
                                                                            <h2 class="testimonial-title">Fewer emails</h2>
                                                                            <p class="testimonial-description">“So many emails before Bookclubz! Now I can easily manage three book clubs, not just one, and it’s so fun and simple. Best service ever.”</p>
                                                                            <div class="testimonial-image">
                                                                                <picture>
                                                                                    <source srcSet="data:image/webp;base64,UklGRk4FAABXRUJQVlA4WAoAAAAQAAAAYwAAYwAAQUxQSIwCAAABkEVrkyFJsbZt2zaebNu2bdu2bdu2bdsaVqwyOzIiXveciJgA+J9/iIID1l1/cWtvl6R6Rex5GY3vOoXQKUSrJ2g9JYRGUeehr/0VinYIffbPoc9iJFwTJlvlhm0a59OjCFIG/8R/VlRjK4nxfRotQr1zcCkPaJkSqb09LcKAmump1qYGTSN7RN1B16tEG5UZTfQ5lC65PRrMrAusIGqoTCGiqcrEJXoVXhd4R4PdlNlA9CaJLn2JcIUuuahW6gIXaGbGUKY7TTJQNsIdiu+gbrFvBK/0gYK7fbulEIT1fDqkEXzwaYBK131ZGE2lfTa3F/QpBDpvsCkLai+2qaLXZJu2OoWInbvkSptZ+sRpOGXPB/TR793Z5bUT6xG+9eZApP65s3w4HVo/Rrd3eidUoK6Hzt+OTCgt1hPk+LyOsHbI0+sp6ywTDC4tKYPHBU9IaoZ8Cwpaz2iwoJuMtstJiYw/hxRTihOmFdONVWUxy1m1EnOY1VgxL1gtkxIXWe+QUpDXLSkVePmFFNKSFyYSMopZUSErLaawqC5kh8mvPovWQo6bntZjMUbIQ9N5HktlhPAzHajPYruMOGjeyuOmjMwWK51s3mTwCymiqMV0J+unGDCxiNIWAxu4ONDRVFxEVYvWjVzcrW2qLqKBRQ0nP0uY2ojoYFHWCeYxjRcx0KJ4Yye5ggzLREywyNHUSelHhp0i5lskdFNzn+GOiJWm4DBuWq40BISS0MP0Blo4GTrFgMkkQPKF/7oGLZ3M7fivg8lBaPKFfx12tKYOIn6cmA0EJ2/0EHc42lMCLw6MDtKL1YPWTg7EKwY6Jm+08SHNw4Udk4Gq0Yt1nHjw4MOPf318eHHjxI4VowNbVlA4IJwCAADwEQCdASpkAGQAPlEkj0WjoiEUSdzkOAUEsobk8uABAvqunsdF4YHjF3W+F5J5xu2f8wHm5+iD/b74f6AHSngmZBhXPuvrnnkGF2TubsmGPQ63wzG4HzSm9OeQQi2j471FdnHgkG/cMrQBD7OwQNSd/FVHeqmMIB7zPjkc3iwkkJmFQSNVS6WCmJ4Uw9pc+a2XaGz02zMMeAD+/gbQDl+Vz/nf6Lv/8fr6pzH11Kfw+9DL+ngV1aVR5+67elN0muMAZ67ixApTGzqTbbNYeKH6/HZi9emwULOlof1fK1zf57jlQydgmaFXG+Q912avpUJTXZ5z6oUYHLj/z+Y241u853bSjbN1KTwBPr17SWeUFsFZ4qrkUNs7VrfwozZUss2tc+Me3jFiaQ8vT/iUe0lxdvJ386HoadHzW0FFGhgMx0pcWKygTRXlVorcJSdOjbqVBMXvD+D6AH///wA4Xck39001+yQaasvMZ/0kW5xcVR8zZwzlz366RG75/4/mkb74aL/RVDdi3CjrZPmYkjJZwxJ+4ZZEZVUqro5g4kUPsql5UsvIA7ufH8xLx1g5+bbVg+QGEYwHeFC8DTWSa3PxYizwammL9OqUdUGozjUxbJtO3ILVpM3Wg+s1UknScm1mnzmj2Oy8/b73jUg4lYLpwE7+h/RPkt+d9qqjn+YCxaUgJjjPdCBUeMu66kZ7xFnWej781NgPFz/QiRsNbe07h23WNvdpcn+HPPy4wuUYih9Lxgn249+V23syYUH8y1eEOCL0qQ1+vw4faF/SYMZ6QGX5euy3kBbY3YikbcezE2Pd8Ggcn2Br39AG4iYw6ujHkfLxf6833L6eCSgHHXSwe4k0Rin/Iff/+oa3H7C3LStGbIcHFF8PcAAAAA==" type="image/webp" /><img src="static/media/testimonial4.58a63854.png" alt="" width="100" height="100" />
                                                                                </picture>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><button type="button" data-role="none" class="slick-arrow slick-next" style="display:block">
                                                            <!-- -->Next
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="txt-center btn-wrap pt35 mt35"><a href="signup" class="mtr-button">Create your club</a></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="block-container popular-book">
                                        <div class="center">
                                            <h2 aria-label="trending now..." class="block-title">Trending now...</h2>
                                            <p class="slight-text">Hundreds of thousands of readers can’t be wrong. Check out the most popular books that book clubs across the world are reading this week.</p>
                                            <div class="slider-container" aria-hidden="false">
                                                <div class="slider-content"></div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <section class="block-fall-back">
                                    <div class="books">
                                        <div class="desktop-content">
                                            <div class="books-row">
                                                <div class="books-col">
                                                    <div class="book-item" style="width:220px"><a class="overlay-button" href="/books/his-only-wife-59134?type=audio-book" aria-label="His Only Wife">
                                                            <div class="lazyload-wrapper ">
                                                                <div class="lazyload-placeholder"></div>
                                                            </div>
                                                        </a></div>
                                                    <div class="book-item" style="width:220px"><a class="overlay-button" href="/books/afterparties--111504" aria-label="Afterparties ">
                                                            <div class="lazyload-wrapper ">
                                                                <div class="lazyload-placeholder"></div>
                                                            </div>
                                                        </a></div>
                                                    <div class="book-item" style="width:240px"><a class="overlay-button" href="/books/in-all-good-faith-114227" aria-label="In All Good Faith">
                                                            <div class="lazyload-wrapper ">
                                                                <div class="lazyload-placeholder"></div>
                                                            </div>
                                                        </a></div>
                                                    <div class="book-item" style="width:220px"><a class="overlay-button" href="/books/three-rooms-107822" aria-label="Three Rooms">
                                                            <div class="lazyload-wrapper ">
                                                                <div class="lazyload-placeholder"></div>
                                                            </div>
                                                        </a></div>
                                                </div>
                                                <div class="books-col">
                                                    <div class="book-item" style="width:220px"><a class="overlay-button" href="/books/all-boys-aren’t-blue-51765" aria-label="All Boys Aren’t Blue">
                                                            <div class="lazyload-wrapper ">
                                                                <div class="lazyload-placeholder"></div>
                                                            </div>
                                                        </a></div>
                                                    <div class="book-item" style="width:240px;max-width:28%"><a class="overlay-button" href="/books/my-monticello-114226" aria-label="My Monticello">
                                                            <div class="lazyload-wrapper ">
                                                                <div class="lazyload-placeholder"></div>
                                                            </div>
                                                        </a></div>
                                                    <div class="book-item" style="width:220px"><a class="overlay-button" href="/books/greenlights-61641?type=audio-book" aria-label="Greenlights">
                                                            <div class="lazyload-wrapper ">
                                                                <div class="lazyload-placeholder"></div>
                                                            </div>
                                                        </a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mobile-content">
                                            <div class="books-row">
                                                <div class="books-col">
                                                    <div class="book-item" style="width:220px"><a class="overlay-button" href="/books/three-rooms-107822" aria-label="Three Rooms">
                                                            <div class="lazyload-wrapper ">
                                                                <div class="lazyload-placeholder"></div>
                                                            </div>
                                                        </a></div>
                                                    <div class="book-item" style="width:220px"><a class="overlay-button" href="/books/greenlights-61641?type=audio-book" aria-label="Greenlights">
                                                            <div class="lazyload-wrapper ">
                                                                <div class="lazyload-placeholder"></div>
                                                            </div>
                                                        </a></div>
                                                </div>
                                                <div class="books-col">
                                                    <div class="book-item" style="width:220px"><a class="overlay-button" href="/books/his-only-wife-59134?type=audio-book" aria-label="His Only Wife">
                                                            <div class="lazyload-wrapper ">
                                                                <div class="lazyload-placeholder"></div>
                                                            </div>
                                                        </a></div>
                                                    <div class="book-item" style="width:220px"><a class="overlay-button" href="/books/afterparties--111504" aria-label="Afterparties ">
                                                            <div class="lazyload-wrapper ">
                                                                <div class="lazyload-placeholder"></div>
                                                            </div>
                                                        </a></div>
                                                    <div class="book-item" style="width:240px;max-width:31.5%"><a class="overlay-button" href="/books/in-all-good-faith-114227" aria-label="In All Good Faith">
                                                            <div class="lazyload-wrapper ">
                                                                <div class="lazyload-placeholder"></div>
                                                            </div>
                                                        </a></div>
                                                </div>
                                                <div class="books-col">
                                                    <div class="book-item" style="width:220px"><a class="overlay-button" href="/books/all-boys-aren’t-blue-51765" aria-label="All Boys Aren’t Blue">
                                                            <div class="lazyload-wrapper ">
                                                                <div class="lazyload-placeholder"></div>
                                                            </div>
                                                        </a></div>
                                                    <div class="book-item" style="width:240px;max-width:36%"><a class="overlay-button" href="/books/my-monticello-114226" aria-label="My Monticello">
                                                            <div class="lazyload-wrapper ">
                                                                <div class="lazyload-placeholder"></div>
                                                            </div>
                                                        </a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h2 class="title">Fall back into book club.</h2>
                                        <p class="desc">Whether your club is picking things back up or kicking things off, you will need
                                            discussion-worthy books!</p>
                                        <div class="wrap-button"><a class="mtr-button" href="/fall-back-into-book-club">Get inspired here</a></div>
                                    </div>
                                </section>
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
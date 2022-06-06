<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link  rel="stylesheet"  href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>


    <link rel="stylesheet" href="style.css">
    <script src="/js/jquery.min.js"></script>
  <title> <?php echo $page_title; ?></title>
</head>

<body>
    <div class="header container-fluid header-custom">
        <div class="header-top row">
            <div class="col-5 col-lg-3 col-md-4 col-sm-4 " style="padding:0;">
                
                    <div class="logo-wraper">
                        <a href="/index.php">
                            <img src="/Images/logo_gambo.svg" style="width:115px;" alt="logo-image"></a>
                    </div>
                    
                    <div class="mobile-logo">
                    <a href="#">
                        <img src="/Images/Small-screen-gambo-logo.png" style="width: 40px;" alt="logo-image"></a>
                    </div>
                    
                    <div class="locatin-wrapper">
                        <a class="location-btn"><i class="bi bi-geo-alt location-logo"></i> Gurugam <i
                                class="bi bi-chevron-compact-down"></i></a>
                        <br>
                        <ul class="toggle-loc-list">
                            <li> <i class="bi bi-geo-alt location-logo"></i> Dubai</li>
                            <li><i class="bi bi-geo-alt location-logo"></i> SKopje</li>
                            <li><i class="bi bi-geo-alt location-logo"></i> Makedonia</li>
                            <li><i class="bi bi-geo-alt location-logo"></i> Kosovo</li>
                            <li> <i class="bi bi-geo-alt location-logo"></i> Dubai</li>
                            <li><i class="bi bi-geo-alt location-logo"></i> SKopje</li>
                            <li><i class="bi bi-geo-alt location-logo"></i> Makedonia</li>
                            <li><i class="bi bi-geo-alt location-logo"></i> Kosovo</li>
                            <li><i class="bi bi-geo-alt location-logo"></i> Kosovo</li>

                        </ul>

                    </div>
                    <div class="locatin-wrapper-mobile">
                        <a class="location-btn-mobile"><i class="bi bi-geo-alt location-logo"></i>..</a>
                        <br>
                        <ul class="toggle-loc-list-mobile">
                            <li> <i class="bi bi-geo-alt location-logo"></i> Dubai</li>
                            <li><i class="bi bi-geo-alt location-logo"></i> SKopje</li>
                            <li><i class="bi bi-geo-alt location-logo"></i> Makedonia</li>
                            <li><i class="bi bi-geo-alt location-logo"></i> Kosovo</li>
                            <li> <i class="bi bi-geo-alt location-logo"></i> Dubai</li>
                            <li><i class="bi bi-geo-alt location-logo"></i> SKopje</li>
                            <li><i class="bi bi-geo-alt location-logo"></i> Makedonia</li>
                            <li><i class="bi bi-geo-alt location-logo"></i> Kosovo</li>
                            <li><i class="bi bi-geo-alt location-logo"></i> Kosovo</li>

                        </ul>

                    </div>
            
            </div>

            <div class="col-lg-3 col-sm-3 hide-search">
                <div class="search-bar-wrapper">
                    <input type="text" placeholder="Search for products.." id="search-bar"><i
                        class="bi bi-search search-bar-icon"></i>
                </div>
            </div>
            <div class="col-5 col-lg-6 col-md-8 col-sm-8">
                <div class="top-header-right-links">
                    <a href="#" class="item-one" style="margin-right: 5%;"><i class="bi bi-telephone"></i>
                        1800-000-000</a>
                    <a href="#" class="item-two" style="margin-right: 5%;"><i class="bi bi-gift"></i> Offers</a>
                    <a href="#" class="item-two" style="margin-right: 5%;"><i class="bi bi-question-circle"></i> Help</a>
                    <a href="#" style="margin-right: 5%;">
                        <span class="wishlist"> <i class="bi bi-heart"></i>
                            <span class="wishlist-counter">3</span>
                        </span>
                    </a>
                    <div class="user-anchor">
                        <a href="#" class="user-account">
                            <img src="/Images/profile-img.jpg" alt="profile" id="profile-img">
                            JhonDoe <i class="bi bi-chevron-compact-down"></i>
                        </a> <br>
                        <ul class="toggle-user-list">

                            <li style="border-bottom: 1px solid rgb(177, 177, 177);"> <button onclick="lights()">night Mode</button></li>
                            <li> <i class="bi bi-border-all"></i> Dubai</li>
                            <li><i class="bi bi-box-seam"></i> SKopje</li>
                            <li><i class="bi bi-heart"></i> Makedonia</li>
                            <li><i class="bi bi-cash-stack"></i> Kosovo</li>
                            <li><i class="bi bi-geo-alt loc-logo"></i>Dubai</li>
                            <li><i class="bi bi-gift"></i> SKopje</li>
                            <li><i class="bi bi-info-circle"></i></i> Makedonia</li>
                            <li><i class="bi bi-lock"></i> Kosovo</li>
                        </ul>

                    </div>  
                    <div class="user-anchor-mobile">
                        <a href="#" class="user-account-mobile">
                            <img src="/Images/profile-img.jpg" alt="profile" id="profile-img-mobile">
                            <i class="bi bi-chevron-compact-down"></i>
                        </a> <br>
                        <ul class="toggle-user-list-mobile">

                            <li style="border-bottom: 1px solid rgb(177, 177, 177);"> night mode</li>
                            <li> <i class="bi bi-border-all"></i> Dubai</li>
                            <li><i class="bi bi-box-seam"></i> SKopje</li>
                            <li><i class="bi bi-heart"></i> Makedonia</li>
                            <li><i class="bi bi-cash-stack"></i> Kosovo</li>
                            <li><i class="bi bi-geo-alt loc-logo"></i>Dubai</li>
                            <li><i class="bi bi-gift"></i> SKopje</li>
                            <li><i class="bi bi-info-circle"></i></i> Makedonia</li>
                            <li><i class="bi bi-lock"></i> Kosovo</li>
                        </ul>

                    </div>
                </div>


            </div>
        </div>
        <div class="header-bottom row">
            <div class="col-4 col-lg-2 col-md-3" style="padding:0; ">
                <div class="select-category-btn">
                    <a href="#">
                        <i class="bi bi-border-all"></i> Select Category
                    </a>
                </div>
                <!--MOBILE-->
                <div class="select-category-btn-mobile">
                    <i class="bi bi-border-all"></i>
                </div>
                <div class="hidden-links-btn">
                    <i class="bi bi-three-dots"></i>
                </div>
            </div>
            <div class="col col-lg-6 col-md-6 hide-this-links">
                <div class="head-botoom-links">
                    <a href="#">Home</a>
                    <a href="#">New Product</a>
                    <a href="#">Featured Products</a>
                    <a href="#" class="pages-list-wrapper">Pages <i class="bi bi-chevron-down"></i>
                     
                        <ul class="pages-list">
                            <li>Abaut Us</li>
                            <li>Shop Grid</li>
                            <li>Single Product View</li>
                            <li>Checkout</li>
                            <li>Product Request</li>
                            <li>Order Placed</li>
                            <li>Bill Slip</li>
                            <li>Sing In</li>
                            <li>Sing Up</li>
                            <li>Forgot Password</li>
                            <li>Contact Us</li>
                        </ul>

                     </a>
                    <a href="#" class="blog-list">Blog <i class="bi bi-chevron-down"></i>
                       
                    <ul class="togle-blog-list">
                            <li> Our Blog </li>
                            <li>Blog Details</li>
                        </ul>
                    </a>
                    <a href="">Contact Us</a>
                </div>
            </div>
            <div class="col-4 col-lg-2 col-md-3 " style="padding:0;">
                <div class="cart-btn">
                    <a href="#"><i class="bi bi-cart3"></i> Cart <i class="bi bi-chevron-down"></i></a>
                </div>
                <div class="hidden-search-btn">
                    <i class="bi bi-search"></i>
                </div>
            </div>

        </div>
    </div>
    <br>
   
    <!--POP UP CATEGORY BUTTON-->
    <div class="category-pop-up">
        <div class="category-pop-up-wrapper">
            <div class="exit">X</div>
            <div class="headline">
                <h4 style="color: white; padding:0;">Select Category</h4>
            </div>
            <div class="items">
                <div class="row">
                    <div class="col-4" style="padding: 10px;">
                        <div class="icon">
                            <a href="#"><img src="/Images/icon-6.svg" style="width:50px;" alt="item">
                            </a>
                        </div>
                        <div class="text">Home Care</div>
                    </div>
                    <div class="col-4" style="padding: 10px;">
                        <div class="icon">
                            <a href="#">
                            <img src="/Images/icon-7.svg" style="width:50px;" alt="item">
                            </a>
                        </div>
                        <div class="text"> Noodles & Sauces </div>
                    </div>
                    <div class="col-4" style="padding: 10px;">
                        <div class="icon">
                            <a href="#">
                            <img src="/Images/icon-9.svg" style="width:50px;" alt="item">
                            </a>
                        </div>
                        <div class="text">Pet Care</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4" style="padding: 10px;">
                        <div class="icon">
                            <a href="#">
                            <img src="/Images/icon-4.svg" style="width:50px;" alt="item">
                            </a>
                        </div>
                        <div class="text">Beverages</div>
                    </div>
                    <div class="col-4" style="padding: 10px;">
                        <div class="icon">
                            <a href="#">
                            <img src="/Images/icon-8.svg" style="width:50px;" alt="item">
                            </a>
                        </div>
                        <div class="text">Personal Care</div>
                    </div>
                    <div class="col-4" style="padding: 10px;">
                        <div class="icon">
                            <a href="#">
                            <img src="/Images/icon-5.svg" style="width:50px;" alt="item">
                            </a>
                        </div>
                        <div class="text">Snacks</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4" style="padding: 10px;">
                        <div class="icon">
                            <a href="#">
                            <img src="/Images/icon-3.svg" style="width:50px;" alt="item">
                            </a>
                        </div>
                        <div class="text">Dairy & Eggs</div>
                    </div>
                    <div class="col-4" style="padding: 10px;">
                        <div class="icon">
                            <a href="#">
                            <img src="/Images/icon-2.svg" style="width:50px;" alt="item">
                            </a>
                        </div>
                        <div class="text">Grocery & Staples</div>
                    </div>
                    <div class="col-4" style="padding: 10px;">
                        <div class="icon">
                            <a href="#"><img src="/Images/icon-1.svg" style="width:50px;" alt="item">
                            </a>
                        </div>
                        <div class="text"> Fruits and Vegetables</div>
                    </div>
                </div>
            </div>
            <div class="more-category">
                <h5> <i class="bi bi-border-all"></i> More Categories</h5>
            </div>
        </div>
    </div>

 <!--Hidden Mobile Links-->
    <div class="pop-up-list">
        <div class="pop-up-backgro">
            <ul style="list-style-type: none;" id="hidden-pages-list">
                <li> <a href="#">Home</a></li>
                <li> <a href="#">Home</a></li>
                <li> <a href="#">Home</a></li>
                <li><a href="#" class="list-pages-hidden">Pages<i class="bi bi-chevron-down"></i>
                      
                        <ul class="hidden-list-mobile">
                            <li>Account</li>
                            <li>Abaut Us</li>
                            <li>Shop Grid</li>
                            <li>Single Product View</li>
                            <li>Checkout</li>
                            <li>Product Request</li>
                            <li>Order Placed</li>
                            <li>Bill Slip</li>
                            <li>Sing In</li>
                            <li>Sing Up</li>
                            <li>Forgot Password</li>
                            <li>Contact Us</li>
                        </ul>
                    

                    </a>
                </li>
                <li>
                <a href="#" class="blog-list-mobile">Blog <i class="bi bi-chevron-down"></i>
                        <ul class="togle-blog-list-mobile">
                            <li>blos</li>
                            <li>sas</li>
                        </ul>
                    </a>
                </li>  
            </ul>
        </div>
    </div>

<!--Hidden Search POP UP-->
<div class="hidden-search-pop-up">
        <div class="search-wrapper">
            <div class="exit-search">X </div>
            <div class="search-headline">
                <input type="search" placeholder="Search for products...">
            </div>
            <div class="search-items">
                <div class="row">
                    <div class="search-item">
                        <div class="search-item-img">
                            <img src="/Images/icon-1.svg">
                        </div>
                        <div class="search-text"> Fruits and Vegetables
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="search-item">
                        <div class="search-item-img">
                            <img src="/Images/icon-2.svg">
                        </div>
                        <div class="search-text">
                            Grocery & Staples 
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="search-item">
                        <div class="search-item-img">
                            <img src="/Images/icon-3.svg">
                        </div>
                        <div class="search-text">
                            Dairy & Eggs 
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="search-item">
                        <div class="search-item-img">
                            <img src="/Images/icon-4.svg">
                        </div>
                        <div class="search-text">
                            Beverages 
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="search-item">
                        <div class="search-item-img">
                            <img src="/Images/icon-7.svg">
                        </div>
                        <div class="search-text">
                            Noodles & Sauces 
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="search-item">
                        <div class="search-item-img">
                            <img src="/Images/icon-5.svg">
                        </div>
                        <div class="search-text">
                            Snacks
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="search-item">
                        <div class="search-item-img">
                            <img src="/Images/icon-6.svg">
                        </div>
                        <div class="search-text">
                            Home Care
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- <i class="bi bi-border-all"></i>
    <i class="bi bi-box-seam"></i>
    <i class="bi bi-heart"></i>
    <i class="bi bi-cash-stack"></i>
    <i class="bi bi-geo-alt loc-logo"></i> -->
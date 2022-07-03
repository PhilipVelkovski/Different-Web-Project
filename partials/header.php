<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/favicon/Logo.png">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
       
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
                            <img src="/Images/logo_gambo.svg" style="width:125px;" alt="logo-image"></a>
                    </div>
                    
                    <div class="mobile-logo">
                    <a href="#">
                        <img src="/Images/Small-screen-gambo-logo.png" style="width: 40px;" alt="logo-image"></a>
                    </div>
                    
                    <div class="locatin-wrapper">
                        <a class="location-btn"><i class="bi bi-geo-alt location-logo"></i> Gurugram <i
                                class="bi bi-chevron-compact-down"></i></a>
                        <br>
                        <ul class="toggle-loc-list">
                            <li> <i class="bi bi-geo-alt location-logo"></i> Gurugram</li>
                            <li><i class="bi bi-geo-alt location-logo"></i> Skopje</li>
                            <li><i class="bi bi-geo-alt location-logo"></i> Mumbai</li>
                            <li><i class="bi bi-geo-alt location-logo"></i> Kolkata</li>
                            <li> <i class="bi bi-geo-alt location-logo"></i> Ludhiana</li>
                            <li><i class="bi bi-geo-alt location-logo"></i> Hyderbad</li>
                            <li><i class="bi bi-geo-alt location-logo"></i> New Delih</li>
                            <li><i class="bi bi-geo-alt location-logo"></i> Bangaluru</li>
                            <li><i class="bi bi-geo-alt location-logo"></i> Chandigraph</li>

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
                    <input type="text" placeholder="Search for products.." id="search-bar">
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
                           <div id="usernamevalue"></div> <i class="bi bi-chevron-compact-down"></i>
                        </a> <br>
                        <ul class="toggle-user-list">

                            <li style="border-bottom: 1px solid rgb(177, 177, 177);"> <button onclick="lights()">night Mode</button></li>
                            <li> <i class="bi bi-border-all"></i>  <a href="/account.php"> Dashboard</a></li>
                            <li><i class="bi bi-box-seam"></i><a href="/order.php"> My Orders</a></li>
                            <li><i class="bi bi-heart"></i><a href="/wishlist.php"> My wishlist</a></li>
                            <li><i class="bi bi-cash-stack"></i><a href="/wallet.php"> My Wallet</a></li>
                            <li><i class="bi bi-geo-alt loc-logo"></i><a href="/myaddress.php"> My Address</a></li>
                            <li><i class="bi bi-gift"></i><a href="/offers.php"> Offers</a></li>
                            <li><i class="bi bi-info-circle"></i><a href="/faq.php"> Faq</a></li>
                            <li><i class="bi bi-lock"></i><a href="/singin.php"> Logout</a></li>
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
            <div class="col col-lg-8 col-md-6 hide-this-links">
                <div class="head-botoom-links">
                    <ul>
                        <li><a href="/index.php">Home</a></li>
                        <li><a href="/shopgrid.php">New Product</a></li>
                        <li><a href="/shopgrid.php">Featured Products</a></li>
                        <li class="pages-list-wrapper" >Pages <i class="bi bi-chevron-down"></i>
                     <div class="pages-list">
                     <ul>
                            
                     <li><a href="/account.php">Account</a></li>
                            <li><a href="/aboutus.php">Abaut Us</a></li>
                            <li><a href="/shopgrid.php">Shop Grid</a></li>
                            <li><a href="/singleproduct.php">Single Product View</a></li>
                            <li><a href="/checkout.php">Checkout</a></li>
                            <li><a href="/productrequest.php">Product Request</a></li>
                            <li><a href="/order.php">Order Placed</a></li>
                            <li><a href="/bill.php">Bill Slip</a></li>
                            <li><a href="/singin.php">Sing In</a></li>
                            <li><a href="/singup.php">Sing Up</a></li>
                            <li><a href="/forgotpass.php">Forgot Password</a></li>
                            <li><a href="/contact.php">Contact Us</a></li>
                        </ul>
                     </div>   
                    </li>
                        <li class="blog-list">Blog <i class="bi bi-chevron-down"></i>
                        <div class="togle-blog-list">
                            <ul>
                               <li><a href="/contact.php">Our Blog</a></li>
                               <li><a href="/contact.php">Blog Detail View</a></li>
                           </ul>
                        </div>
                       
                        </li>
                        <li><a href="/contact.php"> Contact Us</a></li>
                    </ul>
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
            <ul style="list-style-type: none; padding:0;" id="hidden-pages-list">
                <li> <a href="#">Home</a></li>
                <li> <a href="#">Home</a></li>
                <li> <a href="#">Home</a></li>
                <li><a href="#" class="list-pages-hidden">Pages<i class="bi bi-chevron-down"></i> 
                        <ul class="hidden-list-mobile">
                        <li><a href="/account.php">Account</a></li>
                            <li><a href="/aboutus.php">Abaut Us</a></li>
                            <li><a href="/shopgrid.php">Shop Grid</a></li>
                            <li><a href="#">Single Product View</a></li>
                            <li><a href="/checkout.php">Checkout</a></li>
                            <li><a href="/productrequest.php">Product Request</a></li>
                            <li><a href="/order.php">Order Placed</a></li>
                            <li><a href="/bill.php">Bill Slip</a></li>
                            <li><a href="/singin.php">Sing In</a></li>
                            <li><a href="/singup.php">Sing Up</a></li>
                            <li><a href="/forgotpass.php">Forgot Password</a></li>
                            <li><a href="/contact.php">Contact Us</a></li>
                        </ul>
                    

                    </a>
                </li>
                <li>
                <a href="#" class="blog-list-mobile"> Blog <i class="bi bi-chevron-down"></i>
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
  <!-- CART POP UP -->

  <div class="hide-cart-pop-up">
        <div class="cart-category">
            <div class="cart-category-wrapper">
                <div class="cart-headline">
                    <div class="cart-text">
                        My cart <span>(2 items)</span>
                    </div>
                    <span id="exit-cart-pop-up">X</span>
                </div>
                <div class="cart-price">
                    <div class="cart-price-text">
                        Gambo Super Market
                        <span>$34</span>
                    </div>
                    <div class="cart-price-text">
                        Delivery Charges
                        <span>$4</span>
                    </div>

                </div>
                <div class="cart-products">
                    <div class="inside-product">
                        <div class="cart-img">
                            <img src="/Images/pick-five.jpg" alt="strawberry">
                            <div class="discount-offer">6% OFF</div>
                        </div>
                        <div class="cart-product-text">
                            <div class="offer-text">
                                <span id="title-offer">Product Title Here</span>
                                <span id="exit-cart-offer">X</span>
                            </div>
                            <div class="cart-pick-offer">
                                <div class="radio-btn-cart">
                                    <label for="radio">
                                    <input type="radio" id="radio" name="radios" value="all">0.54</label>
                                </div>
                                <div class="radio-btn-cart">
                                    <label for="radio">
                                    <input type="radio" id="radio" name="radios" value="all" >5kg</label>
                                </div>
                                <div class="radio-btn-cart">
                                    <label for="radio"><input type="radio" id="radio" name="radios" value="all" >20kg</label>
                                </div>
                                <div class="radio-btn-cart">
                                    <label for="radio">
                                    <input type="radio" id="radio" name="radios" value="all" >60kg
                                    </label>
                                </div>
                            </div>
                            <div class="add-products">
                                <div class="counter">
                                    <input type="button" id="cart-minus" value="-">
                                    <input type="text" id="cart-quantity" value="1">
                                    <input type="button" id="cart-add" value="+">
                                </div>
                                <div class="cart-price-inside">
                                    $10 
                                    <span>$15</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart-products" style="height: 230px;">
                    <div class="inside-product">
                        <div class="cart-img">
                            <img src="/Images/pick-three.jpg" alt="strawberry">
                            <div class="discount-offer">6% OFF</div>
                        </div>
                        <div class="cart-product-text">
                            <div class="offer-text">
                                <span id="title-offer">Product Title Here</span>
                                <span id="exit-cart-offer">X</span>
                            </div>
                            <div class="cart-pick-offer">
                                <div class="radio-btn-cart">
                                    <input type="radio" id="radio1" name="radios" value="all" checked>
                                    <label for="radio1">0.54</label>
                                </div>
                                <div class="radio-btn-cart">
                                    <input type="radio" id="radio2" name="radios" value="all" checked>
                                    <label for="radio2">5kg</label>
                                </div>
                                <div class="radio-btn-cart">
                                    <input type="radio" id="radio3" name="radios" value="all" checked>
                                    <label for="radio3">20kg</label>
                                </div>
                                <div class="radio-btn-cart">
                                    <input type="radio" id="radio4" name="radios" value="all" checked>
                                    <label for="radio4">60kg</label>
                                </div>
                            </div>
                            <div class="add-products">
                                <div class="counter">
                                    <input type="button" id="cart-minus" value="-">
                                    <input type="number" id="cart-quantity" value="1">
                                    <button onclick="add()" id="cart-add" >+</button>
                                </div>
                                <div class="cart-price-inside">
                                    $10 
                                    <span>$15</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart-savings">
                    <div class="save-text-one">
                        Total Saving <span>$11</span>
                    </div>
                    
                    <div class="save-text-two">
                        Total <span>$35</span>
                    </div>
                </div>
                <div class="cart-checkout">
                    <div class="promo-code-ques">Have a promocode?</div>
                    <div class="check-out-btn">
                        <button>Proceed to Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
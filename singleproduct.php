<?php
$page_title = "Gambo - Single product ";
include 'partials/header.php';
?>
<div class="wrapper">
    <div style="margin-top:122px;">
        <div style=" background: #fff; border-top: 1px solid #efefef; padding: 20px 0;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav style="display:flex;">
                            <span style="color:grey;">Home/</span><span>User Dashboard</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="oppedn-product">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="product-slides">
                                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff; width:100%;" 
                                    class="swiper mySwiper2">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="/Images/big-1.jpg" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="/Images/big-2.jpg" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="/Images/big-3.jpg" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="/Images/big-4.jpg" />
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                                <div thumbsSlider="" class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="/Images/big-2.jpg" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="/Images/big-3.jpg" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="/Images/big-4.jpg" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="/Images/big-1.jpg" />
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="review-product-wrapper">
                                <h2>Grape Fruit Turkey</h2>
                                <div class="stock">
                                    <div class="stock-text">

                                        <p>Product <span style="color:grey;"> No.12345</span></p>
                                    </div>
                                    <div class="stock-text-2">
                                        <p> Available <span style="color:grey;"> (Instock)</span></p>
                                    </div>
                                </div>
                                <div class="product-select-radio">
                                    <ul class="product-select-btns" style="text-align: start;">
                                        <li>
                                            <input type="radio" id="radio1" name="radios" value="all" checked>
                                            <label for="radio1">500g</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="radio2" name="radios" value="all" checked>
                                            <label for="radio2">1kg</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="radio3" name="radios" value="all" checked>
                                            <label for="radio3">2kg</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="radio4" name="radios" value="all" checked>
                                            <label for="radio4">5kg</label>
                                        </li>
                                    </ul>
                                </div>
                                <p id="txt-prod">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                                    vulputate, purus
                                    at tempor blandit, nulla
                                    felis dictum eros, sed volutpat odio sapien id lectus. Cras mollis massa ac
                                    congue posuere. Fusce viverra
                                    mauris vel magna pretium aliquet.
                                    Nunc tincidunt, velit id tempus tristique, velit dolor hendrerit nibh, at
                                    scelerisque neque mauris sed ex.
                                </p>

                                <div class="review-add-wrapper">
                                    <div class="review-price">
                                        <ul class="product-diss">
                                            <li>Discount Price <span style="color:grey;">- $15</span>

                                            </li>
                                            <li><span style="color:grey; text-decoration: line-through;"> MRP Price
                                                    $18</span></li>
                                        </ul>
                                        <ul class="product-btns">
                                            <li>
                                                <div class="products-bts-add"  style=" border: 1px solid; margin-right:20px;">
                                                    <input id ="minus" type="button" value="-">
                                                    <input id ="sume" type="number" value="1">
                                                    <input id ="plus" type="button" value="+">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="single-heart-wrapper">
                                                    <span><i class="bi bi-heart"></i></span>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="review-btns">
                                            <li> <button type="submit" id="addcart">Add to cart</button></li>
                                            <li style="margin-left: 60px;"> <a href="#" id="order-ittem">Order
                                                    now</a></li>
                                        </ul>
                                    </div>
                                </div> <br>
                                <div class="review-prices">
                                    <ul>
                                        <li>
                                            <div class="its">
                                                <div class="its-icon">
                                                    <i class="bi bi-currency-dollar"></i>
                                                </div>
                                                <div class="its-text">
                                                    <span>Lowest Price Guaranteed</span>
                                                    <p>Get difference refunded if you find it cheaper anywhere else.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="its">
                                                <div class="its-icon">
                                                    <i class="bi bi-terminal-plus"></i>
                                                </div>
                                                <div class="its-text">
                                                    <span>Easy Returns & Refunds</span>
                                                    <p>Return products at doorstep and get refund in seconds.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div style="margin-top:10px">
            <div class="row">
                <div class="col-lg-4 clo-md-12">
                    <div class="more-like-this-wrapper">
                        <div class="morelikethis-title"> More Like this</div>
                        <div class="morethis-body">
                            <div class="cart-products">
                                <div class="inside-product">
                                    <div class="cart-img">
                                        <img src="/Images/pick-five.jpg" alt="strawberry">
                                        <div class="discount-offer-single">6% OFF</div>
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
                                            <div class="counter-single">
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
                            <div class="cart-products">
                                <div class="inside-product">
                                    <div class="cart-img">
                                        <img src="/Images/pick-one.jpg" alt="strawberry">
                                        <div class="discount-offer-single">6% OFF</div>
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
                                            <div class="counter-single">
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
                            <div class="cart-products">
                                <div class="inside-product">
                                    <div class="cart-img">
                                        <img src="/Images/pick-three.jpg" alt="strawberry">
                                        <div class="discount-offer-single">6% OFF</div>
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
                                            <div class="counter-single">
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
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 clo-md-12">
                    <div class="details-wrapper">
                        <div class="details-title">
                            Product Details
                        </div>
                        <div class="detailes-body">
                            <div class="details-text">
                                <p>Description</p>
                                <span id="txtss">
                                    Lorem ips um dolor sit amet, consectetur adipiscing elit. Pellentesque posuere nunc
                                    in condimentum maximus. Integer interdum sem sollicitudin, porttitor felis in,
                                    mollis quam.
                                    Nunc gravida erat eu arcu interdum eleifend. Cras tortor
                                    velit, dignissim sit amet hendrerit sed, ultricies eget est. Donec eget urna sed
                                    metus dignissim cursus.

                                </span>
                            </div>
                            <div class="details-text">
                                <p>Benefits</p>
                                <span id="txtss">
                                    Aliquam nec nulla accumsan, accumsan nisl in, rhoncus sapien.
                                    In mollis lorem a porta congue.
                                    Sed quis neque sit amet nulla maximus dignissim id mollis urna.
                                    Cras non libero at lorem laoreet finibus vel et turpis.
                                    Mauris maximus ligula at sem lobortis congue.

                                </span>
                            </div>
                            <div class="details-text">
                                <p>How to Use</p>
                                <span id="txtss">
                                    The peeled, orange segments can be added to the daily fruit bowl, and its juice is a
                                    refreshing drink.

                                </span>
                            </div>
                            <div class="details-text">
                                <p>Seller</p>
                                <span id="txtss">
                                    Gambolthemes Pvt Ltd, Sks Nagar, Near Mbd Mall, Ludhana, 141001

                                </span>
                            </div>
                            <div class="details-text">
                                <p>Disclaimer</p>
                                <span id="txtss">
                                    Phasellus efficitur eu ligula consequat ornare. Nam et nisl eget magna aliquam
                                    consectetur. Aliquam quis tristique lacus. Donec eget nibh et quam maximus rutrum
                                    eget ut ipsum. Nam fringilla metus id dui sollicitudin, sit amet maximus sapien
                                    malesuada.

                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top:20px;">
             <div class="row">
             <div class="col-md-12">
                <div class="swiper mySwiper swiper-four">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-image">
                                    <a href="#">
                                        <img src="/Images/pick-five.jpg" alt="Карфиол">
                                    </a>
                                </div>
                                <div class="product-text">
                                    <div class="product-avalibility">Available (in stock)</div>
                                    <div class="product-title">Product Title Here</div>
                                    <div class="product-price">
                                        <span class="new-price">15$</span>
                                        <span class="old-price">20$</span>
                                    </div>
                                </div>
                                <div class="product-floating-items">
                                    <span class="discount-ammount">6% off</span>
                                    <span class="add-to-wishlist-icon"><i class="bi bi-heart"></i></span>
                                </div>
                                <div class="place-order">
                                    <div class="row quantity-item">
                                        <input type="button" id="lower" value="-">
                                        <input type="number" id="quantity" value="1">
                                        <input type="button" id="add-quan" value="+">

                                    </div>
                                    <div class="add-to-cart"><i class="bi bi-cart"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-image">
                                    <a href="#">
                                        <img src="/Images/pick-four.jpg" alt="Карфиол">
                                    </a>
                                </div>
                                <div class="product-text">
                                    <div class="product-avalibility">Available (in stock)</div>
                                    <div class="product-title">Product Title Here</div>
                                    <div class="product-price">
                                        <span class="new-price">15$</span>
                                        <span class="old-price">20$</span>
                                    </div>
                                </div>
                                <div class="product-floating-items">
                                    <span class="discount-ammount">6% off</span>
                                    <span class="add-to-wishlist-icon"><i class="bi bi-heart"></i></span>
                                </div>
                                <div class="place-order">
                                    <div class="row quantity-item">
                                        <input type="button" id="lower" value="-">
                                        <input type="number" id="quantity" value="1">
                                        <input type="button" id="add-quan" value="+">

                                    </div>
                                    <div class="add-to-cart"><i class="bi bi-cart"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-image">
                                    <a href="#">
                                        <img src="/Images/pick-three.jpg" alt="Карфиол">
                                    </a>
                                </div>
                                <div class="product-text">
                                    <div class="product-avalibility">Available (in stock)</div>
                                    <div class="product-title">Product Title Here</div>
                                    <div class="product-price">
                                        <span class="new-price">15$</span>
                                        <span class="old-price">20$</span>
                                    </div>
                                </div>
                                <div class="product-floating-items">
                                    <span class="discount-ammount">6% off</span>
                                    <span class="add-to-wishlist-icon"><i class="bi bi-heart"></i></span>
                                </div>
                                <div class="place-order">
                                    <div class="row quantity-item">
                                        <input type="button" id="lower" value="-">
                                        <input type="number" id="quantity" value="1">
                                        <input type="button" id="add-quan" value="+">

                                    </div>
                                    <div class="add-to-cart"><i class="bi bi-cart"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-image">
                                    <a href="#">
                                        <img src="/Images/pick-nine.jpg" alt="Карфиол">
                                    </a>
                                </div>
                                <div class="product-text">
                                    <div class="product-avalibility">Available (in stock)</div>
                                    <div class="product-title">Product Title Here</div>
                                    <div class="product-price">
                                        <span class="new-price">15$</span>
                                        <span class="old-price">20$</span>
                                    </div>
                                </div>
                                <div class="product-floating-items">
                                    <span class="discount-ammount">6% off</span>
                                    <span class="add-to-wishlist-icon"><i class="bi bi-heart"></i></span>
                                </div>
                                <div class="place-order">
                                    <div class="row quantity-item">
                                        <input type="button" id="lower" value="-">
                                        <input type="number" id="quantity" value="1">
                                        <input type="button" id="add-quan" value="+">

                                    </div>
                                    <div class="add-to-cart"><i class="bi bi-cart"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-image">
                                    <a href="#">
                                        <img src="/Images/pick-six.jpg" alt="Карфиол">
                                    </a>
                                </div>
                                <div class="product-text">
                                    <div class="product-avalibility">Available (in stock)</div>
                                    <div class="product-title">Product Title Here</div>
                                    <div class="product-price">
                                        <span class="new-price">15$</span>
                                        <span class="old-price">20$</span>
                                    </div>
                                </div>
                                <div class="product-floating-items">
                                    <span class="discount-ammount">6% off</span>
                                    <span class="add-to-wishlist-icon"><i class="bi bi-heart"></i></span>
                                </div>
                                <div class="place-order">
                                    <div class="row quantity-item">
                                        <input type="button" id="lower" value="-">
                                        <input type="number" id="quantity" value="1">
                                        <input type="button" id="add-quan" value="+">

                                    </div>
                                    <div class="add-to-cart"><i class="bi bi-cart"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-image">
                                    <a href="#">
                                        <img src="/Images/pick-seven.jpg" alt="Карфиол">
                                    </a>
                                </div>
                                <div class="product-text">
                                    <div class="product-avalibility">Available (in stock)</div>
                                    <div class="product-title">Product Title Here</div>
                                    <div class="product-price">
                                        <span class="new-price">15$</span>
                                        <span class="old-price">20$</span>
                                    </div>
                                </div>
                                <div class="product-floating-items">
                                    <span class="discount-ammount">6% off</span>
                                    <span class="add-to-wishlist-icon"><i class="bi bi-heart"></i></span>
                                </div>
                                <div class="place-order">
                                    <div class="row quantity-item">
                                        <input type="button" id="lower" value="-">
                                        <input type="number" id="quantity" value="1">
                                        <input type="button" id="add-quan" value="+">

                                    </div>
                                    <div class="add-to-cart"><i class="bi bi-cart"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-image">
                                    <a href="#">
                                        <img src="/Images/pick-two.jpg" alt="Карфиол">
                                    </a>
                                </div>
                                <div class="product-text">
                                    <div class="product-avalibility">Available (in stock)</div>
                                    <div class="product-title">Product Title Here</div>
                                    <div class="product-price">
                                        <span class="new-price">15$</span>
                                        <span class="old-price">20$</span>
                                    </div>
                                </div>
                                <div class="product-floating-items">
                                    <span class="discount-ammount">6% off</span>
                                    <span class="add-to-wishlist-icon"><i class="bi bi-heart"></i></span>
                                </div>
                                <div class="place-order">
                                    <div class="row quantity-item">
                                        <input type="button" id="lower" value="-">
                                        <input type="number" id="quantity" value="1">
                                        <input type="button" id="add-quan" value="+">

                                    </div>
                                    <div class="add-to-cart"><i class="bi bi-cart"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-image">
                                    <a href="#">
                                        <img src="/Images/pick-one.jpg" alt="Карфиол">
                                    </a>
                                </div>
                                <div class="product-text">
                                    <div class="product-avalibility">Available (in stock)</div>
                                    <div class="product-title">Product Title Here</div>
                                    <div class="product-price">
                                        <span class="new-price">15$</span>
                                        <span class="old-price">20$</span>
                                    </div>
                                </div>
                                <div class="product-floating-items">
                                    <span class="discount-ammount">6% off</span>
                                    <span class="add-to-wishlist-icon"><i class="bi bi-heart"></i></span>
                                </div>
                                <div class="place-order">
                                    <div class="row quantity-item">
                                        <input type="button" id="lower" value="-">
                                        <input type="number" id="quantity" value="1">
                                        <input type="button" id="add-quan" value="+">

                                    </div>
                                    <div class="add-to-cart"><i class="bi bi-cart"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
             </div>

        </div>
    </div>
</div>






<?php

include 'partials/footer.php';
?>
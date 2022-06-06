<?php 
$page_title = "Gambo - Shop Grid";
include 'partials/header.php';

?>
<div class="wrapper">
    <div style="margin-top:122px; padding-bottom: 50px;">
        <div style=" background: #fff; border-top: 1px solid #efefef; padding: 20px 0;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav style="display:flex;">
                            <span style="color:grey;">Home/</span><span>Vegetables & Fruits</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="container top-featured-products mt-3">
    <div class="shopgrid-headline">
        <div class="shopgrid-text">Vegetables & Fruits</div>
        <div class="shopgrid-buttons">
            <select class="form-select form-select-sm mb-3" style="margin-right:12%;"
                aria-label=".form-select-lg example">
                <option selected>Popularity</option>
                <option value="7">Popularity</option>
                <option value="1">Price - Low to High</option>
                <option value="2">Price - High to Low</option>
                <option value="3">Alphabetical</option>
                <option value="4">Saving - High to Low</option>
                <option value="5">Saving - Low to High</option>
                <option value="6">% Off - High to Low</option>

            </select>
            <div class="fillter-btn">
                FILTERS
            </div>
        </div>

    </div>
    <div class="products-wraper row">
        <div class=" col-md-3 col-xs-12">
            <div class="product">
                <div class="product-image">
                    <a href="#">
                        <img src="/Images/pick-one.jpg" alt="Карфиол">
                    </a>
                </div>
                <div class="product-text">
                    <div class="product-avalibility">Available (in stock)</div>
                    <div class="product-title">Јајца</div>
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
                    <div class="quantity-item">
                    <input type="button" id="lower" value="-">
                        <input type="text" id="quantity" value="1">
                        <input type="button" id="add-quan" value="+">

                    </div>
                    <div class="add-to-cart"><i class="bi bi-cart"></i></div>
                </div>
            </div>

        </div>
        <div class=" col-md-3 col-xs-12">
            <div class="product">
                <div class="product-image">
                    <a href="#">
                        <img src="/Images/pick-two.jpg" alt="eggs">
                    </a>
                </div>
                <div class="product-text">
                    <div class="product-avalibility">Available (in stock)</div>
                    <div class="product-title">Јајца</div>
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
                    <div class="quantity-item">
                    <input type="button" id="lower" value="-">
                        <input type="text" id="quantity" value="1">
                        <input type="button" id="add-quan" value="+">

                    </div>
                    <div class="add-to-cart"><i class="bi bi-cart"></i></div>
                </div>
            </div>

        </div>
        <div class=" col-md-3 col-xs-12">
            <div class="product">
                <div class="product-image">
                    <a href="#">
                        <img src="/Images/pick-three.jpg" alt="eggs">
                    </a>
                </div>
                <div class="product-text">
                    <div class="product-avalibility">Available (in stock)</div>
                    <div class="product-title">Јајца</div>
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
                    <div class=" quantity-item">
                    <input type="button" id="lower" value="-">
                        <input type="text" id="quantity" value="1">
                        <input type="button" id="add-quan" value="+">

                    </div>
                    <div class="add-to-cart"><i class="bi bi-cart"></i></div>
                </div>
            </div>

        </div>
        <div class=" col-md-3 col-xs-12">
            <div class="product">
                <div class="product-image">
                    <a href="#">
                        <img src="/Images/pick-four.jpg" alt="eggs">
                    </a>
                </div>
                <div class="product-text">
                    <div class="product-avalibility">Available (in stock)</div>
                    <div class="product-title">Јајца</div>
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
                    <div class="quantity-item">
                    <input type="button" id="lower" value="-">
                        <input type="text" id="quantity" value="1">
                        <input type="button" id="add-quan" value="+">

                    </div>
                    <div class="add-to-cart"><i class="bi bi-cart"></i></div>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="container top-featured-products mt-5">

    <div class="products-wraper row">
        <div class=" col-md-3 col-xs-12">
            <div class="product">
                <div class="product-image">
                    <a href="#">
                        <img src="/Images/pick-one.jpg" alt="Карфиол">
                    </a>
                </div>
                <div class="product-text">
                    <div class="product-avalibility">Available (in stock)</div>
                    <div class="product-title">Јајца</div>
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
                    <div class="quantity-item">
                    <input type="button" id="lower" value="-">
                        <input type="text" id="quantity" value="1">
                        <input type="button" id="add-quan" value="+">

                    </div>
                    <div class="add-to-cart"><i class="bi bi-cart"></i></div>
                </div>
            </div>

        </div>
        <div class=" col-md-3 col-xs-12">
            <div class="product">
                <div class="product-image">
                    <a href="#">
                        <img src="/Images/pick-two.jpg" alt="eggs">
                    </a>
                </div>
                <div class="product-text">
                    <div class="product-avalibility">Available (in stock)</div>
                    <div class="product-title">Јајца</div>
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
                    <div class=" quantity-item">
                    <input type="button" id="lower" value="-">
                        <input type="text" id="quantity" value="1">
                        <input type="button" id="add-quan" value="+">

                    </div>
                    <div class="add-to-cart"><i class="bi bi-cart"></i></div>
                </div>
            </div>

        </div>
        <div class=" col-md-3 col-xs-12">
            <div class="product">
                <div class="product-image">
                    <a href="#">
                        <img src="/Images/pick-three.jpg" alt="eggs">
                    </a>
                </div>
                <div class="product-text">
                    <div class="product-avalibility">Available (in stock)</div>
                    <div class="product-title">Јајца</div>
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
                    <div class=" quantity-item">
                    <input type="button" id="lower" value="-">
                        <input type="text" id="quantity" value="1">
                        <input type="button" id="add-quan" value="+">

                    </div>
                    <div class="add-to-cart"><i class="bi bi-cart"></i></div>
                </div>
            </div>

        </div>
        <div class=" col-md-3 col-xs-12">
            <div class="product">
                <div class="product-image">
                    <a href="#">
                        <img src="/Images/pick-four.jpg" alt="eggs">
                    </a>
                </div>
                <div class="product-text">
                    <div class="product-avalibility">Available (in stock)</div>
                    <div class="product-title">Јајца</div>
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
                    <div class=" quantity-item">
                    <input type="button" id="lower" value="-">
                        <input type="text" id="quantity" value="1">
                        <input type="button" id="add-quan" value="+">

                    </div>
                    <div class="add-to-cart"><i class="bi bi-cart"></i></div>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="container top-featured-products mt-5">

    <div class="products-wraper row">
        <div class=" col-md-3 col-xs-12">
            <div class="product">
                <div class="product-image">
                    <a href="#">
                        <img src="/Images/pick-one.jpg" alt="Карфиол">
                    </a>
                </div>
                <div class="product-text">
                    <div class="product-avalibility">Available (in stock)</div>
                    <div class="product-title">Јајца</div>
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
                    <div class=" quantity-item">
                    <input type="button" id="lower" value="-">
                        <input type="text" id="quantity" value="1">
                        <input type="button" id="add-quan" value="+">

                    </div>
                    <div class="add-to-cart"><i class="bi bi-cart"></i></div>
                </div>
            </div>

        </div>
        <div class=" col-md-3 col-xs-12">
            <div class="product">
                <div class="product-image">
                    <a href="#">
                        <img src="/Images/pick-two.jpg" alt="eggs">
                    </a>
                </div>
                <div class="product-text">
                    <div class="product-avalibility">Available (in stock)</div>
                    <div class="product-title">Јајца</div>
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
                    <div class=" quantity-item">
                    <input type="button" id="lower" value="-">
                        <input type="text" id="quantity" value="1">
                        <input type="button" id="add-quan" value="+">

                    </div>
                    <div class="add-to-cart"><i class="bi bi-cart"></i></div>
                </div>
            </div>

        </div>
        <div class=" col-md-3 col-xs-12">
            <div class="product">
                <div class="product-image">
                    <a href="#">
                        <img src="/Images/pick-three.jpg" alt="eggs">
                    </a>
                </div>
                <div class="product-text">
                    <div class="product-avalibility">Available (in stock)</div>
                    <div class="product-title">Јајца</div>
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
                    <div class=" quantity-item" id="counter">
                    <input type="button" class="lower" id="lower" value="-">
                        <input type="text" class="quantity" id="quantity" value="1">
                        <input type="button" class="add-quan" id="add-quan" value="+">

                    </div>
                    <div class="add-to-cart"><i class="bi bi-cart"></i></div>
                </div>
            </div>

        </div>
        <div class=" col-md-3 col-xs-12">
            <div class="product">
                <div class="product-image">
                    <a href="#">
                        <img src="/Images/pick-four.jpg" alt="eggs">
                    </a>
                </div>
                <div class="product-text">
                    <div class="product-avalibility">Available (in stock)</div>
                    <div class="product-title">Јајца</div>
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
                    <div class=" quantity-item">
                    <input type="button" class="lower" id="lower" value="-">
                        <input type="text" class="quantity" id="quantity" value="1">
                        <input type="button" class="add-quan" id="add-quan" value="+">
                    </div>
                    <div class="add-to-cart"><i class="bi bi-cart"></i></div>
                </div>
            </div>

        </div>

    </div>
    <div class="show-more-wrapper">
        <button class="show-more-btn" onclick="window.location.href = '#';">Show More</button>
    </div>
    </div>
</section>

<div class="hide-fillter-pop-up">
    <div class="filter-category ">
        <div class="fillter-category-wrapper">
            <div class="filter-headline">Filters <span id="exit-filter" style="margin-right: 11px;">X</span></div>
            <div class="filter-product-text">Categories</div>
            <div class="filter-product">
                <ul>
                    <li class="radio-button "> <input type="radio" id="radio1" name="radios" value="all" checked>
                        <label for="radio1">All</label>
                    </li>
                    <li class="radio-button">
                        <input type="radio" id="radio2" name="radios" value="false">
                        <label for="radio2">Vegetables & Fruits</label>
                    </li>
                    <li class="radio-button">
                        <input type="radio" id="radio3" name="radios" value="false">
                        <label for="radio3">Grocery & Staples</label>
                    </li>
                    <li class="radio-button">
                        <input type="radio" id="radio4" name="radios" value="false">
                        <label for="radio4">Dairy & Eggs</label>
                    </li>
                    <li class="radio-button">
                        <input type="radio" id="radio5" name="radios" value="false">
                        <label for="radio5">Beverages</label>
                    </li>
                    <li class="radio-button">
                        <input type="radio" id="radio6" name="radios" value="false">
                        <label for="radio6">Snacks</label>
                    </li>
                    <li class="radio-button">
                        <input type="radio" id="radio7" name="radios" value="false">
                        <label for="radio7">Home Care</label>
                    </li>
                    <li class="radio-button">
                        <input type="radio" id="radio8" name="radios" value="false">
                        <label for="radio8">Noodles & Sauces</label>
                    </li>
                    <li class="radio-button">
                        <input type="radio" id="radio9" name="radios" value="false">
                        <label for="radio9">Personal Care</label>
                    </li>
                    <li class="radio-button">
                        <input type="radio" id="radio10" name="radios" value="false">
                        <label for="radio10">Pet Care</label>
                    </li>
                    <li class="radio-button">
                        <input type="radio" id="radio11" name="radios" value="false">
                        <label for="radio11">Mea & Seafood</label>
                    </li>
                    <li class="radio-button">
                        <input type="radio" id="radio12" name="radios" value="false">
                        <label for="radio12">Electronics</label>
                    </li>
                </ul>
            </div>
            <div class="filter-product-text">Brand</div>
            <div class="filter-product">
                <div class="search-bar-wrapper">
                    <input type="search" placeholder="Search by brand.." id="search-bar"><i
                        class="bi bi-search search-bar-icon"></i>

                </div>
                <ul>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Brand Name
                        </label>
                    </li>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Brand Name
                        </label>
                    </li>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Brand Name
                        </label>
                    </li>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Brand Name
                        </label>
                    </li>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Brand Name
                        </label>
                    </li>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Brand Name
                        </label>
                    </li>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Brand Name
                        </label>
                    </li>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Brand Name
                        </label>
                    </li>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Brand Name
                        </label>
                    </li>
                </ul>
            </div>

            <div class="filter-product-text">Price</div>
            <div class="filter-product">
                <ul>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Less than $2 <span>(9)</span>
                        </label>
                    </li>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            $2 to $5 <span>(8)</span>
                        </label>
                    </li>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            $20 to $15 <span>(5)</span>
                        </label>
                    </li>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            $12 to $5 <span>(8)</span>
                        </label>
                    </li>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            $6 to $12 <span>(4)</span>
                        </label>
                    </li>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            $2 to $22 <span>(8)</span>
                        </label>
                    </li>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            $10 to $12 <span>(2)</span>
                        </label>
                    </li>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            $2 to $7 <span>(5)</span>
                        </label>
                    </li>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            More than $25 <span>(25)</span>
                        </label>
                    </li>
                </ul>
            </div>

            <div class="filter-product-text">Discount</div>
            <div class="filter-product">
                <ul>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            2% - 5% <span>(25)</span>
                        </label>
                    </li>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            3% - 4% <span>(5)</span>
                        </label>
                    </li>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            22% - 15% <span>(2)</span>
                        </label>
                    </li>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            1% - 4% <span>(3)</span>
                        </label>
                    </li>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            23% - 15% <span>(5)</span>
                        </label>
                    </li>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            19% - 6% <span>(4)</span>
                        </label>
                    </li>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            2% - 12% <span>(5)</span>
                        </label>
                    </li>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            20% - 12% <span>(15)</span>
                        </label>
                    </li>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            29% - 40% <span>(5)</span>
                        </label>
                    </li>
                </ul>
            </div>
            <div class="filter-product-text">Pack Size</div>
            <div class="filter-product">
                <ul>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            1 pc
                        </label>
                    </li>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            1 pc approx. 400 to 600 gm
                        </label>
                    </li>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            1 pc approx. 500 to 800 gm
                        </label>
                    </li>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Combo 3 Items
                        </label>
                    </li>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Combo 4 Items
                        </label>
                    </li>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Combo 5 Items
                        </label>
                    </li>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            2 pcs
                        </label>
                    </li>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            100 g
                        </label>
                    </li>
                    <li>
                        <input class="form-check-input cstm-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            200 g
                        </label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php 
include 'partials/footer.php';

?>
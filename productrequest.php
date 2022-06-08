<?php

 $page_title = "Gambo - Product Request";
 include 'partials/header.php';
 ?>

<div class="wrapper">
    <div style="margin-top:122px; padding-bottom: 50px;">
        <div style=" background: #fff; border-top: 1px solid #efefef; padding: 20px 0;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav style="display:flex;">
                            <span style="color:grey;">Home/</span><span>Request Product</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="request-headline">

                    <h4>Request Product?</h4>
                    <i class="bi bi-basket-fill"></i>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="request-product">
                    <div class="product-text-search">
                        <input type="text" name="requestproduct" placeholder="Type Product" id="reqproduct">
                    </div>
                    <div class="product-submit">
                        <button type="submit">Request product</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="request-how-to">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="request-headline">

                        <h4>Request Product?</h4> <br>
                        <p>How Do I order for Request on Gambo</p>
                        <i class="bi bi-basket-fill"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-btns">
                        <div class="product-icon">T</div>
                        <div class="product-text">Type Product</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                <div class="product-btns">
                        <div class="product-icon"><i class="bi bi-cursor"></i></div>
                        <div class="product-text">Select Product</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                <div class="product-btns">
                        <div class="product-icon"><i class="bi bi-box"></i></div>
                        <div class="product-text">Request Order Product</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php
 include 'partials/footer.php';
 ?>
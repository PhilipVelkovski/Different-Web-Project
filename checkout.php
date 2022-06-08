<?php
$page_title = "Gambo - Checkout";
include 'partials/header.php';

?>
<div class="wrapper">
    <div style="margin-top:122px; padding-bottom: 50px;">
        <div style=" background: #fff; border-top: 1px solid #efefef; padding: 20px 0;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav style="display:flex;">
                            <span style="color:grey;">Home / </span> <span> Checkout</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="checkout">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="checckout-opptions">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span id="number">1</span> Phone Number Verification
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="checkout-text">
                                            <p>We need your phone number so we can inform you about any delay or
                                                problem.</p>
                                        </div>
                                        <div class="sendcoede">
                                            <p style="float: left;">4 digits code send your phone <strong
                                                    style="color:#f38c1f;">+918437176189</strong></p> <a href="#"
                                                id="editNum">Edit</a>
                                            <div class="enter-number">
                                                <div class="verify">
                                                    <input type="text" name="phone" id="phone"
                                                        placeholder="Phone Number">
                                                    <a href="#" id="sendcode">Send Code</a>
                                                </div>

                                            </div>
                                        </div> <br>
                                        <div class="enter-code">
                                            <input type="text" id="numone"> <input type="text" id="numone"> <input
                                                type="text" id="numone">
                                            <input type="text" id="numone"> <a href="#" id="next"> Next</a>
                                            <br>
                                            <a href="#" id="resend">Resend Code</a>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span id="number">2</span> Delivery Address
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <form>
                                        <div class=" mb-2">
                                        <input type="text" class="form-control cstm-lbl" id="exampleInputText" placeholder="">
                                        <label for="floatingInput">Name</label>
                                           </div>
                                            <div class="mb-4">
                                                <label for="exampleInputEmail1" class="form-label cstm-lbl">Email address</label>
                                                <input type="email" class="form-control cstm-lbl" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp">
                                                <div id="emailHelp" class="form-text">We'll never share your email with
                                                    anyone else.</div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1">
                                            </div>
                                            <div class="mb-3 form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <span id="number">3</span> Delivery Time & Date
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by
                                        default, until the collapse plugin adds the appropriate classes that we use to
                                        style each element. These classes control the overall appearance, as well as the
                                        showing and hiding via CSS transitions. You can modify any of this with custom
                                        CSS or overriding our default variables. It's also worth noting that just about
                                        any HTML can go within the <code>.accordion-body</code>, though the transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        <span id="number">4</span> Payment
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by
                                        default, until the collapse plugin adds the appropriate classes that we use to
                                        style each element. These classes control the overall appearance, as well as the
                                        showing and hiding via CSS transitions. You can modify any of this with custom
                                        CSS or overriding our default variables. It's also worth noting that just about
                                        any HTML can go within the <code>.accordion-body</code>, though the transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-5">
                    <div class="order">
                        <div class="order-title">Order Summary</div>
                        <div class="order-product">
                            <div class="order-img">    
                            <img src="/Images/pick-five.jpg" alt="offer">
                               <div class="discout-off">4% off</div>
                            </div>
                              <div class="order-text">
                                  <div class="orderd-title">Product offer here <span>X</span></div>
                                  <div class="order-price">
                                      $15 <span>$18</span>
                                  </div>
                              </div>
                        </div>
                        <div class="order-items">
                            <div class="order-product-text">Gambo Super Market</div>
                            <div class="order-product-text-1">$15</div>
                        </div>
                        <div class="order-items">
                            <div class="order-product-text">Delivery Charges</div>
                            <div class="order-product-text-1">$1</div>
                        </div>
                        <div class="order-items">
                            <div class="order-product-text">Total Saving</div>
                            <div class="order-product-text-1">$3</div>
                        </div>
                        <div class="total">
                            <div class="cena">Total</div>
                            <div class="cena-2">$16</div>
                        </div>
                        <div class="payment-secure"><i class="bi bi-lock"></i>Secure checkout</div>
                    </div>
                    <br>
                    <div class="promo">
                    <a href="#" >Have a promocode?</a>
                    </div>
                   
                    <div class="save-checkout">
                        <p><i class="bi bi-recycle"></i> 100% Replacement Guarantee</p>
                        <p><i class="bi bi-check-square"></i>100% Genuine Products</p>
                        <p><i class="bi bi-envelope-check"></i>Secure Payments</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include 'partials/footer.php';

?>
<?php
$page_title = "Gambo - Order Placed";
include 'partials/header.php';

?>
<div class="wrapper">
  <div style="margin-top:122px; padding-bottom: 50px;">
        <div style=" background: #fff; border-top: 1px solid #efefef; padding: 20px 0;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav style="display:flex;">
                            <span style="color:grey;">Home/</span><span>User Placed</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <dic class="col-lg-6 col-md-8">
            <div class="order-placed">
            <i class="bi bi-check-circle"></i>
            <h2>Order Successfully Placed</h2>
            <p>Thank you for your order! will received order timing - <span> (Today, 3.00PM - 5.00PM)</span></p>
        <div class="delivery">
            <div class="dilevery-title">
                <div class="delivery-icon"><i class="bi bi-send"></i></div>
                <h4>Your order will be sent to this address</h4>
            </div>
            
                <ul class="dilivery-adress">
                    <li>
                    <p><i class="bi bi-geo-alt" style="margin-top:2px;"></i>
                     Address: <span>#000, St 8, Sks Nagar, Near Pakhowal Road, Ldh, 141001</span>
                     </p>

                    <li>
                    <li>
                    <p><i class="bi bi-telephone"></i>
                    Phone Number: <span>#000, St 8, Sks Nagar, Near Pakhowal Road, Ldh, 141001</span>
                     </p>
                    </li>
                    <li>
                    <p><i class="bi bi-envelope"></i>
                    Email Address: <span>#000, St 8, Sks Nagar, Near Pakhowal Road, Ldh, 141001</span>
                     </p>
                    </li>
                    <li>
                    <p><i class="bi bi-credit-card-2-front"></i>
                    Payment Method: <span>#000, St 8, Sks Nagar, Near Pakhowal Road, Ldh, 141001</span>
                     </p>
                    </li>
                </ul>
                <div class="order-message">
                    <div class="msg">Stay Home <i class="bi bi-emoji-smile"></i></div>
                    <a href="#" class="msg-btn">invoice</a>
                </div>
                <div class="delivery-message">
                The payment of <span>$16 </span>  you'll make when the deliver arrives with your order.
                </div>
            
        </div>
        </div>
        </dic>
    </div>
</div>

<?php
include 'partials/footer.php';

?>
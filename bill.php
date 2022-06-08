<?php
$page_title = "Gambo - Bill Slip";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $page_title; ?></title>
    <link rel="icon" type="image/x-icon" href="/favicon/Logo.png">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link  rel="stylesheet"  href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

   
    <link rel="stylesheet" href="style.css">
    <script src="/js/jquery.min.js"></script>
</head>
<body>
    <div class="header container-fluid header-custom">
            <div class="col-lg-12">
                <div class="header-two">
                <div class="logo">
                    <a href="Index.php">
                        
                    <img src="/Images/logo_gambo.svg" alt="logo">
                    </a>
                </div>
                
                <div class="mobile-logo">
                    <a href="#">
                        <img src="/Images/Small-screen-gambo-logo.png" style="width: 40px;" alt="logo-image"></a>
                    </div>
                <div class="report">
                    <a href="#">Report Isue</a>
                </div>
                </div>
               
            </div>
    </div>
    
<div class="wrapper" style="margin-top:122px;">
   <div class="row justify-content-center">
        <dic class="col-lg-8 col-md-8 col-sm-8">
            <div class="bill-slip-wrapper">
                <div class="bill-items">
                    <h4>Items</h4>
                    <p>4 items</p>
                    <span>Apple 1kg, </span> 
                    <span>Paneer 1kg, </span> 
                    <span>Banana 2kg, </span> 
                    <span>Potato 3kg, </span> 
                </div>
                <div class="bill-delivery">
                     <h4>Delivery Address</h4>
                    <p>Home</p>
                    <span>A#0000, St No. 8, Shahid Karnail Singh Nagar, MBD Mall, Frozpur road, Ludhiana, 141001</span> 
                </div>
                <div class="bill-paymen" >
                    <h4>Payment</h4>
                    <p>Home</p>
                    <span style="float: left; font-size: 15px; color: gray;" >Subtotal</span> <span style="float: right; font-size: 15px; color: gray;">$15</span> <br>
                    <span style="float: left; font-size: 15px; color: gray;">Delivery Charges</span >  <span style="float: right; font-size: 15px; color: gray;">$1</span>
                    <div class="bill-Total">
                    <h3>Total</h3> <span style="float: right; font-size:20px; color: #f55d2c;    font-weight: 700;">16$</span>
                    </div>
                </div>
              
                <div class="bill-details">
                <h4>Delivery Details</h4>
                <p style="font-weight: 700; float:left; margin:0; padding-right: 5px;">Super Store </p> <span style="c#2b2f4c; float:lolor:eft;" >- Ludhiana -  </span> <span style=" color: #f55d2c; "> $26</span> <br>
                <span style=" font-size: 15px;color:#2b2f4c;">Order ID </span><span  style=" font-size: 15px;color:grey;">- ORDER1245638</span> <br>
                <span style=" font-size: 15px;color:#2b2f4c;">Items </span><span  style=" font-size: 15px;color:grey;">- 4</span> <br>
                <span style=" font-size: 15px;color:#2b2f4c;">Timing </span><span  style=" font-size: 15px;color:grey;">- 26 May 2020 , Tuesday, 3.00PM - 5.00PM</span> <br>
                </div>
                <div class="bill-option">
                    <h4>Payment Option</h4>
                    <p><i class="bi bi-check-circle"></i> Cash on Delivery</p>
                </div>
                <div class="bill-thanks">
                    <p style="float: left;">Thanks for Ordering</p> <button style="float: right; padding:11px;" onclick="window.print()">Print</button>
                </div>
            </div>
</div>
</div>
</div>
</body>
</html>
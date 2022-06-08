<?php 
 $page_title = " Gambo - Dashboard";
include 'partials/header.php';

?>
<div class="wrapper">
    <div style="margin-top:122px; padding-bottom: 50px;">
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
    <div class="user-dashboard">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="user-wrapper">
                        <div class="usr-img">
                            <img src="/Images/profile-img.jpg" alt="user-img">
                            <div class="img-add">
                                <input type="file" id="file">
                                <label for="file"><i class="bi bi-camera"></i></label>
                            </div>
                        </div>
                        <h4>Jhon Doe</h4>
                        <p>
                            +99999999
                            <a href="#" style="text-decoration: none; color: #2b2f4c;">
                                <i class="bi bi-pencil"></i>
                            </a>
                        </p>
                        <div class="points">
                            <img src="/Icons/Dollar.svg" alt="dollar">
                            Points: 20
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="left-tabs">
                        <div class="dash-links-left">
                            <a href="#" style="background-color:#f55d2c;" class="user-links"> <i class="bi bi-border-all"></i>   Overview</a>
                           <a href="#" class="user-links"><i class="bi bi-box"></i> My Orders</a>
                           
                           <a href="#" class="user-links"><i class="bi bi-gift"></i> My Rewards</a>
                           <a href="#" class="user-links"><i class="bi bi-wallet"></i> My Wallet</a>
                           <a href="#" class="user-links"><i class="bi bi-heart"></i> Shopping List</a>
                           <a href="#" class="user-links"><i class="bi bi-geo-alt"></i> My Address</a>
                           <a href="#" class="user-links"><i class="bi bi-box-arrow-right"></i> Logout</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="right-menu">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overviwe" style="height:40px;">
                                    <i style="float: left; font-size:14px; float: left; font-size: 23px; margin-right: 14px;" class="bi bi-border-all"></i> <h4>  Overview</h4>
                                </div>
                                <div class="text-welcome">
                                     <h2>Hi! Jhon Doe</h2>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="ovr-one">
                                    <div class="title-rwrd"> <h4>My Rewards</h4></div>
                                    <div class="rewards" style="padding:21px">
                                        <h2>6 Rewards</h2>
                                        <ul style="list-style:none;">
                                            <li><a href="#" class="small-reward">Won $2</a>  </li>
                                            <li><a href="#" class="small-reward">Won $2</a></li>
                                            <li><a href="#" class="small-reward">Won $2</a></li>
                                            <li><a href="#" class="small-reward-one">+More</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="#" id="links-rwrd">Rewards and details.. </a>
                            </div>
                            <div class="col-lg-6 col-md-12">
                            <div class="ovr-one">
                                    <div class="title-rwrd"> <h4>My Orders</h4></div>
                                    <div class="rewards" style="padding:21px">
                                        <h2>2 Recently Purchases</h2>
                                        <ul style="list-style:none;">
                                            <li style=" display: block !important; margin-right: 0 !important;">
                                                <div class="placed-order">
                                                    <div class="placed-title">
                                                        2 items <span><i class="bi bi-question-circle-fill"></i></span>
                                                    </div>
                                                    <div class="status-placed">On the way</div>
                                                    <p>$22</p>
                                                </div>
                                            </li>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <a href="#" id="links-rwrd">All orders..</a>
                            </div>
                            <div class="col-lg-12 col-md-12">
                            <div class="ovr-one">
                                    <div class="title-rwrd"> <h4>My Wallet</h4></div>
                                    <div class="rewards"id="this-one" style="padding:21px">
                                        <h2>Credits $100</h2>
                                        <ul  style="list-style:none; padding-top:10px;">
                                            <li><a href="#" class="wallet-links"><i class="bi bi-credit-card-2-front"></i> Payment Methods</a>  </li>
                                            <li><a href="#" class="wallet-links"><i class="bi bi-gift"></i> 3 Active offers</a></li>
                                            <li><a href="#" class="wallet-links"><i class="bi bi-cash-coin"></i>Points Earning</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="#" id="links-rwrd">Rewards and details.. </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
include 'partials/footer.php';
?>
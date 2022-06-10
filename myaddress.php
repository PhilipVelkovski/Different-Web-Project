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
                        <a href="/account.php" class="user-links"> <i class="bi bi-border-all"></i> Overview</a>
                            <a href="#" class="user-links"><i class="bi bi-box"></i> My Orders</a>

                            <a href="#" class="user-links"><i class="bi bi-gift"></i> My Rewards</a>
                            <a href="/wallet.php" class="user-links"><i class="bi bi-wallet"></i> My Wallet</a>
                            <a href="/wishlist.php" class="user-links"  ><i class="bi bi-heart"></i> Shopping List</a>
                            <a href="/myaddress.php" class="user-links" style="background-color:#f55d2c; color:white;"><i class="bi bi-geo-alt"></i> My Address</a>
                            <a href="/singin.php" class="user-links"><i class="bi bi-box-arrow-right"></i> Logout</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="right-menu">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overviwe" style="height:40px;">  
                                    <i style="float: left; font-size:14px; float: left; font-size: 23px; margin-right: 14px;"class="bi bi-geo-alt"></i> <h4> My Address</h4>
                                </div>
                            </div>
                            <div class="col-lg-12 col-mf-12">
                                <div class="addres-wrapper">
                                    <div class="adres-tittle">
                                        <h4>My Address</h4>

                                    </div>
                                    <div class="adres-body">
                                        <a class="addres-btn">Add New Address</a>
                                        <div class="adress-item">
                                            <div class="add-icon"><i class="bi bi-house-door"></i></div>
                                            <div class="add-place">
                                                <h4>Home</h4>
                                                <p>#0000, St No. 8, Shahid Karnail Singh Nagar, MBD Mall, Frozpur road, Ludhiana, 141001</p>
                                              <span><i class="bi bi-pencil-square"></i></span>  <span style="padding-left:20px;"><i class="bi bi-trash"></i></span>
                                            </div>

                                        </div>
                                        <div class="adress-item">
                                            <div class="add-icon"><i class="bi bi-house-door"></i></div>
                                            <div class="add-place">
                                                <h4>Home</h4>
                                                <p>#0000, St No. 8, Shahid Karnail Singh Nagar, MBD Mall, Frozpur road, Ludhiana, 141001</p>
                                              <span><i class="bi bi-pencil-square"></i></span>  <span style="padding-left:20px;"><i class="bi bi-trash"></i></span>
                                            </div>

                                        </div>
                                        <div class="adress-item">
                                            <div class="add-icon"><i class="bi bi-house-door"></i></div>
                                            <div class="add-place">
                                                <h4>Home</h4>
                                                <p>#0000, St No. 8, Shahid Karnail Singh Nagar, MBD Mall, Frozpur road, Ludhiana, 141001</p>
                                              <span><i class="bi bi-pencil-square"></i></span>  <span style="padding-left:20px;"><i class="bi bi-trash"></i></span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
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
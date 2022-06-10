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
                            <a href="/wallet.php" class="user-links" style="background-color:#f55d2c; color:white;"><i class="bi bi-wallet"></i> My Wallet</a>
                            <a href="/wishlist.php" class="user-links" ><i class="bi bi-heart"></i> Shopping List</a>
                            <a href="/myaddress.php" class="user-links"><i class="bi bi-geo-alt"></i> My Address</a>
                            <a href="/singin.php" class="user-links"><i class="bi bi-box-arrow-right"></i> Logout</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="right-menu">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overviwe" style="height:40px;">
                                    <i style="float: left; font-size:14px; float: left; font-size: 23px; margin-right: 14px;"
                                        class="bi bi-wallet"></i>
                                    <h4> My Wallet</h4>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="money-wrapper">
                                    <div class="money-body">
                                        <div class="money-icon">
                                            <img src="/Icons/money.svg" alt="#">
                                        </div>
                                        <span id="balc">My Balance</span>
                                        <h4>$120</h4>
                                        <span id="adds">Added : 8 May 2020</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="money-wrapper">
                                    <div class="money-body">
                                        <div class="money-icon">
                                            <img src="/Icons/business.svg" alt="#">
                                        </div>
                                        <span id="balc">My Balance</span>
                                        <h4>$120</h4>
                                        <span id="adds">Added : 8 May 2020</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">

                                <div class="col-lg-12 col-md-12">
                                    <div class="cash-wrapper">
                                        <div class="cash-title">
                                            <h4>Active Offers</h4>
                                        </div>
                                        <div class="active-offers-body">
                                            <div class="table-responsive">
                                                <table class="table ucp-table earning__table">
                                                    <thead class="thead-table">
                                                        <tr>
                                                            <th scope="col">Offers</th>
                                                            <th scope="col">Offer Code</th>
                                                            <th scope="col">Expires Date</th>
                                                            <th scope="col">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="Tbody">
                                                        <tr>
                                                            <td>15%</td>
                                                            <td>GAMBOCOUP15</td>
                                                            <td>31 May 2020</td>
                                                            <td><b class="activated">Activated</b></td>
                                                        </tr>
                                                        <tr>
                                                            <td>10%</td>
                                                            <td>GAMBOCOUP10</td>
                                                            <td>25 May 2020</td>
                                                            <td><b class="activated">Activated</b></td>
                                                        </tr>
                                                        <tr>
                                                            <td>25%</td>
                                                            <td>GAMBOCOUP25</td>
                                                            <td>20 May 2020</td>
                                                            <td><b class="activated">Activated</b></td>
                                                        </tr>
                                                        <tr>
                                                            <td>5%</td>
                                                            <td>GAMBOCOUP05</td>
                                                            <td>15 May 2020</td>
                                                            <td><b class="activated">Activated</b></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="history-wrapper">
                                     <div class="cash-title">
                                         <h4>History</h4>
                                     </div>
                                     <div class="lis-history">
                                         <ul>
                                             <li>
                                                 <div class="purches">
                                                     <div class="purches-itms">
                                                         <h4>Purchase</h4>
                                                         <p>Transaction ID <ins>GAMBO14255896</ins></p>
                                                         <span>6 May 2018, 12.56PM</span>
                                                     </div>
                                                     <div class="purches-price">
                                                         <span>-$25</span>
                                                         <a href="#">
                                                             View
                                                         </a>
                                                     </div>
                                                 </div>
                                             </li>
                                             <li>
                                             <div class="purches">
                                                     <div class="purches-itms">
                                                         <h4>Purchase</h4>
                                                         <p>Transaction ID <ins>GAMBO14255896</ins></p>
                                                         <span>6 May 2018, 12.56PM</span>
                                                     </div>
                                                     <div class="purches-price">
                                                         <span>-$25</span>
                                                         <a href="#">
                                                             View
                                                         </a>
                                                     </div>
                                                 </div>
                                             </li>
                                             <li>
                                             <div class="purches">
                                                     <div class="purches-itms">
                                                         <h4>Purchase</h4>
                                                         <p>Transaction ID <ins>GAMBO14255896</ins></p>
                                                         <span>6 May 2018, 12.56PM</span>
                                                     </div>
                                                     <div class="purches-price">
                                                         <span>-$25</span>
                                                         <a href="#">
                                                             View
                                                         </a>
                                                     </div>
                                                 </div>
                                             </li>
                                             <li>
                                             <div class="purches">
                                                     <div class="purches-itms">
                                                         <h4>Purchase</h4>
                                                         <p>Transaction ID <ins>GAMBO14255896</ins></p>
                                                         <span>6 May 2018, 12.56PM</span>
                                                     </div>
                                                     <div class="purches-price">
                                                         <span>-$25</span>
                                                         <a href="#">
                                                             View
                                                         </a>
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
        </div>
    </div>
</div>

<?php 
include 'partials/footer.php';
?>
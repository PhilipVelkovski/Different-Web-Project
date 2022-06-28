 <?php

$data = [
    [
        "img" => "/Images/offer-1.jpg"
    ],
    [
        "img" => "/Images/offer-1.jpg"
    ]

]

function renderProductCard(data) {
    echo "<div class=\"product-image-offers\" src= '. $data .'>";
} 
?>

<div class="product-image-offers">
                                <img src="/Images/offer-1.jpg" alt="eggs">
                                <div class="offers">
                                    <p>6% off</p>
                                    <div class="offer-title">Buy More save more</div>
                                    <span>Beverages</span>
                                </div>

                            </div> 
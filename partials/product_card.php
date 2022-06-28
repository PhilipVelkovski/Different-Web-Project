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
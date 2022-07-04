<?php
$TopFeaturedProducts = array(
  array("img" => "/Images/pick-five.jpg"),
  
  array("img" => "/Images/pick-four.jpg"),
  
  array("img" => "/Images/pick-three.jpg"),
  
  array("img" => "/Images/pick-nine.jpg"),
  
  array("img" => "/Images/pick-six.jpg"),
  
  array("img" => "/Images/pick-seven.jpg"),
  
  array("img" => "/Images/pick-two.jpg"),
  
  array("img" => "/Images/pick-one.jpg"),
);
$category_images = array(
  array("img" => "/Icons/icon-1.svg",
        "text" => "Vegetables & Fruits"),
  array("img" => "/Icons/icon-2.svg",
  "text" => "Grocery & Staples"),
  
  array("img" => "/Icons/icon-3.svg",
  "text" => "Dairy & Eggs"),

  array("img" => "/Icons/icon-4.svg",
  "text" => "Beverages"),
  
  array("img" => "/Icons/icon-5.svg",
  "text" => "Snacks"),
  
  array("img" => "/Icons/icon-6.svg",
  "text" => "Home Care"),
  
  array("img" => "/Icons/icon-7.svg",
  "text" => "Noodles & Sauces"),
  
  array("img" => "/Icons/icon-8.svg",
  "text" => "Personal Care"),
  
  array("img" => "/Icons/icon-9.svg",
  "text" => "Pet Care"),
  
  array("img" => "/Icons/icon-10.svg",
  "text" => "Meat & Seafood"),
  
  array("img" => "/Icons/icon-11.svg",
  "text" => "Electronics"),
);

$offer_imges = array(
    array("img" => "/Images/offer-1.jpg" ),
    array("img" => "/Images/offer-2.jpg" ),
    array("img" => "/Images/offer-3.jpg" ),
    array("img" => "/Images/offer-4.jpg" ),
    array("img" => "/Images/offer-5.jpg" ),
  );


function renderProductCard($offer_imges) {
  foreach($offer_imges as $image)
   { 
    echo "<div class = \"swiper-slide\">
            <div class=\"product-image-offers\">
              <img src=" . $image['img'] .">
                <div class = \"offers\"> <p>5% off</p> 
                <div class = \"offer-title\"> Buy Moress save more </div>
                <span>Beverages</span>
              </div> 
           </div> 
           <div class=\"shop-now-btn\"><a href=\"/\"> <span>Shop now</span></a></div>
        </div> ";
    }
   };

function generateCategoryIcons($category_images){
 foreach($category_images as $image){
  echo "<div class=\"swiper-slide slider-2\">
  <div class=\"category-item-image\">
  <img src=" . $image["img"] . " > 
  <div class=\"category-item-text\"> "
   .$image["text"]. "
    </div>  
  </div>
  </div>";
 }
};
function generateTopFeaturedProducts($TopFeaturedProducts){
  foreach($TopFeaturedProducts as $image){
     echo "
     <div class=\"swiper-slide\">
  <div class=\"product\">
    <div class=\"product-image\">
      <a href=\"#\">
        <img src=".$image["img"]. " alt=\"Карфиол\">
      </a>
    </div>
    <div class=\"product-text\">
      <div class=\"product-avalibility\">Available (in stock)</div>
      <div class=\"product-title\">Product Title Here</div>
      <div class=\"product-price\">
        <span class=\"new-price\">15$</span>
        <span class=\"old-price\">20$</span>
      </div>
      <div class=\"product-floating-items\">
        <span class=\"discount-ammount\">6% off</span>
        <span class=\"add-to-wishlist-icon\"><i class=\"bi bi-heart\"></i></span>
      </div>
    </div>

    <div class=\"place-order\">
      <div class=\"row quantity-item\">
        <button id=\"lower\">-</button>
        <input type=\"number\" id=\"quantity\" value=\"1\">
        <button id=\"add-quan\">+</button>
      </div>

      <div class=\"add-to-cart\"><i class=\"bi bi-cart\"></i></div>
    </div>
  </div>
</div>";
  };
};





?>

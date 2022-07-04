<?php 
$page_title = "Gambo - Index";
include 'partials/header.php';
#defining product card variables
include 'partials/product_card.php';

?>
<div class="content" style="margin-top: 122px;">

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="swiper mySwiper cstm-swiper">
					<div class="swiper-wrapper">
						<?php echo renderProductCard($offer_imges);?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container" style="margin-top:50px;">
		<div class="row">
			<div class="col-md-12">
				<div class="shop-by-category">
					<div class="title-shop">
						<span>Shop by</span>
						<h2>Categories</h2>
					</div>
				</div>
			</div>

			<div class="col-md-12">
				<div class="swiper mySwiper swiper-two">
					<div class="swiper-wrapper">
						<?php echo generateCategoryIcons($category_images)?>
					</div>
				</div>

			</div>
		</div>
	</div>

	<section class="container top-featured-products mt-5">
		<p>For You</p>
		<h2>Top Featured Products</h2>
		<div class="products-wraper row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="swiper mySwiper swiper-three">
					<div class="swiper-wrapper">
					<?php echo generateTopFeaturedProducts($TopFeaturedProducts); ?>
					</div>
					
				</div>
			</div>

		</div>
	</section>

	<section class="container bilboard-product mt-5">
		<div class="bilboard-text">
			<p>Offers</p>
			<h2>Best Values</h2>
		</div>
		<div class="container">
			<div class="bildoard-wraper col-lg-12 col-md-12">
				<div class="col-lg-4 col-md-4">
					<div class="offers-bilboard">
						<a href="#">
							<img src="/Images/bilboard-offer-1 .jpg" alt="Offer One">
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="offers-bilboard">
						<a href="#">
							<img src="/Images/bilboard-offer-2.jpg" alt="Offer One">
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="offers-bilboard">
						<a href="#">
							<img src="/Images/bilboard-offer-3.jpg" alt="Offer One">
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12">
				<div class="offer-four">
					<a href="#">
						<img src="/Images/bilboard-offer-4.jpg" alt="Offer One">
					</a>
				</div>
			</div>
		</div>

	</section>
	<!--SECTION 2-->
	<section class="container top-featured-products mt-5">
		<p>For You</p>
		<h2>Top Featured Products</h2>
		<div class="products-wraper row">
			<div class=" col-md-12">
				<div class="col-md-12">
					<div class="swiper mySwiper swiper-four">
						<div class="swiper-wrapper">
						<?php echo generateTopFeaturedProducts($TopFeaturedProducts); ?>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!--SECTION 3-->
	<section class="container top-featured-products mt-5">
		<p>For You</p>
		<h2>Top Featured Products</h2>
		<div class="products-wraper row">
			<div class=" col-md-12">
				<div class="col-md-12">
					<div class="swiper mySwiper swiper-four">
						<div class="swiper-wrapper">
						<?php echo generateTopFeaturedProducts($TopFeaturedProducts); ?>
						</div>
					</div>
				</div>

			</div>
	</section>


</div>









































<?php 
include 'partials/footer.php';
?>
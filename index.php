<?php

include_once("header.php");

?>
	
	<main>
		<section class="hero_single version_5">
			<div class="wrapper">
				<div class="container">
					<div class="row justify-content-center pt-lg-5">
						<div class="col-xl-5 col-lg-6">
							<h3>Find what you need!</h3>
							<p>Discover top rated service providers all over the Nigeria</p>
							<form method="post" action="backend/grid-listings-filterscol.html">
								<div class="custom-search-input-2">
									<div class="form-group">
										<input class="form-control" type="text" placeholder="What are you looking for...">
										<i class="icon_search"></i>
									</div>
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Where">
										<i class="icon_pin_alt"></i>
									</div>
									<select class="wide">
										<option value="*">All Categories</option>
										
										
										<?php
										 include("restricted/web-include/view-categories-home-page.php");
										
										?>
										 
									</select>
									<input type="submit" value="Search">
								</div>
							</form>
						</div>
						<div class="col-xl-5 col-lg-6 text-right d-none d-lg-block">
							<img src="backend/img/graphic_home_2.svg" alt="" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- /hero_single -->
		
		<div class="main_categories">
			<div class="container">
				<ul class="clearfix">
					
					<?php
					
					include("restricted/web-include/view-categories-lower.php");
					
					?>
					
					
					
					
					
					 
					<li>
						<a href="grid-listings-filterscol.html">
							<i class="icon-dot-3"></i>
							<h3>More</h3>
						</a>
					</li>
				</ul>
			</div>
			<!-- /container -->
		</div>
		
		<div class="bg_color_1">
			<div class="container margin_50_55">
				<div class="main_title_2">
					<span><em></em></span>
					<h2>Popular Categories</h2>
					<p>Top Selling Categories</p>
				</div>
				<div class="row">
					
					
					
					<?php 
					
					include("restricted/web-include/view-category-slider.php");
					
					
					?>
					
					
					
					
				 
				 
				<!-- /grid_item -->
			</div>
			<!-- /row -->
			</div>
			<!-- /container -->	
		</div>
		<!-- /bg_color_1 -->	

		<div class="container-fluid margin_80_55">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Popular listings</h2>
				<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
			</div>
			<div id="reccomended" class="owl-carousel owl-theme">
				<div class="item">
					<div class="strip grid">
						<figure>
							<a href="backend/detail-restaurant.html" class="wish_bt"></a>
							<a href="backend/detail-restaurant.html"><img src="backend/img/location_1.jpg" class="img-fluid" alt="" width="400" height="266"><div class="read_more"><span>Read more</span></div></a>
							<small>Restaurant</small>
						</figure>
						<div class="wrapper">
							<h3><a href="backend/detail-restaurant.html">Da Alfredo</a></h3>
							<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
							<a class="address" href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361">Get directions</a>
						</div>
						<ul>
							<li><span class="loc_open">Now Open</span></li>
							<li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></li>
						</ul>
					</div>
				</div>
				<!-- /item -->
				<div class="item">
					<div class="strip grid">
						<figure>
							<a href="backend/detail-restaurant.html" class="wish_bt"></a>
							<a href="backend/detail-restaurant.html"><img src="backend/img/location_2.jpg" class="img-fluid" alt="" width="400" height="266"><div class="read_more"><span>Read more</span></div></a>
							<small>Bar</small>
						</figure>
						<div class="wrapper">
							<h3><a href="backend/detail-restaurant.html">Notredam</a></h3>
							<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
							<a class="address" href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361">Get directions</a>
						</div>
						<ul>
							<li><span class="loc_closed">Now Closed</span></li>
							<li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div></li>
						</ul>
					</div>
				</div>
				<!-- /item -->
				<div class="item">
					<div class="strip grid">
						<figure>
							<a href="backend/detail-shop.html" class="wish_bt"></a>
							<a href="backend/detail-shop.html"><img src="backend/img/location_3.jpg" class="img-fluid" alt="" width="400" height="266"><div class="read_more"><span>Read more</span></div></a>
							<small>Shop</small>
						</figure>
						<div class="wrapper">
							<h3><a href="backend/detail-shop.html">Camden Mark</a></h3>
							<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
							<a class="address" href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361">Get directions</a>
						</div>
						<ul>
							<li><span class="loc_open">Now Open</span></li>
							<li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div></li>
						</ul>
					</div>
				</div>
				<!-- /item -->
				<div class="item">
					<div class="strip grid">
						<figure>
							<a href="backend/detail-restaurant.html" class="wish_bt"></a>
							<a href="backend/detail-restaurant.html"><img src="backend/img/location_4.jpg" class="img-fluid" alt="" width="400" height="266"><div class="read_more"><span>Read more</span></div></a>
							<small>Bar</small>
						</figure>
						<div class="wrapper">
							<h3><a href="backend/detail-restaurant.html">Bistroter</a></h3>
							<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
							<a class="address" href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361">Get directions</a>
						</div>
						<ul>
							<li><span class="loc_open">Now Open</span></li>
							<li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div></li>
						</ul>
					</div>
				</div>
				<!-- /item -->
				<div class="item">
					<div class="strip grid">
						<figure>
							<a href="backend/detail-hotel.html" class="wish_bt"></a>
							<a href="backend/detail-hotel.html"><img src="backend/img/location_5.jpg" class="img-fluid" alt="" width="400" height="266"><div class="read_more"><span>Read more</span></div></a>
							<small>Hotel</small>
						</figure>
						<div class="wrapper">
							<h3><a href="backend/detail-hotel.html">Hotel Concorde</a></h3>
							<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
							<a class="address" href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361">Get directions</a>
						</div>
						<ul>
							<li><span class="loc_closed">Now Closed</span></li>
							<li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>9.0</strong></div></li>
						</ul>
					</div>
				</div>
				<!-- /item -->
				<div class="item">
					<div class="strip grid">
						<figure>
							<a href="backend/detail-restaurant.html" class="wish_bt"></a>
							<a href="backend/detail-restaurant.html"><img src="backend/img/location_6.jpg" class="img-fluid" alt="" width="400" height="266"><div class="read_more"><span>Read more</span></div></a>
							<small>Bar</small>
						</figure>
						<div class="wrapper">
							<h3><a href="backend/detail-restaurant.html">Eiffel Bar</a></h3>
							<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
							<a class="address" href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361">Get directions</a>
						</div>
						<ul>
							<li><span class="loc_closed">Now Closed</span></li>
							<li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.5</strong></div></li>
						</ul>
					</div>
				</div>
				<!-- /item -->
			</div>
			<!-- /carousel -->
			<div class="container">
				<div class="btn_home_align"><a href="backend/grid-listings-filterscol.html" class="btn_1 rounded">View all</a></div>
			</div>
			<!-- /container -->
		</div>
		<!-- /container -->
		<div class="container margin_60_35">
			<div class="main_title_3">
				<span></span>
				<h2>Famous Shops</h2>
				<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
				<a href="grid-listings-filterscol.html">See all</a>
			</div>
			<div class="row add_bottom_30">
				<div class="col-lg-3 col-sm-6">
					<a href="detail-shop.html" class="grid_item small">
						<figure>
							<img src="img/shop_1.jpg" alt="">
							<div class="info">
								<h3>Victoria Secretes</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="detail-shop.html" class="grid_item small">
						<figure>
							<img src="img/shop_2.jpg" alt="">
							<div class="info">
								<h3>Louis Vuitton</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="detail-shop.html" class="grid_item small">
						<figure>
							<img src="img/shop_3.jpg" alt="">
							<div class="info">
								<h3>Burberry</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="detail-shop.html" class="grid_item small">
						<figure>
							<img src="img/shop_4.jpg" alt="">
							<div class="info">
								<h3>Pinko</h3>
							</div>
						</figure>
					</a>
				</div>
			</div>
			<!-- /row -->
			
			<div class="main_title_3">
				<span></span>
				<h2>Popular Hotels</h2>
				<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
				<a href="grid-listings-filterscol.html">See all</a>
			</div>
			<div class="row add_bottom_30">
				<div class="col-lg-3 col-sm-6">
					<a href="detail-hotel.html" class="grid_item small">
						<figure>
							<img src="img/hotel_1.jpg" alt="">
							<div class="info">
								<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
								<h3>Hotel Mariott</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="detail-hotel.html" class="grid_item small">
						<figure>
							<img src="img/hotel_2.jpg" alt="">
							<div class="info">
								<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
								<h3>Hotel Concorde</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="detail-hotel.html" class="grid_item small">
						<figure>
							<img src="img/hotel_3.jpg" alt="">
							<div class="info">
								<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
								<h3>Hotel La Defanse</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="detail-hotel.html" class="grid_item small">
						<figure>
							<img src="img/hotel_4.jpg" alt="">
							<div class="info">
								<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
								<h3>Hotel Carlton</h3>
							</div>
						</figure>
					</a>
				</div>
			</div>
			<!-- /row -->
			
			<div class="main_title_3">
				<span></span>
				<h2>Top Restaurants</h2>
				<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
				<a href="grid-listings-filterscol.html">See all</a>
			</div>
			<div class="row ">
				<div class="col-lg-3 col-sm-6">
					<a href="detail-restaurant.html" class="grid_item small">
						<figure>
							<img src="img/restaurant_1.jpg" alt="">
							<div class="info">
								<h3>Da Alfredo</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="detail-restaurant.html" class="grid_item small">
						<figure>
							<img src="img/restaurant_2.jpg" alt="">
							<div class="info">
								<h3>Bistroter</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="detail-restaurant.html" class="grid_item small">
						<figure>
							<img src="img/restaurant_3.jpg" alt="">
							<div class="info">
								<h3>Da Luigi</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="detail-restaurant.html" class="grid_item small">
						<figure>
							<img src="img/restaurant_4.jpg" alt="">
							<div class="info">
								<h3>Marco King</h3>
							</div>
						</figure>
					</a>
				</div>
			</div>
			<!-- /row -->
		</div>
		<div class="call_section image_bg">
			<div class="wrapper">
				<div class="container margin_80_55">
					<div class="main_title_2">
						<span><em></em></span>
						<h2>How it Works</h2>
						<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="box_how wow">
								<i class="pe-7s-search"></i>
								<h3>Search Locations</h3>
								<p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent eloquentiam id.</p>
								<span></span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="box_how">
								<i class="pe-7s-info"></i>
								<h3>View Location Info</h3>
								<p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent eloquentiam id.</p>
								<span></span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="box_how">
								<i class="pe-7s-like2"></i>
								<h3>Book, Reach or Call</h3>
								<p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent eloquentiam id.</p>
							</div>
						</div>
					</div>
					<!-- /row -->
					<p class="text-center add_top_30 wow bounceIn" data-wow-delay="0.5"><a href="backend/register.html" class="btn_1 rounded">Register Now</a></p>
				</div>
			</div>
			<!-- /wrapper -->
		</div>
		<!--/call_section-->
	</main>
	<!-- /main -->

	<?php

include("footer.php");

?>
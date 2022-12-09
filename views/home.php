
<?php include "partials/header.php" ?>
<?php include "partials/nav.php" ?>
		<!-- welcome-hero end  -->
        <!-- body of the page start  -->
		<div class="home-body">
            <div class="welcome-section">
				<div class="welcome-title">
					<div class="welcome-intro">
						<h1>Prefect Chair <br> Sale In Lookbook</h1>
						<p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit, Sed Do Eiuiana Smod Tempor Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip.</p>
						<button class="s-btn-dis-more ">Discover more</button>
					</div>
					<div class="welcome-img">
						<img src="assets/images/slider/slider3.png" alt="white  chair">
					</div>
				</div>
			</div>
			<!-- new products section  start -->
            <div class="new-products-section">
				<div class="new-products-title">
					<div class="new-pr-title">
						<h3>New Products</h3>   
						<div class="orange-line"></div>
					</div>
					<div class="see-all-products-btn">
						<button class="btn-see-all">See All</button>
					</div>
				</div>
				<div class="new-products-body">
					<div class="new-products-body-card-discount">
						<div class="discount-circle">
							<p> -50% </p>
						</div>
						<h3>House Chair Sale <span class="summer-word">Summer</span> Store </h3>
					</div>
					<div class="new-product-card">
						<div class="new-pr-crd-img">
							<img src="../assets/images/collection/arrivals2.png" alt="sofa">
						</div>
						<p>Latest Designed Stool and Chair</p>
						<p>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
						</p>
						<div class="new-product-card-buy-price">
							<p>100$</p>
							<div>
								<img src="../assets/images/icons/icon-shop.svg" alt="">
							</div>
						</div>
					</div>
					<div class="new-product-card">
						<div class="new-pr-crd-img">
							<img src="../assets/images/collection/arrivals3.png" alt="">
						</div>
						<p>Latest Designed Stool and Chair</p>
						<p>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
						</p>
						<div class="new-product-card-buy-price">
							<p>100$</p>
							<div>
								<img src="../assets/images/icons/icon-shop.svg" alt="">
							</div>
						</div>
					</div>
					<div class="new-product-card">
						<div class="new-pr-crd-img">
							<img src="../assets/images/collection/arrivals1.png" alt="">
						</div>						<p>Latest Designed Stool and Chair</p>
						<p>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
						</p>
						<div class="new-product-card-buy-price">
							<p>100$</p>
							<div>
								<img src="../assets/images/icons/icon-shop.svg" alt="">
							</div>
						</div>
					</div>
					<div class="new-product-card">
						<div class="new-pr-crd-img">
							<img src="../assets/images/collection/arrivals4.png" alt="">
						</div>						<p>Latest Designed Stool and Chair</p>
						<p>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
						</p>
						<div class="new-product-card-buy-price">
							<p>100$</p>
							<div>
								<img src="../assets/images/icons/icon-shop.svg" alt="">
							</div>
						</div>
					</div>
				</div>
            </div>
			<!-- new products section end -->
			
			<!-- ulitmited-sofa-section start  -->
            <div class="ulitmited-sofa-section">
				<div class="ulitmited-sofa-section-title">
					<h3>Unlimited sofa collection</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
					</p>
					<div class="start-from">
						<p>Starting from <span class="start-from-price">$199</span></p>
					</div>
					<div class="ulitimted-btn">
						<button class="View-more-btn ">View More</button>
					</div>
				</div>
            </div>
			<!-- ulitmited-sofa-section end -->

            <div class="best-selling-products-section">
				<div class="best-selling-products-title">
					<div class="new-pr-title">
						<h3>Best-selling Products</h3>
						<div class="orange-line"></div>
					</div>
					<div class="see-all-products-btn">
						<button class="btn-see-all">See All</button>
					</div>
				</div>
				// best selling card
				<div class="best-selling-cards">
					<?php
						foreach($productlist as $product){
							echo $product->bestSellingCard();
						}
					?>

				</div>
            </div>
			<!-- from-our-blog-section  start -->
            <div class="from-our-blog-section">
				<div class="from-our-blog-title">
					<div class="new-pr-title">
						<h3>From Our Blog</h3>
						<div class="orange-line"></div>
					</div>
					<div class="see-all-products-btn">
						<button class="btn-see-all">See All</button>
					</div>
				</div>
				<div class="from-our-blog-cards">
					<div class="from-blog-our-blog-card">
						<div class="fbo-img">
							<img src="../assets/images/blog/b2.jpg" alt="">
						</div>
						<h4>Why Brands are Looking at Local Language</h4>
						<p class="fbo-date">By Robert Norby / 18th March 2018</p>
						<p class="fbo-discraption">Nemo Enim Ipsam Voluptatem Quia Voluptas Sit Aspernatur Aut Odit Aut Fugit ...</p>
					</div>
					<div class="from-blog-our-blog-card">
						<div class="fbo-img">
							<img src="../assets/images/blog/b1.jpg" alt="">
						</div>
						<h4>Why Brands are Looking at Local Language</h4>
						<p class="fbo-date">By Robert Norby / 18th March 2018</p>
						<p class="fbo-discraption">Nemo Enim Ipsam Voluptatem Quia Voluptas Sit Aspernatur Aut Odit Aut Fugit ...</p>
					</div>
					<div class="from-blog-our-blog-card">
						<div class="fbo-img">
							<img src="../assets/images/blog/b3.jpg" alt="">
						</div>
						<h4>Why Brands are Looking at Local Language</h4>
						<p class="fbo-date">By Robert Norby / 18th March 2018</p>
						<p class="fbo-discraption">Nemo Enim Ipsam Voluptatem Quia Voluptas Sit Aspernatur Aut Odit Aut Fugit ...</p>
					</div>
				</div>
            </div>
			<!-- from-our-blog-section end -->
            <!-- we work with section start  -->
			<div class="we-work-with-section">
				<div class="w3-title">
					<h3>We work with </h3>
					<div class="orange-line"></div>
				</div>
				<div class="w3-images">
					<div class="w3-image"><img src="../assets/images/clients/c1.png" alt=""></div>
					<div class="w3-image"><img src="../assets/images/clients/c2.png" alt=""></div>
					<div class="w3-image"><img src="../assets/images/clients/c3.png" alt=""></div>
					<div class="w3-image"><img src="../assets/images/clients/c4.png" alt=""></div>
					<div class="w3-image"><img src="../assets/images/clients/c5.png" alt=""></div>
				</div>
            </div>
			<!-- we work with section end -->

            <div class="more-information-contact-section">
				<div class="more-info">
					<h5>More info</h5>
					<a href="./about.html">About Us</a>
					<a href="#">Contact Us</a>
				</div>
				<div class="more-collections">
					<h5>More collections</h5>
					<a  href="#">Wooden Chair</a>
					<a href="#">Royal Cloth Sofa</a>
				</div>
				<div class="more-my-accounts">
					<h5>my accounts</h5>
					<a href="#">My Accounts</a>
					<a href="#">Wishlist</a>
				</div>
				<div class="more-news-letter">

					<p>Subscribe to get latest news,update and information.</p>
					<!-- <input type="text" placeholder="Enter Email Here ..."> -->
					<div class="hm-foot-email">
						<div class="foot-email-box">
							<input type="text" class="form-control" placeholder="Enter Email Here....">
						</div><!--/.foot-email-box-->
						<div class="foot-email-subscribe">
							<span><i class="fa fa-location-arrow"></i></span>
						</div><!--/.foot-email-icon-->
					</div>

				</div>

            </div>
            <!-- footer start  -->
            
<?php require "partials/footer.php"?>
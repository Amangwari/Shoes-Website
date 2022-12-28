<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>Rack.G</title>

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link type="image/x-icon" href="images/fav-icon.png" rel="icon">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/shoes.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<?php include 'modal.php'; ?>
</head>

<body>

	<!-- Start preloader -->

	<!-- End preloader -->

	<!-- Search Screen start -->
	<div class="sidebar-search-wrap">
		<div class="sidebar-table-container">
			<div class="sidebar-align-container">
				<div class="search-closer right-side"></div>
				<div class="search-container">
					<form method="get" id="search-form">
						<input type="text" id="s" class="search-input" name="s" placeholder="Search text">
					</form>
					<span>Search and Press Enter</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Search Screen end -->

	<div id="newslater-popup" class="mfp-hide white-popup-block open align-center">
		<div class="nl-popup-main">
			<div class="nl-popup-inner">
				<div class="newsletter-inner">
					<div class="row">
						<div class="col-md-6"></div>
						<div class="col-md-6">
							<div class="mtb-30 text-center">
								<h2 class="main_title">Subscribe Emails</h2>
								<span class="sub-title mb-30">Sign up & get 10% off</span>
								<form>
									<input type="email" placeholder="Email Here..." required>
									<button class="btn-color big-width btn" title="Subscribe">Subscribe</button>
								</form>
								<div class="check-box mt-30">
									<span>
										<input type="checkbox" class="checkbox" id="different-address"
											name="Ship to a different address?">
										<label for="different-address">Don`t show this popup again</label>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="main" id="main">
		<header class="header transition">
			<div class="container position-r">
				<div class="row">
					<div class="col-lg-2 col-md-3 col-6 align-flax">
						<div class="navbar-header">
							<a class="navbar-brand" href="index.html">
								<img alt="log" src="images/logo.png" class="transition">
							</a>
						</div>
					</div>
					<div class="col-lg-10 col-md-9 col-6 position-i">
						<div class="menu-left transition">
							<div class="menu">
								<ul>

									<li>
										<a href="index.php">Home</a>
									</li>
									<li>
										<a href="about.html">About Us</a>
									</li>


									<li>
										<a href="ourProducts.php">Our Products</a>
									</li>


									<li>
										<a href="contact.html">Contact</a>
									</li>


								</ul>
							</div>
						</div>
						<div class="search-right">
							<div class="menu-toggle"><span></span></div>
							<li>
								<a id="google_translate_element"></a>
							</li>

						</div>
					</div>
					</li>
					</ul>
				</div>
			</div>
	</div>
	</div>
	</header>

	<section class="home-banner">
		<div class="container">
			<div class="home-slider owl-carousel">
				<div class="banner-bg align-flax">
					<div class="w-100">
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-md-6 align-flax">
								<div class="banner-img"><img src="images/banner.jpg" alt="banner"></div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 align-flax">
								<div class="banner-heading w-100">
									<label class="banner-top">Get UP To <span>40%</span> Off</label>
									<h2 class="banner-title">men <span>shoes</span></h2>
									<a href="#" class="btn">Enquery Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="banner-bg align-flax">
					<div class="w-100">
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-md-6 align-flax">
								<div class="banner-img"><img src="images/banner-2.png" alt="banner"></div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 align-flax">
								<div class="banner-heading w-100">
									<label class="banner-top">Get UP To <span>40%</span> Off</label>
									<h2 class="banner-title">season <span>sale</span></h2>
									<a href="#" class="btn">Enquery Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="featured pt-100">
		<div class="container">
			<div class="row mb-25">
				<div class="col-xl-6 col-lg-6 col-md-6">
					<div class="hading">
						<h2 class="hading-title">FEATURED <span>PRODUCTS</span></h2>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6">
					<ul id="tabs" class="product-isotop filters-product text-right text-uppercase nav nav-tabs"
						role="tablist">
						<li role="presentation" class="transition" data-filter="*">
							<a href="#all" class="active" role="tab" data-toggle="tab">all</a>
						</li>
						<li role="presentation" class="transition" data-filter=".shoes">
							<a href="#shoes" role="tab" data-toggle="tab">Shoes</a>
						</li>
						<li role="presentation" class="transition" data-filter=".women">
							<a href="#women" role="tab" data-toggle="tab">Women</a>
						</li>
						<li role="presentation" class="transition" data-filter=".accessories">
							<a href="#accessories" role="tab" data-toggle="tab">Accessories</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="tab-content">
				<div role="tabpanel" class="row tab-pane fade active show" id="all">
					<div class="featured-product mb-25">
						<div class="product-img transition mb-15">
							<a href="">
								<img src="images/shoe1.jpg" alt="product" class="transition">
							</a>
							<div class="new-label">
								<span class="text-uppercase">New</span>
							</div>
							<div class="product-details-btn text-uppercase text-center transition">
								<a data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2" class=" mfp-iframe" class="quick-popup mfp-iframe">Enquery Now</a>
							</div>
						</div>
						<div class="product-desc">
							<a href="" class="product-name text-uppercase">Women shoes</a>
							<span class="product-pricce">Rs.4780.00</span>
						</div>
					</div>
					<div class="featured-product mb-25">
						<div class="product-img transition mb-15">
							<a href="">
								<img src="images/shoe2.jpg" alt="product" class="transition">
							</a>
							<div class="product-details-btn text-uppercase text-center transition">
								<a data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2" class=" mfp-iframe">Enquery Now</a>
							</div>
						</div>
						<div class="product-desc">
							<a href="" class="product-name text-uppercase">Women shoes stylish</a>
							<span class="product-pricce">Rs4780.00</span>
						</div>
					</div>
					<div class="featured-product mb-25">
						<div class="product-img transition mb-15">
							<a href="">
								<img src="images/shoe3.jpg" alt="product" class="transition">
							</a>
							<div class="sale-label">
								<span class="text-uppercase">sale</span>
							</div>
							<div class="product-details-btn text-uppercase text-center transition">
								<a data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2" class=" mfp-iframe">Enquery Now</a>
							</div>
						</div>
						<div class="product-desc">
							<a href="" class="product-name text-uppercase">AENEAN SAGITTIS</a>
							<span class="product-pricce">Rs.478.00</span>
						</div>
					</div>
					<div class="featured-product mb-25">
						<div class="product-img transition mb-15">
							<a href="">
								<img src="images/shoe4.jpg" alt="product" class="transition">
							</a>
							<div class="product-details-btn text-uppercase text-center transition">
								<a data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2" class=" mfp-iframe">Enquery Now</a>
							</div>
						</div>
						<div class="product-desc">
							<a href="" class="product-name text-uppercase">Women fancy shoes</a>
							<span class="product-pricce">Rs.4780.00</span>
						</div>
					</div>
					<div class="featured-product mb-25">
						<div class="product-img transition mb-15">
							<a href="">
								<img src="images/shoe5.jpg" alt="product" class="transition">
							</a>
							<div class="product-details-btn text-uppercase text-center transition">
								<a data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2" class=" mfp-iframe">Enquery Now</a>
							</div>
						</div>
						<div class="product-desc">
							<a href="" class="product-name text-uppercase">Women shoes</a>
							<span class="product-pricce">Rs.4780.00</span>
						</div>
					</div>
					<div class="featured-product mb-25">
						<div class="product-img transition mb-15">
							<a href="">
								<img src="images/shoe1.jpg" alt="product" class="transition">
							</a>
							<div class="new-label">
								<span class="text-uppercase">New</span>
							</div>
							<div class="product-details-btn text-uppercase text-center transition">
								<a href="#" class="quick-popup mfp-iframe">Enquery Now</a>
							</div>
						</div>
						<div class="product-desc">
							<a href="" class="product-name text-uppercase">Women shoes</a>
							<span class="product-pricce">Rs.4780.00</span>
						</div>
					</div>
					<div class="featured-product mb-25">
						<div class="product-img transition mb-15">
							<a href="">
								<img src="images/shoe2.jpg" alt="product" class="transition">
							</a>
							<div class="product-details-btn text-uppercase text-center transition">
								<a data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2" class=" mfp-iframe">Enquery Now</a>
							</div>
						</div>
						<div class="product-desc">
							<a href="" class="product-name text-uppercase">Women shoes stylish</a>
							<span class="product-pricce">Rs4780.00</span>
						</div>
					</div>
					<div class="featured-product mb-25">
						<div class="product-img transition mb-15">
							<a href="">
								<img src="images/shoe3.jpg" alt="product" class="transition">
							</a>
							<div class="sale-label">
								<span class="text-uppercase">sale</span>
							</div>
							<div class="product-details-btn text-uppercase text-center transition">
								<a data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2" class=" mfp-iframe">Enquery Now</a>
							</div>
						</div>
						<div class="product-desc">
							<a href="" class="product-name text-uppercase">AENEAN SAGITTIS</a>
							<span class="product-pricce">Rs.478.00</span>
						</div>
					</div>
					<div class="featured-product mb-25">
						<div class="product-img transition mb-15">
							<a href="">
								<img src="images/shoe4.jpg" alt="product" class="transition">
							</a>
							<div class="product-details-btn text-uppercase text-center transition">
								<a data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2" class=" mfp-iframe">Enquery Now</a>
							</div>
						</div>
						<div class="product-desc">
							<a href="" class="product-name text-uppercase">Women fancy shoes</a>
							<span class="product-pricce">Rs.4780.00</span>
						</div>
					</div>
					<div class="featured-product mb-25">
						<div class="product-img transition mb-15">
							<a href="">
								<img src="images/shoe5.jpg" alt="product" class="transition">
							</a>
							<div class="product-details-btn text-uppercase text-center transition">
								<a data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2" class=" mfp-iframe">Enquery Now</a>
							</div>
						</div>
						<div class="product-desc">
							<a href="" class="product-name text-uppercase">Women shoes</a>
							<span class="product-pricce">Rs.4780.00</span>
						</div>
					</div>
					<div class="featured-product mb-25">
						<div class="product-img transition mb-15">
							<a href="">
								<img src="images/shoe1.jpg" alt="product" class="transition">
							</a>
							<div class="new-label">
								<span class="text-uppercase">New</span>
							</div>
							<div class="product-details-btn text-uppercase text-center transition">
								<a data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2" class=" mfp-iframe" class="quick-popup mfp-iframe">Enquery Now</a>
							</div>
						</div>
						<div class="product-desc">
							<a href="" class="product-name text-uppercase">Women shoes</a>
							<span class="product-pricce">Rs.4780.00</span>
						</div>
					</div>
					<div class="featured-product mb-25">
						<div class="product-img transition mb-15">
							<a href="">
								<img src="images/shoe2.jpg" alt="product" class="transition">
							</a>
							<div class="product-details-btn text-uppercase text-center transition">
								<a data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2" class=" mfp-iframe">Enquery Now</a>
							</div>
						</div>
						<div class="product-desc">
							<a href="" class="product-name text-uppercase">Women shoes stylish</a>
							<span class="product-pricce">Rs4780.00</span>
						</div>
					</div>
					<div class="featured-product mb-25">
						<div class="product-img transition mb-15">
							<a href="">
								<img src="images/shoe3.jpg" alt="product" class="transition">
							</a>
							<div class="sale-label">
								<span class="text-uppercase">sale</span>
							</div>
							<div class="product-details-btn text-uppercase text-center transition">
								<a data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2" class=" mfp-iframe">Enquery Now</a>
							</div>
						</div>
						<div class="product-desc">
							<a href="" class="product-name text-uppercase">AENEAN SAGITTIS</a>
							<span class="product-pricce">Rs.478.00</span>
						</div>
					</div>
					<div class="featured-product mb-25">
						<div class="product-img transition mb-15">
							<a href="">
								<img src="images/shoe4.jpg" alt="product" class="transition">
							</a>
							<div class="product-details-btn text-uppercase text-center transition">
								<a data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2" class=" mfp-iframe">Enquery Now</a>
							</div>
						</div>
						<div class="product-desc">
							<a href="" class="product-name text-uppercase">Women fancy shoes</a>
							<span class="product-pricce">Rs.4780.00</span>
						</div>
					</div>
					<div class="featured-product mb-25">
						<div class="product-img transition mb-15">
							<a href="">
								<img src="images/shoe5.jpg" alt="product" class="transition">
							</a>
							<div class="product-details-btn text-uppercase text-center transition">
								<a data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2" class=" mfp-iframe">Enquery Now</a>
							</div>
						</div>
						<div class="product-desc">
							<a href="" class="product-name text-uppercase">Women shoes</a>
							<span class="product-pricce">Rs.4780.00</span>
						</div>
					</div>
					<div class="featured-product mb-25">
						<div class="product-img transition mb-15">
							<a href="">
								<img src="images/shoe1.jpg" alt="product" class="transition">
							</a>
							<div class="new-label">
								<span class="text-uppercase">New</span>
							</div>
							<div class="product-details-btn text-uppercase text-center transition">
								<a data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2" class=" mfp-iframe" class="quick-popup mfp-iframe">Enquery Now</a>
							</div>
						</div>
						<div class="product-desc">
							<a href="" class="product-name text-uppercase">Women shoes</a>
							<span class="product-pricce">Rs.4780.00</span>
						</div>
					</div>
					<div class="featured-product mb-25">
						<div class="product-img transition mb-15">
							<a href="">
								<img src="images/shoe2.jpg" alt="product" class="transition">
							</a>
							<div class="product-details-btn text-uppercase text-center transition">
								<a data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2" class=" mfp-iframe">Enquery Now</a>
							</div>
						</div>
						<div class="product-desc">
							<a href="" class="product-name text-uppercase">Women shoes stylish</a>
							<span class="product-pricce">Rs4780.00</span>
						</div>
					</div>
					<div class="featured-product mb-25">
						<div class="product-img transition mb-15">
							<a href="">
								<img src="images/shoe3.jpg" alt="product" class="transition">
							</a>
							<div class="sale-label">
								<span class="text-uppercase">sale</span>
							</div>
							<div class="product-details-btn text-uppercase text-center transition">
								<a data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2" class=" mfp-iframe">Enquery Now</a>
							</div>
						</div>
						<div class="product-desc">
							<a href="" class="product-name text-uppercase">AENEAN SAGITTIS</a>
							<span class="product-pricce">Rs.478.00</span>
						</div>
					</div>
					<div class="featured-product mb-25">
						<div class="product-img transition mb-15">
							<a href="">
								<img src="images/shoe4.jpg" alt="product" class="transition">
							</a>
							<div class="product-details-btn text-uppercase text-center transition">
								<a data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2" class=" mfp-iframe">Enquery Now</a>
							</div>
						</div>
						<div class="product-desc">
							<a href="" class="product-name text-uppercase">Women fancy shoes</a>
							<span class="product-pricce">Rs.4780.00</span>
						</div>
					</div>
					<div class="featured-product mb-25">
						<div class="product-img transition mb-15">
							<a href="">
								<img src="images/shoe5.jpg" alt="product" class="transition">
							</a>
							<div class="product-details-btn text-uppercase text-center transition">
								<a data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2" class=" mfp-iframe">Enquery Now</a>
							</div>
						</div>
						<div class="product-desc">
							<a href="" class="product-name text-uppercase">Women shoes</a>
							<span class="product-pricce">Rs.4780.00</span>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="row tab-pane fade" id="shoes">
					<div class="featured-product mb-25">
						<div class="product-img transition mb-15">
							<a href="">
								<img src="images/product-4.jpg" alt="product" class="transition">
							</a>
							<div class="product-details-btn text-uppercase text-center transition">
								<a data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2" class=" mfp-iframe">Enquery Now</a>
							</div>
						</div>
						<div class="product-desc" data-category="accessories">
							<a href="" class="product-name text-uppercase">ALIQUAM LOBORTIS EST</a>
							<span class="product-pricce">Rs.4780.00</span>
						</div>
					</div>
					<div class="featured-product mb-25">
						<div class="product-img transition mb-15">
							<a href="">
								<img src="images/product-5.jpg" alt="product" class="transition">
							</a>
							<div class="product-details-btn text-uppercase text-center transition">
								<a data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2" class=" mfp-iframe">Enquery Now</a>
							</div>
						</div>
						<div class="product-desc">
							<a href="" class="product-name text-uppercase">AUCTOR GRAVIDA ENIM</a>
							<span class="product-pricce">Rs.4780.00</span>
						</div>
					</div>
					<div class="featured-product mb-25">
						<div class="product-img transition mb-15">
							<a href="">
								<img src="images/product-6.jpg" alt="product" class="transition">
							</a>
							<div class="product-details-btn text-uppercase text-center transition">
								<a data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2" class=" mfp-iframe">Enquery Now</a>
							</div>
						</div>
						<div class="product-desc">
							<a href="" class="product-name text-uppercase">BLIQUAM LOBORTIS</a>
							<span class="product-pricce">Rs.4780.00</span>
						</div>
					</div>
					<div class="featured-product mb-25">
						<div class="product-img transition mb-15">
							<a href="">
								<img src="images/product-7.jpg" alt="product" class="transition">
							</a>
							<div class="new-label">
								<span class="text-uppercase">New</span>
							</div>
							<div class="sale-label">
								<span class="text-uppercase">sale</span>
							</div>
							<div class="product-details-btn text-uppercase text-center transition">
								<a data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2" class=" mfp-iframe">Enquery Now</a>
							</div>
						</div>
						<div class="product-desc">
							<a href="" class="product-name text-uppercase">BUSCIPIT AT MAGNA</a>
							<span class="product-pricce">Rs.4780.00</span>
						</div>
					</div>
					<div class="featured-product mb-25">
						<div class="product-img transition mb-15">
							<a href="">
								<img src="images/product-8.jpg" alt="product" class="transition">
							</a>
							<div class="product-details-btn text-uppercase text-center transition">
								<a data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2" class=" mfp-iframe">Enquery Now</a>
							</div>
						</div>
						<div class="product-desc">
							<a href="" class="product-name text-uppercase">CONDIMENTUM POSUERE</a>
							<span class="product-pricce">Rs.4780.00</span>
						</div>
					</div>
					<div class="featured-product mb-25">
						<div class="product-img transition mb-15">
							<a href="">
								<img src="images/product-9.jpg" alt="product" class="transition">
							</a>
							<div class="new-label">
								<span class="text-uppercase">New</span>
							</div>
							<div class="product-details-btn text-uppercase text-center transition">
								<a data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2" class=" mfp-iframe">Enquery Now</a>
							</div>
						</div>
						<div class="product-desc">
							<a href="" class="product-name text-uppercase">DIGNISSIM VENENATIS</a>
							<span class="product-pricce">Rs.4780.00</span>
						</div>
					</div>
					<div class="featured-product mb-25">
						<div class="product-img transition mb-15">
							<a href="">
								<img src="images/product-10.jpg" alt="product" class="transition">
							</a>
							<div class="product-details-btn text-uppercase text-center transition">
								<a data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2" class=" mfp-iframe">Enquery Now</a>
							</div>
						</div>
						<div class="product-desc">
							<a href="" class="product-name text-uppercase">ELEIFEND ARCU</a>
							<span class="product-pricce">Rs.4780.00</span>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="row tab-pane fade" id="women">
					<div class="featured-product mb-25">
						<div class="product-img transition mb-15">
							<a href="">
								<img src="images/shoe1.jpg" alt="product" class="transition">
							</a>
							<div class="sale-label">
								<span class="text-uppercase">sale</span>
							</div>
							<div class="product-details-btn text-uppercase text-center transition">
								<a data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2" class=" mfp-iframe">Enquery Now</a>
							</div>
						</div>
						<div class="product-desc">
							<a href="" class="product-name text-uppercase">AENEAN SAGITTIS</a>
							<span class="product-pricce">Rs.4780.00</span>
						</div>
					</div>
					<div class="featured-product mb-25">
						<div class="product-img transition mb-15">
							<a href="">
								<img src="images/product-4.jpg" alt="product" class="transition">
							</a>
							<div class="product-details-btn text-uppercase text-center transition">
								<a data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2" class=" mfp-iframe">Enquery Now</a>
							</div>
						</div>
						<div class="product-desc" data-category="accessories">
							<a href="" class="product-name text-uppercase">ALIQUAM LOBORTIS EST</a>
							<span class="product-pricce">Rs.4780.00</span>
						</div>
					</div>
					<div class="featured-product mb-25">
						<div class="product-img transition mb-15">
							<a href="">
								<img src="images/product-5.jpg" alt="product" class="transition">
							</a>
							<div class="product-details-btn text-uppercase text-center transition">
								<a data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2" class=" mfp-iframe">Enquery Now</a>
							</div>
						</div>
						<div class="product-desc">
							<a href="" class="product-name text-uppercase">AUCTOR GRAVIDA ENIM</a>
							<span class="product-pricce">Rs.4780.00</span>
						</div>
					</div>
					<div class="featured-product mb-25">
						<div class="product-img transition mb-15">
							<a href="">
								<img src="images/product-6.jpg" alt="product" class="transition">
							</a>
							<div class="product-details-btn text-uppercase text-center transition">
								<a data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2" class=" mfp-iframe">Enquery Now</a>
							</div>
						</div>
						<div class="product-desc">
							<a href="" class="product-name text-uppercase">BLIQUAM LOBORTIS</a>
							<span class="product-pricce">Rs.4780.00</span>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="row tab-pane fade" id="accessories">
					<div class="featured-product mb-25">
						<div class="product-img transition mb-15">
							<a href="">
								<img src="images/product-5.jpg" alt="product" class="transition">
							</a>
							<div class="product-details-btn text-uppercase text-center transition">
								<a data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2" class=" mfp-iframe">Enquery Now</a>
							</div>
						</div>
						<div class="product-desc">
							<a href="" class="product-name text-uppercase">AUCTOR GRAVIDA ENIM</a>
							<span class="product-pricce">RS.4780.00</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="offer-banner pt-70">
		<div class="container">
			<div class="offer-bg bg text-center ptb-120">
				<label class="banner-top text-uppercase">PROMOTION SALE <span>OFF 50%</span></label>
				<h1 class="banner-title text-uppercase"><span>the</span> summer</h1>

				<a href="" class="btn">Enquery Now</a>
			</div>
		</div>
	</section>

	<section class="best-seller pt-100">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-12 col-md-12">
					<div class="row">
						<div class="col-xl-6 col-lg-6 col-md-6">
							<div class="hading pb-20">
								<h2 class="hading-title">best <span>seller</span></h2>
							</div>
							<div class="seller">
								<div class="seller-box align-flax w-100 pb-20">
									<div class="seller-img">
										<a href="" class="display-b">
											<img src="images/product-1.jpg" alt="shoes" class="transition">
										</a>
									</div>
									<div class="seller-contain pl-15">
										<a href="" class="product-name text-uppercase">men's harpoon
											2 eye boot</a>
										<span class="product-pricce">RS.4780.00</span>
									</div>
								</div>
								<div class="seller-box align-flax w-100 pb-20">
									<div class="seller-img">
										<a href="" class="display-b">
											<img src="images/product-7.jpg" alt="shoes" class="transition">
										</a>
									</div>
									<div class="seller-contain pl-15">
										<a href="" class="product-name text-uppercase">BUSCIPIT AT
											MAGNA</a>
										<span class="product-pricce">RS.4780.00</span>
									</div>
								</div>
								<div class="seller-box align-flax w-100 pb-20">
									<div class="seller-img">
										<a href="" class="display-b">
											<img src="images/product-3.jpg" alt="shoes" class="transition">
										</a>
									</div>
									<div class="seller-contain pl-15">
										<a href="" class="product-name text-uppercase">AENEAN
											SAGITTIS</a>
										<span class="product-pricce">RS.4780.00</span>
									</div>
								</div>
								<div class="seller-box align-flax w-100 pb-20">
									<div class="seller-img">
										<a href="" class="display-b">
											<img src="images/product-1.jpg" alt="shoes" class="transition">
										</a>
									</div>
									<div class="seller-contain pl-15">
										<a href="" class="product-name text-uppercase">men's harpoon
											2 eye boot</a>
										<span class="product-pricce">RS.4780.00</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6">
							<div class="hading pb-20">
								<h2 class="hading-title">top <span>seller</span></h2>
							</div>
							<div class="seller">
								<div class="seller-box align-flax w-100 pb-20">
									<div class="seller-img">
										<a href="" class="display-b">
											<img src="images/product-4.jpg" alt="shoes" class="transition">
										</a>
									</div>
									<div class="seller-contain pl-15">
										<a href="" class="product-name text-uppercase">ALIQUAM
											LOBORTIS EST</a>
										<span class="product-pricce">RS.4780.00</span>
									</div>
								</div>
								<div class="seller-box align-flax w-100 pb-20">
									<div class="seller-img">
										<a href="" class="display-b">
											<img src="images/product-10.jpg" alt="shoes" class="transition">
										</a>
									</div>
									<div class="seller-contain pl-15">
										<a href="" class="product-name text-uppercase">ELEIFEND
											ARCU</a>
										<span class="product-pricce">RS.4780.00</span>
									</div>
								</div>
								<div class="seller-box align-flax w-100 pb-20">
									<div class="seller-img">
										<a href="" class="display-b">
											<img src="images/product-2.jpg" alt="shoes" class="transition">
										</a>
									</div>
									<div class="seller-contain pl-15">
										<a href="" class="product-name text-uppercase">AENEAN EU
											TRISTIQUE</a>
										<span class="product-pricce">RS.4780.00</span>
									</div>
								</div>
								<div class="seller-box align-flax w-100 pb-20">
									<div class="seller-img">
										<a href="" class="display-b">
											<img src="images/product-6.jpg" alt="shoes" class="transition">
										</a>
									</div>
									<div class="seller-contain pl-15">
										<a href="" class="product-name text-uppercase">BLIQUAM
											LOBORTIS</a>
										<span class="product-pricce">RS.4780.00</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-12 col-md-12">
					<div class="offer-week">
						<div class="row align-flax">
							<div class="col-xl-5 col-lg-5 col-md-5">
								<div class="week-img transition">
									<a href="" class="display-b">
										<img src="images/week-sale.jpg" class="w-100" alt="shoes">
									</a>
								</div>
							</div>
							<div class="col-xl-7 col-lg-7 col-md-7">
								<div class="week-contain">
									<h2 class="week-head text-uppercase pb-15">offer of the week</h2>
									<p class="week-sub">Welcome to Xpoge shoes Store 20% off</p>
									<div class="star-rating pb-10">
										<input id="star-5" type="radio" name="rating" value="star-5" />
										<label for="star-5" title="5 stars" class="transition">
											<i class="active fa fa-star" aria-hidden="true"></i>
										</label>
										<input id="star-4" type="radio" name="rating" value="star-4" checked />
										<label for="star-4" title="4 stars" class="transition">
											<i class="active fa fa-star" aria-hidden="true"></i>
										</label>
										<input id="star-3" type="radio" name="rating" value="star-3" />
										<label for="star-3" title="3 stars" class="transition">
											<i class="active fa fa-star" aria-hidden="true"></i>
										</label>
										<input id="star-2" type="radio" name="rating" value="star-2" />
										<label for="star-2" title="2 stars" class="transition">
											<i class="active fa fa-star" aria-hidden="true"></i>
										</label>
										<input id="star-1" type="radio" name="rating" value="star-1" />
										<label for="star-1" title="1 star" class="transition">
											<i class="active fa fa-star" aria-hidden="true"></i>
										</label>
									</div>
									<div class="price-d pb-25">
										<label class="price-r pr-30">RS.4780.00</label>
										<label class="price-o">RS.3780.00</label>
									</div>
									<ul class="countdown text-uppercase">
										<li class="text-center">
											<span id="days" class="counter-timer display-b text-center">08</span>
											<label class="day-name">days</label>
										</li>
										<li class="text-center">
											<span id="hours" class="counter-timer display-b text-center">16</span>
											<label class="day-name">hour</label>
										</li>
										<li class="text-center">
											<span id="minutes" class="counter-timer display-b text-center">36</span>
											<label class="day-name">min</label>
										</li>
										<li class="text-center">
											<span id="seconds" class="counter-timer display-b text-center">45</span>
											<label class="day-name">sec</label>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="team pt-100">
		<div class="container">
			<div class="team-inner owl-carousel">
				<div class="team-slide text-center">
					<div class="team-img position-r">
						<img src="images/team-1.jpg" alt="team">
						<span class="quote-c"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
					</div>
					<div class="team-desc">
						<p class="member-detail">make a type specimen book. It has survived not only five centuries, but
							also the leap into electronic typesetting, remaining essentially unchanged. It was make a
							type specimen book. It has survived not only five centuries.</p>
						<h3 class="member-name text-uppercase">john Doe</h3>
					</div>
				</div>
				<div class="team-slide text-center">
					<div class="team-img position-r">
						<img src="images/team-1.jpg" alt="team">
						<span class="quote-c"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
					</div>
					<div class="team-desc">
						<p class="member-detail">make a type specimen book. It has survived not only five centuries, but
							also the leap into electronic typesetting, remaining essentially unchanged. It was make a
							type specimen book. It has survived not only five centuries.</p>
						<h3 class="member-name text-uppercase">john Doe</h3>
					</div>
				</div>
				<div class="team-slide text-center">
					<div class="team-img position-r">
						<img src="images/team-1.jpg" alt="team">
						<span class="quote-c"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
					</div>
					<div class="team-desc">
						<p class="member-detail">make a type specimen book. It has survived not only five centuries, but
							also the leap into electronic typesetting, remaining essentially unchanged. It was make a
							type specimen book. It has survived not only five centuries.</p>
						<h3 class="member-name text-uppercase">John Doe</h3>
					</div>
				</div>
			</div>
		</div>
	</section>



	<div class="brand pt-100">
		<div class="container">
			<div class="brand-salider owl-carousel">
				<div class="brand-box text-center">
					<a href="#"><img src="images/brand-1.jpg" alt="brand" class="transition"></a>
				</div>
				<div class="brand-box text-center">
					<a href="#"><img src="images/brand-2.jpg" alt="brand" class="transition"></a>
				</div>
				<div class="brand-box text-center">
					<a href="#"><img src="images/brand-3.jpg" alt="brand" class="transition"></a>
				</div>
				<div class="brand-box text-center">
					<a href="#"><img src="images/brand-4.jpg" alt="brand" class="transition"></a>
				</div>
				<div class="brand-box text-center">
					<a href="#"><img src="images/brand-5.jpg" alt="brand" class="transition"></a>
				</div>
				<div class="brand-box text-center">
					<a href="#"><img src="images/brand-6.jpg" alt="brand" class="transition"></a>
				</div>
				<div class="brand-box text-center">
					<a href="#"><img src="images/brand-1.jpg" alt="brand" class="transition"></a>
				</div>
				<div class="brand-box text-center">
					<a href="#"><img src="images/brand-2.jpg" alt="brand" class="transition"></a>
				</div>
				<div class="brand-box text-center">
					<a href="#"><img src="images/brand-4.jpg" alt="brand" class="transition"></a>
				</div>
			</div>
		</div>
	</div>

	<section class="newsletter pt-100">
		<div class="container">
			<div class="newsletter-inner text-center ptb-100">
				<h2 class="newsletter-title">Sign up for Newsletter</h2>
				<p class="newsletter-sub">Wants to get latest updates! sign up for Free</p>
				<form>
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Your email address" required>
					</div>
					<button type="submit" class="form-btn text-uppercase">
						<span class="sub-r">Subscribe</span>
						<i class="fa fa-send icon-r"></i>
					</button>
				</form>
			</div>
		</div>
	</section>

	<div class="top-scrolling">
		<a href="#main" class="scrollTo"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
	</div>

	<footer class="footer pt-100">
		<div class="container">
			<div class="footer-inner">
				<div class="footer-box">
					<div class="footer-logo">
						<a href="index.html"><img src="images/logo.png" alt="logo"></a>
					</div>
					<!--<p class="footer-desc">Lorem ipsum dolor sit amet, consectetur adipi-scing elit. In purus sem, consectetur sed aliquam vel, hendrerit in elit. Nunc interdum dolor at quam pulvinar sodales. Nunc venenatis egestas mi ac fermentum.</p>-->
				</div>
				<div class="footer-box footer-static">
					<span class="opener plus"></span>
					<h2 class="footer-title text-uppercase">Our company</h2>
					<ul class="footer-block-contant">
						<!--<li><a href="#">My Account</a></li>-->
						<!--<li><a href="#">Order History</a></li>-->
						<!--<li><a href="wishlist.html">Wish List</a></li>-->
						<!--<li><a href="#">Newsletter</a></li>-->
						<!--<li><a href="#">Site Map</a></li>-->
						<!--<li><a href="#">Gift Certificates</a></li>-->
					</ul>
				</div>
				<div class="footer-box footer-static">
					<span class="opener plus"></span>
					<h2 class="footer-title text-uppercase">Information</h2>
					<ul class="footer-block-contant">
						<li><a href="about.html">About Us</a></li>
						<li><a href="#">Delivery Information</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="contact.html">Contact Us</a></li>
						<li><a href="#">Brands</a></li>
					</ul>
				</div>
				<div class="footer-box footer-static m-0">
					<span class="opener plus"></span>
					<h2 class="footer-title text-uppercase">Our Products</h2>
					<ul class="footer-block-contant">
						<li><a href="#">Running Shoes</a></li>
						<li><a href="#">Football Shoes</a></li>
						<li><a href="#">Basketball Shoes</a></li>
						<li><a href="#">Volleyball Shoes</a></li>
						<li><a href="#">Trainee Shoes</a></li>
					</ul>
				</div>
				<!--<div class="footer-box footer-contact footer-static m-0">-->
				<!--	<span class="opener plus"></span>-->
				<!--	<h2 class="footer-title text-uppercase">Contact us</h2>-->
				<!--	<ul class="footer-block-contant">-->
				<!--		<li><img src="images/cont-1.png" alt="img"><span>28 Green Tower, Street Name <br>New York City, USA</span></li>-->
				<!--		<li><img src="images/cont-2.png" alt="img"><a href="tel:+911234567890">+ 91 123 456 789 0</a></li>-->
				<!--		<li><img src="images/cont-3.png" alt="img"><a href="mailto:xpoge@example.com">xpoge@example.com</a></li>-->
				<!--	</ul>-->
				<!--</div>-->
			</div>
			<div class="copy-right mt-100">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-12">
						<p class="copyright-text">&#169; Rack.G all Rights Reserverd by <a
								href="https://www.businessworldtrade.com/" target="_blank">Business World Trade</a></p>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-12">
						<a href="https://www.businessworldtrade.com/"><img src="svg-logo.svg" width="300px"></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	</div>

	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/custom.js"></script>
	<!-- Language Converter -->
	<script type="text/javascript">
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({
				pageLanguage: 'en'
			}, 'google_translate_element');
		}
	</script>
	<script type="text/javascript">
		(function () {
			var gtConstEvalStartTime = new Date();
			/*
	  	
			 Copyright The Closure Library Authors.
			 SPDX-License-Identifier: Apache-2.0
			*/
			var h = this || self,
				l = /^[\w+/_-]+[=]{0,2}$/,
				m = null;

			function n(a) {
				return (a = a.querySelector && a.querySelector("script[nonce]")) && (a = a.nonce || a.getAttribute("nonce")) && l.test(a) ? a : ""
			}

			function p(a, b) {
				function c() { }
				c.prototype = b.prototype;
				a.i = b.prototype;
				a.prototype = new c;
				a.prototype.constructor = a;
				a.h = function (g, f, k) {
					for (var e = Array(arguments.length - 2), d = 2; d < arguments.length; d++) e[d - 2] = arguments[d];
					return b.prototype[f].apply(g, e)
				}
			}

			function q(a) {
				return a
			};

			function r(a) {
				if (Error.captureStackTrace) Error.captureStackTrace(this, r);
				else {
					var b = Error().stack;
					b && (this.stack = b)
				}
				a && (this.message = String(a))
			}
			p(r, Error);
			r.prototype.name = "CustomError";

			function u(a, b) {
				a = a.split("%s");
				for (var c = "", g = a.length - 1, f = 0; f < g; f++) c += a[f] + (f < b.length ? b[f] : "%s");
				r.call(this, c + a[g])
			}
			p(u, r);
			u.prototype.name = "AssertionError";

			function v(a, b) {
				throw new u("Failure" + (a ? ": " + a : ""), Array.prototype.slice.call(arguments, 1));
			};
			var w;

			function x(a, b) {
				this.g = b === y ? a : ""
			}
			x.prototype.toString = function () {
				return this.g + ""
			};
			var y = {};

			function z(a) {
				var b = document.getElementsByTagName("head")[0];
				b || (b = document.body.parentNode.appendChild(document.createElement("head")));
				b.appendChild(a)
			}

			function _loadJs(a) {
				var b = document;
				var c = "SCRIPT";
				"application/xhtml+xml" === b.contentType && (c = c.toLowerCase());
				c = b.createElement(c);
				c.type = "text/javascript";
				c.charset = "UTF-8";
				if (void 0 === w) {
					b = null;
					var g = h.trustedTypes;
					if (g && g.createPolicy) {
						try {
							b = g.createPolicy("goog#html", {
								createHTML: q,
								createScript: q,
								createScriptURL: q
							})
						} catch (t) {
							h.console && h.console.error(t.message)
						}
						w = b
					} else w = b
				}
				a = (b = w) ? b.createScriptURL(a) : a;
				a = new x(a, y);
				a: {
					try {
						var f = c && c.ownerDocument,
							k = f && (f.defaultView || f.parentWindow);
						k = k || h;
						if (k.Element && k.Location) {
							var e = k;
							break a
						}
					} catch (t) { }
					e = null
				}
				if (e && "undefined" != typeof e.HTMLScriptElement && (!c || !(c instanceof e.HTMLScriptElement) && (c instanceof e.Location || c instanceof e.Element))) {
					e = typeof c;
					if ("object" == e && null != c || "function" == e) try {
						var d = c.constructor.displayName || c.constructor.name || Object.prototype.toString.call(c)
					} catch (t) {
						d = "<object could not be stringified>"
					} else d = void 0 === c ? "undefined" : null === c ? "null" : typeof c;
					v("Argument is not a %s (or a non-Element, non-Location mock); got: %s",
						"HTMLScriptElement", d)
				}
				a instanceof x && a.constructor === x ? d = a.g : (d = typeof a, v("expected object of type TrustedResourceUrl, got '" + a + "' of type " + ("object" != d ? d : a ? Array.isArray(a) ? "array" : d : "null")), d = "type_error:TrustedResourceUrl");
				c.src = d;
				(d = c.ownerDocument && c.ownerDocument.defaultView) && d != h ? d = n(d.document) : (null === m && (m = n(h.document)), d = m);
				d && c.setAttribute("nonce", d);
				z(c)
			}

			function _loadCss(a) {
				var b = document.createElement("link");
				b.type = "text/css";
				b.rel = "stylesheet";
				b.charset = "UTF-8";
				b.href = a;
				z(b)
			}

			function _isNS(a) {
				a = a.split(".");
				for (var b = window, c = 0; c < a.length; ++c)
					if (!(b = b[a[c]])) return !1;
				return !0
			}

			function _setupNS(a) {
				a = a.split(".");
				for (var b = window, c = 0; c < a.length; ++c) b.hasOwnProperty ? b.hasOwnProperty(a[c]) ? b = b[a[c]] : b = b[a[c]] = {} : b = b[a[c]] || (b[a[c]] = {});
				return b
			}
			window.addEventListener && "undefined" == typeof document.readyState && window.addEventListener("DOMContentLoaded", function () {
				document.readyState = "complete"
			}, !1);
			if (_isNS('google.translate.Element')) {
				return
			} (function () {
				var c = _setupNS('google.translate._const');
				c._cest = gtConstEvalStartTime;
				gtConstEvalStartTime = undefined;
				c._cl = 'en';
				c._cuc = 'googleTranslateElementInit';
				c._cac = '';
				c._cam = '';
				c._ctkk = '449532.3786053938';
				var h = 'translate.googleapis.com';
				var s = (true ? 'https' : window.location.protocol == 'https:' ? 'https' : 'http') + '://';
				var b = s + h;
				c._pah = h;
				c._pas = s;
				c._pbi = b + '/translate_static/img/te_bk.gif';
				c._pci = b + '/translate_static/img/te_ctrl3.gif';
				c._pli = b + '/translate_static/img/loading.gif';
				c._plla = h + '/translate_a/l';
				c._pmi = b + '/translate_static/img/mini_google.png';
				c._ps = b + '/translate_static/css/translateelement.css';
				c._puh = 'translate.google.com';
				_loadCss(c._ps);
				_loadJs(b + '/translate_static/js/element/main.js');
			})();
		})();
	</script>
	<!-- End Language Converter -->









	<!-- Including Jquery -->
	<script src="assets/js/vendor/jquery-min.js"></script>
	<script src="assets/js/vendor/js.cookie.js"></script>
	<!--Including Javascript-->
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/main.js"></script>
	<!--Newsletter Popup Cookies-->
	<script>
		function newsletter_popup() {
			var cookieSignup = "cookieSignup", date = new Date();
			if ($.cookie(cookieSignup) != 'true' && window.location.href.indexOf("challenge#newsletter-modal") <= -1) {
				setTimeout(function () {
					$.magnificPopup.open({
						items: {
							src: '#newsletter-modal'
						}
						, type: 'inline', removalDelay: 300, mainClass: 'mfp-zoom-in'
					}
					);
				}
					, 5000);
			}
			$.magnificPopup.instance.close = function () {
				if ($("#dontshow").prop("checked") == true) {
					$.cookie(cookieSignup, 'true', {
						expires: 1, path: '/'
					}
					);
				}
				$.magnificPopup.proto.close.call(this);
			}
		}
		newsletter_popup();
	</script>
</body>

</html>
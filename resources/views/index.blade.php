@extends('layouts.main')

@section('content')
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<!-- Home -->

	<div class="home">

		<!-- Home Slider -->

		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/home_slider_background.jpg)"></div>
					<div class="home_slider_content text-center">
						<div class="cross_1 d-flex flex-column align-items-center justify-content-center"><img src="images/cross_1.png" alt=""></div>
						<h1>God is all around us</h1>
						<div class="button home_slider_button"><a href="#">Come and join us</a></div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/home_slider_background.jpg)"></div>
					<div class="home_slider_content text-center">
						<div class="cross_1 d-flex flex-column align-items-center justify-content-center"><img src="images/cross_1.png" alt=""></div>
						<h1>God is all around us</h1>
						<div class="button home_slider_button"><a href="#">Come and join us</a></div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/home_slider_background.jpg)"></div>
					<div class="home_slider_content text-center">
						<div class="cross_1 d-flex flex-column align-items-center justify-content-center"><img src="images/cross_1.png" alt=""></div>
						<h1>God is all around us</h1>
						<div class="button home_slider_button"><a href="#">Come and join us</a></div>
					</div>
				</div>

			</div>

			<div class="home_slider_nav d-flex flex-column align-items-center justify-content-center"><img src="images/arrow_r.png" alt=""></div>
		</div>
	</div>

	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container">
						<div class="section_image"><img src="images/church_1.png" alt=""></div>
						<div class="section_title"><h2>Welcome to Our Church</h2></div>
						<div class="section_subtitle">God loves us all</div>
					</div>
				</div>
			</div>
			<div class="row intro_content">

				<!-- Intro Text -->
				<div class="col-lg-6">
					<div class="intro_text">
						<p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada feugiat. Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Fusce venenatis diam urna, eu pharetra arcu varius ac. Etiam cursus turpis lectus, id iaculis risus tempor id. Phasellus fringilla nisl sed sem scelerisque, eget aliquam magna vehicula.nteger nec bibendum lacus.</p>
						<div class="button intro_button"><a href="#">Read More</a></div>
					</div>
				</div>

				<!-- Intro Image -->

				<div class="col-lg-6">
					<div class="intro_image"><iframe width="560" height="315" src="https://www.youtube.com/embed/SZ7GasMDTuk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Services -->

	<div class="services">
		<div class="services_background parallax-window" data-parallax="scroll" data-image-src="images/services.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container">
						<div class="section_image"><img src="images/church_2.png" alt=""></div>
						<div class="section_title"><h2>Our Church main activities</h2></div>
						<div class="section_subtitle">God loves us all</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="services_text text-center"><p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada feugiat. Praesent malesuada congue magna at finibus. In hac habi tasse platea dictumst. Curabitur rhoncus auctor eleifend. Fusce venenatis diam urna, eu pharetra arcu varius ac.</p></div>
				</div>
			</div>
			<div class="row services_row">

				<!-- Services Item -->
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="services_item text-center">
						<div class="services_image"><img src="images/services_1.png" alt=""></div>
						<div class="services_title">Teaching</div>
					</div>
				</div>

				<!-- Services Item -->
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="services_item text-center">
						<div class="services_image"><img src="images/services_2.png" alt=""></div>
						<div class="services_title">Communion</div>
					</div>
				</div>

				<!-- Services Item -->
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="services_item text-center">
						<div class="services_image"><img src="images/services_3.png" alt=""></div>
						<div class="services_title">Confessions</div>
					</div>
				</div>

				<!-- Services Item -->
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="services_item text-center">
						<div class="services_image"><img src="images/services_4.png" alt=""></div>
						<div class="services_title">Sermons</div>
					</div>
				</div>

				<!-- Services Item -->
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="services_item text-center">
						<div class="services_image"><img src="images/services_5.png" alt=""></div>
						<div class="services_title">Daily Mass</div>
					</div>
				</div>

				<!-- Services Item -->
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="services_item text-center">
						<div class="services_image"><img src="images/services_6.png" alt=""></div>
						<div class="services_title">Daily Prayers</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Sermon -->

	<div class="sermon">
		<div class="sermon_background" style="background-image:url(images/sermon.png)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container">
						<div class="section_image"><img src="images/church_3.png" alt=""></div>
						<div class="section_title"><h2>Today's Sermon</h2></div>
						<div class="section_subtitle">God loves us all</div>
					</div>
				</div>
			</div>
			<div class="row sermon_row">

				<!-- Sermon Image -->
				<div class="col-lg-6">
					<div class="sermon_image"><img src="images/sermon_image.jpg" alt=""></div>
				</div>

				<!-- Sermon Content -->
				<div class="col-lg-6">
					<div class="sermon_content">
						<div class="sermon_title">Receive The Holy Spirit By Jesus Christ</div>
						<ul class="sermon_list">
							<li>Sermon by: <a href="#">Priest Jack Smith</a></li>
							<li>Categories: <a href="#">Jesus Christ</a>, <a href="#">Holy</a></li>
							<li>Date: <a href="#">Monday 11 March, 2018</a></li>
						</ul>
						<div class="sermon_text">
							<p>Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Fusce venenatis diam urna, eu pharetra arcu varius ac. Etiam cursus turpis lectus, id iaculis risus tempor id. Phasellus fringilla nisl sed sem scelerisque, eget aliquam magna vehicula.nteger nec bibendum lacus.</p>
						</div>
						<div class="button sermon_button"><a href="sermons.blade.php">Read More</a></div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Causes -->

	<div class="causes">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container">
						<div class="section_image"><img src="images/church_4.png" alt=""></div>
						<div class="section_title"><h2>Our Church's Causes</h2></div>
						<div class="section_subtitle">God loves us all</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="causes_slider_container">

						<!-- Causes Slider -->
						<div class="owl-carousel owl-theme causes_slider">

							<!-- Causes Slider Item -->
							<div class="owl-item text-center causes_item">
								<div class="causes_item_image"><img src="images/causes_1.jpg" alt=""></div>
								<div class="causes_item_title">Children's aid</div>
								<div class="causes_item_text">
									<p>Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst.</p>
								</div>
							</div>

							<!-- Causes Slider Item -->
							<div class="owl-item text-center causes_item">
								<div class="causes_item_image"><img src="images/causes_2.jpg" alt=""></div>
								<div class="causes_item_title">Aid for the Elderly</div>
								<div class="causes_item_text">
									<p>Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst.</p>
								</div>
							</div>

							<!-- Causes Slider Item -->
							<div class="owl-item text-center causes_item">
								<div class="causes_item_image"><img src="images/causes_3.jpg" alt=""></div>
								<div class="causes_item_title">Community Food</div>
								<div class="causes_item_text">
									<p>Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst.</p>
								</div>
							</div>

							<!-- Causes Slider Item -->
							<div class="owl-item text-center causes_item">
								<div class="causes_item_image"><img src="images/causes_4.jpg" alt=""></div>
								<div class="causes_item_title">After School</div>
								<div class="causes_item_text">
									<p>Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst.</p>
								</div>
							</div>

						</div>

						<div class="causes_slider_nav causes_slider_prev trans_200 d-flex flex-column align-items-center justify-content-center"><img src="images/arrow_l.png" alt=""></div>
						<div class="causes_slider_nav causes_slider_next trans_200 d-flex flex-column align-items-center justify-content-center"><img src="images/arrow_r.png" alt=""></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Quote -->

	<div class="quote">
		<div class="quote_background parallax-window" data-parallax="scroll" data-image-src="images/quote.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container">
						<div class="section_image"><img src="images/church_5.png" alt=""></div>
						<div class="section_title"><h2>Quote of the day</h2></div>
						<div class="section_subtitle">God loves us all</div>
					</div>
				</div>
			</div>
			<div class="row quote_row">
				<div class="col text-center">
					<div class="quote_char"><img src="images/quote_char.png" alt=""></div>
					<div class="quote_text">4 One thing I ask from the LORD, this only do I seek: that I may dwell in the house of the LORD all the days of my life, to gaze on the beauty of the LORD and to seek him in his temple.</div>
					<div class="quote_source">Psalm 27:4</div>
				</div>
			</div>
		</div>
	</div>

	<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container">
						<div class="section_image"><img src="images/church_6.png" alt=""></div>
						<div class="section_title"><h2>Latest News</h2></div>
						<div class="section_subtitle">God loves us all</div>
					</div>
				</div>
			</div>
			<div class="row news_row">

				<!-- News Item -->
				<div class="col-lg-4 news_col">
					<div class="news_item">
						<div class="news_image">
							<img src="images/news_1.jpg" alt="">
							<div class="news_date d-flex flex-column align-items-center justify-content-center">
								<div class="news_day">06</div>
								<div class="news_month">March, 2018</div>
							</div>
						</div>
						<div class="news_content">
							<div class="news_title">Latest news in the '18 community</div>
							<div class="news_text">
								<p>Praesent malesuada congue magna at finibus. In hac habitasse platea dic tumst malesuada congue magna at finibus. In hac habitasse platea.</p>
							</div>
							<div class="news_link"><a href="blog.html">Read More</a></div>
						</div>
					</div>
				</div>

				<!-- News Item -->
				<div class="col-lg-4 news_col">
					<div class="news_item">
						<div class="news_image">
							<img src="images/news_2.jpg" alt="">
							<div class="news_date d-flex flex-column align-items-center justify-content-center">
								<div class="news_day">05</div>
								<div class="news_month">March, 2018</div>
							</div>
						</div>
						<div class="news_content">
							<div class="news_title">Help us raise money for the kids</div>
							<div class="news_text">
								<p>Praesent malesuada congue magna at finibus. In hac habitasse platea dic tumst malesuada congue magna at finibus. In hac habitasse platea.</p>
							</div>
							<div class="news_link"><a href="blog.html">Read More</a></div>
						</div>
					</div>
				</div>

				<!-- News Item -->
				<div class="col-lg-4 news_col">
					<div class="news_item">
						<div class="news_image">
							<img src="images/news_3.jpg" alt="">
							<div class="news_date d-flex flex-column align-items-center justify-content-center">
								<div class="news_day">03</div>
								<div class="news_month">March, 2018</div>
							</div>
						</div>
						<div class="news_content">
							<div class="news_title">The best way to pray</div>
							<div class="news_text">
								<p>Praesent malesuada congue magna at finibus. In hac habitasse platea dic tumst malesuada congue magna at finibus. In hac habitasse platea.</p>
							</div>
							<div class="news_link"><a href="blog.html">Read More</a></div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Newsletter -->



	<!-- Footer -->

@endsection

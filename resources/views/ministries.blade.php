@extends('layouts.main')

@section('content')
    <link rel="stylesheet" type="text/css" href="styles/ministries.css">
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/ministries.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_container">
						<div class="home_content d-flex flex-row align-items-center justify-content-start">
							<div class="home_title">Ministries</div>
							<div class="home_breadcrumbs ml-auto">
								<ul class="breadcrumbs">
									<li><a href="index.blade.php">Home</a></li>
									<li>Ministries</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Ministries -->

	<div class="ministries">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container">
						<div class="section_image"><img src="images/church_1.png" alt=""></div>
						<div class="section_title"><h2>Our Ministries</h2></div>
						<div class="section_subtitle">God loves us all</div>
					</div>
				</div>
			</div>
			<div class="row ministries_row">

				<!-- Ministry Item -->
				<div class="col-xl-4 col-md-6">
					<div class="ministry">
						<div class="ministry_image"><img src="images/ministries_1.jpg" alt="https://unsplash.com/@davidbeale"></div>
						<div class="ministry_title">Children's Ministry</div>
						<div class="ministry_text">
							<p>Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Fusce venenatis diam urna, eu pharetra arcu varius ac. Etiam cursus turpis lectus, id iaculis risus tempor id.</p>
						</div>
						<div class="button ministry_button"><a href="#">Read More</a></div>
					</div>
				</div>

				<!-- Ministry Item -->
				<div class="col-xl-4 col-md-6">
					<div class="ministry">
						<div class="ministry_image"><img src="images/ministries_2.jpg" alt="https://unsplash.com/@tanjaheffner"></div>
						<div class="ministry_title">Women's Ministry</div>
						<div class="ministry_text">
							<p>Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Fusce venenatis diam urna, eu pharetra arcu varius ac. Etiam cursus turpis lectus, id iaculis risus tempor id.</p>
						</div>
						<div class="button ministry_button"><a href="#">Read More</a></div>
					</div>
				</div>

				<!-- Ministry Item -->
				<div class="col-xl-4 col-md-6">
					<div class="ministry">
						<div class="ministry_image"><img src="images/ministries_3.jpg" alt="https://unsplash.com/@taylor_grote"></div>
						<div class="ministry_title">Men's Ministry</div>
						<div class="ministry_text">
							<p>Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Fusce venenatis diam urna, eu pharetra arcu varius ac. Etiam cursus turpis lectus, id iaculis risus tempor id.</p>
						</div>
						<div class="button ministry_button"><a href="#">Read More</a></div>
					</div>
				</div>

				<!-- Ministry Item -->
				<div class="col-xl-4 col-md-6">
					<div class="ministry">
						<div class="ministry_image"><img src="images/ministries_4.jpg" alt="https://unsplash.com/@brookecagle"></div>
						<div class="ministry_title">Youth's Ministry</div>
						<div class="ministry_text">
							<p>Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Fusce venenatis diam urna, eu pharetra arcu varius ac. Etiam cursus turpis lectus, id iaculis risus tempor id.</p>
						</div>
						<div class="button ministry_button"><a href="#">Read More</a></div>
					</div>
				</div>

				<!-- Ministry Item -->
				<div class="col-xl-4 col-md-6">
					<div class="ministry">
						<div class="ministry_image"><img src="images/ministries_5.jpg" alt="https://unsplash.com/@benwhitephotography"></div>
						<div class="ministry_title">Women's Ministry</div>
						<div class="ministry_text">
							<p>Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Fusce venenatis diam urna, eu pharetra arcu varius ac. Etiam cursus turpis lectus, id iaculis risus tempor id.</p>
						</div>
						<div class="button ministry_button"><a href="#">Read More</a></div>
					</div>
				</div>

				<!-- Ministry Item -->
				<div class="col-xl-4 col-md-6">
					<div class="ministry">
						<div class="ministry_image"><img src="images/ministries_6.jpg" alt="https://unsplash.com/@steve228uk"></div>
						<div class="ministry_title">Men's Ministry</div>
						<div class="ministry_text">
							<p>Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Fusce venenatis diam urna, eu pharetra arcu varius ac. Etiam cursus turpis lectus, id iaculis risus tempor id.</p>
						</div>
						<div class="button ministry_button"><a href="#">Read More</a></div>
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

	<!-- Pastors -->

	<div class="pastors">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container">
						<div class="section_image"><img src="images/church_4.png" alt=""></div>
						<div class="section_title"><h2>Our Pastors</h2></div>
						<div class="section_subtitle">God loves us all</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="pastors_slider_container">

						<!-- Causes Slider -->
						<div class="owl-carousel owl-theme pastors_slider">

							<!-- Pastors Slider Item -->
							<div class="owl-item text-center pastors_item">
								<div class="pastors_item_image"><img src="images/pastor_1.jpg" alt=""></div>
								<div class="pastors_item_title">Michael Miths</div>
								<div class="pastors_item_text">Lead Pastor</div>
							</div>

							<!-- Pastors Slider Item -->
							<div class="owl-item text-center pastors_item">
								<div class="pastors_item_image"><img src="images/pastor_2.jpg" alt=""></div>
								<div class="pastors_item_title">William Jersy</div>
								<div class="pastors_item_text">Pastor</div>
							</div>

							<!-- Pastors Slider Item -->
							<div class="owl-item text-center pastors_item">
								<div class="pastors_item_image"><img src="images/pastor_3.jpg" alt=""></div>
								<div class="pastors_item_title">Carl B. Oven</div>
								<div class="pastors_item_text">Pastor</div>
							</div>

							<!-- Pastors Slider Item -->
							<div class="owl-item text-center pastors_item">
								<div class="pastors_item_image"><img src="images/pastor_4.jpg" alt=""></div>
								<div class="pastors_item_title">Julius Smith</div>
								<div class="pastors_item_text">Pastor</div>
							</div>

						</div>

						<div class="pastors_slider_nav pastors_slider_prev trans_200 d-flex flex-column align-items-center justify-content-center"><img src="images/arrow_l.png" alt=""></div>
						<div class="pastors_slider_nav pastors_slider_next trans_200 d-flex flex-column align-items-center justify-content-center"><img src="images/arrow_r.png" alt=""></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<!-- Footer -->

	@endsection

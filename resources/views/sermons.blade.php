@extends('layouts.main')

@section('content')
    <link rel="stylesheet" type="text/css" href="styles/sermons.css">
    <link rel="stylesheet" type="text/css" href="styles/sermons_responsive.css">
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/sermons.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_container">
						<div class="home_content d-flex flex-row align-items-center justify-content-start">
							<div class="home_title">Sermons</div>
							<div class="home_breadcrumbs ml-auto">
								<ul class="breadcrumbs">
									<li><a href="index.blade.php">Home</a></li>
									<li>Sermons</li>
								</ul>
							</div>
						</div>
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
						<div class="sermon_title"><a href="sermon_single.html">Receive The Holy Spirit By Jesus Christ</a></div>
						<ul class="sermon_list">
							<li>Sermon by: <a href="#">Priest Jack Smith</a></li>
							<li>Categories: <a href="#">Jesus Christ</a>, <a href="#">Holy</a></li>
							<li>Date: <a href="#">Monday 11 March, 2018</a></li>
						</ul>
						<div class="sermon_text">
							<p>Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Fusce venenatis diam urna, eu pharetra arcu varius ac. Etiam cursus turpis lectus, id iaculis risus tempor id. Phasellus fringilla nisl sed sem scelerisque, eget aliquam magna vehicula.nteger nec bibendum lacus.</p>
						</div>
						<div class="true_img">
              <img src="{{ asset('images/image_3.jpg')}}" style="padding-top: 16px;" alt="">
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Popular -->

	<div class="popular">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container">
						<div class="section_image"><img src="images/church_7.png" alt=""></div>
						<div class="section_title"><h2>Popular Sermons</h2></div>
						<div class="section_subtitle">God loves us all</div>
					</div>
				</div>
			</div>
			<div class="row popular_row">

				<!-- Popular Sermon -->
				<div class="col-lg-6">
					<div class="popular_item">
						<div class="popular_image"><img src="images/popular_1.jpg" alt="https://unsplash.com/@joshapplegate"></div>
						<div class="sermon_content">
							<div class="sermon_title"><a href="sermon_single.html">Receive The Holy Spirit By Jesus Christ</a></div>
							<ul class="sermon_list">
								<li>Sermon by: <a href="#">Priest Jack Smith</a></li>
								<li>Categories: <a href="#">Jesus Christ</a>, <a href="#">Holy</a></li>
								<li>Date: <a href="#">Monday 11 March, 2018</a></li>
							</ul>
							<div class="sermon_text">
								<p>Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Fusce venenatis diam urna, eu pharetra arcu varius ac. Etiam cursus turpis lectus, id iaculis risus tempor id. Phasellus fringilla nisl sed sem scelerisque, eget aliquam magna vehicula.nteger nec bibendum lacus.</p>
							</div>
							<div class="sermon_buttons">
								<ul>
									<li class="sermon_item"><img class="svg" src="images/sermon_1.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_2.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_3.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_4.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_5.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_6.svg" alt=""></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Popular Sermon -->
				<div class="col-lg-6">
					<div class="popular_item">
						<div class="popular_image"><img src="images/popular_2.jpg" alt="https://unsplash.com/@joshapplegate"></div>
						<div class="sermon_content">
							<div class="sermon_title"><a href="sermon_single.html">Receive The Holy Spirit By Jesus Christ</a></div>
							<ul class="sermon_list">
								<li>Sermon by: <a href="#">Priest Jack Smith</a></li>
								<li>Categories: <a href="#">Jesus Christ</a>, <a href="#">Holy</a></li>
								<li>Date: <a href="#">Monday 11 March, 2018</a></li>
							</ul>
							<div class="sermon_text">
								<p>Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Fusce venenatis diam urna, eu pharetra arcu varius ac. Etiam cursus turpis lectus, id iaculis risus tempor id. Phasellus fringilla nisl sed sem scelerisque, eget aliquam magna vehicula.nteger nec bibendum lacus.</p>
							</div>
							<div class="sermon_buttons">
								<ul>
									<li class="sermon_item"><img class="svg" src="images/sermon_1.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_2.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_3.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_4.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_5.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_6.svg" alt=""></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Popular Sermon -->
				<div class="col-lg-6">
					<div class="popular_item">
						<div class="popular_image"><img src="images/popular_3.jpg" alt="https://unsplash.com/@joshapplegate"></div>
						<div class="sermon_content">
							<div class="sermon_title"><a href="sermon_single.html">Receive The Holy Spirit By Jesus Christ</a></div>
							<ul class="sermon_list">
								<li>Sermon by: <a href="#">Priest Jack Smith</a></li>
								<li>Categories: <a href="#">Jesus Christ</a>, <a href="#">Holy</a></li>
								<li>Date: <a href="#">Monday 11 March, 2018</a></li>
							</ul>
							<div class="sermon_text">
								<p>Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Fusce venenatis diam urna, eu pharetra arcu varius ac. Etiam cursus turpis lectus, id iaculis risus tempor id. Phasellus fringilla nisl sed sem scelerisque, eget aliquam magna vehicula.nteger nec bibendum lacus.</p>
							</div>
							<div class="sermon_buttons">
								<ul>
									<li class="sermon_item"><img class="svg" src="images/sermon_1.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_2.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_3.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_4.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_5.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_6.svg" alt=""></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Popular Sermon -->
				<div class="col-lg-6">
					<div class="popular_item">
						<div class="popular_image"><img src="images/popular_4.jpg" alt="https://unsplash.com/@knixon"></div>
						<div class="sermon_content">
							<div class="sermon_title"><a href="sermon_single.html">Receive The Holy Spirit By Jesus Christ</a></div>
							<ul class="sermon_list">
								<li>Sermon by: <a href="#">Priest Jack Smith</a></li>
								<li>Categories: <a href="#">Jesus Christ</a>, <a href="#">Holy</a></li>
								<li>Date: <a href="#">Monday 11 March, 2018</a></li>
							</ul>
							<div class="sermon_text">
								<p>Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Fusce venenatis diam urna, eu pharetra arcu varius ac. Etiam cursus turpis lectus, id iaculis risus tempor id. Phasellus fringilla nisl sed sem scelerisque, eget aliquam magna vehicula.nteger nec bibendum lacus.</p>
							</div>
							<div class="sermon_buttons">
								<ul>
									<li class="sermon_item"><img class="svg" src="images/sermon_1.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_2.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_3.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_4.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_5.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_6.svg" alt=""></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Featured -->

	<div class="featured">
		<div class="container-fluid">
			<div class="row">

				<!-- Featured 1 -->
				<div class="col-lg-6 featured_col">
					<div class="featured_background parallax-window" data-parallax="scroll" data-image-src="images/featured_1.jpg" data-speed="0.8"></div>
					<div class="featured_1">
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
							<div class="sermon_buttons">
								<ul>
									<li class="sermon_item"><img class="svg" src="images/sermon_1.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_2.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_3.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_4.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_5.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_6.svg" alt=""></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Featured 2 -->
				<div class="col-lg-6 featured_col_2">
					<div class="featured_background parallax-window" data-parallax="scroll" data-image-src="images/featured_2.jpg" data-speed="0.8"></div>
					<div class="featured_2">
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
							<div class="sermon_buttons">
								<ul>
									<li class="sermon_item"><img class="svg" src="images/sermon_1.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_2.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_3.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_4.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_5.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_6.svg" alt=""></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<!-- Footer -->

	@endsection

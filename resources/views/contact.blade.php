@extends('layouts.main')

@section('content')
    <link rel="stylesheet" type="text/css" href="styles/contact.css">
    <link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_container">
						<div class="home_content d-flex flex-row align-items-center justify-content-start">
							<div class="home_title">Contact</div>
							<div class="home_breadcrumbs ml-auto">
								<ul class="breadcrumbs">
									<li><a href="index.blade.php">Home</a></li>
									<li>Contact</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact Map -->

	<div class="contact_map">

		<!-- Google Map -->

		<div class="map">
			<div id="google_map" class="google_map">
				<div class="map_container">
					<div id="map"></div>
				</div>
			</div>
		</div>

	</div>

	<!-- Contact Info -->

	<div class="contact_info">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="contact_title">Contact Info</div>
				</div>
			</div>
			<div class="row contact_info_row row-eq-height">

				<!-- Contact Info Content -->
				<!-- <div class="col-lg-6 d-flex flex-column align-items-start justify-content-end"> -->
					<div class="row">
						<div class="col-lg-4 contact_info_col">
							<ul class="contact_info_list">
								<li><span>Address: </span>Ebenezer Plaza NTA road Mbguoba. Opposite NTA complex Port Harcourt Rivers State. Nigeria.</li>
								<li class="footer_contact_phone">
									<span>Phone: </span>
									<div>
										<div> +234 809 806 5420</div>
										<div> +234 803 375 6888</div>
									</div>
								</li>
								<li><span>Email: </span>info@gospelwealthembassy.com</li>
								<li><span>Email: </span>contact@gospelwealthembassy.com</li>
							</ul>
						</div>

				<!-- Contact Info Image -->
				<div class="col-lg-8">
					<div class="contact_info_image"><img src="images/contact_image.jpg" alt=""></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact Form -->

	<div class="contact_form_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="contact_title">Contact Us</div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
					<form action="{{ url('contact')}}" method="POST" class="contact_form">
                        @csrf

						<div class="row">
							<div class="col-md-6">
								<input type="text" name="name" class="contact_input contacts_input_name" placeholder="Your Name" required="required">
							</div>
							<div class="col-md-6">
								<input type="email" name="email" class="contact_input contact_input_email" placeholder="Your E-mail" required="required">
							</div>
						</div>
						<textarea id="contact_text_area" name="message" placeholder="Your Message" class="contact_text"></textarea>
						<button class="contact_button trans_200">Submit</button>
					</form>
				</div>
			</div>
			<div class="row">

			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<!-- Footer -->

	@endsection
